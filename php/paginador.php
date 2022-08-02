<?php

function paginador(int $cantidad, int $pagina_actual)
{
    $cuantos_por_pagina=10;
    $cantidad_paginas = ceil($cantidad / $cuantos_por_pagina);

    $resultado = array(
        'cantidad' => $cantidad_paginas,
        'actual' => $pagina_actual,
        'anterior' => ($pagina_actual > 1) ? ($pagina_actual - 1) : null,
        'siguiente' => ($pagina_actual < $cantidad_paginas) ? ($pagina_actual + 1) : null,
        'primero' => ($pagina_actual > 1) ? 1 : null,
        'ultimo' => ($pagina_actual < $cantidad_paginas) ? $cantidad_paginas : null
    );

    return $resultado;

}