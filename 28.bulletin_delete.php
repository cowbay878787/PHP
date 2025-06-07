<?php
    error_reporting(0); #關閉錯誤訊息顯示，避免錯誤訊息洩漏給使用者
    session_start(); #啟動 session 功能，用來判斷使用者是否登入
    if (!$_SESSION["id"]) { #檢查 session 是否有登入的 id，若無代表尚未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立與遠端資料庫的連線
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; #不論成功或失敗，3 秒後導向佈告欄列表頁面 (11.bulletin.php)
    }
?>
