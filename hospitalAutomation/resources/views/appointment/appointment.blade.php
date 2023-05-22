<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/appointment/appointment.css')}}">
    <title>Randevu al</title>

</head>
<body>
<div class="login-box">


    <h2>Randevu Al</h2>
<<<<<<< HEAD
<<<<<<< HEAD
    <form action="{{route('appointment')}}" method="post">
=======
    <form action="{{route("appointment")}}" method="post">
>>>>>>> bc3a81cfd0f98c42a8100a0070b7e91192755b3d
=======
    <form action="{{route("appointment")}}" method="post">
>>>>>>> bc3a81cfd0f98c42a8100a0070b7e91192755b3d
        @csrf
        <div class="user-box">
            <input type="text" name="name"    required="">
            <label>Adınız</label>
        </div>
        <div class="user-box">
            <input type="text" name="surname"    required="">
            <label>Soyadınız</label>
        </div>
        <div class="user-box">
            <input type="text" name="tc_identity" maxlength="11"   required="">
            <label>TC KİMLİK NUMARANIZ</label>
        </div>
        <div class="user-box">
            <label for="date"></label>
            <input type="date" id="date" name="appoint_date">
            <label for="time">Randevu Tarihi:</label>

        </div>
        <div class="user-box">
            <p>Saati giriniz:</p>
            <input type="time" id="time" name="appoint_time">
        </div>




        <div class="user-box">
            <label>Klinik Seçiniz</label> <br> <br>
            <select name="department" style="max-width:350px">
                <option value="0">------</option>
                <option value="1">Cerrahi Onkolojisi</option>
                <option value="2">Çocuk İmmünolojisi ve Alerji Hastalıkları</option>
                <option value="3">Çocuk Sağlığı ve Hastalıkları</option>
                <option value="4">Deri ve Zührevi Hastalıkları (Cildiye)</option>
                <option value="5">>Diş Hekimliği (Genel Diş)</option>
                <option value="6">Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji</option>
                <option value="7">Fiziksel Tıp ve Rehabilitasyon</option>
                <option value="8">Gastroenteroloji</option>
                <option value="9">Genel Cerrahi</option>
                <option value="10">Göğüs Cerrahisi</option>
                <option value="11">Göğüs Hastalıkları</option>
                <option value="12">Göz Hastalıkları</option>
                <option value="13">İç Hastalıkları (Dahiliye)</option>
                <option value="14">İmmünoloji ve Alerji Hastalıkları</option>
                <option value="15">Kadın Hastalıkları ve Doğum</option>
                <option value="16">Kalp ve Damar Cerrahisi</option>
                <option value="17">Kardiyoloji</option>
                <option value="18">Kulak Burun Boğaz Hastalıkları</option>
                <option value="19">Nöroloji</option>
                <option value="20">Ortopedi ve Travmatoloji</option>
                <option value="21">Plastik, Rekonstrüktif ve Estetik Cerrahi</option>
                <option value="22">Romatoloji</option>
                <option value="23">>Ruh Sağlığı ve Hastalıkları (Psikiyatri)</option>
                <option value="24">Sigarayı Bıraktırma Kliniği</option>
            </select> <br> <br>
        </div>

        <div class="user-box">
            <input type="tel" name="tel_num"  maxlength="11"  required="">
            <label>Telefon Numaranızı Giriniz</label>
        </div>

        <button style="background-color:rgb(20,30,48);color:white;width:90px; height:35px; font-size: 16px;
        border: solid 7px rgb(20,30,48); cursor: pointer; outline: none; border-radius: 30px;" name="gonder">Gönder</button>
    </form>
</div>
</body>
</html>
