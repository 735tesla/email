<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear {{$user->first_name}},<br><br>
			We are so glad that you have registered for our hackGFS Sponsorship Site!!! You're almost finished! You just need to activate your account and then wait for administrator approval. Follow the link below to start the process!!!<br><br>

			<a href="{{route('user.activate', $user->activation_code)}}">{{route('user.activate', $user->activation_code)}}</a>
		</div>
	</body>
</html>
