<!DOCTYPE html>

<html>
    <head>
        <title>Sonuçlar</title>

    </head>
    <body>

    <h1 style="text-align: center">Sonuçlar</h1>
    <table class="table" BGCOLOR="#24CAAC" border="2" ALIGN="center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">TC Kimlik</th>
            <th scope="col">Glukoz</th>
            <th scope="col">Kreatinin</th>
            <th scope="col">Ürik Asit</th>
            <th scope="col">ALT</th>
            <th scope="col">HDL - Kolestrol</th>
        </tr>
        </thead>
        <tbody>
        @foreach($result as $res)
            <tr>
                <th scope="row">{{$res->res_id}}</th>
                <td>{{$res->tc_identity}}</td>
                <td>{{$res->glukoz}}</td>
                <td>{{$res->kreatinin}}</td>
                <td>{{$res->urik_asit}}</td>
                <td>{{$res->ALT}}</td>
                <td>{{$res->kolestrol}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>



    </body>

</html>
