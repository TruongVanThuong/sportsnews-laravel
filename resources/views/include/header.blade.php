
<?php
use App\Models\theloai;
use App\Models\loaitinModel;
use Illuminate\Support\Facades\Auth;

$the_loai = theloai::all();
$loai_tin = loaitinModel::all();
$loaitin = loaitinModel::where('id_TL', $id_LT ?? '')->get();
?>


<div class="toolbar hide-m">
        <div class="container containr">
            <ul class="bar lft">
								@foreach ($the_loai ?? '' as $tl)
									<li>
										<a href="" class="dis" title="{{$tl -> ten_TL}}">{{$tl -> ten_TL}}</a>
									</li>
                @endforeach
            </ul>
            <div style="font-size: 12px;" class="calnow">
                <svg class="ico" viewBox="0 0 24 24">
                    <path d="M19 6h-1.5V4.5C17.5 4.2 17.3 4 17 4s-0.5 0.2-0.5 0.5V6h-9V4.5C7.5 4.2 7.3 4 7 4S6.5 4.2 6.5 4.5V6H5C3.6 6 2.5 7.1 2.5 8.5v9C2.5 18.9 3.6 20 5 20h14c1.4 0 2.5-1.1 2.5-2.5v-9C21.5 7.1 20.4 6 19 6zM20.5 17.5c0 0.8-0.7 1.5-1.5 1.5H5c-0.8 0-1.5-0.7-1.5-1.5v-9C3.5 7.7 4.2 7 5 7h1.5v0.5C6.5 7.8 6.7 8 7 8s0.5-0.2 0.5-0.5V7h9v0.5C16.5 7.8 16.7 8 17 8s0.5-0.2 0.5-0.5V7H19c0.8 0 1.5 0.7 1.5 1.5V17.5z"></path>
                    <path d="M8.5 12h-3V9h3V12zM6.5 11h1v-1h-1V11z"></path>
                    <path d="M8.5 17h-3v-3h3V17zM6.5 16h1v-1h-1V16z"></path>
                    <path d="M13.5 12h-3V9h3V12zM11.5 11h1v-1h-1V11z"></path>
                    <path d="M13.5 17h-3v-3h3V17zM11.5 16h1v-1h-1V16z"></path>
                    <path d="M18.5 12h-3V9h3V12zM16.5 11h1v-1h-1V11z"></path>
                    <path d="M18.5 17h-3v-3h3V17zM16.5 16h1v-1h-1V16z"></path>
                </svg>
                <span style="font-size: 12px;" class="today"><?php echo date('h/m/Y'); ?></span>
            </div>
        </div>
