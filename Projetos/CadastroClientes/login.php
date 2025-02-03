<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    
    <div class="login">
        <section>
            <form action="testLogin.php" method="POST">
                <h1>Login</h1>
        
                <input type="text" name="email" id="email" placeholder="Digite seu email" required>

                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>

                <input type="submit" name="submit" value="Enviar">
            </form>

            <p>Ainda não tem uma conta? <a href="form.php">Clique aqui e cadastre-se já!</a></p>
        </section>
    </div>    
</body>
</html>
