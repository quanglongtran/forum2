@extends('templates.basic2.layouts.frontend')

@section('content')
<section class="banner">
    <div class="banner__backround" style="background-image: url('{{asset('assets/forum/images/banner.png')}}');">
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



<div class="container">
    <div class="row">
        <!-- Recommended news -->
        <section class="rn">
            {{-- <div class="row"> --}}
                <span class="rn__heading">Tin tức đề xuất</span>
                <a href="#" class="readmore">
                    <span class="text">Xem thêm</span>
                    <img src="{{asset('assets/icon/angle-right.svg')}}" class="icon">
                </a>

                <div class="w-full"></div>

                <div class="rn__body">
                    <div class="row">
                        <div class="rn__body-thumbnail col-lg-5 col-md-12">
                            <img src="https://photo-cms-plo.zadn.vn/600x360/Uploaded/2022/rkznug/2022_07_09/tt-cp-kiem-tra-tsn-1-3184.jpeg"
                                class="rn__body-thumbnail-img" onload="setTimeout(()=>{loaded()},500)">

                            <a href="#" class="rn__body-thumbnail-text">
                                <div class="rn__body-thumbnail-text-title">Xin ý kiến dự thảo Chiến lược dữ liệu quốc
                                    gia
                                </div>
                                <div class="rn__body-thumbnail-text-type">Dữ liệu dân cư, Tin đề xuất</div>
                            </a>
                        </div>

                        <ul class="rn__body-newlist col-lg-7 col-md-12 g-0">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6" style="display: flex; flex-wrap: wrap">
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">1</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">2</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#000" />
                                                </svg>
                                            </span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">3</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">4</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">5</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
                                    </div>
                                    <div class="col-lg-6" style="display: flex; flex-wrap: wrap">
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">6</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">7</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">8</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">9</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
    
                                        <li class="rn__body-newlist-item">
                                            <span class="rn__body-newlist-item-no">10</span>
                                            <a href="#" class="rn__body-newlist-item-title">Cục Tin học hóa: Xin ý kiến dự
                                                thảo Bộ
                                                tiêu chí về
                                                chức năng, tính năng kỹ thuật của giải pháp camera giám sát
                                                (16/9/2020)</a>
                                            <div class="w-full"></div>
                                            <span class="rn__body-newlist-item-type text">Tin tức</span>
                                            <span class="dot"><svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg></span>
                                            <span class="rn__body-newlist-item-views text">5.3k lượt xem</span>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        
                    </div>
                </div>
                {{--
            </div> --}}
        </section>
    </div>

    <div class="row">
        <div class="col-auto">
            <section class="de">
                {{-- kham pha su kien 111111111111111111111--}}
                <div class="de__heading">Khám phá sự kiện</div>
                <div class="w-full"></div>
                <ul class="tabs" show-line="true" data-toggle="tab" data-target="#top-event">
                    <li class="tabs__item active">Hàng đầu</li>
                    <li class="tabs__item">Sắp diễn ra</li>
                    <li class="tabs__item">Tuần này</li>
                    <li class="tabs__item">Đang theo dõi</li>
                </ul>
                
                <a href="#" class="readmore">
                    <span class="readmore__text">Xem thêm</span>
                    <img src="{{asset('assets/icon/angle-right.svg')}}" class="readmore__icon">
                </a>

                <div class="w-full"></div>

                <div class="row" style="width: 100%" id="top-event">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="card">
                            <a href="#" class="cover" style="padding-top:48.335%;">
                                <img width="900" height="603" src="https://picsum.photos/200/300"
                                    class="card__thumbnail" alt="">
                            </a>
                            <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                            <a href="#" class="card__title">
                                Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                                chuyển đổi số quốc gia
                            </a>
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
                                                stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                stroke-linejoin="round" />
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

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="card">
                            <a href="#" class="cover" style="padding-top:48.335%;">
                                <img width="900" height="603" src="{{asset('assets/forum/images/thumbnail-card.png')}}"
                                    class="card__thumbnail" alt="">
                            </a>
                            <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                            <a href="#" class="card__title">
                                Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                                chuyển đổi số quốc gia
                            </a>
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
                                                stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                stroke-linejoin="round" />
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

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="card">
                            <a href="#" class="cover" style="padding-top:48.335%;">
                                <img width="900" height="603" src="https://picsum.photos/200/300"
                                    class="card__thumbnail" alt="">
                            </a>
                            <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                            <a href="#" class="card__title">
                                Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                                chuyển đổi số quốc gia
                            </a>
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
                                                stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                stroke-linejoin="round" />
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

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="card">
                            <a href="#" class="cover" style="padding-top:48.335%;">
                                <img width="900" height="603" src="https://picsum.photos/300" class="card__thumbnail"
                                    alt="">
                            </a>
                            <p class="card__time">thứ 3, 12 tháng 7 vào 8:30</p>
                            <a href="#" class="card__title">
                                Hội thảo online: Đẩy mạnh dụng dữ liệu về dân cư, định danh và xác thực điện tử phục vụ
                                chuyển đổi số quốc gia
                            </a>
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
                                                stroke="#101828" stroke-width="1.67" stroke-linecap="round"
                                                stroke-linejoin="round" />
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
            </section>
        </div>
    </div>

    <div class="row" style="margin-top: 64px;">
        <div class="col-12">
            <section class="df">
                <div class="df__heading">Diễn đàn thảo luận</div>

                <div class="df__body">
                    <div class="row">
                        <div class=" col-9">
                            <div class="df__body-block">
                                <div class="df__body-block-header">
                                    <div class="df__body-block-header-title">Công nghệ và đời sống</div>
                                    <div class="df__body-block-header-subtitle">Cập nhật thông tin công nghệ thông tin
                                        mỗi
                                        ngày
                                    </div>
                                </div>

                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="df__body-block" style="margin-top: 16px">
                                <div class="df__body-block-header">
                                    <div class="df__body-block-header-title">Công nghệ và đời sống</div>
                                    <div class="df__body-block-header-subtitle">Cập nhật thông tin công nghệ thông tin
                                        mỗi
                                        ngày
                                    </div>
                                </div>

                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item left">
                                        <div class="df__body-block-container-item-icon">
                                            <img src="{{asset('assets/icon/message.svg')}}">
                                        </div>
                                        <a href="#" class="df__body-block-container-item-title">
                                            <span>Tin tức công nghệ và Đời sống</span>
                                            <span class="df__body-block-container-item-title-badge">New</span>
                                        </a>
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Chủ đề</p>
                                            <span>16</span>
                                        </div>
                                    </div>

                                    <div class="df__body-block-container-item right">
                                        <div class="df__body-block-container-item-quantity">
                                            <p>Bài viết</p>
                                            <span>5,4 K</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('assets/forum/images/avatar.png')}}" alt="avatar"
                                                class="df__body-block-container-item-avatar">
                                        </a>
                                        <a href="#" class="df__body-block-container-item-news">
                                            <div class="df__body-block-container-item-news-title">23 TB dữ liệu của tỷ
                                                dân
                                                Trung Quốc bị rò rỉ</div>
                                            <span class="df__body-block-container-item-news-time text">Hôm nay
                                                15:31</span>
                                            <div class="dot">
                                                <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2" cy="2" r="2" fill="#EAECF0" />
                                                </svg>
                                            </div>
                                            <div class="df__body-block-container-item-news-id text">vn01587733</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="df__body-block nd">
                                <!-- New discussion -->
                                <div class="df__body-block-heading">Thảo luận mới</div>

                                <div class="df__body-block-container">
                                    <div class="df__body-block-container-item">
                                        <p class="df__body-block-container-item-title">
                                            <a href="#">
                                                Thách thức lớn nhất mà bạn gặp phải khi cố gắng tự động hoá quy trình làm việc của mình là gì?
                                            </a>
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
                                            <a href="#">
                                                Thách thức lớn nhất mà bạn gặp phải khi cố gắng tự động hoá quy trình làm việc của mình là gì?
                                            </a>
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
                                            <a href="#">
                                                Bạn có biết bất kỳ cuộc trò chuyện slack / discord / etc nào dành cho các nhà phát triển AR / VR / Metaverse không?
                                            </a>
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
                                            <a href="#">Ưu và nhược điểm tăng tốc</a>
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
                                            <a href="#">Phản hồi về SaaS của chúng tôi - Percival</a>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <section class="dl block">
            <!-- Digital Library -->
            <div class="block__heading">Thư viện số</div>
            <ul class="tabs" show-line="true">
                <li class="tabs__item">Học máy</li>
                <li class="tabs__item">Trí tuệ nhân tạo</li>
                <li class="tabs__item active">Dự liệu lớn</li>
                {{-- <li class="tabs__line"></li> --}}
            </ul>

            <div class="w-full"></div>

            <div class="dl__container" style="margin-top: 1rem">
                <div class="dl__container-header">
                    <span class="statistics">Số hiệu</span>
                    <span class="created">Ngày ban hành</span>
                    <span class="title">Nội dung trích yếu</span>
                    <span class="action">Hành động</span>
                </div>

                <ul class="dl__body">
                    <li class="db__body-item">
                        <a href="#" class="statistics"><span style="margin: auto 0">Công văn Số 1507-CV/VPTW</span></a>
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
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Tải về
                        </a>
                    </li>
                    <li class="db__body-item">
                        <a href="#" class="statistics"><span style="margin: auto 0">Công văn Số 1507-CV/VPTW</span></a>
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
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Tải về
                        </a>
                    </li>
                    <li class="db__body-item">
                        <a href="#" class="statistics"><span style="margin: auto 0">Công văn Số 1507-CV/VPTW</span></a>
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
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Tải về
                        </a>
                    </li>
                    <li class="db__body-item">
                        <a href="#" class="statistics"><span style="margin: auto 0">Công văn Số 1507-CV/VPTW</span></a>
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
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Tải về
                        </a>
                    </li>
                    <li class="db__body-item">
                        <a href="#" class="statistics"><span style="margin: auto 0">Công văn Số 1507-CV/VPTW</span></a>
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
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Tải về
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
@endsection