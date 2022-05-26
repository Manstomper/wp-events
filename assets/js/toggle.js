/*
Usage example:
  <button type="button" aria-controls="foobar" aria-expanded="false" data-toggle="foobar">Toggle</button>
  <div id="foobar">Hello.</div>
*/
window.addEventListener('load', function load() {
  window.removeEventListener('load', load);

  const el = this.document.querySelectorAll('[data-toggle]');

  for (let i = 0; i < el.length; i++) {
    el[i].addEventListener('click', function (e) {
      let container = document.querySelector(
        '#' + e.currentTarget.dataset.toggle
      );
      if (!container.classList.contains('is-open')) {
        container.classList.add('is-open');
        e.currentTarget.setAttribute('aria-expanded', true);
      } else {
        container.classList.remove('is-open');
        e.currentTarget.setAttribute('aria-expanded', false);
      }
    });
  }
});
