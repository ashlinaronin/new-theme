/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Change image on mouseover to be coolest cooler
    // Save old image src outside handler scope so we can set it back
    var oldImgSrc;
    $(".field-item img")
      .mouseover(function() {
        oldImgSrc = $(this).attr('src');
        $(this).attr('src', 'https://coolest.com/wp-content/uploads/2015/09/Blue-Cooler-Open-with-Accessories.png');
      })
      .mouseleave(function() {
        $(this).attr('src', oldImgSrc);
      })

  }
};


})(jQuery, Drupal, this, this.document);
