@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Showing {{ $product->name }}</div>

                <div class="panel-body">
               
                            <h2>{{ $product->name }}</h2>
                            <p>
                                <strong>Id:</strong> {{ $product->id }}<br>
                                <strong>Product SKU:</strong> {{ $product->urunSku }}<br>
                                <strong>Description:</strong> {{ $product->description }}<br>
                                <strong>Link:</strong> {{ $product->link }}<br>
                                 <strong>Price:</strong> {{ $product->price }}<br>
                            </p>
                            <hr>
                            
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>SKU</td>
                                        <td>Name</td>
                                        <td>Description</td>
                                        <td>Order Info</td>
                                        <td>In Hand</td>
                                        <td>Low</td>
                                        <td><b>Adet</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($stockItems as $stockItem)
                                    <tr>
                                        <td>{{ $stockItem->id }}</td>
                                        <td>{{ $stockItem->sku }}</td>
                                        <td>{{ $stockItem->name }}</td>
                                        <td>{{ $stockItem->description }}</td>
                                        <td>{{ $stockItem->orderInfo }}</td>
                                        <td>{{ $stockItem->inHand }}</td>
                                        <td>{{ $stockItem->low }}</td>
                            
                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>
                            
                                          <b>{{ $stockItem->pivot->adet }}</b>
                            
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








