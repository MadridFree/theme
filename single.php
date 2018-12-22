<?php if (in_category('opinion')) {
  include (TEMPLATEPATH . '/single_opinion.php');
}
elseif (in_category('noticias')) {
  include (TEMPLATEPATH . '/single_noticias.php');
}
elseif (in_category('restaurantes')) {
  include (TEMPLATEPATH . '/single_restaurantes.php');
}
else {include (TEMPLATEPATH . '/single_default.php'); 
}