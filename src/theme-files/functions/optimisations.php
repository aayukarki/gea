//<?php
//
//function add_rel_preload($html, $handle, $href, $media) {
//    if (is_admin())
//        return $html;
//    $html = "<link rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\" id='$handle' href='$href' type='text/css' media='all' />";
//    return $html;
//}
//add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );