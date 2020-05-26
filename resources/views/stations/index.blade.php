@extends('layouts.app')

@section('content')
<div class="container">
    <station-index :prefectures='@json($prefectures)'></station-index>
</div>
@endsection
