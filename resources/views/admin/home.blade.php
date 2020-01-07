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
			<h1>管理者用ページ</h1> 
		</div>
		<form action="{{route('admin.logout')}}" method="POST">
        {{csrf_field()}}
        <button id="btn-logout" class="btn btn-danger2">管理者ログアウト</button>
        </form>

            <!-- <form action="{{route('company.logout')}}" method="POST">
            {{csrf_field()}}
            <button id="btn-logout" class="btn btn-danger">企業ログアウト</button>
            </form> -->
	</div>
</div>
<div id="featured">&nbsp;</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>営業状況</h2>
            </div>
            <a href="/reportall" class="button">営業レポート一覧参照</a>
         </div>
	</div>
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<div class="box-left">
				<h2>企業一覧</h2>
				<a href="/companyall" class="button">企業一覧参照</a>
			</div>
		</div>
	</div>
    <div id="page" class="container2">
		<div id="banner">
			<div class="title">
				<h2>製品一覧</h2>
				<a href="/productall" class="button">製品一覧参照</a>
            </div>
        </div>
	</div>
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<div class="box-left">
				<h2>MR一覧</h2>
				<a href="/mrall" class="button">MR一覧参照</a>
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
