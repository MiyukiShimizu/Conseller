<head>
<style>
    body {
	color: #454545;
	background: #f0f0f0;
    }
</style>

<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 

</head>
<body>
<form action='mr_store' method="POST" id="mail_form">
    {{ csrf_field() }}	

<h1 class="title">登録内容確認</h1>
	<dl>
		<dt>氏名<span>Name</span></dt>
		<dd class="required"><input type="text" id="mr_name" name="mr_name" value="{{$mr['mr_name']}}"/></dd>

		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="mr_address" name="mr_address" value="{{$mr['mr_address']}}" /> </dd>

		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="mr_tel" name="mr_tel" value="{{$mr['mr_tel']}}" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="mr_mail" name="mr_mail" value="{{$mr['mr_mail']}}" /></dd>
		
	</dl>

  <p id="form_submit"><input type="submit" class="form_submit_button" value="登録 Register" /></p>
</form>

