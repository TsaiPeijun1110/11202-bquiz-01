<?php include "marquee.php"; ?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body {
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  /* .card {
    flex: 0 0 auto;
    width: 100%;
    
    box-sizing: border-box;
    
  }

  .card-img-top {
    max-width: 100%;
    
    height: auto;
    
  }

  .card-container {
    display: flex;
    justify-content: space-between;
  } */

  .card-container {
    display: flex;
  }

  /* .myCarousel-name {
    display: flex;
    justify-content: space-between;
    height: 400px;
  } */

  /* .carousel-inner img {
    margin-top: 10px;
    width: 100%;
    height: 300%;
    object-fit: cover;
    border-radius: 20px;
  }

  .carousel-control-prev {
    margin-top: 10px;
    height: 600px;
  }

  .carousel-control-next {
    margin-top: 10px;
    height: 600px;
  }

  .carousel-inner {
    width: 100%;
    height: 900px;
  } */

  /* .login-main {
    margin-right: 200px;
    margin-top: 405px;
    width: 1000px;
    height: 300px;
  } */

  .box {
    margin-top: 200px;

  }

  .image {
    width: 400px;
    display: flex;
    justify-content: space-between;
    margin-right: 10px;
  }

  .login-main {
    width: 400px;
  }

  .card-name {
    margin-top: 218px;
  }
</style>

<div style="height:32px; display:block;"></div>
<!--正中央-->

<div style=" height:400px;">
  <div id="mwww" loop="true" style="width:100%; height:155%; padding:4px "></div>
  <!-- <div style="width:100%; height:150%; position:relative; " class="cent">沒有資料</div> -->
</div>


<div class="card-name" style="display: flex; justify-content:center;margin-left: auto; margin-right:auto;">
  <div class="card-container">
  
    <div class="card" style="width:400px;">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013505/34055811.jpg&w=880&h=540" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">無界之涯——從海出發探索十六世紀東西文化交流</h5>
        <p class="card-text">
        十六世紀葡萄牙人卡蒙斯(Luís Vaz de Camões,-1580)筆下的兩句話，訴說著陸地的盡頭，卻正是大海的起點。
        話中語境見證當時歐洲人嚮往海外探險的風氣，更為世界不同端點人們的相遇，立下一個絕佳的註腳......
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          更多內容...
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel1">無界之涯</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                十六世紀葡萄牙人卡蒙斯(Luís Vaz de Camões,-1580)筆下的兩句話，訴說著陸地的盡頭，卻正是大海的起點。
                話中語境見證當時歐洲人嚮往海外探險的風氣，更為世界不同端點人們的相遇，立下一個絕佳的註腳
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="card" style="width:400px;">
    <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04012959/34054431.jpg&w=880&h=530" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">風格故事—琺瑯彩瓷特展</h5>
      <p class="card-text">
      當我們看文物時，首先映入眼簾的是它的造型和裝飾紋樣；再進一步思考時，就又想要瞭解相關的時代背景和製作技術。那麼，綜整這些因素所形塑出來的整體特色就是風格......
      </p>
      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel2">琺瑯彩瓷特展</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             從這個角度看清朝康熙、雍正和乾隆三個時期(1662-1795)的琺瑯彩瓷，除了推薦這是十八世紀最具代表性的瓷器之外，也想透過展覽說明因應彩料的研發與使用，以及主政者三位皇帝對官窯的不同訴求，而形成的三個階段的風格樣式。
             依照時間序列，展覽分成三個敘事脈絡。第一單元「皇帝實驗室的新創品」，藉由試作和成品的對比，展示康熙皇帝(1662-1722)邀集西洋傳教士和民間高手，共同推動畫琺瑯工藝及至燒出本土樣式的經過。第二單元「皇家專屬式樣」
            ，呈現雍正皇帝(1723-1735)以皇家專屬式樣為前提，將琺瑯彩瓷包裝成一種宮廷限量版的瓷器。
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="card" style="width:400px;">
    <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04012832/34054063.jpg&w=880&h=550" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel3">...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <div class="card" style="width: 400px;">
    <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013504/34055809.jpg&w=880&h=550" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>



<div class="card-name2" style="display: flex; justify-content:center;">
  <div class="card-container">
    <div class="card" style="width:400px;">
      <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013392/34055516.jpg&w=880&h=550" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>

    <div class="card" style="width:400px;">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013438/34055622.jpg&w=880&h=550" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="card" style="width:400px;">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013558/34056002.jpg&w=720&h=500" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
              <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       
      </div>
    </div>

    <div class="card" style="width: 400px;">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013529/34055852.jpg&w=720&h=500" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
              <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ....
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="myCarousel-name">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel-fade">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="		https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000684.jpg" class="d-block w-100" alt="..."> <!--700寬/410高 -->
      </div>

      <div class="carousel-item">
        <img src="		https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000683.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000674.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000677.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000672.jpg" class="d-block w-100" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<div>
  <div class="image margin-top:405px;">
    <div class="login-main" style="height: 0px;">
      <?php
      if (isset($_SESSION['login'])) {
        to("back.php");
      }


      if (isset($_GET['error'])) {
        echo "<script>alert('{$_GET['error']}')</script>";
      }

      ?>
      <div>
        <div class="di" style="height:488px; border:#999 1px solid; width:200%;  float:left; position:relative; left:20px; margin-left: 383px; ">
          <div style="height:32px; display:block;"></div>
          <!--正中央-->
          <form method="post" action="./api/check.php">
            <p class="t botli text-center">登入</p>
            <p class="cent">帳號 : <input name="acc" autofocus="" type="text"></p>
            <p class="cent">密碼 : <input name="pw" type="password"></p>
            <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<div>
  <div style="width:400px; height:487px; margin:0px;border: #EE7728 double 3px;" class="dbor">
    <span class="t ">校園映象區</span>
    <div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
    <?php
    $imgs = $Image->all(['sh' => 1]);

    foreach ($imgs as $idx => $img) {
    ?>
      <div id="ssaa<?= $idx; ?>" class='im cent'>
        <img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
      </div>
    <?php
    }
    ?>
    <div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
    <script>
      var nowpage = 1,
        num = <?= $Image->count(['sh' => 1]); ?>;

      function pp(x) {
        var s, t;
        if (x == 1 && nowpage - 1 >= 0) {
          nowpage--;
        }
        if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
          nowpage++;
        }

        $(".im").hide()
        for (s = 0; s <= 2; s++) {
          t = s * 1 + nowpage * 1;
          $("#ssaa" + t).show()

        }
      }


      pp(2)
    </script>
  </div>
