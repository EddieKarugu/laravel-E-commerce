<x-loginLayout title="Phanstore | Register">
    <form action="{{ route('attemptRegister') }}" method="post">
        @csrf
        <div class="input">
            <input type="text" placeholder="" value="{{ old('username') }}" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="input">
            <input type="email" placeholder="" value="{{ old('email') }}" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input">
            <input type="password" placeholder="" name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="input">
            <input type="password" placeholder="" name="password_confirmation" required>
            <label for="password_confirmation">Confirm Password</label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="redirect">
            <p>Already have an Account?</p><a href="{{ route('login') }}">Login</a>
        </div>
    </form>
</x-loginLayout>
