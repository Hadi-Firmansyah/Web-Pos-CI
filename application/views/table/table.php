		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h2 mb-0 text-gray-800">Entri Table</h1>
			</div>

			<div>
				<button class="btn btn-primary mb-3" style="width:15%;" type="button" data-toggle="modal" data-target="#exampleModal">Add Table</button>
			</div>

			<table id="table_id" class="table">
				<thead align="center">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
						
					</tr>
				</thead>

				<tbody align="center">
					<tr>
						<td></td>
						<td></td>
						<td>
							<div>
								<a href="#">
									<button class="btn btn-success" style="width:20%;">Edit</button></a>
							</div>
							<div class="mt-2">
								<a href="#">
									<button class="btn btn-danger" style="width:20%;">Delete</button></a>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<center><b>Nothing !</b></center>
						</td>
					</tr>
				</tbody>

			</table>

			<!-- Modal Add Data -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Foods</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row justify-content-center">
								<div class="card text-center">
									<div class="card-body">
										<form action="<?php echo base_url('Foods/foods_save')?>" method="POST"
											enctype="multipart/form-data">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<input type="text" name="price" class="form-control" placeholder="Price">
											</div>
											<div class="form-group">
												<input type="number" name="stock" class="form-control" placeholder="Stock">
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
			</div>


		</div>
		<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
