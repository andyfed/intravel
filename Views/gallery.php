<?php include_once "header.php";
//use Models\Post;
use System\View, Models\PostRepository, Models\picHandler;

?>
<div class="container-fluid">
    <div class="row"  >

    <?php //var_dump(View::$data);
    foreach (View::$data as $postObj) { ?>

        <!-- блоки картинок по 6 в ряд -->
        <div class="col-2 p-3 mt-3">
            <a href="http://test.com/gallery/post/<?php echo $postObj->post_id; ?>">
                <img src="<?php echo $postObj->picLinkMin; ?>" alt="picture"
                     class="img-thumbnail rounded mx-auto d-block"></a>
        </div>

    <?php } ?>

    </div>
    <!-- подключение панели навигации по номерам страниц -->
    <?php include_once "navBar.php"?>

</div>
<br>

    <!-- подключение футера -->
<?php include_once "footer.php" ?>