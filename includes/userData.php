<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="updateUserData">
            <h3>Mis datos</h3>
            <form action="updateUserData.php" method="POST">
                <?php echo isset($_SESSION['completed']) ? "<div>" . $_SESSION['completed'] . "<div>" : '' ?>
                <?php showError($errors, 'general') ?>
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" value=<?= $_SESSION['user']['name']; ?> required />
                    <?php echo isset($_SESSION['errors']['name']) ? showError($_SESSION['errors'], 'name') : ''; ?>
                </div>
                <div class="">
                    <label for="surname">Apellidos</label>
                    <input type="text" name="surname" value=<?= $_SESSION['user']['surname']; ?> required />
                    <?php echo isset($_SESSION['errors']['surname']) ? showError($_SESSION['errors'], 'surname') : ''; ?>
                </div>
                <div class="">
                    <label for="email">Email</label>
                    <input type="email" name="email" value=<?= $_SESSION['user']['email']; ?> required />
                    <?php echo isset($_SESSION['errors']['email']) ? showError($_SESSION['errors'], 'email') : ''; ?>
                </div>
                <div class="">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" value="" required />
                    <?php echo isset($_SESSION['errors']['password']) ? showError($_SESSION['errors'], 'password') : ''; ?>
                </div>
                <div class="">
                    <label for="password2">Repetir contraseña</label>
                    <input type="password" name="password2" value="" required />
                </div>
                <div class="">
                    <input class="submitInputs" type="submit" value="Actualizar" />
                </div>
            </form>
            <?php deleteErrors(); ?>
        </section>
    </main>
    <?php require_once 'aside.php'; ?>
</div>

<?php require_once 'footer.php'; ?>