</div>
<div class="headbar">
        <div class="container containr">
            <div class="brandname lft">
                <a class="logo" href="/" title="Tạp chí điện tử Bóng Đá">
                </a>
            </div>
            <div class="topnav">
                <ul class="bar">
                    <li>
                        <a class="fb-ref" href="https://facebook.com/Baobongda" target="_blank" aria-label="Fanpage Facebook Bongdaplus">
                            <svg class="ico" viewBox="0 0 24 24">
                                <path d="M21.2 2H2.8C2.4 2 2 2.4 2 2.8l0 0v18.3C2 21.6 2.4 22 2.8 22h9.8v-7.5h-2.5v-3.1h2.5V8.9c0-2.6 1.6-3.9 3.9-3.9 1.1 0 2.1 0.1 2.3 0.1v2.7h-1.6c-1.3 0-1.6 0.6-1.6 1.5v2.1h3.1l-0.6 3.1h-2.5l0.1 7.5h5.4c0.5 0 0.8-0.4 0.8-0.8V2.8C22 2.4 21.6 2 21.2 2"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="hide-m">
                        <a class="yt-ref" href="https://www.youtube.com/channel/UCvDYMBE6GipX2VGacqOU2_Q" target="_blank">
                            <svg class="ico" viewBox="0 0 24 24">
                                <path d="M22 10.3c0-0.4 0-0.9-0.1-1.5 -0.1-0.6-0.1-1.2-0.2-1.6 -0.1-0.5-0.4-1-0.8-1.4 -0.4-0.4-0.9-0.6-1.4-0.6C17.8 5 15.3 4.9 12 4.9 8.7 4.9 6.2 5 4.5 5.1 4 5.2 3.5 5.4 3.1 5.8 2.7 6.2 2.5 6.6 2.4 7.2c-0.1 0.5-0.2 1-0.3 1.6C2.1 9.4 2 9.9 2 10.3c0 0.4 0 1 0 1.7 0 0.7 0 1.3 0 1.7 0 0.4 0 0.9 0.1 1.5 0.1 0.6 0.1 1.2 0.2 1.6 0.1 0.5 0.4 1 0.8 1.4 0.4 0.4 0.9 0.6 1.4 0.6 1.7 0.2 4.1 0.3 7.5 0.3 3.3 0 5.8-0.1 7.5-0.3 0.5-0.1 1-0.3 1.4-0.6 0.4-0.4 0.7-0.8 0.8-1.4 0.1-0.5 0.2-1 0.3-1.6 0.1-0.6 0.1-1.1 0.1-1.5 0-0.4 0-1 0-1.7C22 11.3 22 10.7 22 10.3zM16 12.6l-5.7 3.6c-0.1 0.1-0.2 0.1-0.4 0.1 -0.1 0-0.2 0-0.3-0.1 -0.2-0.1-0.4-0.3-0.4-0.6V8.4c0-0.3 0.1-0.5 0.4-0.6 0.3-0.1 0.5-0.1 0.7 0l5.7 3.6c0.2 0.1 0.3 0.3 0.3 0.6C16.3 12.3 16.2 12.5 16 12.6z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="hide-m">
                        <a class="rss-ref" href="/rss" target="_blank">
                            <svg class="ico" viewBox="0 0 24 24">
                                <circle cx="6.4" cy="17.6" r="3"></circle>
                                <path d="M15.4 20.6h-2c0-5.5-4.5-10-10-10v-2C10 8.6 15.4 14 15.4 20.6z"></path>
                                <path d="M20.6 20.6h-2.5c0-8.1-6.6-14.8-14.8-14.8V3.4C12.9 3.4 20.6 11.1 20.6 20.6z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <div id="LoginPartialBox">
                            
                            <?php
                            if (Auth::user()){ ?>
                              <div class="dropdown">
																<button class=" pt-1 pb-1 btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<img width="28" height="28" style="border-radius: 50%;" src="{{asset('img/users')}}/{{ Auth::user()->image }}">{{ Auth::user()->name }}
																</button>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="{{ asset('user') }}">Tài khoản</a>
																	<!-- Authentication -->
																	<form method="POST" action="{{ route('logout') }}">
																		@csrf

																		<x-dropdown-link :href="route('logout')"
																						onclick="event.preventDefault();
																												this.closest('form').submit();">
																				{{ __('Log Out') }}
																		</x-dropdown-link>
																    </form> 
																</div>
															</div>
            <?php
                            } else {

                           
                            ?>
                            <a class="fan-club" href="/login" aria-label="Member">
															<svg class="ico" viewBox="0 0 24 24">
																	<path d="M16.8 9H15c0.3-0.6 0.5-1.3 0.5-2 0-2.2-1.6-4-3.5-4S8.5 4.8 8.5 7c0 0.7 0.2 1.4 0.5 2H7.2c-0.6 0-1.1 0.6-1 1.2l1.7 10c0.1 0.5 0.5 0.8 1 0.8h6.3c0.5 0 0.9-0.4 1-0.8l1.7-10C17.9 9.6 17.4 9 16.8 9zM12 4c1.4 0 2.5 1.3 2.5 3 0 1.7-1.1 3-2.5 3S9.5 8.7 9.5 7C9.5 5.3 10.6 4 12 4zM14.2 10.1L14 11l-0.6-0.3C13.7 10.5 14 10.3 14.2 10.1zM10.6 10.7L10 11l-0.2-0.9C10 10.3 10.3 10.5 10.6 10.7zM15.2 20H8.8L7.2 10h1.5L9 11.2l0.3 1.2 1.1-0.6 1.6-0.8 1.6 0.8 1.1 0.6 0.3-1.2 0.3-1.2h1.5 0L15.2 20z"></path>
																	<path d="M14.5 16.5h-5C9.2 16.5 9 16.7 9 17s0.2 0.5 0.5 0.5h5c0.3 0 0.5-0.2 0.5-0.5S14.8 16.5 14.5 16.5z"></path>
															</svg>
															Đăng nhập
													</a>
                            <?php } ?>
						</div>
                    </li>
                </ul>
            </div>
            
            <div class="menubar">
                <div class="mobnav">
                    <a class="menu-togg" href="#" title="Xem danh mục Bongdaplus">
                        <svg class="menu ico" viewBox="0 0 24 24">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6s0.4-1 1-1h18c0.6 0 1 0.4 1 1S21.6 7 21 7z"></path>
                            <path d="M21 13H3c-0.6 0-1-0.4-1-1s0.4-1 1-1h18c0.6 0 1 0.4 1 1S21.6 13 21 13z"></path>
                            <path d="M15 19H3c-0.6 0-1-0.4-1-1s0.4-1 1-1h12c0.6 0 1 0.4 1 1S15.6 19 15 19z"></path>
                        </svg>
                    </a>
                    <ul class="navbar rgt">
                        <li>
                            <a class="latest" href="/tin-moi" title="Tin tức bóng đá mới nhất">
                                <svg class="ico" viewBox="0 0 24 24">
                                    <path d="M19 4.5h-1.5V3c0-0.3-0.2-0.5-0.5-0.5S16.5 2.7 16.5 3v1.5h-9V3c0-0.3-0.2-0.5-0.5-0.5S6.5 2.7 6.5 3v1.5H5C3.6 4.5 2.5 5.6 2.5 7v12c0 1.4 1.1 2.5 2.5 2.5h14c1.4 0 2.5-1.1 2.5-2.5V7C21.5 5.6 20.4 4.5 19 4.5zM5 5.5h1.5V6c0 0.3 0.2 0.5 0.5 0.5S7.5 6.3 7.5 6V5.5h9V6c0 0.3 0.2 0.5 0.5 0.5s0.5-0.2 0.5-0.5V5.5H19c0.8 0 1.5 0.7 1.5 1.5v0.5h-17V7C3.5 6.2 4.2 5.5 5 5.5zM19 20.5H5c-0.8 0-1.5-0.7-1.5-1.5V8.5h17V19C20.5 19.8 19.8 20.5 19 20.5z"></path>
                                    <path d="M8.5 13.5h-3v-3h3V13.5zM6.5 12.5h1v-1h-1V12.5z"></path>
                                    <path d="M8.5 18.5h-3v-3h3V18.5zM6.5 17.5h1v-1h-1V17.5z"></path>
                                    <path d="M13.5 13.5h-3v-3h3V13.5zM11.5 12.5h1v-1h-1V12.5z"></path>
                                    <path d="M13.5 18.5h-3v-3h3V18.5zM11.5 17.5h1v-1h-1V17.5z"></path>
                                    <path d="M18.5 13.5h-3v-3h3V13.5zM16.5 12.5h1v-1h-1V12.5z"></path>
                                    <path d="M18.5 18.5h-3v-3h3V18.5zM16.5 17.5h1v-1h-1V17.5z"></path>
                                </svg>
                                <span>Tin mới</span>
                            </a>
                        </li>
                        <li>
                            <a class="media" href="/video" title="Video bóng đá mới nhất">
                                <svg class="ico" viewBox="0 0 24 24">
                                    <path d="M8.7 16.1c0.1 0 0.1 0 0.2-0.1l5.1-3c0.3-0.2 0.3-0.6 0-0.8l-5.1-3c-0.1 0-0.1-0.1-0.2-0.1 -0.2 0-0.4 0.2-0.4 0.4v5.9C8.2 16 8.5 16.1 8.7 16.1zM9.2 10.8l3.4 2 -3.4 2V10.8z"></path>
                                    <path d="M21.2 2.8h-17c-0.9 0-1.7 0.7-1.9 1.6 -0.9 0.2-1.6 1-1.6 1.9v13c0 1.1 0.9 2 2 2h17c1.1 0 2-0.9 2-2v-0.6c0.9-0.2 1.5-1 1.5-1.9v-12C23.2 3.6 22.4 2.8 21.2 2.8zM1.8 6.2c0-0.6 0.4-1 1-1h3.2V7H1.8V6.2zM5.9 20.2H2.8c-0.6 0-1-0.4-1-1v-0.8h4.2V20.2zM10.8 20.2H6.9v-1.8h3.8V20.2zM15.6 20.2h-3.8v-1.8h3.8V20.2zM20.8 19.2c0 0.6-0.4 1-1 1h-3.2v-1.8h4.2V19.2zM20.8 17.5h-19V8h19V17.5zM6.9 7V5.2h3.8V7H6.9zM11.8 7V5.2h3.8V7H11.8zM20.8 7h-4.2V5.2h3.2c0.6 0 1 0.4 1 1V7zM22.2 16.8c0 0.4-0.2 0.7-0.5 0.8v-0.1V6.2c0-1.1-0.9-2-2-2H3.4C3.6 4 3.9 3.8 4.2 3.8h17c0.6 0 1 0.4 1 1V16.8z"></path>
                                </svg>
                                <span>Video</span>
                            </a>
                        </li>
                        <li>
                            <a class="score" href="/lich-thi-dau-bong-da" title="Lịch thi đấu bóng đá cập nhật liên tục">
                                <svg class="ico" viewBox="0 0 24 24">
                                    <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zM21.6 9l-3.7 1.2 -5.4-3.9V1.9C16.8 2.2 20.4 5 21.6 9zM15.3 17.2H8.7l-2-6.3L12 7l5.3 3.9L15.3 17.2zM11.5 1.9v4.3l-5.4 3.9L2.4 9C3.6 5 7.2 2.2 11.5 1.9zM1.9 12c0-0.7 0.1-1.4 0.2-2l3.6 1.2 2.1 6.4L6 20.1C3.5 18.2 1.9 15.3 1.9 12zM6.8 20.6l1.8-2.5h6.7l1.8 2.5c-1.5 0.9-3.3 1.5-5.2 1.5C10.1 22.1 8.3 21.6 6.8 20.6zM18.1 20l-1.9-2.6 2.1-6.3 3.6-1.2c0.1 0.7 0.2 1.3 0.2 2C22.1 15.3 20.5 18.2 18.1 20z"></path>
                                    <path d="M4.5 7.5c0.1 0.1 0.2 0.1 0.3 0.1 0.2 0 0.3-0.1 0.4-0.2 1.1-1.6 2.7-2.8 4.6-3.3C10 4 10.2 3.8 10.1 3.5 10 3.2 9.7 3.1 9.5 3.1 7.4 3.7 5.6 5.1 4.4 6.9 4.2 7.1 4.3 7.4 4.5 7.5z"></path>
                                </svg>
                                <span>Lịch TĐ</span>
                            </a>
                        </li>
                        <li>
                            <a class="report" href="/nhan-dinh-bong-da-tags" title="Nhận định bóng đá">
                                <svg class="ico" viewBox="0 0 24 24">
                                    <path d="M6.5 2.5v9h-5v7c0 1.7 1.3 3 3 3h15c1.7 0 3-1.3 3-3v-16H6.5zM2.5 18.5v-6h4v6c0 1.1-0.9 2-2 2S2.5 19.6 2.5 18.5zM21.5 18.5c0 1.1-0.9 2-2 2H7c0.3-0.6 0.5-1.2 0.5-1.9v-0.1 -7 -8h14V18.5z"></path>
                                    <path d="M10 9v9c0 0.3-0.2 0.5-0.5 0.5S9 18.3 9 18V9c0-0.3 0.2-0.5 0.5-0.5S10 8.7 10 9z"></path>
                                    <path d="M12 12v6c0 0.3-0.2 0.5-0.5 0.5S11 18.3 11 18v-6c0-0.3 0.2-0.5 0.5-0.5S12 11.7 12 12z"></path>
                                    <path d="M16 13v5c0 0.3-0.2 0.5-0.5 0.5S15 18.3 15 18v-5c0-0.3 0.2-0.5 0.5-0.5S16 12.7 16 13z"></path>
                                    <path d="M18 12v6c0 0.3-0.2 0.5-0.5 0.5S17 18.3 17 18v-6c0-0.3 0.2-0.5 0.5-0.5S18 11.7 18 12z"></path>
                                    <path d="M14 13.5V18c0 0.3-0.2 0.5-0.5 0.5S13 18.3 13 18v-4.5c0-0.3 0.2-0.5 0.5-0.5S14 13.2 14 13.5z"></path>
                                    <path d="M20 13.5V18c0 0.3-0.2 0.5-0.5 0.5S19 18.3 19 18v-4.5c0-0.3 0.2-0.5 0.5-0.5S20 13.2 20 13.5z"></path>
                                    <path d="M20.7 11.9l-1.2-1.7c0.6-0.5 1-1.3 1-2.2 0-1.7-1.3-3-3-3s-3 1.3-3 3 1.3 3 3 3c0.4 0 0.8-0.1 1.2-0.2l1.2 1.7c0.1 0.1 0.3 0.2 0.4 0.2 0.1 0 0.2 0 0.3-0.1C20.8 12.5 20.9 12.1 20.7 11.9zM15.5 8c0-1.1 0.9-2 2-2s2 0.9 2 2 -0.9 2-2 2S15.5 9.1 15.5 8z"></path>
                                    <path d="M12.2 9.9c-0.1 0-0.3-0.1-0.4-0.2l-1.4-1.8c-0.2-0.2-0.1-0.5 0.1-0.7C10.7 7 11 7.1 11.2 7.3l1.4 1.8c0.2 0.2 0.1 0.5-0.1 0.7C12.4 9.9 12.3 9.9 12.2 9.9z"></path>
                                    <circle cx="9.5" cy="6" r="1"></circle>
                                    <circle cx="13.5" cy="11" r="1"></circle>
                                    <circle cx="17.5" cy="8" r="1"></circle>
                                </svg>
                                <span>Nh.định</span>
                            </a>
                        </li>
                        <li>
                            <a class="member" href="https://member.bongdaplus.vn" aria-label="Member" target="_blank">
                                <svg class="ico" viewBox="0 0 24 24">
                                    <path d="M16.8 9H15c0.3-0.6 0.5-1.3 0.5-2 0-2.2-1.6-4-3.5-4S8.5 4.8 8.5 7c0 0.7 0.2 1.4 0.5 2H7.2c-0.6 0-1.1 0.6-1 1.2l1.7 10c0.1 0.5 0.5 0.8 1 0.8h6.3c0.5 0 0.9-0.4 1-0.8l1.7-10C17.9 9.6 17.4 9 16.8 9zM12 4c1.4 0 2.5 1.3 2.5 3 0 1.7-1.1 3-2.5 3S9.5 8.7 9.5 7C9.5 5.3 10.6 4 12 4zM14.2 10.1L14 11l-0.6-0.3C13.7 10.5 14 10.3 14.2 10.1zM10.6 10.7L10 11l-0.2-0.9C10 10.3 10.3 10.5 10.6 10.7zM15.2 20H8.8L7.2 10h1.5L9 11.2l0.3 1.2 1.1-0.6 1.6-0.8 1.6 0.8 1.1 0.6 0.3-1.2 0.3-1.2h1.5 0L15.2 20z"></path>
                                    <path d="M14.5 16.5h-5C9.2 16.5 9 16.7 9 17s0.2 0.5 0.5 0.5h5c0.3 0 0.5-0.2 0.5-0.5S14.8 16.5 14.5 16.5z"></path>
                                </svg>
                                <span>Th.viên</span>
                            </a>
                        </li>
                    </ul>
                    <a class="srch-togg hide-m" href="#" title="Tìm kiếm nội dung trên Bongdaplus">
                        <svg class="ico" viewBox="0 0 24 24">
                            <path d="M21.6 20.9l-5.4-5.4c2.8-3.1 2.7-7.9-0.3-10.9 -1.6-1.6-3.6-2.3-5.7-2.3S6.2 3 4.6 4.6c-3.1 3.1-3.1 8.2 0 11.3 1.6 1.6 3.6 2.3 5.7 2.3 1.9 0 3.8-0.7 5.3-2l5.4 5.4c0.1 0.1 0.2 0.1 0.4 0.1s0.3 0 0.4-0.1C21.8 21.4 21.8 21.1 21.6 20.9zM5.3 15.2c-1.3-1.3-2.1-3.1-2.1-4.9S4 6.6 5.3 5.3C6.6 4 8.4 3.2 10.3 3.2s3.6 0.7 4.9 2.1c1.3 1.3 2.1 3.1 2.1 4.9s-0.7 3.6-2.1 4.9c-1.3 1.3-3.1 2.1-4.9 2.1S6.6 16.5 5.3 15.2z"></path>
                        </svg>
                    </a>
                </div>
                
            <ul class="navbar">
                <li>
                    <a class="home" href="/" title="Trang chủ Bongdaplus" aria-label="Trang chủ Bongdaplus">
                        <svg class="ico" viewBox="0 0 24 24">
                            <path d="M22.2 12.3c-0.1 0-0.2 0-0.3-0.1L12 3.5l-9.9 8.7c-0.2 0.2-0.5 0.2-0.7 0 -0.2-0.2-0.2-0.5 0-0.7L12 2.2l10.5 9.3c0.2 0.2 0.2 0.5 0 0.7C22.5 12.3 22.3 12.3 22.2 12.3z"></path>
                            <path d="M20.5 21.8h-6v-6h-4v6h-7v-9.5c0-0.3 0.2-0.5 0.5-0.5s0.5 0.2 0.5 0.5v8.5h5v-6h6v6h4v-8.5c0-0.3 0.2-0.5 0.5-0.5s0.5 0.2 0.5 0.5V21.8z"></path>
                            <path d="M20 8.3c-0.3 0-0.5-0.2-0.5-0.5V6.3H18c-0.3 0-0.5-0.2-0.5-0.5s0.2-0.5 0.5-0.5h2.5v2.5C20.5 8.1 20.3 8.3 20 8.3z"></path>
                        </svg>
                    </a>
                </li>

