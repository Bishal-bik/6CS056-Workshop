
<nav>
    <a href="{{ url('/') }}"><strong>Training Institute</strong></a>
    @auth
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('courses.index') }}">Courses</a>
        Logged in as {{ auth()->user()->name }}{{ auth()->user()->isAdmin() ? ' (Admin)' : '' }}

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest
</nav>
<hr>