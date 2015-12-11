@extends('template')

@section('content')
<style type="text/css">
  p.white-text > div {
    margin-top: 30px!important;
  }
</style>


<div class="row" style="padding-top:75px">
    <div class="col s6 offset-s3">
      <div class="card deep-purple darken-1">
        <div class="card-content white-text">
          <span class="card-title">Email a Potential Sponsor</span>
          <hr>
          <div class="row">
            <form class="col s12" action="{{route('email.build')}}" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" name="name" placeholder="ex. Google or Mark Zuckerberg" type="text" class="validate" autocomplete="off" required>
                  <label for="password">Company or Recipient Name</label>
                </div>
                <div class="input-field col s12">
                  <input id="email" type="email" placeholder="ex. someone@google.com" autocomplete="off" name="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <span class="card-title">Email Sections</span>
              <hr>
              <p id="labels" class="white-text">

                <input type="checkbox" name="section[experimenting]" class="filled-in" id="exp"  />
                <label for="exp" class="white-text" >Experimenting 
                  <a href="#content" data-title="Experimenting" data-url="{{action('SectionController@experimenting')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" name="section[marketing]" class="filled-in" id="mar"  />
                <label for="mar" class="white-text">Marketing 
                  <a href="#content" data-title="Marketing" data-url="{{action('SectionController@marketing')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" name="section[api]" class="filled-in" id="api"  />
                <label for="api" class="white-text">API
                  <a href="#content" data-title="API Resources" data-url="{{action('SectionController@api')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" name="section[vc]" class="filled-in" id="vc"  />
                <label for="vc" class="white-text">Venture Capitalist 
                  <a href="#content" data-title="Venture Capitalist" data-url="{{action('SectionController@vc')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" name="section[charity]" class="filled-in" id="cha"  />
                <label for="cha" class="white-text">Charity 
                  <a href="#content" data-title="Charity" data-url="{{action('SectionController@charity')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" name="section[exposure]" class="filled-in" id="expo" />
                <label for="expo" class="white-text">Exposure 
                  <a href="#content" data-title="Exposure" data-url="{{action('SectionController@exposure')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                
              </p>
              <center><button class="btn waves-effect waves-light" style="margin-top:20px;margin-bottom:-10px" type="submit">Submit
                  <i class="material-icons right">send</i>
                </button></center>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $('p.white-text > label').each(function(){
      $(this).addClass('col s12').css('padding-left', '35px');
    });

    $('p.white-text > label > a').each(function(){

      $(this).addClass('right');

      $(this).on('click', function(){
        $.ajax({
          url: $(this).data('url'),
          success: function(data){
            $('#preview').html(data);
          }
        });
      });
    });
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