<div class="col-lg-12">
	<h1 class="page-header">Crew Members</h1>
</div>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Profile Pic</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>ID #</th>
							<th>Date Added</th>
							<th>Unit</th>
							<th>Role In Unit</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($crew as $crew_members)  {  ?>
						<tr class="odd gradeX">
							<td><img src="/files/<?php echo $crew_members['Member']['profile_pic']; ?>" class="pro-img"/></td>
							<td><?php echo $crew_members['Member']['first_name']; ?></td>
							<td><?php echo $crew_members['Member']['last_name']; ?></td>
							<td><?php echo $crew_members['Member']['id_number']; ?></td>
							<td><?php echo $crew_members['Member']['created']; ?></td>
							<td><?php echo $crew_members['Unit']['name']; ?></td>
							<td><?php echo $crew_members['Role']['name']; ?></td>
							<td class="center"><?php if($role == 'admin') { ?><a href="/dashboards/delete_log/<?php echo $crew_members['Member']['id']; ?>">delete</a><?php } ?></td>
						</tr>
					<?php }  ?>                                    </tbody>
				</table>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>