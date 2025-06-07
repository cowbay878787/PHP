<html>
    <head><title>修改使用者</title></head> # 建立 HTML 頁面框架，設定網頁標題為修改使用者。
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) { #如果沒有登入（session 裡沒有 id）
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form> 
        # 顯示一個表單，讓使用者可以修改該帳號的密碼帳號用隱藏欄位傳回，密碼欄位可編輯，預設值為目前密碼，提交後資料會送到 20.user_edit.php 做更新
        
    }
    ?>
    </body>
</html>
