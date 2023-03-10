<aside>
    <div class="searcher">
        <form method="POST" action="searcher.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="searcher">Buscar</label>
                <input type="text" name="searcher" required />
            </div>
            <div class="submitInputs">
                <input type="submit" value="Encontrar" />
            </div>
        </form>
    </div>
    <div class="login">
        <h4>Entrar en la web</h4>
        <?php echo isset($_SESSION['errors']['login']) ? showError($_SESSION['errors'], 'login') : ''; ?>
        <?php echo isset($_SESSION['user']) ? "<div class=''>Bienvenido " . $_SESSION['user']['name'] . "</div>
        <a href='newPost.php'><button class='newPost'>Nuevo blog</button></a>
        <a href='newCathegory.php'><button class='newCathegory'>Nueva categoría</button></a>
        <a href='userData.php'><button class='userData' >Mis datos</button></a>
        <a class='closeSession' href='../close.php'><button class='mainButtons'>Salir</button></a>" : ''; ?>
        <?php echo isset($_SESSION['user']) ? ''
            : '<form method="POST" action="../login.php" enctype="multipart/form-data">
             <div class="formElement">
                 <label for="email">Email:</label>
                 <input type="email" name="email" required />
             </div>
             <div class="formElement">
                 <label for="password">Contraseña:</label>
                 <input type="password" name="password" required />
             </div>
             <div class="submitInputs">
                 <input type="submit" value="Entrar" />
             </div>
         </form>'; ?>
    </div>

    <div class="register" id="registerNone">
        <h4>Regístrate</h4>
        <?php echo isset($_SESSION['completed']) ? "<div class='correct'> " . $_SESSION['completed'] . "</div>" : ''; ?>
        <?php echo isset($_SESSION['errors']['general']) ? showError($_SESSION['errors'], 'general') : ''; ?>
        <form method="POST" action="register.php" enctype="multipart/form-data">
            <div class="formElement">
                <label for="name">Usuario:</label>
                <input type="text" name="name" required />
                <?php echo isset($_SESSION['errors']['name']) ? showError($_SESSION['errors'], 'name') : ''; ?>
            </div>
            <div class="formElement">
                <label for="surname">Apellidos:</label>
                <input type="text" name="surname" required />
                <?php echo isset($_SESSION['errors']['surname']) ? showError($_SESSION['errors'], 'surname') : ''; ?>
            </div>
            <div class="formElement">
                <label for="email">Email:</label>
                <input type="email" name="email" required />
                <?php echo isset($_SESSION['errors']['email']) ?  showError($_SESSION['errors'], 'email') : ''; ?>
            </div>
            <div class="formElement">
                <label for="pass">Contraseña:</label>
                <input type="password" name="password" required />
                <?php echo isset($_SESSION['errors']['password']) ?  showError($_SESSION['errors'], 'password') : ''; ?>
            </div>
            <div class="submitInputs">
                <input type="submit" name="submit" value="Registrar" />
            </div>
        </form>
        <?php deleteErrors(); ?>
    </div>
</aside>