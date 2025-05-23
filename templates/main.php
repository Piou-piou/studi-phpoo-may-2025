<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mon</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="">Lien 1</a></li>
                    <li><a href="">Lien 2</a></li>
                    <li><a href="">Lien 3</a></li>
                    <li><a href="">Lien 4</a></li>
                    <li><a href="">Lien 5</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php require_once $router->getTemplate() ?>
        </main>

        <footer>
            Copyright
        </footer>
    </body>
</html>