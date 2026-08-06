@extends('layout.app')

@section('title', 'Peoduct List')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="fw-bolder">Prodcut list</h1>
    <a href="{{route('product.create')}}" class="btn btn-primary">+Add New Category</a>
</div>
<table class="table text-center align-middle table-bordered">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>IMAGE</th>
        <th>ACTION</th>
    </tr>
    @foreach ($products as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->price}}</td>
            <td>{{$pro->Quantity}}</td>
            <td>
                <img src="{{ asset('storage/' . $pro->image) }}" width="50" height="50" alt="{{ $pro->name }}" class="object-fit-cover rounded">
            </td>
            <td class="d-flex justify-content-center gap-2 my-2">
                <a href="{{route('product.edit', $pro->id)}}" class="btn btn-warning">
                    EDIT
                </a>
                <form action="" method="POST"
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
{{ $products->links() }}

@endsection