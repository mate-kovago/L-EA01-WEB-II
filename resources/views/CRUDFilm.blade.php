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

    <h1>Filmek listája</h1>
    <a href="{{ route('CRUD.create') }}" >Új film létrehozása</a>

    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif
    @if(session('failed'))
    <div>{{ session('failed') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cím</th>
                <th>Gyártás</th>
                <th>Hossz</th>
                <th>Bemutató</th>
                <th>YouTube</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse ($filmek as $film)
                <tr>
                    <td>{{$film->id}}</td>
                    <td>{{ $film->cim }}</td>

                    <td>
                        {{ $film->gyartas ?? 'Nincs adat' }}
                    </td>
                    <td>
                        {{ $film->hossz ?? 'Nincs adat' }}
                    </td>
                    <td>
                        {{ $film->bemutato ?? 'Nincs adat' }}
                    </td>
                    <td>
                        {{ $film->YouTube ? '✅' : '❌' }}
                    </td>
                    <td>
                        <a href="{{ route('CRUD.edit', $film->id) }}">Edit</a>
                        <form action="{{ route('CRUD.destroy', $film->id) }}"
                            method="POST"
                            onsubmit="return confirm('Biztos, hogy törölni szeretnéd?')">

                            @csrf
                            @method('DELETE')

                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        Nincs film az adatbázisban.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>