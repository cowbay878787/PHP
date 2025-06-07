<?php

error_reporting(0); #關閉所有錯誤訊息的顯示
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號"; #提示使用者需要先登入
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  3 秒後自動跳轉到登入頁面 2.login.html
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; #建立一個 SQL 指令，用來將使用者輸入的帳號和密碼新增到 user 資料表中
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤"; #如果執行 SQL 指令失敗（回傳 false）
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; #3 秒後跳轉到使用者管理頁面 18.user.php
   }
}
?>
