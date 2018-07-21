<?php
// standardowo spl_autoload_register zakłada, że umieszczamy 
// moduły w odpowiednich podkatalogach – o nazwie równej nazwie przestrzeni nazw. 
// Możemy też używać innego rozszerzenia, niż php – na przykład class.php:
// zob. spl_autoload_extensions

namespace ns1;
set_include_path('.'); //get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_extensions('.class.php');
spl_autoload_register();
test1::id();
