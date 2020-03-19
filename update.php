<?php
 $id = $_GET['id'];
 
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
 
 $jsoncat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
 $datacat = json_decode($jsoncat,true);
	
 $listcat = $datacat['records'];
?>

	  
	    <div class ="content"> 
				<div class="form-style-6">
							<h1> UPDATE PRODUCT HERE!</h1>
							
							<form action="updateprod.php?id=<?php echo $id ?>" method="POST">
							Product Name:<br><input type="text" name="name" placeholder="<?php echo $result['name']; ?>"/><br><br>
							Description:<br><input type="text" name="description" placeholder="<?php echo $result['description']; ?>"/><br><br>
							Price:<br><input type="text" name="price" placeholder="<?php echo $result['price']; ?>"/><br><br>
							Category: <br><select name="category"/><br><br>
						
						<?php
						foreach($listcat as $resultcat){
						?>
							<option value="<?php echo $resultcat['id']?>"><?php echo $resultcat['name']?></option>
						<?php
						}
						?>
						</select>
							
							
							<input type="submit" name="submit" value="Submit"/>

						</form>
				</div>
			 
		</div> 
