 @extends('layouts.app')

@section('content')

	<!-- str_plural -->
    <h1 class="text-center">{{$events->count()}}
     {{ str_plural('Event',$events->count()) }}</h1>

	
	
	<!-- compteur -->
	@if(!$events->isEmpty())
	<ul>
	@foreach($events as $event)
		<li><a href="{{route('events.show',$event)}}">
			{{$event->title}}
			</a>
		</li>
	@endforeach
	</ul>
	@else
	<p> aucun evenement</p>
	@endif
@stop