<x-layouts.app title="Register">
    <h1> Register</h1>

    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')<div>{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="password_confirmation">Password confirmation:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</x-layouts.app>