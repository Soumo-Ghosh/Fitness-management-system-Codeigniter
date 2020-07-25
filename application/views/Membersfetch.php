<!DOCTYPE html>
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
  
             </div>
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="trainer_search.php" method="post">
          <div class="row">           
                 </form></div></div></div>
     <div class="card-body" style="background-color:#000000;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
		 <th>Payment</th>
		 <th>Attendence</th>
		 <th>Action</th>
        </tr> 
<?php foreach($records as $r)
{
?>	
    <tr><td><?php echo "$r->name";?></td><td><?php echo "$r->email";?></td><td><?php echo "$r->phone";?></td><td><?php echo "$r->payment";?></td><td><?php echo "$r->Attendence";?></td>
		<td><?php echo "<a href=".base_url()."index.php/MyController/memberdel/".$r->id.">Delete</a>|<a href=".base_url()."index.php/MyController/memberupdate/".$r->id.">update</a>";?></td></tr>
	
<?php
}
?>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>