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
    <form action="{{route("register")}}" method="post">
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
            <input type="text" name="birthplace"    required="">
            <label> Doğum yeri</label>
        </div>
        <div class="user-box" style="color: #fff;">

            Doğum tarihi:
            <input type="date" name="birthdate"> <br />

        </div>




     <!--   <div class="user-box">
            <label>Kan Grubu</label> <br> <br>
            <select name="blood_id" size="1"> <br>

                <option value="A">A Rh+</option>
                <option value="B">A Rh-</option>
                <option value="B">B Rh+</option>
                <option value="0">B Rh-</option>
                <option value="A">AB Rh+</option>
                <option value="B">AB Rh-</option>
                <option value="B">0 Rh+</option>
                <option value="0">0 Rh-</option>

            </select> <br> <br>


        </div> -->
        <div class="user-box">
            <input type="tel" name="tel_num"  maxlength="11"  required="">
            <label>Telefon</label>
        </div>

        <div class="user-box">
            <input type="text" name="email"    required="">
            <label>E-mail</label>
        </div>

        <div class="user-box">
            <input type="password" name="password"    required="">
            <label>Şifre</label>
        </div>

        <button style="background-color:rgb(20,30,48);color:white;width:90px; height:35px; font-size: 16px;
        border: solid 7px rgb(20,30,48); cursor: pointer; outline: none; border-radius: 30px;">Kayıt Ol </button>


    </form>
</div>

</body>
</html>
