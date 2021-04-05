@extends('pages.dash')

@section('content')

   @include('includes.tenderseekersidebar')
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
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Apply Tender') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tenderapplication',[$tenders->id]) }}">
                        @csrf

                        
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                  @endif

                  <!-- tender_title -->
                         <div class="form-group row">
                            <label for="tender_title" class="col-md-4 col-form-label text-md-right">{{ __('Tender Title *') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="tender_title" value="{{$tenders->tender_title}}" readonly required>
                                @error('tender_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- company name -->
                         <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name *') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="company_name" value="{{$tenders->company_name}}" readonly required>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <!-- tender description -->
                        <div class="form-group row">
                            <label for="tender_description" class="col-md-4 col-form-label text-md-right">{{ __('Tender Description *') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="tender_description" rows="3" readonly>{{$tenders->tender_description}}</textarea>
                                @error('tender_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Upload File -->
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Tender File') }}</label>
                            <div class="col-md-6">
                             <a href={{$tenders->file}} download><input id="text" style="cursor: pointer;" type="text" class="form-control" placeholder="download file" @error('file') is-invalid @enderror" name="file" readonly value="{{$tenders->file}}"></a>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                         <!-- tender location -->
                        <div class="form-group row">
                            <label for="tender_location" class="col-md-4 col-form-label text-md-right">{{ __('Tender Location *') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="tender_location" value="{{$tenders->tender_location}}" readonly required>
                                @error('tender_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <!-- budget range -->
                          <div class="form-group row">
                            <label for="budget" class="col-md-4 col-form-label text-md-right">{{ __('Budget') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="budget" value="{{$tenders->budget}}" readonly required>
                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- tender fee -->
                        <div class="form-group row">
                            <label for="fee" class="col-md-4 col-form-label text-md-right">{{ __('Tender Fee') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="fee" value="{{$tenders->fee}}" readonly required>
                                    @error('fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <!-- deadline -->
                         <div class="form-group row">
                            <label for="deadline" class="col-md-4 col-form-label text-md-right">{{ __('Application Deadline *') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="deadline" value="{{$tenders->deadline}}" readonly required>
                                @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Tender type -->
                        <div class="form-group row">
                            <label for="tender_type" class="col-md-4 col-form-label text-md-right">{{ __('Tender Type *') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1"  name="tender_type" value="{{$tenders->tender_type}}" readonly required>
                                @error('tender_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <!-- register -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success ">
                                 Apply
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


