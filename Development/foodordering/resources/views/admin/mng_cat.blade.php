@extends('admin.layout.main')
@section('midsection')
<!-- main content start-->
<div id="page-wrapper">
	@if (Session::has('SUCESSS'))
	<div class="alert alert-success">

		<span> {{ Session::get('SUCESSS') }}</sapn>

	</div>
	@endif
	<div class="main-page">
		<div class="tables">

			<div class="bs-example widget-shadow" data-example-id="bordered-table">
				<h4>Bordered Basic Table:</h4>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>NO OF ROWS</tH>
							<th>id</th>
							<th>name</th>
							<th>Action</th>



						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($data as $d)
						<tr>
							<td>{{$i}}</td>

							<td>{{$d->id}}</td>
							<td>{{$d->name}}</td>
						<td>
							<a href="{{url('/mng_cat/'.$d->id)}}" class="btn btn-danger">Delete</a>
							<a href="{{url('/edit_cat/'.$d->id)}}" class="btn btn-warning">Edit</a>
						</td>

</tr>
						@php
						$i++;
						@endphp

						@endforeach
					</tbody>
				</table>
			</div>


		</div>
	</div>
</div>
@endsection