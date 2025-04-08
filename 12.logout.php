<?php
    session_start(); 啟動了 PHP 的 Session 功能
    unset($_SESSION["id"]);這行代碼會從 $_SESSION 陣列中移除 id 這個變數
    echo "登出成功....";顯示一個訊息「登出成功....」，讓使用者知道已經成功登出
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";延遲 3 秒後，將使用者導向 2.login.html。

?>
它會清除使用者的登入資料（即 Session），並提示使用者登出成功，然後將頁面自動導回登入頁面。
