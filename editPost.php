<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php
$post = getPost($db, $_GET['id']);
if (!isset($post['id'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/header.php'; ?>
<div class="mainStructure">
    <main>
        <section class="editPost">
            <form method="GET" action="./updatePost.php">
                <article>
                    <h3>Editar post</h3>
                    <input type="hidden" name="postId" value="<?= $post['id'] ?>" />
                    <input type="hidden" name="userId" value="<?= $post['user_id'] ?>" />
                    <div class="">
                        <label for="title" name="title">Título</label>
                        <input class="title" for="title" name="title" value="<?= $post['title'] ?>" />
                    </div>
                    <div class="">
                        <label for="cathegory" name="cathegory">Categoría</label>
                        <select class="postCathegory" name="cathegory">
                            <?php $cathegories = getCathegories($db);
                            while ($cathegory = mysqli_fetch_assoc($cathegories)) :
                            ?>
                                <option value="<?= $cathegory['id'] ?>"><?= $cathegory['name'] ?></option>
                            <?php
                            endwhile;
                            ?>
                        </select>
                    </div>
                    <div class="description">
                        <label for="description" name="description">Categoría</label>
                        <textarea class="description" id="editDescription" for="description" name="description"></textarea>
                    </div>
                    <div class="submitInputs">
                        <input type="submit" value="Editar"></input>
                    </div>
                </article>
            </form>
        </section>
    </main>
    <?php require_once 'includes/aside.php'; ?>
</div>
<?php require_once 'includes/footer.php'; ?>
<script type="text/javascript">
    var innerDescription = "<?= $post['description'] ?>";
    document.getElementById("editDescription").innerHTML = innerDescription;
</script>