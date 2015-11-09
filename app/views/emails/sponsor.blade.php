<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear {{$name}},<br><br>
			My name is {{$user->first_name}} {{$user->last_name}} and I am a Junior at Germantown Friends School (GFS) in Philadelphia, PA. My team and I are organizing our school’s first hackathon, <i>hackGFS</i>, which will be held in the spring of 2016.<br><br>
			A hackathon is an invention marathon. Computer programmers, designers and more come together to learn, build, and share their creations over the course 24 hours. Hackathons are not limited to just programmers — anyone who has an interest in technology and is eager to learn can participate.<br><br>
			hackGFS will be a themed hackathon, which means that we are harnessing all the excited energy that our participants bring and focusing it on a single cause. The mission statement for our hackathon is “Engineered by a few, structured for all,” which touches on the fact that even a small team of four can build something extremely scalable, versatile and truly amazing. The mission statement also touches on our mission to try and include a diverse range of participants, as everyone should have the opportunity to understand the workings of technology first hand. We believe that hackathon projects should be practical tweaks or “hacks” to help improve the quality of life. We believe that there are no limits to what technology can do, only those preconceived by people without adequate exposure. We hope that by hosting a hackathon, we can encourage people our own age to see the the creative potential that technology has and offer them an opportunity to harness it, and allow them to see the possibilities for future careers and passions.<br><br>
			Organizing a hackathon requires collaboration by many who share our vision and are willing to fund any part of the event. <b>Partners</b> are sponsors who are willing to donate $5,000+ automatically invited to give keynote speeches to help kick off hackGFS. All <b>sponsors</b> donating $1,000+ are invited to set up small booths and promote their company at hackGFS. <b>Donors</b> donating under $1,000 will have their logo up on the website and will be put on the donor banner. We believe that there is considerable opportunity for sponsors to gain exposure to a group of highly motivated and talented high schoolers, as well as be part of setting history: we are proud to be Philadelphia’s first high school hackathon.<br><br>
			I hope that you are as excited about hackGFS as we are and I hope that you will consider working with us - we can’t wait to hear from you! We are reachable at the phone numbers included below and via return email. Thank you for your time.<br><br>
			
			{{$user->first_name}} {{$user->last_name}}, Grade <i>{{$user->grade}}</i> <br><br>
			
			<a href="http://www.germantownfriends.org/">http://www.germantownfriends.org/</a><br><br>

			Matt Zipin - <a href="mailto:mzipin@germantownfriends.org">mzipin@germantownfriends.org</a> <br>
			Computer Science Teacher, hackGFS faculty sponsor <br>
			215-951-2392
		</div>
	</body>
</html>
