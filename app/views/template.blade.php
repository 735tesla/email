<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

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
      <?php $user = Sentry::getUser(); ?>
    	<nav>
		    <div class="nav-wrapper container">
		      <center><a href="{{action('HomeController@main')}}" style="margin-left:-85px" class="brand-logo">hackGFS</a></center>
		      <ul class="right hide-on-med-and-down">
		        <!--<li><a title="Leaderboard"><i class="icon-nav ion-trophy"></i></a></li>-->
            <li><a>Welcome, {{$user->first_name}}</a></li>
            <li><a href="{{route('rank.view')}}" title="Ranking"><i class="icon-nav ion-podium"></i></a></li>
            <li><a href="{{route('user.logout')}}" title="Logout"><i class="icon-nav ion-power"></i></a></li>
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
              <li><a class="btn-floating waves-effect waves-light blue modal-trigger" href="#announce" title="Post an Announcement"><i style="font-size:22pt;margin-top:5px" class="material-icons">comment</i></a></li>
              <li><a href="{{route('email')}}" class="btn-floating green" title="Email a Sponsor"><i style="font-size:22pt;margin-top:5px" class="material-icons">email</i></a></li>
              <!--<li><a class="btn-floating green"></a></li>
              <li><a class="btn-floating blue"></a></li>-->
            </ul>
        </div>



    <script type="text/javascript">
    	$(document).ready(function(){

        $('#submitAnnounce').on('click', function(){
          $("#announcementForm").submit();
        });

        $('.modal-trigger').leanModal();
    		$('html, body').fadeIn(1000, function(){
    			$('#slide').animate({
    				'margin-top': '0px',
    				opacity: '1',
    			}, 1000)
    		});
    	})
    </script>
    
    @yield('modal')

    <!-- Modal Structure -->
    <div id="announce" class="modal modal-fixed-footer">
      <div class="modal-content">
        <div class="row" class="col s12">
        <h4>Post an Announcement to the Club</h4>
          <form id="announcementForm" method="POST" action="{{route('announce.send')}}">
            <div class="row">
              <div class="input-field col s12">
                <textarea name="content" id="announcement" class="materialize-textarea" required></textarea>
                <label for="announcement">Tell the club something...</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" id="submitAnnounce" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
      </div>
    </div>

    </body>
</html>