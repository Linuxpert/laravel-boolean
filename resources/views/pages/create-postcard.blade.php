@extends('layouts.main-layout')
@section('content')

    
    @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif

    <form action="{{route('postcard.store')}}" method="post" enctype="multipart/form-data">
    
        @method("post")
        @csrf
        
        <label for="sender">Sender:</label>
        <input type="text" name="sender" placeholder="sender"> <br>
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="address"> <br>
        <label for="text">Text:</label>
        <input type="text" name="text" placeholder="text"> <br>
        <label for="image">Image:</label>
        <input type="file" name="image"> <br>
        <input type="submit" value="CREATE">


    </form>

    <a href="{{  route('home')}}">
        torna alla home
    </a>



@endsection