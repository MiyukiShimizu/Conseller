<form action="{{url('productall/update/'. $product->product_id)}}" method="POST">
    {{ csrf_field() }}	
	<h1 class="title">製品データ編集</h1>
	<link href="css/company_apply.css" rel="stylesheet" type="text/css"> 

   <dl>
		<dt>製品名<span>Product Name</span></dt>
		<dd class="required"><input type="text" id="product_name" name="product_name" value="{{$product['product_name']}}" /></dd>
		
		<dt>製品一般名<span>Product General Name</span></dt>
		<dd class="required"><input type="text" id="product_generalname" name="product_generalname" value="{{$product['product_generalname']}}" /></dd>

		<dt>メーカー名<span>Manufacturer</span></dt>
		<dd><input type="text" id="product_maker" name="product_maker" value="{{$product['product_maker']}}" /> </dd>
		
		<dt>品番<span>No.</span></dt>
		<dd><input type="text" id="product_no" name="product_no" value="{{$product['product_no']}}" /> </dd>

		<dt>価格<span>price</span></dt>
		<dd class="required"><input type="text" id="product_price" name="product_price" value="{{$product['product_price']}}" /></dd>
		
		<dt>代理店<span>Distributor</span></dt>
		<dd class="required"><input type="text" id="product_distributor" name="product_distributor" value="{{$product['product_distributor']}}" /></dd>

		<dt>営業先<span>sales destination</span></dt>
		<dd><input type="checkbox" id="product_destinaion" name="product_destination" value="naika" />内科
		<dd><input type="checkbox" id="product_destinaion" name="product_destination" value="shoukaki" />消化器外科
		<dd><input type="checkbox" id="product_destinaion" name="product_destination" value="seikei" />整形外科
		</dd>
		
		<dt>営業エリア<span>sales area</span></dt>
		<dd><input type="radio" id="product_area" name="product_area1" value="tokyo" />東京
		<dd><input type="radio" id="product_area" name="product_area2" value="osaka" />大阪
	    </dd>
</dl>

<!-- id値を送信 -->
<input type="hidden" name="product_id" value="{{$product['product_id']}}">	
    <p id="form_submit"><input type="submit" id="form_submit_button" value="保存 Save" /></p>
    <a class="btn btn-link pull-right" href="">
    戻る
    </a>


</form>