<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
    </head>
        <style>
        	fieldset{
        		width:50px;
        		margin-top:10%;
        		margin-left:35%;
        		background-color:rgba(111,222,142,0.7);  
        	}
        	body{
      			background-color:#fefbd8;
      			background-image: url(../img/2.jpg);
      			background-size:cover; 
   				 }  

        </style>
	</head>
	<body>
		<ul>
		<li><a href="<?php echo base_url()?>main/homepage">Back to Home </a></li>
	</ul>
		
		<form method="post" action="<?php echo base_url()?>main/login" class="">
			<fieldset>
				<legend><h1>Login</h1></legend>
			<table>

			<tr>
				<td><h2>Email id:<h2></td>
			    <td><input type="email" name="email"></td>
			<tr>
				<td><h2>Password:</h2></td>
			   <td><input type="password" name="password"></td>
			</tr>  
			<tr>			
				<td ><input type="submit" name="submit" value="login" ></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url()?>main/forgotpassword">Reset Password</a></td>
		</tr>
			</table>
            </fieldset>
	</form>
	</body>	
</html>  