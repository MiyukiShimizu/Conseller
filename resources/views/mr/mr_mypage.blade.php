<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{ asset('css/company_mypage1.css') }}" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>MRマイページ</h1>
			<form action="{{route('mr.logout')}}" method="POST">
			{{csrf_field()}}
    		<button id="btn-logout" class="btn btn-danger">MRログアウト</button>
			</form>
		</div>
	</div>
</div>
<div id="featured">&nbsp;</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>営業状況</h2>
				<a href="/mr_reportall" class="button">営業レポート参照</a>
            </div>
         </div>
	</div>
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<div class="box-left">
				<h2>担当製品</h2>
				<a href="/mr_productall" class="button">担当製品一覧</a>
			</div>
		</div>
	</div>
    <div id="page" class="container2">
		<div id="banner">
			<div class="title">
				<h2>MR登録情報</h2>
				<a href="/mr_applyinfo" class="button">登録したMR情報を見る</a>
            </div>
        </div>
	</div>
</div>

</body>
</html>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>
