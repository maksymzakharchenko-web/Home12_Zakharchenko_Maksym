<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,700&display=swap" rel="stylesheet">
</head>
<body>
<?php $data = require_once('data.php'); ?>
<header class="container-fluid top-wrapper">
    <div class="container">
        <nav class="nav justify-content-between pt-5 nav-bar-decoration">
            <a href="#" class="logo navbar-brand"><img src="<?php echo $data['siteLogo']?>" alt="logotype"></a>
            <span class="burger-menu">&#9776;</span>
            <ul class="navbar main-menu-decoration">
                <?php foreach ($data['mainMenu'] as $menuItem) {
                    ?>
                    <li>
                        <a href="<?php echo $menuItem ['url']?>" class="nav-link nav-font">
                            <?php echo $menuItem['title']?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <div class="mb-5 top-wrapper-text-content">
            <?php foreach ($data['mainSlider'] as $topWrapper) {
                ?>
                <h1 class="mb-2">
                    <span class="bold"><?php echo $topWrapper['main']?></span><?php echo $topWrapper['second']?>
                </h1>
                <p class="mb-5"><?php echo $topWrapper['description']?></p>
                <button type="button" class="mb-5 learn-more-btn"><?php echo $topWrapper['btn']?></button>
            <?php
            }
            ?>
        </div>
        <div class="pb-5 slider">
            <?php foreach ($data['slider'] as $sliderCircle) {
                ?>
                <div <?php echo $sliderCircle['slider-circle']?> class="slider-circle"></div>
            <?php
            }
            ?>
        </div>
    </div>
</header>
<div class="about-us">
    <div class="container">
        <h2 class="mt-5 mb-5">About us</h2>
        <p class="mb-5">Nam varius accumsan elementum. Aliquam fermentum eros in suscipit scelerisque.</p>
        <div class="row mb-5">
            <?php foreach ($data['about-us'] as $aboutUs) {
                ?>
                <div class="d-flex flex-column justify-content-center align-items-center col-lg-3 col-md-6 col-sm-12">
                    <div class="about-img mb-4">
                        <img src="<?php echo $aboutUs['img']?>" alt="About us" class="about-us-icon">
                    </div>
                    <h3 class="mb-4"><?php echo $aboutUs['heading']?></h3>
                    <p><?php echo $aboutUs['text']?></p>
                </div>
             <?php
             }
             ?>
        </div>
        <button type="button" class="mb-5 learn-more-btn"><?php echo $data['about-us-btn']?></button>
    </div>
</div>
<div class="pt-5 pb-5 our-advantages">
    <div class="container">
        <?php foreach ($data['our-advantages-blocks'] as $ourAdvantages) {
            ?>
            <div class="mb-5 main-advantage <?php if($ourAdvantages['reverse']) {
                echo 'main-advantage-reverse';
            } ?>">
            <div class="advantages-img <?php if($ourAdvantages['reverse']) {
                echo 'img-margin';
            } ?>">
            </div>
            <div class="advantage-content">
                <h3 class="mb-4"><?php echo $ourAdvantages['heading']?></h3>
                <p class="mb-4"><?php echo $ourAdvantages['description']?></p>
                <button type="button" class="learn-more-btn"><?php echo $ourAdvantages['btn']?></button>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="container-fluid reviews-section">
    <div class="container">
        <?php foreach ($data['review'] as $reviewBlock){
            ?>
            <img src="<?php echo $reviewBlock['img']?>" alt="employee" />
            <div class="mb-5 quote">
                <p>
                    <i class="special-word"><?php echo $reviewBlock['main']?></i><?php echo $reviewBlock['second']?>
                </p>
            <span><?php echo $reviewBlock['signature']?></span>
            </div>
        <?php
        }
        ?>
        <div class="slider">
            <?php foreach ($data['slider'] as $sliderCircle) {
                ?>
                <div <?php echo $sliderCircle['slider-circle']?> class="slider-circle"></div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="container-fluid our-services">
    <div class="container">
        <h2 class="mb-5"><?php echo $data['our-services-heading']?></h2>
        <span class="mb-5"><?php echo $data['our-services-description']?></span>
        <div class="row">
            <?php foreach ($data['our-services'] as $ourService) {
                ?>
                <div class="col-lg-2 col-md-4 img-box">
                    <img src="<?php echo $ourService['img']?>" alt="our-services">
                </div>
                <div class="col-lg-4 col-md-8">
                    <h3 class="mb-3"><?php echo $ourService['title']?></h3>
                    <p><?php echo $ourService['text']?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="pb-5 container-fluid meet-our-team">
    <div class="container">
        <div class="meet-our-team-content">
            <h2 class="mb-5"><?php echo $data['our-team-heading']?></h2>
            <p class="mb-5"><?php echo $data['our-team-description']?></p>
        </div>
        <div class="row">
            <?php foreach ($data['our-team'] as $ourTeam) {
                ?>
                <div <?php echo $ourTeam['employee-box']?> class="col-lg col-md col-sm some-person <?php if($ourTeam['isWhite']) {
                    echo 'white-box';
                } else if ($ourTeam['lightGrey']) {
                    echo 'light-box';
                }?>">
                    <?php echo $ourTeam['name']?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="pt-5 pb-5 pricing">
    <div class="container">
        <div class="pricing-content">
            <h2 class="mb-5"><?php echo $data['pricing-heading']?></h2>
            <p class="mb-5"><?php echo $data['pricing-description']?></p>
        </div>
        <div class="row">
            <?php foreach ($data['pricing'] as $pricingItem) {
                ?>
                <div class="card col-lg-3 col-md-6 col-sm-12 card-decoration">
                    <div class="card-body">
                        <h4 class="card-title mb-2"><?php echo $pricingItem['title']?></h4>
                        <span class="mb-5"><?php echo $pricingItem['licence']?></span>
                        <p class="card-text mb-5"><?php echo $pricingItem['text']?></p>
                    </div>
                    <button type="button"><?php echo $pricingItem['btn']?></button>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="pt-5 pb-5 map">
    <div class="container">
        <div class="d-flex row">
            <?php foreach ($data['map-block'] as $mapItems) {
                ?>
            <div class="col-lg-6 map-content">
                <h3 class="mb-5"><?php echo $mapItems['heading']?></h3>
                <p class="mb-5"><?php echo $mapItems['description'] ?></p>
                <button type="button" class="mb-5 learn-more-btn"><?php echo $mapItems['btn']?></button>
            </div>
            <div class="d-flex align-items-center col-lg-6 map-img">
                <img src="<?php echo $mapItems['img']?>" alt="map">
            </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>
<div class="container-fluid pb-5 pt-5 template-authors">
    <div class="container">
        <h3 class="pt-5 mt-5 mb-5">Try our <span>PSD template</span> on symu.co</h3>
        <button type="button" class="mb-5 learn-more-btn"><?php echo $data['advertise-btn']?></button>
    </div>
</div>
<footer class="mb-5 pt-2 footer-menu">
    <div class="container">
        <nav class="navbar justify-content-between">
            <span>
                <img src="<?php echo $data['footer-logo']?>" alt="logotype" class="mr-3">All Rights Reserved by Alecto
            </span>
            <ul class="nav footer-menu-decoration">
                <?php foreach ($data['footerMenu'] as $footerMenuItem) {
                    ?>
                    <li class="nav-item">
                        <a href="<?php echo $footerMenuItem['url']?>" class="nav-link">
                            <?php echo $footerMenuItem['title']?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</footer>
    <script src="assets/js/libs.js"></script>
</body>
</html>