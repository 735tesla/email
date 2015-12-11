@extends('template')

@section('content')
<style type="text/css">
  .styled-links {
    color: white!important;
    opacity: .9;
  }
</style>


<div class="row" style="padding-top:75px">
    <div class="col s10 offset-s1">
      <div class="card blue darken-2">
        <div class="card-content white-text">
          <span class="card-title">Review Your Email</span>
          <hr>
            <p class="p">
              Dear {{$input['name']}},
              <br><br>
              My name is {{$user->name()}}, and I am a {{$user->year()}} at Germantown Friends School in Philadelphia, PA. My team and I are passionate about technology and the education that surrounds it, which is why we are hosting our school and city’s first high school hackathon, hackGFS. We would love for you to be a part of a groundbreaking experience by joining us as a sponsor, bringing mutual benefit to both hackGFS and {{$input['name']}}.
              <br><br>
              A hackathon is an invention marathon, a twenty-four hour flurry full of creativity, teamwork and fun where all forms of technological innovation are welcome. Teams of up to four participants work together using technology to build an app or website that solves a problem. At the end of the event, each team presents their creation to an audience of their peers and a panel of judges. Those teams with the most creative ideas are then awarded prizes.
              <br><br>
              hackGFS will be hosted at Germantown Friends School on April 9-10, 2016. We expect to have roughly 200 high school hackers from in and around the Greater Philadelphia area. Because hackGFS will be Philadelphia’s first high school hackathon, we want to make it memorable for everyone who participates, and that is why we are asking you to help sponsor the event. All donations will be used to provide food, drink and prizes. In return, we encourage sponsors to interact and form relationships with some of the possible leaders and innovators of tomorrow from the Philadelphia area. As a sponsor, you have the chance and the opportunity to leave a lasting impression on hackGFS participants by introducing them to your brands and educating them on your products or services.
              <br><br>
              <div style="font-weight:500;" id="mailcontent">
                
              </div>
              We started hackGFS to allow students who may feel boxed in by core curriculums to realize what they are capable of doing with technology. Who knows - this exposure might result in someone finding their passion, as we clearly have. If we ignite at least one spark, we will know that we have succeeded in our mission!
              <br><br>
              We have presented you with our vision, but we also realize that we cannot reach it without partnering with many others. We hope that we have ignited a desire in you to join us in this endeavor. Attached is a link to our sponsorship tiers so that you can see what is available. Please feel free to email us if you have any questions or would like to know more. If you are not the right person to contact about this matter, we would be grateful if you would forward it to the appropriate person. Thank you for your time.
              <br><br>
              Sponsorhsip PDF: <a class="styled-links" href="http://hackgfs.io/sponsorship.pdf">http://hackgfs.io/sponsorship.pdf</a>
              <br><br>
              hackGFS Website: <a class="styled-links" href="http://hackgfs.io/">http://hackgfs.io/</a>
              <br><br>
              Sincerely,
              {{$user->info()}}
              
            </p>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

      @foreach($sections as $key => $section)

        $.ajax({
          url: "{{action('SectionController@any', $key)}}",
          success: function(data){
            data = contentHandler(data);
            $('#mailcontent').append(data);
          }
        });
      @endforeach


      var contentHandler = function(content){
        content = content.replace("COMPANY", "{{$input['name']}}");
        console.log(content);
        return content;
      }
        
    
  });
</script>
@stop

@section('modal')
<div id="content" class="modal">
  <div class="modal-content">
    <div class="row" class="col s12">
    <h4>Preview</h4>
      <form id="announcementForm" method="POST" action="{{route('announce.send')}}">
        <div class="row">
          <div class="input-field col s12" id="preview">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
  </div>
</div>
@stop