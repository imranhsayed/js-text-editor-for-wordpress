<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Text Editor for Wordpress</title>
	<!-- Theme included stylesheets -->
	<link href="http://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<link href="http://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
	<link href="http://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
	<style>
		#editor-container {
			height: 375px;
		}
	</style>
</head>
<body>
<div id="editor-container"></div>
<!-- Main Quill library -->
<script src="http://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Core build with no theme, formatting, non-essential modules -->
<script>
	var quill = new Quill('#editor-container', {
		modules: {
			toolbar: [
				[{ header: [1, 2, false] }],
				['bold', 'italic', 'underline'],
				['image', 'code-block']
			]
		},
		placeholder: 'Compose an epic...',
		theme: 'snow'  // or 'bubble'
	});
</script>
</body>
</html>
