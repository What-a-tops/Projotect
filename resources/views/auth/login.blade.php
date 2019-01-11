@extends('layouts.app')

@section('content')
<div class="container vertical-center">
    <div class="text-center col-md-5" style="background-color: transparent">
          <div class="card card-default" style="background-color: transparent; border-color: #bdbdbd;border-style: solid; border-width: .5px; background-color: transparent;border-radius: 8px;">
                <div class="card-header" style="font-family: fantasy;color: #bdbdbd;font-size: 20px; text-align: center;">Login</div>

                <div class="card-body" style="border-top: .5px solid #bdbdbd; background-color: transparent;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-family: fantasy;color: #bdbdbd;" for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address :</label>

                            <div class="col-md-6">
                                <input style="background-color: transparent;font-family: fantasy; border-color: #bdbdbd; color: #bdbdbd;border-width: .5px;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-family: fantasy;color: #bdbdbd;" for="password" class="col-md-4 col-form-label text-md-right">Password :</label>

                            <div class="col-md-6">
                                <input style="background-color: transparent;font-family: fantasy; border-color: #bdbdbd; color: #bdbdbd;border-width: .5px;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: transparent; border-color: #bdbdbd;border-style: solid; border-width: .5px; background-color: transparent;border-radius: 2px;font-family: fantasy;color: #bdbdbd;">
                                    Submit
                                </button>

                                <a href="{{ route('register') }}" class="btn btn-default" style="background-color: transparent; border-color: #bdbdbd;border-style: solid; border-width: .5px; background-color: transparent;border-radius: 2px;font-family: fantasy;color: #bdbdbd;">
                                    Register
                                </a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        
        </div>
      </div>
</div>
@endsection
