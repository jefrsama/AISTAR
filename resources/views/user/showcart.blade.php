
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Aistar</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--
    -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

@include('user.layout')






<section class="h-100 h-custom" style="background-color: #d2c9ff;" >
    <div style="padding: 100px;" align="center">
    <form action="{{url('order')}}" method="post">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Корзина</h1>
                                    </div>
                                    @csrf

                                    @foreach($cart as $carts)
                                    <hr class="my-4">

                                    <div class="row mb-4 d-flex justify-content-between align-items-center">

                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">

                                            {{$carts->product_title}}
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">

                                            {{$carts->quantity}}

                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0"> <input type="text" name="price[]" value=" {{$carts->price}}" hidden="">

                                                {{$carts->price}}

                                            </h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="{{url('delete',$carts->id)}}" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="/" class="text-body"><i
                                                    class="fas fa-long-arrow-alt-left me-2"></i>Назад в магазин</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Итог</h3>
                                    <hr class="my-4">

                                    <h5 class="text-uppercase mb-3">Промокод</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Введите промокод</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Итоговая сумма</h5>
                                        <h5>3500</h5>
                                    </div>

                                    <button class="btn btn-success">Подтвердить покупку</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
</section>















<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
