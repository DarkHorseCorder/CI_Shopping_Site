<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function generate_country_options($selected_id = 0)
{
	$ci =& get_instance();

	$result = $ci->db->get('countries')->result();

	$str = '';
	foreach ($result as $country)
	{
		$selected = '';
		if($selected_id == $country->id)
		{
			$selected = ' selected';
		}
		$str .= "<option value='{$country->id}'{$selected}>{$country->name}</option>";
	}
	return $str;
}

function get_states_by_country_id($id=0)
{
	$ci =& get_instance();

	return $ci->db->get_where('states', array('country_id' => $id))->result();
}