<?php
	$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	
	$list = $data['records'];
?>


	
	    <div class ="content"> 
			<br>
				<div class="form-style-6">
							<h1> ADD PRODUCT HERE!</h1>
							
					<form action="addprod.php" method="POST">
							Product Name:<br><input type="text" name="name" placeholder="Name..."/><br><br>
							Description:<br><input type="text" name="description" placeholder="Description..."/><br><br>
							Price:<br><input type="text" name="price" placeholder="Price..."/><br><br>
							Category: <br><select name="category"/><br><br>
						<?php
						foreach($list as $result){
						?>
							<option value="<?php echo $result['id']?>"><?php echo $result['name']?></option>
						<?php
						}
						?>
						</select>
							<input type="submit" name="submit" value="Submit"/>

					</form>
		
				</div>
		</div> 

