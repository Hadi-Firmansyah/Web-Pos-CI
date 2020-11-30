		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h2 mb-0 text-gray-800">User</h1>
			</div>

			<!-- <div>
				<button class="btn btn-primary mb-3" style="width:15%;" type="button" data-toggle="modal" data-target="#exampleModal">Add
					User</button>
			</div> -->

			<table id="table_id" class="table">
				<thead align="center">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Username</th>
						<th scope="col">Password</th>
						<th scope="col">ID Level</th>
                        <th scope="col">Action</th>
					</tr>
				</thead>

				<tbody align="center">
					<?php
          			if($c_user>0){
            		foreach($g_user as $datas){
          		?>
					<tr>
						<td><?php echo $datas->id;?></td>
						<td><?php echo $datas->name;?></td>
						<td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->id_level;?></td>
						<td>
							<div>
								<a href="<?php echo site_url('User/user_edit/'.$datas->id);?>">
									<button class="btn btn-success" style="width:100%;">Edit</button></a>
							</div>
							<div class="mt-2">
								<a href="<?php echo site_url('User/user_delete/'.$datas->id);?>">
									<button class="btn btn-danger" style="width:100%;">Delete</button></a>
							</div>
						</td>
					</tr>
					<?php } } else { ?>

					<tr>
						<td colspan="9">
							<center><b>Nothing !</b></center>
						</td>
					</tr>

					<?php } ?>
				</tbody>

			</table>

			<!-- Modal Add Data -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row justify-content-center">
								<div class="card text-center">
									<div class="card-body">
										<form action="<?php echo site_url('Auth/user_register');?>" method="POST"
											enctype="multipart/form-data">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<input type="text" name="username" class="form-control" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Password">
											</div>
                                            <div class="form-group">
                                                <select name="id_level" id="id_level" class="form-control">
                                                    <option disabled>Select...</option>
                                                    <?php foreach ($take_level as $level) : ?>
                                                    <option value="<?php echo $level->id; ?>"> <?php echo $level->level;?> </option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                
											</div>

											<div class="form-group">
												<button class="btn btn-primary" type="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>

						</div>

					</div>
				</div>
                <!-- End Modal -->
			</div>


		</div>
		<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
