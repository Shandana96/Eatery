@extends('main')

@section('title', '| Your Kitchen')


@section('content')
	<div class="row">
		<div class="col-md-8">
	
			<h1>
				{{ $kitchen->kName }}
			</h1>

		
	
		</div>
	
		<div class="col-md-4">
			<div class="well">
		
			

				<dl class="dl-horizontal">
					<label>Created At:</label>
					{{ date('M j, Y h:ia', strtotime($kitchen->created_at))}}
				</dl>
				
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					{{ date('M j, Y h:ia', strtotime($kitchen->updated_at))}}
				</dl>
				<div class="row">
					<div class="col-sm-6">
					 	{!! Html::linkRoute('kitchens.edit','Edit', array($kitchen->id), array('class'=>'btn btn-primary btn-block'))!!}
					</div>
					<div class="col-sm-6">
					{{Form::open(['route' =>['kitchens.destroy', $kitchen->id], 'method'=>'DELETE'])}}
				
						{!!Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])!!}

						{!!Form::close()!!}
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						{{Html::linkRoute('kitchens.index', '<< See All kitchens',[],['class'=>'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
				</div>

			</div>
		</div>
	</div>
	


@endsection