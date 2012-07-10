<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="/public/css/default.css" />
        <script src="/public/js/jquery-1.7.2.js"></script>
    </head>
    
    <body>
        <header>
            Custom Header
            <?php if(isset($_SESSION['login'])): ?>
                <div style="float:right;">
                    Hello, <?php echo $_SESSION['login']['login'] ?>!
                </div>
            <?php endif ?>
        </header>
        
        <nav>
            <a href="/home">Home</a>
            <a href="/help">Help</a>
            <a href="/login">Login</a>
        </nav>
         
        <article>