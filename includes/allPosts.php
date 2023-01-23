<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="allPosts">
            <h3>Todos los Posts por categorías</h3>
            <?php
            $allPosts = getAllPosts($db);
            if (!empty($allPosts)) :
                while ($allPost = mysqli_fetch_assoc($allPosts)) :
            ?>
                    <a href="">
                        <h3 class="title">
                            <?= $allPost['title'] ?>
                        </h3>
                        <p class="postCathegory">
                            <?= $allPost['name'] . " | " . $allPost['date'] ?>
                        </p>
                        <p class="description">
                            <?= $allPost['description'] ?>
                        </p>
                    </a>
            <?php
                endwhile;
            endif;
            ?>
        </section>
    </main>
    <?php require_once 'aside.php'; ?>
</div>

<?php require_once 'footer.php'; ?>