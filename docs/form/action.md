# Action

Action digunakan untuk trigger event click pada button form.
Dengan menambahkan attribut ```action="nama-action"``` maka button teregistrasi sebagai action.

```html
<div class="field">
	<button type="button" action="populate">Populate</button>
	<button type="button" action="save">Save</button>
	<button type="button" action="clear">Clear</button>
</div>
```


Properti action pada script dibawah harus memiliki format array. Array pertama dan kedua adalah inisialisasi 
pemakaian object dari parameter array yang terakhir dan array terakhir harus berupa function.

object yang disediakan :
- [form](/form.md)
- [http](/http.md)

```javascript
...
	action : ['form', 'http', (function(form, http) {
		
		// your action here.
		...

	})]
...
```

```javascript
...
	action : ['form', (function(formObject) {
		
		// your action here.
		...

	})]
...
```

action tersebut akan dijalankan ketika button dengan ```action="namaaction"``` di click.
```html
...
		<button action="namaaction">JustBtn</button>
...
```

```javascript
...
	action : [(function() {
		
		// your action here.
		this.namaaction = function(button) {
			// this function triggered when <button action="namaaction">JustBtn</button> clicked
			alert('Button JustBtn Clicked');
		}

	})]
...
```
