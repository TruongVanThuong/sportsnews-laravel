@extends('layout')
     
@section('TieuDeTrang')
Hồ sơ tài khoản

@endsection



@section('NoiDung')

    <div class="clz"></div>
<div class="memcap">
    <h1 class="caption">Quản lý tài khoản</h1>
    <ul class="bar actnav">
    </ul>
</div>
    <div class="row">
        <div class="col w34">
            <div class="clz"></div>
<div class="member-info">
    <div class="caption">
        Thông tin cá nhân
        <a class="btn min rgt" href="/Identity/Account/Manage/Index">Chỉnh sửa</a>
    </div>
    <div class="avatar-box">
        <div class="thumb">
            <img src="https://bongdaplus.vn/img/no-avatar.jpg">
        </div>
    </div>
    <ul class="desc-info lst">
        <li>Tên gọi: <a href="/Identity/Account/Manage/Index">Trương Văn Thương</a></li>
        <li>Email: <a href="/Identity/Account/Manage/Email">thuongtvpd05551@fpt.edu.vn</a></li>
        <li>
            <i>
                Tham gia từ 03:18 ngày 15/08/2023<br>
            </i>
        </li>
    </ul>
    <div class="splt"></div>
    <a class="btn" href="/Identity/Account/Manage/ChangePassword">Đổi mật khẩu</a>
    <div class="clz"></div>
    <a class="btn" href="/Identity/Account/Manage/ExternalLogins">Tài khoản liên kết</a>
    <div class="clz"></div>
    <a class="btn" href="/Identity/Account/Manage/FavCat">Chuyên mục ưa thích</a>
    <div class="splt"></div>
    <form method="post" action="/Identity/Account/Logout?returnUrl=%2F%3Fpage%3D%252F">
        <button type="submit" class="btn logout">Đăng xuất</button>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8IZpOn3VosxImlvn-PYZdQYOeJjJt9xLWHVjtqe37JrEPj8TRJzacJhB5X02qBgdL03ApiFxKCnh9r7ueFNMyTXBTMlfek_4oMXbS_3KOhHwCEZzShyrJavYW5DogQBUCISP9wJrx1Y7J4MVvmuTdzJYNpe4AMir371zmi_3xxVF9VeWNA_xFheXRTxbZR6s1w"></form>
</div>
        </div>
        <div class="col w64 member-actis">
            
<div class="clz"></div>
<div class="logonview small">
    <h1 class="caption">Hồ sơ tài khoản</h1>
    <form id="profile-form" method="post" novalidate="novalidate">
        

        
        <label for="Username">Username</label>
        <input class="inpbox" placeholder="Chọn UserName của bạn." disabled="" type="text" id="Username" name="Username" value="thuongtvpd05551@fpt.edu.vn">
        <label for="Input_PhoneNumber">Phone number</label>
        <input class="inpbox" placeholder="Nhập số điện thoại của bạn." type="tel" data-val="true" data-val-phone="The Phone number field is not a valid phone number." id="Input_PhoneNumber" name="Input.PhoneNumber" value="">
        <span class="tx-prime field-validation-valid" data-valmsg-for="Input.PhoneNumber" data-valmsg-replace="true"></span>
        <button id="update-profile-button" type="submit">Lưu</button>
        <div class="clx"></div>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8IZpOn3VosxImlvn-PYZdQYOeJjJt9xLWHVjtqe37JrEPj8TRJzacJhB5X02qBgdL03ApiFxKCnh9r7ueFNMyTXBTMlfek_4oMXbS_3KOhHwCEZzShyrJavYW5DogQBUCISP9wJrx1Y7J4MVvmuTdzJYNpe4AMir371zmi_3xxVF9VeWNA_xFheXRTxbZR6s1w"></form>
</div>


        </div>
    </div>


@endsection