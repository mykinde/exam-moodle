@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Other Names') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}"  autofocus>

                                @if ($errors->has('middlename'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName/Matric/NO') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Matric/NO') }}</label>

                            <div class="col-md-6">
                                <input id="username-confirm" type="text"class="form-control" name="username_confirmation"  name="username" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            
                        <div class="col-md-6" class="form-control">
                
<input type="radio" id="gender" name="gender" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }}/>Male
<input type="radio"id="gender" name="gender" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }}/>Female

               
                            @if ($errors->has('gender'))
                            <span class="help-block">
                         <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                  {{---       <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Matric NO') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Exam No') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text"class="form-control" name="password_confirmation"  name="username" required>
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="institution" class="col-md-4 col-form-label text-md-right">{{ __('College/School') }}</label>

                            <div class="col-md-6">
                                <input id="institution" type="text" class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" name="institution" value="{{ old('institution') }}" required autofocus>

                                @if ($errors->has('institution'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

// SELECTED RETAIN METHOD FOR OPTION. AND SELECT OPTION
                        <select name="gender" class="form-control" id="gender">
                                <option value="">Select Gender</option>
                                <option value="M" @if (old('gender') == "M") {{ 'selected' }} @endif>Male</option>
                                <option value="F" @if (old('gender') == "F") {{ 'selected' }} @endif>Female</option>
                            </select>
    

                        <!--occupation -->
                        <div class="form-group row">
         <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                            
         <div class="col-md-6">
            <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus>
                                               
                @if ($errors->has('department'))
            <span class="help-block">
             <strong>{{ $errors->first('department') }}</strong>
            </span>
            @endif
                </div>
                    </div>

--}}
                    
                    <div class="form-group row">
                        <label for="institution" class="col-md-4 col-form-label text-md-right">{{ __('College/Faculty') }}</label>
  <div class="col-md-6">
<div class="form-group">
  
                      <select class="form-control" id="institution" name="institution" required>
                       <option value="sel">--Select--</option>
    <option value="CBAS" @if (old('institution') == "CBAS") {{ 'selected' }} @endif >Basic & Applied Sciences</option>
<option value="CHMS" @if (old('institution') == "CHMS") {{ 'selected' }} @endif >Hmanties & Management Sci</option> 
                        </select>
                        </div>               
                        @if ($errors->has('institution'))
                        <span class="help-block">
                         <strong>{{ $errors->first('institution') }}</strong>
                        </span>
                        @endif
                            </div>
                                </div>

                               


    <div class="form-group row">
<label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
              
<div class="col-md-6" id="county_drop_down">
    <div class="form-group" >
                                            
     <select class="form-control" id="department" name="department" required>
        <option value="">--Select--</option>
        <option value="GEP" @if (old('department') == "GED") {{ 'selected' }} @endif >Applied Geophysic </option>
        <option value="BIO" @if (old('department') == "BIO") {{ 'selected' }} @endif >Biology </option>
        <option value="BCH" @if (old('department') == "BCH") {{ 'selected' }} @endif >Biochemistry </option>
        <option value="BIT" @if (old('department') == "BIT") {{ 'selected' }} @endif >Bio Technology </option>
        <option value="CHM" @if (old('department') == "CHM") {{ 'selected' }} @endif > Chemistry</option>
        <option value="CSC" @if (old('department') == "CSC") {{ 'selected' }} @endif >Computer Science </option>
        <option value="FST" @if (old('department') == "FST") {{ 'selected' }} @endif >Food Science & Technology </option>
        <option value="MAT" @if (old('department') == "MAT") {{ 'selected' }} @endif >Mathematics </option>
        <option value="MIC" @if (old('department') == "MIC") {{ 'selected' }} @endif >Microbiology </option>
        <option value="PHY" @if (old('department') == "PHY") {{ 'selected' }} @endif >Physics </option>
        <option value="ACC" @if (old('department') == "ACC") {{ 'selected' }} @endif >Accounting </option>
        <option value="BFN" @if (old('department') == "BFN") {{ 'selected' }} @endif >Banking and Finance </option>
        <option value="BUS" @if (old('department') == "BUS") {{ 'selected' }} @endif >Business Administration </option>
        <option value="ECO" @if (old('department') == "ECO") {{ 'selected' }} @endif >Economics </option>
        <option value="ENG" @if (old('department') == "ENG") {{ 'selected' }} @endif >English Language </option>
        <option value="MAS" @if (old('department') == "MAS") {{ 'selected' }} @endif >Mass Communication </option>
        <option value="MUS" @if (old('department') == "MUS") {{ 'selected' }} @endif >Music </option>
        <option value="PUD" @if (old('department') == "PUD") {{ 'selected' }} @endif >Public Administration </option>
        <option value="RES" @if (old('department') == "RES") {{ 'selected' }} @endif >Religious Studies </option>
        </select>
 </div id="no_county_drop_down">               
                            @if ($errors->has('department'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                            </div>

     







                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone( 0ptional )') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
