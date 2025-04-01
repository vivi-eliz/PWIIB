<form action="verificar_login.php" method="post">
    <br/> Email:
    <input type="text" class="form-control" name="Email"/>
    <br/>Senha:
    <input type="password" class="form-control" name="senha"/>
    <?php if(isset($_GET["erro"]) && !empty($_GET["erro"]))
    {
        echo $_GET["erro"];
    }
    ?>
    <br/>
    <button type="submit">
        logar
    </button>
</form>