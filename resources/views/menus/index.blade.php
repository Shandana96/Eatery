@extends('main')

@section('title', '| Your Menu')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Menu </h1>
			<a href="{{route('menus.create')}}" class ="btn btn-primary btn-h1-spacing">Add Food Item</a>
		</div>
		
		
 		<div class="col-md-12">
 			<hr>
		<div class="col-md-2">
			
		</div>

 		</div>
	</div><!--End of .row-->
	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
			
				<thead>
					<th>#</th>
					<th>Food Item</th>
					<th>Cost (Rs.)</th>
					<th></th>
				</thead>
					
			<tbody>
					@foreach($menus as $menu)
					
					<tr>
						<th>{{ $menu->id }}</th>
						<th>{{ $menu->FoodItem }}</th>
						<th>{{ $menu->Cost}}</th>

						<th><a href="{{route('menus.show', $menu->id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('menus.edit', $menu->id)}}" class="btn btn-default btn-sm">Edit</a></th>	
					</tr>

					@endforeach
				</tbody>
			</table>
		

		</div>
	</div>
@endsection