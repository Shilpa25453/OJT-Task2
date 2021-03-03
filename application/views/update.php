<!DOCTYPE html>
<html>
<head>
	<title>updation</title>
	<style>
		/*fieldset{
			padding: 5px;
			margin-left:100px;
			text-align:center;
		}
		input{
			padding:10px;
			margin-top: 5px;
			text-align:center;
		}
		textarea{

			margin-top: 5px;
			text-align:center;
		}*/
        body
        {
             background-image: url('../img/5.jpg');
            background-size:cover; 
        }


	</style>
     <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
</head>
<body>
    <a href="<?php echo base_url()?>main/user_dashboard">Back To Home</a>
    <div class="container">
        <div class="row">
            <div class="col-6">
	<form action="<?php echo base_url()?>main/updatdetails" method="POST"class="form-control form-group">
       <?php
        if(isset($user_data))
        {
            foreach($user_data->result() as $row1) 
            {
                ?>

		<h3 class="h3 text-warning">Update Details</h3>
		<input type="text" name="fname" placeholder="First Name" value="<?php echo $row1->fname;?>"class="form-control"></br>

        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $row1->lname;?>"class="form-control"></br>

        <input type="email" name="email" placeholder="Email Address" value="<?php echo $row1->email;?>"class="form-control"></br>

        <input type="text" name="number" placeholder="Phone Number" value="<?php echo $row1->number;?>"class="form-control"></br>

        <input type="date" name="dob" placeholder="Date Of Birth" value="<?php echo $row1->dob;?>"class="form-control"></br>

        <input type="text" name="addr" placeholder="Address" value="<?php echo $row1->addr;?>"class="form-control"></br>

        <input type="text" name="dis" placeholder="District" value="<?php echo $row1->dis;?>"class="form-control"></br>

        <input type="text" name="pin" placeholder="Pin Number" value="<?php echo $row1->pin;?>"class="form-control"></br>

        <input type="text" name="uname" placeholder="User Name" value="<?php echo $row1->uname;?>"class="form-control"></br>

        <input type="text" name="password" placeholder="password" value="<?php echo $row1->password;?>"class="form-control"></br>

	    <input type="hidden" name="id" value="<?php echo $row1->id; ?>">
        <button type="submit" name="update"  value="update">Update</button>

         </form>
    <?php
}
    }
?>
  

  
</body>
</html>