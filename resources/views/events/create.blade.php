@extends('layouts.app')

@section('content')

<h1 class="text-center"> Create  Events</h1>

<form action="{{route('events.store')}}" method="POST">
	 {{ csrf_field() }}

  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" name="description">
    {!! $errors->first('description','<p>:message</p>') !!}
  </div>

	 <button type="submit" class="btn btn-primary">Submit</button>


</form>

<a class="btn btn-primary" href="{{ route('home') }}"> Retry</a>
@stop