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

    <h1>Uzenetek listája</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>e-mail</th>
                <th>Üzenet</th>
                <th>Érkezett</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($uzenetek as $uzenet)
                <tr>
                    <td>{{$uzenet->id}}</td>
                    <td>{{ $uzenet->email }}</td>
                    <td>{{ $uzenet->uzenet }}</td>
                    <td>
                        {{ $uzenet->created_at ?? 'Nincs adat' }}
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        Nincs üzenet az adatbázisban.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>