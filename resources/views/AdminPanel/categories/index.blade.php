@extends('AdminPanel.layouts.master')
@section('title')
{{ $title ? $title : 'Memo Store'}}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-10 offset-1">
            @if ($errors->any())
            <div class="mt-2">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    @include('AdminPanel.layouts.common.breadcrumbs')
                </div>
                <div class="content-header-right text-md-end col-md-6 col-12 d-md-block d-none">
                    <div class="mt-3 d-flex justify-content-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Add Category
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">
                                            Create New Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ route('category.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <div>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" id="name" value="{{ old('name') }}">
                                                    @error('name')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="col-form-label @error('description') is-invalid @enderror">Description</label>
                                                <div>
                                                    <textarea class="form-control" id="description" rows="3"
                                                        name="description">{{ old('description') }}</textarea>
                                                        @error('description')
                                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                                    <option selected disabled>--choose status--</option>
                                                    <option value="active">active</option>
                                                    <option value="archived">archived</option>
                                                </select>
                                                @error('status')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                                <label class="custom-file-label" for="image">Upload Image...</label>
                                                @error('image')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @forelse ($categories as $category)
                    <tr>
                        <th id="row_{{ $category->id }}">{{ $i++ }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <img src="{{ $category->photoLink() }}" alt="image" class="rounded" width="80px">
                        </td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <a href="{{ route('category.update', $category->id) }}" class="btn btn-outline-info">Edit</a>
                            <button class="btn btn-outline-danger" onclick="deleteCategory({{ $category->id }})">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">No data</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $categories->links('AdminPanel.vendor.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
