@extends('AdminPanel.layouts.master')
@section('title')
    {{ $title ? $title : 'Memo Store'}}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    @include('AdminPanel.layouts.common.breadcrumbs')
                </div>
                <div class="content-header-right text-md-end col-md-6 col-12 d-md-block d-none">
                    <div class="mt-3 d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                        Add Category
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                            <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword">
                                      </div>
                                    </div>
                                  </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
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
                        <td>{{ $category->image }}</td>
                        <td>{{ $category->status }}</td>
                        <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


