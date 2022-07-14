@extends('templates.basic2.layouts.frontend')

@section('content')
@php
$rand = rand();
@endphp
<main>
    

    {{-- <div class="reply" style="--level:1;">
        <span style="position: relative" class="reply-text">
            ádhasjkdjk
            <div style="position: absolute">
                <div class="reply-btn" onclick="replyModal(this)" comment-id="{{$comment->id}}"
                    parent-id="{{$parent_id++}}" data-bs-toggle="modal" data-bs-target="#reply-modal">Reply</div>
        </span>
    </div>
    </div>
    
    </div>
    </div> --}}
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
                <a href="./tin-tuc/" class="readmore  btn btn-link" id="newshome-readmore-{{$rand}}">
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
                                        <a href="#" class="image-cover" style="padding-top: 65%;display: block">
                                            <img id="rn-thumbnail" width="1020" height="574" src=""
                                                class="img-news wp-post-image lazyloaded" alt=""
                                                sizes="(max-width: 1020px) 100vw, 1020px" data-ll-status="loaded">
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
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-left" style="pointer-events: none">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="rn-title post-title is-large "></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12 rn-list left"></div>

                            <div class="col-md-6 col-12 rn-list right"></div>
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
                        <div class="row"></div>
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                                                            stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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
                <h2 class="title"></h2>
            </div>

            <div class="forums-list">
                <div class="row">
                    <div class="col-12 col-md-9 render-list"></div>


                    <div class="col-12 col-md-3">
                        <div class="sidebar-widget">
                            <div class="sidebar-widget__header">
                                <h5 class="sidebar-widget__title">Thảo luận mới</h5>
                            </div>
                            <div class="sidebar-widget__body">
                                <ul class="discussion-list" id="discussion-list-{{$rand}}"></ul>
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

                    <div class="dl__body" id="db__body-item-{{$rand}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Documents end -->
    <script>
        const slug = (str, separate = '') => {
            var result = str.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replaceAll(' ', separate).replaceAll('đ', 'd');
            result = result.replaceAll('"', separate).replaceAll(',', separate).replaceAll('.', separate).replaceAll("'", separate);
            return result.replaceAll('/', separate).replaceAll('“', separate).replaceAll('”', separate);
        }
    </script>
    @isset($newsAndEvents)
    <div id="newsAndEvents-{{$rand}}" style="display: none">{{$newsAndEvents}}</div>
    <div id="liked-{{$rand}}" style="display: none">{{$liked}}</div>
    <script>
        console.log($('#liked-{{$rand}}').text())
        var newsAndEvents = JSON.parse($('#newsAndEvents-{{$rand}}').text())
        var liked = ($('#liked-{{$rand}}').text() == '') ? [] : JSON.parse($('#liked-{{$rand}}').text())
        const appendRNList = (side = left, item, index, parent) => {
            let view = (item.view > 999) ? item.view / 1000 + 'k' : item.view
            let tintuc = (item.type == null) ? 'Tin tức' : item.type
            let postSlug = slug(item.post_title, '-')
            
            $('.rn-list.' + side).append(
                `<div class="post-item post-list">
                    <span class="newlist-item-no">${index}</span>
                    <a href="{{url('topic/details/${postSlug}/${item.id}')}}" class="newlist-item-title">${item.post_title}</a>
                    <div class="w-full"></div>
                    <span class="newlist-item-type text"><a href="#">${tintuc}</a></span>

                    <span class="newlist-item-views text">${view} lượt xem</span>
                </div>`
            );
        };
        let eventsCount = 0;

        const appendDEList = (item, index, parent) => {
            postSlug = slug(item.post_title, '-');
            let isLiked;
            if (liked.length > 0) {
                for (let i of liked) {
                    if (i.post_id == item.id) {
                        isLiked = '#000'
                        break;
                    } else {
                        isLiked = 'none'
                    }
                }
            } else {
                isLiked = 'none'
            }
            
            $('#top .row').append(
                `
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="event-item">
                            <div class="box-item box-text-bottom post-item">
                                <div class="img">
                                    <a href="{{url('topic/details/${postSlug}/${item.id}')}}" class="plain">
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
                                        <a href="{{url('topic/details/${postSlug}/${item.id}')}}" class="h5 post-title is-large ">${item.post_title}</a>
                                    </div>

                                    <p class="card__location">Tổ chức thông qua Zoom</p>
                                    <span class="card__ip">${item.like} người quan tâm</span>
                                    <span class="dot">
                                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                        </svg>
                                    </span>

                                    <span class="card__status">Offline</span>

                                    <div class="card__btn">
                                        <a href="#" class="card__btn-interested like-{{$rand}}-${item.id}">
                                            <span class="icon">
                                                <svg width="19" height="19" viewBox="0 0 19 19" fill="${isLiked}"
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

            $('.like-{{$rand}}-'+item.id).on('click', function() {
                if ("{{!Auth::check()}}") {
                    var redirectLogin = confirm('Bạn chưa đăng nhập');
                    if (redirectLogin) {
                        return window.location.href = "{{route('user.login')}}"
                    }
                    return false;
                }
                $.ajax({
                    url: "{{route('like')}}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: item.id,
                        user_id: "{{Auth::check()?Auth::user()->id:''}}"
                    },
                    success: response => {
                        let appentText = (number) => {
                            return (number > 999) ? number / 1000 + 'k' : number + ' người quan tâm';
                        }
                        $(this).find('.icon svg').attr('fill', (response.status == 0) ? '#000' : 'none')
                        let numberOfLike = $(this).parent().parent().children('.card__ip');
                        let numberOfLikes = response.numberOfLikes; 
                        numberOfLike.text(appentText(Number(numberOfLikes)))
                    }
                })
            })
        }
        for (let i of newsAndEvents) {
            if (i.name === 'Tin tức đề xuất') {
                let catSlug = slug(i.name, '-');
                let postSlug = slug(i.name, '-');
                $('#newshome-readmore-{{$rand}}').attr('href', `{{url('category/${catSlug}/${i.id}')}}`)
                $('#rn-thumbnail').attr('src', i.posts[0].image)
                $('#rn-thumbnail').parent().attr('href', `{{url('topic/details/${postSlug}/${i.posts[0].id}')}}`)
                $('#events_home a.readmore').attr('href', `{{url('category/${catSlug}/${i.id}')}}`)
                $('.rn-title')[0].innerText = i.posts[0].post_title
                for (let j in i.posts) {
                    if (j > 0 && j < 11) {
                        if (j < 6) {
                            appendRNList('left', i.posts[j], j, i)
                        } else {
                            appendRNList('right', i.posts[j], j, i)
                        }
                    }
                }
            }
            if (i.name === 'Khám phá sự kiện') {
                for (let j in i.posts) {
                    if (j < 5) {
                        appendDEList(i.posts[j], j, i);
                    }
                }
                eventsCount++;
            }
        }
    </script>
    @endisset

    @isset($discussion_forum)
    <div id="discussion_forum-{{$rand}}" style="display: none">{{$discussion_forum}}</div>
    <script>
        var discussion_forum = JSON.parse($('#discussion_forum-{{$rand}}').text())
        
        $('#forums_home .title_block .title').html(discussion_forum.name)

        const appendDLFrame = (item, index) => {
            let id = item.name.normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(' ', '')
            $('#forums_home .forums-list .render-list').append(
                `<div class="forum-block">
                    <div class="forum-block__header">
                        <h4 class="forum-block__title">${item.name}</h4>
                        <p class="forum-block__des">${item.description}</p>
                    </div>
                    <div class="forum-block__body render-topic" id="${id}">

                    </div>
                </div>`
            )
        }

        const appendDLTopic = (item, index, id) => {
            let numberOfPosts = (item.posts.length > 999) ? item.posts.length / 1000 + 'k' : item.posts.length;
            let thumbnail = (item.posts?.user?.photo) ? item.posts.user.photo : "{{asset('placeholder-image/350x300')}}";
            let post_title = (item?.posts[0]?.post_title) ? item.posts[0].post_title : '';
            let post_id = (item?.posts[0]?.id) ? item.posts[0].id : '';
            let time = (item?.posts[0]?.time) ? item.posts[0].time.diffForHumans : '';
            let name = (item?.posts[index]?.user?.firstname + item?.posts[index]?.user?.lastname) ? 
            item?.posts[index]?.user?.firstname + '-' + item?.posts[index]?.user?.lastname : ''
            let user_id = (item?.posts[index]?.user?.id) ? item?.posts[index]?.user?.id : ''
            
            $('.forum-block__body.render-topic#' + id).append(
                `<div class="single-thread">
                    <div class="single-thread__left">
                        <h5 class="single-thread__title">
                            <div class="df__body-block-container-item-icon">
                                <img src="http://27.71.234.22/assets/icon/message.svg">
                            </div>
                            <a href="{{url('sub/category/${slug(item.name)}/${item.id}')}}">${item.name}</a>
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
                                    <span class="fs--12px">Thảo luận</span>
                                    <h3>${numberOfPosts}</h3>
                                </li>

                                <li ${(numberOfPosts <= 0) ? 'style="display:none"' : ''}>
                                    <div class="latest-topic">
                                        <div class="latest-topic__thumb">
                                            <a href="{{url('user/${name}/${user_id}')}}">
                                                <img src="${thumbnail}" alt="image">
                                            </a>
                                        </div>
                                        <div class="latest-topic__content">
                                            <h6 class="latest-topic__title">
                                                <a href="{{url('topic/details/${slug(post_title)}/${post_id}')}}">
                                                    ${post_title}
                                                </a>
                                                <span>${time}</span>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>`
            )
        }

        for (let i in discussion_forum.categories) {
            appendDLFrame(discussion_forum.categories[i], i)
            for (let j in discussion_forum.categories[i].sub_categories) {
                appendDLTopic(discussion_forum.categories[i].sub_categories[j], j, discussion_forum.categories[i].name.normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(' ', ''))
            }
        }
    </script>
    @endisset

    @isset($last_posts_discussion_forum)
    <div id="last_posts_discussion_forum-{{$rand}}" style="display: none">{{$last_posts_discussion_forum}}</div>
    <script>
        var last_posts_discussion_forum = JSON.parse($('#last_posts_discussion_forum-{{$rand}}').text())
        
        for (let i in last_posts_discussion_forum) {
            if (i <= 8) {
                $('#discussion-list-{{$rand}}').append(
                `<li class="single-discussion">
                    <h6 class="single-discussion__title">
                        <a href="{{url('topic/details/${slug(last_posts_discussion_forum[i].post_title)}/${last_posts_discussion_forum[i].id}')}}">
                            ${last_posts_discussion_forum[i].post_title}
                        </a>
                    </h6>
                    <span class="fs--12px">
                        <i class="las la-comments fs--12px"></i>
                        ${last_posts_discussion_forum[i].comment} đã trả lời </span>
                </li>`
                )
            }
        }
    </script>
    @endisset

    @isset($digital_library)
    <div id="digital_library-{{$rand}}" style="display: none">{{$digital_library}}</div>
    <script>
        var digital_library = JSON.parse($('#digital_library-{{$rand}}').text())
        
        for (let i in digital_library) {
            let time = digital_library[i].time.toDateString.split('-');
            let viTime = `${time[2]}/${time[1]}/${time[0]}`;
            $('#db__body-item-{{$rand}}').append(
                `<div class="db__body-item">
                    <a href="{{url('topic/details/${slug(digital_library[i].post_title)}/${digital_library[i].id}')}}" class="statistics" style="display: flex; align-items: center">
                        <span class="icon">
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
                        </span>
                        <span style="-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;width: 80.3%;" class="edit">${digital_library[i].post_title}</span></a>
                    <span class="created">${viTime}</span>
                    <span class="title">
                        <span>
                            ${digital_library[i].description}
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
                </div>`
            )
        }
    </script>
    @endisset
</main>
@endsection