@extends('layout.app')

@section('title', 'Create Product')

@section('content')
    <form class="card p-3" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <h1 class="fw-bold text-center">Create Product</h1>
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" required placeholder="Iphoon 16, Dell, Asus,...">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" placeholder="0.00">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Quantity</label>
            <input type="number" class="form-control" name="Quantity" placeholder="0">
        </div>
        <div class="mb-3">

            <div class="col-md-6 mb-3">
                <label for="category_id" class="form-label fw-semibold text-secondary">
                    Category <span class="text-danger">*</span>
                </label>
                <select name="category_id" class="form-select" required>
                    <option value="" selected disabled>-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" placeholder="0">
            </div>
            <div class="d-flex gap-2 w-100">
                <button type="submit" class="btn btn-primary w-50">Save</button>
                <a href="{{ route('product.index') }}" class="btn btn-secondary w-50">Cancel</a>
            </div>
    </form>
@endsection
