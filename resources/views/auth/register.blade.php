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
                        <p class="text-center">Register TO CONTINUE</p>
                @isset($url)
                <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @else
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @endisset
                    @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group ">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group ">
                            <label for="password" >{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        <div class="form-group ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
