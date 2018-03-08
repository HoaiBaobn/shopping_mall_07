@extends('frontend.index')
@section('content')
<div class="wapper" style="background: #F5F5F5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="img/slide-img.jpg">
                        </div>
                        <div class="item">
                            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="img/slide-img2.jpg">
                        </div>
                        <div class="item active">
                            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="img/slide-img3.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="row magin">
            @include('frontend.sibar')
            <!-- Danh mục sản phẩm -->
            <div class="col-xs-12 col-sm-9 col-md-9">
                <section class="article">
                    <p class="title">     <!-- sản phẩm mới về -->
                        {{Lang::get('custom.homepage.latestproduct')}}
                    </p>
                    <div class="item">
                        <div class="row noboder">
                            @foreach($pro_news as $pron)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="{{url('uploads').'/'.$pron->img}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$pron->name}}</p>
                                        <p class="single-item-price">
                                            @if($pron->discount==0)
                                            <span class="flash-sale">${{$pron->price}}</span>

                                            @else
                                            <span class="flash-del">${{$pron->price}}</span>
                                            <span class="flash-sale">${{$pron->discount}}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                        <div class="container">
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title" style="color:#DF3131;">Sản phẩm đã được thêm vào giỏ hàng</h4>
                                        </div>
                                        <div class="thead-popup">
                                            <div style="width: 45%;" class="text-left">Sản phẩm</div>
                                            <div style="width: 20%;" class="text-center">Đơn giá</div>
                                            <div style="width: 15%;" class="text-center">Số lượng</div>
                                            <div style="width: 20%;" class="text-center">Thành tiền</div>
                                        </div>
                                        <div class="tbody-popup">
                                            abc
                                        </div>
                                        <div class="tfoot-popup">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="imgadvertise">  <!-- Ảnh quảng cáo -->
                    <img src="img/article_ads_banner_1.jpg" width="100%">
                </div>
                <section class="article">
                    <div class="title">     <!-- sản phẩm khuyến mãi -->
                       {{Lang::get('custom.homepage.discountproduct')}}
                    </div>
                    <div class="item">
                        <div class="row noboder">
                            @foreach($pro_dis as $prodis)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="{{url('uploads').'/'.$prodis->img}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$prodis->name}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">${{$prodis->price}}</span>
                                            <span class="flash-sale">${{$prodis->discount}}</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                    </div>
                </section >
                <div class="imgadvertise">  <!-- Ảnh quảng cáo -->
                    <img src="img/article_ads_banner_1.jpg"  width="100%">
                </div>
                <section class="article foot">
                    <div class="title">     <!-- sản phẩm nổi bật -->
                        {{Lang::get('custom.homepage.mostbuyproduct')}}
                    </div>
                    <div class="item">
                        <div class="row noboder">
                            @foreach($pros as $proi)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="{{url('uploads').'/'.$proi->img}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$proi->name}}</p>
                                        <p class="single-item-price">
                                            @if($proi->discount==0)
                                            <span class="flash-sale">${{$proi->price}}</span>

                                            @else
                                            <span class="flash-del">${{$proi->price}}</span>
                                            <span class="flash-sale">${{$proi->discount}}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                    </div>
                </section>
            </div>
            
        </div>  
    </div>
    @endsection