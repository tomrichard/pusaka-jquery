# Http

Http digunakan untuk melakukan ajax request.

```javascript
...
	action : ['http', (function(http) {
		
		// your action here.
		...

	})]
...
```

## post

```html
<div class="field">
	<button type="button" action="post">Populate</button>
</div>
```

```javascript
...
	action : ['http', (function(http) {	
		// your action here.
		
		this.post = function(button) {

			http.post({
				url: 'url/be/here',
				data: {
					AdditionalData : 'SomeValue'
				},
				success(obj) {
					console.log(obj);
				},
				error(err) {

				}
			});

		}

	})]
...
```
