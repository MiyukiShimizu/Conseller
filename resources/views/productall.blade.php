<h1 class="title">製品一覧</h1>
<link href="css/productall.css" rel="stylesheet" type="text/css"> 

<div style="height:450px; width:auto; overflow-x:scroll; overflow-y:scroll;">
<table>
<tr>
   <th>製品ID</th><th>製品名</th><th>製品一般名</th><th>メーカー名</th><th>品番</th><th>価格</th><th>代理店</th><th>営業先</th><th>営業エリア</th><th>登録日</th>
@foreach ($products as $product);
<tr>

<!-- 製品一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $product["product_id"]}}
     <input type="hidden" name="product_id" value="{{$product['product_id']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $product["product_name"]}}
     <input type="hidden" name="product_name" value="{{$product['product_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $product["product_generalname"]}}
     <input type="hidden" name="product_generalname" value="{{$product['product_generalname']}}">
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
<td class= "table-text">
  <div>{{ $product["timestamps"]}}
     <input type="hidden" name="timestamps" value="{{$product['timestamps']}}">
  </div>
</td>


<!-- 修正ボタン -->
<td>
<button type="submit" class="btn-update">
  修正
  </button>
  <a href="{{ url('productall/edit/'.$product->product_id)}}">
    修正
</a>

</td>

<!-- 削除ボタン -->
<td>
  <form action="{{url('productall/delete/'. $product->product_id)}}" method=POST>
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <input type="hidden" name="product_id" value="{{$product['product_id']}}">
  <button type="submit" class="btn-delete">
  削除
  </button>
</form>
</td>

</tr>
@endforeach
</table>
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>