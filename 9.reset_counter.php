<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
 session 裡的 counter 變數清掉，然後自動在 2 秒後導回 8.counter.php
