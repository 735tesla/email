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
                  <input id="password" name="name" placeholder="ex. Google" type="text" class="validate" required>
                  <label for="password">Company Name</label>
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
          </div>
        </div>
      </div>
    </div>
</div>
@stop