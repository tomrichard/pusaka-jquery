# Template

## id

```html 
<div datatable-id="{your_id}">
	...
</div>
```

## general search

```html
<input action="search" type="text" placeholder="Search...">
```

## advance search 

```html
<tr>
	<th><input action="advsearch" type="text" name="Id"/></th>
	<th><input action="advsearch" type="text" name="Lang"/></th>
	<th><input action="advsearch" type="text" name="Name"/></th>
	<th><input action="advsearch" type="text" name="Status"/></th>
</tr>
```

## page info

```html
<span action="pageinfo">1/1</span><span> Pages</span>
```

## goto previous

```html
<button action="prev">Prev</button>
```

## goto next

```html
<button action="next">Prev</button>
```

## count rows

```html
<span>Total : </span><span action="countrows"></span><span> Rows</span>
```

## full example

```html
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
```