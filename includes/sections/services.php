<?php /** @var array $SERVICES */ ?>
<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services__pin-wrap" id="servicesPinWrap">
                    <div class="services__sticky" id="servicesSticky">
                        <div class="services__header">
                            <h2 class="services__title title-animation">Our Services</h2>
                        </div>

                        <div class="services__stack" id="servicesStack">
                            <?php foreach ($SERVICES as $i => $svc): ?>
                                <article class="services__card" data-service-card data-service-index="<?= $i ?>">
                                    <span class="services__bar"></span>
                                    <span class="services__glow"></span>
                                    <span class="services__shim" id="servicesShim<?= $i ?>"></span>
                                    <span class="services__index"><?= htmlspecialchars($svc['index']) ?></span>
                                    <span class="services__name"><?= htmlspecialchars($svc['name']) ?></span>
                                    <?= bridge_service_arrow() ?>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
