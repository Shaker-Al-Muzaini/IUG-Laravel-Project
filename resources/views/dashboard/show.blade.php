{{--shaker--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>عرض </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>
<body>
@foreach($store as $stores )
    <div class="container">
        <h2 class="title">عرض بيانات المتجر</h2>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">الاسم :</strong>{{$stores->name}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1"> صورة المتجر:</strong><img width="60" height="50"  src="{{asset('/uploads/stores_image/'.$stores->stores_image)}}" alt="noo"></span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">موقع المتجر:</strong>{{$stores->address}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">الوصف:</strong>{{$stores->note}}</span>
    </div>
@endforeach

<div class="btn-back">
    <a href="{{Route('Store')}}"><button >رجوع</button></a>
</div>

</body>
</html>
