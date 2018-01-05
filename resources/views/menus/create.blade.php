@extends('main')

@section('title', '| Create New Menu')

@section('stylesheets')

    {!! Html::style('css/parsley.css')!!}
@endsection

    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <h1>Create Menu Listing</h1>
                <hr>

                {!! Form::open(array('route' => 'menus.store',''=>'')) !!}
                    {{ Form::label('FoodItem', 'Item Name:' ) }}
                    {{ Form::text('FoodItem', null , array('class'=>'form-control','required','maxlength'=>'255') ) }}

                    {{ Form::label('Cost', 'Cost:' ) }}
                    {{ Form::text('Cost', null, array('class'=>'form-control','required') ) }}
                    
                  
                    
                {{ Form::submit('Create Menu', array('class'=>'btn btn-success btn-lg btn-block', 'style' =>'margin-top:15px') ) }}


                {!! Form::close() !!}
            </div>
        </div>