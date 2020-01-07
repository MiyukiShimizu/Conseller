<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/mr_mypage1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/reportall.css" rel="stylesheet" type="text/css"> 
</head>

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
</body>

<div id="wrapper">
	<div id="page" class="container">
<h1 class="title">営業レポート一覧</h1>
<div style="height:450px; width:auto; overflow-x:scroll; overflow-y:scroll;">
<table>
<tr>
   <th>レポートID</th><th>MR名</th><th>訪問日</th><th>病院名</th><th>診療科名</th><th>製品名</th><th>コメント</th><th>販売数</th><th>販売単価</th><th>登録日</th>
@foreach ($reports as $report);
<tr>
<!-- レポート一覧 -->
<tr>
<td class= "table-text">
  <div>{{ $report["report_id"]}}
     <input type="hidden" name="report_id" value="{{$report['report_id']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_name"]}}
     <input type="hidden" name="report_name" value="{{$report['report_name']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_date"]}}
     <input type="hidden" name="report_date" value="{{$report['report_date']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_hospital"]}}
     <input type="hidden" name="report_hospital" value="{{$report['report_hospital']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_department"]}}
     <input type="hidden" name="report_department" value="{{$report['report_department']}}">
  </div>
<td>
<td class= "table-text">
  <div>{{ $report["report_product"]}}
     <input type="hidden" name="report_product" value="{{$report['report_product']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_comment"]}}
     <input type="hidden" name="report_comment" value="{{$report['report_comment']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_salesnumber"]}}
     <input type="hidden" name="report_salesnumber" value="{{$report['report_salesnumber']}}">
  </div>
</td>
<td class= "table-text">
  <div>{{ $report["report_salesprice"]}}
     <input type="hidden" name="report_salesprice" value="{{$report['report_salesprice']}}">
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
  <a href="{{ url('reportall/edit/'.$report->report_id)}}">
    修正
</a>

</td>

<!-- 削除ボタン -->
<td>
  <form action="{{url('reportall/delete/'. $report->report_id)}}" method=POST>
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <input type="hidden" name="report_id" value="{{$report['report_id']}}">
  <button type="submit" class="btn-delete">
  削除
  </button>
</form>
</td>

</tr>
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

