@extends("layoutauth")
@section("title")
    Edit Account:
    {{auth()->user()->username}}
@endsection
@section("default_section")
    <form method="POST" action="/logged/account/edit">
            @csrf
            @method('PATCH')
            <div class="child">
            <label for="name">
                Name: 
            </label>

            <input
                type="text"
                name="name"
                id="name" 
                value="{{auth()->user()->name}}"
                    required>
        @error("name")
            <p class="error"> {{$message}} </p>
        @enderror 
     </div>
            <br>
            <div class="child">
            <label for="username">
                Username: 
            </label>

            <input
                type="text"
                name="username"
                id="username"
                value="{{auth()->user()->username}}"
                required>
            @error("username")
            <p class="error"> {{$message}}</p>
        @enderror 
    </div>
            <br>
            <div class="child">
            <label for="email">
                Email: 
            </label>

            <input
                type="email"
                name="email"
                id="email"
                value="{{auth()->user()->email}}"
                required>
            </div>
            @error("email")
            <p class="error"> {{$message}} </p>
        @enderror 
    <br>
    <div class="child">
            <label for="password">
                Password: 
            </label>

            <input
                type="password"
                name="password"
                id="password"
                value=""
                required>
        @error("password")
            <p class="error"> {{$message}} </p>
        @enderror  
    </div>  

    <div class="child nav_button">
        <button type="submit">
            Edit account
        </button></div>
</form>
@endsection
