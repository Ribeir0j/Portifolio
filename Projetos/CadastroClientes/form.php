<?php 
   
   include_once('bdConfig.php');

    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $aniversario = $_POST['ano_nasc'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $result = mysqli_query($conexao, "INSERT INTO clientescadastrados(nome,email,senha,telefone,genero,aniversario,cidade,estado,endereco) 
    VALUES ('$nome','$email','$senha','$telefone','$genero','$aniversario','$cidade','$estado','$endereco')");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>
<button><a href="login.php">Voltar para a página de login</a></button>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <fieldset><legend><strong>Formulário de Clientes</strong></legend>
                <section class="input-container">
                    
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" value="<?php $nome?>" required>

                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php $email?>" required>

                    <label for="senha">Senha</label>
                    <input type="text" id="senha" name="senha" value="<?php $senha?>" required>

                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" value="<?php $telefone?>" required>
                </section>

                <p>Gênero:</p>

                <section class="radio-group">
                   
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="genero" value="<?php $genero = "masculino"?>" required>

                    
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="genero" value="<?php $genero = "feminino"?>" required>

                    
                    <label for="outro">Outro</label>
                    <input type="radio" id="outro" name="genero" value="<?php $genero = "outro"?>" required>

                </section>
                
                <section class="input-date">
                    <label for="ano_nasc">Data de Nascimento</label>
                    <input type="date" id="ano_nasc" name="ano_nasc" value="<?php $aniversario?>" required>
                    
                </section>

                <section class="input-container">
                   
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" value="<?php $cidade?>"required>

                    
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" value="<?php $estado?>" required>

                   
                    <label for="endereco">Endereço</label>
                    <input type="text"  id="endereco" name="endereco" value="<?php $endereco?>" required>
                </section>

                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>