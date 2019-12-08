@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center; font-size: 40px; font-weight: bolder" class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form  class="text-center" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="form-group col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Fullname">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="form-group form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="option1" required>
                                <label class="form-check-label" for="male">{{ __('Male') }}</label>
                            </div>
                            <div class="form-group form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="option2" required>
                                <label class="form-check-label" for="female">{{ __('Female') }}</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <i class="fa fa-calendar-check-o">
                                </i>
                            </div>
                            <div class="form-group col-md-8">
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                            </div>
                        </div>
                        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <!-- Include Date Range Picker -->
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

                        <script>
                            $(document).ready(function(){
                                var date_input=$('input[name="date"]'); //our date input has the name "date"
                                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                date_input.datepicker({
                                    format: 'mm/dd/yyyy',
                                    container: container,
                                    todayHighlight: true,
                                    autoclose: true,
                                })
                            })
                        </script>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            </div>
                            <div class="form-group col-md-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                </div>
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            </div>
                            <button class="btn btn-primary btn-block my-4 col-md-8 " type="submit">Register</button>
                        </div>  
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
