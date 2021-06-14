<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$logo->Sitename}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
<link rel="shortcut icon" type="image/jpg" href="{{asset('public/assets/'.$logo->CompanyLogo)}}">
    <link rel="stylesheet" href="{{asset('public/css/vendor.css')}}">
    <link rel="stylesheet"  href="{{asset('public/css/app.css')}}">
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <script src="https://cdn.ckeditor.com/4.16.1/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js" integrity="sha512-6vo59lZMHB6GgEySnojEnfhnugP7LR4qm6akxptNOw/KW+i9o9MK4Gaia8f/eJATjAzCkgN3CWlIHWbVi2twpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.css" integrity="sha512-de3hHhaaVjGo+KGk523A/Z0k6cgWD3mLLgucg6vSnrdUcDHVhUC2R6PSsgZR6LJ5NjcGPv3IoC1psoY+QILIgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.js" integrity="sha512-KTg8s3jRpepCrQe/b6hgxRv+QPZDflr6XolfLaM5JzBcK7r6YpjTKtmxJcuh/afGiSJNjxfzaKGF6nSbSVfWQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css" integrity="sha512-kSH0IqtUh1LRE0tlO8dWN7rbmdy5cqApopY6ABJ4U99HeKulW6iKG5KgrVfofEXQOYtdQGFjj2N/DUBnj3CNmQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
</head>
<style>
        .mul-select{
            width: 100%;
        }
.radio-toolbar {
  margin: 10px;
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: inline-block;
    background-color: #ddd;
    padding: 10px 20px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border: 2px solid #444;
    border-radius: 4px;
}

.radio-toolbar label:hover {
  background-color: #dfd;
}

.radio-toolbar input[type="radio"]:focus + label {
    border: 2px dashed #444;
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #bfb;
    border-color: #4c4;
}
</style>

   <body>
    @toastr_render
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                <div class="header-block header-block-collapse d-lg-none d-xl-none">
                    <button class="collapse-btn" id="sidebar-collapse-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                  
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&amp;s=40')"> </div>
                                <span class="name"> {{auth()->user()->username}} </span>
                            </a>
                            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                <div class="dropdown-divider"></div>
                                 <a class="dropdown-item"  href="{{route('setting.clientsetting')}}">
                                   
                                    <i class="fa fa-pencil-square-o"></i>    Setting </a>
                                <a class="dropdown-item"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off icon"></i> Logout </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     

                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class="sidebar">
                <div class="sidebar-container">
                    <div class="sidebar-header">
                        <img src="{{asset('public/assets/'.$logo->CompanyLogo)}}" width="100px"><a style="color: white; font-size: bold;"><b>{{$logo->Sitename}}</b></a>
                       
                    </div>
                    <nav class="menu">
                        <ul class="sidebar-menu metismenu navbar-nav"  id="sidebar-menu">
                            <li class="">
                                <a href="{{url('/home')}}">
                                    <i class="fa fa-home"></i> Home
                                     <span class="sr-only">
                    (current)
                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/Client/order')}}">
                                    <i class="fa fa-area-chart"></i> Orders
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{url('Client/setting')}}">
                                    <i class="fa fa-pencil-square-o"></i> Setting
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
<script>
       $( '.navbar-nav a' ).on( 'click', function () {
    $( '.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});
    </script>


<main class="py-4">
    @yield('content')
</main>


<script src="{{asset('public/js/vendor.js')}}"></script>
<script src="{{asset('public/js/app.js')}} "></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js "></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
