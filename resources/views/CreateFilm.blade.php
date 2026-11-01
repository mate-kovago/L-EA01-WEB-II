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

    <h1>Új Film létrehozása</h1>
    <form action="{{ route('CRUD.store') }}" method="POST">
        @csrf
        <div><label>Cím</label><input type="text" name="cim" value="{{ old('cim') }}" required>@error('cim') <span>{{ $message }}</span> @enderror</div>
        <div><label>Gyártás</label><input type="number" name="gyartas" value="{{ old('gyartas') }}" required>@error('gyartas') <span>{{ $message }}</span> @enderror</div>
        <div><label>Hossz</label><input type="number" name="hossz" value="{{ old('hossz') }}" required>@error('hossz') <span>{{ $message }}</span> @enderror</div>
        <div><label>Bemutato</label><input type="date" name="bemutato" value="{{ old('bemutato') }}" required>@error('bemutato') <span>{{ $message }}</span> @enderror</div>
         <div class="form-group">
        <label>
            <input type="hidden"
                   name="youtube"
                   value="0">

            <input type="checkbox"
                   name="youtube"
                   value="1"
                   {{ old('youtube', 0) ? 'checked' : '' }}>

            YouTube
        </label>

        @error('youtube')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
<div>
<a href="{{ route('CRUD.index') }}">Cancel</a>
<button type="submit">submit</button>
</div>
</form>
    

</body>
</html>