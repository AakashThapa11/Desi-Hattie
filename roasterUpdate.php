<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style4.css">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  html{
    font-size: 10px;
  }
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #04AA6D;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a href="adminIndex.php">Home</a></li>
  <li><a href="viewOrders.php">Order</a></li>
  <li><a class="active" href="roasterUpdate.php">Roaster</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
    <div class="containerRoaster">

        <h1>Select a Staff</h1>

        <div class="task__container">
            <div class="task__name" id="break" style="background-color: #f7f779;">Jay Dangi</div>
            <div class="task__name" id="gym" style="background-color: #f68080">Puran Khanal</div>
            <div class="task__name" id="study" style="background-color: #faae7b">Don Dennis</div>
            <div class="task__name" id="tv" style="background-color: #2a9d8f">Mary Tejeda</div>
            <div class="task__name" id="friends" style="background-color: #a8dadc">Scott Williams</div>
            <div class="task__name" id="work" style="background-color: #bdb2ff">Mary Hall</div>
            <div class="task__name" id="deselect">Deselect All</div>

        </div>

        <h3>Add selected staff to the schedule</h3>

        <div class="schedule__container">
            <div class="days__container">
                <span class="corner"></span>
                <div class="day">Sunday</div>
                <div class="day">Monday</div>
                <div class="day">Tuesday</div>
                <div class="day">Wednesday</div>
                <div class="day">Thursday</div>
                <div class="day">Friday</div>
                <div class="day">Saturday</div>
            </div>
            <div class="part__day">
                <span class="time">8am <br> - <br> 12pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">12pm <br> - <br> 2pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">2pm <br> - <br> 5pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">5pm <br> - <br> 8pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
            <div class="part__day">
                <span class="time">8pm <br> - <br> 10pm</span>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
                <div class="task"></div>
            </div>
        </div>

        <button class="deleteBtn">Reset Schedule</button>

        <div class="pop-up__container">
            <div class="pop-up">
                <h4>Are you sure you want to delete all the staffs from your schedule?</h4>
                <div class="btn__container">
                    <div class="btn__answer" id="btn__yes">YES</div>
                    <div class="btn__answer" id="btn__no">NO</div>
                </div>
            </div>
        </div>

    </div>

    <script src="roaster.js"></script>

</body>
</html>