x<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>number game</title>
  </head>
  <style media="screen">
  body{
    flex: auto;
    background-repeat: none;
    background-color: pink;
  }
  input{
    border-style:thin ;
    border-radius: 10px;
    font-size: 40px;
    font-color:orange;
    text-align: center;
    width: 60px;
    height: 30px;
    boZ
    text-decoration-color: orange;
  }
    div{
      backdrop-filter: blur(15px);
      margin-top: 10%;
      background: green;
      border-style: hidden;
      width: 400px;
      height: 300px;
      border-radius: 20px;
    }
    h2{
      color:orange;
    }
    button:hover{
      background-color: orange;
      transition: 0s;

    }
    p{
      color: red;
    }
    button{
      font-size: 20px;
      border-radius: 15px;
      border-color:none;
      border-style: solid;
      width: 330px;
      height:60px;
      background-color: green;
    }
  </style>
  <body>
    <center>
      <form action="" method="post">
    <div>
      <h2 style="text-color:orange;">play random number game</h2>
    <input type="number" name="num" value="num"><br><br>
    <button type="submit" name="submit">submit you guesse number</button>
    <br><br>
    computer number is:<span id="span"name="span" ></span><br>
     result: <br>
    <p id="demo"></p>
  </div>
  </form>
</center>
<?php
if (isset($_POST['submit'])) {
    $guessed = rand(0, 5);
    $number = $_POST['num'];
    if ($guessed == $number) {
        echo "<script>document.getElementById('demo').innerHTML = 'YOU WON';</script>";
    } else {
        echo "<script>document.getElementById('demo').innerHTML = 'YOU LOSE'</script>";
    }
    echo "<script>document.getElementById('span').innerHTML = $guessed</script>";
}
?>
  </body>
</html>
