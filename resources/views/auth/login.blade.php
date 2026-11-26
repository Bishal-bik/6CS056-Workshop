<x-layouts.app title="Login">
    <h1> Login</h1>

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
</x-layouts.app>






