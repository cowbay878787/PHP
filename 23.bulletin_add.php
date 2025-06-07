<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) { #檢查 session 是否有登入的 id，若無表示使用者尚未登入
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; #3 秒後自動導向登入頁面（2.login.html）
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立與遠端資料庫的連線
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; #組合 SQL 新增語句，將從表單取得的標題、內容、類型及時間插入資料表 bulletin
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤"; #顯示新增失敗的錯誤訊息
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁"; #顯示成功訊息，提示使用者新增完成
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; #3 秒後自動跳轉回佈告列表頁面（11.bulletin.php）
        }
    }
?>
