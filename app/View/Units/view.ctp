                <div class="col-lg-12">
                    <h1 class="page-header">Units</h1>
                </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
											<th>Modified</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($units as $logs)  {  ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $logs['Unit']['created']; ?></td>
                                            <td><?php echo $logs['Unit']['name']; ?></td>
											<td><?php echo $logs['Unit']['modified']; ?></td>
											<td class="center"><?php if($role == 'admin') { ?><a href="/logs/delete_log/<?php echo $logs['Unit']['id']; ?>">delete</a><?php } ?></td>
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