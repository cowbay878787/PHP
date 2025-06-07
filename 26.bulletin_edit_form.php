<?php
    error_reporting(0); #關閉錯誤訊息顯示，避免錯誤訊息洩漏給使用者
    session_start();
    if (!$_SESSION["id"]) { #檢查 session 裡是否有登入的 id，沒有的話代表尚未登入
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; 
    }
    else{
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head> #輸出 HTML，表單標題為「新增佈告」，表單送出方式為 POST，目標檔案為 27.bulletin_edit.php
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 #三個單選按鈕，根據資料庫的類型欄位，自動將對應項目預設為選中
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除> #送出按鈕與重設按鈕，整個表單結束，PHP 程式區塊結束
                </form>
            </body>
        </html>
        ";
    }
?>
