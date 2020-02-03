<?php

namespace MalaveHaxiel\TableBuilder;

use Jscript;

class TableBuilder {

	use BasicComponent;

	public function header(array $columsHeader = array())
	{
		$header = $this->head();
		$header .= $this->row();

		foreach ((array) $columsHeader as $value) {
			$header .= $this->th($value);
		}

		$header .= $this->endrow();
		$header .= $this->endhead();

		return $header;
	}	

	public function table($id, array $columsHeader = array(), array $optionsTable = array())
	{
		$optionsTable['id'] = $id;

		$table = $this->open($optionsTable);
		$table .= $this->header($columsHeader);
		$table .= $this->body();

		return $table;
	}

	public function dataTable($id, array $columsHeader = array(), array $optionsTable = array())
	{
		$dataTable = $this->table($id, $columsHeader, $optionsTable);
		
		$dataTable .= Jscript::script('$(document).ready(function(){'.
			Jscript::dataTable('#'.$id)->getString().'});'
		)->get();
		
		return $dataTable;
	}

	public function end()
	{
		$end = $this->endbody();
		$end .= $this->close();

		return $end;
	}

	public function tdShow(array $options = array())
	{
		$options['style'] = 'vertical-align: middle;' . @$options['style'];

		$this->td($options);
	}

	public function tdCenter(array $options = array())
	{
		$options['style'] = 'text-align: center;' . @$options['style'];

		$this->tdShow($options);
	}

	public function tdRight(array $options = array())
	{
		$options['style'] = 'text-align: right;' . @$options['style'];

		$this->tdShow($options);
	}

	public function tdInput(array $options = array())
	{
		$options['style'] = 'padding: 0; vertical-align: middle; ' . @$options['style'];

		$this->td($options);
	}
}
