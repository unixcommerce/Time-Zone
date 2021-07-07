<html>
<body>



<head>
  <meta charset="UTF-8">
  <title>Timezone</title>
  <link rel="stylesheet" href="./style.css">
  <style>
body {
     background-color: #ffffff;
     font-family: Arial, sans-serif;
  }

  table {
    font-family: Arial, sans-serif;
  width: 100%;
  height: 100%;
      font-size: 12px;
}

textarea {
  font-family: Arial, sans-serif;
  resize: none;
    width: 100%;
    height: 100%;
    padding: 10px;
}

button {
  resize: none;
  width: 100%;
  height: 100%;

}


#curTime{
  font-weight: bold;
}

</style>
</head>

<?php include 'database.php';?>
<?php


$line2="";
$line3="Local time ";
$number = $_GET["number"];
$line1="<table><tr><td style='padding:5px; height:10px'>#" ."<b>" . $number . "</b>". " ";
$phone = preg_replace('/[^0-9]+/', '', $number);
$area = substr($phone, 0, 3);
echo $output;
if ($area == "201") {
$php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
echo $line1;
echo $line2;
// echo $line2 . "New Jersey";
echo "";
echo  $line3 . "New Jersey". ":";
$state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

                    }

elseif ($area == "202") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "District of Columbia";
  echo "";
  echo  $line3 . "District of Columbia". ":";
  $state="District of Columbia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";
  

}

elseif ($area == "203") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  $state="Connecticut";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";
  

}

  elseif ($area == "205") {

    $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
    echo $line1;
    echo $line2;
    // echo $line2 . "Alabama";
    echo "";
    echo  $line3 . "Alabama". ":";
    $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

  }



  elseif ($area == "206") {

    $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
    echo $line1;
    echo $line2;
    // echo $line2 . "Washington";
    echo "";
    echo  $line3 . "Washington". ":";
    $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

  }

  elseif ($area == "207") {

    $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
    echo $line1;
    echo $line2;
    // echo $line2 . "Maine";
    echo "";
    echo  $line3 . "Maine". ":";
    $state="Maine";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

  }

  elseif ($area == "208") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Idaho";
  echo "";
  echo  $line3 . "Idaho". ":";
  $state="Idaho";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "209") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "210") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "212") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "213") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "214") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "215") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "216") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "217") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "218") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "219") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "220") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "223") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "224") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "225") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  $state="Louisiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "228") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  $state="Mississippi";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "229") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "231") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "251") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "252") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "253") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "254") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "256") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "260") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "262") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "267") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "269") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michagan". ":";
  $state="Michagan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "270") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  $state="Kentucky";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "272") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "276") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virgina";
  echo "";
  echo  $line3 . "Virgina". ":";
  $state="Virgina";
  echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "279") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "310") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "281") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "301") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  $state="Maryland";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "302") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Delaware";
  echo "";
  echo  $line3 . "Delaware". ":";
  $state="Delaware";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "303") {

  $php_var = 360;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  $state="Colorado";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "304") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "West Virginia";
  echo "";
  echo  $line3 . "West Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "305") {

  $php_var = 240;  
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ": ";
  $state="Florida";
  echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";
  // Working on Javascript Clock
  

}

elseif ($area == "555") {
	
  $php_var = -330; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>"; 
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ": ";
  $state="Florida";
  echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";
  // Working on Javascript Clock
  
  

}


