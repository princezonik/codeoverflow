@extends('/layouts.masters.main')

@section('page-content')

  <main role="main" class="container">

     @include('layouts.includes.nav')
     @include('layouts.includes.form_errors')

    {!! Form::open(['route' => 'post_login', 'id' => 'login-form']) !!}

    {!! Form::label('email', 'Email Address') !!}
    {!! Form::email('email', null,['id' => 'email', 'class' => 'form-control', 'placeholder'=> 'Email Address', 'required']) !!}
    <br />
    {!! Form::label('password', 'Password') !!}
    <br />
    {!! Form::password('password', null,['class' => 'form-control', 'required']) !!}
    <br /><br />
    {!! Form::button('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}
     {!! Form::label('checkbox','Remember Me') !!}
     <br />
    {!! Form::checkbox('remember_token', 'no',false) !!}
    {!! Form::close() !!}
    
    </main>

@endsection
