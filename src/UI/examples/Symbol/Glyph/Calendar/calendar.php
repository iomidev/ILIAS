<?php
function calendar() {
	global $DIC;
	$f = $DIC->ui()->factory()->symbol()->glyph();
	$renderer = $DIC->ui()->renderer();

	return $renderer->render($f->calendar("#"));
}