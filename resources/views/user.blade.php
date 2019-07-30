@extends('layout.master')

@section('title')
User page
@endsection
			<div>@section('table_name') User @endsection</div>
			@section('table')
			<table border="1">
				<thead>
					<th>ID</th>
					<th>Name</th>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Anh</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Son</td>
					</tr>
				</tbody>
			</table>
			@endsection
@section('custom')
@include('section.custom')
@endsection