</div>


<div>
  <div style="width: 400px;
              padding: 2px;
              height: 486px;
              margin-top: 10px;
              padding: 5px 10px 5px 10px;
              border: #0C3 dashed 3px;
              position: relative;
              margin-left: 1211px;
              margin-top: -486px; ">

    <span class="t botli">最新消息區
      <?php
      if ($News->count(['sh' => 1]) > 5) {
        echo "<a href='?do=news' style='float:right'>More...</a>";
      }
      ?>
    </span>
    <ul class="ssaa" style="list-style-type:decimal;">
      <?php
      $news = $News->all(['sh' => 1], ' limit 5');
      foreach ($news as $n) {
        echo "<li>";
        echo mb_substr($n['text'], 0, 20);
        echo "<div class='all' style='display:none'>";
        echo $n['text'];
        echo "</div>";
        echo "...</li>";
      }
      ?>
    </ul>
    <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: 
        rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; 
        border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
    </div>
    <script>
      $(".ssaa li").hover(
        function() {

          $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
          $("#altt").show()
        }
      )
      $(".ssaa li").mouseout(
        function() {
          $("#altt").hide()
        }
      )
    </script>
  </div>
</div>



<footer class="container-fluid flex-shrink-0 py-4 bg-dark text-white-50">
  <div class="container text-center">
    <small><?= $Bottom->find(1)['bottom']; ?></small>
    <span class="t">進站總人數:<?= $Total->find(1)['total']; ?></span>
  </div>
</footer>







<script>
  var lin = new Array();
  <?php
  $lins = $Mvim->all(['sh' => 1]);
  foreach ($lins as $lin) {
    echo "lin.push('{$lin['img']}');";
  }
  ?>

  var now = 0;
  ww();
  if (lin.length > 1) {
    setInterval("ww()", 3000);
    now = 1;
  }

  function ww() {
    $("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
    //$("#mwww").attr("src",lin[now])
    now++;
    if (now >= lin.length)
      now = 0;
  }
</script>