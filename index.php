

<!DOCTYPE html>
<html lang="en" id="html">
<head>
  <title>Bookings | Minicabee Travel Solutions</title>
    <link rel="icon" href="./images/favicon.png" type="image/x-icon"  sizes="16x16" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/index.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    
    <?php
    
      $rootfolder= $_SERVER['DOCUMENT_ROOT']; 
   
    
     include($rootfolder."/Britadmin/navbar/index_navbar.php"); ?>
   
 
<?php  include($rootfolder."/Britadmin/sidebar/index_sidebar.php"); ?>
 
    <div class="main-content">
           <div class="container1">
          <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
    	<div class="tabbable-line">
					<ul class="nav nav-tabs ">
            	<li>

                  <a href="#tab_default_1" data-toggle="tab">
                  Yesterday Bookings</a>

                  
                </li>
						<li class="active">
							<a href="#tab_default_2" data-toggle="tab">
							Today Bookings</a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Tomorrow Bookings</a>
						</li>
					 <li>
                <a href="#tab_default_4" data-toggle="tab">
                Future Bookings</a>
              </li>
					</ul>
					<div class="tab-content">
              <div class="tab-pane" id="tab_default_1">
                  <div id="yes">
                    <div class="row">
                        <div class="col-xs-9">
            <input type="text" id="myInput" class="controls" onkeyup="myFunction()" placeholder="Search for Bookings.." style="width:30%;margin-bottom:10px;" >
            </div><div class="col-xs-3"><br>Showing 281 Records</div> </div>
                    <table >
                      <thead class="header">
                        <th style="width:5%;">Ref Id</th>
                        <th style="width:20%;">Pickup From</th>
                        <th style="width:20%;">Dropoff To</th>
                        <th style="width:15%;">Date /Time</th>
                        <th style="width:15%;">Cab Type</th>
                        <th style="width:10%;">Total Fare</th>
                        <th style="width:10%;">Status</th>
                        <th style="width:5%;">Action</th>
                      </thead>
                      <tbody id="myTable">
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:rgb(23, 23, 255);font-weight:600;letter-spacing:0.5px;padding:5px;">Booked</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:red;font-weight:600;letter-spacing:0.5px;padding:5px;">Bidded</span></td>
                          <td><button class="btn btn-default">Edit</button></td>
                        </tr>
                        <tr>
                            <td>BRT1234</td>
                            <td>Gatwick Airport South Terminal</td>
                            <td>Heathrow Airport Terminal 5</td>
                            <td>2018-11-15 19:20:00</td>
                            <td>SALOON CAR x 1</td>
                            <td>£ 7.00</td>
                            <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                            <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                          </tr>
                          <tr>
                              <td>BRT1234</td>
                              <td>Gatwick Airport South Terminal</td>
                              <td>Heathrow Airport Terminal 5</td>
                              <td>2018-11-15 19:20:00</td>
                              <td>SALOON CAR x 1</td>
                              <td>£ 7.00</td>
                              <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                              <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                            </tr>
                          </tbody>       </table>
                  </div>
  </div>
						<div class="tab-pane active" id="tab_default_2">
                <div id="my_div">
                  <div class="row">
                    <div class="col-xs-9">
          <input type="text" id="myInput" class="controls" onkeyup="myFunction()" placeholder="Search for Bookings.." style="width:30%;margin-bottom:10px;" >
        </div><div class="col-xs-3"><br>Showing 281 Records</div> </div>
             <table >
                      <thead class="header">
                        <th style="width:5%;">Ref Id</th>
                        <th style="width:20%;">Pickup From</th>
                        <th style="width:20%;">Dropoff To</th>
                        <th style="width:15%;">Date /Time</th>
                        <th style="width:15%;">Cab Type</th>
                        <th style="width:10%;">Total Fare</th>
                        <th style="width:8%;">Status</th>
                        <th style="width:5%;">Action</th>
                      </thead>
                      <tbody id="myTable">
                           <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:rgb(23, 23, 255);font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Booked</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1334</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:green;font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Confirm</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:rgb(23, 23, 255);font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Booked</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:red;font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Bidded</span></td>
                          <td><button class="btn btn-default">Edit</button></td>
                        </tr>
                        <tr>
                            <td>BRT1234</td>
                            <td>Gatwick Airport South Terminal</td>
                            <td>Heathrow Airport Terminal 5</td>
                            <td>2018-11-15 19:20:00</td>
                            <td>SALOON CAR x 1</td>
                            <td>£ 7.00</td>
                            <td><span style="color:#ffffff;background-color:green;font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Confirm</span></td>
                            <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                          </tr>
                          <tr>
                              <td>BRT1234</td>
                              <td>Gatwick Airport South Terminal</td>
                              <td>Heathrow Airport Terminal 5</td>
                              <td>2018-11-15 19:20:00</td>
                              <td>SALOON CAR x 1</td>
                              <td>£ 7.00</td>
                              <td><span style="color:#ffffff;background-color:green;font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Confirm</span></td>
                              <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                            </tr>
                          </tbody> </table>
        </div>       
            </div>
            <div class="tab-pane" id="tab_default_3">
                <div id="tmrw">
                    <div class="row">
                        <div class="col-xs-9">
             <input type="text" id="myInput" class="controls" onkeyup="myFunction()" placeholder="Search for Bookings.." style="width:30%;margin-bottom:10px;" >
            </div><div class="col-xs-3"><br>Showing 281 Records</div> </div>
            
                    <table >
                      <thead class="header">
                        <th style="width:5%;">Ref Id</th>
                        <th style="width:20%;">Pickup From</th>
                        <th style="width:20%;">Dropoff To</th>
                        <th style="width:15%;">Date /Time</th>
                        <th style="width:15%;">Cab Type</th>
                        <th style="width:10%;">Total Fare</th>
                        <th style="width:10%;">Status</th>
                        <th style="width:5%;">Action</th>
                      </thead>
                      <tbody id="myTable">
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:red;font-weight:500;letter-spacing:0.5px;padding:5px;border-radius:4px;">Bidded</span></td>
                          <td><button class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:rgb(23, 23, 255);font-weight:600;letter-spacing:0.5px;padding:5px;">Booked</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:red;font-weight:600;letter-spacing:0.5px;padding:5px;">Bidded</span></td>
                          <td><button class="btn btn-default">Edit</button></td>
                        </tr>
                        <tr>
                            <td>BRT1234</td>
                            <td>Gatwick Airport South Terminal</td>
                            <td>Heathrow Airport Terminal 5</td>
                            <td>2018-11-15 19:20:00</td>
                            <td>SALOON CAR x 1</td>
                            <td>£ 7.00</td>
                            <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                            <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                          </tr>
                          <tr>
                              <td>BRT1234</td>
                              <td>Gatwick Airport South Terminal</td>
                              <td>Heathrow Airport Terminal 5</td>
                              <td>2018-11-15 19:20:00</td>
                              <td>SALOON CAR x 1</td>
                              <td>£ 7.00</td>
                              <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                              <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                            </tr>
                          </tbody>  </table>
         </div>       
              
</div>
            <div class="tab-pane" id="tab_default_4">
                <div id="month">
                    <div class="row">
                        <div class="col-xs-9">
            <input type="text" id="myInput" class="controls" onkeyup="myFunction()" placeholder="Search for Bookings.." style="width:30%;margin-bottom:10px;" >
            </div><div class="col-xs-3"><br>Showing 281 Records</div> </div>
                    <table >
                      <thead class="header">
                        <th style="width:5%;">Ref Id</th>
                        <th style="width:20%;">Pickup From</th>
                        <th style="width:20%;">Dropoff To</th>
                        <th style="width:15%;">Date /Time</th>
                        <th style="width:15%;">Cab Type</th>
                        <th style="width:10%;">Total Fare</th>
                        <th style="width:10%;">Status</th>
                        <th style="width:5%;">Action</th>
                      </thead>
                      <tbody id="myTable">
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:rgb(23, 23, 255);font-weight:600;letter-spacing:0.5px;padding:5px;">Booked</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                      <tr>
                          <td>BRT1234</td>
                          <td>Gatwick Airport South Terminal</td>
                          <td>Heathrow Airport Terminal 5</td>
                          <td>2018-11-15 19:20:00</td>
                          <td>SALOON CAR x 1</td>
                          <td>£ 7.00</td>
                          <td><span style="color:#ffffff;background-color:red;font-weight:600;letter-spacing:0.5px;padding:5px;">Bidded</span></td>
                          <td><button class="btn btn-default">Edit</button></td>
                        </tr>
                        <tr>
                            <td>BRT1234</td>
                            <td>Gatwick Airport South Terminal</td>
                            <td>Heathrow Airport Terminal 5</td>
                            <td>2018-11-15 19:20:00</td>
                            <td>SALOON CAR x 1</td>
                            <td>£ 7.00</td>
                            <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                            <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                          </tr>
                          <tr>
                              <td>BRT1234</td>
                              <td>Gatwick Airport South Terminal</td>
                              <td>Heathrow Airport Terminal 5</td>
                              <td>2018-11-15 19:20:00</td>
                              <td>SALOON CAR x 1</td>
                              <td>£ 7.00</td>
                              <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                              <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                            </tr>
                          </tbody>       </table>
         </div>       
              
</div>
					</div>


