@extends('template')

@section('content')

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
              <center><button class="btn waves-effect waves-light" type="submit">Submit
                  <i class="material-icons right">send</i>
                </button></center>
            </form>

            <a href="#content" id="test" class="modal-trigger">Preview this section</a>
          </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#test').on('click', function(){
      $.ajax({
        url: "{{action('SectionController@experimenting')}}",
        success: function(data){
          $('#preview').html(data);
        }
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