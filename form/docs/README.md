# Quick Start

Download library yang dibutuhkan.
- [jQuery](https://jquery.com/)
- [Pusaka](https://github.com/tomrichard/pusaka-jquery)

Include atau tambahkan source javascript ```pusaka/form/form.min.js``` dibawah library jQuery pada head dari html.

```html
<head>
...
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/pusaka/form/form.min.js"></script>
</head>
```

Tambahkan code html seperti berikut ke dalam tag body.
```html
<form form-id="form">
	<div class="field">
		<label>Input Text</label>
		<input type="text" name="inputText"/>
	</div>
	<div class="field">
		<label>Input Select</label>
		<select name="inputSelect">
			<option value="Select01">Select01</option>
			<option value="Select02">Select02</option>
			<option value="Select03">Select03</option>
			<option value="Select04">Select04</option>
		</select>
	</div>
	<div class="field">
		<label>Input TextArea</label>
		<textarea name="inputTextarea"></textarea>
	</div>
	<div class="field">
		<label>Check01</label>
		<input type="checkbox" name="inputCheck[]" value="check01"/>
	</div>
	<div class="field">
		<label>Check02</label>
		<input type="checkbox" name="inputCheck[]" value="check02"/>
	</div>
	<div class="field">
		<label>Radio01</label>
		<input type="radio" name="inputRadio" value="radio01"/>
	</div>
	<div class="field">
		<label>Radio02</label>
		<input type="radio" name="inputRadio" value="radio02"/>
	</div>
	<div class="field">
		<button type="button" action="populate">Populate</button>
		<button type="button" action="save">Save</button>
		<button type="button" action="clear">Clear</button>
	</div>
</form>
```
Tambahkan code javascript seperti berikut.

```javascript
$('form[form-id="form"]').pusakaForm({
	action : ['form', 'http', (function(form, http) {
		
		// your action here.
		
		this.save 		= function(button) {
			// action save
			alert('Save Button Click');
		}

		this.clear 		= function(button) {
			// action clear
			alert('Clear Button Click');
		}

		this.populate 	= function(button) {
			// action populate
			alert('Populate Button Click');
		}

	})]
});
```

[Next](action.md)