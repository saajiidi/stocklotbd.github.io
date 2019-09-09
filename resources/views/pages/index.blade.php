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
                        <h3>Featured Products<h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                          <img class="card-img-top featur-img" src="{{ asset('img/Products/'. 'p.webp') }}" alt="Card image">
                                              <div class="card-body">
                                                <h4 class="card-title">Cloth</h4>
                                                <p class="card-text">Price: 400</p>
                                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                              </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                          <img class="card-img-top featur-img" src="{{ asset('img/Products/'. 'p.webp') }}" alt="Card image">
                                              <div class="card-body">
                                                <h4 class="card-title">Cloth</h4>
                                                <p class="card-text">Price: 400</p>
                                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                              </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                          <img class="card-img-top featur-img" src="{{ asset('img/Products/'. 'p.webp') }}" alt="Card image">
                                              <div class="card-body">
                                                <h4 class="card-title">Cloth</h4>
                                                <p class="card-text">Price: 400</p>
                                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                              </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                          <img class="card-img-top featur-img" src="{{ asset('img/Products/'. 'p.webp') }}" alt="Card image">
                                              <div class="card-body">
                                                <h4 class="card-title">Cloth</h4>
                                                <p class="card-text">Price: 400</p>
                                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                              </div>

                                    </div>
                                </div>
                            </div>
                            



                    </div>

                    <div class="widget">

                    </div>


                </div>
            </div>


        </div>

<!-- end side-->


@endsection
