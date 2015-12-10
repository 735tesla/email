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
            <form class="col s12" action="{{route('email.send')}}" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" name="name" placeholder="ex. Google or Mark Zuckerberg" type="text" class="validate" required>
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

                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box" class="white-text">Experimenting 
                  <a href="#content" data-url="{{action('SectionController@experimenting')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a>
                </label>

                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box" class="white-text">Marketing <a href="#content" data-url="{{action('SectionController@marketing')}}" style="opacity:.7;color:white" class="modal-trigger">Preview this section</a></label>
              </p>
              <br>
              <center><button class="btn waves-effect waves-light" type="submit">Submit
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
    $('p.white-text > label > a').each(function(){
      dataurl = $(this).data('url');

      $(this).on('click', function(){
        $.ajax({
          url: dataurl,
          success: function(data){
            console.log(dataurl);
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