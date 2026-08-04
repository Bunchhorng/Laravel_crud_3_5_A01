@extends('layout.app')

@section('title', 'Update Category')

@section('content')
<form class="card p-3" method="POST" action="{{route('category.update', $category->id)}}">
    @csrf
    @method('PUT')
    <h1 class="fw-bold text-center">Update Category</h1>
    <div class="mb-3">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="name" required value="{{$category->name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{$category->description}}">
    </div>
    <div class="d-flex gap-2 w-100">
        <button type="submit" class="btn btn-primary w-50">Update</button>
        <a href="{{route('category.index')}}" class="btn btn-secondary w-50">Cancel</a>
    </div>
</form>
@endsection