<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>
</head>
<body>
	<div style='width:500px; margin:0 auto; margin-top:200px;'>
		<form action="loginIn" method="POST">
			{{ csrf_field() }}
			<input type='text' name='username' value=''> 
			<input type='password' name='password' value=''> 
			<input type='submit' name='sub' value='登录'>
		</form>
	</div>
</body>
</html>
