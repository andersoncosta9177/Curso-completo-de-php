<?php
include_once("templates/header.php");
if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
        <p id="post-description"> <?= $post['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/images/<?= $currentPost['img'] ?>" alt="">
        </div>

        <p class="post-content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nobis, voluptatum sed provident iure earum doloremque, quia officia, dolorum tempora dolore! Minima, sed labore. Sunt ex rem odio sit quas.

        </p>
        <p class="post-content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nobis, voluptatum sed provident iure earum doloremque, quia officia, dolorum tempora dolore! Minima, sed labore. Sunt ex rem odio sit quas.

        </p>
        <p class="post-content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nobis, voluptatum sed provident iure earum doloremque, quia officia, dolorum tempora dolore! Minima, sed labore. Sunt ex rem odio sit quas.

        </p>




    </div>
    <aside id="nav-container">
    <ul id="tag-list">
        <h3 id="tags-title">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li>
                    <a href="#"><?= $tag ?></a>
                </li>
            <?php endforeach; ?>
        </h3>
        <h3 id="categories-title">Categorias  </h3>
       <ul id="categories-list">
       <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="#"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
       </ul>
       
    </ul>
</aside>
</main>





<?php
include_once("templates/footer.php");

?>