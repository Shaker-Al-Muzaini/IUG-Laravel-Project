<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الصفحة الرئيسية</title>
    <!-- Google Fonts Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('assets/css/tables-style.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/home-style.min.css')}}" />
  </head>
  <body>
    <div class="cards-container">
      <div class="my-card info-card row">
        <div class="col">
          <span class="info-count" data-goal="{{$payments}}">{{$payments}}</span>
          <strong>المبلغ المالي</strong>
        </div>
        <div class="col">
          <i class="fa-solid fa-sack-dollar"></i>
        </div>
      </div>
      <div class="my-card info-card row">
        <div class="col">
          <span class="info-count" data-goal="{{$Payment}}">{{$Payment}}</span>
          <strong>الزبائن</strong>
        </div>
        <div class="col">
          <i class="fa-solid fa-users"></i>
        </div>
      </div>
      <div class="my-card info-card row">
        <div class="col">
          <span class="info-count" data-goal="{{$Stores}}">{{$Stores}}</span>
          <strong>عدد المتاجر</strong>
        </div>
        <div class="col">
            <i class="fa-solid fa-store"></i>
        </div>
      </div>
      <div class="my-card info-card row">
        <div class="col">
          <span class="info-count" data-goal="{{$product}}">{{$product}}</span>
          <strong> عدد المنتجات</strong>
        </div>
        <div class="col">
            <i class="fa-brands fa-product-hunt"></i>
        </div>
      </div>
      <div class="my-card chart-container">
        <canvas id="myChart" style="width: 100%; max-width: 700px"></canvas>
      </div>
      <div class="my-card row progress">
        <div class="col progress-info">
          <div class="icon-container">
            <i class="fa-solid fa-money-bills"></i>
          </div>
          <strong class="progress-title">نسبة البيع</strong>
          <strong class="info-count progress-number" data-goal="8">20</strong>
        </div>
        <div class="col">
          <div class="circular-progress">
            <div class="value-container" data-goal="40">10%</div>
          </div>
        </div>
      </div>
      <div class="my-card row progress">
        <div class="col progress-info">
          <div class="icon-container">
            <i class="fa-solid fa-money-bills"></i>
          </div>
          <strong class="progress-title">نسبة الربح</strong>
          <strong class="info-count progress-number" data-goal=""></strong>
        </div>
        <div class="col">
          <div class="circular-progress">
            <div class="value-container" data-goal="27">0%</div>
          </div>
        </div>
      </div>
    </div>
<script src="{{asset('dashboard/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dashboard/js/all.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="{{asset('dashboard/js/reports-script.js')}}"></script>

  </body>
</html>
