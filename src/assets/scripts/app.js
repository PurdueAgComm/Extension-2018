import $ from "jquery";
import "bootstrap";
import "./Bling";
import "promise-polyfill/src/polyfill";

if ($("[data-toggle='tooltip']").length) {
  System.import("./Tooltip").then(module => new module.default());
}

if ($("[class*='reveal']").length) {
  System.import("./Reveal").then(module => new module.default());
}

$(document).ready(function() {
  $('li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').slideDown(100);
  }, function() {
    $(this).find('.dropdown-menu').slideUp(100);
  });
});
