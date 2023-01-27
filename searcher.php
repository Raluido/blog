<?php
if (!isset($_POST['searcher'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/header.php'; ?>


<div class="mainStructure">
    <main>
        <section class="searcher">
            <h3>Resultados</h3>
            <?php
            $searchs = getPosts($db, null, null, $_POST['searcher']);
            if (!empty($searchs)) :
                while ($search = mysqli_fetch_assoc($searchs)) :
            ?>
                    <article>
                        <a href="./post.php?id=<?= $search['id'] ?>">
                            <h3 class="title">
                                <?= $search['title'] ?>
                            </h3>
                            <p class="postCathegory">
                                <?= $search['name'] . " | " . $search['date'] ?>
                            </p>
                        </a>
                        <p class="description">
                            <?= substr($search['description'], 0, 300) . "..." ?>
                        </p>
                    </article>
            <?php
                endwhile;
            endif;
            ?>

        </section>
    </main>
    <?php require_once 'includes/aside.php'; ?>
</div>

<?php require_once 'includes/footer.php'; ?>