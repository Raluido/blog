<?php require_once 'assets/includes/header.php'; ?>

<div class="mainStructure">
    <main>
        <section class="lastPosts">
            <article>
                <h3>Ultimas entradas</h3>
                <?php
                $posts = getLastPosts($db);
                while($post = mysqli_fetch_assoc($posts)) :
                ?>
                <div class="postCathegory">
                    <?=$post['name']?>
                </div>
                <div class="title">
                    <?=$post['title']?>
                </div>
                <div class="description">
                    <?=$post['description']?>
                </div>
                <div class="date">
                    <?=$post['date']?>
                </div>
                <?php
                endwhile
                ?>  
            </article>
            <div class="showAll">
                <a href="" class="">Ver todas las entradas</a>       
            </div>
        </section>
    </main>
    <?php require_once 'assets/includes/aside.php'; ?>
</div>

<?php require_once 'assets/includes/footer.php'; ?>