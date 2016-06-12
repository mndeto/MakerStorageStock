@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Critical Stock Items</div>
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                <div class="panel-body">
                    
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Part Number</td>
                              
                                <td>Name</td>
                                <td>Description</td>
                                <td>Order Info</td>
                                <td>In Hand</td>
                                <td>Low</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($stockItems as $stockItem)
                            <tr>
                                
                                <td>{{ $stockItem->id }}</td>
                                <td><a href="https://octopart.com/search?q={{ $stockItem->partNumber }}" target="_blank">{{ $stockItem->partNumber }}</a></td>
                                <td>{{ $stockItem->name }}</td>
                                <td>{{ $stockItem->description }}</td>
                                <td>{{ $stockItem->orderInfo }}</td>
                                <td>{{ $stockItem->inHand }}</td>
                                <td>{{ $stockItem->low }}</td>
                    
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                    
                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    
                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{ URL::to('stockItems/' . $stockItem->id) . '/buy' }}">Buy</a>
                    
                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit 
                                    <a class="btn btn-small btn-info" href="{{ URL::to('stockItems/' . $stockItem->id . '/edit') }}">Edit</a>-->
                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                    
                    
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection