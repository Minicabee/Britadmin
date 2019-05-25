

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
    
    echo($_REQUEST["load"]);
   
    
    $today= date("Y-m-d");
  
    
      // index.php?load=
    $yesterday= date("Y-m-d", strtotime(' -1 day'));
 
 
  $tomorrow= date("Y-m-d", strtotime(' +1 day'));
       
             
              $month= date("Y-m-d", strtotime(' +30 day'));
    
    if($_REQUEST["load"]=="today")
    {
        $query="SELECT * from register WHERE dt = ".$today." ORDER BY time ASC";
          $result= mysqli_query($conn,$query);
    }
    if($_REQUEST["load"]=="yesterday")
    {
        $query="SELECT * from register WHERE dt = ".$yesterday." ORDER BY time ASC";
          $result= mysqli_query($conn,$query);
    }
    if($_REQUEST["load"]=="tomorrow")
    {
        $query="SELECT * from register WHERE dt = ".$tomorrow." ORDER BY time ASC";
          $result= mysqli_query($conn,$query);
    }
    if($_REQUEST["load"]=="month")
    {
        $query="SELECT * from register WHERE dt >= ".$today." AND dt <= ".$month." ORDER BY time ASC";
          $result= mysqli_query($conn,$query); 
    }
      if($_REQUEST["load"]=="mysearch")
    {
        
    }
    
    $query1="SELECT * from driver WHERE 1";
      $result_drv= mysqli_query($conn,$query1); 
    
    $driverinfo="";
     
     while ($row_drv= mysqli_fetch_array($result_drv,MYSQLI_ASSOC))
     {
         $temp=$row_drv[""];
         $driverinfo[$temp]=
         
     }
   
    include($rootfolder."/Britadmin/connection/connect.php"); 
    
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

                  <a href="<?php echo("index.php?load=today") ?>" >
                  Yesterday Bookings</a>

                  
                </li>
						<li class="active">
							<a href="<?php echo("index.php?load=yesterday") ?>">
							Today Bookings</a>
						</li>
						<li>
							<a href="<?php echo("index.php?load=tomorrow") ?>">
							Tomorrow Bookings</a>
						</li>
					 <li>
                <a href="<?php echo("index.php?load=month") ?>">
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
                     
                    <?php
    
     while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
     {
         
         $refid=$row["refid"];
                    $pname=$row["name"];
     $number1=$row["num1"];
      $number2=$row["num2"];
     $src=$row["src"];
     $des=$row["des"];
     $tm=$row["time"];
         
    $book_date=$row["dt"];
         
     $status=$row["status"];
     $fare=$row["fare"];
      $np=$row["passenger"];
       $nl=$row["luggage"];
       $type=$row["type"];
       $info=$row["info"];
        $flight=$row["location"];
        $email=$row["mail"];
        $dfare=$row["dfare"];
        $via=$row["via"];
       
       $pm=$row["pay"];
       
        $drvid=$row["drvid"];       
                          ?>
                          <tr>
                          <td><?php echo($refid); ?></td>
                          <td><?php echo($src); ?></td>
                          <td><?php echo($des); ?></td>                     
                          <td><?php echo($book_date." / ".$tm); ?></td>
                          <td><?php echo($type); ?></td>
                        <td>£ <?php echo($fare); ?></td>
                          <td><span style="color:#ffffff;background-color:green;font-weight:600;letter-spacing:0.5px;padding:5px;">Confirm</span></td>
                          <td><button data-toggle="modal" data-target="#myModal2" class="btn btn-default">Edit</button></td>
                        </tr>
                          
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
                      <td class="first"><input type="text" class="text" value="<?php echo($pname); ?>"></td>
                    </tr>
                    <tr>
                      <td>Passenger Email :</td>
                      <td><input type="text" class="text" value="<?php echo($email); ?>"></td>
                    </tr>
                    <tr>
                      <td>Passenger Contact :</td>
                      <td><input type="text" class="text" value="<?php echo($number1." / ".$number2); ?>"></td>
                    </tr>
    
                           <tr>
                      <td>Pickup From :</td>
                      <td><input type="text" class="text" value="<?php echo($src); ?>"></td>
                    </tr>
                      <tr>
                      <td>Dropoff To : </td>
                      <td><input type="text" class="text" value="<?php echo($des); ?>"></td>
                    </tr>
                    <tr>
                      <td>Pickup Date & Time :</td>
                      <td><input type="text" class="text" value="<?php echo($book_date." / ".$tm); ?>"></td>
                    </tr>
                    <tr>
                        <td>Passengers :</td> $
                        <td><input type="text" class="text" value="<?php echo($np); ?>"></td>
                      </tr>
                      <tr>
                          <td>Luggages :</td>
                          <td><input type="text" class="text" value="<?php echo($nl); ?>"></td>
                        </tr>
                    <tr>
                      <td>Cab typee :</td> 
                      <td><input type="text" class="text" value="<?php echo($type); ?>" ></td>
                    </tr>
                    <tr>
                        <td>Total Fare :</td>
                        <td><input type="text" class="text" value="£<?php echo($fare); ?>"></td>
                      </tr>
                      <tr>
                          <td>Driver Least Bid :</td>
                          <td><input type="text" class="text" value="£<?php echo($fare); ?>"></td>
                        </tr>
                      <tr>
                          <td>Booked On :</td>
                          <td><input type="text" class="text" value="<?php echo("booked date"); ?>"></td>
                        </tr>
                        <tr>
                            <td>Booking Status :</td>
                            <td><?php echo("Booking Status"); ?></td>
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
      </div><!-- modal --></div>
               
     <?php
         
     }
         ?>
                          
                          
                    
                          </tbody>       </table>
                  </div>
  </div>
					
					</div>


<!--right modal-content starts here-->

               </div>
    
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