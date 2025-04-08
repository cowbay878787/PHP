<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
這段 PHP 程式是在從 MySQL 資料庫中讀取帳號與密碼資料
