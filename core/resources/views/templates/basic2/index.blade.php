@extends('templates.basic2.layouts.frontend')

@section('content')
@php
    $rand = rand();
@endphp
<main>
    <!-- Banner start -->
    <section class="banner">
        <div class="banner__backround" style="background-image: url('/assets/forum/images/banner.png');">
            <div class="container">
                <div class="banner-title text">
                    <p>Diễn đàn</p>
                    <p>Chiến lược dữ liệu dân cư quốc gia</p>
                </div>
                <div class="banner-subtitle text">
                    <p>Chuyển đổi số dữ liệu dân cư</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->

    <!-- News start -->
    <section id="news_home">
        <div class="container">
            <div class="title_block">
                <h2 class="title">Tin tức đề xuất</h2>
                <a href="./tin-tuc/" class="readmore  btn btn-link">
                    <span class="text">Xem thêm</span>
                    <img src="/assets/icon/angle-right.svg" class="icon">
                </a>
            </div>

            <div class="news-list">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box-item box-overlay box-text-bottom post-item has-hover">
                            <a href="#" class="plain">
                                <div class="img">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top: 65%;">
                                            <img id="rn-thumbnail" width="1020" height="574"
                                                src=""
                                                class="img-news wp-post-image lazyloaded" alt=""
                                                sizes="(max-width: 1020px) 100vw, 1020px"
                                                data-ll-status="loaded">
                                                <noscript>&lt;img width="1020" height="574"
                                                src="https://wongroup.com.vn/wp-content/uploads/2021/08/5-1024x576.jpg"
                                                class="img-news wp-post-image" alt=""
                                                srcset="https://wongroup.com.vn/wp-content/uploads/2021/08/5-1024x576.jpg
                                                1024w,
                                                https://wongroup.com.vn/wp-content/uploads/2021/08/5-355x200.jpg
                                                355w,
                                                https://wongroup.com.vn/wp-content/uploads/2021/08/5-768x432.jpg
                                                768w,
                                                https://wongroup.com.vn/wp-content/uploads/2021/08/5-1536x864.jpg
                                                1536w,
                                                https://wongroup.com.vn/wp-content/uploads/2021/08/5-2048x1152.jpg
                                                2048w,
                                                https://wongroup.com.vn/wp-content/uploads/2021/08/5-300x169.jpg
                                                300w" sizes="(max-width: 1020px) 100vw, 1020px" /&gt;</noscript>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-text text-left">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="rn-title post-title is-large "></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12 rn-list left">
                                {{-- <div class="post-item post-list">
                                    <span class="newlist-item-no">1</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">2</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">3</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">4</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">5</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div> --}}
                            </div>

                            <div class="col-md-6 col-12 rn-list right">
                                {{-- <div class="post-item post-list">
                                    <span class="newlist-item-no">6</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">7</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">7</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">9</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div>

                                <div class="post-item post-list">
                                    <span class="newlist-item-no">10</span>
                                    <a href="#" class="newlist-item-title">Cục Tin học hóa: Xin ý kiến dự thảo Bộ
                                        tiêu chí về chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                        (16/9/2020)</a>
                                    <div class="w-full"></div>
                                    <span class="newlist-item-type text"><a href="#">Tin tức</a></span>

                                    <span class="newlist-item-views text">5.3k lượt xem</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- News end -->

    <!-- Events start -->
    <section id="events_home">
        <div class="container">
            <div class="title_block">
                <h2 class="title">Khám phá sự kiện</h2>
                <a href="./su-kien/" class="readmore  btn btn-link">
                    <span class="text">Xem thêm</span>
                    <img src="/assets/icon/angle-right.svg" class="icon">
                </a>
            </div>

            <div class="events-list">


                <ul class="tabs nav-pills nav">
                    <li class="tabs__item active"><a data-toggle="tab" href="#top">Hàng đầu</a></li>
                    <li class="tabs__item"><a data-toggle="tab" href="#upcoming">Sắp diễn ra</a></li>
                    <li class="tabs__item"><a data-toggle="tab" href="#this_week">Tuần này</a></li>
                    <li class="tabs__item"><a data-toggle="tab" href="#following">Đang theo dõi</a></li>
                </ul>

                <div class="tab-content">
                    <div id="top" class="tab-pane in active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">
                                                    Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="2" height="2" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1" cy="1" r="1" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div id="upcoming" class="tab-pane">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="this_week" class="tab-pane">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="following" class="tab-pane">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="event-item">
                                    <div class="box-item box-text-bottom post-item">
                                        <div class="img">
                                            <a href="#" class="plain">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top: 56.67%;">
                                                        <img src="https://picsum.photos/400/300">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-text text-left">

                                            <p class="card__time">Thứ 3, 12 tháng 7 vào 8:30</p>

                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Hội thảo online: Đẩy mạnh dụng dữ
                                                    liệu về dân cư, định danh và xác thực điện tử
                                                    phục
                                                    vụ
                                                    chuyển đổi số quốc gia
                                                </h5>
                                            </div>

                                            <p class="card__location">Tổ chức thông qua Zoom</p>
                                            <span class="card__ip">19 người quan tâm</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>

                                            <span class="card__status">Online</span>

                                            <div class="card__btn">
                                                <a href="#" class="card__btn-interested">
                                                    <span class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                                stroke="#101828" stroke-width="1.67"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    Quan tâm
                                                </a>
                                                <a href="#" class="card__btn-share">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                                            stroke="#101828" stroke-width="1.67"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>
    <!-- Events end -->

    <!-- Forums start -->
    <section id="forums_home" class="bg-gray">
        <div class="container">
            <div class="title_block">
                <h2 class="title">Diễn đàn thảo luận</h2>
            </div>

            <div class="forums-list">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="forum-block">
                            <div class="forum-block__header">
                                <h4 class="forum-block__title">Công nghệ và đời sống</h4>
                                <p class="forum-block__des">Cập nhật thông tin công nghệ mỗi ngày</p>
                            </div>
                            <div class="forum-block__body">

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="forum-block">
                            <div class="forum-block__header">
                                <h4 class="forum-block__title">Công nghệ và đời sống</h4>
                                <p class="forum-block__des">Cập nhật thông tin công nghệ mỗi ngày</p>
                            </div>
                            <div class="forum-block__body">

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-thread">
                                    <div class="single-thread__left">
                                        <h5 class="single-thread__title">
                                            <div class="df__body-block-container-item-icon">
                                                <img src="http://27.71.234.22/assets/icon/message.svg">
                                            </div>
                                            <a href="#"> Tin tức công nghệ và Đời sống </a>
                                        </h5>
                                    </div>
                                    <div class="single-thread__right">
                                        <div class="top">
                                            <ul class="top__list">
                                                <li class="text-center">
                                                    <span class="fs--12px">Chủ đề</span>
                                                    <h3>28</h3>
                                                </li>

                                                <li class="text-center">
                                                    <span class="fs--12px">Bài viết</span>
                                                    <h3>5,4 K</h3>
                                                </li>

                                                <li>
                                                    <div class="latest-topic">
                                                        <div class="latest-topic__thumb">
                                                            <a
                                                                href="https://script.viserlab.com/forumlab/user/rasel123/27">
                                                                <img src="https://script.viserlab.com/forumlab/assets/images/user/profile/60fb8d30c7b601627098416.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="latest-topic__content">
                                                            <h6 class="latest-topic__title">
                                                                <a
                                                                    href="https://script.viserlab.com/forumlab/topic/details/php-for-wordpress/31">
                                                                    23 TB dữ liệu của tỷ dân Trung Quốc bị rò rỉ
                                                                </a>
                                                                <span>Hôm nay 15:31</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-3">
                        <div class="sidebar-widget">
                            <div class="sidebar-widget__header">
                                <h5 class="sidebar-widget__title">Thảo luận mới</h5>
                            </div>
                            <div class="sidebar-widget__body">
                                <ul class="discussion-list">
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/45">
                                                QUY ĐỊNH VỀ VIỆC CẤM ĐĂNG BÀI SPAM, BÀI QUẢNG CÁO TRÊN MXH VNREVIEW
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            1 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/1">
                                                100.000 con trăn Miến Điện đã biến Florida thành vương quốc riêng
                                                như thế nào?
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/2">
                                                PHÁT HIỆN RẮN 2 ĐẦU CỰC HIẾM TRONG TỰ NHIÊN
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/3">
                                                CẢNH "RỢN TÓC GÁY": RẮN NHỎ XƠI TÁI RẮN TO HƠN VÀI LẦN
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/4">
                                                SẢN XUẤT XE ĐIỆN TẠO RA LƯỢNG PHÁT THẢI CARBON KHỔNG LỒ, VẬY CÁC
                                                CÔNG TY NÊN LÀM GÌ ĐỂ KHẮC PHỤC ĐIỀU NÀY?
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/5">
                                                ĐÂY MỚI LÀ LÝ DO LOGO CỦA APPLE CÓ HÌNH QUẢ CÁO CẮN DỞ, HÓA RA CŨNG
                                                ĐƠN GIẢN THÔI KHÔNG THÂM SÂU NHƯ CÁC PHỎNG ĐOÁN
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/6">
                                                VIVO ẤN ĐỘ BỊ ĐIỀU TRA VÌ DÍNH NGHI VẤN RỬA TIỀN
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                    <li class="single-discussion">
                                        <h6 class="single-discussion__title">
                                            <a href="http://27.71.234.22/topic/details/sadfsadf/7">
                                                SARMAT KHÔNG LÀ GÌ CẢ, SIÊU VŨ KHÍ NGÀY TẬN THẾ NÀY, CHỈ CÓ MỘT QUẢ
                                                CÓ THỂ HỦY DIỆT TOÀN BỘ NHÂN LOẠI
                                            </a>
                                        </h6>
                                        <span class="fs--12px">
                                            <i class="las la-comments fs--12px"></i>
                                            0 đã trả lời </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Forums end -->

    <!-- Documents start -->
    <section id="documents_home">
        <div class="container">
            <div class="title_block justify-content-between">
                <h2 class="title">Thư viện số</h2>
                <div class="cat_list">
                    <ul class="tabs nav nav-right">
                        <li class="tabs__item active"><a href="#">Dữ liệu lớn</a></li>
                        <li class="tabs__item"><a href="#">Trí tuệ nhân tạo</a></li>
                        <li class="tabs__item"><a href="#">Học máy</a></li>
                    </ul>   
                </div>
            </div>

            <div class="forums-list">
                <div class="dl__container" style="margin-top: 1rem">
                    <div class="dl__container-header">
                        <span class="statistics">Số hiệu</span>
                        <span class="created">Ngày ban hành</span>
                        <span class="title">Nội dung trích yếu</span>
                        <span class="action">Hành động</span>
                    </div>

                    <div class="dl__body">
                        <div class="db__body-item">
                            <a href="#" class="statistics"><span class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                            fill="#EAECF5" />
                                        <path
                                            d="M20.8333 11.6667H14.9999C14.5579 11.6667 14.134 11.8423 13.8214 12.1548C13.5088 12.4674 13.3333 12.8913 13.3333 13.3333V26.6667C13.3333 27.1087 13.5088 27.5326 13.8214 27.8452C14.134 28.1577 14.5579 28.3333 14.9999 28.3333H24.9999C25.4419 28.3333 25.8659 28.1577 26.1784 27.8452C26.491 27.5326 26.6666 27.1087 26.6666 26.6667V17.5M20.8333 11.6667L26.6666 17.5M20.8333 11.6667V17.5H26.6666"
                                            stroke="#3E4784" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span><span style="margin: auto 0">Công văn Số
                                    1507-CV/VPTW</span></a>
                            <span class="created">11/08/2021</span>
                            <span class="title">
                                <span>
                                    Công văn về việc gửi Phát biểu của đồng chí Tổng Bí thư Nguyễn Phú Trọng tại
                                    Phiên họp đầu tiên của Chính phủ nhiệm kỳ 2021-2026
                                </span>
                            </span>
                            <a href="#" class="action">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5M4.83333 7.33333L9 11.5M9 11.5L13.1667 7.33333M9 11.5V1.5"
                                            stroke="#C61622" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                Tải về
                            </a>
                        </div>
                        <div class="db__body-item">
                            <a href="#" class="statistics"><span class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                            fill="#EAECF5" />
                                        <path
                                            d="M20.8333 11.6667H14.9999C14.5579 11.6667 14.134 11.8423 13.8214 12.1548C13.5088 12.4674 13.3333 12.8913 13.3333 13.3333V26.6667C13.3333 27.1087 13.5088 27.5326 13.8214 27.8452C14.134 28.1577 14.5579 28.3333 14.9999 28.3333H24.9999C25.4419 28.3333 25.8659 28.1577 26.1784 27.8452C26.491 27.5326 26.6666 27.1087 26.6666 26.6667V17.5M20.8333 11.6667L26.6666 17.5M20.8333 11.6667V17.5H26.6666"
                                            stroke="#3E4784" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span><span style="margin: auto 0">Công văn Số
                                    1507-CV/VPTW</span></a>
                            <span class="created">11/08/2021</span>
                            <span class="title">
                                <span>
                                    Công văn về việc gửi Phát biểu của đồng chí Tổng Bí thư Nguyễn Phú Trọng tại
                                    Phiên họp đầu tiên của Chính phủ nhiệm kỳ 2021-2026
                                </span>
                            </span>
                            <a href="#" class="action">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5M4.83333 7.33333L9 11.5M9 11.5L13.1667 7.33333M9 11.5V1.5"
                                            stroke="#C61622" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                Tải về
                            </a>
                        </div>
                        <div class="db__body-item">
                            <a href="#" class="statistics"><span class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                            fill="#EAECF5" />
                                        <path
                                            d="M20.8333 11.6667H14.9999C14.5579 11.6667 14.134 11.8423 13.8214 12.1548C13.5088 12.4674 13.3333 12.8913 13.3333 13.3333V26.6667C13.3333 27.1087 13.5088 27.5326 13.8214 27.8452C14.134 28.1577 14.5579 28.3333 14.9999 28.3333H24.9999C25.4419 28.3333 25.8659 28.1577 26.1784 27.8452C26.491 27.5326 26.6666 27.1087 26.6666 26.6667V17.5M20.8333 11.6667L26.6666 17.5M20.8333 11.6667V17.5H26.6666"
                                            stroke="#3E4784" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span><span style="margin: auto 0">Công văn Số
                                    1507-CV/VPTW</span></a>
                            <span class="created">11/08/2021</span>
                            <span class="title">
                                <span>
                                    Công văn về việc gửi Phát biểu của đồng chí Tổng Bí thư Nguyễn Phú Trọng tại
                                    Phiên họp đầu tiên của Chính phủ nhiệm kỳ 2021-2026
                                </span>
                            </span>
                            <a href="#" class="action">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5M4.83333 7.33333L9 11.5M9 11.5L13.1667 7.33333M9 11.5V1.5"
                                            stroke="#C61622" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                Tải về
                            </a>
                        </div>
                        <div class="db__body-item">
                            <a href="#" class="statistics"><span class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                            fill="#EAECF5" />
                                        <path
                                            d="M20.8333 11.6667H14.9999C14.5579 11.6667 14.134 11.8423 13.8214 12.1548C13.5088 12.4674 13.3333 12.8913 13.3333 13.3333V26.6667C13.3333 27.1087 13.5088 27.5326 13.8214 27.8452C14.134 28.1577 14.5579 28.3333 14.9999 28.3333H24.9999C25.4419 28.3333 25.8659 28.1577 26.1784 27.8452C26.491 27.5326 26.6666 27.1087 26.6666 26.6667V17.5M20.8333 11.6667L26.6666 17.5M20.8333 11.6667V17.5H26.6666"
                                            stroke="#3E4784" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span><span style="margin: auto 0">Công văn Số
                                    1507-CV/VPTW</span></a>
                            <span class="created">11/08/2021</span>
                            <span class="title">
                                <span>
                                    Công văn về việc gửi Phát biểu của đồng chí Tổng Bí thư Nguyễn Phú Trọng tại
                                    Phiên họp đầu tiên của Chính phủ nhiệm kỳ 2021-2026
                                </span>
                            </span>
                            <a href="#" class="action">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5M4.83333 7.33333L9 11.5M9 11.5L13.1667 7.33333M9 11.5V1.5"
                                            stroke="#C61622" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                Tải về
                            </a>
                        </div>
                        <div class="db__body-item">
                            <a href="#" class="statistics"><span class="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                            fill="#EAECF5" />
                                        <path
                                            d="M20.8333 11.6667H14.9999C14.5579 11.6667 14.134 11.8423 13.8214 12.1548C13.5088 12.4674 13.3333 12.8913 13.3333 13.3333V26.6667C13.3333 27.1087 13.5088 27.5326 13.8214 27.8452C14.134 28.1577 14.5579 28.3333 14.9999 28.3333H24.9999C25.4419 28.3333 25.8659 28.1577 26.1784 27.8452C26.491 27.5326 26.6666 27.1087 26.6666 26.6667V17.5M20.8333 11.6667L26.6666 17.5M20.8333 11.6667V17.5H26.6666"
                                            stroke="#3E4784" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span><span style="margin: auto 0">Công văn Số
                                    1507-CV/VPTW</span></a>
                            <span class="created">11/08/2021</span>
                            <span class="title">
                                <span>
                                    Công văn về việc gửi Phát biểu của đồng chí Tổng Bí thư Nguyễn Phú Trọng tại
                                    Phiên họp đầu tiên của Chính phủ nhiệm kỳ 2021-2026
                                </span>
                            </span>
                            <a href="#" class="action">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 11.5V14.8333C16.5 15.2754 16.3244 15.6993 16.0118 16.0118C15.6993 16.3244 15.2754 16.5 14.8333 16.5H3.16667C2.72464 16.5 2.30072 16.3244 1.98816 16.0118C1.67559 15.6993 1.5 15.2754 1.5 14.8333V11.5M4.83333 7.33333L9 11.5M9 11.5L13.1667 7.33333M9 11.5V1.5"
                                            stroke="#C61622" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                Tải về
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Documents end -->
    
    @isset($newsAndEvents)
    <div id="newsAndEvents-{{$rand}}" style="display: none">{{$newsAndEvents}}</div>
<script>
    // for (let i of $('.dot svg')) {
    //     i.setAttribute('width', 3)
    // }
    console.log($('.dot svg').attr('width'))
    var newsAndEvents = JSON.parse($('#newsAndEvents-{{$rand}}').text())
    console.log(newsAndEvents)
    const appendRNList = (side = left, item, index) => {
        let view = (item.view > 999) ? item.view / 1000 + 'k' : item.view
        
        $('.rn-list.' + side).append(
            `<div class="post-item post-list">
                <span class="newlist-item-no">${Number(index)+1}</span>
                <a href="#" class="newlist-item-title">${item.post_title}</a>
                <div class="w-full"></div>
                <span class="newlist-item-type text"><a href="#">${item.type}</a></span>

                <span class="newlist-item-views text">${view} lượt xem</span>
            </div>`
        );
    }
    let eventsCount = 0;

const appendDEList = (item, index) => {
    $('#top .row').append(
        `
            <div class="col-md-3 col-sm-6 col-12">
                <div class="event-item">
                    <div class="box-item box-text-bottom post-item">
                        <div class="img">
                            <a href="#" class="plain">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top: 56.67%;">
                                        <img src="${item.image}">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-text text-left">

                            <p class="card__time">${item.time.diffForHumans}</p>

                            <div class="box-text-inner blog-post-inner">
                                <h5 class="post-title is-large ">${item.post_title}</h5>
                            </div>

                            <p class="card__location">Tổ chức thông qua Zoom</p>
                            <span class="card__ip">19 người quan tâm</span>
                            <span class="dot">
                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                </svg>
                            </span>

                            <span class="card__status">Online</span>

                            <div class="card__btn">
                                <a href="#" class="card__btn-interested">
                                    <span class="icon">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.50008 1.66663L12.0751 6.88329L17.8334 7.72496L13.6667 11.7833L14.6501 17.5166L9.50008 14.8083L4.35008 17.5166L5.33341 11.7833L1.16675 7.72496L6.92508 6.88329L9.50008 1.66663Z"
                                                stroke="#101828" stroke-width="1.67"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    Quan tâm
                                </a>
                                <a href="#" class="card__btn-share">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.15833 11.2583L11.85 14.575M11.8417 5.42496L6.15833 8.74163M16.5 4.16663C16.5 5.54734 15.3807 6.66663 14 6.66663C12.6193 6.66663 11.5 5.54734 11.5 4.16663C11.5 2.78591 12.6193 1.66663 14 1.66663C15.3807 1.66663 16.5 2.78591 16.5 4.16663ZM6.5 9.99996C6.5 11.3807 5.38071 12.5 4 12.5C2.61929 12.5 1.5 11.3807 1.5 9.99996C1.5 8.61925 2.61929 7.49996 4 7.49996C5.38071 7.49996 6.5 8.61925 6.5 9.99996ZM16.5 15.8333C16.5 17.214 15.3807 18.3333 14 18.3333C12.6193 18.3333 11.5 17.214 11.5 15.8333C11.5 14.4526 12.6193 13.3333 14 13.3333C15.3807 13.3333 16.5 14.4526 16.5 15.8333Z"
                                            stroke="#101828" stroke-width="1.67"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `
    )
}
    for (let i of newsAndEvents) {
        if (i.name === 'Tin tức đề xuất') {
            $('#rn-thumbnail').attr('src', i.posts[0].image)
            $('.rn-title')[0].innerText = i.posts[0].post_title
            for (let j in i.posts) {
                if (j > 0) {
                    if (j < 6) {
                        appendRNList('left', i.posts[j], j)
                    } else {
                        appendRNList('right', i.posts, j)
                    }
                }
            }
        }
        if (i.name === 'Khám phá sự kiện') {
            for (let j in i.posts) {
                if (j < 5) {
                    appendDEList(i.posts[j], j);
                }
            }
            eventsCount++;
        }
    }
</script>
@endisset
</main>
@endsection