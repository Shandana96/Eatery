@extends('main')

@section('title', '| Create New Kitchen')

@section('stylesheets')

    {!! Html::style('css/parsley.css')!!}
@endsection

    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <h1>Create new Kitchen</h1>
                <hr>

                {!! Form::open(array('route' => 'kitchens.store',''=>'')) !!}
                    {{ Form::label('kName', 'Kitchen Name:' ) }}
                    {{ Form::text('kName', null , array('class'=>'form-control','required','maxlength'=>'255') ) }}
                    
                  
                    
                {{ Form::submit('Create Kitchen', array('class'=>'btn btn-success btn-lg btn-block', 'style' =>'margin-top:15px') ) }}


                {!! Form::close() !!}
            </div>
        </div>