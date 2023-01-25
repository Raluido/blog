<?php require_once 'header.php'; ?>
<?php require_once 'connection.php'; ?>
<?php
$postsByCathegories = getPostsByCathegories($db, $_GET['id']);
if (!isset($postsByCathegories)) {
    header('Location: index.php');
}
?>
<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="allPosts">
            <h3>Posts por categorías</h3>
            <?php
            if (!empty($postsByCathegories) || null) :
                while ($postsByCathegory = mysqli_fetch_assoc($postsByCathegories)) :
            ?>
                    <a href="">
                        <h3 class="title">
                            <?= $postsByCathegory['title'] ?>
                        </h3>
                        <p class="postCathegory">
                            <?= $postsByCathegory['name'] . " | " . $postsByCathegory['date'] ?>
                        </p>
                        <p class="description">
                            <?= $postsByCathegory['description'] ?>
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