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
@foreach($product as $products )
    <div class="container">
        <h2 class="title">عرض بيانات المنتج</h2>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">الاسم :</strong>{{$products->name}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1"> صورة المنتج:</strong><img width="60" height="50"  src="{{asset('/uploads/image_product/'.$products->image_product)}}" alt="noo"></span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1"> اسم المتجر:</strong>{{$products->stores?->name}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">الوصف:</strong>{{$products->note}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">السعر:</strong>{{$products->price}}</span>
        <span class="content" style="color: #28a745" ><strong style="color: #0c69f1">السعر بعدالخصم:</strong>{{$products->price_discount}}</span>
    </div>
@endforeach

<div class="btn-back">
    <a href="{{Route('Product')}}"><button >رجوع</button></a>
</div>

</body>
</html>
