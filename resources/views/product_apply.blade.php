<head>

<style>
    body {
	color: #454545;
	background: #f0f0f0;
    }
</style>

<link rel="stylesheet" href="css/product_apply.css"> 

</head>
<body>
<!-- 登録した後、product_confirmページに行く-->
<form action='product_confirm' method="POST" id="mail_form">
    {{ csrf_field() }}   
<h1 class="title">製品登録フォーム</h1>
	<dl>
		<dt>製品名<span>Product Name</span></dt>
		<dd class="required"><input type="text" id="product_name" name="product_name" value="" /></dd>
		
		<dt>製品一般名<span>Product General Name</span></dt>
		<dd class="required"><input type="text" id="product_generalname" name="product_generalname" value="" /></dd>

		<dt>メーカー名<span>Manufacturer</span></dt>
		<dd><input type="text" id="product_maker" name="product_maker" value="" /> </dd>
		
		<dt>品番<span>No.</span></dt>
		<dd><input type="text" id="product_no" name="product_no" value="" /> </dd>

		<dt>価格<span>price</span></dt>
		<dd class="required"><input type="text" id="product_price" name="product_price" value="" /></dd>
		
		<dt>代理店<span>Distributor</span></dt>
		<dd class="required"><input type="text" id="product_distributor" name="product_distributor" value="" /></dd>

		<dt>営業先<span>sales destination</span></dt>
		@foreach($department as $item)
		<dd><input type="checkbox" id="" name="department_product[]" value="{{$item['department_name']}}" />{{$item['department_name']}}
		@endforeach
	    </dd>
		
		<dt>営業エリア<span>sales area</span></dt>
		<dd><input type="checkbox" id="product_area" name="product_area" value="tokyo" />東京
		<dd><input type="checkbox" id="product_area" name="product_area" value="osaka" />大阪
	    </dd>
	</dl>
	
    <p id="form_submit"><input type="submit" class="form_submit_button" value="送信 Send" /></p>
</form>

