<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Rank</title>

   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Alternative</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alternativeRanks as $alt)
                    <tr>
                        <td>{{ $rank++ }}</td>
                        <td>{{ $alt->alternative_name }}</td>
                        <td>{{ $alt->final_score }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="20" class="text-center">Hasil Pe-<em>ranking</em>-an</th>
                </tr>
            </tfoot>
        </table>    
    </div>
   <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>