
@extends('admin/layoutAdmin')

@section('TieuDeTrang')
  Tin Tức 
@endsection

@section('NoiDung')

<!-- xu ly validation -->
@if ($errors->any())
	@foreach ($errors->all() as $error)
	@endforeach
@endif
<!--  -->

  <div>
    <div class="loaihang">
      <br>
      <h2 class="">Quản Lý Tin Tức</h2>
      <br>

      <div class="box_prof">
        <h4 class="alert alert-success">Cập Nhật Tin Tức</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./{{$data_cn->id}}">

            <div class="row">
              <div class="col-md-7 ">
                <label class="form-label">Tiêu đề: </label> 
                <br>
                <input class="form-control" type="text" name="tieu_de" value="{{$data_cn->tieu_de}}">
                <span class="text-danger">
									@error('tieu_de')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
							<div class="col-md-2">
								<label for="comment">Mã loại tin:</label><br>
								<select name="id_LT" id="id_LT">
									@foreach ($data_lt as $lt)
										<option value="{{$lt->id}}" @if($data_cn->id_LT == $lt->id) selected="selected";@endif >{{$lt->ten_LT}}</option>
									@endforeach
								</select>
							</div>
              <div class="col-md-3 ">
                <label class="form-label">Tác giả: </label>
                  <br>
                <input class="form-control" type="text" name="tac_gia"  value="Van Thuong">
                <span class="text-danger">
									@error('tac_gia')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 ">
                <label class="form-label">Tags: </label>
								<textarea class="form-control" rows="1" id="tags" name="tags"  value="">{{$data_cn->tags}}</textarea>
								<br>
              </div>
							<div class="col-md-4">
                <label for="comment">Lượt xem:</label>
                <input class="form-control" type="number" name="luot_xem" value="{{$data_cn->luot_xem}}">
                <span class="text-danger">
									@error('luot_xem')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
							<div class="col-md-4 ">
								<label class="form-label">Hình ảnh: </label>
								<br>
                <input class="form-control" type="file" id="hinh_anh" name="hinh_anh" value="">
                <span class="text-danger">
									@error('hinh_anh')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
            </div>
            <!-- J S file -->
            <script>
              let domain = '{{$data_cn->hinh_anh}}';
              document.getElementById('hinh_anh').value = domain;
            
            </script>

            <div class="row">
							<div class="col-md-12">
                <label class="form-label">Tóm tắt: </label>
                <br>
								<textarea class="form-control" rows="2" id="tom_tat" name="tom_tat" value="">{{$data_cn->tom_tat}}</textarea>  
                <span class="text-danger">
									@error('tom_tat')
									{{$message}}
									@enderror
								</span>
								<br>            
							</div>
            </div>

            <div class="row">
							<div class="col-md-12">
                <label class="form-label">Nội dung: </label>
                <br>
                <textarea class="form-control" rows="3" id="noi_dung" name="noi_dung" value="">{{$data_cn->noi_dung}}</textarea>
                <span class="text-danger">
									@error('noi_dung')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
						</div>

						<br>
            <div class="">
              <button class="btn btn-primary" type="submit" name="submit">Cập Nhật</button>
            </div>

            @csrf
          </form>
        </div>                

      </div>
                     <br>
                     <br>
    </div>
  </div>
@endsection