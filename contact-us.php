<?php
$CURRENT_PAGE = 'contact-us.php';
$PAGE_TITLE   = 'BRIDGE — Contact Us';
$BODY_CLASS   = 'inner-page';
$MAIN_CLASS   = 'contact-page inner-page-top';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';
?>

<section class="contact contact-page__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact__shell">
                    <div class="contact__stage">
                        <div class="contact__info revealmetop">
                            <div class="contact__intro">
                                <h1 class="contact__title contact-page__title title-animation">We're here<br>to help.</h1>
                                <p class="contact__description title-animation">Whether you have questions about our services, want to explore partnership opportunities, or need expert guidance, feel free to reach out to us.</p>
                            </div>

                            <div class="contact__details">
                                <article class="contact__detail">
                                    <h3 class="contact__detail-title">Address</h3>
                                    <p class="contact__detail-copy"><?= $CONTACT['address'] ?></p>
                                    <a class="contact__detail-link" href="<?= htmlspecialchars($CONTACT['address_link']) ?>" target="_blank" rel="noreferrer">
                                        <span>Get Directions</span>
                                        <?= bridge_btn_icon(true, '#fff') ?>
                                    </a>
                                </article>

                                <article class="contact__detail">
                                    <h3 class="contact__detail-title">Phone Number</h3>
                                    <p class="contact__detail-copy"><?= htmlspecialchars($CONTACT['phone']) ?></p>
                                    <a class="contact__detail-link" href="tel:<?= htmlspecialchars($CONTACT['phone']) ?>">
                                        <span>Make a Call</span>
                                        <?= bridge_btn_icon(true, '#fff') ?>
                                    </a>
                                </article>

                                <article class="contact__detail">
                                    <h3 class="contact__detail-title">Email</h3>
                                    <p class="contact__detail-copy"><?= htmlspecialchars($CONTACT['email']) ?></p>
                                    <a class="contact__detail-link" href="mailto:<?= htmlspecialchars($CONTACT['email']) ?>">
                                        <span>Send an Email</span>
                                        <?= bridge_btn_icon(true, '#fff') ?>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <div class="contact__form-card revealmetop">
                            <div class="contact__form-border"></div>
                            <div class="contact__form-panel">
                                <div class="contact__form-header">
                                    <h2 class="contact__form-title title-animation">Get In Touch</h2>
                                    <p class="contact__form-copy">We'd love to hear from you! Fill out the form below, and our team will get back to you as soon as possible.</p>
                                </div>

                                <form class="contact__form" action="#" method="post">
                                    <label class="contact__field">
                                        <input type="text" name="full_name" placeholder="Full name">
                                    </label>
                                    <label class="contact__field">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </label>
                                    <label class="contact__field contact__field--phone">
                                        <span class="contact__prefix">+971</span>
                                        <input type="tel" name="mobile" placeholder="Mobile Number">
                                    </label>
                                    <label class="contact__field contact__field--textarea">
                                        <textarea name="message" rows="5" placeholder="Message"></textarea>
                                    </label>

                                    <button class="btn btn--hero contact__submit" type="submit">
                                        Get In Touch
                                        <?= bridge_btn_icon(false, 'white') ?>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
