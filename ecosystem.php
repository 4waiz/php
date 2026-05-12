<?php
$CURRENT_PAGE = 'ecosystem.php';
$PAGE_TITLE   = 'BRIDGE — Our Ecosystem';
$BODY_CLASS   = 'inner-page';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';
?>

<section class="ecosystem-page__hero inner-page-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ecosystem-page__layout">
                    <div class="ecosystem-page__content">
                        <div class="ecosystem-page__top">
                            <h1 class="ecosystem-page__title title-animation">Ecosystem</h1>
                            <p class="ecosystem-page__subtitle title-animation">Partnerships that power progress</p>
                            <div class="ecosystem-page__copy title-animation">
                                <p>Nobody succeeds alone, and no organisation thrives in isolation. That's why BRIDGE actively pursues partnerships and collaborations with leading local and international partners, thereby creating unique opportunities for our clients.</p>
                                <p>Our large and growing ecosystem of agreements and alliances helps us unlock opportunities and resources to foster knowledge transfer, operational excellence and innovation.</p>
                            </div>
                        </div>
                        <p class="ecosystem-page__footnote title-animation">This ecosystem includes leading UAE government and private sector organisation that bring sector specialisation and diverse operational perspectives to enhance our offerings and benefit our clients.</p>
                    </div>

                    <div class="ecosystem-page__divider" aria-hidden="true"></div>

                    <div class="ecosystem-page__media revealmetop">
                        <img src="assets/images/ecosystem-bg.webp" alt="Abstract ecosystem visual">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$ECO_GROUPS = ['Technology Partners', 'Knowledge Partners', 'Strategic Partners'];
foreach ($ECO_GROUPS as $group):
?>
<section class="ecosystem-page__partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ecosystem-page__partners-header">
                    <h2 class="ecosystem-page__partners-title title-animation"><?= htmlspecialchars($group) ?></h2>
                </div>

                <div class="ecosystem ecosystem--partners">
                    <div class="ecosystem__marquee">
                        <div class="ecosystem__fade ecosystem__fade--left" aria-hidden="true"></div>
                        <div class="ecosystem__fade ecosystem__fade--right" aria-hidden="true"></div>

                        <div class="ecosystem__track" data-ecosystem-track>
                            <div class="ecosystem__group">
                                <?php foreach ($ECOSYSTEM_LOGOS as $logo): ?>
                                    <div class="ecosystem__logo"><img src="<?= htmlspecialchars($logo) ?>" alt="<?= htmlspecialchars($group) ?> logo"></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="ecosystem__group" aria-hidden="true">
                                <?php foreach ($ECOSYSTEM_LOGOS as $logo): ?>
                                    <div class="ecosystem__logo"><img src="<?= htmlspecialchars($logo) ?>" alt=""></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
