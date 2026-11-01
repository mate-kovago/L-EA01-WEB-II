<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Filmek listája</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #eeeeee;
        }
    </style>
</head>
<body>

    <h1>Üzenet küldése</h1>
    
    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif
    @if(session('failed'))
    <div>{{ session('failed') }}</div>
    @endif
    <form action="/kapcsolat" method="POST">
        @csrf
        <div><label>e-mail</label><input type="text" name="email" value="{{ old('email') }}" required>@error('email') <span>{{ $message }}</span> @enderror</div>
        <div><label>Üzenet</label><input type="text" name="uzenet" value="{{ old('uzenet') }}" required>@error('uzenet') <span>{{ $message }}</span> @enderror</div>
        
<div>
<a href="/">Cancel</a>
<button type="submit">submit</button>
</div>
</form>
    

</body>
</html>