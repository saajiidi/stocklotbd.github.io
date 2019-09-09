@extends('layouts.master')



@section('content')

<!-- strat  side-->


        <div class="container margin-top-20">
            <div class="row">
                <div class="col-md-4">
                        @include('partials.sidebar')

                </div>
                <div class="col-md-8">
                    <div class="widget">
                        <h3>All Products<h3>
                            <div class="row">
                                
                                @foreach($products as $product)
                                
                                
                                <div class="col-md-3">
                                    <div class="card">

                                    @php $i = 1; @endphp
                                        @foreach($product->images as $image)
                                            @if($i > 1)
                                          <img class="card-img-top featur-img" src="{{ asset('img/Products/'. '$image->image') }}" alt="Card image">
                                            @endif

                                            @php $i--; @endphp
                                        @endforeach
                                             <div class="card-body">
                                                <h4 class="card-title">
                                                 {{ $product->title }}
                                                </h4>
                                                <p class="card-text">Price: {{ $product->price}}</p>
                                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                              </div>

                                    </div>
                                </div>


                                @endforeach

                               
                            



                    </div>

                    <div class="widget">

                    </div>


                </div>
            </div>


        </div>

<!-- end side-->


@endsection
