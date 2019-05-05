
<?php

include 'nav.php'

?>


<head><title>Home</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<section class="home">
    
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="css/images/hero_slide_1-1.jpg" class="d-block w-100" alt="Room 1">
        <div class="carousel-caption d-md-block"><h2>Welcome to sailing  Hotel</h2>
        <p>where every stay is unique </p>
            <a class="btn"> Explore</a>
            </div>
    </div>
    <div class="carousel-item">
      <img src="css/images/hero_slide_24-1.jpg" class="d-block w-100" alt="Room 2">
        <div class="carousel-caption d-md-block"><h2>Book Early Save More</h2>
        <p>where every stay is unique </p>
        <a class="btn"> Explore</a></div>
        
    </div>
  </div>
     
     
<div class="check_availability" style="position: absolute;bottom:-20px;left: 0px;">
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
 
     
     </div>
     
     
     
     
</div>
<!--    Slider of Rooms-->
          
    
    <!--    Slider of Rooms-->
            <div class="gettouch text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <h1>Hotel Master Rooms</h1>
                            <p>Semper ac dolor vitae accumsan.</p>
                            <div class="crack">
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

        </div>
    
    
        <div class="veiw-rooms owl-nav">
            <h2><a href="rooms.php" style="text-decoration: none;">Veiw More Rooms</a></h2>
        </div>
    
    
    
        <div class="slider container owl-carousel owl-theme">

            <div class="card-deck">

                <div class="card col-gl-3 item">
                <img src="css/images/luxury-sitting-1-1000x667%20(1).jpg" class="card-img-top img1" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  
                <div class="card-body">
                <h5 class="card-title">luxury Sitting</h5>
                <p class="card-text  font-weight-light"><small class="text-muted">SingleRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                 <div class="card-icons">

                <ul class="list-groups">
                    <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                    <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                    <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                    <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                    <span class="font-weight-light">Price</span>

                                    <span class="price_value price_min font-weight-bold">
                        $165.0<span class="unit">/night</span>
                    </span>

                </div>
                </div>
                </div>


                <div class="card col-gl-3 item">
                <img src="css/images/family-room-2-1-1000x667.jpg" class="card-img-top" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  

                <div class="card-body">
                <h5 class="card-title">Family Room 2</h5>
                <p class="card-text  font-weight-light"><small class="text-muted"> FammilyRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                 <div class="card-icons">

                <ul class="list-groups">
                    <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                    <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                    <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                    <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                    <span class="font-weight-light">Price</span>

                                    <span class="price_value price_min font-weight-bold">
                        $105.0<span class="unit">/night</span>
                    </span>

                </div>
                </div>
                </div>


                <div class="card col-gl-3 mx- item">
                <img src="css/images/twin-room-3-1-1000x667.jpg" class="card-img-top" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  

                <div class="card-body">
                <h5 class="card-title">Twin Room 3</h5>
                <p class="card-text  font-weight-lights"><small class="text-muted">TwinRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                <div class="card-icons">

                <ul class="list-groups">
                <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                <span class="font-weight-light">Price</span>

                            <span class="price_value price_min font-weight-bold">
                $245.0<span class="unit">/night</span>
                </span>

                </div>
                </div>
                </div>
            </div>
            
            
            
            
            
            <div class="card-deck">

                <div class="card col-gl-3 item">
                <img src="css/images/luxury-sitting-1-1000x667%20(1).jpg" class="card-img-top img1" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  
                <div class="card-body">
                <h5 class="card-title">luxury Sitting</h5>
                <p class="card-text  font-weight-light"><small class="text-muted">SingleRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                 <div class="card-icons">

                <ul class="list-groups">
                    <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                    <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                    <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                    <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                    <span class="font-weight-light">Price</span>

                                    <span class="price_value price_min font-weight-bold">
                        $165.0<span class="unit">/night</span>
                    </span>

                </div>
                </div>
                </div>


                <div class="card col-gl-3 item">
                <img src="css/images/family-room-2-1-1000x667.jpg" class="card-img-top" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  

                <div class="card-body">
                <h5 class="card-title">Family Room 2</h5>
                <p class="card-text  font-weight-light"><small class="text-muted"> FammilyRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                 <div class="card-icons">

                <ul class="list-groups">
                    <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                    <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                    <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                    <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                    <span class="font-weight-light">Price</span>

                                    <span class="price_value price_min font-weight-bold">
                        $105.0<span class="unit">/night</span>
                    </span>

                </div>
                </div>
                </div>


                <div class="card col-gl-3 mx- item">
                <img src="css/images/twin-room-3-1-1000x667.jpg" class="card-img-top" alt="...">
                <div class="img-layer">
                <button class="more-info btn btn-secondary">MORE INFO</button>  
                </div>  

                <div class="card-body">
                <h5 class="card-title">Twin Room 3</h5>
                <p class="card-text  font-weight-lights"><small class="text-muted">TwinRoom</small></p>
                <p class="card-text">Make yourself comfortable in any of our serene guest rooms and spacious suites...</p>
                <div class="card-icons">

                <ul class="list-groups">
                <li class="list-inline-item"><i class="fas fa-coffee"></i></li>   
                <li class="list-inline-item"><i class="fas fa-utensils"></i></li>  
                <li class="list-inline-item"><i class="fas fa-plane"></i></li>  
                <li class="list-inline-item wifi"><i class="fas fa-wifi"></i></li>  
                </ul></div>
                </div>
                <div class="card-footer">
                <div class="price">
                <span class="font-weight-light">Price</span>

                            <span class="price_value price_min font-weight-bold">
                $245.0<span class="unit">/night</span>
                </span>

                </div>
                </div>
                </div>
           </div>


        </div>


    
    
    
    
    
    </section>      
    
    <!--   OUR SERVICES  -->    
        
    <div class="our-service">
        <div class="head">
            <h1> Our Sevices</h1>
            <p>Sailing Hotel provides all services you need.</p>
        </div>    
        <div class="crack">
            <div class="crackline"></div>
            <div class="crackline2"></div>    
            <div class="crackline"></div>    
            <div class="crackline2"></div>    
            <div class="crackline"></div>    
            <div class="crackline2"></div>
            <div class="crackline"></div>    
            <div class="crackline2"></div>    
        </div>        
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <i class="fas fa-swimming-pool"></i>
                    <h2>Swimming Pool</h2>
                    <p style="padding: 10px;font-size: 17px;font-family:sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <i class="fas fa-wifi"></i>
                    <h2>Free WiFi</h2>
                    <p style="padding: 10px;font-size: 17px;font-family:sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <i class="fas fa-taxi"></i>
                    <h2>Airport Taxi</h2>
                    <p style="padding: 10px;font-size: 17px;font-family:sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <i class="fas fa-pizza-slice"></i>
                    <h2>Breakfast</h2>
                    <p style="padding: 10px;font-size: 17px;font-family:sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
                
            </div>
        </div>
        
    </div>    
        
        
        
        
