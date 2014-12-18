<?php
 
print_r($node);
function yourtheme_preprocess_node(&$variables){
    if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))){
       array_push($variables['theme_hook_suggestions'], 'node__taxonomy');
    }
}
 
?>