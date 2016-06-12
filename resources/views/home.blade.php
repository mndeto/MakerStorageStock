@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                
                  
                
                
                
                

                <div class="panel-body">
              
                   
                 <center>
                <table border='0' style="width: 100%">
                  <tr>
                    <th><center><a href="products"><img src="images/product.png" height="150" width="150"></img></a></center> </th>
                    <th><center><a href="stockItems"><img src="images/ic.png" height="150" width="150"></img></a></center> </th>
                    <th><center> <a href="stockItems/critical"><img src="images/lowstock.png" height="142" width="142"></img></a></center> </th>
                    <th><center> <a href="buysell"><img src="images/buysell.png" height="142" width="142"></img></a></center> </th>
                  </tr>
                  <tr>
                    <td><center><a href="products"> Products</a></center> </td>
                    <td><center><a href="stockItems">Stock Items</a></center> </td>
                    <td><center> <a href="stockItems/critical">Critical Stock Items</a></center> </td>
                    <td><center> <a href="buysell">Buy Sell Records</a></center> </td>
                  </tr>
                </table>
                   
                 
                   
                 
                   
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
