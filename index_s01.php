<!-- 這是將資料庫，連線程式載入-->
<?php require_once('connections/conn_db.php'); ?>
<!-- 如果SESSION沒有啟動，則啟動SESSION功能，這是跨網頁變數存取-->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>

<!doctype html>
<html lang="zh-TW">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>宮廟文創</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
  <link rel="stylesheet" href="website_s01.css">

</head>

<body>
  <section id="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/temple.jpg" class="navbar-temple " alt="宮廟文創"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">會員登入</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">購物車</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">查訂單</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                產品資訊
              </a>
              <ul class="dropdown-menu">
                  <li class="nav-item dropend">
                       <a class="dropdown-item dropdown-toggle" href="#">線上捐獻</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">香油錢</a></li>
                            <li><a class="dropdown-item" href="#">慈善會</a></li>
                        </ul>
                  </li>
                  <li class="nav-item dropend">
                       <a class="dropdown-item dropdown-toggle" href="#">點燈專區</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">光明燈</a></li>
                            <li><a class="dropdown-item" href="#">太歲燈</a></li>
                            <li><a class="dropdown-item" href="#">財利燈</a></li>
                        </ul>
                  </li>
                  <li class="nav-item dropend">
                       <a class="dropdown-item dropdown-toggle" href="#">文創專區</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">平安香火袋</a></li>
                            <li><a class="dropdown-item" href="#">祈福五色線手環</a></li>
                            <li><a class="dropdown-item" href="#">念珠</a></li>
                            <li><a class="dropdown-item" href="#">馬克杯</a></li>
                            <li><a class="dropdown-item" href="#">T-shit</a></li>
                        </ul>
                  </li>
                  <li class="nav-item dropend">
                       <a class="dropdown-item dropdown-toggle" href="#">分靈專區</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">金身迎請</a></li>
                        </ul>
                  </li>
              </ul>
            </li>
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <section id="content">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/pulun-01.jpg" class="d-block w-100" alt="大村普崙寺">
                <div class="carousel-caption d-none d-md-block">
                  <h5>大村普崙寺</h5>
                  <p>寺廟整體外觀全貌，環境清幽，歡迎各界人士蒞臨參香指導</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/pulun-08.jpg" class="d-block w-100" alt="晨鐘暮鼓">
                <div class="carousel-caption d-none d-md-block">
                  <h5>晨鐘暮鼓</h5>
                  <p>姑蘇城外普崙寺，夜半鐘聲到客船。</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/pulun-09.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>傳統大燈籠</h5>
                  <p>來自鹿港師傅傳統技藝，典雅大燈籠</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="mar">
      <marquee>2024甲辰年 龍年行大運 普崙寺管理委員會關心您!</marquee>
    </div>
  </section>
  <section id="scontent">
    <div class="container text-center">
      <div class="row">
        <div class="col-xl-12">
          <h2>最新消息</h2>
        </div>
      </div>
      <div class="row">
        <div class="card col-md-4"><img src="./images/pulun-13.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">觀音慈善會</h5>
            <p class="card-text">關懷弱勢，獨居老人、低收入戶、身心障礙，服務範圍：本村為主，周圍鄰村為輔；例如:加錫村和新興村...等。</p>
            <p class="card-text">NT200</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
            <a href="#" class="btn btn-success">放購物車</a>
          </div>
        </div>
        <div class="card col-md-4"><img src="./images/pulun-14.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">龍年安太歲、點光明燈</h5>
            <p class="card-text">專業法師祈福科儀，每月初一、十五誦經，消災解厄，已開放登記，意者請洽本寺。</p>
            <p class="card-text">NT500</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
            <a href="#" class="btn btn-success">放購物車</a>
          </div>
        </div>
        <div class="card col-md-4"><img src="images/pulun-15.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">元宵乞龜</h5>
            <p class="card-text">流傳百年傳統活動，歡迎各界善男、信女，於正月十五日，到本寺參與筊杯贈麵龜，呷平安，猜燈謎、吃湯圓、慶元宵</p>
            <p class="card-text">免費</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container text-center">
      <div class="row">
        <div class="col-xl-12">
          <h2>服務介紹</h2>
        </div>
      </div>
      <div class="row">
        <div class="card col-md-4"><img src="./images/temple-05.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">琉璃平安符</h5>
            <p class="card-text">Loop Racer 全黑 復古 運動鞋 男鞋 女鞋 B42446，愛迪達 Originals 三葉草 輕量透氣舒適運動球鞋穿搭推薦,男女款情侶鞋</p>
            <p class="card-text">NT100</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
            <a href="#" class="btn btn-success">放購物車</a>
          </div>
        </div>
        <div class="card col-md-4"><img src="images/temple-06.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">念珠</h5>
            <p class="card-text">Loop Racer 全黑 復古 運動鞋 男鞋 女鞋 B42446，愛迪達 Originals 三葉草 輕量透氣舒適運動球鞋穿搭推薦,男女款情侶鞋</p>
            <p class="card-text">NT250</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
            <a href="#" class="btn btn-success">放購物車</a>
          </div>
        </div>
        <div class="card col-md-4"><img src="images/temple-07.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">文創馬克杯</h5>
            <p class="card-text">Loop Racer 全黑 復古 運動鞋 男鞋 女鞋 B42446，愛迪達 Originals 三葉草 輕量透氣舒適運動球鞋穿搭推薦,男女款情侶鞋</p>
            <p class="card-text">NT150</p>
            <a href="#" class="btn btn-primary">更多資訊</a>
            <a href="#" class="btn btn-success">放購物車</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

  </section>
  <section id="scontent1">
    <div class="container-fluid">
      <div id="aboutme" class="row text-center">
        <div class="col-md-3"><i class="fas fa-thumbs-up fa-5x"></i>
          <h3>關於我們</h3>
          關於我們<br>
          寺廟沿革<br>
          最新消息<br>
          交通資訊<br>
        </div>
        <div class="col-md-3"><i class="fas fa-truck fa-5x "></i>
          <h3>特色服務</h3>
          特色服務<br>
          場地租借<br>
          文創商品<br>
        </div>
        <div class="col-md-3"><i class="fas fa-users fa-5x"></i>
          <h3>香客服務</h3>
          香客服務<br>
          訂單/配送進度查詢<br>
          取消訂單/退貨<br>
          更改配送地址<br>
          追蹤清單<br>
          12H速達服務<br>
        </div>
        <div class="col-md-3"><i class="fas fa-question fa-5x"></i>
          <h3>FAQ 常見問題</h3>
          FAQ 常見問題<br>
          系統使用問題<br>
          產品問題資詢<br>
          購物問題<br>
          聯絡我們<br>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
  <div class="container-fluid">
      <div id="last-data" class="row text-center">
        <div class="col-md-12">
          <h6>大崙普崙寺 515彰化縣大村鄉大崙村大崙路12之16號 電話：04-8522307 </h6>
          <h6>版權所有 copyright © 2024 大崙普崙寺 All Rights Reserved.善信大德 | 游智富</h6>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>