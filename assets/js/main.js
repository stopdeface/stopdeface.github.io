/* =============================================
   BUG HUNTER PORTFOLIO — MAIN JS
   ============================================= */

// ─── Mobile nav toggle ───────────────────────
(function () {
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');
  if (!hamburger || !navLinks) return;

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    const spans = hamburger.querySelectorAll('span');
    const isOpen = navLinks.classList.contains('open');
    spans[0].style.transform = isOpen ? 'rotate(45deg) translate(5px, 5px)' : '';
    spans[1].style.opacity   = isOpen ? '0' : '1';
    spans[2].style.transform = isOpen ? 'rotate(-45deg) translate(5px, -5px)' : '';
  });

  // Close when a link is clicked
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => navLinks.classList.remove('open'));
  });
})();

// ─── Scroll reveal ───────────────────────────
(function () {
  const els = document.querySelectorAll('.reveal');
  if (!els.length) return;

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 60);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  els.forEach(el => io.observe(el));
})();

// ─── Disclosure filter ───────────────────────
(function () {
  const btns  = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.disclosure-card');
  if (!btns.length) return;

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      cards.forEach(card => {
        const show = filter === 'all' || card.dataset.type === filter;
        card.style.display = show ? '' : 'none';
      });
    });
  });
})();

// ─── Typed terminal effect ───────────────────
(function () {
  const el = document.getElementById('typed-cmd');
  if (!el) return;

  const phrases = [
    'recon --target example.com',
    'sqlmap -u "https://target.com/api?id=1"',
    'nuclei -t cves/ -u https://target.com',
    'burpsuite --project portfolio.burp',
    'ffuf -w wordlist.txt -u https://target.com/FUZZ',
  ];

  let phraseIdx = 0, charIdx = 0, deleting = false;

  function type() {
    const phrase = phrases[phraseIdx];
    if (deleting) {
      el.textContent = phrase.slice(0, charIdx--);
      if (charIdx < 0) {
        deleting = false;
        phraseIdx = (phraseIdx + 1) % phrases.length;
        charIdx = 0;
        setTimeout(type, 600);
        return;
      }
      setTimeout(type, 40);
    } else {
      el.textContent = phrase.slice(0, charIdx++);
      if (charIdx > phrase.length) {
        deleting = true;
        setTimeout(type, 2200);
        return;
      }
      setTimeout(type, 70);
    }
  }

  type();
})();

// ─── Count-up animation ──────────────────────
(function () {
  const nums = document.querySelectorAll('[data-count]');
  if (!nums.length) return;

  const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el  = entry.target;
      const end = parseInt(el.dataset.count, 10);
      const dur = 1200;
      const step = end / (dur / 16);
      let cur = 0;

      const tick = () => {
        cur = Math.min(cur + step, end);
        el.textContent = Math.round(cur) + (el.dataset.suffix || '');
        if (cur < end) requestAnimationFrame(tick);
      };
      tick();
      io.unobserve(el);
    });
  }, { threshold: 0.5 });

  nums.forEach(el => io.observe(el));
})();

// ─── Contact form handler ────────────────────
(function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const btn = form.querySelector('.form-submit');
    const original = btn.textContent;
    btn.textContent = '[ sending... ]';
    btn.disabled = true;

    // Simulate send (replace with real backend if needed)
    setTimeout(() => {
      btn.textContent = '[ message sent ✓ ]';
      btn.style.background = 'var(--accent-dim)';
      form.reset();
      setTimeout(() => {
        btn.textContent = original;
        btn.style.background = '';
        btn.disabled = false;
      }, 3000);
    }, 1200);
  });
})();
