<?php

$cargos = array(
	array(
         'nomecargo' => 'CEO',
	     'subordinados' => array( 
              array('nomecargo' => 'Diretor Comercial',
				    'subordinados' => array(
                         array('nomecargo' => 'Supervisor',
							   'subordinados' => array(
                               array('nomecargo' => 'Responsável pela Cantina')
                             )
							  ),
                         array('nomecargo' => 'Secretária Executiva')
                     )),
	          array('nomecargo' => 'Diretor de Vendas',
				    'subordinados' => array(
                         array('nomecargo' => 'Supervisor de Loja',
							   'subordinados' => array(
                               array('nomecargo' => 'Responsável pelo Estoque')
                             )
							  ),
                         array('nomecargo' => 'Secretária Executiva')
                     )),
	          array('nomecargo' => 'Diretor Financeiro',
				    'subordinados' => array(
                         array('nomecargo' => 'Supervisor',
							   'subordinados' => array(
                               array('nomecargo' => 'Responsável pelo Contas a Pagar e Receber',
									'subordinados' => array (
                                             array('nomecargo' => 'Contador')
                                    ))
                             )
							  )
                     )),
	          array('nomecargo' => 'Diretor de RH')
         )
    )

);

function montaLista($cargos){
	
	$html = "<ul>";
	
	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nomecargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0) $html .= montaLista($cargo['subordinados']);
		$html .= "</li>";
	}
	
	$html .= "</ul>";
	
	return $html;
	
}
	
	echo montaLista($cargos);

?>