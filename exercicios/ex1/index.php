<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="calcular.php" method="post">
        Menu lanches: <br><br>
        1 – X Burguer (R$6,00) <br>
        2 – X Salada (R$8,00) <br>
        3 – X Bacon (R$10,00) <br>
        4 – X Tudo (R$12,00) <br>
        5 – X Duplo (R$15,00) <br><br>
        <label for="lanche">Escolha lanche:</label>
        <select name="lanche" id="lanche">
            <option value="1">X Burguer </option>
            <option value="2">X Salada</option>
            <option value="3">X Bacon </option>
            <option value="4">X Tudo</option>
            <option value="5">X Duplo</option>
        </select><br><br>
        
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
            
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
