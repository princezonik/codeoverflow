@extends('layouts.masters.main')

@include('layouts.includes.nav')

@section('page-content')

    <main role="main" class="container">
         @include('layouts.includes.form_errors')

        {!! Form::open(['route' => 'get_register', 'id' => 'registration-form']) !!}

        {!! Form::label('name', 'Full Name') !!}
        {!! Form::text('name', null,['id' => 'name', 'class' => 'form-control', 'placeholder'=> 'Full Name', 'required']) !!}
        <br /><br />
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::email('email', null,['id' => 'email', 'class' => 'form-control', 'placeholder'=> 'Email Address', 'required']) !!}
        <br /><br />
        {!! Form::label('password', 'password') !!}
        {!! Form::password('password', null,['id' => 'password', 'class' => 'form-control', 'placeholder'=> 'Password', 'required']) !!}
        <br /><br />
        {!! Form::button('Register', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}
       
       {!! Form::close() !!}
    
    </main>

@endsection