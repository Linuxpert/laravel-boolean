@extends('layouts.main-layout')
@section('content')
    
    
    <a  class="btn btn-primary" href="{{route('postcard.create')}}">ADD NEW POSTCARD</a>
    <postcard-table user="{{Auth::check()}}"></postcard-table>

@endsection