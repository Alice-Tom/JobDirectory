@extends('pages.dash')

@section('content')

   @include('includes.employersidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')
       




<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
   

<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <p align="center" style="color: red">All fields marked with * are required</p>  
                        <br>

                        <!-- company name -->
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name *') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{$company->company_name}}" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                            <!-- username -->
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username *') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$company->username}}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <!-- password -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         <!--about_company -->
                        <div class="form-group row">
                            <label for="about_company" class="col-md-4 col-form-label text-md-right">{{ __('About your Comapany *') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_company" rows="4" class="form-control @error('about_company') is-invalid @enderror" name="about_company" value="{{ old('about_company') }}" required autocomplete="about_company">
                                </textarea>

                                @error('about_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Upload File -->
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Company Logo') }}</label>

                            <div class="col-md-6">
                                <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}">
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         

                         <!--address -->
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Country *') }}</label>

                            <div class="col-md-6">
                                
                                
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$company->address}}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <!-- email -->
                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email *') }}</label>

                            <div class="col-md-6">
                                
                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$company->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                         <!-- phonenumber -->
                         <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number *') }}</label>

                            <div class="col-md-6">
                                
                                
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phonenumber" value="{{$company->phone_number}}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!--website -->
                         <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                
                               
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}">

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <!-- register -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>




@include('includes.dashfooter')


    <!-- Right Panel -->

   @endsection


