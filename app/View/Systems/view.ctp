<div class="col-lg-12">
	<h1 class="page-header">UAV Systems</h1>
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
							<th>Name</th>
							<th>Type</th>
							<th>Description</th>
							<th>Created</th>
							<th>View Parts</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($systems as $system)  {  ?>
						<tr class="odd gradeX">
							<td><?php echo $system['System']['name']; ?></td>
							<td><?php echo $system['System']['type']; ?></td>
							<td><?php echo $system['System']['description']; ?></td>
							<td><?php echo $system['System']['created']; ?></td>
							<td><a href="<?php echo $system['System']['id']; ?>">View</a></td>
							<td></td>
							<td class="center"><?php if($role == 'admin') { ?><a href="/dashboards/delete_log/<?php echo $system['System']['id']; ?>">delete</a><?php } ?></td>
						</tr>
					<?php }  ?>
					</tbody>
				</table>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>