<!DOCTYPE html>
<html>
<head>
<title>Datatable</title>

<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="datatable.min.js"></script>

</head>
<body>
<div class="container">
	
	<div datatable-id="datatable">
		<div class="row" style="padding-top: 16px; padding-bottom: 16px;">
			<div class="col-md-4">
				<input action="search" type="text" class="form-control" placeholder="Search...">
			</div>
			<div class="col-md-4" style="text-align: center;">
				<span action="pageinfo">1/1</span><span> Pages</span>
			</div>
			<div class="col-md-4" style="text-align: right;">
				<button action="prev" class="btn btn-primary">Prev</button>
				<button action="next" class="btn btn-primary">Next</button>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-4">
				<span>Total : </span><span action="countrows"></span><span> Rows</span>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
$('div[datatable-id="datatable"]').pusakaDatatable({
	url 	: 'action.php',
	thead 	: function() {
		return `
			<tr>
				<th>Id</th>
				<th>Lang</th>
				<th>Name</th>
				<th>Status</th>
			</tr>
			<tr>
				<th><input action="advsearch" type="text" name="Id"/></th>
				<th><input action="advsearch" type="text" name="Lang"/></th>
				<th><input action="advsearch" type="text" name="Name"/></th>
				<th><input action="advsearch" type="text" name="Status"/></th>
			</tr>
		`;
	},
	tbody	: function(obj) {
		
		var node = $(`<tr clickable>
			<td style="width: 250px;">`+obj.item('Id')+`</td>
			<td>`+obj.item('Lang')+`</td>
			<td>`+obj.item('Name')+`</td>
			<td>`+obj.item('Status')+`</td>
		</tr>`);

		node.click(function(){
			//add event 
			alert('oke');
		});

		return node;

	},
}).fetch();
</script>
</body>
</html>