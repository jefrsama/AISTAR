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

<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">

        <table>

            <tr style="background-color: gray;">

                <td style="padding: 20px">Имя</td>
                <td style="padding: 20px">Номер телефона</td>
                <td style="padding: 20px">Адрес</td>
                <td style="padding: 20px">Название продукта</td>
                <td style="padding: 20px">Цена</td>
                <td style="padding: 20px">Количество</td>
                <td style="padding: 20px">Статус</td>
                <td style="padding: 20px">Действие</td>

            </tr>

            @foreach($order as $orders)

            <tr align="center" style="background-color: black">

                <td style="padding: 20px">{{$orders->name}}</td>
                <td style="padding: 20px">{{$orders->phone}}</td>
                <td style="padding: 20px">{{$orders->address}}</td>
                <td style="padding: 20px">{{$orders->product_name}}</td>
                <td style="padding: 20px">{{$orders->price}}</td>
                <td style="padding: 20px">{{$orders->quantity}}</td>
                <td style="padding: 20px">{{$orders->status}}</td>
                <td style="padding: 20px">
                    <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">
                        Доставлено
                    </a>
                </td>

            </tr>

            @endforeach

        </table>

    </div>
</div>


<!-- partial -->
@include('admin.js')
</body>
</html>
