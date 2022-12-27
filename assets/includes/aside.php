<?php require_once 'assets/includes/helpers.php'; ?>

<aside>
    <div class="">
        <h4>Entrar en la web</h4>
        <form method="POST" actrion="login.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="user">Usuario:</label>
                <input type="text" name="user" required />
            </div>
            <div class="formElement">
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" required />
            </div>
            <input type="submit" />
        </form>
    </div>

    <div class="">
        <h4>Regístrate</h4>
        <form method="POST" action="register.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="name">Usuario:</label>
                <input type="text" name="name" required />
                <?php echo showError($_SESSION['errors'], 'name'); ?>
            </div>
            <div class="formElement">
                <label for="surname">Apellidos:</label>
                <input type="text" name="surname" required />
            </div>
            <div class="formElement">
                <label for="email">Email:</label>
                <input type="email" name="email" required />
            </div>
            <div class="formElement">
                <label for="pass">Contraseña:</label>
                <input type="password" name="password" required />
            </div>
            <input type="submit" name="submit" value="register" />
        </form>
    </div>
</aside>