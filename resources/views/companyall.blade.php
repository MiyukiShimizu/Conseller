<h1 class="title">企業一覧</h1>
<link href="css/companyall.css" rel="stylesheet" type="text/css"> 

<div style="height:600px; width:auto; overflow-x:scroll; overflow-y:scroll;">
<table>
<tr>
   <th>企業ID</th><th>企業名</th><th>担当者名</th><th>住所</th><th>電話</th><th>メールアドレス</th><th>登録日</th>
@foreach ($companies as $company);
<tr>
<!-- 会社一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $company["company_id"]}}
     <input type="hidden" name="company_id" value="{{$company['company_id']}}">
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
<td>
<td class= "table-text">
  <div>{{ $company["company_mail"]}}
     <input type="hidden" name="company_mail" value="{{$company['company_mail']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $company["timestamps"]}}
     <input type="hidden" name="timestamps" value="{{$company['timestamps']}}">
  </div>
</td>
</tr>

<!-- 修正ボタン -->
<td>
  <a href="{{ url('companyall/edit/'.$company->company_id)}}">
    修正
</a>

</td>

<!-- 削除ボタン -->
<td>
  <form action="{{url('companyall/delete/'. $company->company_id)}}" method=POST>
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <input type="hidden" name="company_id" value="{{$company['company_id']}}">
  <button type="submit" class="btn-delete">
  削除
  </button>
</form>
</td>

</tr>
@endforeach
</table>

<p id="form_submit"><input type="submit" class="form_submit_button" value="送信 Send" /></p>


