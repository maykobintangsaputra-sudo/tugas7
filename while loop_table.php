<table border="10">
    <thead>
        <th>No</th>
        <th>Nama Siswa</th>
    </thead>
    <tbody>
<?php
  $x = 1;
  while ($x <= 50) {
    echo "<tr>
            <td>" . $x . "</td>
            <td>ROAMING" . $x . "</td>
          </tr>";
    $x++;
  }
?>
    </tbody>
</table>

