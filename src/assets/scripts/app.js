import $ from "jquery";
import "bootstrap";
import "./Bling";
import "promise-polyfill/src/polyfill";

if ($("[data-toggle='tooltip']").length) {
  System.import("./Tooltip").then(module => new module.default());
}

if ($("[data-animate]").length) {
  System.import("./Animate").then(module => new module.default());
}

