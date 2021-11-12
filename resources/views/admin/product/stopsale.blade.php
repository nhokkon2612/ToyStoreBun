@extends('admin.dashboard')
@section('title','Quản lý sản phẩm')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sản phẩm đã ngừng kinh doanh (tạm thời)</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tất cả đồ chơi đang ngừng kinh doanh </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Trạng thái</th>
                            <th> Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Tổng nhập (chiếc/bộ)</th>
                            <th>Còn trong kho (chiếc/bộ)</th>
                            <th>Giá nhập</th>
                            <th>Giá bán</th>
                            <th>Ngày nhập</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Nhà cung cấp</th>
                            <th>Thương hiệu</th>
                            <th>Thể loai</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $key=> $product)
                            <tr>
                                <td>Ngừng kinh doanh</td>
                                <td>
                                    <a href="{{route('admin.product.detail',$product->id)}}">{{$product->name}}</a>
                                </td>
                                <td><img src="{{asset('images/'.$product->image)}}" alt=""
                                         style="height: 100px ; width: 100px"></td>
                                <td>{{$product->quantity1}}</td>
                                <td>{{$product->quantity2}}</td>
                                <td>{{$product->cost}} VND</td>
                                <td>{{$product->price}} VND</td>
                                <td>{{$product->date_import}}</td>
                                <td>{{$product->status}}</td>
                                <td>{{$product->supplier->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>
                                    <a class="btn btn-warning btn-circle btn-lg"
                                       href="{{route('admin.product.edit',$product->id)}}">
                                        <i class="fas fa-wrench"></i>
                                    </a>
                                    <br>
                                    <button type="button"
                                            class="btn btn-success btn-circle btn-lg button delete-product-confirm"
                                            href="{{route('admin.product.delete',$product->id)}}" data-toggle="modal"
                                            data-target="#stopsale{{$product->id}}">
                                        <i class="fas fa-clipboard-check"></i>
                                    </button>

                                    {{--modal ngung ban 1 san pham--}}
                                    <div class="modal" id="stopsale{{$product->id}}">
                                        <div class="modal-dialog  modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <b1 class="text-center font-weight-bold"> Tái kinh doanh mặt
                                                        hàng
                                                    </b1>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <div>
                                                                <h4>Sản phẩm : {{$product->name}}</h4>
                                                            </div>
                                                            <div>
                                                                <img src="{{asset('images/'.$product->image)}}" alt=""
                                                                     style="height: 600px; width: 500px ">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <div class="">
                                                                <div class="text-center">
                                                                    <a href="{{route('admin.product.resale',$product->id)}}"
                                                                       class="btn btn-success">Tái kinh doanh</a>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                            class="btn btn-danger btn-group-lg"
                                                                            data-dismiss="modal">Hủy
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{--modal ngung ban 1 san pham--}}
                                </td>
                            </tr>
                        @empty
                            <tr>Không có sảm phẩm</tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection
