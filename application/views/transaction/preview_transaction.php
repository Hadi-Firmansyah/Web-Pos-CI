		<!-- Begin Page Content -->
		<div class="container">

			<table border="2" cellpadding="7" cellspacing="7" align="center">
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
					</tr>
				</thead>

				<tbody align="center">
                <?php foreach($get_data_transaction as $datas) : ?>
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
                    </tr>
                <?php endforeach; ?>
				</tbody>

			</table>




		</div>
		<!-- /.container-fluid -->