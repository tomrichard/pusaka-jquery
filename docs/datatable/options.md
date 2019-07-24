# Options

```javascript
$('div[datatable-id="datatable"]').pusakaDatatable(options);
```

options :
- [url](#url)
- [thead](#thead)
- [tbody](#tbody)

## url

``` string ``` url response datatable. see [response](/response.md)

```javascript
$('div[datatable-id="datatable"]').pusakaDatatable({
	url : 'your_server_side_url'
});
```

## thead

``` string ``` html untuk membuat header pada blok thead.

```javascript
$('div[datatable-id="datatable"]').pusakaDatatable({
	url : 'your_server_side_url',
	thead : function() {
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
	}
});
```

## tbody

options ``` tbody ``` digunakan untuk membuat bagian dari tbody pada table.
return harus berupa ``` string ``` html atau ``` node ```

```javascript
$('div[datatable-id="datatable"]').pusakaDatatable({
	url : 'your_server_side_url',
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

	}
});
```

ketika melalukan drawing tbody, ``` node ``` bisa diberi ``` event ``` seperti contoh diatas.

### obj

``` obj.item('key') ``` : mendapatkan value dari iterasi row.

``` obj.json() ``` : mendapatkan object json dari iterasi row.