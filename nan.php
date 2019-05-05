<?php

include 'nav.php'

?>

<div  class="contact text-center"><h1>My Rooms</h1></div>
<div class="container">
<h1 style="margin-top:75px;margin-bottom:25px">Booking Rooms</h1>
<table class="room-table">
<thead>
    <th></th>
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
        <td rowspan="5" class="rowspaning"><button class="btn btn-success"><i class="fas fa-times"></i></button></td>
        <td>Double Room</td>
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
        <td colspan="8">Addition Services</td>
        </tr>
        
        <tr id="servic1">
            <td colspan="2"><button class="btn btn-info delet1"><i class="fas fa-times"></i></button></td>
             <td colspan="1">2</td>
             <td colspan="4">WiFi</td>
             <td>$147.0</td>
        </tr>
        <tr id="servic2">
            <td colspan="2"><button class="btn btn-info delet2"><i class="fas fa-times"></i></button></td>
             <td colspan="1">2</td>
             <td colspan="4">WiFi</td>
             <td>$147.0</td>
        </tr>
        <tr id="servic3">
            <td colspan="2"><button class="btn btn-info delet3" onclick=""><i class="fas fa-times"></i></button></td>
             <td colspan="1">2</td>
             <td colspan="4">WiFi</td>
             <td>$147.0</td>
        </tr>
        
<!--        Defult table -->
        <tr>
        
            <td colspan="8" class="text-left">Sub Total</td>
            <td>$4,047.0</td>
        </tr>
        <tr>
        
            <td colspan="8" class="text-left">Tax</td>
            <td>10%</td>
        </tr>
        <tr>
        
            <td colspan="8" class="text-left">Grand Total</td>
            <td>$4,451.7</td>
        </tr>
        <tr>
        
            <td colspan="8" class="text-left">Advance Payment (50% of Grand Total)</td>
            <td>$2,225.9</td>
            
        </tr>
    </tbody>
</table>


</div>


<?php

include 'footer.php'

?>