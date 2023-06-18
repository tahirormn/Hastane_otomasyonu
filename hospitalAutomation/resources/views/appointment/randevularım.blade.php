<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/home/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>HASTANE OTOMASYONU</title>

</head>
<body>

<header>
    <div class="navbar">
        <div class="logo">

            <img src="https://upload.wikimedia.org/wikipedia/tr/archive/9/9e/20200316220122%21Saglikbakanligi_logo.png" width="100" height="100"  alt="logo">
        </div>
        <ul class="nav_links">

            <li><a href="results">Sonuçlar</a></li>
            <li><a href="appointment">Randevu Al</a></li>
            <li><a href="randevularim">Randevularım</a></li>

        </ul>
    </div>
</header>

<h1 style="text-align: center">RANDEVULARIM</h1>
<table class="table" border="2" align="center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Poliklinik</th>
        <th scope="col">Randevu tarihi</th>
        <th scope="col">Randevu saati</th>
    </tr>
    </thead>
    <tbody>
    @foreach($appoint as $appo)
    <tr>
        <th scope="row">{{$appo->id}}</th>
        <td>{{$appo->department}}</td>
        <td>{{$appo->appoint_date}}</td>
        <td>{{$appo->appoint_time}}</td>
        <td> <a href="{{route('appointment.edit',$appo->id)}}" class="btn btn-info">Güncelle</a> </td>
        <td> <a href="{{route('delete',$appo->id)}}" class="btn btn-danger">sil</a> </td>
    </tr>
    @endforeach
    </tbody>
</table>

