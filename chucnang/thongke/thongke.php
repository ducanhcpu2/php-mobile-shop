<?php
$fp='chucnang/thongke/dem.txt';

$fo= fopen($fp, 'r');
$count= fread($fo, filesize($fp));
$count++;
$fc= fclose($fo);
$fo= fopen($fp, 'w');
$fw= fwrite($fo, $count);
$fc= fclose($fo);
?>

<div id="counter">
    <h2 class="h2-bar">thống kê truy cập</h2>
    <p>Hiện có <span><?php echo $count; ?></span> người đang xem</p>
</div>