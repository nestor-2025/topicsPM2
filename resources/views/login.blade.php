<x-layout>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h1>Log In</h1>
    <form action="/login" method="post">
    @csrf

    <div>
        <x-input title="Email" type="text" nombre="email"/>
            @error('email')
                <p> {{ $message }} </p>
            @enderror
    </div>
    <div>
        <x-input title="Password" type="password" nombre="password"/>
            @error('password')
                <p> {{ $message }} </p>
            @enderror
    </div>
    <button type="submit" class="text-xl border p-6">Log In</button>

    </form>
</x-layout>
