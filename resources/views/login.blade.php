<head>
    <link rel="stylesheet" href="/css/registrationpage.css">
</head>
<body>
    <main>
        <h1>Log in</h1>
        <div class="parent">
        <form method="POST" action="/login">
            @csrf
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
        <form method="POST" action="/login">
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
            Log in
        </button>
</div>
        </form>
    </main>
</body>