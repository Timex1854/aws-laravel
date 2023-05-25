@extends('user.layouts')

@section('content')




<main>
    <div class="container py-4">

      <div class="p-3 mb-4 bg-dark rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Produse</h1>
          <p class="col-md-12 fs-4">Aceste produse au capacitatea de a va schimba viata</p>

        </div>
      </div>

      <div class="row align-items-md-stretch">

        @foreach ( $products as $product)

        <div class="col-md-6" style="margin-bottom: 20px">
          <div class="h-100 p-5 text-bg-light rounded-3">
            <h2>{{$product->name}}</h2>
            <p>{{$product->detail}}</p>
            <div class="container">
            <a href="{{ route('products.show',$product->id) }}">
            <img class="img-fluid" alt="Responsive image" src="{{asset('storage/images/products/'.$product->image)}}" alt="">
            </a>
        </div>

          </div>
        </div>


        @endforeach


      </div>


    </div>
  </main>



@endsection
