@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Buy Sell Records</div>
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                <div class="panel-body">
                    
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Id</td>
                               
                                <td>Name</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Total</td>
                                <td>Bought At</td>
                                <td>Delivered At</td>
                                <td>Actions</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($buysells as $buysell)
                            <tr>
                                <td>{{ $buysell->id }}</td>
                               
                                <td>{{ $buysell->name }}</td>
                                <td>{{ $buysell->quantity }}</td>
                                <td>{{ $buysell->price }}</td>
                                <td>{{ $buysell->total }}</td>
                                <td>{{ $buysell->bought_at }}</td>
                                <td>{{ $buysell->delivered_at }}</td>
                               
                    
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                    
                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    
                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{ URL::to('buysell/' . $buysell->id) }}">Show</a>
                    
                                   
                    
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