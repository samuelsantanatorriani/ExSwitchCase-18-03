<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="calcular.php" method="post">
    Digite o seu nome:
    <input type="text" name="nome" size="25" /><br><br>

        Menu de livros: <br><br>
        1 – Dom Quixote     (R$20,00) <br>
        2 – Moby Dick      (R$28,00) <br>
        3 – Orgulho e Preconceito      (R$30,00) <br>
        4 – Crime e Castigo      (R$29,00) <br> 
        5 – Os Irmãos Karamázov   (R$35,00) <br>
        6 -                      (32,00)<br>
        <label for="lanche">Escolha lanche:</label>
        <select name="livros" id="livros">
            <option value="1"> Dom Quixote   </option>
            <option value="2">Moby Dick  </option>
            <option value="3">Orgulho e Preconceito</option>
            <option value="4">Crime e Castigo </option>
            <option value="5">Os Irmãos Karamázov </option>
        </select><br><br>
    Digite a quantidade de lanches:
    <input type="text" name="ql" size="25" /><br><br>
<!--         
        Menu Bebidas: <br><br>
        1 – Água (R$2,00) <br>
        2 – Suco (R$5,00) <br>
        3 – Lata (R$3,00) <br>
        4 – 600 ml (R$5,00) <br>
        5 – 2 Litros (R$8,00) <br><br>
        <label for="bebida">Escolha bebida:</label>
        <select name="bebida" id="bebida">
            <option value="1">Água  </option>
            <option value="2">Suco</option>
            <option value="3">Lata </option>
            <option value="4">600 ml</option>
            <option value="5">2 Litros</option>
             -->
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>






<!-- O Grande Gatsby – F. Scot
1984 –
A Odisséia – Ho
Cem Anos de Solidão – Gabriel Garcí
Frankenstein– Maria Shelle -->