<!--           -->

                @foreach ($the_loai ?? '' as $tl)
									<li class="menu-item default_dropdown drop_to_right">
										<a class="dis" href="" title="">{{$tl -> ten_TL}}</a>
										
										<ul class="mega_dropdown">
											
											@foreach ($loai_tin ?? '' as $lt)
												@if ($tl -> id == $lt -> id_TL)
												<li class="menu-item">
													<a href="{{url('loaitin',[$lt->id] )}}" class="item_link current " title="Boys">
														<span style="color:black;" class="link_text">
															{{$lt -> ten_LT}}
														</span>
													</a>
												</li>
												@endif
											@endforeach
												
										</ul>
											
									</li>
                @endforeach
                
                
            </ul>
            </div>
            <div class="toolbar hide-w">
                <ul class="nav">
                    <li><a href="/world-cup-nu-2023-tags">World Cup nữ</a></li>
                    
                    <li><a href="/bong-da-anh" title="Bóng đá Anh">Anh</a></li>
                    <li><a href="/bong-da-tay-ban-nha" title="Bóng đá Tây Ban Nha">Tây Ban Nha</a></li>
                    <li><a href="/bong-da-duc" title="Bóng đá Đức">Đức</a></li>
                    <li><a href="/bong-da-phap" title="Bóng đá Pháp">Pháp</a></li>
                    <li><a href="/bong-da-y" title="Bóng đá Italia">Italia</a></li>
                    <li><a href="/esports" title="Thể thao điện tử eSports">eSports</a></li>
                </ul>
            </div>
            <div class="searchbar">
                <a class="srch-togg">
                    <svg class="ico" viewBox="0 0 24 24">
                        <path d="M21.6 20.9l-5.4-5.4c2.8-3.1 2.7-7.9-0.3-10.9 -1.6-1.6-3.6-2.3-5.7-2.3S6.2 3 4.6 4.6c-3.1 3.1-3.1 8.2 0 11.3 1.6 1.6 3.6 2.3 5.7 2.3 1.9 0 3.8-0.7 5.3-2l5.4 5.4c0.1 0.1 0.2 0.1 0.4 0.1s0.3 0 0.4-0.1C21.8 21.4 21.8 21.1 21.6 20.9zM5.3 15.2c-1.3-1.3-2.1-3.1-2.1-4.9S4 6.6 5.3 5.3C6.6 4 8.4 3.2 10.3 3.2s3.6 0.7 4.9 2.1c1.3 1.3 2.1 3.1 2.1 4.9s-0.7 3.6-2.1 4.9c-1.3 1.3-3.1 2.1-4.9 2.1S6.6 16.5 5.3 15.2z"></path>
                    </svg>
                </a>
                <form class="srch-form" action="/tim-kiem">
                    <a class="srch-close" href="#">
                        <svg class="ico" viewBox="0 0 24 24">
                            <path d="M12.7 12l7.1-7.1c0.2-0.2 0.2-0.5 0-0.7s-0.5-0.2-0.7 0L12 11.3 4.9 4.1C4.7 4 4.3 4 4.1 4.1S4 4.7 4.1 4.9l7.1 7.1 -7.1 7.1c-0.2 0.2-0.2 0.5 0 0.7C4.2 20 4.4 20 4.5 20s0.3 0 0.4-0.1l7.1-7.1 7.1 7.1c0.1 0.1 0.2 0.1 0.4 0.1s0.3 0 0.4-0.1c0.2-0.2 0.2-0.5 0-0.7L12.7 12z"></path>
                        </svg>
                    </a>
                    <button class="srch-butt" type="submit">
                        <svg class="ico" viewBox="0 0 24 24">
                            <path d="M21.6 20.9l-5.4-5.4c2.8-3.1 2.7-7.9-0.3-10.9 -1.6-1.6-3.6-2.3-5.7-2.3S6.2 3 4.6 4.6c-3.1 3.1-3.1 8.2 0 11.3 1.6 1.6 3.6 2.3 5.7 2.3 1.9 0 3.8-0.7 5.3-2l5.4 5.4c0.1 0.1 0.2 0.1 0.4 0.1s0.3 0 0.4-0.1C21.8 21.4 21.8 21.1 21.6 20.9zM5.3 15.2c-1.3-1.3-2.1-3.1-2.1-4.9S4 6.6 5.3 5.3C6.6 4 8.4 3.2 10.3 3.2s3.6 0.7 4.9 2.1c1.3 1.3 2.1 3.1 2.1 4.9s-0.7 3.6-2.1 4.9c-1.3 1.3-3.1 2.1-4.9 2.1S6.6 16.5 5.3 15.2z"></path>
                        </svg>
                    </button>
                    <div class="srch-patt">
                        <input name="q" type="text" placeholder="Tìm kiếm">
                    </div>
                </form>
            </div>
        </div>
    </div>