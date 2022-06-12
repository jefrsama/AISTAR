<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><h2>Ai <em>star</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Главная
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Контакт</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart"></i>
                            Корзина[{{$count}}]</a>
                    </li>


                    <li class="nav-item">

                    @if (Route::has('login'))
                        @auth
                            <x-app-layout>

                            </x-app-layout>
                        @else

                            <li><a href="{{ route('login') }}" class="nav-link">Логин</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
                                @endif

                                @endauth

                                @endif

                                </li>








                </ul>
            </div>
        </div>
    </nav>

    @if (session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="text-muted" data-bs-dismiss="alert" aria-label="сlose">
              <span aria-hidden="true">&times;
              </span>
            </button>

            {{session()->get('message')}}

        </div>
    @endif

</header>

