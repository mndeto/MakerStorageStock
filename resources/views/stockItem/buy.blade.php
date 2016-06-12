@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">You are Buying <b>{{$stockItem->name}}</b></div>

                <div class="panel-body">
                         {!! Form::open(array('action' => array('stockItemController@bought', $stockItem->id))) !!}
                        <div class="form-group">
                           {!! Form::label('Quantity') !!}
                           {!! Form::number('quantity', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::label('Unit Price') !!}
                           {!! Form::text('unitPrice', null, array('required', 'class'=>'form-control')) !!}
                        </div>
                           <div class="form-group">
                            {!! Form::submit('Buy', array('class'=>'btn btn-primary')) !!}
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection