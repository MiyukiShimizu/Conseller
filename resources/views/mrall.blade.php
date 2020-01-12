<h1 class="title">MR一覧</h1>
<a href="admin/home" class="button">管理ページに戻る</a>
<link href="css/companyall.css" rel="stylesheet" type="text/css"> 
<div style="height:450px; width:auto; overflow-x:scroll; overflow-y:scroll;">

<table>
<tr>
   <th>MR ID</th><th>氏名</th><th>住所</th><th>電話</th><th>メールアドレス</th><th>営業先</th><th>営業エリア</th><th>登録日</th>
</tr>
@foreach ($mrs as $mr);
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
</td>
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
<form action="{{ url('mrall/edit/'.$mr->mr_id)}}">
 <button type="submit" class="btn-update">
    修正
    </button>
</form>
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
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>



