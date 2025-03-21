<?php
    $nome = $_POST['nome'];
    $livro = $_POST['livros'];
    $ql = $_POST['ql'];
    $total = 0;

    switch ($livros) {
        case "1":
            $total = $total + (20 * $ql);
            break;
        case "2":
            $total = $total + (28 * $ql);
            break;
        case "3":
            $total = $total + (30 * $ql);
            break;
        case "4":
            $total = $total + (29 * $ql);
            break;
        case "5":
            $total = $total + (35 * $ql);
            break;

        case "6":
            $total = $total + (32 * $ql);
            break;
        case "7":
            $total  = $total + (40 * $ql);
            break;
        case "8":
            $total = $total + (43 * $ql);
            break;
        case "9":
            $total = $total + (45* $ql);
            break;
        case "10":
            $total = $total + (48 * $ql);
            break;
             


        default:
            echo "Opção inválida.";
    }


    echo "A compra do(a) ".$nome." ficou em: R$".$total.",00"
?>