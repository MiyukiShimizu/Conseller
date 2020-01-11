<form action="{{url('companyall/update/'. $company->id)}}" method="POST">
    {{ csrf_field() }}	
	<h1 class="title">データ編集</h1>
	<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 
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

<!-- id値を送信 -->
<input type="hidden" name="id" value="{{$company['id']}}">	
    <p id="form_submit"><input type="submit" id="form_submit_button" value="保存 Save" /></p>
    <a class="btn btn-link pull-right" href="">
    戻る
    </a>


</form>