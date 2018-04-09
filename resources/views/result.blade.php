@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Look for order</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->status }}</td>
                        </tr>
                            
                    </table>


                </div>

                        

            </div>
        </div>
    </div>
</div>
@endsection
