<?php
$Link = mysql_connect('localhost:3306', 'root');
if (!$Link) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
}
echo ' 連線成功 ';
mysql_close($Link);
?>