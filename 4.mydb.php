<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #用mysqli_connect函數連接到遠端資料庫db4free.net。連接的帳號是 immust，密碼是 immustimmust，資料庫名稱是 immust。
    #mysqli_query() 從資料庫查詢資料 #查詢 user 表中的所有資料。結果會儲存在 $result 變數中。
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>";  #使用 echo 輸出 $row 中的 id 和 pwd 欄位資料，並加上換行 <br>。
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]; #使用 echo 輸出第二筆資料的 id 和 pwd 欄位資料。
?>
整體來說，這段 PHP 程式是在從 MySQL 資料庫中讀取帳號與密碼資料
