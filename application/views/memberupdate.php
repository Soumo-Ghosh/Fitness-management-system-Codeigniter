<?php
foreach($records as $r)
{
?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body style="background: url(<?php echo base_url();?>gym/images/1.jpg); background-size: 85% 115%;">



<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#000000;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="<?php echo base_url();?>index.php/MyController/welcome/" class="btn btn-light ">Go Back</a>
             </div>
             </div>
     <div class="card-body" style="background-color:#000000;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>  
        </thead>
        <tbody>
          <br />
        </tbody>
    </table>
    <div class="card-body" style="background-color:#000000;color:FFFFFF;">
                <h3>Member update</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="<?php echo base_url();?>index.php/Mycontroller/updatedo" method="post">
                <label>Name</label>
<input type="text" name="name" value="<?php echo $r->name;?>" class="form-control"><br>
                <label>Email</label>
                    <input type="email" name="email" value="<?php echo $r->email;?>" class="form-control"><br>
                    <label>Phone</label>
<input type="number" name="phone" value="<?php echo $r->phone;?>" class="form-control"><br>
                    <label>Password</label>
<input type="password" name="password" value="<?php echo $r->password;?>" class="form-control"><br>
                    <label>Payment</label>
<input type="number" name="payment" value="<?php echo $r->payment;?>" class="form-control"><br>
                    
<input type="hidden" name="id" value="<?php echo $r->id;?>" class="form-control"><br>  
<input type="submit" class="btn btn-primary" name="tra_submit" value="Update">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
<?php
}
?>