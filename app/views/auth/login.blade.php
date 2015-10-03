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
    </head>

    <body style="display:none;background-color:#d81b60">  

		<div id="slide" class="container white-text" style="margin-top:400px;opacity:.3;padding-top:10px">
            <div class="row" style="padding-top:75px">
                <div class="col s6 offset-s3">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Login to hackGFS</span>
                      <hr>
                      <div class="row">
                        <form class="col s12" action="{{route('user.login.handle')}}" method="POST">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email" autocomplete="off" name="email" class="validate">
                              <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                              <input id="password" name="password" type="password" class="validate">
                              <label for="password">Password</label>
                            </div>
                          </div>
                          <center><button class="btn waves-effect waves-light" type="submit">Submit
                              <i class="material-icons right">send</i>
                            </button></center>
                        </form>
                      </div>
                    </div>
                    <div class="card-action">
                        <center><a href="{{route('user.register.view')}}">Need an account? Register</a></center>
                    </div>
                  </div>
                </div>

                @if(!empty($error))
                <div class="col s4 offset-s9" style="margin-top:-418px">
                  <div class="card red darken-1">
                    <div class="card-content white-text">
                      <span class="card-title" style="font-size:15pt">Oops, something's not right</span>
                      <hr>
                      <p class="white-text">
                        {{$error}}
                      </p>
                    </div>
                  </div>
                </div>
               @endif
            </div>
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