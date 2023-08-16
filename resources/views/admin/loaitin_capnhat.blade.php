

@extends('admin/layoutAdmin')

@section('TieuDeTrang')
  Cập Nhật Loại Tin
@endsection

@section('NoiDung')



  <div>
    <div class="loaihang">
      <br>
      <h2 class="">Quản Lý Loại Tin </h2>
      <br>

      <div class="box_prof">
        <h4 class="alert alert-success">Cập Nhật Loại Tin</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./{{$data_cn->id}}">

            <div class="mb-2">
              <div class="pl-2">
								<label for="id_TL">Mã Thể Loại</label>
								<select name="id_TL" id="id_TL">
                @foreach ($data_tl as $tl)
									<option value="{{$tl->id}}" @if($data_cn->id_TL == $tl->id) selected="selected";@endif >{{$tl->ten_TL}}</option>
                @endforeach
								</select>
							</div>
              <div class="pl-2">
                <label for="ten_LT">Loại Tin:</label>
                <input class="form-control" name="ten_LT" id="ten_LT" type="text" value="{{$data_cn->ten_LT}}">
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