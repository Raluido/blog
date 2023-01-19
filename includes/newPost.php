<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="createPost">
            <h3>Crear post</h3>
            <form action="savePost.php" method="post">
                <div class="formElement">
                    <label for="cathegory">Categoría</label>
                    <select name="cathegory" required>
                        <?php
                        $cathegories = getCathegories($db);
                        while ($cathegory = mysqli_fetch_assoc($cathegories)) :
                        ?>
                            <option value=<?=$cathegory['id']?>><?= $cathegory['name'] ?></option>
                        <?php endwhile
                        ?>
                    </select>
                </div>
                <div class="formElement">
                    <label for="title">Título</label>
                    <input type="text" name="title" required />
                </div>
                <div class="formElement">
                    <label for="description">Texto</label>
                    <textarea name="description" rows="4" cols="100" required></textarea>
                </div>
                <div class="submitInputs">
                    <input type="submit" value="Enviar" />
                </div>
            </form>

        </section>
    </main>
    <?php require_once 'aside.php'; ?>
</div>

<?php require_once 'footer.php'; ?>