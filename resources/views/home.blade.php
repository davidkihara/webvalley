@extends('layouts.app')

@section('content')
<div class="container" style="background-color: rgb(149, 152, 157);">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>    
            </div>
            <div class="col-md-8 col-md-offset-2">
              
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Lasst Name</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>



                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Language</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>


                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Short Bio</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>



                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Your Website</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>


                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Facebook Profile</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>



                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Twitter Profile</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">LinkedIn Profile</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>



                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>


                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Industry</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
