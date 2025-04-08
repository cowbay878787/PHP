<?php
    session_start(); #使用 session_start開始一個新的 session 或繼續當前的 session。操作 session 中儲存的資料。
    unset($_SESSION["counter"]); #重置計數器
    echo "counter重置成功...."; #在頁面上顯示counter重置成功，告訴用戶計數器已被重置。
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; #這裡設置了 2 秒後跳轉到8.counter.php頁面。content='2; 表示 2 秒後會自動導向指定的 URL。

?>
 session 裡的 counter 變數清掉，然後自動在 2 秒後導回 8.counter.php
