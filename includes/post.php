<?php require_once 'connection.php'; ?>
<?php require_once 'header.php'; ?>
<?php
$post = getPost($db, $_GET['id']);
if (!isset($post['id'])) {
    header("Location: index.php");
}
?>
<?php require_once 'header.php'; ?>
<div class="mainStructure">
    <main>
        <section class="post">
            <article>
                <h3 class="title">
                    <?= $post['title'] ?>
                </h3>
                <p class="postCathegory">
                    <a href="/includes/postsByCathegory.php?id=<?= $post['cathegory_id'] ?>">
                        <?= $post['name'] . " | " . $post['date'] ?>
                    </a>
                </p>
                <p class="description">
                    <?= $post['description'] ?>
                </p>
                </a>
            </article>
        </section>
    </main>
    <?php require_once 'includes/aside.php'; ?>
</div>

<?php require_once 'includes/footer.php'; ?>