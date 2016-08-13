<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=Form::open('Index/registrar')?>
<table>
	
	<tr>
		<td>
			<div>ISBN</div>
		</td>

		<td>
			<div><?=Form::input('isbn',$recurso->isbn,array('id' => 'isbn','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Titulo</div>
		</td>

		<td>
			<div><?=Form::input('titulo',$recurso->titulo,array('id' => 'titulo','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Resumen</div>
		</td>

		<td>
			<div><?=Form::input('resumen',$recurso->resumen,array('id' => 'resumen','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Total PAginas</div>
		</td>

		<td>
			<div><?=Form::input('totalPaginas',$recurso->totalPaginas,array('id' => 'totalPaginas','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Tipo</div>
		</td>

		<td>
			<div><?=Form::input('tipo',$recurso->tipo,array('id' => 'tipo','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Codigo Editorial</div>
		</td>

		<td>
			<select name="codigo_editorial">
				<option value="1">Thompson</option>
				<option value="2">Larrouse</option>
				<option value="3">Astral</option>
				<option value="4">Amsda</option>
				<option value="5">sad</option>
			</select>
		</td>
	</tr>

	<tr>
		<td colspan="2" align="center">
		<?=Form::hidden('id',$recurso->id)?>
		<?=Form::submit('btn_submit','Guardar')?>
		</td>
	</tr>

</table>

<?=Form::close()?>