<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="calcular.php" method="post">
    Digite o valor final da compra:
    <input type="text" name="valorF" size="25" /><br><br>
    
        <label for="forma">Escolha a forma de pagamento</label>
        <select name="forma" id="forma">
            <option value="1">À vista </option>
            <option value="2">A prazo:</option>
        </select><br><br>

    Se for a prazo digite a quantidade de parcelas:
    <input type="text" name="qp" size="25" /><br><br>

        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
