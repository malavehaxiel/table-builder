<?php

namespace MalaveHaxiel\TableBuilder;

trait BasicComponent {
	
	public function open(array $optionsTable = array())
	{
		$id = $optionsTable['id'] ?? null;

		return "<table id='{$id}' role='grid' class='table table-striped table-bordered display hover' cellspacing='0' width='100%'>";
	}

	public function close()
	{
		return '</table>';
	}

	public function head()
	{
		return '<thead style="background-color:#ffffff">';
	}

	public function endhead()
	{
		return '</thead>';
	}

	public function row(array $options = array())
	{

		echo '<tr id="'.@$options['id'].'" data-id="'.@$options['data-id'].'">';
	}

	public function endrow()
	{
		echo '</tr>';
	}

	public function th($value, array $options = array())
	{
		$styles = @$options['style'];

		return '<th class="dt-head-center" style="text-align: center; '.$styles.'">'.strtoupper($value).'</th>';
	}

	public function body()
	{
		return '<tbody>';
	}

	public function endbody()
	{
		return '</tbody>';
	}

	public function foot()
	{
		return '<tfoot>';
	}

	public function endfoot()
	{
		return '</tfoot>';
	}

	public function td(array $options = array())
	{
		echo '<td id="'.@$options['id'].'" class="'.@$options['class'].'" style="'.@$options['style'].'">';
	}

	public function endtd()
	{
		echo '</td>'; 
	}
}