<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('document_title'); ?></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/a-home">MAI BOUTIQUE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/a-home">Home<span class="sr-only"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/a-search">Search</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/a-profile">Profile</a>
                </li>
            </ul>

            </div>

            <div class="text-right">
                <a href="/add-item" class="btn btn-outline-primary navbar-btn">Add Item</a>
                <a href="/" class="btn btn-outline-primary navbar-btn">Sign Out</a>
            </div>

        </div>
    </nav>
    <?php echo $__env->yieldContent('body'); ?>
</body>
</html>
<?php /**PATH D:\Documents\Kuliah Semester 5\Web Programming - BE01\Final Project\WebProg_Project_Final\resources\views/Component/navbaradmin.blade.php ENDPATH**/ ?>