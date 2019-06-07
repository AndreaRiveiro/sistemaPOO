<h1>Cadastro</h1>

<form action="index.php?Pessoas" method="post">

<input type="text" name="nome" placeholder="Nome Pessoa">
<input type="number" name="cpf" placeholder="CPF Pessoa">
<input type="number" name="idade" placeholder="Idade Pessoa">
<select name="tipoPessoa">
    <option value="usuario">Usuários</option>
    <option value= "funcionario">Funcionário</option>
</select>
<input type="text" name="usuario" placeholder="Nome Usuário">
<input type="password" name="senha" placeholder="Senha">
<input type="number" name="salario" placeholder="Salário">

<button type = "submit">Enviar</button>

</form>