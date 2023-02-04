@extends('AdminPanel.layouts.master')
@section('title')
    {{ $title ? $title : 'Memo Store'}}
@endsection
@section('content')
<div class="content-wrapper">
    {{-- breadcrumbs --}}
    {{-- @include('AdminPanel.layouts.common.breadcrumbs') --}}
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="content-header-left col-md-8 col-12 mb-2">
                    @include('AdminPanel.layouts.common.breadcrumbs')
                </div>
                <div class="content-header-right text-md-end col-md-4 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        @yield('page_buttons')
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="btn btn-outline-primary mb-2">Create</a>
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
                            <td colspan="5">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
