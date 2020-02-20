
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dice</title>
  <style>
    .cont{
      display: flex;
      flex-wrap: wrap;
    }

    .dice{
      margin: 2px;
      width: 20px;
      height: 20px;
      border: 1px solid grey;
      text-align: center;
    }  
  </style>
</head>
<body>
  <form action="" method="get"> <!-- empty action sends to the same url-->
    <input type="text" value="" name="nr_of_dice" id="">
    <select name="sides" id="">
      <option value="6">6</option>
      <option value="8">8</option>
      <option value="10">10</option>
      <option value="12">12</option>
    </select>
    <br>
    <input type="submit" value="Roll the dice"> 
  </form>
  <div class='cont'>
  <?php
    require_once 'Dice.php';
    if(isset($_GET['nr_of_dice'])){
      for($i = 1; $i <= $_GET['nr_of_dice']; $i++){
        $dice = new Dice($_GET['sides']);
        echo  "<div class='dice'>".$dice->roll()."</div>";
      }
    }
  ?>
  </div>

</body>
</html>
