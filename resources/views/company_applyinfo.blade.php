<head>
<style>
    body {
	color: #454545;
	background: #f0f0f0;
    }
</style>
<link href="css/company_mypage1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 
</head>

<body>
<div id="header-wrapper">
	<div id="header2" class="container">
		<div id="logo">
			<h1>企業マイページ</h1>
		</div>	
			<div id="menu">
			<ul>
				<li class="current_page_item"><a href="company/company_mypage" class="button">マイページ ホームに戻る</a>
			</ul>
		</div>
	  </div>	
	</div>
</div>
</body>
<div id="wrapper">
	<div id="page" class="container">
<form action='/company_store' method="POST" id="mail_form">
    {{ csrf_field() }}	

<h1 class="title">企業登録内容確認</h1>
	<dl>
		<dt>会社名<span>Company Name</span></dt>
		<dd><input type="text" id="company_name" name="company_name" value="{{$company['company_name']}}" /></dd>

		<dt>担当者名<span>Name</span></dt>
		<dd class="required"><input type="text" id="tantou_name" name="tantou_name" value="{{$company['tantou_name']}}" /></dd>

		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="company_address" name="company_address" value="{{$company['company_address']}}" /> </dd>

		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="company_tel" name="company_tel" value="{{$company['company_tel']}}" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="company_mail" name="company_mail" value="{{$company['company_mail']}}" /></dd>
		
	</dl>

  <p id="form_submit"><input type="submit" class="form_submit_button" value="修正する" /></p>
</form>
</div>
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted2 small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>

