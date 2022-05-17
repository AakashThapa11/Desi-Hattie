<?php 
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_adminlogin($con);
   
?>


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
   <link rel="stylesheet" href="css/style2.css">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css);

h3{
    font-family: 'Pacifico', cursive;
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a href="adminIndex.php">Home</a></li>
  <li><a class="active" href="viewOrders.php">Order</a></li>
  <li><a href="roasterUpdate.php">Roaster</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>

<h3>Online Order</h3>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th width="20%">Customer Name</th>
                <th width="17%">Order</th>
                <th width="13%">Total Amount</th>
                <th width="10%">Email</th>
                <th width="20%">Address</th>
                <th width="20%">Time</th>
                <th width="10%">Order Ready</th>
        </tr>
        </thead>
        <tbody>
        <?php

                  $query = "SELECT * FROM orderdetails";
                  $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){ ?>
                  <form method="post">
                     <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['orderdet']; ?></td>
                            <td>$ <?php echo $row['totalamt']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?> <?php echo $row['city']; ?> <?php echo $row['city']; ?> <?php echo $row['state']; ?> </td>
                            <td><?php echo $row['orderTime']; ?></td>
                            <td><button class="btn button1" type="ready" name="ready">Ready</button></td>
                            <?php
                                if (isset($_POST["ready"])){
                                 $sql = "DELETE FROM orderdetails WHERE orderid = '".$row['orderid']."'";
                                 $res = mysqli_query($con,$sql);
                                 echo '<script>alert("Order Ready Message has been sent!!")</script>';
                                 echo '<script>window.location="viewOrders.php"</script>';
                                 }
                           ?>
                        </tr>
                  </form>
                    <?php } ?>
        <tbody>
    </table>
</div>

</body>
</html>


