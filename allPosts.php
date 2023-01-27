<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="allPosts">
            <h3>Todos los Posts por categorías</h3>
            <?php
            $allPosts = getPosts($db, false);
            if (!empty($allPosts)) :
                while ($allPost = mysqli_fetch_assoc($allPosts)) :
            ?>
                    <a href="post.php?id=<?= $allPost['id'] ?>">
                        <h3 class="title">
                            <?= $allPost['title'] ?>
                        </h3>
                        <p class="postCathegory">
                            <?= $allPost['name'] . " | " . $allPost['date'] ?>
                        </p>
                    </a>
                    <p class="description">
                        <?= $allPost['description'] ?>
                    </p>
            <?php
                endwhile;
            endif;
            ?>
        </section>
    </main>
    <?php require_once 'includes/aside.php'; ?>
</div>

<?php require_once 'includes/footer.php'; ?>