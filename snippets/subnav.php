<?php

namespace Automad\Core;

$Page = $Automad->Context->get();
$html = Blocks::render($Page->get('+main'), $Automad);
$output = '';

preg_match_all('/\<h2\sid\=\"([\w\-]+)\"\>(.+?)\<\/h2\>/is', $html, $matches, PREG_SET_ORDER);

if (!empty($matches)) {

	$output .= '<ul class="current subnav">';

	foreach ($matches as $match) {
		$output .= '<li class="toctree-l' . strval(intval($Page->get(':level')) + 1) . '">' . 
						'<a href="#' . $match[1] . '" class="reference internal"><span>‒ &nbsp;' . $match[2] . '</span></a>' . 
					'</li>';
	}

	$output .= '</ul>';

}

echo $output;

?>