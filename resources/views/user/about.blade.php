
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

<!-- Page Content -->
<div class="page-heading about-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>AISTAR</h4>
                    <h2>Наша компания</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Приветствуем!</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/images/feature-image.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Кто мы? &amp; Какие предложения у нас есть?</h4>
                    <p>Наше компания создана для того что бы добавить больше веры в мечты людей! Из давно именно вера помогало людям творить невообразимые вещи. И мы с помощью разных аксессуаров дзинь хотим увеличить веру людей в чудо.<br><br></p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Креативная &amp; Гибкая <em>|</em> Продукция</h4>
                            <p>Верьте мечтам, ведь не они не просто так даны нам!</p>
                        </div>
                        <div class="col-md-4">
                            <a href="/" class="filled-button">Купить сейчас
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2022 Aistar Co., Ltd.
                </div>
            </div>
        </div>
    </div>
</footer>



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
