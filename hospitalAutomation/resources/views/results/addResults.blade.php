<!DOCTYPE html>

<html>
<head>
    <title>Sonuç Gir</title>
    <link rel="stylesheet" href="{{url('css/register/register.css')}}">
</head>
<body>

<div class="login-box">
    <a href="/">
        <img src="https://upload.wikimedia.org/wikipedia/tr/archive/9/9e/20200316220122%21Saglikbakanligi_logo.png" width="100" height="100"  alt="logo">
    </a>
    <h2>Sonuç Ekleme Sistemi</h2>
    @if (session('error'))
        <div class="alert alert-error" style="color:darkred">
            <ul>
                <li>{{session('error')}}</li>
            </ul>
        </div>
    @endif
    <div style="background-color: #b65b2a">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    <form action="{{route('addresult')}}" method="" enctype="multipart/form-data">
        @csrf

        <div class="user-box">
            <input type="text" name="tc_identity" maxlength="11"   required="">
            <label>TC KİMLİK NUMARASI</label>
        </div>
        <div class="user-box">
            <input type="file" name="sonuc_dosya"    required="">
            <label>Tahlil</label>
        </div>


        <button type="submit" style="background-color:rgb(20,30,48);color:white;width:90px; height:35px; font-size: 16px;
        border: solid 7px rgb(20,30,48); cursor: pointer; outline: none; border-radius: 30px;">Kaydet</button>

    </form>
</div>

</body>

</html>
