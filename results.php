<html>
<body>
<h1>Iteration Results</h1>
<b>Here are 10 iterations of the formula:<br/>
y = x <sup>2</sup>
</b>
<p/>
<!-- PHP Calculations start here!  -->
<?php
  $num = $_POST['data'];
  // Write your code here! 
  
  echo "Initial value of x: $num";
  echo "<br><br>";
  
  for($count = 1; $count <= 10; $count++){
      $num = pow($num, 2); 
      echo "$count. $num <br>";
  }

?>
</body>
</html>
