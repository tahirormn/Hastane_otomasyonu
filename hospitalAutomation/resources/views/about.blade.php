<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/about/about.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>about</title>
</head>
@extends('layouts.app')
@section('title')
    About
@endsection
@section('css')
    {{url('css/home/style.css')}}
    @endsection


@section('body')
    <body>

    <div class="sol">
        <h1>HAKKIMIZDA</h1> <br>
        <p>En Değerli Varlığınız Sağlığınız… <br>

            “Toplumun geneline tüm sağlık hizmetlerinin tam  teşekküllü  sunulması sağlıklı toplumun temel taşını oluşturmaktadır. Her birey kaliteli, güler yüzlü, saygılı, şeffaf ve eşit sağlık hizmeti alma hakkına sahiptir” anlayışı ile yola çıkan Numune Hastaneleri 5 hastanesi ile hizmet vermektedir.

            Numune Hastaneleri toplam kalite anlayışı ile tıbbi etik değerlerden ödün vermeden, her biri alanında uzman hekimleri ve sağlık çalışanları ile güncel, koruyucu ve iyileştirici sağlık hizmetleri ile tıbbın gelişimine katkıda bulunmayı ilke edinmiştir.

            Sağlık sektörüne ilk yatırımını 1998 yılında Malatya’da yapan Numune Hastaneleri arkasından Adıyaman, Konya ve Bolu olmak üzere tıp merkezi, fizik tedavi merkezi, görüntüleme ve diyaliz merkezi gibi çeşitli sağlık yatırımlarında bulunmuştur.

            Sağlıkta profesyonel yaklaşımı ve güncel tanı tedavi yöntemleriyle çıtasını sürekli yükselten Numune Hastaneleri, bugün Malatya, Adıyaman ve İzmir’de toplamda 5 hastane ve 2 cerrahi tıp merkezi ile hizmet vermeyi sürdüren güçlü bir sağlık grubudur.

            Sağlık alanındaki yatırımlarına önümüzdeki yıllarda da devam edecek olan Numune Hastaneleri’nin Aydın’da devam eden hastane projesinin tamamlanması ile birlikte hizmet verdiği hastane sayısı altı olacaktır.</p>
    </div>

    <div class="sag">
        <h1>İletişim Bilgileri</h1>
        <div class="kutu">

            <h4 class="fontNeuron">Numune Hastanesi iletişim</h4> <br> <br> <br> <br>

            <address class="adr">


                <div class="item">
                    <i class="fi flaticon-mail"></i>
                    <span class="text"><a href="mailto:info@numunehastanesi.com.tr">info@numunehastanesi.com.tr</a></span> <br> <br> <br>
                </div>
            </address>
            <ul class="sosyalmediaikonları">
                <li><a href= "#" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-google"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
            <br>


        </div>



    </div>
    </div>
    </div>

    </body>
</html>



@endsection
