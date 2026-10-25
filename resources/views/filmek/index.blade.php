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

    <table>
        <thead>
            <tr>
                <th>Film címe</th>
                <th>Bemutató dátuma</th>
                <th>Rendező</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($filmek as $film)
                <tr>
                    <td>{{ $film->cim }}</td>

                    <td>
                        {{ $film->bemutato ?? 'Nincs adat' }}
                    </td>

                    <td>
                        {{
                            $film->feladatok
                                ->first()?->szemely?->nev
                                ?? 'Nincs rendező'
                        }}
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