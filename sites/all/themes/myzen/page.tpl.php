<?php

/* LAYOUTS

LEFT CONTENT RIGHT (full)
CONTENT RIGHT (right)
LEFT CONTENT (left)
CONTENT (plain)

*/

$thecontent = '';
$thecontent .= '<div class="content">';
$thecontent .= $messages;
$thecontent .= render($page['help']);
if($action_links) {
  $thecontent .= '<ul class="action-links">' .render($action_links). '</ul>';
}

if($title) {
  $thecontent .= '<h1>' . $title. '</h1>';
}

$thecontent .= render($tabs);
$thecontent .= render($page['content']);
$thecontent .= '</div>';

$thepage = '';
if($page['sidebar_left'] && $page['sidebar_right']){
  $thepage = '
  <div class="layout-full">
  <div class="page-left">' .render($page['sidebar_left']).'</div>
  <div class="page-content">' . $thecontent. '</div>
  <div class="page-right">' .render($page['sidebar_right']).'</div>
  </div>
  ';
}

else if(!$page['sidebar_left'] && $page['sidebar_right']) {
  $thepage = '
  <div class="layout-right">
  <div class ="page-content">'. $thecontent. '</div>
  <div class="page-right">' .render($page['sidebar_right']).' </div>
  </div>
  ';
  }

else if($page['sidebar_left'] && !$page['sidebar_right']) {
  $thepage = '
  <div class="layout-left">
  <div class ="page-content">'. $thecontent. '</div>
  <div class="page-left">' .render($page['sidebar_left']).' </div>
  </div>
  ';
  }

else if(!$page['sidebar_left'] && !$page['sidebar_right']) {
  $thepage = '
  <div class="layout-plain">
  <div class ="page-content">'. $thecontent. '</div>
  </div>
  ';
  }
