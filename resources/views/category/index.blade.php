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
    @foreach ($categories as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->description}}</td>
            <td class="d-flex justify-content-center gap-2">
                <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-warning">
                    EDIT
                </a>
                <form action="{{route('category.destroy', $cat->id)}}" method="POST"
                    onclick="return confirm('Are you sure to delete this category?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                    >DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{ $categories->links() }}

@endsection