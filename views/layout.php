<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=http://getbootstrap.com/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
    <style>
        html{
            height: 100%;
        }
        body, main {
            min-height: 100%;
        }
        td{
            min-width: 200px;
            text-align: center;
        }

    </style>
</head>

<body>

<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link " href="/">Home</a>
                <a class="nav-link" href="/posts/">Manage</a>
                <a class="nav-link" href="/add/">Add new post</a>
            </nav>
        </div>
    </div>

    <!--<div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
        </div>
    </div>-->
</header>

<main role="main" class="container" >

    <div class="row">

        <div class="col-sm-8 blog-main">
            <? include($view.'.php') ?>
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>
<script>
    $('.deleteImage').click(function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $.get( link, function( data ) {
            $( ".file" ).html( '' );
            alert( "Image removed" );
        });
    });
</script>
</body>
</html>