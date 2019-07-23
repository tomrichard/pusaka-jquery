# Form

Load form object

```javascript
...
	action : ['form', (function(form) {		
		// your action here.
		...
	})]
...
```

## populate

Method populate digunakan untuk fill form atau mengisi form dengan json.

- fill form pada saat load page.

```html
<div class="field">
	<input type="text" name="SomeField" />
</div>
```

```javascript
...
	action : ['form', (function(form) {
		
		form.populate({
			SomeField:'SomeValue'
		});

	})]
...
```

- fill form pada saat button click.

```html
<div class="field">
	<input type="text" name="SomeField" />
</div>
<div class="field">
	<button type="button" action="fillform">Fill</button>
</div>
```

```javascript
...
	action : ['form', (function(form) {
		
		this.fillform = function() {
			form.populate({
				SomeField:'SomeValue'
			});
		}

	})]
...
```

## clear

Method tersebut digunakan untuk mereset semua field dalam form.
```html
...
		<button action="clear">Clear</button>
...
```

```javascript
...
	action : ['form', (function(form) {
		
		this.fillform = function() {
			form.clear();
		}

	})]
...
```

* directive ```keep```

jika field diberi directive keep maka pada saat ```form.clear()``` value dari field tersebut tidak direset.

```html
...
		<input keep type="text" value="SomeValue"/>
...
```

* directive ```readonly```

jika field diberi directive readonly maka pada saat ```form.clear()``` field akan direset ke readonly.

```html
...
		<input readonly type="text" value="SomeValue"/>
...
```

## readonly

Method ```form.readonly()``` digunakan untuk merubah attribute dari field menjadi readonly.

```html
...
		<input name="Field1" type="text" />
		<input name="Field2" type="text" />
...
```

```javascript
...
	action : ['form', (function(form) {
		
		this.fillform = function() {
			form.readonly(['Field1', 'Field2']);
		}

	})]
...
```