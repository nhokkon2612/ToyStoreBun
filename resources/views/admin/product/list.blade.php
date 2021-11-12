@extends('admin.dashboard')
@section('title','Quản lý sản phẩm')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tất cả đồ chơi đang quản lý</h6>
                <div class="text-right">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Sản phẩm..."
                                   aria-label="Search" aria-describedby="basic-addon2" id="search-product-admin"
                                   name="search-product-admin">
                            <div class="input-group-append">
                                <span class="btn btn-primary" id="btn-search-admin">
                                    <i class="fas fa-search fa-sm"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="btn">
                    <button type="button" class="btn btn-lg btn-success" data-toggle="modal"
                            data-target="#AddNewProduct">Thêm mới sản phẩm
                    </button>

                    {{--modal thêm mới sản phẩm--}}
                    <div class="modal" id="AddNewProduct">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b1 class="text-center font-weight-bold">Thêm mới sản phẩm</b1>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('admin.product.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">Sản phẩm</label>
                                                    <input type="text" class="form-control" id="inputEmail4"
                                                           placeholder="Tên sản phẩm" name="name"
                                                           value="{{old('name')}}">
                                                    @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4">Giá nhập (VNĐ)</label>
                                                    <input type="text" class="form-control" id="inputPassword4"
                                                           placeholder="VNĐ" name="cost" value="{{old('cost')}}">
                                                    @error('cost')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4">Giá bán (VNĐ)</label>
                                                    <input type="text" class="form-control" id="inputPassword4"
                                                           placeholder="VNĐ" name="price" value="{{old('price')}}">
                                                    @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputAddress">Số lượng</label>
                                                    <input type="text" class="form-control" id="inputAddress"
                                                           placeholder="Chiếc/bộ" name="quantity"
                                                           value="{{old('quantity')}}">
                                                    @error('quantity')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputAddress2">Kích cỡ</label>
                                                    <input type="text" class="form-control" id="inputAddress2"
                                                           placeholder="20*20*10" name="size" value="{{old('size')}}">
                                                    @error('size')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputAddress2">Khối lương(gram)</label>
                                                    <input type="text" class="form-control" id="inputAddress2"
                                                           placeholder="250 Gram" name="weight"
                                                           value="{{old('weight')}}">
                                                    @error('weight')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Mô tả sản phẩm</label>
                                                <textarea name="status" id="" cols="110" rows="10" class="form-group"
                                                          placeholder="Nhập mô tả...."></textarea>
                                                @error('status')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputCity">Nhà cung cấp</label>
                                                    <select name="supplier_id" class="form-control">
                                                        @forelse($suppliers as $supplier)
                                                            <option
                                                                value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                        @empty
                                                            <option value="Chưa rõ nguồn ">Chưa rõ nguồn</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputCity">Thương hiệu</label>
                                                    <select name="brand_id" id="" class="form-control">
                                                        @forelse($brands as $brand)
                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @empty
                                                            <option value="Chưa thương hiệu ">Chưa thương hiệu</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputCity">Thể loại</label>
                                                    <select name="category_id" id="" class="form-control">
                                                        @forelse($categories as $category)
                                                            <option
                                                                value="{{$category->id}}">{{$category->name}}</option>
                                                        @empty
                                                            <option value="Chưa rõ nguồn ">Chưa thể loại</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputCity">Chất liệu</label>
                                                    <select name="material_id" id="" class="form-control">
                                                        @forelse($materials as $material)
                                                            <option
                                                                value="{{$material->id}}">{{$material->name}}</option>
                                                        @empty
                                                            <option value="Chưa rõ nguồn ">Chưa chất liệu</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form">
                                                    <label for="">Ảnh sản phẩm</label>
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success btn-group-lg">Thêm mới
                                                </button>
                                                <button type="button" class="btn btn-danger btn-group-lg"
                                                        data-dismiss="modal">Hủy
                                                </button>
                                            </div>


                                        </form>

                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--modal thêm mới sản phẩm--}}

                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Stt</th>
                            <th class="text-center"> Sản phẩm</th>
                            <th class="text-center">Hình ảnh</th>
                            <th class="text-center">Tổng nhập (chiếc/bộ)</th>
                            <th class="text-center">Còn trong kho (chiếc/bộ)</th>
                            <th class="text-center">Giá nhập</th>
                            <th class="text-center">Giá bán</th>
                            <th class="text-center">Ngày nhập</th>
                            <th class="text-center">Mô tả sản phẩm</th>
                            <th class="text-center">Nhà cung cấp</th>
                            <th class="text-center">Thương hiệu</th>
                            <th class="text-center">Thể loai</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody class="showlist">
                        @forelse($products as $key=> $product)
                            <tr class="show-product">
                                <td class="text-center">{{$key+1}}</td>
                                <td class="text-center">
                                    <a href="{{route('admin.product.detail',$product->id)}}">{{$product->name}}</a>
                                </td>
                                <td><img src="{{asset('images/'.$product->image)}}" alt=""
                                         style="height: 100px ; width: 100px"></td>
                                <td class="text-center">
                                    {{$product->quantity1}}
                                    <button type="button" data-toggle="modal" data-target="#upquantity{{$product->id}}">
                                        <i class="fas fa-sort-amount-up"></i>
                                    </button>

                                    {{--modal up quantity--}}
                                    <div class="modal" id="upquantity{{$product->id}}">
                                        <div class="modal-dialog  modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="text-center font-weight-bold">
                                                        Nhập thêm mặt hàng {{$product->name}}
                                                    </h2>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.product.importproduct')}}"
                                                          method="post">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <div>
                                                                    <h4>Sản phẩm : {{$product->name}}</h4>
                                                                </div>
                                                                <div>
                                                                    <img src="{{asset('images/'.$product->image)}}"
                                                                         alt=""
                                                                         style="height: 600px; width: 500px ">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputAddress">Số lượng đã
                                                                            nhập</label>
                                                                        <div class="input-group ">
                                                                            <input type="text" class="form-control"
                                                                                   id="inputAddress"
                                                                                   placeholder="Chiếc/bộ"
                                                                                   value="{{$product->quantity1}}"
                                                                                   disabled>
                                                                            <span
                                                                                class="input-group-text">Chiếc/bộ</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputAddress">Số lượng còn trong
                                                                            kho</label>
                                                                        <div class="input-group ">
                                                                            <input type="text" class="form-control"
                                                                                   id="inputAddress"
                                                                                   placeholder="Chiếc/bộ"
                                                                                   value="{{$product->quantity2}}"
                                                                                   disabled>
                                                                            <span
                                                                                class="input-group-text">Chiếc/bộ</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="addquantity">Nhập thêm:</label>
                                                                    <input type="number" name="addquantity"
                                                                           placeholder="Chiếc/bộ">
                                                                </div>
                                                                <div class="text-center">
                                                                    <input type="hidden" value="{{$product->id}}"
                                                                           name="id">
                                                                    <button type="submit"
                                                                            class="btn btn-success">Thêm hàng
                                                                    </button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                            class="btn btn-danger btn-group-lg"
                                                                            data-dismiss="modal">Hủy
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--modal up quantity--}}


                                </td>
                                <td class="text-center">{{$product->quantity2}}</td>
                                <td class="text-center">{{$product->cost}} VND</td>
                                <td class="text-center">{{$product->price}} VND</td>
                                <td class="text-center">{{$product->date_import}}</td>
                                <td class="text-center">{{$product->status}}</td>
                                <td class="text-center">{{$product->supplier->name}}</td>
                                <td class="text-center">{{$product->brand->name}}</td>
                                <td class="text-center">{{$product->category->name}}</td>
                                <td>
                                    <a class="btn btn-warning btn-circle btn-lg"
                                       href="{{route('admin.product.edit',$product->id)}}">
                                        <i class="fas fa-wrench"></i>
                                    </a>
                                    <br>
                                    <button type="button"
                                            class="btn btn-danger btn-circle btn-lg button delete-product-confirm"
                                            data-toggle="modal"
                                            data-target="#stopsale{{$product->id}}">
                                        <i class="fas fa-store-slash"></i>
                                    </button>

                                    {{--modal ngung ban 1 san pham--}}
                                    <div class="modal" id="stopsale{{$product->id}}">
                                        <div class="modal-dialog  modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <b1 class="text-center font-weight-bold"> Ngừng kinh doanh mặt
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
                                                                    <a href="{{route('admin.product.delete',$product->id)}}"
                                                                       class="btn btn-success">Ngừng kinh doanh</a>
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
                    <nav class="aria-label=Page aviation">
                        {!! $products->links() !!}
                    </nav>
                </div>
            </div>
        </div>

    </div>


@endsection
