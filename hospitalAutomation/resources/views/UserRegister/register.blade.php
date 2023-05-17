<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt OL</title>
    <link rel="stylesheet" href="{{url('css/register/register.css')}}">
</head>
<body>

<div class="login-box">



    <h2>Kayıt Ol</h2>
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
            <input type="text" name=""    required="">
            <label> Doğum yeri</label>
        </div>
        <div class="user-box" style="color: #fff;">

            Doğum tarihi:
            <input type="date"> <br />

        </div>




        <div class="user-box">

            <label>Kan Grubu</label> <br> <br>
            <select name="kangrubu" size="1"> <br>

                <option value="A">A Rh+</option>
                <option value="B">A Rh-</option>
                <option value="B">B Rh+</option>
                <option value="0">B Rh-</option>
                <option value="A">AB Rh+</option>
                <option value="B">AB Rh-</option>
                <option value="B">0 Rh+</option>
                <option value="0">0 Rh-</option>

            </select> <br> <br>


        </div>
        <div class="user-box">
            <input type="tel" name=""  maxlength="11"  required="">
            <label>Telefon</label>
        </div>
        <div class="user-box">
            <input type="password" name=""    required="">
            <label>Şifre</label>
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
