
@extends('admin/layoutAdmin')

@section('TieuDeTrang')
  Bình Luận 
@endsection

@section('NoiDung')

  <div>
    <div class="loaihang">
      <br>
      <h2 class="">Quản Lý Bình Luận</h2>
      <br>

      <div class="box_prof" id="box_prod">

        <h4 class="alert alert-success">Danh Muc Bình Luận</h4>

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
                  <th>MÃ TÀI KHOẢN</th>
                  <th>MÃ TIN TỨC</th>
                  <th>NỘI DUNG</th>
                  <th>THAO TAC</th>
                </tr>
<!-- PHP ========== -->
@foreach($data_bl as $bl)
                <tr>
                  <td><input id="checkbox" type="checkbox" name="cat[]" value=" 1 "></td>
                  <td>{{$bl->id}}</td>
                  <td>{{$bl->id_user}}</td>
                  <td>{{$bl->id_TT}}</td>
                  <td>{{$bl->noi_dung}}</td>
                  <td>
                    <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="binhluan/xoa/{{$bl->id}}"><i class="fe-delete"></i></a>
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