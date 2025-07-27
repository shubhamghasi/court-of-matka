<!DOCTYPE html>
<html>

<head>
    <title>Send Test Email</title>
</head>

<body>
    <h2>Send Test Email</h2>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('email.send') }}">
        @csrf
        <label for="email">Enter Email Address:</label>
        <input type="email" name="email" required>
        <button type="submit">Send</button>
    </form>
</body>

</html>