@extends('layouts.masters.main')

@section('page-content')

<main class="container">

     @include('layouts.includes.nav')
     @include('layouts.includes.form_errors')
     
    {!! Form::open(['id' => 'post-question-form']) !!}

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null,['id' => 'title', 'class' => 'form-control', 'placeholder'=> 'title', 'required']) !!}
    <br /><br />

    {!! Form::label('category', 'Category') !!}
    <select name="category" class="form-control">
      @foreach($categories as $category)
        <option value="{{ $category->id}}">{{ $category->name }}</option>
      @endforeach
    </select>    
    <br /><br />

    {!! Form::label('boody', 'Body') !!}
    {!! Form::textarea('body', null,['id' => 'body', 'class' => 'form-control', 'placeholder'=> 'Tell us about your question', 'required']) !!}
    <br /><br />
    {!! Form::button('Post', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}
   
   {!! Form::close() !!}
    
    </main>

  @stop
