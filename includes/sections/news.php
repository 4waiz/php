<?php /** @var array $NEWS_ITEMS */ ?>
<section class="news" id="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="news__header revealmetop">
                    <h2 class="news__title title-animation">Latest News</h2>
                    <a class="news__cta btn" href="news.php">
                        <span>Explore All News</span>
                        <?= bridge_btn_icon(true, 'white') ?>
                    </a>
                </div>

                <div class="news__list">
                    <?php foreach ($NEWS_ITEMS as $item): ?>
                        <article class="news__item" data-news-item>
                            <div class="news__meta">
                                <?php foreach ($item['tags'] as $tag): ?>
                                    <span class="news__tag"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h3 class="news__headline title-animation">
                                        <?= htmlspecialchars($item['title']) ?>
                                    </h3>
                                    <a class="news__readmore btn" href="<?= htmlspecialchars($item['href']) ?>" target="_blank" rel="noopener noreferrer">
                                        <span>Read More</span>
                                        <?= bridge_btn_icon(true, 'white') ?>
                                    </a>
                                </div>

                                <div class="news__copy title-animation">
                                    <p><?= htmlspecialchars($item['excerpt']) ?></p>
                                </div>

                                <a class="news__media" href="<?= htmlspecialchars($item['href']) ?>"
                                   aria-label="Read <?= htmlspecialchars($item['alt']) ?> article" target="_blank" rel="noopener noreferrer">
                                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>">
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
