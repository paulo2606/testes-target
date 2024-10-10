<?php
do {
    echo "\n============================\n";
    echo "       SEQUÊNCIAS\n";
    echo "============================\n";
    echo "Escolha uma sequência:\n";
    echo "1) 1, 3, 5, 7...\n";
    echo "2) 2, 4, 8, 16, 32, 64...\n";
    echo "3) 0, 1, 4, 9, 16, 25, 36...\n";
    echo "4) 4, 16, 36, 64...\n";
    echo "5) 1, 1, 2, 3, 5, 8...\n";
    echo "6) 2, 10, 12, 16, 17, 18, 19...\n";
    echo "0) Sair!\n";
    
    $opcao = (int)readline("Digite a opção desejada: ");

    switch ($opcao) {
        case 1:
            $sequenciaA = [];
            for ($i = 1; $i < 10; $i += 2) {
                $sequenciaA[] = $i;
            }
            $sequenciaA[] = end($sequenciaA) + 2;
            echo "\nSequência A: ";
            for ($i = 0; $i < count($sequenciaA); $i++) {
                echo $sequenciaA[$i] . ($i < count($sequenciaA) - 1 ? ", " : ""); 
            }
            echo "\n============================\n";
            break;

        case 2:
            $sequenciaB = [];
            for ($i = 1; $i <= 7; $i++) {
                $sequenciaB[] = 2 ** $i;
            }
            $sequenciaB[] = end($sequenciaB) * 2;
            echo "\nSequência B: ";
            for ($i = 0; $i < count($sequenciaB); $i++) {
                echo $sequenciaB[$i] . ($i < count($sequenciaB) - 1 ? ", " : "");
            }
            echo "\n============================\n";
            break;

        case 3:
            $sequenciaC = [];
            for ($i = 0; $i <= 6; $i++) {
                $sequenciaC[] = $i ** 2;
            }
            $sequenciaC[] = count($sequenciaC) ** 2;
            echo "\nSequência C: ";
            for ($i = 0; $i < count($sequenciaC); $i++) {
                echo $sequenciaC[$i] . ($i < count($sequenciaC) - 1 ? ", " : "");
            }
            echo "\n============================\n";
            break;

        case 4:
            $sequenciaD = [];
            for ($i = 2; $i <= 8; $i += 2) {
                $sequenciaD[] = $i ** 2;
            }
            $sequenciaD[] = (sqrt(end($sequenciaD)) + 2) ** 2;
            echo "\nSequência D: ";
            for ($i = 0; $i < count($sequenciaD); $i++) {
                echo $sequenciaD[$i] . ($i < count($sequenciaD) - 1 ? ", " : "");
            }
            echo "\n============================\n";
            break;

        case 5:
            $sequenciaE = [1, 1];
            for ($i = 2; $i < 7; $i++) {
                $sequenciaE[] = $sequenciaE[$i - 1] + $sequenciaE[$i - 2];
            }
            $sequenciaE[] = end($sequenciaE) + $sequenciaE[count($sequenciaE) - 2];
            echo "\nSequência E: ";
            for ($i = 0; $i < count($sequenciaE); $i++) {
                echo $sequenciaE[$i] . ($i < count($sequenciaE) - 1 ? ", " : "");
            }
            echo "\n============================\n";
            break;

        case 6:
            $sequenciaF = [2, 10];
            for ($i = 2; $i < 7; $i++) {
                if ($i % 2 == 0) {
                    $sequenciaF[] = $sequenciaF[$i - 2] + 2;
                } else {
                    $sequenciaF[] = $sequenciaF[$i - 1] + 1;
                }
            }
            $sequenciaF[] = end($sequenciaF) + 1;
            echo "\nSequência F: ";
            for ($i = 0; $i < count($sequenciaF); $i++) {
                echo $sequenciaF[$i] . ($i < count($sequenciaF) - 1 ? ", " : "");
            }
            echo "\n============================\n";
            break;

        case 0:
            echo "\nSaindo...\n";
            break;

        default:
            echo "\nOpção inválida. Tente novamente.\n";
            break;
    }
} while ($opcao !== 0);
?>
