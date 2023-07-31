// 1  
// html code

<!DOCTYPE html>
<html>
<head>
  <title>Math Operations in PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Math Operations in PHP</h1>
  <?php
    // Assign values to variables x and y
    $x = 6;
    $y = 4;

    // Perform math operations
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $division = $x / $y;
  ?>

  <p>Sum: <?php echo $sum; ?></p>
  <p>Difference: <?php echo $difference; ?></p>
  <p>Product: <?php echo $product; ?></p>
  <p>Division: <?php echo $division; ?></p>
</body>
</html>




// php code




<!DOCTYPE html>
<html>
<head>
  <title>Math Operations in PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Math Operations in PHP</h1>
  <?php
    // Assign values to variables x and y
    $x = 6;
    $y = 4;

    // Perform math operations
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $division = $x / $y;
  ?>

  <p>Sum: <?php echo $sum; ?></p>
  <p>Difference: <?php echo $difference; ?></p>
  <p>Product: <?php echo $product; ?></p>
  <p>Division: <?php echo $division; ?></p>
</body>
</html>






// 2



<html>
    <body>
    <?php
    for($i=5;$i<=15;$i++){

        echo $i." ";
        
    }
   
    ?>     
    </body>
</html>






// 3



<!DOCTYPE html>
<html>
<head>
  <title>Electricity Bill Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Electricity Bill Calculator</h1>
  <form method="post">
    <label for="units">Enter the number of units consumed:</label>
    <input type="number" id="units" name="units" required>
    <button type="submit" name="calculate">Calculate Bill</button>
  </form>

  <?php
    if (isset($_POST['calculate'])) {
      $units = (int)$_POST['units'];
      $totalBill = 0;

      if ($units <= 50) {
        $totalBill = $units * 3.50;
      } elseif ($units <= 100) {
        $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
      } elseif ($units <= 150) {
        $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
      } else {
        $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
      }
  ?>

  <p>Total Electricity Bill: Rs. <?php echo number_format($totalBill, 2); ?></p>
  <?php } ?>
</body>
</html>







 // 4



<!DOCTYPE html>
<html>
<head>
  <title>Day of the Week</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Day of the Week</h1>
  <form method="post">
    <label for="dayNumber">Enter a number (1 to 7):</label>
    <input type="number" id="dayNumber" name="dayNumber" required min="1" max="7">
    <button type="submit" name="showDay">Show Day</button>
  </form>

  <?php
    if (isset($_POST['showDay'])) {
      $dayNumber = (int)$_POST['dayNumber'];
      $dayOfWeek = '';

      switch ($dayNumber) {
        case 1:
          $dayOfWeek = 'Monday';
          break;
        case 2:
          $dayOfWeek = 'Tuesday';
          break;
        case 3:
          $dayOfWeek = 'Wednesday';
          break;
        case 4:
          $dayOfWeek = 'Thursday';
          break;
        case 5:
          $dayOfWeek = 'Friday';
          break;
        case 6:
          $dayOfWeek = 'Saturday';
          break;
        case 7:
          $dayOfWeek = 'Sunday';
          break;
        default:
          $dayOfWeek = 'Invalid number';
          break;
      }
  ?>

  <p>Day of the Week: <?php echo $dayOfWeek; ?></p>
  <?php } ?>
</body>
</html>





// 5





<!DOCTYPE html>
<html>
<head>
  <title>Fruits Array</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Fruits Array</h1>

  <?php
    // Create an array called 'fruits'
    $fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Grapes');

    // Use foreach loop to print each element of the array
    foreach ($fruits as $fruit) {
      echo "<p>$fruit</p>";
    }
  ?>
</body>
</html>

























