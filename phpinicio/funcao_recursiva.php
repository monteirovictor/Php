<?php 

$organograma=array(
    array(
        'nome_cargo'=>'analista',
        'empregados'=>array(
            array(
                'nome_cargo'=>'eng. de software',
                'nome_empregado'=>'maike'
            )
        )


        
            ),
            array(
                'nome_cargo'=>'diretor financeiro',
                'empregados'=>array(
                    array(
                        'nome_cargo'=>'analista contabil',
                        'nome_empregado'=>'raimundo'
                    )
                )
        
        
                
                    ),

        array(
               'nome_cargo' =>'marketing ',
               'empregados'=>array(
                   array(
                       'nome_cargo'=>'digital influence',
                       'nome_empregado'=>'rachel'
                   )
               )

        )

);


function mostra($cargos){
    $html = "<ul>";

    foreach ($cargos as $cargo) {
        
        $html.="<li>";

        $html .=$cargo['nome_cargo']; 

        if (isset($cargo['empregados'] ) && count($cargo['empregados'])>0) {
            # code...
        }

        $html.="</li>";
    }
    $html .="</ul>";
    return $html;

}
echo mostra($organograma);


?>