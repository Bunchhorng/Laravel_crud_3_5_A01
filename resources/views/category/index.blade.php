@extends('layout.app')

@section('title', 'Category List')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="fw-bolder">category list</h1>
    <a href="{{route('category.create')}}" class="btn btn-primary">+Add New Category</a>
</div>
<table class="table text-center align-middle table-striped">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>ACTION</th>
    </tr>
    <tr>
        <td>098</td>
        <td>Fruite</td>
        <td>New stock</td>
        <td>
            <a href="{{route('category.edit')}}" class="btn btn-warning">EDIT</a>
            <a href="" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @foreach ($categories as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->description}}</td>
            <td>
                <a href="" class="btn btn-warning">EDIT</a>
                <a href="" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection