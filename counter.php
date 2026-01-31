<?php
$redis = new Redis();
$redis->connect('ENDPOINT-REDIS', 6379);

$count = $redis->incr("visitor_count");

echo "<h2>Jumlah Pengunjung</h2>";
echo "<p>Total pengunjung: <strong>$count</strong></p>";
?>
