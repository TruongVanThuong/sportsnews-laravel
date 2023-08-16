<?php

use Illuminate\Support\Facades\Auth;

?>




@extends('layout')
 
@section('TieuDeTrang')
  @foreach ($loaitin as $lt) 
    @if($lt->id == $tintuc->id_LT) {{$lt->ten_LT}} @endif 
  @endforeach
@endsection


 

@section('NoiDung')
 
<div class="row mobover">
  
  <div class="col-md-8 mt-3" style="padding-right: 23px !important;">
    <div class="breakingbox">
      <a class="caption" href="" title="Tin tức bóng đá mới nhất">
        <h2>@foreach ($loaitin as $lt) 
                            @if($lt->id == $tintuc->id_LT) {{$lt->ten_LT}} @endif 
                            @endforeach</h2>
      </a>
    </div>
              <div class="module_flex_3 module_wrap_3">
              
                <div class="primarybox mt-5">
                  <div class="row m-0">
                    <di class="text-center">
                      <div class="post-cate">
                        <h7>@foreach ($loaitin as $lt) 
                          @if($lt->id == $tintuc->id_LT) {{$lt->ten_LT}} @endif 
                          @endforeach
                        </h7>
                      </div>
                      <h4 class="module_info_title">{{$tintuc->tieu_de}}</h4>
                      <div class="entry-divider is-divider small" style="height: 3px;display: block;background-color: rgba(0,0,0,0.1);margin: 1em auto;width: 100%;max-width: 30px;"></div>
                      <div class="post-date">
                      {{$tintuc->created_at}} by {{$tintuc->tac_gia}}
                      </div>
                      <div>
                        <h5>{{$tintuc->tom_tat}}</h5>
                      </div>
                    </di>
                    <div class="module_thump p-0">
                      <a href="{{ url('chitiettin',[$tintuc -> id]) }}">
                        <img class="img_thunp" src="{{asset('img/news')}}/{{$tintuc->hinh_anh}}" title="" width="100%">
                      </a>
                      <div class="fst"></div>
                    </div>

                    <div class="module_info mt-4" style="padding-left: 7px !important;">
                      {{$tintuc->noi_dung}}
                    </div>
                  </div>
                </div>
              </div>
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

  <div class="post-comment">
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" class="comment-reply-title">BÌNH LUẬN 
        <small>
          <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">
            Hủy trả lời
          </a>
        </small>
      </h3>			
      <form action="." method="post" class="comment-form">
          <div class="clearfix"></div>
          <div class="comment-form-input-wrap td-form-comment">
            <textarea placeholder="Bình luận:" id="noi_dung" name="noi_dung" cols="45" rows="8" aria-required="true"></textarea>
            <div class="td-warning-comment">Please enter your comment!</div>
          </div>
          <br>
          
          <input type="hidden" name="id_TT" id="id_TT" value="{{$tintuc->id}}"> 

          <button class="btn btn-danger" type="submit" name="submit">Đăng</button>
          @csrf
      </form>
		</div>     
  </div>

  


@endsection