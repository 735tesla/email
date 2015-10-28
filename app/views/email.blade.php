@extends('template')

@section('content')

<div class="row">
	<div class="col s12 m6">
	  <div class="card blue-grey darken-1">
	    <div class="card-content white-text">
	      <span class="card-title">Card Title</span>
	      <p>I am a very simple card. I am good at containing small bits of information.
	      I am convenient because I require little markup to use effectively.</p>
	    </div>
	    <div class="card-action">
	      <a href="#">This is a link</a>
	      <a href="#">This is a link</a>
	    </div>
	  </div>
	</div>
</div>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
@stop