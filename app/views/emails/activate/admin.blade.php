<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<b>First:</b> {{$user->first_name}}<br>
			<b>Last:</b> {{$user->last_name}}<br>
			<b>Grade:</b> {{$user->grade}}<br>
			<b>Email:</b> {{$user->email}}<br>

			<a href="{{route('admin.activate', $code)}}">Approve {{$user->first_name}}</a>
		</div>
	</body>
</html>
