@extends('main')

@section('title', '| Edit your Kitchen')

@section('content')


	<div class="row">
	{!! Form::model($kitchen, ['route' => ['kitchens.update', $kitchen->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('kName','Kitchen Name:')}}
			{{Form::text('kName',null, ["class"=>'form-control input-lg'])}}

		

			<h1>
				{{ $kitchen->kName }}
			</h1>

	
	
		</div>
	
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($kitchen->created_at))}}</dd>
				</dl>
				
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($kitchen->updated_at))}}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
					 	{!! Html::linkRoute('kitchens.show','Cancel', array($kitchen->id), array('class'=>'btn btn-danger btn-block'))!!}
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