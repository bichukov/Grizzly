
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <!-- Добавляем стили из CDN -->

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


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
<img class="img" src="/images/<?=$a["IMG"]?>"/>
    <h2 class="qw" style="">
        <?=$name?>
    </h2>
<label class="lable">
   <?=$a["TEXT"]?>
</label>
</div>
<?}?>

    </div>



</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/owl.carousel.min.js"></script>


<script src="js/app.js"></script>



<!-- Initialize Swiper -->
<script>

    const mediaQuery = window.matchMedia('(max-width: 320px)')


    if (mediaQuery.matches) {
        $("#ow").addClass('our_staff owl-carousel owl-theme');
        $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay:true,
            autoplayTimeout:3000,
            dots: true,



        });





    });}
</script>
</body>

</html>
<?php
