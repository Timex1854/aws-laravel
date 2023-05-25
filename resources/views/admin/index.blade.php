

@extends('admin.layouts')

@section('content')

<div class="container d-flex justify-content-center">
<form action="{{ route('products.store') }}" method="POST" class="col-md-5"  enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nume:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalii:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="form-group mt-3 mb-4">
            <label for="exampleFormControlFile1">Alege imaginea produsului </label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
          </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

</div>

<div class="container">

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nume</th>
        <th scope="col">Detalii</th>
        <th scope="col">Actiuni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>

        <td>{{$product->name}}</td>
        <td>{{$product->detail}}</td>
        <td><a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a href="{{ route('products.edit', $product->id) }}"><input type="button" value="Edit"></a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>





@endsection
