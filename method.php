<html>
<body>

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


#clock {

  font-size: 56px;
  text-align: center;
  padding-top: 40px;
  padding-bottom: 40px;
}


</style>


<?php include 'database.php';?>


<script type="text/JavaScript">


function currentTime() {
  var date = new Date(); /* creating object of Date class */
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
    var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime(); /* calling currentTime() function to initiate the process */



</script>



<?php




$line2="";
$line3=" Time in ";


$number = $_GET["number"];

$line1="<table><tr><td style='padding:5px; height:10px'>#" ."<b>" . $number . "</b>". " ";

$phone = preg_replace('/[^0-9]+/', '', $number);

$area = substr($phone, 0, 3);

echo $output;

if ($area == "201") {

date_default_timezone_set("America/New_York");
echo $line1;
echo $line2;
// echo $line2 . "New Jersey";
echo "";
echo  $line3 . "New Jersey". ":";
echo date(" h:i a"); $state="New Jersey";
                    }

elseif ($area == "202") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "District of Columbia";
  echo "";
  echo  $line3 . "District of Columbia". ":";
  echo date(" h:i a"); $state="District of Columbia";

}

elseif ($area == "203") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  echo date(" h:i a"); $state="Connecticut";

}

  elseif ($area == "205") {

    date_default_timezone_set("America/Mexico_City");
    echo $line1;
    echo $line2;
    // echo $line2 . "Alabama";
    echo "";
    echo  $line3 . "Alabama". ":";
    echo date(" h:i a"); $state="Alabama";

  }



  elseif ($area == "206") {

    date_default_timezone_set("America/Los_Angeles");
    echo $line1;
    echo $line2;
    // echo $line2 . "Washington";
    echo "";
    echo  $line3 . "Washington". ":";
    echo date(" h:i a"); $state="Washington";

  }

  elseif ($area == "207") {

    date_default_timezone_set("America/New_York");
    echo $line1;
    echo $line2;
    // echo $line2 . "Maine";
    echo "";
    echo  $line3 . "Maine". ":";
    echo date(" h:i a"); $state="Maine";

  }

  elseif ($area == "208") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Idaho";
  echo "";
  echo  $line3 . "Idaho". ":";
  echo date(" h:i a"); $state="Idaho";

}



elseif ($area == "209") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "210") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}

elseif ($area == "212") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}



elseif ($area == "213") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "214") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "215") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "216") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "217") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "218") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}



elseif ($area == "219") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}



elseif ($area == "220") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}



elseif ($area == "223") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "224") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "225") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  echo date(" h:i a"); $state="Louisiana";

}


elseif ($area == "228") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  echo date(" h:i a"); $state="Mississippi";

}



elseif ($area == "229") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "231") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}


elseif ($area == "251") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  echo date(" h:i a"); $state="Alabama";

}


elseif ($area == "252") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "253") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  echo date(" h:i a"); $state="Washington";

}


elseif ($area == "254") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "256") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  echo date(" h:i a"); $state="Alabama";

}


elseif ($area == "260") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}


elseif ($area == "262") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}


elseif ($area == "267") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "269") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michagan". ":";
  echo date(" h:i a"); $state="Michagan";

}



elseif ($area == "270") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  echo date(" h:i a"); $state="Kentucky";

}


elseif ($area == "272") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "276") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virgina";
  echo "";
  echo  $line3 . "Virgina". ":";
  echo date(" h:i a"); $state="Virgina";

}


elseif ($area == "279") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "310") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "281") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "301") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  echo date(" h:i a"); $state="Maryland";

}


elseif ($area == "302") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Delaware";
  echo "";
  echo  $line3 . "Delaware". ":";
  echo date(" h:i a"); $state="Delaware";

}



elseif ($area == "303") {

  date_default_timezone_set("America/Denver");
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  echo date(" h:i a"); $state="Colorado";

}


elseif ($area == "304") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "West Virginia";
  echo "";
  echo  $line3 . "West Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "305") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "307") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wyoming";
  echo "";
  echo  $line3 . "Wyoming". ":";
  echo date(" h:i a"); $state="Wyoming";

}


elseif ($area == "308") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  echo date(" h:i a"); $state="Nebraska";

}

elseif ($area == "309") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "313") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michagan";

}


elseif ($area == "314") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}


elseif ($area == "315") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}

elseif ($area == "316") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  echo date(" h:i a"); $state="Kansas";

}


elseif ($area == "317") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}


elseif ($area == "318") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}


