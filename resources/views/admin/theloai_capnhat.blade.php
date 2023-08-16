
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

            <div class="mb-2">
              <div class="pl-2">
                <label for="ten_TL">Thể Loại:</label>
                <input class="form-control" name="ten_TL" id="ten_TL" type="text" value="{{$data_cn->ten_TL}}">
                <span class="text-danger">
									@error('ten_TL')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
            </div>
            <div class="pl-2">
              <button class="btn btn-primary" type="submit" name="submit">Cập Nhật</button>
            </div>
            @csrf
          </form>
        </div>                

      </div>
      
    </div>

  </div>
@endsection