<!-- Begin Page Content --> 
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-1">
		<h1 class="h2 mb-0 text-gray-800">Transaction / <small>Pay</small></h1>
	</div>
	<div class="card-body">
		<form action="<?php echo base_url('Transaction/transaction_save') ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<label for="">Date Transaction</label>
				<input type="date" name="date" class="form-control" placeholder="Date" value="<?php echo date('Y-m-d') ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="">ID Transaction</label>
				<?php foreach ($get_data_order as $take) : ?>
				<input type="number" name="id_order" class="form-control" placeholder="ID Order" value="<?php echo $take->id ?>" readonly>
			</div>
			<div class="form-group">
			<label for="">ID Food</label>
				<input type="number" name="id_food" class="form-control" placeholder="ID Food" value="<?php echo $take->id_food ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="">Name</label>
				<input type="text" name="food" class="form-control" placeholder="Food Name" value="<?php echo $take->food ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="">Price</label>
				<input type="number" name="price" class="form-control" placeholder="Price" value="<?php echo $take->price ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="">Quantity</label>
				<input type="number" name="quantity" class="form-control" placeholder="Quantity" value="<?php echo $take->quantity ?>" required readonly>
			</div>
			<?php $total = $take->price * $take->quantity; ?>
			<div class="form-group">
			<label for="">Cost</label>
				<input type="number" name="cost" id="cost" class="form-control" placeholder="Cost" value="<?php echo $total; ?>" required readonly>
			</div>
			<div class="form-group">
			<label for="">Your Money</label>
				<input type="number" name="money" id="money" onkeyup="changes()" class="form-control" placeholder="Insert Your Money" required>
			</div>
			<div class="form-group">
			<label for="">Change</label>
				<input type="number" name="change" id="change" class="form-control" placeholder="Change" required readonly>
			</div>
			<?php endforeach ; ?>
			
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Order</button>
			</div>
		</form>
	</div>

<script type="text/javascript">
function changes(){
	var money = Number(document.getElementById("money").value);
	var cost = Number(document.getElementById("cost").value);

	var change = money - cost;
				Number(document.getElementById("change").value = change);

};

</script>

</div>
<!-- End of Main Content -->

<!-- End Page Content -->
</div
