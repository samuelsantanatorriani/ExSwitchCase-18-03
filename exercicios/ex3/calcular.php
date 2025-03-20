<?php
    $valorF = $_POST['valorF'];
    $forma = $_POST['forma'];
    $qp = $_POST['qp'];
    $total = 0;

    switch ($forma) {
        case "1":
            $total =$valorF -($valorF/100 * 10)
            echo "O valor final da compra ficou em: R$".$total.",00"
            break;
        case "2":
            $total = $total + (8 * $ql);
            echo "O valor final da compra ficou em: R$".$total.",00 e as parcelas em: R$".$parcela.",00";
            break;   
        default:
            echo "Opção inválida.";
    }

   
?>