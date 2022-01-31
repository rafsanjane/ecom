<?php require_once __DIR__ . '/../partials/header.php'; ?>
<?php
	$sql = "SELECT * FROM product_categories";
	$data = $connection->query($sql);
?>
<div class="card">
	<div class="card-header">
		<a href="create.php">
			<button class="btn btn-primary"><i class="bi bi-plus">Create</i></button>
		</a>
	</div>
	<div class="card-content">
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Category</th>
						<th scope="col">Image</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                    $srl_num=1;
					if ($data->num_rows > 0):
					// output data of each row
					foreach($data as $row):
					?>
					
					<tr>
						<th scope="row"><?php  echo $srl_num++;?></th>
						<td><?php echo $row['category_name'];?></td>
						<td><img src="func/<?php echo $row['category_image'];?>" height="75px" alt=""></td>
						
						<td>
							<a href="edit.php?id=<?php echo $row['category_id'];?>">Edit</a> | <a href="func/delete.php?id=<?php echo $row['category_id'];?>">Delete</a>
						</td>
					</tr>
					<?php endforeach; endif?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>



<?php require_once '../partials/footer.php' ?>