(() => {
  const $ = (s, c = document) => c.querySelector(s), $$ = (s, c = document) => [...c.querySelectorAll(s)];
  const header = $('.header'), nav = $('#menu'), burger = $('.burger');
  const onScroll = () => header.classList.toggle('scrolled', scrollY > 40);
  onScroll(); addEventListener('scroll', onScroll, { passive: true });

  const setMenu = o => { nav.classList.toggle('open', o); burger.setAttribute('aria-expanded', o); burger.setAttribute('aria-label', o ? 'Fechar menu' : 'Abrir menu'); };
  burger.addEventListener('click', () => setMenu(!nav.classList.contains('open')));
  $$('a', nav).forEach(a => a.addEventListener('click', () => setMenu(false)));
  addEventListener('keydown', e => e.key === 'Escape' && setMenu(false));

  // reveal on scroll
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }), { threshold: .12 });
    $$('.reveal').forEach(el => io.observe(el));
  } else $$('.reveal').forEach(el => el.classList.add('in'));

  // placeholder when an image file is missing
  $$('.ph img').forEach(img => {
    const miss = () => img.closest('.ph').classList.add('empty');
    img.addEventListener('error', miss);
    if (img.complete && img.naturalWidth === 0) miss();
  });

  // gallery filter
  $$('.filters button').forEach(b => b.addEventListener('click', () => {
    $$('.filters button').forEach(x => x.classList.toggle('on', x === b));
    $$('.gallery .ph').forEach(f => f.hidden = b.dataset.f !== 'all' && f.dataset.cat !== b.dataset.f);
  }));

  // lightbox
  const lb = $('.lightbox'), lbImg = $('img', lb);
  $$('.gallery .ph').forEach(f => f.addEventListener('click', () => {
    const i = $('img', f); if (f.classList.contains('empty')) return;
    lbImg.src = i.src; lbImg.alt = i.alt; lb.showModal();
  }));
  $('.lb-close').addEventListener('click', () => lb.close());
  lb.addEventListener('click', e => e.target === lb && lb.close());
})();
