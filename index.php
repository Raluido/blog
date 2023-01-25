<?php require_once 'includes/header.php'; ?>

<div class="mainStructure">
    <main>
        <section class="lastPosts">
            <article>
                <h3>Ultimas entradas</h3>
                <?php echo isset($_SESSION['sended']) ? "<div class=''>" . $_SESSION['sended'] . "</div>" : '' ?>
                <?php
                $limit = "LIMIT 3";
                $posts = getPosts($db, $limit);
                if (!empty($posts)) :
                    while ($post = mysqli_fetch_assoc($posts)) :
                ?>
                        <a href="">
                            <h3 class="title">
                                <?= $post['title'] ?>
                            </h3>
                            <p class="postCathegory">
                                <?= $post['name'] . " | " . $post['date'] ?>
                            </p>
                            <p class="description">
                                <?= substr($post['description'], 0, 300) . "..." ?>
                            </p>
                        </a>
                <?php
                    endwhile;
                endif;
                ?>
            </article>
            <div class="showAll">
                <a href="includes/allPosts.php" class="">Ver todas las entradas</a>
            </div>
        </section>
    </main>
    <?php require_once 'includes/aside.php'; ?>
</div>

<?php require_once 'includes/footer.php'; ?>