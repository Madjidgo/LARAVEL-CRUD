 @extends('layouts.app')

@section('content')

    <h1 class="text-center">{{$events->title}}</h1>


<p>{{$events->description}}</p>


<div class="row">
<a class="btn btn-secondary" href="{{route('events.edit',$events) }}"> Update</a>

<!-- <a class="btn btn-secondary" href="{{route('events.destroy',$events) }}"> DElete</a> -->

<form action="{{route('events.destroy',$events) }}" method="POST">
   {{ csrf_field() }}
     {{ method_field('DELETE') }}

      <button type="submit" class="btn btn-danger""><i class="fa fa-trash-o fa-lg"></i> Delete</button>


</form>

<a class="btn btn-primary" href="{{ route('home') }}"> Retry</a>

</div>


	
	
@stop   