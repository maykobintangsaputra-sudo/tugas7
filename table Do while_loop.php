<table border="5">
    <th>No</th>
    <th>Nama Siswa</th>
<?php
  $x = 1;
  do {
      echo "<tr>
            <td>".$x."</td>
            <td>ROAMING ".$x."</td>
          </tr>";
      $x++;
  } while ($x <= 10);
?>
</table>