elseif ($area == "318") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  echo date(" h:i a"); $state="Louisiana";

}

elseif ($area == "319") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  echo date(" h:i a"); $state="Iowa";

}

elseif ($area == "320") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}


elseif ($area == "321") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}



elseif ($area == "323") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "325") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}

elseif ($area == "326") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "330") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "331") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "332") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "334") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  echo date(" h:i a"); $state="Alabama";

}


elseif ($area == "336") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "337") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  echo date(" h:i a"); $state="Louisiana";

}


elseif ($area == "339") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}

elseif ($area == "341") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "346") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "347") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "351") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}

elseif ($area == "341") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "346") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "347") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "351") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}

elseif ($area == "352") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}

elseif ($area == "360") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  echo date(" h:i a"); $state="Washington";

}

elseif ($area == "361") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "364") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  echo date(" h:i a"); $state="Kentucky";

}


elseif ($area == "380") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "385") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  echo date(" h:i a"); $state="Utah";

}


elseif ($area == "386") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}



elseif ($area == "401") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Rhode Island";
  echo "";
  echo  $line3 . "Rhode Island". ":";
  echo date(" h:i a"); $state="Rhode Island";

}


elseif ($area == "402") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  echo date(" h:i a"); $state="Nebraska";

}


elseif ($area == "404") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "405") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  echo date(" h:i a"); $state="Oklahoma";

}


elseif ($area == "406") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Montana";
  echo "";
  echo  $line3 . "Montana". ":";
  echo date(" h:i a"); $state="Montana";

}


elseif ($area == "407") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "408") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "409") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "410") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  echo date(" h:i a"); $state="Maryland";

}


elseif ($area == "412") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "413") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}


elseif ($area == "414") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}


elseif ($area == "415") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "417") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}


elseif ($area == "419") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "423") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}


elseif ($area == "424") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "425") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  echo date(" h:i a"); $state="Washington";

}

elseif ($area == "430") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "432") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "434") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "435") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  echo date(" h:i a"); $state="Utah";

}


elseif ($area == "440") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}

elseif ($area == "442") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "443") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  echo date(" h:i a"); $state="Maryland";

}


elseif ($area == "445") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}



elseif ($area == "456") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}



elseif ($area == "458") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  echo date(" h:i a"); $state="Oregon";

}


elseif ($area == "463") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}



elseif ($area == "469") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "470") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "475") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  echo date(" h:i a"); $state="Connecticut";

}



elseif ($area == "478") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "475") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  echo date(" h:i a"); $state="Arkansas";

}


elseif ($area == "478") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "479") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  echo date(" h:i a"); $state="Arkansas";

}


elseif ($area == "480") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  echo date(" h:i a"); $state="Arizona";

}


elseif ($area == "484") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "501") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  echo date(" h:i a"); $state="Arkansas";

}

elseif ($area == "502") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  echo date(" h:i a"); $state="Kentucky";

}


elseif ($area == "503") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  echo date(" h:i a"); $state="Oregon";

}


elseif ($area == "504") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  echo date(" h:i a"); $state="Louisiana";

}


elseif ($area == "505") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Mexico";
  echo "";
  echo  $line3 . "New Mexico". ":";
  echo date(" h:i a"); $state="New Mexico";

}



elseif ($area == "507") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}


elseif ($area == "508") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}


elseif ($area == "509") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  echo date(" h:i a"); $state="Washington";

}


elseif ($area == "510") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "512") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "513") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "515") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  echo date(" h:i a"); $state="Iowa";

}


elseif ($area == "516") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "517") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}

elseif ($area == "518") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "520") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  echo date(" h:i a"); $state="Arizona";

}


elseif ($area == "500" || $area == "521" || $area == "522" || $area == "523" || $area == "524" || $area == "533"  || $area == "544" || $area == "566" || $area == "588"
|| $area == "611" || $area == "700" || $area == "710" || $area == "800" || $area == "809" || $area == "833" || $area == "844" || $area == "855" || $area == "866"
|| $area == "877" || $area == "880" || $area == "881" || $area == "888" || $area == "900")


 {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "????";
  echo "";
  echo  $line3 . "????". ":";
  echo date(" h:i a"); $state="None";

}


elseif ($area == "530") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "531") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nebraska";
  echo "";
  echo  $line3 . "Nebraska". ":";
  echo date(" h:i a"); $state="Nebraska";

}


elseif ($area == "534") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}

elseif ($area == "539") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  echo date(" h:i a"); $state="Oklahoma";

}


