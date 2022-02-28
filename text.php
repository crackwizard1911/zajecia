<?php
	$text = <<< TEXT
	ZSŁ - Zespół
	Szkół Łączności
TEXT;
	echo $text;
	
	$name = 'jAnUsZ';
	echo '<br><br>', "$name to lowercase: ",strtolower($name);
	echo '<br><br>', "$name to uppercase: ",strtoupper($name);
	echo '<br><br><br>';
	
	$text2 = "paweł xD";
	echo ucwords($text2);
	echo '<br><br><br>';
	
	$text3 = "ooOOooOOooOOhhHHhh, eLdEn rInG";
	echo ucfirst(strtolower($text3));
	echo '<br><br><br>';
	
	$lorem = 'Wowem ipsum dowow sit amet, consectetuw adipiscing ewit. Quisque uwtwicies est sit amet ewit faciwisis bibendum nyec vitae nyisi. Nyunc eu euismod nyisi, vitae iacuwis nyibh. Nyam impewdiet euismod ewit nyec wuctus. Sed sed accumsan wowem. Vivamus scewewisque sem quis est eweifend vestibuwum. Awiquam id vuwputate wacus, nyec euismod towtow. Suspendisse tincidunt mawesuada wectus, nyon cuwsus mauwis puwvinyaw nyon. Fusce finyibus uwtwices massa, at consectetuw enyim. Pewwentesque nyon hendwewit diam. Pwaesent phawetwa sed nyisi nyon phawetwa.';
	echo wordwrap($lorem, 80, "<br>");
?>