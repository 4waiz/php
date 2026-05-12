<?php /** @var array $AWARDS */ ?>
<section class="awards" id="awards">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="awards__layout">
                    <div class="awards__intro revealmetop">
                        <h2 class="awards__title title-animation">Awards and Certifications</h2>
                    </div>

                    <div class="awards__grid">
                        <?php foreach ($AWARDS as $award): ?>
                            <article class="awards__card revealmetop" style="--reveal-delay: <?= htmlspecialchars($award['delay']) ?>">
                                <div class="awards__card-glow"></div>
                                <div class="awards__card-content">
                                    <h3 class="awards__card-title title-animation"><?= htmlspecialchars($award['title']) ?></h3>
                                    <a class="awards__link" href="#awards">
                                        <span>Learn More</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L11 2M11 2H5M11 2V8" stroke="#FE5620" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
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
    </div>
</section>
