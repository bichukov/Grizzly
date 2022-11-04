<? include("array.php"); ?>
<? include("blocks.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </style>
</head>
<body>
<section>
    <form class="form" action="#" data-name="Форма вверху" name="sale">
        <label for="codtel">Определить номер</label>
        <input type="tel" id="codtel">
        <button type="submit" class="">Начать</button>
    </form>
</section>
<section>

    <h1 class="hq">Korzyści ze współpracy z nami</h1>

    <div id="ow" class="block1 ">
        <? foreach ($emp as $name => $a) {
            ?>
            <div class="block">
                <img class="img" src="/images/<?= $a["IMG"] ?>"/>
                <h2 class="qw" style="">
                    <?= $name ?>
                </h2>
                <label class="lable">
                    <?= $a["TEXT"] ?>
                </label>
            </div>
        <? } ?>

    </div>
</section>

<section>



    <div class="n1 modal1 fade modal " id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">У нас тут cookies...</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Посещая наш сайт, вы соглашаетесь на использование файлов cookie. Если вы не согласны на
                    использование cookie, следует немедленно закрыть вкладки и окна с нашим сайтом.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button id="save" type="button" class="btn btn-primary" data-bs-dismiss="modal">Принять</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
<script src="js/app.js"></script>
<!-- Initialize Swiper -->
<script>
    function getCookie(user) {
        var matches = document.cookie.match(new RegExp("(?:^|; )" + user.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
        return matches ? decodeURIComponent(matches[1]) : undefined;

    }

    if (getCookie('user') == undefined) {
        var fn = function () {
            $("#exampleModalCenter").modal('show');

        }
        setTimeout(fn, 5000);
    }
    console.log(getCookie('user')); // user
    window.onload = function () {
        var a = document.getElementById('save');
        a.onclick = function EnterBtn() {
            let date = new Date(Date.now() + 86400e3);
            date = date.toUTCString();
            document.cookie = "user=z2; expires=" + date;
        }
    }

    const mediaQuery = window.matchMedia('(max-width: 320px)')
    if (mediaQuery.matches) {
        $("#ow").addClass('our_staff owl-carousel owl-theme');
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                dots: true,
            });

        });
    }
</script>
</body>

</html>

