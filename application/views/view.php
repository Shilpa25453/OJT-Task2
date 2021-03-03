<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
		}
		.bi1{
			background-image:url("../img/ij.jpg");
			background-size:cover;

		}

	</style>
	</head>
	<body class="bi1">
		<ul>
		<li><a href="<?php echo base_url()?>main/loginform">Back to login page </a></li>
	</ul>
		<h1>Admin Home</h1>
    	
		<table>
			<thead>
			  <tr>	
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mobile number</th>
				<th>user name</th>
				<th>Email id</th>
				<th colspan="3">Action</th>
		       </tr>
		    </thead>
		    <tbody>
		    	<?php
			        if($n->num_rows()>0)  
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
			  					<td><?php echo $row->fname;?></td>
			  					<td><?php echo $row->lname;?></td>
			  					<td><?php echo $row->number;?></td>
			  					<td><?php echo $row->uname;?></td>
			  					<td><?php echo $row->email;?></td>
			  					
			  					<?php
			  						if($row->status==1)
			  						{
			  							?>
			  							<td>Approved</td>
			  							<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
			  							<?php
			  						}
			  						elseif($row->status==2)
			  						{
			  							?>
			  							<td>rejected</td>
			  							<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
			  							<?php
			  						}
			  						else
			  						{
			  							?>

			  					<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
			  					<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
			  					
			  				<?php
			  			}
			  			?>
			  			<td><a href="<?php echo base_url()?>main/deletedetails/<?php echo $row->id;?>">Delete</a></td>
			  			<?php
                    }
			  		}
			  		?>
		         
		    </tbody>


				
		   </table>
	</form>
	</body>	
</html>