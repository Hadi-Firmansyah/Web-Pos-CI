		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h2 mb-0 text-gray-800">Foods / <small>Order</small></h1>
			</div>

			<table id="table_id" class="table">
				<thead align="center">
					<tr>
						<th scope="col">Date</th>
						<th scope="col">ID Transaction</th>
						<th scope="col">ID Order</th>
						<th scope="col">Name</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col">Cost</th>
						<th scope="col">Money</th>
						<th scope="col">Change</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<tbody align="center">
					<?php
          			if($c_transaction>0){
            		foreach($g_transaction as $datas){
          		?>
					<tr>
						<td><?php echo $datas->date;?></td>
						<td><?php echo $datas->id;?></td>
						<td><?php echo $datas->id_order;?></td>
						<td><?php echo $datas->food;?></td>
						<td><?php echo $datas->price;?></td>
						<td><?php echo $datas->quantity;?></td>
						<td><?php echo $datas->cost;?></td>
						<td><?php echo $datas->money;?></td>
						<td><?php echo $datas->change;?></td>
						<td>
							<div>
								<a href="<?php echo site_url('Transaction/transaction_pdf/'.$datas->id);?>">
									<button class="btn btn-info" style="width:100%;">Print</button></a>
							</div>
						</td>
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
