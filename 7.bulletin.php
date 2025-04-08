<?php
    error_reporting(0); #這行程式碼會關閉錯誤訊息的顯示
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin"); #查詢 bulletin 表的所有資料，並將結果儲存到 $result
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; #輸出HTML 表格標籤，並設置表格邊框為 2。接著在標籤內設置了表格的列標題
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>"; #使用 HTML <tr> 標籤開始一行，並在每列資料中使用 <td> 標籤來顯示相應的資料。每一筆資料會顯示在表格的每一行中。


    }
    echo "</table>"
?>
整體而言，這是用 PHP 從資料庫讀出「佈告欄」的資料，然後用 HTML 表格 的方式呈現出來，它從bulletin這張資料表抓資料，然後用table標籤把每筆資料顯示成一張清楚的表格。
