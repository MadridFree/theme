<?php if (in_category('opinion')) {
  include (TEMPLATEPATH . '/single_opinion.php');
}
elseif (in_category('noticias-madrid')) {
  include (TEMPLATEPATH . '/single_noticias.php');
}
elseif (in_category('foto-de-la-semana')) {
  include (TEMPLATEPATH . '/single_foto.php');
}
elseif (in_category('piscinas')) {
  include (TEMPLATEPATH . '/single_piscinas.php');
}
elseif (in_category('restaurantes')) {
  include (TEMPLATEPATH . '/single_restaurantes.php');
}
else {include (TEMPLATEPATH . '/single_default.php'); 
}