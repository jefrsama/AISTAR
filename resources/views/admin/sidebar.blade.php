<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a style="color: whitesmoke" class="sidebar-brand brand-logo" href="/">AISTAR</a>
            <a STYLE="color: whitesmoke" class="sidebar-brand brand-logo-mini" href="/">AIS</a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle" src="admin/assets/images/faces/face15.jpg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <div style="margin-left: 40px">
                                <x-app-layout>
                                </x-app-layout>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Навигация</span>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('product')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                    <span class="menu-title">Добавление продукта</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('showproduct')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                    <span class="menu-title">Все продукты</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('showorder')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                    <span class="menu-title">Заказы</span>
                </a>
            </li>


        </ul>
    </nav>
