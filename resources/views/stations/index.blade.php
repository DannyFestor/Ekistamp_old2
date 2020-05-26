@extends('layouts.app')

@section('content')
<div class="container">
    <station-index :prefectures='@json($prefectures)' :cities='@json($cities)' :stations='@json($stations)'></station-index>
</div>
@endsection
