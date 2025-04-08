<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) { #使用 mysqli_fetch_array從 $result 中一筆一筆地取出資料，並將每一筆資料存儲在 $row 變數中。
     echo $row["id"]." ".$row["pwd"]."<br>"; #使用 echo 輸出每一筆資料中的 id 和 pwd 欄位值，並在每筆資料之後加上一個換行 <br>。
   }  #當所有資料都處理完後，結束 while 迴圈。
?>
整體來說，之前「只印出兩筆資料」，現在可以印出全部資料的版本
