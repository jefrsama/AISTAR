<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>

@include('admin.sidebar')
<!-- partial -->

@include('admin.navbar')

<!-- partial -->
<div style="padding-bottom: 30px" class="container-fluid page-body-wrapper">
    <div class="container" align="center">

        @if (session()->has('message'))


            <div class="alert alert-success">

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;

              </span>
                </button>

                {{session()->get('message')}}

            </div>
        @endif



        <table>
            <tr style="background-color: grey">
                <td style="padding: 20px;">title</td>
                <td style="padding: 20px;">Description</td>
                <td style="padding: 20px;">price</td>
                <td style="padding: 20px;">quantity</td>
                <td style="padding: 20px;">image</td>
                <td style="padding: 20px;">Update</td>
                <td style="padding: 20px;">Delete</td>
            </tr>

            @foreach($data as $product)

            <tr align="center" style="background-color: black;">
                <td >{{$product->title}}</td>
                <td >{{$product->decription}}</td>
                <td >{{$product->price}}</td>
                <td >{{$product->quantity}}</td>
                <td >

                    <img height="100" width="100" src="/productimage/{{$product->image}}">

                </td>

                <td>
                    <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">update</a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Вы уверены?')" href="{{url('deleteproduct',$product->id)}}">delete</a>
                </td>


            </tr>

            @endforeach()

        </table>


    </div>
</div>

<!-- partial -->
@include('admin.js')
</body>
</html>

