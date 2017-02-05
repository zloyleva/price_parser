<?php
  function parser_row($row){
    static $price_content = 0;
    if (preg_match('@(^\s+)(1. Наша продукция)@', $row, $match)):
//        Get start offset from string
        $offset_srt = strlen($match[1]);
        $price_content = 1;
    endif;
    if (1 == $price_content):
        return what_is_item((array)preg_split('/\t/',$row));
//      return $match[] = preg_split('/\t/',$row);
    endif;
  }
?>
<?php
    function what_is_item($args){
        $count = count($args);
        if (1 == $count) set_catalog($args);

        return ;//$args;
    }
?>
<?php
function set_catalog($args){
    preg_match('@(^\s*)(.+)@', $args[0], $match);
    static $catalog_name = [];
    var_dump(strlen($match[1]));
    switch (strlen($match[1])){
        case 2: $catalog_name[0] = $match[2];
                $match[2] = '';
        case 4: $catalog_name[1] = $match[2];
                $match[2] = '';
        case 8: $catalog_name[2] = $match[2];
                $match[2] = '';
        case 12: $catalog_name[3] = $match[2];
                $match[2] = '';
        case 16: $catalog_name[4] = $match[2];
    }
    return $catalog_name;
}
?>
