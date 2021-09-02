<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>
    </head>
    <body>
        <div class="row">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created_at</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>{{ $data->service_id }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>Hold</td>
                </tr>
            </table>
        </div>
    </body>
</html>
