@extends('layout.app')

@section('title', 'Create Product')

@section('content')
    <form class="card p-3" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="fw-bold text-center">Create Product</h1>
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" required value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Quantity</label>
            <input type="number" class="form-control" name="Quantity" value="{{$product->Quantity}}">
        </div>
        <div class="mb-3">

            <div class="col-md-6 mb-3">
                <label for="category_id" class="form-label fw-semibold text-secondary">
                    Category <span class="text-danger">*</span>
                </label>
                <select name="category_id" class="form-select" required>
                    <option value="" disabled>-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Old Image</label>
                
                <img src="{{ asset('storage/' . $product->image) }}" width="60px" height="60px" alt="">
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
