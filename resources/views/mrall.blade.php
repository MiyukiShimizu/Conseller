<h1 class="title">MR一覧</h1>
<link href="css/companyall.css" rel="stylesheet" type="text/css"> 

<table>
<tr>
   <th>MR ID</th><th>氏名</th><th>住所</th><th>電話</th><th>メールアドレス</th><th>営業先</th><th>営業エリア</th><th>登録日</th>
@foreach ($mrs as $mr);
<tr>
<!-- MR一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $mr["mr_id"]}}
     <input type="hidden" name="mr_id" value="{{$mr['mr_id']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $mr["mr_name"]}}
     <input type="hidden" name="mr_name" value="{{$mr['mr_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $mr["mr_address"]}}
     <input type="hidden" name="mr_address" value="{{$mr['mr_address']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $mr["mr_tel"]}}
     <input type="hidden" name="mr_tel" value="{{$mr['mr_tel']}}">
  </div>
<td>
<td class= "table-text">
  <div>{{ $mr["mr_mail"]}}
     <input type="hidden" name="mr_mail" value="{{$mr['mr_mail']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $mr["timestamps"]}}
     <input type="hidden" name="timestamps" value="{{$mr['timestamps']}}">
  </div>
</td>
</tr>

<!-- 修正ボタン -->
<td>
  <a href="{{ url('mrall/edit/'.$mr->mr_id)}}">
    修正
</a>

</td>

<!-- 削除ボタン -->
<td>
  <form action="{{url('mrall/delete/'. $mr->mr_id)}}" method=POST>
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <input type="hidden" name="mr_id" value="{{$mr['mr_id']}}">
  <button type="submit" class="btn-delete">
  削除
  </button>
</form>
</td>

</tr>
@endforeach
</table>

<p id="form_submit"><input type="submit" class="form_submit_button" value="送信 Send" /></p>


