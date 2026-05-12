    </main>

<footer class="footer">
    <div class="footer__line"></div>
    <a href="index.php" class="footer__brand" aria-label="BRIDGE home">
        <img src="assets/images/logo_bridge_.svg" alt="BRIDGE">
    </a>

    <nav class="footer__nav" aria-label="Footer navigation">
        <?php foreach ($NAV_ITEMS as $item): ?>
            <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
        <?php endforeach; ?>
    </nav>

    <div class="footer__legal">
        <span>Copyright &copy; <?= date('Y') ?> EDGE Group PJSC</span>
        <span class="footer__dot"></span>
        <a href="#">Privacy Policy</a>
    </div>
</footer>

<script src="assets/js/vendor/odometer.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/gsap.min.js"></script>
<script src="assets/js/vendor/ScrollTrigger.min.js"></script>
<script src="assets/js/vendor/lenis.min.js"></script>
<script src="assets/js/vendor/split-type.min.js"></script>
<script src="assets/js/main.js?v=10"></script>

</body>

</html>
