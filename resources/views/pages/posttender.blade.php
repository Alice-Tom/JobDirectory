@extends('pages.dash')

@section('content')

   @include('includes.companysidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')
   
<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Post a Tender') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posttender') }}">
                        @csrf

                        <p align="center" style="color: red">All fields marked with * are required</p>  
                        <br>

                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                    @endif

                  <!-- tendertitle -->
                         <div class="form-group row">
                            <label for="tender_title" class="col-md-4 col-form-label text-md-right">{{ __('Tender Title *') }}</label>

                            <div class="col-md-6">
                                <input id="tender_title" type="text" class="form-control @error('tender_title') is-invalid @enderror" name="tender_title" value="{{ old('tender_title') }}" required autocomplete="tender_title" autofocus>


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
                                    <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">
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
                                <textarea id="tender_description" rows="4" class="form-control @error('tender_description') is-invalid @enderror" name="tender_description" value="{{ old('tender_description') }}" required autocomplete="tender_description">
                                </textarea>

                                @error('tender_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Upload File -->
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Upload File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
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
                                
                                
                                    <input id="tender_location" type="text" class="form-control @error('tender_location') is-invalid @enderror" name="tender_location" value="{{ old('tender_location') }}" required autocomplete="tender_location">

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
                                
                                
                                    <input id="budget" placeholder="TZ Shillings / USD" type="text" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ old('budget') }}">

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
                                
                                
                                    <input id="fee" type="text" class="form-control @error('fee') is-invalid @enderror" name="fee" value="{{ old('fee') }}">                  
                                    
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
                                <select class="form-control" multiple="multiple"></select>
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}



                         <!-- Job type -->
                        <div class="form-group row">
                            <label for="tender_type" class="col-md-4 col-form-label text-md-right">{{ __('Tender Type *') }}</label>

                            <div class="col-md-6">
                                    <select id="tender_type" class="form-control @error('tender_type') is-invalid @enderror" name="tender_type" value="{{ old('tender_type') }}"autocomplete="tender_type" >
                                        <option value="" disabled selected hidden>Choose a category...</option>
                                        <option>Local</option>
                                        <option>International </option>
                                      
                                    </select>

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
                                <button type="submit" name="submit" class="button">
                                    {{ __('Post Tender') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.dashfooter')
    <!-- Right Panel -->

   @endsection


