@extends('layout.app')

@section('title', 'Create Category')

@section('content')
<form class="card p-3" method="POST" action="{{route('category.store')}}">
    @csrf
    <h1 class="fw-bold text-center">Create Category</h1>
    <div class="mb-3">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="name" required placeholder="Electronics, book, fruite,...">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" placeholder="optional">
    </div>
    <div class="d-flex gap-2 w-100">
        <button type="submit" class="btn btn-primary w-50">Save</button>
        <a href="{{route('category.index')}}" class="btn btn-secondary w-50">Cancel</a>
    </div>
</form>
@endsection