elseif ($area == "540") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "541") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  echo date(" h:i a"); $state="Oregon";

}


elseif ($area == "551") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}

elseif ($area == "559") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "561") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}



elseif ($area == "562") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "563") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  echo date(" h:i a"); $state="Iowa";

}


elseif ($area == "564") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Washington";
  echo "";
  echo  $line3 . "Washington". ":";
  echo date(" h:i a"); $state="Washington";

}




elseif ($area == "567") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "570") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "571") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}



elseif ($area == "573") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}



elseif ($area == "574") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}



elseif ($area == "575") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Mexico";
  echo "";
  echo  $line3 . "New Mexico". ":";
  echo date(" h:i a"); $state="New Mexico";

}



elseif ($area == "580") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  echo date(" h:i a"); $state="Oklahoma";

}


elseif ($area == "585") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}

elseif ($area == "586") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}


elseif ($area == "601") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  echo date(" h:i a"); $state="Mississippi";

}


elseif ($area == "602") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  echo date(" h:i a"); $state="Arizona";

}


elseif ($area == "603") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Hampshire";
  echo "";
  echo  $line3 . "New Hampshire". ":";
  echo date(" h:i a"); $state="New Hampshire";

}


elseif ($area == "605") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Dakota";
  echo "";
  echo  $line3 . "South Dakota". ":";
  echo date(" h:i a"); $state="South Dakota";

}



elseif ($area == "606") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  echo date(" h:i a"); $state="Kentucky";

}


elseif ($area == "607") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "608") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}


elseif ($area == "609") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "610") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "612") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}


elseif ($area == "614") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "615") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}



elseif ($area == "616") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michagan". ":";
  echo date(" h:i a"); $state="Michagan";

}


elseif ($area == "617") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}


elseif ($area == "618") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "619") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "602") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  echo date(" h:i a"); $state="Kansas";

}


elseif ($area == "623") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  echo date(" h:i a"); $state="Arizona";

}


elseif ($area == "626") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "628") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "629") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}

elseif ($area == "630") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "631") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "636") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}


elseif ($area == "640") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "641") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  echo date(" h:i a"); $state="Iowa";

}


elseif ($area == "646") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}



elseif ($area == "650") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "651") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}

elseif ($area == "657") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "659") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  echo date(" h:i a"); $state="Alabama";

}


elseif ($area == "660") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}


elseif ($area == "661") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "662") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  echo date(" h:i a"); $state="Mississippi";

}


elseif ($area == "667") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Maryland";
  echo "";
  echo  $line3 . "Maryland". ":";
  echo date(" h:i a"); $state="Maryland";

}


elseif ($area == "669") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "678") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "680") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "681") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "682") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "689") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "701") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Dakota";
  echo "";
  echo  $line3 . "North Dakota". ":";
  echo date(" h:i a"); $state="North Dakota";

}


elseif ($area == "702") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  echo date(" h:i a"); $state="Nevada";

}



elseif ($area == "703") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}



elseif ($area == "704") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}



elseif ($area == "706") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "707") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "708") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "712") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Iowa";
  echo "";
  echo  $line3 . "Iowa". ":";
  echo date(" h:i a"); $state="Iowa";

}


elseif ($area == "713") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}

elseif ($area == "714") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "715") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}


elseif ($area == "716") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "717") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "718") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}

elseif ($area == "719") {

  date_default_timezone_set("America/Denver");
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  echo date(" h:i a"); $state="Colorado";

}


elseif ($area == "720") {

  date_default_timezone_set("America/Denver");
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  echo date(" h:i a"); $state="Colorado";

}


elseif ($area == "724") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "725") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  echo date(" h:i a"); $state="Nevada";

}


elseif ($area == "726") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "727") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "731") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}


elseif ($area == "732") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "734") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}


elseif ($area == "737") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "740") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "743") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "747") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "754") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Flolrida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}

elseif ($area == "757") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "760") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "762") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}

elseif ($area == "763") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}


elseif ($area == "765") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}


elseif ($area == "769") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Mississippi";
  echo "";
  echo  $line3 . "Mississippi". ":";
  echo date(" h:i a"); $state="Mississippi";

}


elseif ($area == "770") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "772") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "773") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "774") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}


elseif ($area == "775") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Nevada";
  echo "";
  echo  $line3 . "Nevada". ":";
  echo date(" h:i a"); $state="Nevada";

}


elseif ($area == "779") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}

elseif ($area == "781") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}


elseif ($area == "785") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  echo date(" h:i a"); $state="Kansas";

}


