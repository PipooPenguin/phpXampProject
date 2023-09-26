<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <h1>    <?php

        define('name',"wolf & rabbit");
        echo name, '<br/>';
        $playVideo = 0;
        echo 'video number: ',"{$playVideo}";
        $profilePopup = ['Trẻ em','Quản lý hồ sơ','Tài khoản','Trung tâm trợ giúp'];
    ?></h1>
    <div >
    <!-- This shows the popup. -->
</div> 
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><?php echo "$profilePopup[0]"?></a>
      <a href="#"><?php echo "$profilePopup[1]"?></a>
      <a href="#"><?php echo "$profilePopup[2]"?></a>
      <a href="#"><?php echo "$profilePopup[3]"?></a>
    </div>
  </div>
</div>
    <?php
        function sum(int $a,int $b){
            return $a+$b;
        }
        echo 'sum: ',sum(2,5),'<br/>';
        echo "---------------------------";
        $boole= false;
        echo is_bool($boole);
        echo "---------------------------",'<br/>';
        echo PHP_INT_MAX;
        var_dump(PHP_INT_MAX+1);
        echo "---------------------------",'<br/>';
        $catelogy = "Action";
        echo $catelogy[0],$catelogy[1],'<br/>';
        $singleLine = <<<Sing
          <pre>
          hello this is catelogy $catelogy 
          we can put variable here
          <h1>We can have full html code here </h1>
          </pre>
        Sing;
        // echo nl2br($singleLine),'<br/>';
        echo $singleLine,'<br/>';

        echo "---------------------------",'<br/>';
        $experience = <<<'EXP'
        in here we can't put variable in here : $catelogy
        EXP;
        echo $experience;
        $experience2 = <<<EXP
        in here we can put variable in here : $catelogy
        EXP;
        echo $experience2;
        echo "---------------------------NULL",'<br/>';
        $emptyString = null;
        echo var_dump($emptyString);
        echo "---------------------------ARRAY",'<br/>';
        $newArray= ['Ánh Tuyết','Kim Ngân','Anh Thư','Thu Hà'];
        echo $newArray[0],'<br/>';
        var_dump($newArray);
        echo "<br/>";
        echo 'varible numbers in newArray: ', count($newArray);
        echo "<br/>";
        $newArray[]='Hữu Thành';
        echo 'push variable in Array has been define <br/>';
        var_dump($newArray);
        echo "<br/>";
        echo "another way to put into array";
        echo "<br/>";
        array_push($newArray,'Hồng Nhi','2018');
        $newArray[6]=2018;
        var_dump($newArray);
        $password = [
          "Thanh" => "Tang Phuc",
          "Tan" => "cong an",
        ];
        echo '<pre>';
        print_r($password);
        echo '</pre>';
        echo 'remove element from array <br/>';
        // echo 'count array: ', count($newArray);
        unset($newArray[6]);
        echo 'check if key in array exist <br/>';
        var_dump(array_key_exists('Hoang',$password));
        echo "---------------------------OPERATOR",'<br/>';
        $num1 = 3;
        $num2 = 1.2;
        echo "${num1} mũ ${num2} = ",$num1 ** $num2; 
        echo "<br/>";
        echo "${num1} chia dư cho ${num2} = ",$num1 % $num2; 
        echo "<br/>";
        $operatorNote = <<<OPER
        <h3>mod operator tend to parse variable to interger
        to fix that=> use fmod($num1,$num2) instead of $num1 % $num2</h3>
        OPER;
        echo nl2br($operatorNote),'<br/>';
        // var_dump($num1 % $num2);
        var_dump(fmod($num1,$num2));
        var_dump($num1);

    ?>
</body>
</html>