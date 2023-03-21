<head>
    <link rel="stylesheet" href="/css/registrationpage.css">
</head>
<body>
    <main>
        <h1>Register</h1>
        <div class="parent">
        <form method="POST" action="/register">
        @csrf
            <div class="child">
          <label for="name">
              Name: 
          </label>
        <!-- old tag used to remember the old inserted value -->
          <input
             type="text"
                 id="name"
                 name="name"
                 value="{{old('name')}}"  
                 require>
        <!--  Error messages -->
        @error("name")
            <p class="error"> {{$message}} </p>
        @enderror

        </div>
        <form method="POST" action="/register">
            <div class="child" >
          <label for="username">
              Username: 
          </label>

          <input 
             type="text"
                 id="username"
                 name="username"
                 value="{{old('username')}}"
                 required>
        @error("username")
            <p class="error"> {{$message}} </p>
        @enderror
        </div>
        <form method="POST" action="/register">
            <div class="child">
          <label for="email">
              Email: 
          </label>

          <input 
             type="email"
                 id="email"
                 name="email"
                 value="{{old('email')}}"
                 require>
        @error("email")
            <p class="error"> {{$message}} </p>
        @enderror
      </div>
        <form method="POST" action="/register">
            <div class="child">
          <label for="password">
              Password: 
          </label>

          <input 
             type="password"
                 id="password"
                 name="password"
                 require>
        @error("password")
            <p class="error"> {{$message}} </p>
        @enderror
      </div>

      <div class="mb-6 child">
        <button type="submit">
            Submit
        </button>
</div>
        </form>
    </main>
</body>
