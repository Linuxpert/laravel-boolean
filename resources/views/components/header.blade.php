<header>
    <h1>
        Postcards
    </h1>

    @auth
        <h1>Hello {{Auth::user() -> name}}</h1>

        <a href="{{route('logout')}}" class="btn btn-danger">LOGOUT</a>
    @else
    <form action="{{route('login')}}" method="POST">
    
        @method('POST')
        @csrf
        <label for="email">EMAIL</label><br>
        <input type="email" name="email"><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" name="password"><br>

        <br>

        <button  type="submit" class="btn btn-primary">LOGIN</button>
    </form>

    <form action="{{route('register')}}" method="POST">
    
        @method('POST')
        @csrf

        <label for="name">NAME</label><br>
        <input type="text" name="name"><br>
        <label for="email">EMAIL</label><br>
        <input type="email" name="email"><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" name="password"><br>
        <label for="password_confirmation">PASSWORD CONFIRMATION</label><br>
        <input type="password" name="password_confirmation"><br>

        <button  type="submit" class="btn btn-primary">REGISTER</button>
    
    </form>
    
    @endauth
</header>