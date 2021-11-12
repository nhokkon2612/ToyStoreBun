@extends('admin.dashboard')

@section('title','Cập nhật sản phẩm')

@section('content')


    <div class="container-fluid">
        <h1 class="">Cập nhật sản phẩm</h1>
        <form action="{{route('admin.product.update',$product->id)}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Sản phẩm</label>
                        <input type="text" class="form-control" id="inputEmail4"
                               placeholder="Tên sản phẩm" name="name" value="{{$product->name}}">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Giá nhập (VNĐ)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputPassword4"
                                   placeholder="VNĐ" name="cost" value="{{$product->cost}}">
                            <span class="input-group-text">VNĐ</span>
                        </div>
                        @error('cost')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Giá bán (VNĐ)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputPassword4"
                                   placeholder="VNĐ" name="price" value="{{$product->price}}">
                            <span class="input-group-text">VNĐ</span>
                        </div>

                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Số lượng</label>
                        <div class="input-group ">
                            <input type="text" class="form-control" id="inputAddress"
                                   placeholder="Chiếc/bộ"  value="{{$product->quantity1}}" disabled>
                            <input type="hidden" value="{{$product->quantity1}}" name="quantity" >
                            <span class="input-group-text">Chiếc/bộ</span>
                            @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Kích cỡ</label>
                        <div class="input-group ">
                            <input type="text" class="form-control" id="inputAddress2"
                                   placeholder="20*20*10" name="size" value="{{$product->size}}">
                            <span class="input-group-text">cm/cm/cm</span>
                        </div>
                        @error('size')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Khối lương(gram)</label>
                        <div class="input-group ">
                            <input type="text" class="form-control" id="inputAddress2"
                                   placeholder="250 Gram" name="weight" value="{{$product->weight}}">
                            <span class="input-group-text">Gram</span>
                        </div>
                        @error('weight')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Mô tả sản phẩm</label><br>
                    <textarea name="status" id="" cols="178" rows="5" class="form-group"
                              placeholder="Nhập mô tả...."> {{$product->status}} </textarea>
                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Nhà cung cấp</label>
                        <select name="supplier_id" class="form-control">
                            @forelse($suppliers as $supplier)
                                <option @if($supplier->id==$product->supplier_id) selected
                                        @endif value="{{$supplier->id}}">{{$supplier->name}}</option>
                            @empty
                                <option value="Chưa rõ nguồn ">Chưa rõ nguồn</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Thương hiệu</label>
                        <select name="brand_id" id="" class="form-control">
                            @forelse($brands as $brand)
                                <option @if($brand->id==$product->brand_id) selected
                                        @endif value="{{$brand->id}}">{{$brand->name}}</option>
                            @empty
                                <option value="Chưa thương hiệu ">Chưa thương hiệu</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Thể loại</label>
                        <select name="category_id" id="" class="form-control">
                            @forelse($categories as $category)
                                <option @if($category->id==$product->category_id) selected
                                        @endif value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                                <option value="Chưa rõ nguồn ">Chưa thể loại</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Chất liệu</label>
                        <select name="material_id" id="" class="form-control">
                            @forelse($materials as $material)
                                <option @if($material->id==$product->material_id) selected
                                        @endif value="{{$material->id}}">{{$material->name}}</option>
                            @empty
                                <option value="Chưa rõ nguồn ">Chưa chất liệu</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form">
                        <div>
                            <div class="form-row">

                                <div class="form-group col-md-5">
                                    <input type="hidden" name="oldimage" value="{{$product->image}}">
                                    <label for="">Cập nhật ảnh</label>
                                    <input type="file" name="image"><br>

                                    <button type="submit" class="btn btn-success btn-group-lg">Cập nhật</button>
                                    <button type="button" class="btn btn-danger btn-group-lg"  onClick="history.go(-1); return false;">Hủy</button>
                                </div>
                                <div class="form-group col-md-7">
                                    <label for=""> Hình ảnh sản phẩm :</label>
                                    <div class="">
                                        <img src="{{asset('images/'.$product->image)}}" alt=""
                                             style="width: 300px;height: 300px">
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                </div>


            </form>

        </form>
    </div>

@endsection
