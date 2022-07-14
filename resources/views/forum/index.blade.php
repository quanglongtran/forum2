<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Jquery 3.6.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/b7bb695d24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/forum/css/index.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <header class="nav">
            <div href="#" class="nav__logo"
                style="background: url('http://27.71.234.22/assets/images/logoIcon/logo.png')">
            </div>

            <div class="nav__search">
                <input type="text" class="nav__search-input" placeholder="Nhập từ khóa tìm kiếm">
                <img class="nav__search-icon" src="{{asset('assets/icon/search.svg')}}">
            </div>

            <ul class="nav__menu">
                <li class="nav__menu-item active">
                    <a href="#" class="nav__menu-item-link">Diễn đàn</a>
                </li>
                <li class="nav__menu-item">
                    <a href="#" class="nav__menu-item-link">Tin tức mới</a>
                </li>
                <li class="nav__menu-item">
                    <a href="#" class="nav__menu-item-link">Thư viện</a>
                </li>
                <li class="nav__menu-item">
                    <a href="#" class="nav__menu-item-link">Sự kiện</a>
                </li>
                <li class="nav__menu-item">
                    <a href="#" class="nav__menu-item-link">Thành viên</a>
                </li>
            </ul>

            <div class="nav__auth">
                <div class="nav__auth-register nav__auth-item">Đăng ký</div>
                <div class="nav__auth-login nav__auth-item">Đăng nhập</div>
            </div>
        </header>

        <main class="main">
            <div class="main__banner" style="background: url('{{asset('assets/forum/images/banner.png')}}');">
                <div class="main__banner-title text">
                    <p>Diễn đàn</p>
                    <p>Chiến lược dữ liệu dân cư quốc gia</p>
                </div>
                <div class="main__banner-subtitle text">
                    <p>Chuyển đổi số dữ liệu dân cư</p>
                </div>
            </div>

            <!-- Recommended news -->
            <div class="rn">
                <span class="rn__heading">Tin tức đề xuất</span>
                <span class="readmore">
                    <span class="text">Xem thêm</span>
                    <img src="{{asset('assets/icon/angle-right.svg')}}" class="icon">
                </span>

                <div class="w-full"></div>

                <div class="rn__body">
                    <div class="rn__body-thumbnail">
                        <div class="video-button">
                            <img class="" src="{{asset('assets/icon/play-button.svg')}}" />
                        </div>

                        <div class="rn__body-thumbnail-text">
                            <div class="rn__body-thumbnail-text-title">Xin ý kiến dự thảo Chiến lược dữ liệu quốc gia
                            </div>
                            <div class="rn__body-thumbnail-text-type">Dữ liệu dân cư, Tin đề xuất</div>
                        </div>
                    </div>
                    <ul class="rn__body-newlist">
                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">1</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">2</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">3</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">4</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">5</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">6</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">7</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>
                        {{-- <div class="w-full"></div> --}}

                        <li class="rn__body-newlist-item">
                            <span class="rn__body-newlist-item-no">8</span>
                            <span class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ tiêu chí về
                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát (16/9/2020)</span>
                            <div class="w-full"></div>
                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                            <span class="dot"></span>
                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Discover events -->
            <div class="de">
                <div class="de__heading">Khám phá sự kiện</div>

                <div class="w-full"></div>

                <ul class="tags">
                    <li class="tags__item">Hàng đầu</li>
                    <li class="tags__item">Sắp diễn ra</li>
                    <li class="tags__item">Tuần này</li>
                    <li class="tags__item">Đang theo dõi</li>
                </ul>

                <span class="readmore">
                    <span class="readmore__text">Xem thêm</span>
                    <img src="{{asset('assets/icon/angle-right.svg')}}" class="readmore__icon">
                </span>

                <div class="w-full"></div>

                <div class="card">
                    <img src="{{asset('assets/forum/images/thumbnail-card.png')}}" alt="thumbnail"
                        class="card__thumbnail">
                    <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                    <p class="card__title">
                        Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                        chuyển đổi số quốc gia
                    </p>
                    <p class="card__location">Tổ chức thông qua Zoom</p>
                    <span class="card__ip">19 người quan tâm</span>
                    <span class="dot">
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                        </svg>
                    </span>
                    <span class="card__status">Online</span>

                    <div class="card__btn">
                        <div class="card__btn-interested">
                            <span class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                        stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Quan tâm
                        </div>
                        <div class="card__btn-share">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                    stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('assets/forum/images/thumbnail-card.png')}}" alt="thumbnail"
                        class="card__thumbnail">
                    <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                    <p class="card__title">
                        Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                        chuyển đổi số quốc gia
                    </p>
                    <p class="card__location">Tổ chức thông qua Zoom</p>
                    <span class="card__ip">19 người quan tâm</span>
                    <span class="dot">
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                        </svg>
                    </span>
                    <span class="card__status">Online</span>

                    <div class="card__btn">
                        <div class="card__btn-interested">
                            <span class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                        stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Quan tâm
                        </div>
                        <div class="card__btn-share">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                    stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('assets/forum/images/thumbnail-card.png')}}" alt="thumbnail"
                        class="card__thumbnail">
                    <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                    <p class="card__title">
                        Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                        chuyển đổi số quốc gia
                    </p>
                    <p class="card__location">Tổ chức thông qua Zoom</p>
                    <span class="card__ip">19 người quan tâm</span>
                    <span class="dot">
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                        </svg>
                    </span>
                    <span class="card__status">Online</span>

                    <div class="card__btn">
                        <div class="card__btn-interested">
                            <span class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                        stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Quan tâm
                        </div>
                        <div class="card__btn-share">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                    stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('assets/forum/images/thumbnail-card.png')}}" alt="thumbnail"
                        class="card__thumbnail">
                    <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                    <p class="card__title">
                        Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                        chuyển đổi số quốc gia
                    </p>
                    <p class="card__location">Tổ chức thông qua Zoom</p>
                    <span class="card__ip">19 người quan tâm</span>
                    <span class="dot">
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                        </svg>
                    </span>
                    <span class="card__status">Online</span>

                    <div class="card__btn">
                        <div class="card__btn-interested">
                            <span class="icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                        stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Quan tâm
                        </div>
                        <div class="card__btn-share">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                    stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Discussion forum -->
            <div class="df">
                <div class="df__heading">Diễn đàn thảo luận</div>

                <div class="df__body">
                    <div class="df__body-block">
                        <div class="df__body-block-header">
                            <div class="df__body-block-header-title">Công nghệ và đời sống</div>
                            <div class="df__body-block-header-subtitle">Cập nhật thông tin công nghệ thông tin mỗi ngày
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="df__body-block nd">
                        <!-- New discussion -->
                        <div class="df__body-block-heading">Thảo luận mới</div>

                        <div class="df__body-block-container">
                            <div class="df__body-block-container-item">
                                <p class="df__body-block-container-item-title">
                                    <span>Thách thức lớn nhất mà bạn gặp phải khi cố gắng tự động hoá quy trình làm việc
                                        của mình là gì?</span>
                                </p>
                                <p class="df__body-block-container-item-comment">
                                <span class="icon">
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11.25C9.31371 11.25 12 8.8995 12 6C12 3.10051 9.31371 0.75 6 0.75C2.68629 0.75 0 3.10051 0 6C0 7.32065 0.557296 8.52741 1.47734 9.45005C1.40857 10.1684 1.19178 10.9517 0.944706 11.5647C0.869317 11.7518 1.02301 11.9601 1.22179 11.9261C2.84271 11.6489 3.81201 11.2371 4.23963 11.0204C4.79631 11.1697 5.38743 11.25 6 11.25Z"
                                            fill="#475467" />
                                    </svg>

                                </span>
                                <span class="text">43</span>
                                </p>
                                <div class="dot">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#EAECF0"></circle>
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item-time">Lúc 14:02, Thứ ba</div>
                            </div>

                            <div class="df__body-block-container-item">
                                <p class="df__body-block-container-item-title">
                                    <span>Thách thức lớn nhất mà bạn gặp phải khi cố gắng tự động hoá quy trình làm việc
                                        của mình là gì?</span>
                                </p>
                                <p class="df__body-block-container-item-comment">
                                <span class="icon">
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11.25C9.31371 11.25 12 8.8995 12 6C12 3.10051 9.31371 0.75 6 0.75C2.68629 0.75 0 3.10051 0 6C0 7.32065 0.557296 8.52741 1.47734 9.45005C1.40857 10.1684 1.19178 10.9517 0.944706 11.5647C0.869317 11.7518 1.02301 11.9601 1.22179 11.9261C2.84271 11.6489 3.81201 11.2371 4.23963 11.0204C4.79631 11.1697 5.38743 11.25 6 11.25Z"
                                            fill="#475467" />
                                    </svg>

                                </span>
                                <span class="text">43</span>
                                </p>
                                <div class="dot">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#EAECF0"></circle>
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item-time">Lúc 14:02, Thứ ba</div>
                            </div>

                            <div class="df__body-block-container-item">
                                <p class="df__body-block-container-item-title">
                                    <span>Bạn có biết bất kỳ cuộc trò chuyện slack / discord / etc nào dành cho các nhà phát triển AR / VR / Metaverse không?</span>
                                </p>
                                <p class="df__body-block-container-item-comment">
                                <span class="icon">
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11.25C9.31371 11.25 12 8.8995 12 6C12 3.10051 9.31371 0.75 6 0.75C2.68629 0.75 0 3.10051 0 6C0 7.32065 0.557296 8.52741 1.47734 9.45005C1.40857 10.1684 1.19178 10.9517 0.944706 11.5647C0.869317 11.7518 1.02301 11.9601 1.22179 11.9261C2.84271 11.6489 3.81201 11.2371 4.23963 11.0204C4.79631 11.1697 5.38743 11.25 6 11.25Z"
                                            fill="#475467" />
                                    </svg>

                                </span>
                                <span class="text">43</span>
                                </p>
                                <div class="dot">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#EAECF0"></circle>
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item-time">Lúc 14:02, Thứ ba</div>
                            </div>

                            <div class="df__body-block-container-item">
                                <p class="df__body-block-container-item-title">
                                    <span>Ưu và nhược điểm tăng tốc</span>
                                </p>
                                <p class="df__body-block-container-item-comment">
                                <span class="icon">
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11.25C9.31371 11.25 12 8.8995 12 6C12 3.10051 9.31371 0.75 6 0.75C2.68629 0.75 0 3.10051 0 6C0 7.32065 0.557296 8.52741 1.47734 9.45005C1.40857 10.1684 1.19178 10.9517 0.944706 11.5647C0.869317 11.7518 1.02301 11.9601 1.22179 11.9261C2.84271 11.6489 3.81201 11.2371 4.23963 11.0204C4.79631 11.1697 5.38743 11.25 6 11.25Z"
                                            fill="#475467" />
                                    </svg>

                                </span>
                                <span class="text">43</span>
                                </p>
                                <div class="dot">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#EAECF0"></circle>
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item-time">Lúc 14:02, Thứ ba</div>
                            </div>

                            <div class="df__body-block-container-item">
                                <p class="df__body-block-container-item-title">
                                    <span>Phản hồi về SaaS của chúng tôi - Percival</span>
                                </p>
                                <p class="df__body-block-container-item-comment">
                                <span class="icon">
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11.25C9.31371 11.25 12 8.8995 12 6C12 3.10051 9.31371 0.75 6 0.75C2.68629 0.75 0 3.10051 0 6C0 7.32065 0.557296 8.52741 1.47734 9.45005C1.40857 10.1684 1.19178 10.9517 0.944706 11.5647C0.869317 11.7518 1.02301 11.9601 1.22179 11.9261C2.84271 11.6489 3.81201 11.2371 4.23963 11.0204C4.79631 11.1697 5.38743 11.25 6 11.25Z"
                                            fill="#475467" />
                                    </svg>

                                </span>
                                <span class="text">43</span>
                                </p>
                                <div class="dot">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#EAECF0"></circle>
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item-time">Lúc 14:02, Thứ ba</div>
                            </div>
                        </div>
                    </div>

                    <div class="df__body-block">
                        <div class="df__body-block-header">
                            <div class="df__body-block-header-title">Công nghệ và đời sống</div>
                            <div class="df__body-block-header-subtitle">Cập nhật thông tin công nghệ thông tin mỗi ngày
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="df__body-block-container">
                            <div style="display: flex;">
                                <div class="df__body-block-container-item left">
                                    <div class="df__body-block-container-item-icon">
                                        <img src="{{asset('assets/icon/message.svg')}}">
                                    </div>
                                    <div class="df__body-block-container-item-title">
                                        <span>Tin tức công nghệ và Đời sống</span>
                                        <span class="df__body-block-container-item-title-badge">New</span>
                                    </div>
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Chủ đề</p>
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="separate">
                                    <svg width="1" height="36" viewBox="0 0 1 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="0.5" x2="0.499998" y2="35.5" stroke="#EAECF0" />
                                    </svg>
                                </div>
                                <div class="df__body-block-container-item right">
                                    <div class="df__body-block-container-item-quantity">
                                        <p>Bài viết</p>
                                        <span>5,4 K</span>
                                    </div>
                                    <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                        class="df__body-block-container-item-avatar">
                                    <div class="df__body-block-container-item-news">
                                        <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ dân
                                            Trung Quốc bị rò rỉ</div>
                                        <span class="df__body-block-container-item-news-time text">Hôm nay 15:31</span>
                                        <div class="dot">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                            </svg>
                                        </div>
                                        <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{asset('assets/forum/js/index.js')}}"></script>
</body>

</html>