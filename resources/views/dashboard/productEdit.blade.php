@extends('layouts.dashboard')
@section('pageD')
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
<h1 class="heading">تعديل المنتج</h1>
<div>
    <div>
        <div class="modal-content">
            <form action="{{Route('Product.update',$product->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="tube-status" class="form-label"
                        >اسم المنتج</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="tube-status"
                            name="name"
                            value="{{$product->name}}"
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
                        <label for="stores_id" class="col-4 col-form-label">اسم المتجر</label>
                        <div class="col-12">
                            <select name="stores_id" class="form-select decorated" aria-label="Default select example">
                                @foreach ($stores as $store)
                                    <option  value="{{$store->id}}"
                                             @if($store->id == $store->name)selected @endif
                                    >{{$store->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('stores_id')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="image_product" class="form-label">صورة المنتج</label>
                        <input
                            type="file"
                            class="form-control"
                            name="image_product"
                        />
                        <br>
                        <img width="80" height="77" src="{{asset('/uploads/image_product/'.$product->image_product)}}" alt="noo">
                    </div>
                    @error('image_product')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="price" class="form-label"
                        >السعر</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="price"
                            value="{{$product->price}}"
                        />
                    </div>
                    @error('price')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror<div class="form-group mb-3">
                        <label for="price_discount" class="form-label"
                        >السعر بعد الخصم</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="price_discount"
                            value="{{$product->price_discount}}"
                        />
                    </div>
                    @error('price_discount')
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="price_discount" class="form-label"
                        >تفعيل سعر الخصم</label
                        >
                        <input
                            type="checkbox" value="1"  name="discount_status"  @if($product->discount_status==1) checked @endif/>


                    </div>
                    <div class="form-group mb-3">
                        <label for="kilo-cost" class="form-label"
                        >الوصف</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="kilo-cost"
                            name="note"
                            value="{{$product->note}}"
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
                  <a href="{{Route('Product')}}"> <button
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
@stop
