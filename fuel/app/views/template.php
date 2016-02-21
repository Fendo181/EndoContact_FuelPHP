<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title; ?>
    </title>
    <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('small-business.css'); ?>
            <style>
                body {
                    margin: 0px;
                }
            </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/logo2.jpg" alt=""  width="150" height="70">
            </a>
        </div>
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">TopPage</a></li>
                    <li><a href="/request">遠藤連絡</a></li>
                    <li><a href="/tweet/about">About 遠藤連絡</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container"
        <div class="col-md-12">
            <?php echo $content; ?>
        </div>
    </div>

</body>

</html>