<link href="css/productall.css" rel="stylesheet" type="text/css"> 
<link href="css/mr_mypage1.css" rel="stylesheet" type="text/css" media="all" />
<body>
<div id="header-wrapper">
	<div id="header" class="container">
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
<div id="wrapper">
	<div id="page" class="container">
<h1 class="title">登録製品一覧</h1>
<div style="height:450px; width:auto; overflow-x:scroll; overflow-y:scroll;">
<table>
<tr>
   <th>製品名</th><th>メーカー名</th><th>品番</th><th>価格</th><th>代理店</th><th>営業先</th><th>営業エリア</th>
@foreach ($errors as $product);
<tr>

<!-- 製品一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $product["product_name"]}}
     <input type="hidden" name="product_name" value="{{$product['product_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $product["product_maker"]}}
     <input type="hidden" name="product_maker" value="{{$product['product_maker']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $product["product_no"]}}
     <input type="hidden" name="product_no" value="{{$product['product_no']}}">
  </div>
<td>
<td class= "table-text">
  <div>{{ $product["product_price"]}}
     <input type="hidden" name="product_price" value="{{$product['product_price']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $product["product_distributor"]}}
     <input type="hidden" name="product_distributor" value="{{$product['product_distributor']}}">
  </div>
</td>

@endforeach
</table>
</div>
</div>
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted2 small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>

