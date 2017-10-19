<?php
function convert_month($m)
{
	switch ($m)
	{
	case 1:$m='janvier';
	break;
	case 2:$m='février';
	break;
	case 3:$m='mars';
	break;
	case 4:$m='avril';
	break;
	case 5:$m='mai';
	break;
	case 6:$m='juin';
	break;
	case 7:$m='juillet';
	break;
	case 8:$m='août';
	break;
	case 9:$m='septembre';
	break;
	case 10:$m='octobre';
	break;
	case 11:$m='novembre';
	break;
	case 12:$m='décembre';
	break;
	}
	return $m ;
}
?>