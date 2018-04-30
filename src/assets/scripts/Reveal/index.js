export default class Reveal {
  constructor() {
    window.sr = ScrollReveal();
    sr.reveal('.reveal', {
      duration: 500,
      viewFactor: 0.25,
    });

    sr.reveal('.reveal-resource', {
      duration: 500,
      delay: 300,
      viewFactor: 0.4,
    });

    sr.reveal('.reveal-resource-2', {
      duration: 500,
      delay: 500,
      viewFactor: 0.4,
    });

    sr.reveal('.reveal-resource-3', {
      duration: 500,
      delay: 700,
      viewFactor: 0.4,
    });

    sr.reveal('.reveal-meta', {
      duration: 500,
      delay: 200,
      viewFactor: 0.4,
    });
  }
}
