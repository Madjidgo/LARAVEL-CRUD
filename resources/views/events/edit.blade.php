 @extends('layouts.app')

@section('content')

<h1 class="text-center">{{$events->title}}</h1>

<form action="{{route('events.update',$events)}}" method="POST">
	 {{ csrf_field() }}
   
   {{method_field('PUT')}}

  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>

    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title" value="{{old('title') ?? $events->title}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" name="description" value="{{old('description') ?? $events->description}}">
    {!! $errors->first('title','<p>:message</p>') !!}
  </div>

	 <button type="submit" class="btn btn-default">Valid</button>


</form>

<a class="btn btn-default" href="{{ route('home') }}"> Retry</a>
@stop