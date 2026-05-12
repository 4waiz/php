<?php /** @var array $STATS_PRIMARY $STATS_SECONDARY */ ?>
<section class="achievements" id="achievements">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="achievements__grid achievements__grid--three">
                    <?php foreach ($STATS_PRIMARY as $stat): ?>
                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation"><?= htmlspecialchars($stat['label']) ?></h3>
                            <div class="achievements__value<?= $stat['plus'] ? ' achievements__value--plus' : ' ' ?>">
                                <span class="odometer achievements__odometer" data-target="<?= (int)$stat['target'] ?>" data-format="<?= htmlspecialchars($stat['format']) ?>">0</span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="achievements__grid achievements__grid--two">
                    <?php foreach ($STATS_SECONDARY as $stat):
                        $valClasses = 'achievements__value';
                        if (!empty($stat['plus'])) $valClasses .= ' achievements__value--plus';
                        if (!empty($stat['suffix'])) $valClasses .= ' achievements__value--suffix';
                        if (!empty($stat['gt'])) $valClasses .= ' achievements__value--gt';
                    ?>
                        <article class="achievements__card revealmetop">
                            <h3 class="achievements__label title-animation"><?= htmlspecialchars($stat['label']) ?></h3>
                            <div class="<?= $valClasses ?>">
                                <span class="odometer achievements__odometer" data-target="<?= (int)$stat['target'] ?>" data-format="<?= htmlspecialchars($stat['format']) ?>">0</span>
                                <?php if (!empty($stat['suffix'])): ?>
                                    <span class="achievements__suffix"><?= htmlspecialchars($stat['suffix']) ?></span>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
