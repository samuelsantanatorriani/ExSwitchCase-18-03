<?php
    $nome = $_POST['nome'];
    $lanche = $_POST['lanche'];
    $ql = $_POST['ql'];
    $bebida = $_POST['bebida'];
    $total = 0;

    switch ($lanche) {
        case "1":
            $total = $total + (6 * $ql);
            break;
        case "2":
            $total = $total + (8 * $ql);
            break;
        case "3":
            $total = $total + (10 * $ql);
            break;
        case "4":
            $total = $total + (12 * $ql);
            break;
        case "5":
            $total = $total + (15 * $ql);
            break;    
        default:
            echo "Opção inválida.";
    }

    switch ($bebida) {
        case "1":
            $total = $total + 2;
            break;
        case "2":
            $total = $total + 5;
            break;
        case "3":
            $total = $total + 3;
            break;
        case "4":
            $total = $total + 5;
            break;
        case "5":
            $total = $total + 8;
            break;    
        default:
            echo "Opção inválida.";
    }


    echo "O pedido do(a) ".$nome." ficou em: R$".$total.",00"
?>