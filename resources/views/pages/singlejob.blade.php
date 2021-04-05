@extends('pages.dash')

@section('content')

   @include('includes.jobseekersidebar')
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Apply Job') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('postjobs',[$jobs->id]) }}">
                        @csrf
                     
                    @if (session('success'))
                      <div class="alert alert-success" role="alert">
                          {{session('success')}}
                      </div>
                    @endif
                    
                  <!-- job title -->
                         <div class="form-group row">
                            <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="job_title" value="{{$jobs->job_title}}" readonly required>
                                @error('job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- company name -->
                         <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="company_name" value="{{$jobs->company_name}}" readonly required>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- job description -->
                        <div class="form-group row">
                            <label for="job_description" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="job_description" rows="3" readonly>{{$jobs->job_description}}</textarea>
                                @error('job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Qualification -->
                        <div class="form-group row">
                            <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualifications') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="qualification" rows="3" readonly>{{$jobs->qualification}}</textarea>
                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         {{-- <!-- Upload File -->
                         <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Upload File') }}</label>
                            <div class="col-md-6">
                                <a href={{$jobs->file}} download><input id="text" style="cursor: pointer;" type="text" class="form-control" placeholder="download file" @error('file') is-invalid @enderror" name="file" readonly value="{{$jobs->file}}"></a>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        
                         <!-- job location -->
                        <div class="form-group row">
                            <label for="job_location" class="col-md-4 col-form-label text-md-right">{{ __('Job Location') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="job_location" value="{{$jobs->job_location}}" readonly required autocomplete="job_location">
                                @error('job_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- salary range -->
                         <div class="form-group row">
                            <label for="salary_range" class="col-md-4 col-form-label text-md-right">{{ __('Salary Range') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="salary_range" value="{{$jobs->salary_range}}" readonly required autocomplete="salary_range">
                                @error('salary_range')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- deadline -->
                         <div class="form-group row">
                            <label for="deadline" class="col-md-4 col-form-label text-md-right">{{ __('Application Deadline') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="deadline" value="{{$jobs->deadline}}" readonly required autocomplete="deadline">
                                @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Job type -->
                        <div class="form-group row">
                            <label for="job_type" class="col-md-4 col-form-label text-md-right">{{ __('Job Type') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="job_type" value="{{$jobs->job_type}}" readonly required autocomplete="job_type">
                                @error('job_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <!-- register -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-success" type="submit"> 
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
<script>
     $(document).ready(function(){
        $(".clients").select2({
            tags: true
        });
    });
</script>
</body>
</html>

@include('includes.dashfooter')

    <!-- Right Panel -->

   @endsection