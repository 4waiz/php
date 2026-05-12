<?php /** @var array $ECOSYSTEM_LOGOS */ ?>
<section class="ecosystem" id="ecosystem">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ecosystem__header">
                    <h2 class="ecosystem__title title-animation">Our Ecosystem</h2>
                </div>

                <div class="ecosystem__marquee">
                    <div class="ecosystem__fade ecosystem__fade--left" aria-hidden="true"></div>
                    <div class="ecosystem__fade ecosystem__fade--right" aria-hidden="true"></div>

                    <div class="ecosystem__track" data-ecosystem-track>
                        <div class="ecosystem__group">
                            <?php foreach ($ECOSYSTEM_LOGOS as $i => $logo): ?>
                                <div class="ecosystem__logo"><img src="<?= htmlspecialchars($logo) ?>" alt="Ecosystem partner <?= $i + 1 ?>"></div>
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
</section>
