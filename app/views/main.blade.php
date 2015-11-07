@extends('template')

@section('content')

@foreach($emails as $email)
<div class="row">
  <div class="col s6 offset-s3">
    <div class="card-panel {{$email->user->color}}">
      <span class="white-text">{{$email->user->info()}} sent an email to <strong>
      	<a style="color:inherit" href="#" class="tooltipped" data-position="bottom" data-delay="15" data-tooltip="{{$email->email}}">{{$email->company}}</a></strong> {{$email->since()}}
      </span>
    </div>
  </div>
</div>
@endforeach
@stop