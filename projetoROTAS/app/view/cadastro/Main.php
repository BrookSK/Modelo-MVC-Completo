<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar' ?>" method="post">
    Nome: <input type="text" name="Nome" id="Nome"><br>
    Sexo: 
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade: <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Cadastrar">
</form>
<br><br>
<hr>
<h1>SELEÇÃO DE DADOS</h1>
<form name="FormSelect" id="FormSelect" action="<?php echo DIRPAGE.'cadastro/seleciona' ?>" method="post">
    Nome: <input type="text" name="Nome" id="Nome"><br>
    Sexo: 
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade: <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Pesquisar">
</form>
<!--Será responável por exibir a tabela de pesquisa-->
<div class="Resultado" style="background: pink;">

</div>