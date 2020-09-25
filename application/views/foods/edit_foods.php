<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h2 mb-0 text-gray-800">Foods /<small> Edit</small></h1>
</div>
<div class="card-body">
	<form action="<?php echo site_url('Foods/action_edit');?>" method="POST" enctype="multipart/form-data">
    <?php foreach($data_edit as $edit): ?>
        <input type="hidden" name="id" id="id" value="<?php echo $edit->id; ?>">
		<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $edit->name; ?>">
		</div>
		<div class="form-group">
			<select name="category" id="category" class="form-control">
				<option selected disabled>Select Kategori...</option>
				<option value="Food">Food</option>
				<option value="Drink">Drink</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="price" class="form-control" placeholder="Price" value="<?php echo $edit->price; ?>">
		</div>
		<div class="form-group">
			<input type="number" name="stock" class="form-control" placeholder="Stock" value="<?php echo $edit->stock; ?>">
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
        <?php endforeach; ?>
	</form>
</div>

</div>
		<!-- End of Main Content -->

<!-- End Page Content -->
</div
