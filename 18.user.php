<html>
    <head><title>使用者管理</title></head> # 建立基本 HTML 結構，設定頁面標題為使用者管理。


    <body>
    <?php
        error_reporting(0); #關閉 PHP 錯誤訊息顯示
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
#顯示標題「使用者管理」
提供兩個超連結：

回到佈告欄列表（連到 11.bulletin.php）
👉 建立一個 HTML 表格，標題列顯示：「操作」「帳號」「密碼」


            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            } #每筆資料顯示一列，包含修改與刪除連結、帳號、密碼
            echo "</table>";
        }
    ?> 
    </body>
</html>
