<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    {{--      <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المبيعات</title>
    <!-- Google Fonts Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}" />
    <!-- DATATABLES -->
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('assets/css/tables-style.min.css')}}" />
</head>
<body>
<div class="loading-screen">
    <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem; color: var(--main-color) !important"
        role="status"
    >
        <span class="visually-hidden">Loading....</span>
    </div>
</div>
<h1 class="heading">المبيعات</h1>


@if(session()->has('des'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('des') }}</strong>
    </div>
@endif
<div class="table-container section-style">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">الرقم</th>
            <th scope="col">اسم المنتج</th>
            <th scope="col">اسم المتجر</th>
            <th scope="col">صورة المنتج</th>
            <th scope="col">السعر</th>
            <th scope="col">الكمية</th>
            <th scope="col">السعر الكلي</th>
            <th scope="col">تاريخ ووقت الشراء</th>
            <th scope="col">العمليات</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($payments as $payment)
                <?php $i++; ?>
            <tr>
                <td scope="row">{{$i}}</td>
                <td>{{$payment->products?->name}}</td>
                <td>{{$payment->products?->stores?->name}}</td>
                <td> <img width="50" height="40"  alt="noo" src="{{asset('/uploads/image_product/'.$payment->products?->image_product)}}"></td>
                <td>{{$payment->price}}</td>
                <td>{{$payment->product_cont}}</td>
                <td>{{$payment->total_price}}</td>
                <td>{{$payment->created_at}}</td>
                <td>
                    <form  method="Post" action="{{Route('Payment.destroy',$payment->id)}}">
                        @csrf
                        @method('delete')
                        <button
                            type="submit"
                            class="btn btn-delete btn-sm">
                            <i class="fa-solid fa-trash-can fa-lg"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tables-script.min.js')}}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</body>
</html>
