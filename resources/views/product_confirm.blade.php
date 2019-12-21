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
<form action='/product_store' method="POST" id="mail_form">
    {{ csrf_field() }}	

<h1 class="title">製品登録内容確認</h1>
	<dl>
		<dt>製品名<span>Product Name</span></dt>
		<dd class="required"><input type="text" id="product_name" name="product_name" value="{{$product['product_name']}}" /></dd>

		<dt>製品一般名<span>Product General Name</span></dt>
		<dd class="required"><input type="text" id="product_generalname" name="product_generalname" value="{{$product['product_generalname']}}" /></dd>

		<dt>メーカー名<span>Manufacturer</span></dt>
		<dd><input type="text" id="product_maker" name="product_maker" value="{{$product['product_maker']}}" /> </dd>

		<dt>品番<span>No.</span></dt>
		<dd><input type="text" id="product_no" name="product_no" value="{{$product['product_no']}}" /> </dd>

		<dt>代理店<span>Distributor</span></dt>
		<dd class="required"><input type="text" id="product_distributor" name="product_distributor" value="{{$product['product_distributor']}}" /></dd>

		<dt>営業先<span>sales destination</span></dt>
		@foreach($product["department_product"] as $item)
		<dd>

			<input type="hidden"id="" name="department_product[]" value="{{$item}}" />{{$item}} 
		</dd>
		@endforeach
		
	   

		<dt>価格<span>price</span></dt>
		<dd class="required"><input type="text" id="product_price" name="product_price" value="{{$product['product_price']}}" /></dd>
		

	</dl>

  <p id="form_submit"><input type="submit" id="form_submit_button" value="登録 Register" /></p>
</form>

