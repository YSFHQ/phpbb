<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

function column_num_string($column)
{
	switch ($column)
	{
		case 1:
			return 'left';
		case 2:
			return 'center';
		case 3:
			return 'right';
		case 4:
			return 'top';
		case 5:
			return 'bottom';
		default:
			return 0;
	}
}

function column_string_num($column)
{
	switch ($column)
	{
		case 'left':
			return 1;
		case 'center':
			return 2;
		case 'right':
			return 3;
		case 'top':
			return 4;
		case 'bottom':
			return 5;
		default:
			return 0;
	}
}

function column_string_const($column)
{
	switch ($column)
	{
		case 'top':
			return 1;
		case 'left':
			return 2;
		case 'center':
			return 4;
		case 'right':
			return 8;
		case 'bottom':
			return 16;
		default:
			return 0;
	}
}
