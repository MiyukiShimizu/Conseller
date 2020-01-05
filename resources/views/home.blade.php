<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/company_mypage1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/company_mypage2.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>企業ログイン後ホームページ</a></h1>
            <form action="{{route('admin.logout')}}" method="POST">
            {{csrf_field()}}
            <button id="btn-logout" class="btn btn-danger">管理者用ログアウト</button>
            </form>

            <!-- <form action="{{route('company.logout')}}" method="POST">
            {{csrf_field()}}
            <button id="btn-logout" class="btn btn-danger">企業ログアウト</button>
            </form> -->
		</div>