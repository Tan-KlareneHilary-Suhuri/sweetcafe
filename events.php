<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<table class="table table-bordered">
		<thead>
			 <tr>

			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Comments</th>
		 
			</tr>
		</thead>
		<tbody>
			<?php 
			$i = 1;
			include 'db_connect.php';
			$qry = $conn->query("SELECT * FROM contactus ");
			while($row=$qry->fetch_assoc()):
			 ?>
			 <tr>
			 		<td><?php echo $i++ ?></td>
			 		<td><?php echo $row['name'] ?></td>
			 		<td><?php echo $row['email'] ?></td>
			 		<td><?php echo $row['phone'] ?></td>
			 		<td><?php echo $row['comments'] ?></td>
			 		 
			 </tr>
			<?php endwhile; ?>
		</tbody>
	</table>
		</div>
	</div>
	
</div>
<script>
	 
	$('.delete_comment').click(function(){
		_conf("Are you sure to delete this comment?","delete_comment",[$(this).attr('data-id')])
	})
	function delete_comment($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_comment',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>