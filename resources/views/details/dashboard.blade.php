@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>    
            </div>
            <div class="panel-body">
                {!! Form::open(['method'=>'POST']) !!}
                {{-- {!! Form::model('$user', ['action' =>'HomeController@store']) !!} --}}
                <div class="form-group">
                    {!! Form::label('First Name', 'First Name') !!}
                    {!! Form::text('First Name', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Last Name', 'Last Name') !!}
                    {!! Form::text('Last Name', '', ['class' => 'form-control']) !!}
                </div> 
                <div class="form-group">
                    {!! Form::label('Title', 'Title') !!}
                    {!! Form::text('Title', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('City', 'City') !!}
                    {!! Form::text('City', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Short Bio', 'Short Bio') !!}
                    {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Country', 'Country') !!}
                    {!! Form::text('Country', '', ['class' => 'form-control']) !!}
                </div>
                <div ><hr></div>
                <div> 
                     {!! Form::label('Social Links', 'Social Links') !!}
                </div>
                <div class="form-group">
                  {!! Form::label('Your Website', 'Your Website') !!}
                  {!! Form::text('Your Website', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('Facebook Profile', 'Facebook Profile') !!}
                  {!! Form::text('Facebook Profile', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('Twitter Profile', 'Twitter Profile') !!}
                  {!! Form::text('Twitter Profile', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('LinkedIn Profile', 'LinkedIn Profile') !!}
                  {!! Form::text('LinkedIn Profile', '', ['class' => 'form-control']) !!}
                </div>
                <div ><hr></div>
                <div class="form-group">
                  {!! Form::label('Date of Birth', 'Date of Birth') !!}
                  {!! Form::text('Date of Birth', '', ['class' => 'form-control']) !!}
                </div>
                <div><hr></div>
                <div class="form-group">
                  {!! Form::label('Industry', 'Industry') !!}
                  {!! Form::text('Industry', '', ['class' => 'form-control']) !!}
                </div>

                <button class="btn btn-success" type="submit">Save</button>
                <button class="btn btn-success" type="submit">Reset</button>
                {!! Form::close() !!}
            </div>
        <div><hr></div>
      <div class="form-group">
      {!! Form::label('My Email', 'My Email') !!}
      {!! Form::text('My Email', '', ['class' => 'form-control']) !!}<br>
      <button class="btn btn-success" type="submit">Change Email</button>
    </div>

    <div class="form-group">
      {!! Form::label('My Password', 'My Password') !!}
      {!! Form::text('My Password', '', ['class' => 'form-control']) !!}<br>
      <button class="btn btn-success" type="submit">Change Password</button>
    </div>
{!! Form::close() !!}
    </div>
</div>
</div>
@endsection
