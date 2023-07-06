@extends('admin.layout.main')
@section('midsection')
<!-- main content start-->
<div id="page-wrapper">
@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
							<span>	{{ Session::get('SUCESSS') }}</sapn>
							
						</div>
						@endif
	<div class="main-page">
		<div class="tables">

			<div class="bs-example widget-shadow" data-example-id="bordered-table">
				<h4 class="text-center">MANAGE EMPLOYEE</h4>
				<div class="input-group">
					<div class="form-outline">
					  <input type="search" id="form1" class="form-control" />
					  <label class="form-label" for="form1">Search</label>
					</div>
					<button type="button" class="btn btn-primary">
					  <i class="fas fa-search"></i>
					</button>
				  </div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No Of Rows</th>
							<th>id</th>
							<th>file</th>
							<th> Name</th>
							<th>mobile</th>
							<th>email</th>
							<th>address</th>
							<th>username</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($data as $d)
						<tr>
							<td>{{$i}}</td>
							<td scope="row">{{$d->id}}</td>
							<td><img src="{{url('admin/upload/employee/'.$d->file)}}"width="50px" height="50px">
							<td>{{$d->name}}</td>
							<td>{{$d->mobile}}</td>
							<td>{{$d->email}}</td>
							<td>{{$d->address}}</td>
							<td>{{$d->username}}</td>
                           <td>
							<a href="{{url('/mng_emp/'.$d->id)}}" class="btn btn-danger">Delete</a>
							<a href="{{url('/edit_emp/'.$d->id)}}" class="btn btn-warning">Edit</a>
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