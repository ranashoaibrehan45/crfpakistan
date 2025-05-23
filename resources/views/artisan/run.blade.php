<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artisan</title>
</head>
<body>
    <div class="container">
        <h3>Run Artisan Command</h3>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
            <pre>{{ session('output') }}</pre>
        @endif

        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('artisan.run') }}">
            @csrf
            <label for="command">Artisan Command:</label>
            <input type="text" name="command" placeholder="config:clear" required>
            <button type="submit">Run</button>
        </form>
    </div>
</body>
</html>