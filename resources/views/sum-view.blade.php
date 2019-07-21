<form action="{{route('sum')}}" method="POST">
	{{csrf_field()}}
	<input type="number" placeholder="N1" name="n_1">
	<input type="number" placeholder="N2" name="n_2">
	<button type="submit">SUM</button>
</form>