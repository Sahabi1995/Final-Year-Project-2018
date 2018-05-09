
<!DOCTYPE html>
 <html>
  <head>
  <meta name ="viewport" content="width=device-width">
  <title>Project|Welcome</title>
  <link rel="stylesheet" type="text/css" href="./mna.css"/>
 </head>

 <body>

 <header>
    <div class="container">
      <div id="branding">

          <h1 style="color:MediumSeaGreen";>IoT: Smart Parking Project</h1>
    </div>
    <nav>
    <ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="About.html">ABOUT</a></li>
    </ul>
    </nav>
 </header>

 <section id="Showpic">
 <div class="container">
 <h1><strong> Hassle Free City Parking </strong></h1>
 <p><strong> City wide smart parking. Book a parking slot at various streets and parking zones around the city.</strong></p>
 </div>
 </section>



 <section>

 <div class="container">

 <h1 id=Agogo >
 <script type="text/javascript">
 setInterval(displayclock, 500);
 function displayclock (){
   var presenttime = new Date();
   var conv = new Array(7);
   conv[0] ="Sunday";
   conv[1] ="Monday";
   conv[2] ="Tuesday";
   conv[3] ="Wednesday";
   conv[4] ="Thursday";
   conv[5] ="Friday";
   conv[6] ="Saturday";
   var dayOfWeek = conv[presenttime.getDay()];
   var hours = presenttime.getHours();
   var minutes = presenttime.getMinutes();
   var seconds = presenttime.getSeconds();

   if(hours<10){
     hours='0'+hours;
   }

   if(minutes<10){
     minutes='0'+ minutes;
   }

   document.getElementById('Agogo').innerHTML= dayOfWeek+'   '+hours +':'+ minutes +':'+seconds;
 }

 </script>
</h1>

<h2> Renold Street</h2>
</section>

<section id="parking">
  <div class="container">
 <h3> Parking Slot 1 Status: <?php if (!empty($_GET)) {$status=$_GET['stat']; echo $status;} else {echo "Vacant";} ?><span>
 <form action="Booking.php" method="GET">
   <select name="date" required>
     <option value="9">09:00-10:00</option>
     <option value="10">10:00-11:00</option>
     <option value="11">11:00-12:00</option>
     <option value="12">12:00-13:00</option>
     <option value="13">13:00-14:00</option>
     <option value="14">14:00-15:00</option>
     <option value="15">15:00-16:00</option>
     <option value="16">16:00-17:00</option>
     <option value="17">17:00-18:00</option>
   </select>
   <input type="submit" value="Book" class="button_1">
   </form></span> </h3>

  <h3>Parking Slot 2 Status: Occupied
  <span>
<form action="" method="">
  <select name="date">
  <option selected="selected">Not Available</option>
  <input type="submit" onclick="alert('All time Slots taken')" value="Book" class="button_1">
  </form></span></h3>


  <h3>Parking Slot 3 Status: Occupied
<form action="" method="">
  <select name="date" >
      <option selected="selected">Not Available</option>
    <input type="submit" onclick="alert('All Time Slots taken')" value="Book" class="button_1">
    </form></span></h3>

 </div>
   </section>

   <footer>
   <p>Salihi Abdullahi, Copyright &copy; 2018</P>
   </footer>
  </body>
  </html>
