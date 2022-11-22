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
    <h1 class="heading">المتاجر</h1>
    <!-- ADD MODAL -->
    <div
      class="modal fade"
      id="addModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              إضافة متجر جديد
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <form id="AddStores" method="post"  enctype="multipart/form-data">
                @csrf
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
                      />
                  </div>
                  <div class="form-group mb-3">
                      <label for="kilo-cost" class="form-label"
                      >الموقع</label
                      >
                      <input
                          type="text"
                          class="form-control"
                          id="kilo-cost"
                          name="address"
                      />
                  </div>
                  <div class="form-group mb-3">
                  <label for="barcode" class="form-label">صورة الشعار</label>
                  <input
                    type="file"
                    class="form-control"
                    id="barcode"
                    name="stores_image"
                  />
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
                      />
                  </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              إلغاء
            </button>
            <button type="submit" class="btn btn-primary">إضافة</button>
          </div>
            </form>
        </div>
      </div>
    </div>


    <div class="pb-8">
        @if ($errors->any())
            <div style="background-color:rgb(239 68 68)" class="text-white font-bold rounded-t px-4 py-2">
               Something went wrong...
            </div>
            <ul style="background-color:rgb(248 113 113)">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-700">{{ $error }}</li>
                        @endforeach
            </ul>
        @endif
    </div>
    @if(session()->has('add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('add') }}</strong>
        </div>
    @endif
    @if(session()->has('Edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Edit') }}</strong>
        </div>
    @endif
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
            <th scope="col">الاسم</th>
            <th scope="col">الشعار</th>
            <th scope="col">الموقع</th>
            <th scope="col">الوصف</th>
            <th scope="col">اسم المشرف</th>
            <th scope="col"> تاريخ ووقت الاضافه</th>
            <th scope="col">العمليات</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($stores as $store)
                <?php $i++; ?>
            <tr>
            <td scope="row">{{$i}}</td>
            <td>{{$store->name}}</td>
            <td> <img width="50" height="40" src="{{asset('/uploads/stores_image/'.$store->stores_image)}}" alt="noo"></td>
            <td>{{$store->address}}</td>
            <td>{{$store->note}}</td>
            <td>{{Auth::user()->name}}</td>
            <td>{{$store->created_at}}</td>
            <td>
             <a style="text-decoration: none;" href="{{Route('Store.edit',$store->id)}}">
                 <button
                     type="button"
                     class="btn btn-edit btn-sm">
                     <i class="fa-solid fa-pen-to-square fa-lg"></i>
                 </button>
             </a>
                <a href="{{Route('Store.show',$store->id)}}">
                    <button
                        type="submit"
                        class="btn btn-show btn-sm">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </a>
                <form style="margin-right:70px;margin-top:-31px;" action="{{Route('Store.destroy',$store->id)}}" method="Post">
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
    <script>
        $(document).ready(function () {
        setTimeout(() => {
          $(".table-container .btn-add").attr("data-bs-toggle", "modal");
          $(".table-container .btn-add").attr("data-bs-target", "#addModal");
          $(".table-container .btn-add").text("+ إضافة متجر جديدة");
        },100);
      });

    </script>
  <script>
      function addDanger() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });


      $(document).on('submit','#AddStores',function (e){
          e.preventDefault();
          let formDate=new FormData($('#AddStores')[0]);
          $.ajax({
              method:"get",
              url:"{{route('Store.add')}}",
              date:formDate,
              contentType:false,
              processData:false,
              success:function (response){
                  if(response.status == 400){
                      $('#save_errorList').html('');
                      $('#save_errorList').removeClass('d-none');
                      $.each(response.errors,function (key,err_value)
                          {
                              $('#save_errorList').append('<li>'+err_value+'</li>');
                          }

                      );
                  }
                  else if(response.status == 200){
                      $('#save_errorList').html("");
                      $('#save_errorList').addClass('d-none');
                      $('#AddStores').find('input').val('');
                      $('#addModal').modal('hide');
                      alert(response.message)

                  }
              }
          })
      });
      }
  </script>
@stop
