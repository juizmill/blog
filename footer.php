    <footer>
        <span>
            <a href="/">&copy; <?php echo date('Y'); ?> Escrever Código</a>
        </span>
    </footer>

    <?php if (!defined('DEVELOPMENT')): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106445039-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-106445039-1');</script>
    <?php endif; ?>

    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/prism.js"></script>

    <?php wp_footer(); ?>
</body>

</html>
