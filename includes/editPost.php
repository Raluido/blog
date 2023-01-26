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
            <form method="GET" action="./updatePost.php">
                <article>
                    <input class="title" for="title" name="title" value="<?= $post['title'] ?>" />
                    <select class="postCathegory">
                        <option></option>
                    </p>
                    <input class="description" for="description" name="description" value="<?= $post['description'] ?>" />
                    <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $post['user_id']) :
                    ?>
                        <button type="submit">Editar</button>
                    <?php
                    endif;
                    ?>
                </article>
            </form>
        </section>
    </main>
    <?php require_once '../includes/aside.php'; ?>
</div>

<?php require_once '../includes/footer.php'; ?>