<div class="panel panel-default">
	<div class="panel-body">
		@if(isset($setting->web_logo))
		<p><img src="{{ asset('public/img/'.$setting->web_logo) }}" class="img-responsive center-block"></p>
		@endif
		<h1><button class="btn-block btn btn-success">phongkhamnamkhang.com</button></h1>
	</div>
</div>