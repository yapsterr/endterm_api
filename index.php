<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
 
  include('google_login_confirm.php');
  if($login_button == true){
    include('facebook_login_confirm.php');
  }
?>
	<link rel="stylesheet" type="text/css" href="psalm/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<div class = "container">

	<div id="header">
				<div class="nav-menu">
				  	<li <?php if($load == 'home') {echo 'class="active"';} ?>><a href="index.php?page=home"> Home</a> </li>
				  	<li <?php if($load == 'list') {echo 'class="active"';} ?>><a href="index.php?page=list" > Product List</a></li>
				  	<li <?php if($load == 'categories') {echo 'class="active"';} ?>><a href="index.php?page=categories">Product Categories</a></li>
					<li <?php if($load == 'add') {echo 'class="active"';} ?>> <a href="index.php?page=add"> Add Product</a> </li>

					
					
				</div>
	</div>
	
	    <div class ="content">
		    
	<?php
	if($login_button == ''){
	 switch ($load) {
	 	case 'list':
			require_once('list.php');
			break;
		case 'detail':
			 require_once('detail.php');
			break;
		case 'categories':
			require_once('categories.php');
			break;
        	case 'add':
        		require_once('add.php');
        		break;
        	case 'update':
            		require_once('update.php');
			break;
		case 'home':
			require_once('home.php');
			break;		
		default:
			require_once('home.php');
			break;
		}
	}else{
	  echo '<div align="center">'.$login_button . '</div>';
	}
	?>
	<?php
		if(isset($facebook_login_url)){
            		echo '<div align="center">' .$facebook_login_url. '</div>';
           		 }else{
		 switch ($load) {
	 		case 'list':
				 require_once('list.php');
				 break;
			case 'detail':
				 require_once('detail.php');
				 break;
			case 'categories':
				require_once('categories.php');
			    	break;
        		case 'add':
        			require_once('add.php');
        			break;
        		case 'update':
            			require_once('update.php');
				break;
			case 'home':
				require_once('home.php');
				break;		
			default:
				require_once('home.php');
				break;
		}
			}	
	?>	
		</div> 
	  
</div>
