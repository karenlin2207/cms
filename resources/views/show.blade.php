@extends('layouts.page')

@section('content')
	@if($content->has_first_part)
		<div class="container banner_container">
			<img class="banner" src="{{$content->img_uri}}">
			<div class="banner_title">
			<h1>{{$content->title}}</h1>
		</div>
		</div>
		@if($content->content_first != NULL)
		<div class="container margin-top">
		{!!$content->content_first!!}
		</div>
		@endif
	@endif
@endsection

@section('content_second')
<div class="container padding-bottom">
	{!! $content->content !!}
</div>
@endsection