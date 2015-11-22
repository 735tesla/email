<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear {{$user->first_name}},

			<br><br> <i><b>{{Sentry::getUser()->first_name}} {{Sentry::getUser()->last_name}}</b> just posted a new announcement on hackGFS!</i>

			<br><br>

			{{$content}}
			

		</div>
	</body>
</html>
