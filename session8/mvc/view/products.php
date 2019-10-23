<h2>Products page</h2>

<?php
  while ($row = mysqli_fetch_array($productList)) {
  	echo $row['title'].'---'.$row['price'].'<br>';
  }
?>