<!DOCTYPE html>
<html>
    <head>
        <title>forgot password</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <style>
      h1{
        text-decoration: underline;
        color:red;
      }
    </style>

        <body>
                <?php 
                if($error=$this->session->flashdata('msg'))
                {
                ?>
                <p style="color:red"><strong>Successs</strong><?php echo $error;
                        ?></p>
                        <?php }
                        ?>
<h1 class="text-center">Forgot Password</h1>
<div class="container">
  <div class="row py-5">
    <div class="col-4 ">
        <img src="../img/p2.png">
  </div> 
    <div class="col-4 py-5">
       
<form action="<?php echo base_url(); ?>main/sends" method="post" class="form-control border border-2 p-5">
    <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
    
    <button type="submit" class="btn btn-primary">Reset Password</button>
</form> 

    </div> 
    <div class="col-4">
    </div>
</div>     
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body> 
</html>