<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="/public/css/default.css" />
        <script src="/public/js/jquery-1.7.2.js"></script>
    </head>
    
    <body>
        <header>
            Custom Header
            <?php if(UserGuard::isLoggedIn()): ?>
                <div style="float:right;">
                    Hello, <?php echo UserGuard::getUserLogin(); ?>!
                </div>
            <?php endif ?>
        </header>
        
        <nav>
            <a href="<?php echo $this->getUrl('home') ?>">Home</a>
            <a href="<?php echo $this->getUrl('help') ?>">Help</a>
            <a href="<?php echo $this->getUrl('login') ?>">Login</a>
        </nav>
         
        <article>