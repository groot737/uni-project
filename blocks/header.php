<?php
echo('<div class="header-1">
<div class="center-1">
    <div class="header-2">

        <div class="div-men-1">
            <div class="div-men-2">
                <ul>
                    <li>
                    <li><a href="http://localhost:8888/dailyinfo.ge/contact.php">კონტაქტი</a>
                    <li>
                    <li><a href="http://localhost:8888/dailyinfo.ge/about.php">ჩვენ შესახებ</a>
                    <li>
                </ul>
            </div>
        </div>

    </div>
</div>
</div>
<div class="header-3">
<div class="top-bar"></div>
<div class="scroll"></div>
<div class="center-1">
    <div class="header-13">
        <a href="index.php" title="">
            <div class="logo-1">
                <div class="logo-2">
                    <img src="templates/dailyinfo-1/images/logo.svg" alt="სანდო, ობიექტური და დროული ინფორმაცია"
                        title="სანდო, ობიექტური და დროული ინფორმაცია">
                </div>
            </div>
        </a>
        <div id="cssmenu">
            <ul>
                <li class="menu-li-n-a menu-li-n-0"><a href="index.php"><i class="fas fa-home-lg-alt"></i></a>
                </li>

                <li><a href="category/news/index.php">ახალი ამბები</a></li>
                <li><a href="category.html">სხვა <i class="far fa-angle-down"></i></a>
                    <ul>
                        <li><a href="category/konphliqtebi/index.html">კონფლიქტები</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <script src="templates/dailyinfo-1/js/jquery-1.8.3.min.js"></script>
        <script src="templates/dailyinfo-1/js/menumaker.js"></script>
        <script type="text/javascript">
            $("#cssmenu").menumaker({
                title: "",
                format: "multitoggle"
            });
        </script>
        <div class="search-1">
            <form id="q_search" class="rightside" method="post">
                <div class="q_search">
                    <input id="story" name="story" placeholder="საძიებო სიტყვა..." onkeypress="changeVal0(this)"
                        autocomplete="off" />
                    <button class="btn-1 q_search_btn" type="submit" title="ძიების დაწყება"><i
                            class="far fa-search"></i></button>
                </div>
                <input type="hidden" name="do" value="search" />
                <input type="hidden" name="subaction" value="search" />
            </form>
        </div>
    </div>
</div>
</div>');
?>
