<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh Mục</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Thể Loại
                        </a>
                    </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($categories as $key=>$category)
                                <li><a href="">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Thương hiệu
                        </a>
                    </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($brands as $key => $brand)
                                <li><a href="">{{$brand->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Chất liệu
                        </a>
                    </h4>
                </div>
                <div id="womens" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($materials as $material)
                                <li><a href="">{{$material->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div><!--/category-products-->

        <div class="brands_products"><!--brands_products-->
            <h2>Top bán chạy</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"> <span class="pull-right"></span>Top bán chạy
                            tháng {{\Carbon\Carbon::now()->month}}</a></li>
                    <li><a href="#"> <span class="pull-right"></span>Sản phẩm mới</a></li>
                    <li><a href="#"> <span class="pull-right"></span>Bé yêu 1-3 tuổi</a></li>
                    <li><a href="#"> <span class="pull-right"></span>Bé yêu 3-6 tuổi</a></li>
                    <li><a href="#"> <span class="pull-right"></span>Bé yêu 6-8 tuổi</a></li>

                </ul>
            </div>
        </div><!--/brands_products-->

        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                       data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->

        <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt=""/>
        </div><!--/shipping-->

    </div>
</div>
