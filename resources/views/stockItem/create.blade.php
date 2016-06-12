@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Stock Item </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'stockItems']) !!}
                    
                        <div class="form-group">
                           {!! Form::label('Part Number') !!}
                           {!! Form::text('partNamber', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('Name') !!}
                           {!! Form::text('name', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('Description') !!}
                           {!! Form::textarea('description', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('Order Info') !!}
                           {!! Form::text('orderInfo', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('In Hand') !!}
                           {!! Form::number('inHand', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
                        </div>
                      
                        
                      
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





