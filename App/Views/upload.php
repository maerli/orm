<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Upload</title>
	</head>
	<body>
		<button id="choose" > Escolher arquivo </button>
		<script>
			document.querySelector('#choose').addEventListener('click', function(e){
				e.preventDefault();
				var input = document.createElement('input');
				input.type = 'file';
				input.addEventListener('change',async function(event){
					var file = input.files[0];
					var formData = new FormData();

					formData.append('file',file);

					var req = await fetch('/orm/upload',{
						method:'POST',
						body:formData
					});
					console.log(await req.text());
				});
				input.click();


			});
		</script>
	</body>
</html>
