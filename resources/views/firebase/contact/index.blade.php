<div>

    @if (session('status'))
        {{ session('status') }}
    @endif
    <form method="POST" action="{{ route('add-contact') }}">
        @csrf
        <input type="text" name="first_name" placeholder="First Name" required> <br>
        <input type="text" name="last_name" placeholder="Last Name" required> <br>
        <input type="text" name="phone" placeholder="Phone Number" required> <br>
        <input type="email" name="email" placeholder="Email Address" required> <br>
        <button>Save</button>
    </form>
</div>
