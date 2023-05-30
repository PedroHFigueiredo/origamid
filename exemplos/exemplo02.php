<?php
function calcular_obesidade($peso, $altura)
{
    return $peso/($altura * $altura);
}
echo calcular_obesidade(70, 1.85);

?>