<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>store</title>
{{--    <link rel="icon" type="image/svg" href="{{asset('assets/imgs/gas-icon.svg')}}"/>--}}
    <!-- Fontawesome -->
{{--    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />--}}
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet" />
    <!-- Google Fonts Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <!-- Google Fonts Reem Kufi -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles -->
    <link href="{{asset('assets/css/dashboard.rtl.min.css')}}" rel="stylesheet" />
  </head>
  <body>
    <header class="navbar navbar-dark flex-md-nowrap shadow">
      <button
        class="navbar-toggler d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="عرض/إخفاء لوحة التنقل"
      >
        <i class="fa-solid fa-bars fa-xl"></i>
      </button>
      <div class="my-logo">
        <a class="navbar-brand me-0" href="#">Store</a>
      </div>
    </header>
    <!-- EXIT MODAL -->
    <div
      class="modal fade"
      id="exitModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">هل تريد تسجيل الخروج؟</div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    لا
                </button>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">نعم</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row main-row">
        <nav id="sidebarMenu" class="d-md-flex sidebar collapse">
          <div class="position-sticky pt-3">
            <div class="logo-darkmode">
              <a class="navbar-brand me-0" href=""
                >Store<span style="color: var(--main-color); display: block"
                  >Shop</span
                ></a
              >
              <button class="btn-compressed">
                <div class="arrow-right">
                  <i class="fa-solid fa-arrow-right fa-lg"></i>
                </div>
                <div class="arrow-left" style="display: none">
                  <i class="fa-solid fa-arrow-left fa-lg"></i>
                </div>
              </button>
            </div>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a id="home-link" href="{{Route('index')}}" class="nav-link " aria-current="page" title="الصفحة الرئيسية">
                  <i class="fa-solid fa-home"></i>
                  <span class="nav-link-name">الصفحة الرئيسية</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="tubes-link" class="nav-link " href="{{Route('index2')}}" title="المتاجر">
                  <i
                    class="fa-solid fa-jar fa-lg"
                    style="margin-right: 2px"
                  ></i>
                  <span class="nav-link-name">المتاجر</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="store-link" class="nav-link " href="{{Route('index3')}}" title="المنتجات">
                    <i class="fa-solid fa-address-card"></i>
                  <span class="nav-link-name">المنتجات</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="customers-link" class="nav-link active" href="{{Route('index4')}}" title="الزبائن">
                  <i class="fa-solid fa-users"></i>
                  <span class="nav-link-name">الزبائن</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="branches-link" href="{{URL('/Home/index')}}" class="nav-link" title="الموقع الرئيسي">
                  <i class="fa-solid fa-code-branch"></i>
                  <span class="nav-link-name">الموقع الرئيسي</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="distribution-link"  title="">

                </a>
              </li>
              <li class="nav-item">
                <a id="employees-link" title="">
                </a>
              </li>
            </ul>
          </div>
            <div class="profile">
                <img src="{{asset('/avatar_images/'.Auth::user()->avatar)}}" alt="profile picture">
                <div class="username">
                    <h6>{{Auth::user()->name}}</h6>
                    <span style="color:limegreen">Admin</span>
                </div>
                <a
                    id="logout"
                    class="nav-link logout"
                    data-bs-toggle="modal"
                    data-bs-target="#exitModal"
                >
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            </div>
        </nav>
        <main class="main-content">
          <iframe
            src="{{Route('Payment')}}"
            width="100%"
            height="100%"
          ></iframe>
        </main>
      </div>
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
  </body>
</html>
