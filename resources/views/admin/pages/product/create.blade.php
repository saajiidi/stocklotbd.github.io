@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-header">

            Add Products

            </div>

            <div class="card-bodey">


                        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" class="form-control" name="title" ></input>

                                </div>

                                <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="number" class="form-control" name="price" ></input>

                                </div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Quantity</label>
                                        <input type="number" class="form-control" name="quantity" ></input>

                                </div>


                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" class="form-control" name="product_image" >

                                </div>


                                      <button type="submit" class="btn btn-primary">Submit</button>


                              </form>






            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
</div>
      <!-- main-panel ends -->

@endsection