<!--right modal-content starts here-->

  <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title" id="myModalLabel2">Booking Information<span class="green"> (BRT12344)</span><span class="btn btn-default" style="float:right;margin:0px 10px;">Update</span></h4>
          </div>
  
          <div class="modal-body">
              <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td class="first">Passenger Name :</td>
                      <td class="first"><input typ="text" class="text" value="Amila Johnson"></td>
                    </tr>
                    <tr>
                      <td>Passenger Email :</td>
                      <td><input typ="text" class="text" value="amilajohnson@yahoo.co.in"></td>
                    </tr>
                    <tr>
                      <td>Passenger Contact :</td>
                      <td><input typ="text" class="text" value="+44 7344546748"></td>
                    </tr>
    
                           <tr>
                      <td>Pickup From :</td>
                      <td><input typ="text" class="text" value="Gatwick Airport North Terminal Approach"></td>
                    </tr>
                      <tr>
                      <td>Dropoff To : </td>
                      <td><input typ="text" class="text" value="Heathrow Airport Termial 5"></td>
                    </tr>
                    <tr>
                      <td>Pickup Date & Time :</td>
                      <td><input typ="text" class="text" value="13.10.2028 23:40"></td>
                    </tr>
                    <tr>
                        <td>Passengers :</td>
                        <td><input typ="text" class="text" value="2"></td>
                      </tr>
                      <tr>
                          <td>Luggages :</td>
                          <td><input typ="text" class="text" value="2"></td>
                        </tr>
                    <tr>
                      <td>Cab Type :</td>
                      <td><input typ="text" class="text" value="Saloon x 1"></td>
                    </tr>
                    <tr>
                        <td>Total Fare :</td>
                        <td><input typ="text" class="text" value="£41"></td>
                      </tr>
                      <tr>
                          <td>Driver Least Bid :</td>
                          <td><input typ="text" class="text" value="£32"></td>
                        </tr>
                      <tr>
                          <td>Booked On :</td>
                          <td><input typ="text" class="text" value="10-10-2018 12:30"></td>
                        </tr>
                        <tr>
                            <td>Booking Status :</td>
                            <td>Booked cab not yet Alloted</td>
                          </tr>
                          <tr>
                              <td>Driver Name :</td>
                              <td>Rahmaath Khan</td>
                            </tr>
                            <tr>
                                <td>Driver Contact :</td>
                                <td>+44 3456575895</td>
                              </tr>
                          <tr>
                              <td><button class="buttongreen">Confirm Booking</button></td>
                              <td><button class="buttonred">Cancel Booking</button></td>
</tr> 
</tbody></table>  
      <br><br><br>
<span class="title">Drivers Bidded</span><br><br>
<table class="table" >
    <tbody>
      <tr class="gray">
        <th>Name</th>
        <th>Cab Type</th>
        <th>Bid Amount</th>
        <th>Action</th>
      </tr>
      <tr>
          <td>Rahmath Khan</td>
          <td>saloon</td>
          <td>£32</td>
          <td><button class="buttonblue">Allocate</button></td>
        </tr>
          <tr>
          <td>Azwar Khan</td>
          <td>saloon</td>
          <td>£32</td>
          <td><button class="buttonblue">Allocate</button></td>
        </tr>
    
    </tbody></table>
              <br><br><br>
              <span class="title">Manual Allocation</span><br><br>
              <table class="table">
               <tbody>
      <tr class="gray">
        <th>Driver Name</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
                   <tr>
          <td><select class="selectit" required="required"  placeholder="passengers" name="type">
    <option value="2">Azhwar Khan</option>
    <option value="3">Riyas Khan</option>
    <option value="4"> Estate</option>
          <option value="6"> People Carrier</option>
          <option value="7"> Executive People Carrier</option>
          <option value="8">8-Seater</option>
          
        </select> </td>
          <td><input type="text" class="controls" required="required" name="amt" value="£32"></td>
          <td><button class="buttongreen">Allocate</button></td>
        </tr>
              
              </table>
              <br><br><br>
              <span class="title">Text Message</span>
                <form class="form-horizontal" action="" style="padding:10px;margin-top:20px;">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Contact Number:</label>
      <div class="col-sm-8">
        <input type="text" class="controls"  style="width:100%" placeholder="Enter Contact Number" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="">Text Message</label>
      <div class="col-sm-8">          
           <textarea class="controls" rows="9" style="width:100%;min-height:200px;" id="comment"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <center><button type="submit" class="buttonblue">Send Messsage</button></center>
      </div>
    </div>
  </form>
              
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
      </div><!-- modal --></div></div>
    
    </div>
    
    </div>

<script>$('.btn-expand-collapse').click(function(e) {
				$('.navbar-primary').toggleClass('collapsed');
});</script>
      <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
        </script>
    
    
          <script type="text/javascript">
        setInterval("my_function();",30000); 
        function my_function(){
          $('#my_div').load(location.href + ' #my_div');
        }
      </script> 
       <script type="text/javascript">
        setInterval("tmrw_function();",30000); 
        function tmrw_function(){
          $('#tmrw').load(location.href + ' #tmrw');
        }
      </script> 
      <script type="text/javascript">
        setInterval("month_function();",30000); 
        function month_function(){
          $('#month').load(location.href + ' #month');
        }
      </script> 
    
    <script>$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})</script>
    
      <script>
                              $(document).ready(function(){
                                $("#myInput").on("keyup", function() {
                                  var value = $(this).val().toLowerCase();
                                  $("#myTable tr").filter(function() {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                  });
                                });
                              });
                              </script>
    </body></html>