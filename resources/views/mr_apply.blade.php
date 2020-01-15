
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
<form action='public/mr_confirm' method="POST" id="mail_form">
    {{ csrf_field() }}   
<h1 class="title">MR登録フォーム</h1>
	<dl>
		
		<dt>氏名<span>Name</span></dt>
		<dd class="required"><input type="text" id="mr_name" name="mr_name" value="" /></dd>
		
		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="mr_address" name="mr_address" value="" /> </dd>
		
		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="mr_tel" name="mr_tel" value="" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="mr_mail" name="mr_mail" value="" /></dd>
        
	</dl>
	
    <p id="form_submit"><input type="submit" class="form_submit_button" value="送信 Send" /></p>
</form>

