/* Welingkar 360° Hybrid PGDM: page behaviour. No libraries. */
(function () {
  'use strict';
  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)');
  var desktop = window.matchMedia('(min-width: 1024px)');
  document.documentElement.classList.remove('no-js');

  /* ---- Header: shadow on scroll, phone menu ---- */
  var hdr = $('.hdr'), burger = $('.hdr__burger');
  if (burger) {
    burger.addEventListener('click', function () {
      var open = !hdr.classList.contains('is-open');
      hdr.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    });
    $$('.hdr__nav a').forEach(function (a) { a.addEventListener('click', function () { hdr.classList.remove('is-open'); burger.setAttribute('aria-expanded', 'false'); }); });
  }

  /* ---- Reveal on scroll ---- */
  var io = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { rootMargin: '0px 0px -8% 0px' }) : null;
  $$('.rv').forEach(function (el) { io ? io.observe(el) : el.classList.add('in'); });

  /* ---- Hero triangles: build in one after another ---- */
  $$('.hero__tri path').forEach(function (p, k) { p.style.animationDelay = (0.15 + k * 0.035) + 's'; });

  /* ---- Count-up for the proof figures ---- */
  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-count')); if (isNaN(target) || reduce.matches) return;
    var dec = (el.getAttribute('data-count').split('.')[1] || '').length, t0 = null, dur = 1400;
    function step(t) { if (!t0) t0 = t; var p = Math.min(1, (t - t0) / dur), v = target * (1 - Math.pow(1 - p, 3));
      el.textContent = v.toFixed(dec); if (p < 1) requestAnimationFrame(step); }
    el.textContent = (0).toFixed(dec); requestAnimationFrame(step);
  }
  var nums = $$('[data-count]');
  if (nums.length && 'IntersectionObserver' in window) {
    var io2 = new IntersectionObserver(function (es) { es.forEach(function (e) { if (e.isIntersecting) { countUp(e.target); io2.unobserve(e.target); } }); }, { threshold: .6 });
    nums.forEach(function (n) { io2.observe(n); });
  }

  /* ---- Harvard: the 42 squares fill in ---- */
  $$('.hbp__grid i').forEach(function (el, k) { el.style.setProperty('--k', k); });
  var h42 = $('.hbp__42');
  if (h42 && 'IntersectionObserver' in window) {
    var io3 = new IntersectionObserver(function (es) { if (es[0].isIntersecting) { h42.classList.add('is-in'); io3.disconnect(); } }, { threshold: .5 });
    io3.observe(h42);
  }

  /* ---- Accordions: curriculum questions and FAQ (one open at a time) ---- */
  $$('[data-accordion]').forEach(function (group) {
    var items = $$(':scope > div', group);
    items.forEach(function (item) {
      var btn = $('button', item);
      btn.addEventListener('click', function () {
        var open = !item.classList.contains('is-open');
        items.forEach(function (o) { o.classList.remove('is-open'); $('button', o).setAttribute('aria-expanded', 'false'); });
        if (open) { item.classList.add('is-open'); btn.setAttribute('aria-expanded', 'true'); }
      });
    });
  });

  /* ---- Specialisations: on phones each tile opens to show its line ---- */
  $$('.spec__btn').forEach(function (b) {
    b.addEventListener('click', function () {
      var li = b.parentNode, open = !li.classList.contains('is-open');
      li.classList.toggle('is-open', open); b.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });

  /* ---- Carousel: GenWe Playbook ---- */
  $$('[data-carousel]').forEach(function (root) {
    var track = $('.car-track', root), bar = $('.car-progress i', root), btns = $$('.car-btn', root);
    if (!track) return;
    function stepSize() { var first = track.firstElementChild; var gap = parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap) || 16; return first ? first.getBoundingClientRect().width + gap : 300; }
    function update() {
      var max = track.scrollWidth - track.clientWidth, view = track.clientWidth / track.scrollWidth;
      if (bar) { bar.style.width = (view * 100) + '%'; bar.style.marginLeft = (max > 0 ? (track.scrollLeft / max) * (1 - view) * 100 : 0) + '%'; }
      btns.forEach(function (b) { var d = +b.getAttribute('data-dir'); b.disabled = d < 0 ? track.scrollLeft <= 2 : track.scrollLeft >= max - 2; });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { track.scrollBy({ left: stepSize() * +b.getAttribute('data-dir'), behavior: reduce.matches ? 'auto' : 'smooth' }); }); });
    track.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
  });

  /* ---- How you'll learn: hold the section while the scroll draws the path through six steps ---- */
  var learn = $('.learn'), pin = $('.learn__pin'), scenes = $$('.scene'), nows = $$('.now'), nodes = $$('.lnode'),
      lp = $('.lpath'), svg = $('.lpath__svg'), base = $('.lpath__base'), prog = $('.lpath__prog'), dot = $('.lpath__dot'),
      cur = -1, geo = null, lastP = 0, n = nodes.length;
  function setStep(i) {
    if (i === cur) return; cur = i;
    scenes.forEach(function (el, k) { el.classList.toggle('is-on', k === i); });
    nows.forEach(function (el, k) { el.classList.toggle('is-on', k === i); el.setAttribute('aria-hidden', k === i ? 'false' : 'true'); });
    nodes.forEach(function (el, k) {
      el.classList.toggle('is-on', k === i); el.classList.toggle('done', k < i);
      var b = $('button', el); if (k === i) b.setAttribute('aria-current', 'step'); else b.removeAttribute('aria-current');
    });
    learn.style.setProperty('--s', i);
    learn.style.setProperty('--mix', n > 1 ? (i / (n - 1)).toFixed(3) : 0);
  }
  /* draw one smooth line through the six node centres, from edge to edge */
  function buildPath() {
    if (!lp || !svg || !n) return;
    var W = lp.clientWidth, H = lp.clientHeight, box = lp.getBoundingClientRect(); if (!W || !H) return;
    var pts = nodes.map(function (li) { var r = $('.lnode__c', li).getBoundingClientRect(); return [r.left + r.width / 2 - box.left, r.top + r.height / 2 - box.top]; });
    var mid = H / 2, f = function (v) { return v.toFixed(1); };
    var d = 'M0 ' + f(mid) + ' C' + f(pts[0][0] / 2) + ' ' + f(mid) + ' ' + f(pts[0][0] / 2) + ' ' + f(pts[0][1]) + ' ' + f(pts[0][0]) + ' ' + f(pts[0][1]);
    for (var k = 1; k < pts.length; k++) {
      var a = pts[k - 1], b = pts[k], mx = (a[0] + b[0]) / 2;
      d += ' C' + f(mx) + ' ' + f(a[1]) + ' ' + f(mx) + ' ' + f(b[1]) + ' ' + f(b[0]) + ' ' + f(b[1]);
    }
    var last = pts[pts.length - 1], ex = (last[0] + W) / 2;
    d += ' C' + f(ex) + ' ' + f(last[1]) + ' ' + f(ex) + ' ' + f(mid) + ' ' + f(W) + ' ' + f(mid);
    svg.setAttribute('viewBox', '0 0 ' + W + ' ' + H);
    base.setAttribute('d', d); prog.setAttribute('d', d);
    var total = prog.getTotalLength();
    function lengthAtX(x) { var lo = 0, hi = total; for (var i = 0; i < 24; i++) { var m = (lo + hi) / 2; if (prog.getPointAtLength(m).x < x) lo = m; else hi = m; } return (lo + hi) / 2; }
    geo = { total: total, at: pts.map(function (p) { return lengthAtX(p[0]); }) };
    prog.style.strokeDasharray = total; learn.classList.add('has-path');
    drawPath(lastP);
  }
  /* each step owns an equal slice of the scroll: the dot travels to its point in the first
     part of the slice, then rests there while the step is read */
  function stepOf(p) { return Math.min(n - 1, Math.floor(p * n)); }
  function drawPath(p) {
    if (!geo) return;
    var q = p * n, k = Math.min(n - 1, Math.floor(q)), t = Math.min(1, (q - k) / 0.4);
    var ease = t < 1 ? 1 - Math.pow(1 - t, 3) : 1;
    var L = k === 0 ? geo.at[0] : geo.at[k - 1] + (geo.at[k] - geo.at[k - 1]) * ease;
    if (p >= 1) L = geo.at[n - 1];
    prog.style.strokeDashoffset = (geo.total - L).toFixed(1);
    var pt = prog.getPointAtLength(L);
    if (dot) dot.style.transform = 'translate(' + pt.x.toFixed(1) + 'px,' + pt.y.toFixed(1) + 'px)';
  }
  function progress() {
    var r = learn.getBoundingClientRect(), top = parseFloat(getComputedStyle(pin).top) || 0;
    var total = r.height - pin.offsetHeight; if (total <= 0) return 0;
    return Math.min(1, Math.max(0, (top - r.top) / total));
  }
  var pinned = learn && pin && !reduce.matches;
  if (learn && pin) {
    if (!pinned) { document.documentElement.classList.add('no-pin'); lastP = 1; }
    var ticking = false;
    var onScroll = function () {
      if (ticking) return; ticking = true;
      requestAnimationFrame(function () {
        ticking = false;
        if (pinned) { lastP = progress(); drawPath(lastP); setStep(stepOf(lastP)); }
        barState();
      });
    };
    nodes.forEach(function (li, k) {
      $('button', li).addEventListener('click', function () {
        if (!pinned) { var t = nows[k]; if (t) t.scrollIntoView({ block: 'center' }); return; }
        var top = parseFloat(getComputedStyle(pin).top) || 0;
        var start = learn.getBoundingClientRect().top + window.scrollY - top, total = learn.offsetHeight - pin.offsetHeight;
        window.scrollTo({ top: start + total * (k + 0.55) / n, behavior: 'smooth' });
      });
    });
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', function () { buildPath(); onScroll(); });
    window.addEventListener('load', buildPath);
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(buildPath);
    if (pinned) setStep(0);
    buildPath(); onScroll();
  }

  /* ---- Phone apply bar: appears after the hero, steps aside inside the pinned section ---- */
  var mbar = $('.mbar'), hero = $('.hero'), lastY = 0;
  function barState() {
    if (!mbar || !hero) return;
    var past = hero.getBoundingClientRect().bottom < 80;
    var inLearn = learn && learn.getBoundingClientRect().top < 80 && learn.getBoundingClientRect().bottom > window.innerHeight;
    mbar.classList.toggle('is-on', past && !inLearn);
  }
  window.addEventListener('scroll', function () {
    if (hdr) hdr.classList.toggle('is-scrolled', window.scrollY > 8);
    if (!learn) barState();
    lastY = window.scrollY;
  }, { passive: true });
  barState();

  /* ---- Header: mark the nav link for the section in view ---- */
  var links = $$('.hdr__nav a[href^="#"]');
  if (links.length && 'IntersectionObserver' in window) {
    var map = {}; links.forEach(function (a) { var t = $(a.getAttribute('href')); if (t) map[t.id] = a; });
    var io4 = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting && map[e.target.id]) { links.forEach(function (a) { a.classList.remove('is-active'); }); map[e.target.id].classList.add('is-active'); } });
    }, { rootMargin: '-45% 0px -50% 0px' });
    Object.keys(map).forEach(function (k) { io4.observe(document.getElementById(k)); });
  }

  /* ---- Lead form: hide the loading note once the CRM widget has drawn its form ---- */
  var crm = $('.form-card__crm');
  if (crm && 'MutationObserver' in window) {
    var mo = new MutationObserver(function () { if ($('form, input', crm)) { crm.parentNode.classList.add('is-ready'); mo.disconnect(); } });
    mo.observe(crm, { childList: true, subtree: true });
  }
})();
