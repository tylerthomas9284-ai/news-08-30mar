// ── DATE ──
document.addEventListener('DOMContentLoaded', function () {
  const dateEl = document.getElementById('header-date');
  if (dateEl) {
    const now = new Date();
    dateEl.textContent = now.toLocaleDateString('en-US', {
      weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
    });
  }

  // ── COOKIE BANNER ──
  if (!localStorage.getItem('tft_cookie_consent')) {
    const banner = document.getElementById('cookie-banner');
    if (banner) banner.style.display = 'flex';
  } else {
    const banner = document.getElementById('cookie-banner');
    if (banner) banner.style.display = 'none';
  }

  // ── MARK ACTIVE NAV LINK ──
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('nav a').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPage || href.endsWith(currentPage))) {
      link.classList.add('active');
    }
  });
});

// ── COOKIE ──
function closeCookie(choice) {
  localStorage.setItem('tft_cookie_consent', choice || 'accepted');
  const banner = document.getElementById('cookie-banner');
  if (banner) banner.style.display = 'none';
}

// ── MODAL ──
function openModal(planName) {
  const badge = document.getElementById('modal-plan-badge');
  const planInput = document.getElementById('modal-plan-input');
  const planHidden = document.getElementById('modal-plan-hidden');
  const successMsg = document.getElementById('modal-success');
  const nameInput = document.getElementById('modal-name');
  const emailInput = document.getElementById('modal-email');
  const phoneInput = document.getElementById('modal-phone');
  const consentCheck = document.getElementById('modal-consent-check');

  if (badge) badge.textContent = planName;
  if (planInput) planInput.value = planName;
  if (planHidden) planHidden.value = planName;
  if (successMsg) successMsg.style.display = 'none';
  if (nameInput) nameInput.value = '';
  if (phoneInput) phoneInput.value = '';
  if (consentCheck) consentCheck.checked = false;

  // Pre-fill email if newsletter input has value
  const nlEmail = document.getElementById('nl-email');
  if (emailInput) emailInput.value = (nlEmail && nlEmail.value) ? nlEmail.value : '';

  const overlay = document.getElementById('modal-overlay');
  if (overlay) {
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(e) {
  if (!e || e.target === document.getElementById('modal-overlay')) {
    const overlay = document.getElementById('modal-overlay');
    if (overlay) overlay.classList.remove('open');
    document.body.style.overflow = '';
  }
}

function submitModal() {
  const name = (document.getElementById('modal-name') || {}).value || '';
  const email = (document.getElementById('modal-email') || {}).value || '';
  const consent = (document.getElementById('modal-consent-check') || {}).checked;

  const nameInput = document.getElementById('modal-name');
  const emailInput = document.getElementById('modal-email');

  if (!name.trim()) {
    if (nameInput) { nameInput.style.borderColor = '#FF2222'; nameInput.focus(); }
    return;
  }
  if (!email.trim() || !email.includes('@')) {
    if (emailInput) { emailInput.style.borderColor = '#FF2222'; emailInput.focus(); }
    return;
  }
  if (!consent) {
    alert('Please accept the Terms of Service and Privacy Policy to continue.');
    return;
  }

  if (nameInput) nameInput.style.borderColor = '#111';
  if (emailInput) emailInput.style.borderColor = '#111';

  // Store in localStorage (demo)
  localStorage.setItem('tft_subscriber', JSON.stringify({
    name: name.trim(),
    email: email.trim(),
    plan: (document.getElementById('modal-plan-hidden') || {}).value || '',
    date: new Date().toISOString()
  }));

  const successMsg = document.getElementById('modal-success');
  if (successMsg) successMsg.style.display = 'block';
  setTimeout(() => closeModal(), 2800);
}

// ── KEYBOARD ESC ──
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

// ── MODAL OVERLAY CLICK ──
document.addEventListener('click', function (e) {
  const overlay = document.getElementById('modal-overlay');
  if (overlay && e.target === overlay) closeModal(e);
});
