<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=Form::open('Index/registrar')?>
<table>
	
	<tr>
		<td>
			<div>ISBN</div>
		</td>

		<td>
			<div><?=Form::input('isbn','',array('id' => 'isbn','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Titulo</div>
		</td>

		<td>
			<div><?=Form::input('titulo','',array('id' => 'titulo','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Resumen</div>
		</td>

		<td>
			<div><?=Form::input('resumen','',array('id' => 'resumen','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Total PAginas</div>
		</td>

		<td>
			<div><?=Form::input('totalPaginas','',array('id' => 'totalPaginas','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Tipo</div>
		</td>

		<td>
			<div><?=Form::input('tipo','',array('id' => 'tipo','class' => 'form-control'))?></div>
		</td>
	</tr>

	<tr>
		<td>
			<div>Editorial</div>
		</td>

		<td>
			<select name="codigo_editorial">
			<?php foreach($editoriales as $editorial) { 
						?>
									
						<option value="<?php echo $editorial->codigo; ?>">
							<?php echo $editorial->nombre; ?>
						</option>
					<?php 
					}
				?>
							
			</select>
		</td>
	</tr>

	<tr>
		<td colspan="2" align="center">
		<?=Form::submit('btn_submit','Guardar')?>
		</td>
	</tr>

</table>

<?=Form::close()?>
