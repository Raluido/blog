<?php require_once 'header.php'; ?>
<?php require_once 'redirection.php'; ?>

<div class="mainStructure">
    <main>
        <section class="updateUserData">
            <?php $userDatas = getUserData($db);
            while ($userData = mysqli_fetch_assoc($userDatas)) :
            ?>
                <h3>Mis datos</h3>
                <form action="updateUserData.php" method="POST">
                    <div class="">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" value=<?= $userData['name'] ?> required />
                    </div>
                    <div class="">
                        <label for="surname">Apellidos</label>
                        <input type="text" name="surname" value=<?= $userData['surname'] ?> required />
                    </div>
                    <div class="">
                        <label for="email">Email</label>
                        <input type="email" name="email" value=<?= $userData['email'] ?> required />
                    </div>
                    <div class="">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" value="" required />
                    </div>
                    <div class="">
                        <label for="password2">Repetir contraseña</label>
                        <input type="password" name="password2" value="" required />
                    </div>
                    <div class="">
                        <input class="submitInputs" type="submit" value="Actualizar" />
                    </div>
                </form>
            <?php
            endwhile
            ?>
        </section>
    </main>
    <?php require_once 'aside.php'; ?>
</div>

<?php require_once 'footer.php'; ?>