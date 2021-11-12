
@extends('user.layout.master')
@section('title','Bun Store')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('user.layout.sidebar')
                {{--            Danh sach san pham--}}
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>


                        @foreach($products as $key=>$product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('images/'.$product->image)}}" alt="" style="height: 250px;width: 300px"/>
                                        <h2>{{number_format($product->price)}} VNĐ</h2>
                                        <p>{{$product->name}}</p>
                                        <a href="{{route('addToCart',$product->id)}}" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{ number_format($product->price)}} VNĐ</h2>
                                            <p>{{$product->name}}</p>
                                            <a href="{{route('addToCart',$product->id)}}" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <img src="images/home/new.png" class="new" alt=""/>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div><!--features_items-->


                </div>
                {{--            danh sach sann pham--}}


            </div>
        </div>
    </section>{{--Content --}}
@endsection

