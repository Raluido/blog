<?php require_once 'connection.php'; ?>
<?php require_once 'header.php'; ?>
<?php
$cathegory = getCathegory($db, $_GET['id']);
if (!isset($cathegory['id'])) {
    header("Location: ../index.php");
}
?>
<?php require_once 'header.php'; ?>

<div class="mainStructure">
    <main>
        <section class="postBySection">
            <article>
                <h3>Entrada de <?= $cathegory['name'] ?></h3>
                <?php
                $postBySection = getPosts($db, null, "WHERE posts.cathegory_id = " . $cathegory['id']);
                if (!empty($postBySection)) :
                    while ($post = mysqli_fetch_assoc($postBySection)) :
                ?>
                        <a href="post.php?id=<?=$post['id']?>">
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
                else :
                    echo "<div class='alert alert-error'>No hay entradas en ésta categoría...</div>";
                endif;
                ?>
            </article>
        </section>
    </main>
    <?php require_once '../includes/aside.php'; ?>
</div>

<?php require_once '../includes/footer.php'; ?>