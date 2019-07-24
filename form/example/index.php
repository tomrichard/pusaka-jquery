<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="form.min.js"></script>

<style type="text/css">
* {
	box-sizing: border-box;
}
.container {
	width: 1024px;
	margin:auto;
	padding-top: 50px;
}
.field {
	width: 100%;
	margin-bottom: 4px;
}
.field label {
	display: inline-block;
	width: calc(30% - 5px);
}
.field input[type="text"], 
.field input[type="tel"],
.field input[type="email"],
.field input[type="number"],
.field select,
.field textarea {
	display: inline-block;
	width: calc(70% - 5px);
	border: 1px solid #CCC;
	border-radius: 5px;
	height: 30px;
}
.field textarea {
	height: 150px;
}
.field [readonly] {
	background: #EEE;
}
</style>

</head>
<body>
	<div class="container">
		<form form-id="form">
			<div class="field">
				<label>Input Readonly</label>
				<input readonly type="text" name="inputReadonly"/>
			</div>
			<div class="field">
				<label>Input Text</label>
				<input type="text" name="inputText"/>
			</div>
			<div class="field">
				<label>Input Number</label>
				<input keep type="number" name="inputNumber" value="210"/>
			</div>
			<div class="field">
				<label>Input Email</label>
				<input type="email" name="inputEmail"/>
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
				<label>Input Tel</label>
				<input type="tel" name="inputPhone"/>
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
				<label>Check03</label>
				<input type="checkbox" name="inputCheck[]" value="check03"/>
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
				<label>Radio03</label>
				<input type="radio" name="inputRadio" value="radio03"/>
			</div>
			<div class="field">
				<button type="button" action="save">Save</button>
				<button type="button" action="clear">Clear</button>
				<button type="button" action="populate">Populate</button>
			</div>
		</form>
	</div>

<script type="text/javascript">
$('form[form-id="form"]').pusakaForm({
	plugins	: 'tinymce select',
	tinymce : {
		editorurl	: 'editor.php',
		textarea 	: function(textarea, option) {
			tinymce.init(option);
		}
	},
	action 	: ['form', 'http', (function(form, http) {

		// Action : Populate
		//-----------------------------
		this.populate 	= function(button) {
			
			form.readonly(['inputEmail', 'inputNumber']);

			form.populate(btoa(JSON.stringify({
				inputReadonly: 'readonly',
				inputEmail: 'dasd',
				inputText: 'hello',
				inputCheck: [
					'check02', 'check03'
				],
				inputTextarea: 'aaaaaa',
				inputRadio: 'radio03',
				inputSelect: 'Select04'
			})));

		}

		// Action : Save
		//-----------------------------
		this.save 		= function() {
			
			http.post({
				url: 'action.php',
				data: {
					additional:'aaaaa'
				},
				success: function(obj) {
					console.log(obj)
				},
				error: function(error) {
				}
			});

		}

		// Action : Clear
		//-----------------------------
		this.clear 		= function() {
			form.clear();
		}

	})]
});
</script>
</body>
</html>