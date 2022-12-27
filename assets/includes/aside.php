<?php require_once 'assets/includes/helpers.php'; ?>

<aside>
    <div class="">
        <h4>Entrar en la web</h4>
        <form method="POST" action="login.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="email">Email:</label>
                <input type="email" name="email" required />
            </div>
            <div class="formElement">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required />
            </div>
            <input type="submit" />
        </form>
    </div>

    <div class="">
        <h4>Regístrate</h4>
        <?php echo isset($_SESSION['completed']) ? "<div class='alert error'>" . $_SESSION['completed'] . "</div>" : ''; ?>
        <?php echo isset($_SESSION['errors']['general']) ? "<div class='alert error'>" . $_SESSION['errors']['general'] . "</div>" : ''; ?>
        <form method="POST" action="register.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="name">Usuario:</label>
                <input type="text" name="name" required />
                <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'name') : ''; ?>
            </div>
            <div class="formElement">
                <label for="surname">Apellidos:</label>
                <input type="text" name="surname" required />
                <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'surname') : ''; ?>
            </div>
            <div class="formElement">
                <label for="email">Email:</label>
                <input type="email" name="email" required />
                <?php echo isset($_SESSION['errors']) ?  showError($_SESSION['errors'], 'email') : ''; ?>
            </div>
            <div class="formElement">
                <label for="pass">Contraseña:</label>
                <input type="password" name="password" required />
                <?php echo isset($_SESSION['errors']) ?  showError($_SESSION['errors'], 'password') : ''; ?>
            </div>
            <input type="submit" name="submit" value="register" />
        </form>
        <?php deleteErrors(); ?>
    </div>
</aside>