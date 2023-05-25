@extends('user.layouts')

@section('content')
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">
    </div>
    <div>
        <label for="detail">Detail:</label>
        <textarea name="detail">{{ $product->detail }}</textarea>
    </div>
    <button type="submit">Update</button>
</form>
@endsection
