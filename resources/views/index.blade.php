@extends('layouts.app')

@section('main')
<div data-barba="mycontainer">
    @include('parts.header')
    @include('parts.content')
</div>
@endsection