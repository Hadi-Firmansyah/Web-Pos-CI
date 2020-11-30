<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-1">
		<h1 class="h2 mb-0 text-gray-800">Foods / <small>Order</small></h1>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('Order/order_save');?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<input type="date" name="date" class="form-control" placeholder="Date" value="<?php echo date('Y-m-d') ?>" required readonly>
			</div>
			<div class="form-group">
				<input type="hidden" name="id_user" class="form-control" placeholder="ID User" required>
			</div>
			<div class="form-group">
            <?php foreach ($get_data_food as $take) : ?>
				<input type="number" name="id_food" class="form-control" placeholder="ID Food"  readonly
                value="<?php echo $take->id;?>">
			</div>
			<div class="form-group">
				<input type="text" name="food" class="form-control" placeholder="Food Name" 
				value="<?php echo $take->name;?>" readonly>
			</div>
			<div class="form-group">
				<input type="number" name="price" class="form-control" placeholder="Price" 
				value="<?php echo $take->price;?>" required readonly>
			</div>
			<div class="form-group">
			<select name="category" id="category" class="form-control" readonly>
				<option value="<?php echo $take->category;?>" selected><?php echo $take->category;?></option>
			<?php endforeach ; ?>
			</select>
			</div>
			<div class="form-group">
				<input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
			</div>
			<!-- <div class="form-group">
				<input type="number" name="pay" class="form-control" placeholder="Pay" required>
			</div> -->
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Order</button>
			</div>
		</form>
	</div>

</div>
<!-- End of Main Content -->

<!-- End Page Content -->
</div
