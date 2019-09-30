<?php
include_once './util/corpo.php';
cabeca();
?>

        
        <form method="POST" action="../inserir/validaLoginImg.php">
            <label class="form-group">Nome:</label> <input type="text" name="login" id="login" class="form-control" placeholder="Digite o Login"> <br>
            <label class="form-group">Senha:</label> <input type="password"  name="senha" id="senha" class="form-control" placeholder="****"><br>
            <button type="submit" class="btn btn-success">Logar</button>
            <button type="reset" class="btn btn-danger">Apagar</button>
        </form>
     <?php
radape();
?>   