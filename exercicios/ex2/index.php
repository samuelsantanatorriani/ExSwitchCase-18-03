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

        livros a venda: <br><br>
        1 – Dom Quixote     (R$20,00) <br>
        2 – Moby Dick   (R$28,00) <br>
        3 – Orgulho e Preconceito   (R$30,00) <br>
        4 – Crime e Castigo     (R$29,00) <br> 
        5 – Os Irmãos Karamázov     (R$35,00) <br>
        6 - O Grande Gatsby     (32,00)<br>
        7 - A Odisséia       (40,00)<br>
        8 - Cem Anos de Solidão     (43,00)<br>
        9 - Frankenstein        (45,00)<br>
        10 - 48 leis do poder    (48,00)<br><br>


        <label for="livros">Escolha os livros:</label>
        <select name="livros" id="livros">
            <option value="1"> Dom Quixote   </option>
            <option value="2">Moby Dick  </option>
            <option value="3">Orgulho e Preconceito</option>
            <option value="4">Crime e Castigo </option>
            <option value="5">Os Irmãos Karamázov </option>
            <option value="6"> O Grande Gatsby </option>
            <option value="7"> A Odisséia </option>
            <option value="8"> Cem Anos de Solidão </option>
            <option value="9"> Frankenstein  </option>
            <option value="10"> 48 leis do poder </option>
            
        </select><br><br>
    Digite quantos livros:
    <input type="text" name="ql" size="25" /><br><br>
        
      
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>






