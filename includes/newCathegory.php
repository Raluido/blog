<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="createCathegory">
            <h3>Crear categoría</h3>
            <form action="saveCathegory.php" method="post">
                <div class="formElement">
                    <label for="name">Nombre de la categoría</label>
                    <input type="text" name="name" required />
                </div>
                <div class="submitInputs">
                    <input type="submit" value="Añadir" />
                </div>
            </form>
        </section>
    </main>
    <?php require_once 'aside.php'; ?>
</div>

<?php require_once 'footer.php'; ?>