@extends('layouts.app')

@section('content')
    <h2>Product Catalog</h2>

    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $product)
                <div class="col-md-2 column productbox">
                    <img src="{{ $product->image_url }}" height="200">
                    <div class="producttitle">{{ $product->name }}</div>
                    <div class="productprice">
                        <div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">{{ $product->brand }}</a></div>
                        <div class="pricetext">{{ $product->price }}</div>
                    </div>
                </div>
            @endforeach
        @else
          <div class="col-md-2 column productbox">No products found</div>
        @endif
    </div>
@endsection