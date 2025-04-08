<?php
    session_start(); #開始一個新的 session 或繼續當前的 session
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++; #檢查 $_SESSION["counter"]是否已經存在。如果不存在，則將其設置為 1。如果已存在，則將 counter 的值加 1。

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; #顯示一個超連結，點擊該連結將導9.reset_counter.php頁面，這個頁面負責重置變數。
?>
整體來說，做了一個「計數器」的功能，並且透過 Session 來記錄每個使用者的計數狀態
