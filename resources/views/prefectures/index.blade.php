@extends('layouts.app')

@section('content')
<div class="container">
    <prefecture-index :prefectures='@json($prefectures)'></prefecture-index>
</div>
@endsection
