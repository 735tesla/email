@extends('template')

@section('content')

@foreach($emails as $email)
<div class="row">
  <div class="col s6 offset-s3">
    <div class="card-panel teal">
      <span class="white-text">{{$email->user->info()}} sent an email to <strong>{{$email->company}}</strong>
      </span>
    </div>
  </div>
</div>
@endforeach
@stop