elseif ($area == "786") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Flordia";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}

elseif ($area == "801") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Utah";
  echo "";
  echo  $line3 . "Utah". ":";
  echo date(" h:i a"); $state="Utah";

}


elseif ($area == "802") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Vermont";
  echo "";
  echo  $line3 . "Vermont". ":";
  echo date(" h:i a"); $state="Vermont";

}


elseif ($area == "803") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  echo date(" h:i a"); $state="South Carolina";

}


elseif ($area == "804") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Virginia";
  echo "";
  echo  $line3 . "Virginia". ":";
  echo date(" h:i a"); $state="Virginia";

}


elseif ($area == "805") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "806") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "808") {

  date_default_timezone_set("Pacific/Honolulu");
  echo $line1;
  echo $line2;
  // echo $line2 . "Hawaii";
  echo "";
  echo  $line3 . "Hawaii". ":";
  echo date(" h:i a"); $state="Hawaii";

}



elseif ($area == "810") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}



elseif ($area == "812") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}



elseif ($area == "813") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "814") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}



elseif ($area == "815") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "816") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Missouri";
  echo "";
  echo  $line3 . "Missouri". ":";
  echo date(" h:i a"); $state="Missouri";

}


elseif ($area == "817") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "818") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "820") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "Calfornia". ":";
  echo date(" h:i a"); $state="Calfornia";

}


elseif ($area == "828") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "830") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "831") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "832") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "838") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}



elseif ($area == "839") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  echo date(" h:i a"); $state="South Carolina";

}



elseif ($area == "843") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  echo date(" h:i a"); $state="South Carolina";

}


elseif ($area == "845") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "847") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "848") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}



elseif ($area == "850") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "854") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  echo date(" h:i a"); $state="South Carolina";

}



elseif ($area == "856") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}



elseif ($area == "857") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}



elseif ($area == "858") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "Calfornia". ":";
  echo date(" h:i a"); $state="Calfornia";

}


elseif ($area == "859") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kentucky";
  echo "";
  echo  $line3 . "Kentucky". ":";
  echo date(" h:i a"); $state="Kentucky";

}


elseif ($area == "860") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  echo date(" h:i a"); $state="Connecticut";

}


elseif ($area == "862") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "863") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "864") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "South Carolina";
  echo "";
  echo  $line3 . "South Carolina". ":";
  echo date(" h:i a"); $state="South Carolina";

}


elseif ($area == "865") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}


elseif ($area == "870") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arkansas";
  echo "";
  echo  $line3 . "Arkansas". ":";
  echo date(" h:i a"); $state="Arkansas";

}


elseif ($area == "872") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Illinois";
  echo "";
  echo  $line3 . "Illinois". ":";
  echo date(" h:i a"); $state="Illinois";

}


elseif ($area == "878") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Pennsylvania";
  echo "";
  echo  $line3 . "Pennsylvania". ":";
  echo date(" h:i a"); $state="Pennsylvania";

}


elseif ($area == "901") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}



elseif ($area == "903") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "904") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "906") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michigan". ":";
  echo date(" h:i a"); $state="Michigan";

}


elseif ($area == "907") {

  date_default_timezone_set("America/Anchorage");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alaska";
  echo "";
  echo  $line3 . "Alaska". ":";
  echo date(" h:i a"); $state="Alaska";

}


elseif ($area == "908") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "909") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "910") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "912") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Georgia";
  echo "";
  echo  $line3 . "Georgia". ":";
  echo date(" h:i a"); $state="Georgia";

}


elseif ($area == "913") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Kansas";
  echo "";
  echo  $line3 . "Kansas". ":";
  echo date(" h:i a"); $state="Kansas";

}


elseif ($area == "914") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "915") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "916") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "917") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "918") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oklahoma";
  echo "";
  echo  $line3 . "Oklahoma". ":";
  echo date(" h:i a"); $state="Oklahoma";

}


elseif ($area == "919") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "920") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Wisconsin";
  echo "";
  echo  $line3 . "Wisconsin". ":";
  echo date(" h:i a"); $state="Wisconsin";

}


elseif ($area == "925") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}


elseif ($area == "928") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Arizona";
  echo "";
  echo  $line3 . "Arizona". ":";
  echo date(" h:i a"); $state="Arizona";

}


elseif ($area == "929") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}



elseif ($area == "930") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Indiana";
  echo "";
  echo  $line3 . "Indiana". ":";
  echo date(" h:i a"); $state="Indiana";

}



