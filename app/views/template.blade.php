<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

      <!--Let browser know website is optimized for mobile
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->

    <style type="text/css">
    .btn-floating{
      height: 45px;
      width: 45px;
    }
    </style>
    </head>

    <body style="display:none;background-color:#eceff1">
    	<nav>
		    <div class="nav-wrapper container">
		      <a href="#!" class="brand-logo">hackGFS</a>
		      <ul class="right hide-on-med-and-down">
		        <li><a title="Leaderboard"><i class="icon-nav ion-trophy"></i></a></li>
		        <li><a title="Logout"><i class="icon-nav ion-power"></i></a></li>
		      </ul>
		    </div>
		</nav>    

		<div id="slide" class="container" style="margin-top:400px;opacity:.3;padding-top:10px">
			@yield('content')
		</div>

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
              <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
              <li><a class="btn-floating blue" title="Email a Judge"><i style="font-size:22pt;margin-top:5px" class="material-icons">account_box</i></a></li>
              <li><a class="btn-floating green" title="Email a Sponsor"><i style="font-size:22pt;margin-top:5px" class="material-icons">credit_card</i></a></li>
              <!--<li><a class="btn-floating green"></a></li>
              <li><a class="btn-floating blue"></a></li>-->
            </ul>
        </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('html, body').fadeIn(1000, function(){
    			$('#slide').animate({
    				'margin-top': '0px',
    				opacity: '1',
    			}, 1000)
    		});
    	})
    </script>
    


    </body>
</html>