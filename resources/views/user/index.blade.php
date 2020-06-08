@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            User Information
        </div>
        <div class="col-8">
            Registered Stamps
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
        <div class="col-8"><user-stations :stations='@json($stations)'></user-stations></div>
    </div>
</div>
@endsection
