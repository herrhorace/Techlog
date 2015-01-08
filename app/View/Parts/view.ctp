<div class="col-lg-12">
	<h1 class="page-header">UAV Parts</h1>
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
							<th>Brand</th>
							<th>Description</th>
							<th>Created</th>
							<th>Status</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($parts as $part)  {  ?>
						<tr class="odd gradeX">
							<td><?php echo $part['Part']['name']; ?></td>
							<td><?php echo $part['Part']['brand']; ?></td>
							<td><?php echo $part['Part']['description']; ?></td>
							<td><?php echo $part['Part']['created']; ?></td>
							<td></td>
							<td class="center"><?php if($role == 'admin') { ?><span><a href="/dashboards/delete_log/<?php echo $part['Part']['id']; ?>">delete</a></span><?php } ?><span><a href="/dashboards/delete_log/<?php echo $part['Part']['id']; ?>">view</a></span></td>
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