<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="index.css">

<title>projeto 1</title>
</head>
<body>
    
    <header class="cabecalho">
        <div class="opcoesd">
            <ol class="botoes">
           <!-- <li> <button class="opcoes">cadastrar visitantes</button></li> -->
           <!-- <li><button class="cadastros">meus cadastros</button></li> -->
           <li> <button class="relatorio">baixar relatorio</button></li>
        </ol>
        </div>
        <div class="container">
            
            <form>
                <main>
                <fieldset>
                    <legend>dados do visitante</legend>
                    <label for="nome">Nome completo</label>
                    <input id="nome" type="text" name="nome" required autofocus pattern="[A-Za-z ']{4,}" title="O nome precisa ter pelo menos 4 caracteres">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" required placeholder="@email do visitante">
                    <label for="telefone">telefone</label>
                    <input id="telefone" type="telefone" name="telefone" required placeholder="telefone do visitante">
                </fieldset>
                <fieldset>
                    <legend>Assunto</legend>
                    <label>
                        <input type="radio" name="assunto" value="Blog">
                        aluno
                    </label>
                    <label>
                        <input type="radio" name="assunto" value="Serviço">
                        maior de idade
                    </label>
                    <fieldset>
                        <input type="radio" name="assunto" value="Outro" id="outro">
                        <label for="outro">
                            menor de idade
                        </label>
                        <input type="text" name="outro-assunto">
                    </fieldset>
                </fieldset>
                <label for="mensagem">Como soube do evento</label>
                <textarea id="mensagem" name="mensagem" cols="60" rows="10" placeholder="resposta do visitante"></textarea>
                <button type="submit">Salvar</button>
                </main>
            </form>
        </div>
    </header>
    <div>
        </span>
        <p class="descricao"> </p> <p class="disp"></p></span>
    </div>
 


</body>
</html>