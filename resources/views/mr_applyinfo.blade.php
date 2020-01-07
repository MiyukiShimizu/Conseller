<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<style>
    body {
	color: #454545;
	background: #f0f0f0;
    }
</style>
<link href="css/mr_mypage1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 
</head>

<body>
<div id="header-wrapper">
	<div id="header2" class="container">
		<div id="logo">
			<h1>MRマイページ</h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="mr_mypage" accesskey="1" title="">MRマイページ ホームに戻る</a></li>
			</ul>
		</div>
	</div>
</div>
</body>

<div class="wrapper2">
  <form action='/mr_store' method="POST" id="mail_form">
    {{ csrf_field() }}	

    <h1 class="title">登録内容</h1>
	<dl>
		<dt>氏名<span>Name</span></dt>
		<dd class="required"><input type="text" id="mr_name" name="mr_name" value="{{$mr['mr_name']}}"/></dd>

		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="mr_address" name="mr_address" value="{{$mr['mr_address']}}" /> </dd>

		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="mr_tel" name="mr_tel" value="{{$mr['mr_tel']}}" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="mr_mail" name="mr_mail" value="{{$mr['mr_mail']}}" /></dd>
		
		<dt>可能な営業先<span>sales department</span></dt>
		@foreach($departments as $item)
		<dd><input type="hidden"id="" name="mr_department[]" value="{{$item}}" />{{$item}} 
	    @endforeach
		</dd>
		
		<dt>営業エリア<span>sales area</span></dt>
		@foreach($area as $areaitem)
		<dd><input type="hidden" id="" name="mr_area[]" value="{{$areaitem['area_name']}}" />{{$areaitem['area_name']}}
	    @endforeach
	    </dd>
	</dl>
  </form>
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted2 small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>

