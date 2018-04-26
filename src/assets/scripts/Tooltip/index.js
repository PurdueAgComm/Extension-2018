import $ from "jquery";
export default class Tooltip {
  constructor() {
    $('[data-toggle="tooltip"]').tooltip();
  }
}
