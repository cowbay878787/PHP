<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #使用 mysqli_connect函數來建立與資料庫 db4free.net 的連接。資料庫帳號為 immust，密碼為 immustimmust，資料庫名稱為 immust。
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; #比對表單提交的帳號（$_POST["id"]）和密碼（$_POST["pwd"]）是否與資料庫中的 id 和 pwd 欄位匹配。如果匹配，將 $login 設置為 TRUE，表示登入成功。
     }
   } 
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
整體來說，完整的登入驗證系統，而且是用資料庫來比對帳密，這段 PHP 程式會從 user 資料表抓出所有帳號密碼，然後比對使用者輸入的帳密，看看有沒有符合的一筆。

