@extends('pages.dash')

@section('content')

   @include('includes.employersidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')
    
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    

   
</head>
<body>
    
<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Post a Job') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('postjob') }}">
                        @csrf
                    <p align="center" style="color: red">All fields marked with * are required</p>  
                      <br>

                    @if (session('success'))
                      <div class="alert alert-success" role="alert">
                          {{session('success')}}
                      </div>
                    @endif

                  <!-- jobtitle -->
                         <div class="form-group row">
                            <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title *') }}</label>
                            <div class="col-md-6">
                            <select id="job_title" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="job_title" autofocous >
                                <option value="" disabled selected hidden>Choose a category...</option>
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
                                @error('jobtitle')
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
                                    <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">
                                @error('company_name')
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
                                <textarea id="job_description" rows="4" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ old('job_description') }}" required autocomplete="jobdescription">
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
                                <textarea id="qualification" rows="4" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ old('qualification') }}" required autocomplete="qualification">
                                </textarea>
                                @error('qualification')
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
                                    <input id="job_location" type="text" class="form-control @error('job_location') is-invalid @enderror" name="job_location" value="{{ old('job_location') }}" required autocomplete="job_location">
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
                                <select id="salary_range" class="form-control @error('salary_range') is-invalid @enderror" name="salary_range" value="{{ old('salary_range') }}">
                                    <option value="" disabled selected hidden>Choose a category...</option>
                                    <option>400,000Tshs - 700,000Tshs</option>
                                    <option>700,000Tshs - 1,000,000Tshs</option>
                                    <option>1,000,000Tshs - 5,000,000Tshs</option>
                                    <option>5,000,000Tshs - More</option>
                                </select>
                                @error('salaryrange')
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
                                    <input id="deadline" type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{ old('deadline') }}" required autocomplete="deadline">
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
                                <select id="tags" class="form-control @error('tags') is-invalid @enderror" name="tags[]"  multiple="multiple">
                                  </select>
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
                                    <select id="job_type" class="form-control @error('job_type') is-invalid @enderror" name="job_type" value="{{ old('job_type') }}" required autocomplete="job_type" >
                                        <option value="" disabled selected hidden>Choose a category...</option>
                                        <option>Full Time</option>
                                        <option>Part Time </option>
                                        <option>Internship</option>
                                        <option>Freelance</option>
                                        <option>Consultant</option>
                                    </select>

                                @error('jobtype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <!-- register -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="button" >
                                    {{ __('Post Job') }}
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