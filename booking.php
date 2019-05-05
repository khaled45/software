

<?php
    include "nav.php"
?>



    <div  class="contact text-center">
        
            <h1>Hotel Booking</h1>
        
        
    </div>

<div class="container result my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <h1>Search results</h1>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/rr.jpg" style="width:95% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Single Room</h3>
                        <h5>Capacity:  1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0   </span><span style="color:#ccc;font-size:14px;cursor: pointer" id="showbreakdown1">(veiw price breakdown)</span></h5><div class="clear-fix"></div>
                        <div class="breakdown close1">
                                <i class="fas fa-window-close close1"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>
                        <div class="clearfix"></div><h5>Quantity:  </h5>
                                <select id="quantity1" class="quantity" name="quantity" onchange="getselvalue()" required style="display:inline-block">
                                  <option>select</option>    
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                        
                            <div class="extra-option text-left" id="option1">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" id="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            

                    </div>
                    
                </div>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/family-room-2-1-1000x667.jpg" style="width:95% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Luxury Room</h3>
                        <h5>Capacity:   1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0</span><span style="color:#ccc;font-size:14px;cursor: pointer " id="showbreakdown2">(veiw price breakdown)</span></h5>
                        <div class="breakdown close2">
                                <i class="fas fa-window-close close2"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>
                        <div class="clearfix"></div><h5>Quantity:</h5>
                                <select id="quantity2" class="quantity" name="quantity" required style="display:inline-block" onchange="getselvalue2()">
                                  <option>Select</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                           <div class="extra-option text-left" id="option2">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            
                    
                    </div>
                    
                </div>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/family-room-2-1-1000x667.jpg"style=" width:100% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Family Room</h3>
                        <h5>Capacity:   1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0   </span><span style="color:#ccc;font-size:14px;cursor: pointer " id="showbreakdown3">(veiw price breakdown)</span></h5>
                             <div class="breakdown close3">
                                <i class="fas fa-window-close close3"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>

                        <div class="clearfix"></div><h5>Quantity:  </h5>
                                <select id="quantity3" class="quantity" name="quantity" required style="display:inline-block" onchange="getselvalue3()">
                                  <option>Select</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                           <div class="extra-option text-left" id="option3">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            
                    
                    </div>
                    
                </div>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/luxury-sitting-1-1000x667%20(1).jpg"style="width:95% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Luxury Room 2</h3>
                        <h5>Capacity:   1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0   </span><span style="color:#ccc;font-size:14px;cursor: pointer " id="showbreakdown4">(veiw price breakdown)</span></h5>
                            <div class="breakdown close4">
                                <i class="fas fa-window-close close4"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>

                        <div class="clearfix"></div><h5>Quantity:  </h5>
                                <select id="quantity4" class="quantity" name="quantity" required style="display:inline-block" onchange="getselvalue4()">
                                  <option>Select</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                           <div class="extra-option text-left"id="option4">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            
                    
                    </div>
                    
                </div>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/post-single-room-1-1000x667.jpg"style="width:95% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Single Room 2</h3>
                        <h5>Capacity:   1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0   </span><span style="color:#ccc;font-size:14px;cursor: pointer" id="showbreakdown5">(veiw price breakdown)</span></h5>
                            <div class="breakdown close5">
                                <i class="fas fa-window-close close5"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>

                        <div class="clearfix"></div><h5 >Quantity:  </h5>
                                <select id="quantity5" class="quantity" name="quantity" required style="display:inline-block" onchange="getselvalue5()">
                                  <option>Select</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                           <div class="extra-option text-left"id="option5">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            
                    </div>
                    
                </div>
                <div class="row my-5">
                    <div class="col-sm-5">
                        <img src="css/images/twin-room-3-1-1000x667.jpg"style="width:95% ;height:45%">
                    </div>

                    <div class="col-sm-7">
                        <h3>Single Room</h3>
                        <h5>Capacity:   1</h5>
                        <div class="smLine"></div>
                        <h5> Max Children:  3</h5>
                        <h5>Price:   <span style="color:#b19262"> $1,243.0   </span><span style="color:#ccc;font-size:14px;cursor: pointer" id="showbreakdown6">(veiw price breakdown)</span></h5>
                             <div class="breakdown close6">
                                <i class="fas fa-window-close close6"></i>                        
                            <table>
                                <tr>
                                    <td class="l3">Tue</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Wed</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Thu</td>
                                    <td class="l2">x4 Nights</td>
                                    <td class="l1">$150.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Fri</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sat</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$110.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Sun</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <tr>
                                    <td class="l3">Mon</td>
                                    <td class="l2">x3 Nights</td>
                                    <td class="l1">$330.0</td>
                                </tr>
                                <hr style="position:relative;top:235;">
                                <tr>
                                    <td class="l3">Total</td>
                                    <td class="l2">*vat is included</td>
                                    <td class="l1">$1,243.0</td>
                                </tr>
                            </table>
                            
                            
                            
                        </div>

                        <div class="clearfix"></div><h5>Quantity:  </h5>
                                <select id="quantity6" class="quantity" name="quantity" required style="display:inline-block" onchange="getselvalue6()">
                                  <option>Select</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                    
                                </select>
                           <div class="extra-option text-left"id="option6">
                                <h4> Optional Extras <i class="fas fa-angle-double-up"></i></h4>
                                <div class=" u-options container">
                                    <div class="row">
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="car-park"><span style="font-weight:500;">Car Park</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="wifi-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262">$11.4</span><i> /Room/Night </i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="wifi"><span  style="font-weight:500;">Wifi</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="park-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span style="color:#b19262;">$13.8</span><i> /Car/Night</i></span>
                                            <hr>
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <input type="checkbox" name="airport-transfer"><span  style="font-weight:500;">Airport Ttransfer</span>
                                            <h6 style="color:#aaa">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                            <select id="airport-quantity" class="quantity2" onchange="getselvalue()" required style="display:inline-block">
                                              <option>select</option>    
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>

                                            </select>
                                            <span><span  style="color:#b19262;">$13.8</span> <i>/Car/Night</i></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div>    
                            </div>
                        
                        <button class="btn btn-secondary btnselectroom" style="bacground-color:#b19262 ">select this room</button>
                            


                    </div>
                    
                </div>
                
            </div>
            
            
            
        </div>
        <div class="col-md-4"  id="fixed-div">
            
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bookingbox text-center">
                            <h4>Your Booking</h4>
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
                            <h6>Your cart is empty. </h6>
                    
                        </div>
                        <div class="col-sm-12">
                            <div class="reservebox text-center">
                                <h3>Your Reservation</h3>
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
                                <h6>Your cart is empty. </h6>
                                <form class="container" style="padding:20px 10px;" action="booking.php" method="post">
                                          <div class="form-row">
                                              <div class="form-group col-md-12"> <input name="checkIn" type="text" onfocus="(this.type='date')"  id="validationDefault01" class="form-control" placeholder="Check In" required> </div>
                                              <div class="form-group col-md-12"> <input name="checkOut"  id="validationDefault02" type="text" onfocus="(this.type='date')" class="form-control" placeholder="Check Out" required> </div>

                                          <div class="form-group col-md-12">
                                            <select  name="num_adult"class="custom-select" required  id="validationDefault03">
                                              <option value="">Adult</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                                          </div>

                                          <div class="form-group col-md-12">
                                            <select name="num_children"class="custom-select" required  id="validationDefault04">
                                              <option value="">Chilldren</option>
                                              <option value="1">One</option>
                                              <option value="2">Two</option>
                                              <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                                          </div>
                                              <div class="col-md-12"> <button class="btn btn-primary" type="submit" style="width:100%; background-color: #b19261;border-color:#b19261">Check Avability</button></div>
                                        </div>
 
                                  </form>
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            
            
        </div>
        
    </div>

    


</div>










<?php
    include "footer.php"
?>