<?php
 session_start();
 require('top.inc.php');
 $servername = "localhost:3306";
 $username = "root";
 $password = "";
 $dbname = "project";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 // Check connection
 if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
 }
?>

<?php

$categories='';
$subcategories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($conn,$_GET['id']);
	$res=mysqli_query($conn,"select * from categories where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
		$subcategories=$row['sub_catagory'];
	}else{
		header('location:categories.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($conn,$_POST['categories']);
	$subcategories=get_safe_value($conn,$_POST['subcategories']);
	$res=mysqli_query($conn,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($conn,"update categories set categories='$categories', sub_catagory='$subcategories' where id='$id'");
		}else{
			mysqli_query($conn,"insert into categories(categories, sub_catagory, status) values('$categories', '$subcategories', '1')");
		}
		header('location:categories.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
								</div>
								<div class="form-group">
									<label for="subcategories" class=" form-control-label">Main category</label>
									<input type="text" name="subcategories" placeholder="Enter subcategory name" class="form-control" required value="<?php echo $subcategories?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>
