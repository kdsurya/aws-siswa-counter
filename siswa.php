<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM siswa");

echo "<h2>Data Siswa</h2>";
echo "<table border='1'>
<tr><th>NIS</th><th>Nama</th><th>Kelas</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['nis']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['kelas']}</td>
          </tr>";
}
echo "</table>";
?>
