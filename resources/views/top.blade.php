<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conseller top page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/top_core.css" rel="stylesheet" type="text/css"> 

    <!-- Custom Fonts -->
    <link href="css/top_customfonts1.css" rel="stylesheet" type="text/css"> 
    <link href="css/top_customfonts2.css" rel="stylesheet" type="text/css"> 
    <link href="css/top_customfonts3.css" rel="stylesheet" type="text/css"> 

    <!-- Custom CSS -->
    <link href="css/top_custom.css" rel="stylesheet" type="text/css"> 

</head>

<body id="page-top">
<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">Conseller</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">Consellerのしくみ</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#portfolio">営業先</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">現在の状況</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#contact">お問い合わせ</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="{{url('/company/login')}}">企業ログイン</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="{{url('/mr/login')}}">MRログイン</a>
        </li>

    </ul>
</nav>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
   <a class="top_login" href="{{ route('login') }}">Login</a>     
        <h1 class="mb-1">Conseller</h1>
        <h3 class="mb-5">
            <em>営業マン不足、製品数不足を補い、医療機器の営業を促進！</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Consellerについてもっと知る</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Consellerは、貴社の医療機器を他社の医療機器と一緒に<br>希望の診療科に営業するサービスです。</h2>
                <p class="lead mb-5">自社製品が少なくても、自社の営業マンが少なくても、Consellerで他社製品とシナジーを作り、<br>目的の診療科に効率よく営業します。</p>
                <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">Consellerのしくみ
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Services</h3>
            <h2 class="mb-5">Consellerのしくみ</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
                <h4>
                    <strong>製品を登録</strong>
                </h4>
                <p class="text-faded mb-0">製品、診療科、販促資料を<br>登録します</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
                <h4>
                    <strong>他社の製品登録を待つ</strong>
                </h4>
                <p class="text-faded mb-0">同じ診療科に向けた<br>他社の製品登録を待ちます</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-like"></i>
            </span>
                <h4>
                    <strong>5製品の登録で営業開始</strong>
                </h4>
                <p class="text-faded mb-0">1診療科あたり5製品集まったら、営業マン1名が営業を開始します</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
                <h4>
                    <strong>状況を確認する</strong>
                </h4>
                <p class="text-faded mb-0">毎月の営業先、営業件数、<br>受けた質問を確認できます</p>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="content-section" id="portfolio" style="height: 58%;>
<div class="container">
    <div class="content-section-heading text-center">
    <h3 class="text-secondary mb-0">Customer</h3>    
    <h2 class="mb-5">Consellerの営業先</h2>
    <p class="lead mb-5">東京エリア、大阪エリアの200床以上の病院に対して営業を行います。</p>
    <p class="lead mb-5">東京エリアの営業先例</p>
    </div>
</div>
</section>
<section>
    <small>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map" style="height: 85%; width: 100%; margin: 2rem auto 0;"></div>
       <!-- jqueryの読み込む -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoaUoi8RZ5xqHBNGyxKfM9McBVFI3y8HQ"
    ></script>
    <!-- js -->
    <script type="text/javascript">
     //マーカーをつける所を決める
     var map
     var marker = [];
     var infoWindow = [];
     var markerData = [ // マーカーを立てる場所名・緯度・経度
 {
    name: '東京大学医学部付属病院',
    lat: 35.712678,
    lng: 139.761989
 }, {
    name: '順天堂大学病院',
    lat: 35.6459411,
    lng: 139.9071013
 }, {
    name: '東京医科歯科大学病院',
    lat: 35.7009680,
    lng: 139.7649552
 }, {
    name: '三井記念病院',
    lat: 35.6997555,
    lng: 139.7792312
 }, {
    name: '東京女子医科大学',
    lat: 35.6980125,
    lng: 139.7206990
 }, {
    name: '国立国際医療研究センター',
    lat: 35.7025540,
    lng: 139.7161940
 }, {
    name: '同愛記念病院',
    lat: 35.6998610,
    lng: 139.7943510
 }, {
    name: 'JCHO東京新宿メディカルセンター',
    lat: 35.7034260,
    lng: 139.7421174
 }
];

// function initMap() {
 // 地図の作成
    var mapLatLng = new google.maps.LatLng({lat: markerData[0]['lat'], lng: markerData[0]['lng']}); // 緯度経度のデータ作成
    map = new google.maps.Map(document.getElementById('map'), { // #sampleに地図を埋め込む
    center: mapLatLng, // 地図の中心を指定
    zoom: 14.3 // 地図のズームを指定
   });

    //   center: {
    //       lat: 35.70, //緯度を設定
    //       lng: 139.759 //経度を設定

 // マーカー毎の処理
 for (var i = 0; i < markerData.length; i++) {
        markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
        marker[i] = new google.maps.Marker({ // マーカーの追加
         position: markerLatLng, // マーカーを立てる位置を指定
            map: map // マーカーを立てる地図を指定
       });
 
     infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
         content: '<div class="map">' + markerData[i]['name'] + '</div>' // 吹き出しに表示する内容
       });
 
     markerEvent(i); // マーカーにクリックイベントを追加
 }
 
// }
 
// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener('click', function() { // マーカーをクリックしたとき
      infoWindow[i].open(map, marker[i]); // 吹き出しの表示
  });
}

    </script>
    </small>  
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">導入・お問い合わせはこちら</h2>
        <a href="#" class="btn btn-xl btn-light mr-4">お問い合わせ</a>
    </div>
</section>


<!-- Portfolio -->
<section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">News</h3>
                <h2 class="mb-5">最近の状況</h2>
            </div>
            <div class="row no-gutters">
            <!-- ファイルを直接読み込む -->
             <script src='./PATH/Chart.min.js'></script>
             <!-- CDNとして読み込む -->
             <script src='https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js'></script>

             <!-- グラフ描画の要素とグラフ設定のスクリプト -->
             <canvas id="myChart"></canvas>
             <script>
             var ctx = document.getElementById("myChart").getContext('2d');
             var myBarChart_02 = new Chart(ctx, {
                 type: 'bar',
                 data: {
                    labels: ["内科", "消化器外科", "整形外科", "小児科", "看護部"],
                    datasets: [{
                        data: [2, 6, 5, 3, 4],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                    options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                         beginAtZero:true,
                         fontColor: '#000',
                         fontSize: 12,
                         fontWeight: 'bold',
                         max: 10
                        },
                        gridLines: {
                         color: '#ddd',
                         borderDash: [5,5],
                         lineWidth: 1,
                         zeroLineWidth: 2,
                         zeroLineColor: '#444',
                         drawTicks: false
                        }
                    }],
                    xAxes: [{
                       ticks: {
                       fontColor: '#000',
                       fontSize: 12,
                       fontWeight: 'bold'
                       },
                       gridLines: {
                       display: false
                       }
                    }],
      }
    }
                 }};
            </script>

            </div>
        </div>
    </section>
    


<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="text-muted small mb-0">Copyright &copy; 株式会社メディカルラボパートナーズ</p>
    </div>
</footer>