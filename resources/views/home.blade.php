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

                    <form method="post" action="/result">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="search">
                        <input type="submit" name="submit">
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
