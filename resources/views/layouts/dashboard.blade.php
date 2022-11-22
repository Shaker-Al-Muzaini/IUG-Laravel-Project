<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    {{--      <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المتاجر</title>
    <!-- Google Fonts Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
{{--    <!-- Bootstrap CSS -->--}}
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

@yield('pageD')
</body>
</html>


