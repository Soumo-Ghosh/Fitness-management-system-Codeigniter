<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  
  
  
  
  <body style="background: url(<?php echo base_url();?>gym/images/10.jpg); background-size: 100% 115%;">
      
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                
                
            </div>
            <hr>     
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#000000;color:#FFFFFF;">
                <center><h3>Register new Member</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="<?php echo base_url();?>index.php/MyController/memberdosignup" method="post">
                    <label><h6>Member name:<h6></label>
<input type="text" name="name" class="form-control"><br>
                    <label>Member Email:</label>
<input type="email" name="email" class="form-control"><br>
                    <label>Member Phone:</label>
<input type="number" name="phone" class="form-control"><br>        
                    <label>Member Password:</label>
<input type="password" name="password" class="form-control"><br>
       
     </select>
        <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <form action="includes/index.php" method="POST">
                              
                               						
				                </form>					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>