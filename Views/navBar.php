<?php
    $path = $_SERVER['REQUEST_URI'];
    $pathParts = explode('/',$path);
    $page = $pathParts[3];
    $activePage = "active";
    var_dump($pathParts);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- navigation page bar -->

    <div class="d-flex justify-content-center" style="margin-top: 30px">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="http://test.com/recent.php?page=1">Previous</a></li>
            <!-- sending $page via GET method -->

            <!-- class .active нужно получить динамически из переменной PHP !!! -->
            <li class="page-item active"><a class="page-link" href="http://test.com/gallery/recent/1">1</a></li>
            <li class="page-item"><a class="page-link" href="http://test.com/gallery/recent/2">2</a></li>
            <li class="page-item"><a class="page-link text-secondary" href="404.php">3</a></li>
            <li class="page-item"><a class="page-link" href="http://test.com/gallery/recent/3">Next</a></li>
        </ul>
    </nav>
    </div>
