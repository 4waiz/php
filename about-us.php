<?php
$CURRENT_PAGE = 'about-us.php';
$PAGE_TITLE   = 'BRIDGE — About Us';
$BODY_CLASS   = 'inner-page';
$MAIN_CLASS   = 'about-page inner-page-top';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';

$PRINCIPLES = [
    ['title' => 'Customer Focus'],
    ['title' => 'Efficient and Agile', 'large' => true],
    ['title' => 'Smart Innovation and Technology', 'large' => true],
    ['title' => 'People and Education'],
    ['title' => 'Disciplined Execution'],
    ['title' => 'Value Creation', 'large' => true],
];
?>

<section class="banner" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner__card">
                    <div class="banner__content">
                        <div class="banner__text">
                            <span class="banner__num revealmetop">About Us</span>
                            <h2 class="banner__heading title-animation">Your future readiness is our goal</h2>
                        </div>
                        <div class="banner__divider" aria-hidden="true"></div>
                        <div class="banner__image revealmetop">
                            <img src="assets/images/about-bg.jpeg" alt="Business transformation">
                        </div>
                        <div class="banner__divider" aria-hidden="true"></div>
                        <div class="banner__description">
                            <h4 class="banner__intro title-animation">BRIDGE is a state-of-the-art Centre of Excellence in business transformation and professional development.</h4>
                            <p class="title-animation">We offer a wide range of global best-practice, practical, hands-on, results-oriented solutions to enhance your operational excellence, digital transformation, and future readiness. Based in Abu Dhabi, BRIDGE understands the regional context and operating environment, as well as the multicultural workforces that characterise Gulf operations. From business-level strategic planning and change management to tactical skill workshops and breakthrough creative environments, we help your organisation turn ideas into impact.</p>
                            <p class="title-animation">With expertise in all key advanced technologies such as artificial intelligence, automation, smart manufacturing, and cyber-physical systems, BRIDGE leverages certified skills in lean management, Six Sigma, agile and innovation management, Industry 5.0, data analytics, and engineering to ensure your organisation is not only ready for what comes next but also is actively shaping it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mission-vision__card">
                    <div class="mission-vision__block revealmetop">
                        <h2 class="mission-vision__title title-animation">Mission</h2>
                        <p class="mission-vision__copy title-animation">To enable excellence by implementing state-of-the-art operational methodologies, capabilities development, innovation processes, quality, sustainability and profitability</p>
                    </div>
                    <div class="mission-vision__divider" aria-hidden="true"></div>
                    <div class="mission-vision__block revealmetop">
                        <h2 class="mission-vision__title title-animation">Vision</h2>
                        <p class="mission-vision__copy title-animation">To become the UAE and the region's leading Centre of Excellence that empowers transformation and bridges the future</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="principles">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="principles__card">
                    <div class="principles__intro">
                        <h2 class="principles__heading title-animation">Our Principles</h2>
                        <p class="principles__text title-animation">EDGE Learning &amp; Innovation Factory is also a space for networking, competitions, and new joiners' onboarding.</p>
                    </div>
                    <div class="principles__divider" aria-hidden="true"></div>
                    <div class="principles__grid">
                        <?php foreach ($PRINCIPLES as $p):
                            $iconWrapClass = 'principles__icon-wrap' . (!empty($p['large']) ? ' principles__icon-wrap--large' : '');
                        ?>
                            <article class="principles__item revealmetop">
                                <span class="<?= $iconWrapClass ?>">
                                    <svg class="principles__icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <rect x="8" y="8" width="48" height="48" rx="10" stroke="#FE5620" stroke-width="1.6" opacity="0.85"/>
                                        <path d="M20 32h24M32 20v24" stroke="#FE5620" stroke-width="1.8" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <h3 class="principles__title title-animation"><?= htmlspecialchars($p['title']) ?></h3>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="leadership">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="leadership__card">
                    <div class="leadership__intro">
                        <h2 class="leadership__heading title-animation">Bridge Leadership</h2>
                        <p class="leadership__text title-animation">EDGE Learning &amp; Innovation Factory is also a space for networking, competitions, and new joiners' onboarding.</p>
                    </div>
                    <div class="leadership__divider" aria-hidden="true"></div>
                    <div class="leadership__profile">
                        <div class="leadership__media revealmetop">
                            <img src="assets/images/faisal-al-bannai.webp" alt="H.E. Faisal Al Bannai">
                        </div>
                        <div class="leadership__content">
                            <div class="leadership__meta">
                                <h3 class="leadership__name title-animation">H.E. Faisal Al Bannai</h3>
                                <p class="leadership__role title-animation">Chairman, EDGE Group</p>
                            </div>
                            <a class="btn btn--solid leadership__button" href="#">
                                <span>Watch Keynote</span>
                                <span class="btn__icon" aria-hidden="true">
                                    <svg class="btn__arrow btn__arrow--a" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.145 10.855L10.855 2.145M4.322 2H11V8.678" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <svg class="btn__arrow btn__arrow--b" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.145 10.855L10.855 2.145M4.322 2H11V8.678" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
