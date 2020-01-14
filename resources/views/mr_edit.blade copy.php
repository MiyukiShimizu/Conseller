<form action="{{url('companyall/update/'. $company->id)}}" method="POST">
    {{ csrf_field() }}	
	<h1 class="title">MRデータ編集</h1>
	<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 
   <dl>

		<dt>氏名<span>Name</span></dt>
		<dd class="required"><input type="text" id="mr_name" name="mr_name" value="{{$mr['mr_name']}}" /></dd>
		
		<dt>住所<span>Address</span></dt>
		<dd><input type="text" id="mr_address" name="mr_address" value="{{$mr['mr_address']}}" /> </dd>
		
		<dt>電話番号<span>Tel</span></dt>
		<dd><input type="text" id="mr_tel" name="mr_tel" value="{{$mr['mr_tel']}}" /> </dd>

		<dt>メールアドレス<span>Mail Address</span></dt>
		<dd class="required"><input type="text" id="mr_mail" name="mr_mail" value="{{$mr['mr_mail']}}" /></dd>
		
	</dl>

<!-- id値を送信 -->
<input type="hidden" name="mr_id" value="{{$mr['mr_id']}}">	
    <p id="form_submit"><input type="submit" id="form_submit_button" value="保存 Save" /></p>
    <a class="btn btn-link pull-right" href="">
    戻る
    </a>


</form>