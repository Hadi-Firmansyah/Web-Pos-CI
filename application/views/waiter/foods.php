		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h2 mb-0 text-gray-800">Foods / <small>Order</small></h1>
			</div>

			<table id="table_id" class="table">
				<thead align="center">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Category</th>
						<th scope="col">Price</th>
						<th scope="col">Stock</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<tbody align="center">
					<?php
          			if($c_foods>0){
            		foreach($g_foods as $datas){
          		    ?>
					<tr>
						<td><?php echo $datas->id;?></td>
						<td><?php echo $datas->name;?></td>
						<td><?php echo $datas->category;?></td>
						<td><?php echo $datas->price;?></td>
						<td><?php echo $datas->stock;?></td>
						<td>
							<div>
								<a href="<?php echo site_url('Order/order_select/'.$datas->id);?>">
									<button class="btn btn-primary" style="width:50%;" type="button" data-toggle="modal"
										data-target="#exampleModal">Buy</button></a>
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




		</div>
		<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->