<!--arrow to scroll up in any page-->
        <div class="scrolltop fixed-bottom float-right">
            <i class="fas fa-angle-double-up"></i>
        </div>
        



<section class="end_home container">
    <div class="row">
    <div class="col-lg-4 first_sec"><h3><span class="sub_border">Upco</span>mming Events</h3>
    <div class="row"> 
        <p class="col-2 date">27<br><span>Oct</span></p>
    <div class="col-10 caption">
      <h3>  <a>Host a Family Party</a></h3>
        <p>When you host a party or family reunion, the special celebrations let you strengthen bonds with those you hold...</p>
        </div>
    
    </div>
     <div class="row"> 
        <p class="col-2 date">10<br><span>Jan</span></p>
    <div class="col-10 caption">
      <h3>  <a>Other</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos minima...</p>
        </div>
    
    </div>
        
        </div>
        
    <div class="col-lg-4 second_sec"><h3><span class="sub_border">Test</span>imonials</h3>
        
        
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
           
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="sllid">
        <div class="cap">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</div>
        
        <div class="person container">
            <div class="row">
            <img src="css/images/john-doe-1-80x80.jpg" class="col-4">
                <a class="col-8 info"><h6> Hotel User</h6>
                <p>Seoer of Thimpress</p></a>
            </div>
        
        </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="sllid">
        <div class="cap">Lorem ipsum dolor sit amet, consectetur elit. Ad assumenda fuga illo laudantium magni sed temporibus.

Amet atque aut autem consectetur consequuntur dolorum enim error hic inventore molestiae nisi nostrum numquam optio perspiciatis provident.</div>
        
        <div class="person container">
            <div class="row">
            <img src="css/images/peter-packer-1-80x80.jpg" class="col-4">
                <a class="col-8 info"><h6>  WordPress User </h6>
                <p>CEO of Touristlink</p></a>
            </div>
        
        </div>
        </div>
    </div>
      <div class="carousel-item">
      <div class="sllid">
        <div class="cap">Lorem ipsum dolor sit amet, consectetur elit. Ad assumenda fuga illo laudantium magni sed temporibus.
Amet atque aut autem consectetur consequuntur dolorum enim error hic inventore molestiae nisi nostrum numquam optio perspiciatis provident.</div>
        
        <div class="person container">
            <div class="row">
            <img src="css/images/sarah-1-80x80.jpg" class="col-4">
                <a class="col-8 info"><h6>  Hotel Booking Expert </h6>
                <p>Copyrighter of Foobla</p></a>
            </div>
        
        </div>
        </div>
    </div>
  </div>
</div>
        </div>
        
        
    <div class="col-lg-4 third_sec">
        <h3><span class="sub_border">Inst</span>agram</h3>
        <div class="container">
        
        <div class="row">
            <img src="css/images/phot1.jpg" class="col-4">
            <img src="css/images/phot2.jpg" class="col-4">
            <img src="css/images/phot3.jpg" class="col-4">
            </div>
        
        <div class="row">
            <img src="css/images/phot4.jpg" class="col-4">
            <img src="css/images/phot5.jpg" class="col-4">
            <img src="css/images/phot6.jpg" class="col-4">
            </div>
        </div>
        
        
        
        
        
        </div>
    </div>
    
    

</section>









<?php

include 'footer.php'

?>