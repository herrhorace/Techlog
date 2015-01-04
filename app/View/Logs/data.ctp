                <div class="col-lg-12">
                    <h1 class="page-header">Flight logs</h1>
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
                                            <th>Title</th>
											<th>Modified</th>
                                            <th>Location</th>
                                            <th>Flight Log</th>
                                            <th>Flight Map</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($data as $logs)  {  ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $logs['Log']['created']; ?></td>
                                            <td><?php echo $logs['Log']['title']; ?></td>
											<td><?php echo $logs['Log']['modified']; ?></td>
                                            <td><?php echo $logs['Log']['location']; ?></td>
                                            <td class="center"><a href="/files/<?php echo $logs['Log']['log']; ?>">Download .ilog</a></td>
                                            <td class="center"><a href="/files/<?php echo $logs['Log']['kmz']; ?>">Download .kmz</a></td>
											<td class="center"><?php if($role == 'admin') { ?><a href="/dashboards/delete_log/<?php echo $logs['Log']['id']; ?>">delete</a><?php } ?></td>
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