@extends('layouts.master')

@section('content')
<div class="main-container">
	<h1>Foo</h1>
	
      @if( count($errors) > 0 )
      <div class="alert alert-danger">
        @foreach( $errors->all() as $error )
          {{ $error }}<br>
        @endforeach
      </div>
      @else
      <div class="alert alert-info">
      no error.
      </div>
      @endif

      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif

</div>
@stop