elseif ($area == "307") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wyoming";
  echo "";
  echo  $line3 . "Wyoming". ":";
  $state="Wyoming";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "308") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  $state="Nebraska";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "309") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "313") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michagan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "314") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "315") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "316") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  $state="Kansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "317") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "318") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "318") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  $state="Louisiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "319") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  $state="Iowa";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "320") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "321") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "323") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "325") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "326") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "330") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "331") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "332") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "334") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "336") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "337") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  $state="Louisiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "339") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "341") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "346") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "347") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "351") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "341") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "346") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "347") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "351") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "352") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "360") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "361") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "364") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  $state="Kentucky";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "380") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "385") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  $state="Utah";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "386") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "401") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Rhode Island";
  echo "";
  echo  $line3 . "Rhode Island". ":";
  $state="Rhode Island";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "402") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  $state="Nebraska";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "404") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "405") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  $state="Oklahoma";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "406") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Montana";
  echo "";
  echo  $line3 . "Montana". ":";
  $state="Montana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "407") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "408") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "409") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "410") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  $state="Maryland";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "412") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "413") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "414") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "415") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "417") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "419") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "423") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "424") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "425") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "430") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "432") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "434") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "435") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  $state="Utah";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "440") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "442") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "443") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  $state="Maryland";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "445") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "456") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "458") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  $state="Oregon";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "463") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "469") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "470") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "475") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  $state="Connecticut";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "478") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "475") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  $state="Arkansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "478") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "479") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  $state="Arkansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "480") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  $state="Arizona";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "484") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "501") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  $state="Arkansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "502") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  $state="Kentucky";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "503") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  $state="Oregon";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "504") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  $state="Louisiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "505") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Mexico";
  echo "";
  echo  $line3 . "New Mexico". ":";
  $state="New Mexico";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "507") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "508") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "509") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "510") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "512") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "513") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "515") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  $state="Iowa";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "516") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "517") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "518") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "520") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  $state="Arizona";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "500" || $area == "521" || $area == "522" || $area == "523" || $area == "524" || $area == "533"  || $area == "544" || $area == "566" || $area == "588"
|| $area == "611" || $area == "700" || $area == "710" || $area == "800" || $area == "809" || $area == "833" || $area == "844" || $area == "855" || $area == "866"
|| $area == "877" || $area == "880" || $area == "881" || $area == "888" || $area == "900" || $area == "911")


 {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "????";
  echo "";
  echo  $line3 . "????". ":";
  $state="No State";
  echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "530") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "531") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  $state="Nebraska";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "534") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "539") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  $state="Oklahoma";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "540") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "541") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  $state="Oregon";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "551") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "559") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "561") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "562") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "563") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  $state="Iowa";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "564") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  $state="Washington";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}




elseif ($area == "567") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "570") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "571") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "573") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "574") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "575") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Mexico";
  echo "";
  echo  $line3 . "New Mexico". ":";
  $state="New Mexico";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "580") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  $state="Oklahoma";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "585") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "586") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "601") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  $state="Mississippi";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "602") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  $state="Arizona";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "603") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Hampshire";
  echo "";
  echo  $line3 . "New Hampshire". ":";
  $state="New Hampshire";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "605") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Dakota";
  echo "";
  echo  $line3 . "South Dakota". ":";
  $state="South Dakota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "606") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  $state="Kentucky";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "607") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "608") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "609") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "610") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "612") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "614") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "615") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "616") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michagan". ":";
  $state="Michagan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "617") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "618") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "619") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "602") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  $state="Kansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "623") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  $state="Arizona";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "626") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "628") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "629") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "630") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "631") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "636") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "640") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "641") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  $state="Iowa";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "646") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "650") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "651") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "657") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "659") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "660") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "661") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "662") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  $state="Mississippi";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "667") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  $state="Maryland";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "669") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "678") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "680") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "681") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "682") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "689") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "701") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Dakota";
  echo "";
  echo  $line3 . "North Dakota". ":";
  $state="North Dakota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "702") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  $state="Nevada";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "703") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "704") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "706") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "707") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "708") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "712") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  $state="Iowa";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "713") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "714") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "715") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "716") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "717") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "718") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "719") {

  $php_var = 360;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  $state="Colorado";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "720") {

  $php_var = 360;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  $state="Colorado";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "724") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "725") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  $state="Nevada";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "726") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "727") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "731") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "732") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "734") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "737") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "740") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "743") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "747") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "754") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Flolrida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "757") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "760") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "762") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "763") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "765") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "769") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  $state="Mississippi";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "770") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "772") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "773") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "774") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "775") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  $state="Nevada";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "779") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "781") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "785") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  $state="Kansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "786") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Flordia";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "801") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  $state="Utah";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "802") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Vermont";
  echo "";
  echo  $line3 . "Vermont". ":";
  $state="Vermont";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "803") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  $state="South Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "804") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  $state="Virginia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "805") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "806") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "808") {

  $php_var = 600;
   echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Hawaii";
  echo "";
  echo  $line3 . "Hawaii". ":";
  $state="Hawaii";
  echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "810") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "812") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "813") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "814") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "815") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "816") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  $state="Missouri";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "817") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "818") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "820") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "Calfornia". ":";
  $state="Calfornia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "828") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "830") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "831") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "832") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "838") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "839") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  $state="South Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "843") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  $state="South Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "845") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "847") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "848") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "850") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "854") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  $state="South Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "856") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "857") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "858") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "Calfornia". ":";
  $state="Calfornia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "859") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  $state="Kentucky";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "860") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  $state="Connecticut";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "862") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "863") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "864") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  $state="South Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "865") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "870") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  $state="Arkansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "872") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  $state="Illinois";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "878") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  $state="Pennsylvania";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "901") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "903") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "904") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "906") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michigan". ":";
  $state="Michigan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "907") {

  $php_var = 480; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alaska";
  echo "";
  echo  $line3 . "Alaska". ":";
  $state="Alaska";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "908") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "909") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "910") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "912") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  $state="Georgia";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "913") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  $state="Kansas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "914") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "915") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "916") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "917") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "918") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  $state="Oklahoma";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "919") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "920") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  $state="Wisconsin";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "925") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "928") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  $state="Arizona";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "929") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "930") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  $state="Indiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "931") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  $state="Tennessee";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "934") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  $state="New York";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "936") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "937") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  $state="Ohio";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "938") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  $state="Alabama";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "940") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "941") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "947") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michagan". ":";
  $state="Michagan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "949") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "951") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  $state="California";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "952") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  $state="Minnesota";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "954") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  $state="Florida";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "956") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "959") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  $state="Connecticut";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "970") {

  $php_var = 360;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  $state="Colorado";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "971") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  $state="Oregon";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "972") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "973") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  $state="New Jersey";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}


