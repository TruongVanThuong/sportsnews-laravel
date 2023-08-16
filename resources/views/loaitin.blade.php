@extends('layout')
     
@section('TieuDeTrang')
@foreach ($loaitin as $lt) 
  @if($lt->id == $tintuc_1->id_LT) {{$lt->ten_LT}} @endif 
@endforeach

@endsection



@section('NoiDung')

<div class="row mobover">
  
            <div class="col-md-8" style="padding-right: 23px !important;">
<div class="breakingbox mt-3">
    <a class="caption" href="" title="Tin tức bóng đá mới nhất">
      <h2>
        @foreach ($loaitin as $lt) 
                          @if($lt->id == $tintuc_1->id_LT) {{$lt->ten_LT}} @endif 
                          @endforeach

      </h2>
    </a>
  </div>
@foreach ($tintuc ?? '' as $tt)
              <div class="module_flex_3 module_wrap_3">
              
                <div class="primarybox mt-5">
                  <div class="row m-0">
                    <di class="text-center">
                      <div class="post-cate">
                        <h7>@foreach ($loaitin as $lt) 
                          @if($lt->id == $tt->id_LT) {{$lt->ten_LT}} @endif 
                          @endforeach
                        </h7>
                      </div>
                      <h4 class="module_info_title">{{$tt->tieu_de}}</h4>
                      <div class="entry-divider is-divider small" style="height: 3px;display: block;background-color: rgba(0,0,0,0.1);margin: 1em auto;width: 100%;max-width: 30px;"></div>
                      <div class="post-date">
                      {{$tt->created_at}} by {{$tt->tac_gia}}
                      </div>
                    </di>
                    <div class="module_thump p-0">
                      <a href="{{ url('chitiettin',[$tt -> id]) }}">
                        <img class="img_thunp" src="{{asset('img/news')}}/{{$tt->hinh_anh}}" title="" width="100%">
                      </a>
                      <div class="fst"></div>
                    </div>

                    <div class="module_info mt-4" style="padding-left: 7px !important;">
                    {{$tt->tom_tat}}
                    </div>
                  </div>
                </div>
              </div>
              <hr>
@endforeach
            </div>

            <div class="col-md-4 mt-3">
              <div class="breakingbox">
                <a class="caption" href="" title="">
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

  
@endsection