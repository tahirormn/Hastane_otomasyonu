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
