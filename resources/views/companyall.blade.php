<h1 class="title">企業一覧</h1>
<a href="admin/home" class="button">管理ページに戻る</a>
<link href="css/companyall.css" rel="stylesheet" type="text/css"> 

<div style="height:450px; width:auto; overflow-x:scroll; overflow-y:scroll;">
<table>
<tr>
   <th>企業ID</th><th>企業名</th><th>担当者名</th><th>住所</th><th>電話</th><th>メールアドレス</th><th>登録日</th>
</tr>
@foreach ($companies as $company);
<!-- 会社一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $company["id"]}}
     <input type="hidden" name="id" value="{{$company['id']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["company_name"]}}
     <input type="hidden" name="company_name" value="{{$company['company_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["tantou_name"]}}
     <input type="hidden" name="tantou_name" value="{{$company['tantou_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["company_address"]}}
     <input type="hidden" name="company_address" value="{{$company['company_address']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["company_tel"]}}
     <input type="hidden" name="company_tel" value="{{$company['company_tel']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["company_mail"]}}
     <input type="hidden" name="company_mail" value="{{$company['company_mail']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["created_at"]}}
     <input type="hidden" name="timestamps" value="{{$company['created_at']}}">
  </div>
</td>
</tr>

<!-- 修正ボタン -->
<td>
<form action="{{ url('public/companyall/edit/'.$company->id)}}">
 <button type="submit" class="btn-update">
    修正
    </button>
</form>
</td>

<!-- 削除ボタン -->
<td>
  <form action="{{url('public/companyall/delete/'. $company->id)}}" method=POST>
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <input type="hidden" name="id" value="{{$company['id']}}">
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

