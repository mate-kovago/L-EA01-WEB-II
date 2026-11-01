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

    <h1>Film Szerkesztése</h1>
    <form action="{{ route('CRUD.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div><label>Cím</label><input type="text" name="cim" value="{{ old('cim', $film->cim) }}" required>@error('cim') <span>{{ $message }}</span> @enderror</div>
        <div><label>Gyártás</label><input type="number" name="gyartas" value="{{ old('gyartas', $film->gyartas) }}" required>@error('gyartas') <span>{{ $message }}</span> @enderror</div>
        <div><label>Hossz</label><input type="number" name="hossz" value="{{ old('hossz', $film->hossz) }}" required>@error('hossz') <span>{{ $message }}</span> @enderror</div>
        <div><label>Bemutato</label><input type="date" name="bemutato" value="{{ old('bemutato', $film->bemutato) }}" required>@error('bemutato') <span>{{ $message }}</span> @enderror</div>
         <div class="form-group">
        <label>
            <input type="hidden"
                   name="youtube"
                   value="0">

            <input type="checkbox"
                   name="youtube"
                   value="1"
                   {{ old('youtube', $film->youtube) ? 'checked' : '' }}>

            YouTube
        </label>

        @error('youtube')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
<div>
<a href="{{ route('CRUD.index') }}">Cancel</a>
<button type="submit">Update</button>
</div>
</form>
    

</body>
</html>