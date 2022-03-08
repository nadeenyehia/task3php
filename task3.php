<?php

// $students = array(
          
//     ["id" => 2013,"name" => "Root Account","email" => "root@root.com"],
//     ["id" => 2014,"name" => "x Account","email" => "x@root.com"],
//     ["id" => 2015,"name" => "Y Account","email" => "nnn@mail.com"]
// );
// foreach($students as $key => $one){
//  foreach($one as $key => $value){

//     echo $key.':'.$value.'<br>';
//  }

// }


// $students=['a','nadeen','yassin','reem'];
// print_r($students);
// sort($students);
// print_r($students);
// rsort($students);
// print_r($students);

// $ages =['a'=>20,'b'=>30,'c'=>40];
// asort($ages);

// print_r($ages);
// ksort($ages);
// print_r($ages)

// $age=20;
// $name='nadeen';
// function info(){
//     echo $GLOBALS['age'];
// };
// info();
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['SERVER_SOFTWARE'];
// echo $_SERVER['SERVER_PORT'];
// echo $_SERVER['SERVER_SOFTWARE'];
// echo $_SERVER['SERVER_ADDR'];
// echo $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
<form class="container" action="action.php" method="post">
<div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required minlength='6' type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputAddress" class="form-label">Address</label>
    <input required minlength='10' type="address" class="form-control" id="exampleInputAddress" name="address">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>