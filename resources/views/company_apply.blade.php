
<head>

<style>
    body {
	color: #454545;
	background: #f0f0f0;
    }
</style>

<link rel="stylesheet" href="css/company_apply.css"> 

</head>
<body>
<!-- 登録した後、company_confirmページに行く-->
<form action='public/company_confirm' method="POST" id="mail_form">
    {{ csrf_field() }}   
<h1 class="title">会社登録フォーム</h1>
	<dl>
		
		<dt>会社名<span>Company Name</span></dt>
		<dd><input type="text" id="company_name" name="company_name" value="" /></dd>
		
		<dt>担当者名<span>Name</span></dt>
		<dd class="required"><input type="text" id="tantou_name" name="tantou_name" value="" /></dd>
		
		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="company_address" name="company_address" value="" /> </dd>
		
		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="company_tel" name="company_tel" value="" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="company_mail" name="company_mail" value="" /></dd>
		
	</dl>
	
    <p id="form_submit"><input type="submit" class="form_submit_button" value="送信 Send" /></p>
</form>

