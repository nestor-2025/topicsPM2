<x-layout>
<!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

    <form action="/register" method="post">
    @csrf
    <h1>Register</h1>

        <div>
            <label for="">Name</label>
            <input type="text" name="name">
                @error('name')
                    <p> {{ $message }} </p>
                @enderror
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email">
            @error('email')
                    <p> {{ $message }} </p>
                @enderror
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password">
            @error('password')
                    <p> {{ $message }} </p>
                @enderror
        </div>

        <div>
            <label for="">Birthday</label>
            <input type="date" name="birthday">
                @error('birthday')
                    <p> {{ $message }} </p>
                @enderror
        </div>

        <button type="Submit" class="text-xl border p-6">Send</button>
    </form>
</x-layout>

