@extends('main')

@section('title', '| Your Kitchen')


@section('content')
	<div class="row">
		<div class="col-md-8">
			

			<h1>
				Dish Name: {{ $menu->FoodItem }}
			</h1>

		<p class='lead'>Dish Price: {{ $menu->Cost}} Rs.</p>
	
		</div>
		<div class="col-md-4">
			<div class="well">
		
			

				<dl class="dl-horizontal">
					<label>Created At:</label>
					{{ date('M j, Y h:ia', strtotime($menu->created_at))}}
				</dl>
				
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					{{ date('M j, Y h:ia', strtotime($menu->updated_at))}}
				</dl>
				<div class="row">
					
					<div class="col-sm-6">
					 	{!! Html::linkRoute('menus.edit','Edit', array($menu->id), array('class'=>'btn btn-primary btn-block'))!!}
					</div>
					<div class="col-sm-6">
					{{Form::open(['route' =>['menus.destroy', $menu->id], 'method'=>'DELETE'])}}
				
						{!!Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])!!}

						{!!Form::close()!!}
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						{{Html::linkRoute('menus.index', '<< See menu',[],['class'=>'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
				</div>

			</div>
		</div>
	</div>
	


@endsection