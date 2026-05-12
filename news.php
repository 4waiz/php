<?php
$CURRENT_PAGE = 'news.php';
$PAGE_TITLE   = 'BRIDGE — News';
$BODY_CLASS   = 'inner-page';
$MAIN_CLASS   = 'news-page inner-page-top';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';

$slugify = function (string $s): string {
    $s = strtolower($s);
    $s = preg_replace('/[^a-z0-9]+/', '-', $s);
    return trim($s, '-');
};
?>

<section class="news-page__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="news-page__header">
                    <h1 class="news-page__title title-animation">Latest News</h1>
                </header>

                <div class="news__list news-page__list" data-news-list>
                    <?php foreach ($NEWS_ITEMS as $item):
                        $cats = implode(',', array_map($slugify, $item['tags']));
                    ?>
                        <article class="news__item news-page__item" data-news-entry data-news-categories="<?= htmlspecialchars($cats) ?>">
                            <div class="news__meta">
                                <?php foreach ($item['tags'] as $tag): ?>
                                    <span class="news__tag"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="news__grid">
                                <div class="news__lead">
                                    <h2 class="news__headline title-animation"><?= htmlspecialchars($item['title']) ?></h2>
                                </div>

                                <div class="news__copy">
                                    <p><?= htmlspecialchars($item['excerpt']) ?></p>
                                </div>

                                <a class="news__media" href="<?= htmlspecialchars($item['href']) ?>"
                                   aria-label="Read <?= htmlspecialchars($item['alt']) ?> article" target="_blank" rel="noopener noreferrer">
                                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>">
                                </a>

                                <a class="news__readmore btn" href="<?= htmlspecialchars($item['href']) ?>" target="_blank" rel="noopener noreferrer">
                                    <span>Read More</span>
                                    <span class="btn__icon" aria-hidden="true">
                                        <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 11L11 2M11 2H5M11 2V8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
