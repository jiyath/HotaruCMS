<?php 

/* ******* TEMPLATE ******************************************************************************** 
 * Theme name: default
 * Template name: footer.php
 * Template author: Nick Ramsay
 * Version: 0.1
 * License:
 *
 *   This file is part of Hotaru CMS (http://www.hotarucms.org/).
 *
 *   Hotaru CMS is free software: you can redistribute it and/or modify it under the terms of the 
 *   GNU General Public License as published by the Free Software Foundation, either version 3 of 
 *   the License, or (at your option) any later version.
 *
 *   Hotaru CMS is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 *   even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License along with Hotaru CMS. If not, 
 *   see http://www.gnu.org/licenses/.
 *   
 *   Copyright (C) 2009 Hotaru CMS - http://www.hotarucms.org/
 *
 **************************************************************************************************** */

global $hotaru, $plugin, $lang; 
?>
	<div id="ft" role="contentinfo">
		<?php 
			$plugin->check_actions('footer_top');
			$plugin->check_actions('footer');
		
			// Link to forums...
			echo "<p>" . $lang["main_theme_footer_brought_by"];
			echo " <a href='http://hotarucms.org'>Hotaru CMS</a> ";
			echo $lang["main_theme_footer_open_source"] . "</p>";
		
			$hotaru->show_queries_and_time();
			$plugin->check_actions('footer_bottom'); 
		?>
	</div>
</div>
</body>
</html>