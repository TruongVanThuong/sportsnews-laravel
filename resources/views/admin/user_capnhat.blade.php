
@extends('admin/layoutAdmin')

@section('TieuDeTrang')
  Cập Nhật Thể Loại
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
      <h2 class="">Quản Lý Thể Loại </h2>
      <br>

      <div class="box_prof">
        <h4 class="alert alert-success">Cập Nhật Thể Loại</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./{{$data_cn->id}}">

          <div class="row">
              <div class="col-md-12 ">
                <label class="form-label">Tên người dùng: </label> 
                <br>
                <input class="form-control" type="text" name="name" value="{{$data_cn->name}}">
								<span class="text-danger">
									@error('name')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
              <div class="col-md-12 ">
                <label class="form-label">Email: </label> 
                <br>
                <input class="form-control" type="text" name="email" value="{{$data_cn->email}}">
								<span class="text-danger">
									@error('email')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
              <div class="col-md-12 ">
                <label class="form-label">Mật Khẩu: </label> 
                <br>
                <input class="form-control" type="text" name="pass">
								<span class="text-danger">
									@error('pass')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
              <div class="col-md-12 ">
                <label class="form-label">Nhập Lại Mật Khẩu: </label> 
                <br>
                <input class="form-control" type="text" name="pass_">
								<span class="text-danger">
									@error('pass_')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
              <div class="col-md-12 ">
                <label class="form-label">Hình Ảnh: </label> 
                <br>
                <input class="form-control" type="file" name="image" value="{{$data_cn->image}}">
								<span class="text-danger">
									@error('image')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
							<div class="col-md-12">
								<label for="comment">Vai Trò:</label><br>
								<select name="id_gr" id="id_gr">
									<option @if($data_cn->id_group == 'Khách Hàng') selected="selected";@endif value="Khách Hàng">Khách Hàng</option>
                  <option @if($data_cn->id_group == 'Quản Lý') selected="selected";@endif value="Quản Lý">Quản Lý</option>
								</select>
							</div>
              
            </div>

            

						<br>
            <div class="">
              <button class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
              <button class="btn btn-primary" type="reset">Nhập lại</button>
            </div>

            @csrf
          </form>
        </div>                

      </div>
      
    </div>

  </div>
@endsection