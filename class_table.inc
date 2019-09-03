<?php 
class Table
{
	
	public static function beginTable ($title)
	{
		$string = '
		<label>' . $title . '</label>
		<table class="table">
			<tbody>';
		return $string;
	}

	public static function rowTable ($name, $elem)
	{
		$string = '
		<tr>
	      	<th scope="row">' . $name . '</th>
	      	<td>' . $elem . '</td>
	    </tr>';
	    return $string;
	}

	public static function beginNestedTable ($title) 
	{
		$string = '
		<tr>
			<td scope="row">
				<label>' . $title . '</label>
				<table class="table">
					<tbody>';
		return $string;
	}

	public static function endNestedTable () 
	{
		$string = '
					</tbody>
				</table>
			</td>
		</tr>';
		return $string;
	}

	public static function endTable () 
	{
		$string = '
			</tbody>
		</table>';
		return $string;
	}
}
?>