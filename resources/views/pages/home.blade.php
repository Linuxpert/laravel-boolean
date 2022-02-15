@extends('layouts.main-layout')
@section('content')
    
    
    <postcard-table user="{{Auth::check()}}"></postcard-table>

@endsection