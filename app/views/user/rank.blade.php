@extends('template')

@section('content')

<div class="row">
  <div class="col s8 offset-s2">
    <div class="card-panel light-blue darken-1 white-text">
    	<table class="centered">
	        <thead>
	          <tr>
	          	  <th data-field="id">Place</th>
	              <th data-field="id">Name</th>
	              <th data-field="name">Emails Sent</th>
	          </tr>
	        </thead>

	        <tbody>
	        <?php $counter = 1;?>
	        @foreach($data as $id=>$sent)
	        	<tr>
	         		<td>#{{$counter}}</td>
	         		<td>{{User::find($id)->info()}}</td>
	         		<td>{{$sent}}</td>
	        	</tr>
	        	<?php $counter = $counter+1;?>
	        @endforeach
	        </tbody>
      </table>
    </div>
  </div>
</div>

@stop