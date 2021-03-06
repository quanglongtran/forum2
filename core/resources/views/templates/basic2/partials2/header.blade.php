<header class="header">
  <div class="header__bottom px-xl-5">
      <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
              <a class="site-logo site-title navbar-brand" href="/html/">
                  <img src="/assets/images/logoIcon/logo.png" style="width: 80px" alt="logo">
              </a>

              <button class="header-search-open-btn ms-auto">
                  <i class="las la-search"></i>
              </button>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="true" aria-label="Toggle navigation">
                  <span class="menu-toggle"></span>
              </button>

              <form class="header-search-form header-search-form-mobile"
                  action="/search">
                  <input type="text" name="title" placeholder="Nhập từ khóa..."
                      class="header-search-form__input">
                  <button type="submit" class="header-search-form__btn"><i class="las la-search"></i></button>
              </form>
              <div class="navbar-collapse mt-lg-0 mt-3 collapse show" id="navbarSupportedContent" style="">
                  <div class="header-search-area">
                      <form class="header-search-form" action="/search">
                          <input type="text" name="title" placeholder="Nhập từ khóa..."
                              class="header-search-form__input">
                          <button type="submit" class="header-search-form__btn"><i
                                  class="las la-search"></i></button>
                      </form>
                  </div>

                  <ul class="navbar-nav main-menu">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{route('forum.index')}}">Diễn đàn</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('forum.tin-tuc')}}">Tin tức mới</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('forum.thu-vien')}}">Thư viện</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('forum.su-kien')}}">Sự kiện</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('forum.thanh-vien')}}">Thành viên</a>
                      </li>
                  </ul>

                  <div class="nav-right  ms-auto flex">
                      <a class="nav-link register" href="#">Đăng ký</a>
                      <div class="btn btn-primary login">Đăng nhập</div>
                  </div>
              </div>
          </nav>
      </div>
  </div>
</header>