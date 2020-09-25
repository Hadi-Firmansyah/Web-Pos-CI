<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-1">
		<h1 class="h2 mb-0 text-gray-800">Order / <small>Edit</small></h1>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('Order/action_edit');?>" method="POST" enctype="multipart/form-data">
        <?php foreach($data_edit as $edit): ?>
            <!-- <input type="hidden" name="id" id="id" value="<?php echo $edit->id; ?>"> -->
			<label for="date">Date Order</label>
			<div class="form-group">
				<input type="date" name="date" class="form-control" placeholder="Date" value="<?php echo $edit->date; ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="id_order">ID Order</label>
				<input type="number" name="id" class="form-control" placeholder="ID Order" 
                value="<?php echo $edit->id;?>" readonly>
			</div>
			<div class="form-group">
			<label for="id_food">ID Food</label>
				<input type="number" name="id_food" class="form-control" placeholder="ID Food" 
                value="<?php echo $edit->id_food;?>" readonly>
			</div>
			<div class="form-group">
			<label for="">Name</label>
				<input type="text" name="food" class="form-control" placeholder="Food Name" 
                value="<?php echo $edit->food;?>" readonly>
			</div>
			<div class="form-group">
			<label for="">Price</label>
				<input type="number" name="price" class="form-control" placeholder="Price" 
                value="<?php echo $edit->price;?>" readonly>
			</div>
			<div class="form-group">
			<label for="">Category</label>
			<select name="category" id="category" class="form-control" readonly>
				<option value="<?php echo $edit->category;?>" selected ><?php echo $edit->category;?></option>
			</select>
			</div>
			<div class="form-group">
			<label for="">Quantity</label>
				<input type="number" name="quantity" class="form-control" placeholder="Edit Quantity" required>
			</div>
			<!-- <div class="form-group">
				<input type="number" name="pay" class="form-control" placeholder="Pay" required>
			</div> -->
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Order</button>
			</div>
            <?php endforeach; ?>
		</form>
	</div>

</div>
<!-- End of Main Content -->

<!-- End Page Content -->
</div
