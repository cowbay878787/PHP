<?php
    error_reporting(0); 錯誤報告設為 0，表示不顯示任何錯誤訊息
    session_start(); 啟動 PHP 的 Session，這樣才能讀取和儲存登入後的使用者資訊。
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";}
檢查 是否有 id 這個變數。如果沒有，表示使用者尚未登入。
顯示「請先登入」的訊息，並在 3 秒後跳轉回登入頁面。
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin"); #使用 mysqli_connect() 連接到資料庫（db4free.net），並使用 mysqli_query() 查詢 bulletin 資料表中的所有公告資料。
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; #顯示一個 HTML 表格，並設置表格的欄位標題
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
#while迴圈遍歷從資料庫查詢來的每一筆公告資料。顯示在表格中，並且在每筆公告旁邊提供修改和刪除的連結
        echo "</table>";
    
    }

?>
整體是用來處理一個公告管理頁面的功能，並加入了登入檢查、資料庫查詢、顯示公告列表，以及一些管理功能（修改、刪除）。
