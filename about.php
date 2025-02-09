<?php
 include "db_connect.php";
 include "database-functions/ads.php";
?>

<!DOCTYPE html>
<html lang="ka">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8">
    <title>ჩვენ შესახებ &raquo; სანდო, ობიექტური და დროული ინფორმაცია</title>
    <link href="engine/classes/min/index6d03.css?f=engine/editor/css/default.css&amp;v=8e9df" rel="stylesheet" type="text/css">
    <script src="engine/classes/min/indexda98.js?g=general&amp;v=8e9df"></script>
    <script src="engine/classes/min/index797f.js?f=engine/classes/js/jqueryui.js,engine/classes/js/dle_js.js,engine/classes/masha/masha.js&amp;v=8e9df" defer></script>
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="templates/dailyinfo-1/images/favicon.ico">
    <link href="templates/dailyinfo-1/css/engine-1.css" type="text/css" rel="stylesheet">
    <link href="templates/dailyinfo-1/css/style-8.css" type="text/css" rel="stylesheet">
    <link href="pro/css/all.css" type="text/css" rel="stylesheet">
    <script src="../jsc.adskeeper.co.uk/site/973502.js" async></script>
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#970014" />
  </head>
  <body id="virtuss-1" class="no-sidebar-1">
    <script type="text/javascript" src="templates/dailyinfo-1/js/fav.js"></script>
    <?php require("./blocks/header.php")?>
    <script type="text/javascript" src="templates/dailyinfo-1/js/sls-1.js"></script>
    <div class="full-code-0 code-2 center-1">
      <!-- center -->
      <div class="h-baneri-1">
        <div class="h-baneri-2">
        </div>
      </div>
      <div class="di-full-0-s-0">
        <!-- title -->
        <div class=" id-div-spid id-div-2">
          <div class="id-div-3">
            <div class="id-div-4">
              <div class="id-div-5"></div>
              <div class="id-div-6">
                <span itemscope itemtype="https://schema.org/BreadcrumbList">
                  <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    <a href="index.html" itemprop="item">
                      <span itemprop="name"></span>
                    </a>
                  </span> ჩვენ შესახებ </span>
              </div>
            </div>
          </div>
        </div>
        <!-- title -->
        <div class="di-full-0-s-1">
          <div class=" code-3">
            <div id='dle-content'>
              <div class="zoma-1">
                <div class="zoma-2 zoma-3">
                  <article class="box story">
                    <div class="box_in">
                      <h1 class="title">ჩვენ შესახებ</h1>
                      <div class="text"><?php
                      include "db_connect.php";
                      include "database-functions/description.php";
                      ?></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--SIDEBAR-->
        <div class="tu-right-news-1">
          <div class="tu-right-news-2">
            <div class="baneris-5">
              <div class="baneris-6">
                <div data-type="_mgwidget" data-widget-id="1714947"></div>
                <script>
                  (function(w, q) {
                    w[q] = w[q] || [];
                    w[q].push(["_mgc.load"])
                  })(window, "_mgq");
                </script>
              </div>
            </div>
            <!-- 2 -->
            <div class="id-div-2">
              <div class="id-div-3">
                <div class="id-div-4">
                  <div class="id-div-5"></div>
                  <div class="id-div-6">პოპულარული</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /SIDEBAR-->
      </div>
      <div class="h-baneri-03 h-baneri-3">
      <?php 
          get_R5_ad($conn, true);
        ?>
      </div>
    </div>
    <!--/ center -->
    <?php require_once('./blocks/footer.php')?>
    <script type="text/javascript" src="templates/dailyinfo-1/js/slick.js"></script>
  </body>
</html>