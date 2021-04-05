@extends('pages.dash')

@section('content')

   @include('includes.editside')
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
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Edit Job') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('updatepost') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$jobs->id}}">
                    <p align="center" style="color: red">All fields marked with * are required</p>  
                      <br>

                      @if (session('success'))
                      <div class="alert alert-success" role="alert">
                          {{session('success')}}
                      </div>
                    @endif

                  <!-- job_title -->
                         <div class="form-group row">
                            <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title *') }}</label>
                            <div class="col-md-6">
                            <select id="job_title" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="job_title" required autocomplete="title" autofocous >
                                <option value="" disabled selected hidden>{{$jobs->job_title}}</option>
                                <option>IT Supporter</option>
                                <option>Software Development</option>
                                <option>Web Developer</option>
                                <option>System Administrator</option>
                                <option>System Analyst</option>
                                <option>Network Engineer</option>
                                <option>Computer Technician</option>
                                <option>Graphic Designer</option>
                                <option>Content Creator</option>
                                <option>Mobile Application Developer</option>
                            </select>
                                @error('job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- job description -->
                        <div class="form-group row">
                            <label for="job_description" class="col-md-4 col-form-label text-md-right">{{ __('Job Description *') }}</label>
                            <div class="col-md-6">
                                <textarea id="job_description" rows="4" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ old('job_description') }}" required autocomplete="job_description">{{$jobs->job_description}}
                                </textarea>
                                @error('job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Qualification -->
                        <div class="form-group row">
                            <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualifications *') }}</label>
                            <div class="col-md-6">
                                <textarea id="qualification" rows="4" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ old('qualification') }}" required autocomplete="qualification">{{$jobs->qualification}}
                                </textarea>
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
                                <input id="file" type="text" class="form-control @error('file') is-invalid @enderror" name="file" value="{{$jobs->file}}" required autocomplete="file">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                         <!-- company name -->
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name *') }}</label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{$jobs->company_name}}" required autocomplete="company_name">
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- job location -->
                        <div class="form-group row">
                            <label for="job_location" class="col-md-4 col-form-label text-md-right">{{ __('Job Location *') }}</label>
                            <div class="col-md-6">
                                    <input id="job_location" type="text" class="form-control @error('job_location') is-invalid @enderror" name="job_location" value="{{$jobs->job_location}}" required autocomplete="job_location">
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
                                <select id="salary_range" class="form-control @error('salary_range') is-invalid @enderror" name="salary_range" value="{{$jobs->salary_range}}" required>
                                    <option value="" disabled selected hidden>{{$jobs->salary_range}}</option>
                                    <option>400,000Tshs - 700,000Tshs</option>
                                    <option>700,000Tshs - 1,000,000Tshs</option>
                                    <option>1,000,000Tshs - 5,000,000Tshs</option>
                                    <option>5,000,000Tshs - 10,000,000Tshs</option>
                                    <option>10,000,000Tshs - More</option>
                                </select>
                                @error('salary_range')
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
                                    <input id="deadline" type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{$jobs->deadline}}" required autocomplete="deadline">
                                @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         {{-- <!--tags -->
                         <div class="form-group row">
                            <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('Tags *') }}</label>
                            <div class="col-md-6">
                                <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{$jobs->tags}}" required autocomplete="tags">
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                         <!-- Job type -->
                        <div class="form-group row">
                            <label for="job_type" class="col-md-4 col-form-label text-md-right">{{ __('Job Type *') }}</label>

                            <div class="col-md-6">
                                    <select id="job_type" class="form-control @error('job_type') is-invalid @enderror" name="job_type" value="job_type" required autocomplete="job_type" >
                                        <option value="" disabled selected hidden>{{$jobs->job_type}}</option>
                                        <option>Full Time</option>
                                        <option>Part Time </option>
                                        <option>Internship</option>
                                        <option>Freelance</option>
                                        <option>Consultant</option>
                                    </select>

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