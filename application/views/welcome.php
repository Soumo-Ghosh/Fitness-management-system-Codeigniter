<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  
  
  
  
  <body style="background: url(<?php echo base_url();?>gym/images/7.jpg); background-size: 100% 115%;">
  
         
 <center><div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <center><a href="<?php echo base_url();?>index.php/MyController/addmember" class="list-group-item active"
                   >Add Members</a>
                <a href="<?php echo base_url();?>index.php/MyController/fetch" class="list-group-item">Registered Members</a>
                
            </div>
            <hr>
            <div class="list-group">
			<center>
<a href="<?php echo base_url();?>index.php/MyController/addtrainer" class="list-group-item active">Add Trainers </a>   
<a href="<?php echo base_url();?>index.php/MyController/trainerfetch" class="list-group-item active">Registered Trainers</a>             
         
            </div>      
            
        </div>
        
		
		
      <div class="col-md-1"></div>
      </div>
    <header>

    <a href="<?php echo base_url();?>index.php/MyController/logoutadmin" class="btn btn-light" style="background-color:#000000;color:#FFFFFF">Logout</a>
    </header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>