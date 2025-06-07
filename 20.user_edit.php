<?php

    error_reporting(0); #關閉錯誤訊息顯示，避免將系統錯誤訊息洩露給使用者
    session_start(); #啟動 Session 功能，用來檢查使用者是否登入
    if (!$_SESSION["id"]) { #檢查是否登入，如果 session 中沒有 "id"，表示尚未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ #嘗試執行 SQL 更新語法，把指定 id 的密碼改成使用者輸入的新密碼
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; #一樣 3 秒後回到使用者管理頁面
        }
    }

?>
