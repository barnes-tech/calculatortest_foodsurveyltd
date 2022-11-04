<?php
$first = "";
$second = "";
$operand = "";
$result = "";
if($_POST) {
  $first = (isset($_POST['first']))? $_POST['first'] : '';
  $second = (isset($_POST['second']))? $_POST['second'] : '';
  $operator = (isset($_POST['operation']))? $_POST['operation']: '';

  switch($operator) {
    case 1:
        $operand = "+";
        $result = $first + $second;
        break;
    case 2:
        $operand = "-";
        $result = $first - $second;
        break;
    case 3:
        $operand = "x";
        $result =  $first * $second;
        break;
    case 4:
        $operand = "/";
        $result = $first / $second;
        break;
  }


}
?>

<form method="POST" form="calculator">
  <input type="number" name="first" id="first" min="0" step="1"></input>
  <select name="operation" id="operation">
    <option value="1">Add</option>
    <option value="2">Subtract</option>
    <option value="3">Multiply</option>
    <option value="4">Divide</option>
  </select>
  <input type="number" name="second" id="second" min="0" step="1"></input>
  <label for="cars">Choose an operator:</label>
  <input type="submit" value="calculate">
  <?php if($_POST) {?>
  <h1><?=$first;?> <?=$operand;?> <?=$second;?> = <?=$result;?></h1>
<?php }?>
</form>
