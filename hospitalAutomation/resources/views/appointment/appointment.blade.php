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
    <form>
        <div class="user-box">
            <input type="text" name=""    required="">
            <label>Adınız</label>
        </div>
        <div class="user-box">
            <input type="text" name=""    required="">
            <label>Soyadınız</label>
        </div>
        <div class="user-box">
            <input type="text" name="" maxlength="11"   required="">
            <label>TC KİMLİK NUMARANIZ</label>
        </div>
        <div class="user-box">
            <label for="date"></label>
            <input type="date" id="date" name="date">
            <label for="time">Randevu Tarihi:</label>

        </div>
        <div class="user-box">
            <p>Saati giriniz:</p>
            <input type="time" id="time" name="time">
        </div>




        <div class="user-box">
            <label>Klinik Seçiniz</label> <br> <br>
            <select name="klinik" style="max-width:350px">
                <option value="0">------</option>
                <option value="1">Aile Hekimliği</option>
                <option value="2">Algoloji</option>
                <option value="3">Anesteziyoloji ve Reanimasyon</option>
                <option value="4">Beyin ve Sinir Cerrahisi</option>
                <option value="5">Cerrahi Onkolojisi</option>
                <option value="6">Çocuk Cerrahisi</option>
                <option value="7">Çocuk Diş Hekimliği</option>
                <option value="8">Çocuk Endokrinolojisi</option>
                <option value="9">Çocuk Gastroenterolojisi</option>
                <option value="10">Çocuk İmmünolojisi ve Alerji Hastalıkları</option>
                <option value="11">Çocuk Kardiyolojisi</option>
                <option value="12">Çocuk Nefrolojisi</option>
                <option value="13">Çocuk Nörolojisi</option>
                <option value="14">Çocuk Romatolojisi</option>
                <option value="15">Çocuk Sağlığı ve Hastalıkları</option>
                <option value="16">Çocuk Ürolojisi</option>
                <option value="17">Çocuk ve Ergen Ruh Sağlığı ve Hastalıkları</option>
                <option value="18">Deri ve Zührevi Hastalıkları (Cildiye)</option>
                <option value="19">>Diş Hekimliği (Genel Diş)</option>
                <option value="20">El Cerrahisi</option>
                <option value="21">Endodonti</option>
                <option value="22">Endokrinoloji ve Metabolizma Hastalıkları</option>
                <option value="23">Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji</option>
                <option value="24">Fiziksel Tıp ve Rehabilitasyon</option>
                <option value="25">Gastroenteroloji</option>
                <option value="26">Gastroenteroloji Cerrahisi</option>
                <option value="27">Geleneksel Tamamlayıcı Tıp Ünitesi</option>
                <option value="28">Genel Cerrahi</option>
                <option value="29">Geriatri</option>
                <option value="30">Göğüs Cerrahisi</option>
                <option value="31">Göğüs Hastalıkları</option>
                <option value="32">Göz Hastalıkları</option>
                <option value="33">Hematoloji</option>
                <option value="34">İç Hastalıkları (Dahiliye)</option>
                <option value="35">İmmünoloji ve Alerji Hastalıkları</option>
                <option value="36">Jinekolojik Onkoloji Cerrahisi</option>
                <option value="37">Kadın Hastalıkları ve Doğum</option>
                <option value="38">Kalp ve Damar Cerrahisi</option>
                <option value="39">Kardiyoloji</option>
                <option value="40">Klinik Nörofizyoloji</option>
                <option value="41">Kulak Burun Boğaz Hastalıkları</option>
                <option value="42">Nefroloji</option>
                <option value="43">Neonatoloji</option>
                <option value="44">Nöroloji</option>
                <option value="45">Ortodonti</option>
                <option value="46">Ortopedi ve Travmatoloji</option>
                <option value="47">Perinatoloji</option>
                <option value="48">Periodontoloji</option>
                <option value="49">Plastik, Rekonstrüktif ve Estetik Cerrahi</option>
                <option value="50">Protetik Diş Tedavisi</option>
                <option value="51">Radyasyon Onkolojisi</option>
                <option value="52">Restoratif Diş Tedavisi</option>
                <option value="53">Romatoloji</option>
                <option value="54">>Ruh Sağlığı ve Hastalıkları (Psikiyatri)</option>
                <option value="55">Sağlık Kurulu Erişkin</option>
                <option value="56">>Sağlık Kurulu ÇÖZGER (Çocuk Özel Gereksinim Raporu)</option>
                <option value="57">Sigarayı Bıraktırma Kliniği</option>
                <option value="58">Tıbbi Genetik</option>
                <option value="59">Tıbbi Onkoloji</option>
                <option value="60">Uyku Polikliniği</option>
                <option value="61">>Üroloji</option>
                <option value="62">>Ağız, Diş ve Çene Cerrahisi</option>
                <option value="63">Ağız, Diş ve Çene Radyolojisi</option>
            </select> <br> <br>
        </div>

        <div class="user-box">
            <input type="tel" name=""  maxlength="11"  required="">
            <label>Telefon Numaranızı Giriniz</label>
        </div>

        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Gönder
        </a>
    </form>











</div>


</body>
</html>
