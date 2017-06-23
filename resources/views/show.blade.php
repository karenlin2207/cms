@extends('layouts.page')

@section('content')
	@if($content->has_first_part)
		<div class="container banner_container">
			<img class="banner" src="{{$content->img_uri}}">
			<div class="banner_title">
			<h1>{{$content->title}}</h1>
		</div>
		</div>
		<div class="container">
		
		{!!$content->content_first!!}
		</div>
	@endif
@endsection

@section('content_second')
<div class="container">
{!! $content->content !!}
</div>
@endsection