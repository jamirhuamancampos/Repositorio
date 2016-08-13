<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="panel panel-default">
	<div class="panel-heading clearfix">
		<h3 class="panel-title pull-left">ADMINISTRACION DE RECURSOS</h3>		 
		<?=HTML::anchor('Index/formulario/','Agregar',array('class'=>'btn btn-primary pull-right'))?>
	</div>	

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ISBN</th>
					<th>T&Iacute;TULO</th>
					<th>RESUMEN</th>
					<th>TOTAL P&Aacute;GINAS</th>
					<th>TIPO</th>
					<th>C&Oacute;DIGO EDITORIAL</th>
					<th>ACCI&Oacute;N</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($recursos as $recurso) { ?>
					<tr>
						<td>
							<?=$recurso->isbn?>
						</td>

						<td>
							<?=$recurso->titulo?>
						</td>

						<td>
							<?=$recurso->resumen?>
						</td>

						<td>
							<?=$recurso->totalPaginas?>
						</td>

						<td>
							<?=$recurso->tipo?>
						</td>

						<td>
							<?=$recurso->codigo_editorial?>
						</td>

						<td>				
							<?=HTML::anchor('Index/formulario/'.$recurso->id,'Actualizar',array('class'=>'btn btn-warning'))?> <?=html::anchor('Index/eliminar/'.$recurso->id,'Eliminar',array('class'=>'btn btn-danger'))?>
						</td>				
					</tr>				
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>