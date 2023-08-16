<?php
use App\Models\loaitinModel;
use Illuminate\Support\Facades\Auth;


$data_lt = loaitinModel::all();
?>
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
        <h4 class="alert alert-success">Thêm Tin Tức</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="{{route('tt_store')}}">

            <div class="row">
              <div class="col-md-7 ">
                <label class="form-label">Tiêu đề: </label> 
                <br>
                <input class="form-control" type="text" name="tieu_de">
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
										<option value="{{$lt->id}}">{{$lt->ten_LT}}</option>
									@endforeach
								</select>
							</div>
              <div class="col-md-3 ">
                <label class="form-label">Tác giả: </label>
                  <br>
                <input class="form-control" type="text" name="tac_gia" value="{{ Auth::user()->name }}">
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
								<textarea class="form-control" rows="1" id="tags" name="tags"></textarea>
                <br>
              </div>
							<div class="col-md-4">
                <label for="comment">Lượt xem:</label>
                <input class="form-control" type="number" name="luot_xem" value="1" min="1">
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
                <input class="form-control" type="file" name="hinh_anh">
                <span class="text-danger">
									@error('hinh_anh')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
            </div>

            <div class="row">
							<div class="col-md-12">
                <label class="form-label">Tóm tắt: </label>
                <br>
								<textarea class="form-control" rows="2" id="tom_tat" name="tom_tat"></textarea>    
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
                <textarea class="form-control" rows="3" id="noi_dung" name="noi_dung"></textarea>
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
              <button class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
              <button class="btn btn-primary" type="reset">Nhập lại</button>
              <a class="btn btn-primary" href="#box_prod">Danh Sach</a>
            </div>

            @csrf
          </form>
        </div>                

      </div>
                     <br>
                     <br>

                     <div class="box_prof" id="box_prod">

                        <h4 class="alert alert-success">Danh Muc San Pham</h4>

                        <div class="box_form">

                           <input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả">
                           <input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả">
                           <button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>


                           <form class="form_prof" method="post" action="dashboard.php?btn_list">

                              <table class="table table-hover">
                                 <tbody>

                                    <tr>
                                      <th></th>
                                       <th>STT</th>
                                       <th>TIÊU ĐỀ</th>
                                       <th>TÓM TẮT</th>
                                       <th>NỘI DUNG</th>
                                       <th>LOẠI TIN</th>
                                       <th>HÌNH ẢNH</th>
                                       <th>TAGS</th>
                                       <th>THAO TÁC</th>
                                    </tr>
                                    <!-- PHP ========== -->
      
      @foreach ($tintuc as $tt)
      <tr>
        <td><input id="checkbox" type="checkbox" name="cat[]" value=" 1 "></td>
        <td>{{$tt->id}}</td>
        <td>
          <textarea rows="3">{{$tt->tieu_de}}</textarea>
        </td>
        <td><textarea rows="3">{{$tt->tom_tat}}</textarea></td>
        <td><textarea rows="3">{{$tt->noi_dung}}</textarea></td>
        <td>
          @foreach ($data_lt as $lt)
            @if($lt->id == $tt->id_LT) {{$lt->ten_LT}}@endif
					@endforeach  
        </td>
        <td><img style="width: 50px; height: 35px;" src="{{asset('img/news')}}/{{$tt->hinh_anh}}" alt=""></td>
        <td>{{$tt->tags}}</td>
        <td>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="tintuc_capnhat/{{$tt->id}}"><i class="fe-edit"></i></a>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="tintuc/xoa/{{$tt->id}}"><i class="fe-delete"></i></a>
        </td>
      </tr>         
      @endforeach                     
                                          
   <script>
      const delBtnEl = document.querySelectorAll(".btn_delete");
      delBtnEl.forEach(function(delBtn) {
         delBtn.addEventListener("click", function(event) {
            const message = confirm("Bạn có chắc muốn xoá dữ liệu này không?");
            if (message == false) {
               event.preventDefault();
            }
         });
      });
   </script>
                                        <!-- END PHP ============ -->

                                 </tbody>
                              </table>

                           </form>

                           <input class="btn btn-primary" type="button" id="btn1.1" value="Chọn tất cả">
                           <input class="btn btn-primary" type="button" id="btn2.2" value="Bỏ chọn tất cả">
                           <button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>
                        </div>
                     </div>
                     <br>


                  </div>


                  <script>
                     document.getElementById("btn1").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('cat[]');

                        // Lặp và thiết lập checked
                        for (var i = 0; i < checkboxes.length; i++) {
                           checkboxes[i].checked = true;
                        }
                     };
                     document.getElementById("btn1.1").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('cat[]');

                        // Lặp và thiết lập checked
                        for (var i = 0; i < checkboxes.length; i++) {
                           checkboxes[i].checked = true;
                        }
                     };

                     // Chức năng bỏ chọn hết
                     document.getElementById("btn2").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('cat[]');

                        // Lặp và thiết lập Uncheck
                        for (var i = 0; i < checkboxes.length; i++) {
                           checkboxes[i].checked = false;
                        }
                     };
                     document.getElementById("btn2.2").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('cat[]');

                        // Lặp và thiết lập Uncheck
                        for (var i = 0; i < checkboxes.length; i++) {
                           checkboxes[i].checked = false;
                        }
                     };
                  </script>
                  


               </div>
@endsection