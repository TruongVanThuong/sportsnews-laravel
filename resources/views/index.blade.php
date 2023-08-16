@extends('layout')


@section('TieuDeTrang')
  Trang Chủ
@endsection


@section('NoiDung')
        <div class="slide_content mt-2">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/banner/banner01.jpeg')}}" class="d-block w-100" height="300px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/banner/banner02.jpeg')}}" class="d-block w-100" height="300px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/banner/banner03.jpeg')}}" class="d-block w-100" height="300px" alt="...">
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>


        <div class="panner_content">
          <div class="row" style="margin: 0; padding:0;">

            <div class="col-md-6 col-sm-6 col-xs-12 banner-size">
              <div class="block-banner l">
                <a class="banner-hover" href="{{ url('chitiettin',[$tintuc_bn[0] -> id]) }}" title="">
                  <img class="img-old " alt="" src="{{asset('img/news/')}}/{{ $tintuc_bn[0]->hinh_anh}}">
                </a>
                <h4>{{ $tintuc_bn[0]->tieu_de}}</h4>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 banner-size">
              <div class="h-100">
                <div class="r">
                  <div class="block-banner r-t">
                    <a class="banner-hover" href="{{ url('chitiettin',[$tintuc_bn[1] -> id]) }}" title="">
                      <img class="img-old w-100" alt="" src="{{asset('img/news/')}}/{{ $tintuc_bn[1]->hinh_anh}}">
                    </a>
                    <h4>{{ $tintuc_bn[1]->tieu_de}}</h4>
                  </div>
                </div>

                <div class="d-flex">
                  <div class="block-banner r-b">
                    <a class="banner-hover" href="{{ url('chitiettin',[$tintuc_bn[2] -> id]) }}" title="">
                      <img class="img-old " alt="" src="{{asset('img/news/')}}/{{ $tintuc_bn[2]->hinh_anh}}">
                    </a>
                    <h4>{{ $tintuc_bn[2]->tieu_de}}</h4>
                  </div>

                  <div class="block-banner r-b">
                    <a class="banner-hover" href="{{ url('chitiettin',[$tintuc_bn[3] -> id]) }}" title="">
                      <img class="img-old " alt="" src="{{asset('img/news/')}}/{{ $tintuc_bn[3]->hinh_anh}}">
                    </a>
                    <h4>{{ $tintuc_bn[3]->tieu_de}}</h4>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
<br>

        <div class="row mobover">
            <div class="col-md-8" style="padding-right: 23px !important;">

              <div class="breakingbox">
                <a class="caption dis" href="" title="Tin tức bóng đá mới nhất">
                  <h2>Tin mới nhất</h2>
                </a>
              </div>
              
              
              <div class="module_flex_1 module_wrap">

                <div class="primarybox mt-2">
                  <div class="row m-0">
                    <div class="module_thump p-0">
                      <a href="{{ url('chitiettin',[$tintuc_1 -> id]) }}">
                        <img class="img_thunp" src="{{asset('img/news')}}/{{$tintuc_1->hinh_anh}}" title="" width="100%">
                      </a>
                      <div class="fst"></div>
                    </div>

                    <div class="module_info p-3">
                    <h4 class="module_info_title">{{$tintuc_1->tieu_de}}</h4>
                      <div class="module_info_date">
                        <a class="post_cate">
                          @foreach ($loaitin as $lt) 
                          @if($lt->id == $tintuc_1->id_LT) {{$lt->ten_LT}} @endif 
                          @endforeach
                        </a>
                        <span class="post_author">{{$tintuc_1->tac_gia}}</span>
                        <span class="post_date">{{$tintuc_1->created_at}}</span>
                        <span class="post_cmt" >0</span>
                      </div>
                      <div class="td-excerpt" style="overflow: hidden; height: 40px">{{$tintuc_1->tom_tat}}</div>
                    </div>
                  </div>
                </div>
                
              </div>


@foreach ($tintuc as $tt)
              <div class="module_flex_2 module_wrap">
              
                <div class="primarybox mt-5">
                  <div class="row m-0">
                    <div class="module_thump p-0 col-md-4">
                      <a href="{{ url('chitiettin',[$tt -> id]) }}">
                        <img class="img_thunp" src="{{asset('img/news')}}/{{$tt->hinh_anh}}" title="" width="100%">
                      </a>
                      <div class="fst"></div>
                    </div>

                    <div class="module_info col-md-8" style="padding-left: 7px !important;">
                      <h4 class="module_info_title">{{$tt->tieu_de}}</h4>
                      <div class="module_info_date">
                        <a class="post_cate">
                          @foreach ($loaitin as $lt) 
                          @if($lt->id == $tt->id_LT) {{$lt->ten_LT}} @endif 
                          @endforeach
                        </a>
                        <span class="post_author">{{$tt->tac_gia}}</span>
                        <span class="post_date">{{$tt->created_at}}</span>
                        <span class="post_cmt" >0</span>
                      </div>
                      <div class="td-excerpt" style="overflow: hidden; height: 40px">{{$tt->tom_tat}}</div>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
            </div>

            <div class="col-md-4">
              <div class="breakingbox">
                <a class="caption dis" href="" title="">
                  <h2>Video</h2>
                </a>
              </div>

              <div class="link-ytb mt-2">
                <div>
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/KT9t6hIOCOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ClIkAnut3Cg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="post-qc mt-2">
                <img width="100%" src="{{asset('img/banner/qc-budweiser.gif')}}">
              </div>
            </div>
        </div>

        

<!-- ============================================================================ -->


        <div class="row">

@foreach ($loaitin as $lt)
          <div class="col-md-4 mt-5">
            <div class="breakingbox m-2">
              <a class="caption dis" href="" title="">
                <h2>{{$lt->ten_LT}}</h2>
              </a>
            </div>

            <div class="newslst p-2">
              <ul class="lst">
                <!-- <li class="news fst">
                  <a href="" title="">
                    <span class="thumb lft">
                      <span class="rbox">
                        <img data-src="{{asset('img/news')}}/maguire.jpeg" class="lzl" alt="" src="{{asset('img/news')}}/maguire.jpeg">
                      </span>
                    </span>
                    <span class="title"><h3>20h00 ngày 13/8: Clermont vs Monaco</h3></span>
                  </a>
                </li> -->
                <li class="news">
                  <a class="title" href="" title=""><h3>20h00 ngày 13/8: Montpellier vs Le Havre</h3></a>
                </li>
                <li class="news">
                  <a class="title" href="" title=""><h3>01h45 ngày 14/8: Strasbourg vs Lyon</h3></a>
                </li>
                <li class="news">
                  <a class="title" href="" title=""><h3>20h00 ngày 13/8: Nantes vs Toulouse</h3></a>
                </li>
              </ul>
            </div>
          </div>

@endforeach
        </div>


@endsection