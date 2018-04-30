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