elseif ($area == "978") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  $state="Massachusetts";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}



elseif ($area == "979") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  $state="Texas";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "980") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "984") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  $state="North Carolina";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "985") {

  $php_var = 300;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  $state="Louisiana";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "986") {

  $php_var = 420;
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Idaho";
  echo "";
  echo  $line3 . "Idaho". ":";
  $state="Idaho";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

elseif ($area == "989") {

  $php_var = 240; 
  echo "<script type=\"text/javascript\">var php_var = \"$php_var\";</script>";
  
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michagan". ":";
  $state="Michagan";
   echo "<div id=\"curTime\" style=\"display: inline-block;\"></div>";
     echo "<script  src=\"./script.js\"></script>";

}

else  {

  echo "<table><tr><td style='padding:5px; height:10px'>Please enter a valid area code and try again";

}

$sql = "SELECT * FROM `tblclients` WHERE `state` = '$state'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $i ++;
  }
  echo "";
  echo " Total Clients in ";
  echo $state;
  echo ": ";
  echo $i;
$sql2 = "SELECT * FROM `tblclients` WHERE `state` = '$state' AND `status` = 'Active'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = mysqli_fetch_assoc($result2)) {
    $j ++;
  }
  $percentage = ($j / $i);
  echo "";
  echo "";
  echo " Total Active";
  echo ": ";
  echo $j;
  echo "  ";
  //echo "Time: <div id=\"curTime\" style=\"display: inline-block;\"></div>";
  echo " <a href=\"javascript:window.location.href=window.location.href\">refresh</a></td>";
  //
  
} else {
  echo " 0 Active";
  echo "  ";
  //echo "Time: <div id=\"curTime\" style=\"display: inline-block;\"></div>";
  echo " <a href=\"javascript:window.location.href=window.location.href\">refresh</a></td>";
  //

}
} else {
  echo " 0 Clients";
  
  
    //echo "Time: <div id=\"curTime\" style=\"display: inline-block;\"></div>";
  echo " <a href=\"javascript:window.location.href=window.location.href\">refresh</a></td>";
  //
  
}



?>
<script>
function copy() {
  let textarea = document.getElementById("textarea");
  textarea.select();
  document.execCommand("copy");
}

</script>


  </tr>
  <tr>
    <td style="padding:5px"><textarea placeholder="..." id="textarea" ></textarea></td>
  </tr>
  <tr>
    <td style="padding:5px; height:50px" ><button onclick="copy()">Copy</button></td>
  </tr>
</table>
