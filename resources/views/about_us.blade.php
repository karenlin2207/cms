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
			<div class="col-sm-4 border-right ">
				<h4>◆專業調解</h4>
				<p>梁氏資產管理有限公司服務覆蓋中港台，提供專業的個人或商業糾紛處理，商業債務催收服務及專業調解服務，以迎合不同客戶之需求，隨時為企業提供方便快捷的優質服務。</p>
			</div>
			<div class="col-sm-4 border-right padding-left">
				<h4>◆服務到底</h4>
				<p>我們也會關注各個流程，由催款到解決爭議，監察分期償還債務狀況到收回款項。如果催收未能成功，我們會迅速及專業把催收處理程序提昇至法律行動，並向您提供意見。
				</p>
			</div>
			<div class="col-sm-4 padding-left">
				<h4>◆顧客至上</h4>
				<p>和客戶建立良好關係是我們的目標，我們的賬務管理專家將為您提供一站式專業服務及意見，能迅速協助客戶處理各地的商務糾紛或信用調查，收回各項壞賬，增加企業盈利及競爭能力。
				</p>
			</div>
		</div>
	@endif
@endsection

@section('content_second')
<div class="container">
	<div class="col-sm-12 padding-bottom">
		<h3>聯絡方法</h3>
	</div>
	<div class="col-sm-12 padding-bottom">
		<div class="col-sm-5" id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.146302236387!2d114.18581581499524!3d22.31030603531842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400dedd853dcf%3A0x25eb7305dae813c6!2z6aaZ5riv57SF56Oh6aas6aCt5ZyN6YGTMzctMznomZ_ntIXno6HllYbmpa3kuK3lv4NB5bqn!5e0!3m2!1szh-TW!2stw!4v1498187647050" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-7 padding-none contact">
			<div class="col-sm-12 margin-bottom">	
				<div class="col-sm-4 border-right">
					<img src="/front/About us/Phone.png">852 2780 0400
				</div>
				<div class="col-sm-4 border-right">
					<img src="/front/About us/Whatsapp.png">6444 4330
				</div>
				<div class="col-sm-4">
					<img src="/front/About us/Fax.png">852 3260 3965
				</div>
			</div>
			<div class="col-sm-12  margin-bottom">
				<div class="col-sm-4 border-right">
					<img src="/front/About us/facebook.png"> xxxxxxxxxxx
				</div>
				<div class="col-sm-8">	
					<img src="/front/About us/email.png"> info@leungsdebtcollector.com.hk
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12 margin-bottom float-left">
					<img src="/front/About us/address.png"> 九龍紅磡紅磡商業中心A座415F室
				</div>
				<div class="col-sm-12 margin-bottom">
					<div><img src="/front/About us/opening hour.png"> </div>
					<div>
						<p>
							星期一至五: 早上10時 至 晚上7時  <br>
							星期六: 早上10時至 下午1時<br>	
							(星期日及公眾假期休息)
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection