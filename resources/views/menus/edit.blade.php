@extends('main')

@section('title', '| Edit Menu Item')

@section('content')


	<div class="row">
	{!! Form::model($menu, ['route' => ['menus.update', $menu->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			
			{{ Form::label('FoodItem','Item Name:')}}
			{{Form::text('FoodItem',null, ["class"=>'form-control input-lg'])}}

			{{Form::label('Cost',"Price:", ['class'=>'form-spacing-top'])}}
			{{Form::text('Cost', null, ["class" =>'form-control input-lg'])}}
			<h1>
				{{ $menu->FoodItem }}
			</h1>

		<p class='lead'>{{ $menu->Cost}}</p>
	
		</div>
	
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($menu->created_at))}}</dd>
				</dl>
				
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($menu->updated_at))}}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
					 	{!! Html::linkRoute('menus.show','Cancel', array($menu->id), array('class'=>'btn btn-danger btn-block'))!!}
					</div>
					<div class="col-sm-6">
					{{Form::submit('Save Changes', ['class'=>'form-control btn-success'])}}
					
					</div>
					
				</div>

			</div>
		</div>
		{!!Form::close()!!}
	</div> <!--End of form->
	

@endsection