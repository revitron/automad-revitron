<?php

namespace Automad\Core;

$Page = $Automad->Context->get();
$main = json_decode($Page->get('+main'));
$output = '';

if (!empty($main) && !empty($main->blocks)) {

	foreach($main->blocks as $block) {

		if (($block->type == 'header') && isset($block->data->level) && ($block->data->level == 2)) {

			$id = Str::sanitize($block->data->text, true);
			$level = strval(intval($Page->get(':level')) + 1);
			$output .= <<< HTML
						<li class="toctree-l$level"> 
							<a href="#$id" class="reference internal">
								<span>‒ &nbsp;{$block->data->text}</span>
							</a> 
						</li>

HTML;
			
		}
	}

}

if ($output) {
	echo '<ul class="current subnav">' . $output . '</ul>';
}

?>