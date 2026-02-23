<x-loginLayout title="Phanstore | Login">
    <form action="{{ route('attemptLogin') }}" method="post">
        @csrf
        <div class="input">
            <input type="text" placeholder="" value="{{ old('username') }}" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="input">
            <input type="password" placeholder="" value="{{ old('password') }}" name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="forgotPass">
            <a href="">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
       <div class="redirect">
           <p>Don't have an Account?</p><a href="{{ route('register') }}">Register</a>
       </div>
    </form>
</x-loginLayout>
