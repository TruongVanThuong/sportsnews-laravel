
@extends('admin/layoutAdmin')

@section('TieuDeTrang')
  Thể Loại
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
        <h4 class="alert alert-success">Thêm Thể Loại</h4>
                        
        <div class="box_form">
          <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="theloai">

            <div class="mb-2">
              <div class="pl-2">
                <label for="ten_TL">Thể Loại:</label>
                <input class="form-control" name="ten_TL" id="ten_TL" type="text">
                <span class="text-danger">
									@error('ten_TL')
									{{$message}}
									@enderror
								</span>
								<br>
              </div>
            </div>
            <div class="pl-2">
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

        <h4 class="alert alert-success">Danh Muc Thể Loại</h4>

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
                  <th>TÊN THỂ LOẠI</th>
                  <th>TÊN THỂ LOẠI KHÔNG DẤU</th>
                  <th>THAO TAC</th>
                </tr>

                @foreach ($data as $theloai)
                <tr>
                  <td><input id="checkbox" type="checkbox" name="cat[]" value=" 1 "></td>
                  <td>{{$theloai->id}}</td>
                  <td>{{$theloai->ten_TL}}</td>
                  <td>{{$theloai->ten_TL_KD}}</td>
                  <td>
                    <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="theloai_capnhat/{{$theloai->id}}"><i class="fe-edit"></i></a>
                    <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="theloai/xoa/{{$theloai->id}}"><i class="fe-delete"></i></a>
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