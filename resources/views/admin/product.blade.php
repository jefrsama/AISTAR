<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        .title{
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

    </style>
</head>
<body>

@include('admin.sidebar')
<!-- partial -->

@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
<h1 class="title">Добавление продукта</h1>

        @if (session()->has('message'))


          <div class="alert alert-success">

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;

              </span>
              </button>

            {{session()->get('message')}}

          </div>
        @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">


            @csrf

        <div style="padding: 15px">
            <label>Название</label>
            <input style="color:black " type="text" name="title" placeholder="Название">
        </div>

        <div style="padding: 15px">
            <label>Цена</label>
            <input style="color:black " type="number" name="price" placeholder="Цена">
        </div>

        <div style="padding: 15px">
            <label>Описание</label>
            <input style="color:black " type="text" name="des" placeholder="Описание">
        </div>

        <div style="padding: 15px">
            <label>Количество</label>
            <input style="color:black " type="text" name="quantity" placeholder="Количество">
        </div>

        <div style="padding: 15px">
            <input  type="file" name="file" >
        </div>

        <div style="padding: 15px">
            <input class="btn btn-success" type="submit">
        </div>

        </form>



</div>
</div>
<!-- partial -->
@include('admin.js')
</body>
</html>
