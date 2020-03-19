


	    <div class ="content"> 
		<ul class="profile-wrapper">
			<li>
				<!-- user profile -->
				<div class="profile">
				<img src="<?php echo $_SESSION["user_image"] ?>"/>
					<a class="name"><i>Welcome!!</i> <br> <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?></a>
					
					<!-- more menu -->
					<ul class="menu">
						<li><a>Email: <?php echo $_SESSION['user_email_address'] ?></a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>
				</div>
			</li>
		</ul>
			<br>
				 <?php
				$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
				$data = json_decode($json,true);
		 
				$list = $data['records'];
					?>
				<table align="center">
			<tr>
			  <th>Name</th>
			  <th>Description</th>
			</tr>
			<?php
			  foreach($list as $result){
			?>
			<tr>
			 <td> <?php echo $result['name']; ?></a> </td>
			 <td> <?php echo $result['description']; ?></a> </td>
			</tr>
			<?php
			  }
			?>
		  </table>
		 
		</div> 
	  
