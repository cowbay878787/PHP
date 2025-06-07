<?php
    error_reporting(0);
    session_start(); #啟用 session 功能，用於檢查使用者是否登入
    if (!$_SESSION["id"]) { # 檢查 session 是否有登入 ID，如果沒有，表示使用者未登入
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body> #顯示一個 HTML 網頁，標題是「新增佈告」。
                <form method=post action=23.bulletin_add.php> #建立一個表單，使用 POST 方法，送出到23.bulletin_add.php。
                    標    題：<input type=text name=title><br> #標題欄位（單行文字輸入），使用者輸入佈告標題。
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br> #類型選項：使用者用單選框選擇佈告類型：1：系上公告 2：獲獎資訊 3：徵才資訊
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除> #結束 HTML 表單與程式碼區塊。整體在登入狀態下顯示新增佈告的表單。
                </form>
            </body>
        </html>
        ";
    }
?>
