@extends('admin/layoutAdmin')


@section('TieuDeTrang')
  Thanh Vien
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
      <h2 class="">Quản Lý Thành Viên</h2>
      <br>


      <div class="box_prof">
        <h4 class="alert alert-success">Thêm Thành Viên</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="{{route('user_store')}}">

            <div class="row">
              <div class="col-md-12 ">
                <label class="form-label">Tên người dùng: </label> 
                <br>
                <input class="form-control" type="text" name="name">
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
                <input class="form-control" type="text" name="email">
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
                <input class="form-control" type="file" name="image">
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
									<option value="Khách Hàng">Khách Hàng</option>
                  <option value="Quản Lý">Quản Lý</option>
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
                     <br>
                     <br>

                     <div class="box_prof" id="box_prod">

                        <h4 class="alert alert-success">Danh Muc Thành Viên</h4>

                        <div class="box_form">

                           <input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả">
                           <input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả">
                           <button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>


                           <form class="form_prof" method="post" action="">

                              <table class="table table-hover">
                                 <tbody>

                                    <tr>
                                      <th></th>
                                       <th>STT</th>
                                       <th>HÌNH ẢNH</th>
                                       <th>TÊN NGƯỜI DÙNG</th>
                                       <th>EMAIL</th>
                                       <th>VAI TRÒ</th>
                                       <th>THAO TÁC</th>
                                    </tr>
                                    <!-- PHP ========== -->
@foreach($data as $user)
                                    <tr>
                                      <td><input id="checkbox" type="checkbox" name="cat[]" value=" 1 "></td>
                                      <td>{{$user->id}}</td>
                                      <td style="overflow: hidden;" width="100" height="100"><img src="{{asset('img/users')}}/{{$user->image}}" title="{{$user->image}}" width="100"></td>
                                      <td>{{$user->name}}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{{$user->id_group}}</td>
                                      <td>
                                        <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="user_capnhat/{{$user->id}}"><i class="fe-edit"></i></a>
                                        <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="user/xoa/{{$user->id}}"><i class="fe-delete"></i></a>
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