<?php
  function parser_row($row){
    static $price_content = 0;
    if (preg_match('@(^\s+)(1. Наша продукция)@', $row, $match)):
//        Get start offset from string
        $offset_srt = strlen($match[1]);
        $price_content = 1;
    endif;
    if (1 == $price_content):
      return $match[] = preg_split('/\t/',$row);
    endif;
  }
?>
