<html>
<head>
    <title>Articles</title>
    <link href="assets/css/style.css">
    <?= link_tag('assets/css/bootstrap.min.css')?>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Inventory Management System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-brand" href="login">Login</a></li>
                <li><a class="navbar-brand" href="register">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

