<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRAAN DARAB</title>
</head>
<body>
    <h2>KIRAAN DARAB</h2>
    <form method="POST">
        <label for="num">Nombor sifir:</label>
        <input type="number" name="num">
        <button type="submit" name="kiraan">Kira</button>
        <p></p>
    </form>

    <?php
    if (isset($_POST['kiraan'])) {
        $num = intval($_POST['num']);
        if ($num >= 1 && $num <= 15) {
          echo "<table>";
          for ($i = 1; $i <=15 ; $i++) {
            $result = $i * $num;
            echo "<tr><td>{$i} x {$num}</td><td> = {$result}</td></tr>";
          }
          echo "</table>";
        } 
      }
    ?>
</body>
</html>
