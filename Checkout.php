
<?php
    

$con = mysqli_connect('localhost','root','','bookingroom');
     if($con == true)
     {
//$chechIn = $_POST['CheckIn'];
//$checkOut = $_POST['CheckOut'];
//$num_of_adults = $_POST['num_adult'];
//$num_of_child = $_POST['num_children'];

$q= "INSERT INTO client(client_id, client_name, address, Mail, price, quantity, check_in, check_out, phone) VALUES ('')";

     }
else
{
    echo 'disconected';
}   


?>



<?php

include 'nav.php'

?>

<div  class="contact text-center"><h1>My Rooms</h1></div>
<div class="container">
<h1 style="margin-top:75px;margin-bottom:25px">Booking Rooms</h1>
<table class="room-table">
<thead>
    
    <th>Room type</th>
    <th>Capacity</th>
    <th>Children</th>
    <th>Quantity</th>
    <th>Check-In</th>
    <th>Check-Out</th>
    <th>Night</th>
    <th>Gross Total</th>
</thead>
    <tbody>
<!--        room details-->
    <tr class="room-det">
        
        <td rowspan="5">Double Room</td>
        <td>2<br> Adults</td>
        <td>4 <br>Childrens</td>
        <td>2</td>
        <td>May 23, 2019</td>
        <td>May 30, 2019</td>
        <td>7</td>
        <td>$3,900.0</td>
        </tr>
<!--        Additional Services-->
        <tr class="room-det">
        <td colspan="7">Addition Services</td>
        </tr>
        
        <tr id="servic1">
             <td colspan="2">2</td>
             <td colspan="4">WiFi</td>
             <td>$147.0</td>
        </tr>
        <tr id="servic2">
             <td colspan="2">2</td>
             <td colspan="4">Car Parking</td>
             <td>$147.0</td>
        </tr>
        <tr id="servic3">
             <td colspan="2">2</td>
             <td colspan="4">Airport transportation</td>
             <td>$147.0</td>
        </tr>
        
<!--        Defult table -->
        <tr>
        
            <td colspan="7" class="text-left">Sub Total</td>
            <td>$4,047.0</td>
        </tr>
        <tr>
        
            <td colspan="7" class="text-left">Tax</td>
            <td>10%</td>
        </tr>
        <tr>
        
            <td colspan="7" class="text-left">Grand Total</td>
            <td>$4,451.7</td>
        </tr>
        <tr>
        
            <td colspan="7" class="text-left">Advance Payment (50% of Grand Total)</td>
            <td>$2,225.9</td>
            
        </tr>
    </tbody>
</table>
    
    <h1 style="margin:20px 0px;">Customer Details</h1>


<form class="personal_info">
  
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name*" name="fname" required>
    </div>
    <div class="col-md-4 mb-3">
    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name*" name="lname" required>
    </div>
    
  
  
    <div class="col-md-4 mb-3">
      <input type="email" class="form-control" id="inputEmail3" placeholder="email@example.com" name="e-mail" required>
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="inputAddress" placeholder="Address*" name="address" required>
    </div>
    <div class="col-md-4 mb-3">
      <input class="form-control" type="text" placeholder="Phon Number" name ="phone-num"required>
    </div>
  <div class="col-md-4 mb-3"><button class="btn btn-primary" type="submit" style="background-color:#b19262;border-color:#b19262;padding-left:30px;padding-right:30px">Register</button></div>
</form>
</div>
<?php

include 'footer.php'

?>



<?php
    

$con = mysqli_connect('localhost','root','','bookingroom');
     if($con == true)
     {
         echo  'conected';
     }
else
{
    echo 'disconected';
}   
$fName=$_POST['fname'];
$Lname=$_POST['lname'];
$Email=$_POST['e-mail'];
$address=$_POST['address'];
$phone=$_POST['phone-num'];



$q="INSERT INTO client(client_id, firstName, address, Mail, price, quantity, check_in, check_out, phone, lastname) VALUES ('',$fName','$address','$Email','','','','','$phone','$Lname')";

    mysqli_query($con,$q);
?>