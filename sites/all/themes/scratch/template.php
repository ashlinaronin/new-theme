<?php

/*
** Implements hook_links__system_main_menu().
** Try changing main menu to an ordered list to see if it works.
*/
function scratch_links__system_main_menu($variables) {
  $html = "<div>\n";
  $html .= " <ol>\n";

  foreach ($variables['links'] as $link) {
    $html .= "<li>" . l($link['title'], $link['path'], $link) . "</li>";
  }
  $html .= " </ol>\n";
  $html .= "</div>\n";

  return $html;
}
