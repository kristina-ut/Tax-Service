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
            <table class="table table-bordered">
                <tr>
                    <th>No</th>

                    <th>Employee Name</th>

                    <th>Email</th>

                    <th>Working time</th>

                    <th>Payamount</th>


                </tr>

                <?php $i = 0; ?>
                @foreach($data as $list)
                <tr>

                    <td>{{ ++$i }}</td>

                    <td>{{ $list->name }}</td>

                    <td>{{ $list->email }}</td>

                    <td>{{ $list->total_workingtime }}</td>

                    <td>${{ 15*$list->total_workingtime }}</td>

                </tr>
                @endforeach

            </table>
        </div>
    </body>
</html>
