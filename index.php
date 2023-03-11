<?php

	$db = new PDO("mysql:host=localhost;dbname=kekharshop","kekharshop","kekharshop");

	$info = [];

	if ($query = $db->query("SELECT * FROM kekharshop")) {
		$info = $query->fetchAll(PDO::FETCH_ASSOC);
	} else {
		print_r($db->erorrInfo());
	}

?>


<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.8.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/video-game-128x128.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Главная</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="header17 cid-twCM0QCMvC mbr-fullscreen mbr-parallax-background" id="header17-0">

    

    

    <div class="align-center container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <h1 class="mbr-section-title mb-3 mbr-fonts-style display-1">
                    <strong>Добро пожаловать</strong><strong><br></strong></h1>
                <p class="mbr-text mb-3 mbr-fonts-style display-5">KekharGames</p>
                
                
            </div>
        </div>
    </div>
    
</section>

<section data-bs-version="5.1" class="features10 cid-twLVBmQxCi" id="features11-1">
    <!---->
    

    
    
    <div class="container">
        <div class="title">
            <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Новинка!</strong></h3>
            
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/4113515136-1-400x1000.jpeg" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Atomic Heart</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">
                                            2449&nbsp;₽<br></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">Обратно в СССР! Отбросьте любые позывы к ностальгии, ибо это не «тот самый СССР». Это альтернативная история! Вы окажитесь в этой знаменитой стране на пике своего развития, приняв на себя роль специального агента P-3, чья задача отправиться на предприятие «3826», разобравшись, что там происходит, а также ликвидировать причину всех проблем.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/21312314-2-506x285.jpeg" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Hogwarts Legacy</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">
                                            2449 ₽</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">
                                            «Хогвартс. Наследие» – это ролевая игра с открытым миром. Теперь вы можете контролировать свои действия и стать центральным героем собственных приключений в волшебном мире.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/forest-1-506x285.jpeg" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Sons Of The Forest</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">
                                            1100&nbsp;₽</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">
                                            Отправленный на поиски пропавшего миллиардера на отдаленный остров, вы оказываетесь в аду, кишащем каннибалами. Создавайте, стройте и боритесь за выживание, в одиночку или с друзьями, в этом новом ужасающем симуляторе выживания в открытом мире.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</section>

<section data-bs-version="5.1" class="features10 cid-twLW3lRClM" id="features11-2">
    <!---->
    

    
    
    <div class="container">
        <div class="title">
            <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">СКИДКА!</h3>
            
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/2315555-1-506x276.png" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>DEVIL MAY CRY 5 + VERGIL</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">899 ₽&nbsp;<br></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">
                                            Devil May Cry 5 продолжает сюжет четвёртой части. В игре повстречаются как хорошо знакомые персонажи из предыдущих частей, так и совершенно новые харизматичные герои. Действие игры происходит спустя несколько лет после событий Devil May Cry 4. Неро повзрослел, потерял руку в результате нападения таинственного персонажа, зато обзавелся фургоном - передвижным агенством по охоте на демонов, а заодно и талантливым инженером, которая мастерит ему протезы. Последние являются важным элементом боевой системы. Протезы разных видов обладают уникальными боевыми характеристиками и являются полноценной заменой демонической руки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/ready-506x380.jpg" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>READY OR NOT</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">
                                            1299 ₽</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">
                                            В конце 2021-го разработчики из VOID Interactive решили вдохнуть новую, высокотехнологичную и иммерсивную жизнь в редкий жанр тактического FPS. Ready or Not — это тщательно проработанный симулятор спецназовца, который уже оценили десятки тысяч геймеров.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <div class="image-wrapper">
                            <img src="assets/images/for-honor-489x320.png" alt="Mobirise Website Builder" title="">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-line">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>FOR HONOR – STARTER EDITION</strong></h4>
                                        <p class="cost mbr-fonts-style display-5">
                                            549 ₽</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bottom-line">
                                        <p class="mbr-text mbr-fonts-style m-0 display-7">
                                            Инновационный симулятор средневековых сражений во всей красе. Встаньте на защиту замка и отвоюйте свободу или же примкните к армии наступления и сметайте охрану со своего пути. Только не попадите под стрелы и кипящее масло! Игроки и пресса были в восторге от уникальной боевой системы: на вашу подвижность, силу и выносливость влияют не только доспехи и оружие, но и их тип, материалы, а также положение игрока в пространстве и даже движения, которые вы совершаете в процессе схватки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-twM99UYMKQ" id="form5-3">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Вы выбрали игру?</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="BnyxOT1R/ZIJhRPoiBWWlD1gBNq//UdCLyK4QDGZoWNlKUn5Q156Yv4UjEYgTM8N8VdMnuAB3XSYohSeJaXjb0Qy50Ht9qGLEeMKP/8av3UMvNQ7YpnAn4za8MdcDy7Y">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Спасибо большое! Ваш заказ будет выполнен!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Имя" data-form-field="name" class="form-control" value="" id="name-form5-3">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-3">
                        </div>
                        
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Как называется игра?)" data-form-field="textarea" class="form-control" id="textarea-form5-3"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-warning display-4">Покупаю!</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
  
</body>
</html>