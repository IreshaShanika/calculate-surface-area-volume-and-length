<!DOCTYPE html>
<html>
  <head>
    <title>
      Assignment
    </title>
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #000ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #191970;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: medal center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: lightblue;
  padding: 2px;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  color: blue;
  font-family: Arial;
  font-weight: bold;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
  </head>
  <body>

    <?php

echo "<h2>1. A web interface of a program which is to calculate surface area, volume and length of edges
of a cuboid is shown below</h2>";
  
  if(isset($_GET['operation'])){
    $l = $_GET['num1'];
    $w = $_GET['num2'];
    $h = $_GET['num3'];

    


    $op = $_GET['operation'];

      switch ($op) {
        case 'Surface Area': $result = 2*(($l*$w) + ($l*$h) + ($w*$h));
          # code...
          break;

            case 'Volume': $result = $h * $w * $l;
          # code...
          break;

          case 'Length Of Edges': $result = sqrt((2*(($l*$w) + ($l*$h) + ($w*$h)))/6);
          # code...
          break;
        
      }
  }



  ?>


    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
     <div> <div class="row">
      <div class="col-25">
        <label form="num1">Length Of Cuboid</label>
 </div>
        <div class="col-75">
        <input type="Number" name="num1" id="num1"value="<?= $l ?>">
      </div>
       </div>

      <div class="row">
      <div class="col-25">
        <label form="num2">Width</label>
</div>
          <div class="col-75">
        <input type="Number" name="num2" id="num2" value="<?= $w ?>">
      </div>
       </div>

      <div  class="row">
      <div class="col-25">
        <label form="num3">Height</label>
        </div>
          <div class="col-75">
        <input type="Number" name="num3" id="num3" value="<?= $h ?>">
      </div></div>

      <div  class="row">
      <div class="col-25">
        <label form="result">Result</label>
        </div>
          <div class="col-75">
        <input type="Number" name="result" id="result" value="<?=$result ?>" disabled>
      </div></div>
      <div>
        
        <input type="submit" value="Surface Area"  name="operation">
        <input type="submit" value="Volume"  name="operation">
        <input type="submit" value="Length Of Edges"  name="operation">
      </div></div>
<br><br>

     

        
  </body>
</html>