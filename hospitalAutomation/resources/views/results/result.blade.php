<!DOCTYPE html>

<html>
    <head>
        <title>Sonuçlar</title>

    </head>
    <body>

    <h1 style="text-align: center">Sonuçlar</h1>
    <table class="table" border="2" align="center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Glukoz</th>
            <th scope="col">Kreatinin</th>
            <th scope="col">Ürik Asit</th>
            <th scope="col">ALT</th>
            <th scope="col">HDL - Kolestrol</th>
        </tr>
        </thead>
        <tbody>
        @foreach($db_data as $db)
            <tr>
                <th scope="row">{{$db->glukoz}}</th>
                <td>{{$db->kreatinin}}</td>
                <td>{{$db->urikAsit}}</td>
                <td>{{$db->alt}}</td>
                <td>{{$db->kolestrol}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>




    </body>

</html>