elseif ($area == "931") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Tennessee";
  echo "";
  echo  $line3 . "Tennessee". ":";
  echo date(" h:i a"); $state="Tennessee";

}


elseif ($area == "934") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New York";
  echo "";
  echo  $line3 . "New York". ":";
  echo date(" h:i a"); $state="New York";

}


elseif ($area == "936") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "937") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Ohio";
  echo "";
  echo  $line3 . "Ohio". ":";
  echo date(" h:i a"); $state="Ohio";

}


elseif ($area == "938") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Alabama";
  echo "";
  echo  $line3 . "Alabama". ":";
  echo date(" h:i a"); $state="Alabama";

}


elseif ($area == "940") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "941") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}

elseif ($area == "947") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michagan";
  echo "";
  echo  $line3 . "Michagan". ":";
  echo date(" h:i a"); $state="Michagan";

}

elseif ($area == "949") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}



elseif ($area == "951") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "California";
  echo "";
  echo  $line3 . "California". ":";
  echo date(" h:i a"); $state="California";

}

elseif ($area == "952") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Minnesota";
  echo "";
  echo  $line3 . "Minnesota". ":";
  echo date(" h:i a"); $state="Minnesota";

}


elseif ($area == "954") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Florida";
  echo "";
  echo  $line3 . "Florida". ":";
  echo date(" h:i a"); $state="Florida";

}


elseif ($area == "956") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}


elseif ($area == "959") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Connecticut";
  echo "";
  echo  $line3 . "Connecticut". ":";
  echo date(" h:i a"); $state="Connecticut";

}

elseif ($area == "970") {

  date_default_timezone_set("America/Denver");
  echo $line1;
  echo $line2;
  // echo $line2 . "Colorado";
  echo "";
  echo  $line3 . "Colorado". ":";
  echo date(" h:i a"); $state="Colorado";

}


elseif ($area == "971") {

  date_default_timezone_set("America/Los_Angeles");
  echo $line1;
  echo $line2;
  // echo $line2 . "Oregon";
  echo "";
  echo  $line3 . "Oregon". ":";
  echo date(" h:i a"); $state="Oregon";

}


elseif ($area == "972") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}



elseif ($area == "973") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "New Jersey";
  echo "";
  echo  $line3 . "New Jersey". ":";
  echo date(" h:i a"); $state="New Jersey";

}


elseif ($area == "978") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Massachusetts";
  echo "";
  echo  $line3 . "Massachusetts". ":";
  echo date(" h:i a"); $state="Massachusetts";

}



elseif ($area == "979") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Texas";
  echo "";
  echo  $line3 . "Texas". ":";
  echo date(" h:i a"); $state="Texas";

}

elseif ($area == "980") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}



elseif ($area == "984") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "North Carolina";
  echo "";
  echo  $line3 . "North Carolina". ":";
  echo date(" h:i a"); $state="North Carolina";

}


elseif ($area == "985") {

  date_default_timezone_set("America/Mexico_City");
  echo $line1;
  echo $line2;
  // echo $line2 . "Louisiana";
  echo "";
  echo  $line3 . "Louisiana". ":";
  echo date(" h:i a"); $state="Louisiana";

}


elseif ($area == "986") {

  date_default_timezone_set("America/Phoenix");
  echo $line1;
  echo $line2;
  // echo $line2 . "Idaho";
  echo "";
  echo  $line3 . "Idaho". ":";
  echo date(" h:i a"); $state="Idaho";

}


elseif ($area == "989") {

  date_default_timezone_set("America/New_York");
  echo $line1;
  echo $line2;
  // echo $line2 . "Michigan";
  echo "";
  echo  $line3 . "Michagan". ":";
  echo date(" h:i a"); $state="Michagan";

}


else  {

  echo "Please enter a valid area code and try again";

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
  echo " ";
  echo "<a href=\"javascript:window.location.href=window.location.href\">refresh</a>";

} else {
  echo " 0 Active";
}


} else {
  echo " 0 Clients";
}


?>


<script>
function copy() {
  let textarea = document.getElementById("textarea");
  textarea.select();
  document.execCommand("copy");
}

</script>

</td>
  </tr>
  <tr>
    <td style="padding:5px"><textarea placeholder="Use this text area to take notes. This might include the contacts name, detials from their prior communications, or details you might want to save into your note taking application when the call is complete. Think of it as a notepad on the fly" id="textarea" ></textarea></td>
  </tr>
  <tr>
    <td style="padding:5px; height:50px" ><button onclick="copy()">Copy</button></td>
  </tr>
</table>
