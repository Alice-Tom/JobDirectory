@extends('pages.dash')

@section('content')

   @include('includes.consultantsidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')
       





<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Set Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('consultantdash') }}">
                        @csrf

                        <p align="center" style="color: red">All fields marked with * are required</p>  
                        <br>        
                 
                        @if (session('success'))
                      <div class="alert alert-success" role="alert">
                          {{session('success')}}
                      </div>
                    @endif
                    
                         <!-- first name -->
                         <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name *') }}</label>
                            <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--last name -->
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name *') }}</label>
                            <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Phone number -->
                         <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number *') }}</label>
                            <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Profession -->
                        <div class="form-group row">
                            <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('Profession *') }}</label>

                            <div class="col-md-6">
                                <input id="profession" type="text"  class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" required autocomplete="profession">
                                @error('profession')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Portfolio -->
                         <div class="form-group row">
                            <label for="portfolio" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio *') }}</label>

                            <div class="col-md-6">
                                <input id="portfolio" type="text" placeholder="Please provide a link to your portfolio" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ old('portfolio') }}" required autocomplete="portfolio">
                                {{-- <input id="portfolio" type="file" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ old('portfolio') }}" required autocomplete="portfolio"> --}}
                                @error('portfolio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         
                       
                         <!-- register -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <script>
                                    function myFunction() {
                                    alert("Form Submitted Successfully");
                                    }
                                    </script>
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
@endsection
