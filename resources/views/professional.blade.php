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
			<div class="handle-container">
				<div class="col-sm-12 handle_area">
					<h2 class="handle_title">專業服務</h2>
					<h2 class="handle_title">．．．．</h2>
				</div>
				<div class="col-sm-12 padding-none">
					<div class="col-sm-12 handle_area">
						<div class="col-sm-5">
							<label class="area_title">專業調解</label><br>
							我們擁有豐富催收經驗的專業調解員、法律及審計團隊。豐富經驗的專業人員會與您共同完成整個催收過程
						</div>
						<div class="col-sm-5 col-sm-offset-2">
							<label class="area_title">免費查詢</label><br>
							專業調解員會提供免費查詢服務，收集更多個案資訊建立合適的調解及催收計劃
						</div>
					</div>
					<div  class="col-sm-12 padding-bottom">
						<div class="col-sm-5">
							<label class="area_title">調解計劃</label><br>
							提供最佳的調解服務計劃，有效地解決客戶各種不同的壞賬催收
						</div>
						<div class="col-sm-5 col-sm-offset-2">
							<label class="area_title">公平公道</label><br>
							公正、持平的態度幫助雙方平心靜氣地協商調解，找出可行的解決方案，促使雙方達成付款協議。絕無隱藏收費
						</div>
					</div>
				</div>
			</div>
		<!-- {!!$content->content_first!!} -->
		</div>
		@endif
	@endif
@endsection

@section('content_second')
<div class="container padding-bottom">
	<div class="handle-container">
		<div class="col-sm-12 handle_area  margin-top">
			<h2 class="handle_title">調解程序</h2>
			<h2 class="handle_title">．．．．</h2>
		</div>
		<div class="col-sm-12 padding-none">
			<div class="col-sm-12 padding-none image">
				<img src="/front/Pro/債務人.png">
				<img src="/front/Pro/right.png">
				<img src="/front/Pro/梁氏資產管理.png">
				<img src="/front/Pro/left.png">
				<img src="/front/Pro/債務人.png">
				<div class="col-xs-2 gray_people text-right">
					債權人
				</div>
				<div class="col-xs-8 blue_people">
					梁氏資產管理
				</div>
				<div class="col-xs-2 gray_people text-left">
					債務人
				</div>
			</div>

			<div class="col-sm-12 flow_chart text-center padding-bottom">
				<span>與雙方會面了解個案</span><br>
				<img src="/front/Pro/down.png"><br>
				<span>雙方付代表洽談</span><br>
				<img src="/front/Pro/down.png"><br>
				<span>製定和解協議書</span><br>
				<img src="/front/Pro/down.png"><br>
				<span style="background: #882D17;">成功調解債項問題</span><br>
			</div>
		</div>
	</div>
	<!-- {!! $content->content !!} -->
</div>
@endsection