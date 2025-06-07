<?php
    error_reporting(0); #關閉錯誤訊息顯示，避免程式錯誤資訊曝光給使用者看
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; #顯示提示訊息：請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'"; #建立 SQL 指令，從 user 資料表中刪除符合指定 id 的使用者（透過 GET 傳入）
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        } 
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; #不管成功或失敗，都在 3 秒後跳轉回使用者管理頁面 (18.user.php)
    }
?>
