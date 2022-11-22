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
<h1 class="heading">تعديل المتجر</h1>
<div>
    <div>
        <div class="modal-content">
            <form action="{{Route('Store.update',$store->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="tube-status" class="form-label"
                        >اسم المتجر</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="tube-status"
                            name="name"
                            value="{{$store->name}}"
                        />
                    </div>
                    @error('name')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                             <div>
                                 {{ $message }}
                             </div>
                         </div>
                         @enderror
                    <div class="form-group mb-3">
                        <label for="kilo-cost" class="form-label"
                        >الموقع</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="kilo-cost"
                            name="address"
                            value="{{$store->address}}"
                        />
                    </div>
                    @error('address')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="barcode" class="form-label">صورة الشعار</label>
                        <input
                            type="file"
                            class="form-control"
                            id="barcode"
                            name="stores_image"
                        />
                        <br>
                        <img width="80" height="77" src="{{asset('/uploads/stores_image/'.$store->stores_image)}}" alt="noo">
                    </div>
                    @error('stores_image')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="kilo-cost" class="form-label"
                        >الوصف</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="kilo-cost"
                            name="note"
                            value="{{$store->note}}"
                        />
                    </div>
                    @error('note')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                  <a href="{{Route('Store')}}"> <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                      >
                          إلغاء
                      </button></a>
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/all.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/tables-script.min.js')}}"></script>
