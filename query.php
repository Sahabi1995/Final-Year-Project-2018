<?php

date_default_timezone_set("Europe/London");  //sets default time zone to London

function randomstring($len)
{
$string = "";
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<$len;$i++)
$string.=substr($chars,rand(0,strlen($chars)),1);
return $string;
}

$me=5; //length of reference number
$timeslot = $_GET["date"];    //get values from submitted values from Actual.php into a variable timeslot
if (!empty($timeslot)){                 // if variable is not empty
  $host="localhost";                    // assigning log in credential to variables
  $dbusername ="id4945638_salihi";
  $dbname="id4945638_bookings";
  $dbpassword ="salihi";
  $add =1;
  $time = time();                   //
  $get= date('H:i:s', $time);
  $startslot = (int)$timeslot;              //convert submitted string from Actual.php to integer
  $endslot = ($startslot + $add);            // Add the start time by 1 to get the booking end time. Only the start time is passed by the sending php file.
  $startslot1= $startslot.':'.'00'.':'.'00';    //modify the values to the hour format of the database
  $endslot1=   $endslot.':'.'00'.':'.'00';
 // echo $startslot;
//echo $endslot1;
////echo $startslot1;
//echo $get;
  // Create
   //connection to database
  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);   // database object created to connect to database. Login credentials of phpmyAdmin are passed as constructors.

  if (mysqli_connect_error()) {
      //Check if connection to database has not been established.
    die('Connect Error('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
    // code...
  }

  else {
    $key=$startslot;
    $sql="SELECT*FROM salihi WHERE StartTime LIKE '%$startslot1%'"; //Variable "$Startslot1" contains the start time of the booking
    $result = mysqli_query($conn, $sql);  //query made to the database to chack for the timeslot booked,
    $queryResult = mysqli_num_rows($result); //query results


    if($queryResult>0){
        //if time slot already booked
      while($row=mysqli_fetch_assoc($result)){
        echo "Time Slot already Booked - Please Book new time slot"; //Response to be displayed to user
      //  echo $row['StartTime'];
      //  echo $row['EndTime'];

      }
    }
    else{
    //If timeslot is not in database
     $ref=randomstring($me);
      $sql= "INSERT INTO salihi (StartTime, EndTime, Reference)
      values ('$startslot1','$endslot1','$ref')";               // insert timeslot into database as new entry
      if ($conn->query($sql))
      {
      echo nl2br("Your Booking has been logged.\nYour Booking Reference Number is  $ref");
    }


}


}}

 ?>
