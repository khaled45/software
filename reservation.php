<?php

include 'nav.php'

?>



<div  class="contact text-center">
        
            <h1>Reservation</h1>
        
        
        </div>
        <div class="gettouch text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <h1>Check Availability</h1>
                            <div class="crack">
                                <div class="crackline"></div>
                                <div class="crackline2"></div>    
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>    
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>    
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>    
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>    
                                <div class="crackline"></div>    
                                <div class="crackline2"></div>    
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
            
            
            
            
 <form class="container" style="padding-top:40px" action="booking.php" method="post">
  <div class="form-row">
      <div class="form-group col-md-2"> <input name="checkIn" type="text" onfocus="(this.type='date')"  id="validationDefault01" class="form-control" placeholder="Check In" required> </div>
      <div class="form-group col-md-2"> <input name="checkOut"  id="validationDefault02" type="text" onfocus="(this.type='date')" class="form-control" placeholder="Check Out" required> </div>
     
  <div class="form-group col-md-2">
    <select  name="num_adult"class="custom-select" required  id="validationDefault03">
      <option value="">Adult</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>

  <div class="form-group col-md-2">
    <select name="num_children"class="custom-select" required  id="validationDefault04">
      <option value="">Chilldren</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
      <div class="col-md-1"></div>
      <div class="col-md-3"> <button class="btn btn-primary" type="submit" style="width:100%; background-color: #b19261;border-color:#b19261">Check Avability</button></div>
</div>
 
</form>            
             
            
            
            
                <div class="fadeline"></div>

        </div>    
        
            <div class="container reserve text-left my-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="my-3">How do I make reservations</h1>
                        <div class="smallline"></div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled.<br>It is a long established fact that a reader will be distracted by the readable<br> content of a page when looking at its layout. <br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution</p>
                    
                        <i style="color:#b19262 ;">The Sailing Hotel</i>
                        
                    </div>
                    <div class="col-md-6" >
                        <h1 class="my-3">How do I make reservations</h1>
                        <div class="smallline"></div>
                        
                        <div class="container" >                            
                            <div class="row">
                                <div class="col-md-3" style="padding: 0px;margin: 0px; text-align: left">
                                    <span> Address</span>
                                </div>
                                <div class="col-md-9">
                                    <span> 329 Queensberry Street, North Melbourne VIC 3051, Australi.</span>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-3" style="padding: 0px;margin: 0px; text-align: left">
                                    <span> Telephone</span>
                                </div>
                                <div class="col-md-9">
                                    <span style="color:#b19262"> +001522914398</span>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 0px;margin: 0px; text-align: left">
                                    <span> Toll Free</span>
                                </div>
                                <div class="col-md-9">
                                    <span style="color:#b19262"> +00123785890</span>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 0px;margin: 0px; text-align: left">
                                    <span> Mail</span>
                                </div>
                                <div class="col-md-9">
                                    <span style="color:#b19262 ;">reservation@sailing.com</span>
                                </div>
                                
                        </div>
                        </div>
                    </div>
            </div>    
            
            
        </div>
        


<?php

include 'footer.php'

?>