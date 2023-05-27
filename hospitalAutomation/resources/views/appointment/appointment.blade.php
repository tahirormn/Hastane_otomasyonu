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
    <form action="{{route("appointment")}}" method="post">
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
            <label>Randevu saatini seçiniz</label> <br> <br>
            <select name="appoint_time"  style="max-width:100px">
                <option >------</option>
                <option value="09:00">9:00</option>
                <option value="09:15">9:15</option>
                <option value="09:30">9:30</option>
                <option value="09:45">9:45</option>
                <option value="10:00">10:00</option>
                <option value="10:15">10:15</option>
                <option value="10:30">10:30</option>
                <option value="10:45">10:45</option>
                <option value="11:00">11:00</option>
                <option value="11:15">11:15</option>
                <option value="11:30">11:30</option>
                <option value="11:45">11:45</option>
                <option value="13:30">13:30</option>
                <option value="13:45">13:45</option>
                <option value="14:00">14:00</option>
                <option value="14:15">14:15</option>
                <option value="14:30">14:30</option>
                <option value="14:45">14:45</option>
                <option value="15:00">15:00</option>
                <option value="15:15">15:15</option>
                <option value="15:30">15:30</option>
                <option value="15:45">15:45</option>
                <option value="16:00">16:00</option>
                <option value="16:15">16:15</option>
                <option value="16:30">16:30</option>
                <option value="16:45">16:45</option>
            </select> <br> <br> </div>



        <div class="user-box">
            <label>Klinik Seçiniz</label> <br> <br>
            <select name="department" style="max-width:350px">
                <option value="0">------</option>
                <option value="Cerrahi Onkolojisi">Cerrahi Onkolojisi</option>
                <option value="Çocuk İmmünolojisi ve Alerji Hastalıkları">Çocuk İmmünolojisi ve Alerji Hastalıkları</option>
                <option value="Çocuk Sağlığı ve Hastalıkları">Çocuk Sağlığı ve Hastalıkları</option>
                <option value="Deri ve Zührevi Hastalıkları (Cildiye)">Deri ve Zührevi Hastalıkları (Cildiye)</option>
                <option value="Diş Hekimliği (Genel Diş)">>Diş Hekimliği (Genel Diş)</option>
                <option value="Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji">Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji</option>
                <option value="Fiziksel Tıp ve Rehabilitasyon">Fiziksel Tıp ve Rehabilitasyon</option>
                <option value="Gastroenteroloji">Gastroenteroloji</option>
                <option value="Genel Cerrahi">Genel Cerrahi</option>
                <option value="Göğüs Cerrahisi">Göğüs Cerrahisi</option>
                <option value="Göğüs Hastalıkları">Göğüs Hastalıkları</option>
                <option value="Göz Hastalıkları">Göz Hastalıkları</option>
                <option value="İç Hastalıkları (Dahiliye)">İç Hastalıkları (Dahiliye)</option>
                <option value="İmmünoloji ve Alerji Hastalıkları">İmmünoloji ve Alerji Hastalıkları</option>
                <option value="Kadın Hastalıkları ve Doğum">Kadın Hastalıkları ve Doğum</option>
                <option value="Kalp ve Damar Cerrahisi">Kalp ve Damar Cerrahisi</option>
                <option value="Kardiyoloji">Kardiyoloji</option>
                <option value="Kulak Burun Boğaz Hastalıkları">Kulak Burun Boğaz Hastalıkları</option>
                <option value="Nöroloji">Nöroloji</option>
                <option value="Ortopedi ve Travmatoloji">Ortopedi ve Travmatoloji</option>
                <option value="Plastik, Rekonstrüktif ve Estetik Cerrahi">Plastik, Rekonstrüktif ve Estetik Cerrahi</option>
                <option value="Romatoloji">Romatoloji</option>
                <option value="Ruh Sağlığı ve Hastalıkları (Psikiyatri)">Ruh Sağlığı ve Hastalıkları (Psikiyatri)</option>
                <option value="Sigarayı Bıraktırma Kliniği">Sigarayı Bıraktırma Kliniği</option>
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
