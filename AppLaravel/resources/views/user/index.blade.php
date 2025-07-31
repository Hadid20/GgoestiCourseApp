@extends('component.app')
@section('content')
{{ Auth()->User()->name }}
@endsection