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
    <body>

        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                             <img src="{{asset('public/assets/'.$logo->CompanyLogo)}}" width="100px">{{$logo->LoginTitle}}
                            <div class="logo">
                                
                            </div> </h1>
                    </header>
                                @toastr_render

                    <div class="auth-content">
                        <p class="text-center">LOGIN TO CONTINUE</p>
                        @if($url == 'writer')
<form method="POST" id="login-form" action="{{ route('writer.save') }}" aria-label="{{ __('Login') }}">
                        @elseif($url == 'admin')
 <form method="POST" id="login-form" action="{{ route('admin.save.login') }}" aria-label="{{ __('Login') }}">
                        @else
<form method="POST" id="login-form" action="{{ route('login.user') }}" aria-label="{{ __('Login') }}">
                        @endisset
                            @csrf
                             <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               </div>
                            <div class="form-group">
                                <label for="remember">
                                  <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span>Remember me</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-linkforgot-btn pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>

        <script src="{{asset('public/js/vendor.js')}}"></script>
        <script src="{{asset('public/js/app.js')}}"></script>
    </body>

</html>
