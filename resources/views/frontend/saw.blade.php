<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Normalized</title>

   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Alternative</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C7</th>
                    <th>C8</th>
                    <th>C9</th>
                    <th>C10</th>
                    <th>C11</th>
                    <th>C12</th>
                    <th>C13</th>
                    <th>C14</th>
                    <th>C15</th>
                    <th>C16</th>
                    <th>C17</th>
                    <th>C18</th>
                    <th>C19</th>
                </tr>
            </thead>
            <tbody>
                @foreach($normalizedScores as $item)
                    <tr>
                        <td>A{{ $number++ }}</td>
                        <td>{{ $item['processor_manufacturer_n'] }}</td>
                        <td>{{ $item['processor_class_n'] }}</td>
                        <td>{{ $item['processor_base_speed_n'] }}</td>
                        <td>{{ $item['processor_core_n'] }}</td>
                        <td>{{ $item['gpu_manufacturer_n'] }}</td>
                        <td>{{ $item['gpu_class_n'] }}</td>
                        <td>{{ $item['gpu_memory_n'] }}</td>
                        <td>{{ $item['ram_n'] }}</td>
                        <td>{{ $item['storage_type_n'] }}</td>
                        <td>{{ $item['storage_size_n'] }}</td>
                        <td>{{ $item['price_n'] }}</td>
                        <td>{{ $item['display_size_n'] }}</td>
                        <td>{{ $item['display_resolution_n'] }}</td>
                        <td>{{ $item['display_refresh_rate_n'] }}</td>
                        <td>{{ $item['brand_n'] }}</td>
                        <td>{{ $item['unit_weight_n'] }}</td>
                        <td>{{ $item['design_n'] }}</td>
                        <td>{{ $item['feature_n'] }}</td>
                        <td>{{ $item['backlit_keyboard_n'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="20" class="text-center">Nilai <em>Rating</em> Kinerja Ternormalisasi</th>
                </tr>
            </tfoot>
        </table>    
    </div>
   <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>