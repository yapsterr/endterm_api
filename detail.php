<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>

<link rel="stylesheet" type="text/css" href="psalm/style.css">

<body>
<div class = "container">

					<div class = "option">
						<a href="index.php?page=update&id=<?php echo $id?>"> Update Product</a>
						<a href="delete.php?id=<?php echo $id?>"> Delete Product</a>
					</div>
</div>


	    <div class ="content"> 
        <br>
  <table align="center">
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Description</th>
    </tr>
    <tr>
      <td> <?php echo $result['name']; ?> </td>
      <td><?php echo $result['price']; ?> </td>
      <td><?php echo $result['category_name']; ?> </td>
      <td><?php echo $result['description'];?> </td>
   </tr>
  </table>
	 
		</div> 
	  </div>