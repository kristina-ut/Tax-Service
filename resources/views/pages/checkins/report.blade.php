<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>
    </head>
    <body>
        <div>
            <p><strong>User Name:</strong> {{$data[0]->name}}</p>
            <p><strong>Email:</strong> {{$data[0]->email}}</p>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>

                    <th>Working time</th>

                    <th>Payamount</th>

                    <th>Paidtime</th>

                </tr>

                <?php $total = 0; $i = 0; ?>
                @foreach($data as $list)
                <tr>

                    <td>{{ $i++ }}</td>

                    <td>{{ $list->workingtime }}</td>
                    <?php $total += $list->workingtime; ?>

                    <td>{{ $list->created_at }}</td>

                    <td>${{ 15*$list->workingtime }}</td>

                </tr>
                @endforeach
                <tr>

                    <td>Total</td>

                    <td>{{ $total }}</td>

                    <td>{{ date('Y-m-d H:i:s') }}</td>

                    <td>${{ 15*$total }}</td>

                </tr>

            </table>
        </div>
    </body>
</html>


