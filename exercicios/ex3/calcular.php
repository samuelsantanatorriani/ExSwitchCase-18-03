<?php
    $valorF = $_POST['valorF'];
    $forma = $_POST['forma'];
    $qp = $_POST['qp'];
    $total = 0;

    switch ($forma) {
        case "1":
            $total =$valorF/100 * 90;
            echo "O valor final da compra ficou em: R$".$total;
            break;
        case "2":
            
                if ($qp <= 3)//até 3x 
                { 
                    $total = $valorF;
                    $parcela = $valorF / $qp;
                    echo "O valor final da compra ficou em: R$".$total." e as ".$qp." parcelas ficaram em: R$".$parcela;
                }
                elseif ($qp <= 6)//até 6x
                {
                    $parcela = $valorF / $qp + (($valorF/100) *10);
                    $total = $parcela * $qp;

                    echo "O valor final da compra ficou em: R$".$total." e as ".$qp." parcelas ficaram em: R$".$parcela;
                }
                else //maior 6x
                {
                    $parcela = $valorF / $qp + (($valorF/100) *20);
                    $total = $parcela * $qp;

                    echo "O valor final da compra ficou em: R$".$total." e as ".$qp." parcelas ficaram em: R$".$parcela;
                }

            break;   
        default:
            echo "Opção inválida.";
    }

   
?>