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


if (isset($_GET['type']) && $_GET['type'] != '') {
	$type = get_safe_value($conn, $_GET['type']);
	if ($type == 'status') {
		$operation = get_safe_value($conn, $_GET['operation']);
		$id = get_safe_value($conn, $_GET['id']);
		if ($operation == 'active') {
			$status = '1';
		} else {
			$status = '0';
		}
		$update_status_sql = "update categories set status='$status' where id='$id'";
		mysqli_query($conn, $update_status_sql);
	}

	if ($type == 'delete') {
		$id = get_safe_value($conn, $_GET['id']);
		$delete_sql = "delete from categories where id='$id'";
		mysqli_query($conn, $delete_sql);
	}
}

$sql = "select * from categories order by categories asc";
$res = mysqli_query($conn, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col">
								<h4 class="box-title">Categories:</h4>
							</div>
							<div class="col-auto">
								<a href="manage_categories.php" class="btn btn-success"><i class="fa fa-plus"
										aria-hidden="true">&nbsp;</i>Add New Categories</a>
							</div>
						</div>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th class="serial">#</th>
										<th>ID</th>
										<th>Categories</th>
										<th>Sub Catagory</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($row = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<td class="serial">
												<?php echo $i ?>
											</td>
											<td>
												<?php echo $row['id'] ?>
											</td>
											<td>
												<?php echo $row['categories'] ?>
											</td>
											<td>
												<?php echo $row['sub_catagory'] ?>
											</td>
											<td>
												<?php
												if ($row['status'] == 1) {
													//echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
												} else {
													//echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
												}
												echo "<span class='badge badge-edit'><a href='manage_categories.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";

												echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";

												?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.inc.php');
?>