@extends('main')

@section('title', '| All Kitchens')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Kitchen</h1>
			<a href="{{route('kitchens.create')}}" class ="btn btn-primary btn-h1-spacing">Add Kitchen</a>
		</div>
		
		
 		<div class="col-md-12">
 			<hr>
	

 		</div>
	</div><!--End of .row-->
	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
			
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Created At</th>
					<th></th>
				</thead>
				
			<tbody>
					@foreach($kitchens as $kitchen)
					
					<tr>
						<th>{{ $kitchen->id }}</th>
						<th>{{ $kitchen->kName }}</th>
						
						<th>{{date('M j, Y', strtotime($kitchen->created_at))}}</th>
						<th><a href="{{route('kitchens.show', $kitchen->id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('kitchens.edit', $kitchen->id)}}" class="btn btn-default btn-sm">Edit
						</a>
						<a href="{{route('menus.create')}}" class="btn btn-default btn-sm"> Menu Listing</a>
						</th>	
					</tr>

					@endforeach
				</tbody>
			</table>
		

		</div>
	</div>
@endsection