@extends('layouts.app')

@section('content')
<h1>{{auth()->user()->name}}</h1>
@endsection