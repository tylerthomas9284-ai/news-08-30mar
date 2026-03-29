<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5017177,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5017177&101" alt="frontpage hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The Federal Times — America's trusted source for authoritative news, politics, economy, technology, health and world affairs.">
<title>The Federal Times — America's Trusted Source</title>
<link rel="stylesheet" href="css/style.css">
<style>
/* ── HOME-SPECIFIC ── */
.hero { display: grid; grid-template-columns: 1fr 380px; gap: 0; border-bottom: 4px solid #111; min-height: 480px; }
.hero-main { border-right: 4px solid #111; position: relative; overflow: hidden; cursor: pointer; }
.hero-img {
  width: 100%; height: 100%; min-height: 480px;
  background: linear-gradient(135deg, #0033CC 0%, #001a66 40%, #111 100%);
  display: flex; align-items: flex-end; padding: 32px; position: relative;
}
.hero-img::before {
  content: ''; position: absolute; inset: 0;
  background: url('https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=900&q=80') center/cover;
  opacity: .35;
}
.hero-badge { display: inline-block; background: var(--red); color: #fff; font-family: 'Syncopate', sans-serif; font-size: .6rem; letter-spacing: .15em; padding: 4px 12px; margin-bottom: 12px; border: 2px solid #fff; }
.hero-content { position: relative; z-index: 2; }
.hero-headline { font-family: 'Syncopate', sans-serif; font-size: clamp(1.4rem, 3vw, 2.2rem); font-weight: 700; color: #fff; line-height: 1.15; margin-bottom: 12px; text-shadow: 2px 2px 0 rgba(0,0,0,.4); }
.hero-sub { font-size: .85rem; color: rgba(255,255,255,.85); line-height: 1.6; margin-bottom: 18px; }
.hero-meta { font-size: .72rem; color: rgba(255,255,255,.6); letter-spacing: .05em; }
.hero-sidebar { display: flex; flex-direction: column; }
.sidebar-story { flex: 1; border-bottom: 3px solid #111; padding: 20px; cursor: pointer; transition: background .15s; display: flex; flex-direction: column; justify-content: flex-end; min-height: 150px; position: relative; overflow: hidden; }
.sidebar-story:last-child { border-bottom: none; }
.sidebar-story:hover { background: var(--card-bg); }
.sidebar-story-bg { position: absolute; inset: 0; background-size: cover; background-position: center; opacity: .2; transition: opacity .2s; }
.sidebar-story:hover .sidebar-story-bg { opacity: .35; }
.sidebar-story-cat { font-family: 'Syncopate', sans-serif; font-size: .55rem; letter-spacing: .15em; text-transform: uppercase; color: var(--accent); font-weight: 700; margin-bottom: 6px; position: relative; z-index: 1; }
.sidebar-story h3 { font-family: 'Montserrat', sans-serif; font-size: .9rem; font-weight: 800; line-height: 1.3; position: relative; z-index: 1; }
.editors-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 0; border: 3px solid #111; }
.editors-main { border-right: 3px solid #111; padding: 28px; cursor: pointer; position: relative; min-height: 320px; display: flex; flex-direction: column; justify-content: flex-end; overflow: hidden; }
.editors-main-bg { position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 20%, rgba(0,0,0,.85) 100%), url('https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=800&q=80') center/cover; }
.editors-main-content { position: relative; z-index: 2; color: #fff; }
.editors-main-content .card-cat { color: var(--cta); }
.editors-main-content h2 { font-family: 'Syncopate', sans-serif; font-size: 1.2rem; font-weight: 700; line-height: 1.25; margin-bottom: 10px; }
.editors-side { display: flex; flex-direction: column; border-right: 3px solid #111; }
.editors-side:last-child { border-right: none; }
.editors-side-item { flex: 1; padding: 18px; border-bottom: 3px solid #111; cursor: pointer; transition: background .15s; text-decoration: none; color: var(--text); display: block; }
.editors-side-item:last-child { border-bottom: none; }
.editors-side-item:hover { background: var(--card-bg); }
.values-strip { display: grid; grid-template-columns: repeat(5, 1fr); gap: 0; border: 3px solid #111; margin: 40px 0; }
.value-item { padding: 24px 20px; border-right: 3px solid #111; text-align: center; }
.value-item:last-child { border-right: none; }
.value-num { font-family: 'Syncopate', sans-serif; font-size: 2rem; font-weight: 700; color: var(--accent); display: block; margin-bottom: 4px; }
.value-label { font-size: .8rem; font-weight: 700; display: block; margin-bottom: 4px; }
.value-desc { font-size: .72rem; color: var(--muted); }
@media (max-width: 1024px) {
  .hero { grid-template-columns: 1fr; }
  .hero-sidebar { display: grid; grid-template-columns: 1fr 1fr; }
  .sidebar-story { border-bottom: 3px solid #111; }
  .editors-grid { grid-template-columns: 1fr; }
  .editors-side { border-right: none; border-top: 3px solid #111; }
  .values-strip { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 768px) {
  .hero-sidebar { display: block; }
  .values-strip { grid-template-columns: 1fr 1fr; }
}
</style>
</head>
<body>

<!-- COOKIE BANNER -->
<div id="cookie-banner" style="display:none">
  <p>We use cookies to enhance your experience. By using The Federal Times, you agree to our <a href="pages/cookie-policy.html">Cookie Policy</a> and <a href="pages/privacy.html">Privacy Policy</a>.</p>
  <div class="cookie-btns">
    <button class="btn-accept" onclick="closeCookie('accepted')">Accept All</button>
    <button class="btn-reject" onclick="closeCookie('rejected')">Reject</button>
    <button class="btn-customize" onclick="closeCookie('customized')">Customize</button>
  </div>
</div>

<!-- TICKER -->
<div id="ticker-bar">
  <div class="ticker-label">BREAKING</div>
  <div style="overflow:hidden;flex:1">
    <div class="ticker-track">
      <span>Federal Reserve Signals Rate Cut Decision Amid Economic Uncertainty</span>
      <span>Senate Passes Landmark AI Regulation Act — What It Means For You</span>
      <span>US Cybersecurity Agency Issues Critical Alert For Infrastructure Systems</span>
      <span>Smart Cities Initiative Expands to 40 U.S. Metropolitan Areas</span>
      <span>Healthcare Technology Breakthrough: AI Detects Early Cancer With 97% Accuracy</span>
      <span>Federal Reserve Signals Rate Cut Decision Amid Economic Uncertainty</span>
      <span>Senate Passes Landmark AI Regulation Act — What It Means For You</span>
      <span>US Cybersecurity Agency Issues Critical Alert For Infrastructure Systems</span>
      <span>Smart Cities Initiative Expands to 40 U.S. Metropolitan Areas</span>
      <span>Healthcare Technology Breakthrough: AI Detects Early Cancer With 97% Accuracy</span>
    </div>
  </div>
</div>

<!-- HEADER -->
<header>
  <div class="header-top">
    <div class="logo-block">
      <a class="logo-name" href="index.html">THE FEDERAL TIMES</a>
      <div class="logo-tagline">America's Trusted Source for News &amp; Analysis</div>
    </div>
    <div class="header-meta">
      <div class="header-date" id="header-date"></div>
      <button class="header-cta-btn" onclick="openModal('Breaking News Alerts — Free')">⚡ Get Breaking Alerts</button>
    </div>
  </div>
  <nav>
    <a href="index.html" class="active">Home</a>
    <a href="pages/article.html">Top Story</a>
    <a href="pages/politics.html">Politics</a>
    <a href="pages/economy.html">Economy</a>
    <a href="pages/technology.html">Technology</a>
    <a href="pages/health.html">Health</a>
    <a href="pages/world.html">World</a>
    <a href="pages/about.html">About</a>
    <a href="pages/subscribe.html">Subscribe</a>
    <a href="pages/contact.html">Contact</a>
  </nav>
</header>

<!-- HERO -->
<div class="hero">
  <div class="hero-main" onclick="window.location='pages/article.html'">
    <div class="hero-img">
      <div class="hero-content">
        <div class="hero-badge">COVER STORY</div>
        <h1 class="hero-headline">Federal Reserve Signals Major Economic Shift — Markets Brace for Historic Rate Decision</h1>
        <p class="hero-sub">In a closely-watched statement, Fed Chair signals the most significant monetary policy pivot since 2020, with sweeping consequences for American households, businesses, and global markets.</p>
        <div class="hero-meta">By Marcus Reynolds · Senior Economic Correspondent · March 28, 2026</div>
      </div>
    </div>
  </div>
  <div class="hero-sidebar">
    <div class="sidebar-story" onclick="window.location='pages/article.html'">
      <div class="sidebar-story-bg" style="background-image:url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&q=70')"></div>
      <div class="sidebar-story-cat">Technology</div>
      <h3>AI Surveillance Transforming Urban Safety Across U.S. Cities</h3>
    </div>
    <div class="sidebar-story" onclick="window.location='pages/article.html'">
      <div class="sidebar-story-bg" style="background-image:url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=400&q=70')"></div>
      <div class="sidebar-story-cat">Cybersecurity</div>
      <h3>New Federal Cybersecurity Laws Affect Millions of Americans</h3>
    </div>
    <div class="sidebar-story" onclick="window.location='pages/article.html'">
      <div class="sidebar-story-bg" style="background-image:url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&q=70')"></div>
      <div class="sidebar-story-cat">Health</div>
      <h3>Healthcare Tech Innovations Saving Lives in 2026: Full Report</h3>
    </div>
  </div>
</div>

<div class="container">
  <!-- STATS -->
  <div class="values-strip">
    <div class="value-item"><span class="value-num">14M+</span><span class="value-label">Monthly Readers</span><span class="value-desc">Across all platforms</span></div>
    <div class="value-item"><span class="value-num">98%</span><span class="value-label">Accuracy Rate</span><span class="value-desc">Independently verified</span></div>
    <div class="value-item"><span class="value-num">47</span><span class="value-label">Staff Journalists</span><span class="value-desc">Across 12 bureaus</span></div>
    <div class="value-item"><span class="value-num">24/7</span><span class="value-label">Live Coverage</span><span class="value-desc">Breaking news desk</span></div>
    <div class="value-item"><span class="value-num">2019</span><span class="value-label">Founded</span><span class="value-desc">Washington D.C.</span></div>
  </div>

  <!-- CATEGORIES -->
  <div class="categories-row">
    <a class="cat-card" href="pages/politics.html"><span class="cat-icon">🏛️</span><span class="cat-name">Politics</span><span class="cat-count">142 Stories</span></a>
    <a class="cat-card" href="pages/economy.html"><span class="cat-icon">📈</span><span class="cat-name">Economy</span><span class="cat-count">98 Stories</span></a>
    <a class="cat-card" href="pages/technology.html"><span class="cat-icon">💻</span><span class="cat-name">Technology</span><span class="cat-count">215 Stories</span></a>
    <a class="cat-card" href="pages/health.html"><span class="cat-icon">🏥</span><span class="cat-name">Health</span><span class="cat-count">76 Stories</span></a>
    <a class="cat-card" href="pages/world.html"><span class="cat-icon">🌐</span><span class="cat-name">World News</span><span class="cat-count">183 Stories</span></a>
  </div>

  <!-- LATEST NEWS -->
  <div class="section">
    <div class="section-header"><div class="section-label">Latest</div><div class="section-title">Top Stories Today</div></div>
    <div class="news-grid">
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=400&q=70" alt="Capitol" loading="lazy"></div>
        <div class="card-cat">Politics</div>
        <div class="card-title">Congress Votes on Landmark Infrastructure Reform Bill Affecting All 50 States</div>
        <div class="card-excerpt">A sweeping bipartisan deal would reshape federal funding priorities for transportation, broadband, and clean energy infrastructure nationwide.</div>
        <div class="card-meta">Sarah Mitchell · 2 hours ago</div>
      </div>
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=400&q=70" alt="AI" loading="lazy"></div>
        <div class="card-cat">Technology</div>
        <div class="card-title">Senate AI Regulation Act: What Every American Business Owner Needs to Know</div>
        <div class="card-excerpt">Comprehensive federal guidelines targeting AI deployment, liability, and data transparency are set to reshape the tech landscape.</div>
        <div class="card-meta">James Okafor · 4 hours ago</div>
      </div>
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=400&q=70" alt="Health" loading="lazy"></div>
        <div class="card-cat">Health</div>
        <div class="card-title">FDA Fast-Tracks Approval for Revolutionary Gene Therapy Targeting Rare Cancers</div>
        <div class="card-excerpt">A breakthrough treatment showing 89% remission rates in trials moves closer to widespread availability for American patients.</div>
        <div class="card-meta">Dr. Linda Chao · 6 hours ago</div>
      </div>
      <div class="sidebar-widget">
        <div class="widget-title">🔥 Trending Now</div>
        <div class="trending-item" onclick="window.location='pages/article.html'">
          <span class="trending-num">01</span><div><h4>Fed Rate Decision: Live Updates</h4><span>48.2K reading now</span></div>
        </div>
        <div class="trending-item" onclick="window.location='pages/article.html'">
          <span class="trending-num">02</span><div><h4>AI Bill Clears Committee Vote</h4><span>31.7K reading now</span></div>
        </div>
        <div class="trending-item" onclick="window.location='pages/article.html'">
          <span class="trending-num">03</span><div><h4>Smart City Expansion Map</h4><span>22.4K reading now</span></div>
        </div>
        <div class="trending-item" onclick="window.location='pages/article.html'">
          <span class="trending-num">04</span><div><h4>Cybersecurity Alert: What To Do</h4><span>19.8K reading now</span></div>
        </div>
        <div class="trending-item" onclick="window.location='pages/article.html'">
          <span class="trending-num">05</span><div><h4>Gene Therapy Approval Timeline</h4><span>15.1K reading now</span></div>
        </div>
        <button class="btn-neon" style="width:100%;margin-top:20px;" onclick="openModal('Breaking News Alerts — Free')">Stay Informed →</button>
      </div>
    </div>
  </div>

  <!-- NEWSLETTER -->
  <div class="newsletter-banner">
    <div>
      <h2>Get Breaking News Alerts — Free</h2>
      <p>Join 1.2 million Americans who trust The Federal Times for real-time news, exclusive analysis, and insider briefings delivered daily.</p>
    </div>
    <div class="newsletter-form">
      <input type="email" placeholder="Your email address..." id="nl-email">
      <button class="btn-neon" onclick="openModal('Breaking News Alerts — Free')">Subscribe →</button>
    </div>
  </div>

  <!-- EDITORS PICKS -->
  <div class="section">
    <div class="section-header"><div class="section-label">Editor's Picks</div><div class="section-title">Must-Read Analysis</div></div>
    <div class="editors-grid">
      <div class="editors-main" onclick="window.location='pages/article.html'">
        <div class="editors-main-bg"></div>
        <div class="editors-main-content">
          <div class="card-cat">Deep Analysis</div>
          <h2>Smart Cities: America's Urban Future Is Being Decided Right Now</h2>
          <p style="font-size:.82rem;color:rgba(255,255,255,.75);margin-top:8px;line-height:1.6;">From sensor grids to autonomous transit, we examine how 40 U.S. cities are becoming testing grounds for the future of urban life — and what it means for your privacy, safety, and freedom.</p>
          <div style="font-size:.7rem;color:rgba(255,255,255,.5);margin-top:12px;">Rebecca Torres · 14 min read</div>
        </div>
      </div>
      <div class="editors-side">
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">Economy</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">The Real Cost of Inflation: How Middle-Class Americans Are Adapting</h3><div class="card-meta">David Park · 9 min read</div></a>
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">World</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">U.S. Trade Policy Overhaul: Global Reactions and What Comes Next</h3><div class="card-meta">Aisha Kamau · 11 min read</div></a>
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">Technology</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">Quantum Computing Enters the National Security Conversation</h3><div class="card-meta">Dr. Wei Zhang · 7 min read</div></a>
      </div>
      <div class="editors-side">
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">Health</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">Mental Health Crisis: Federal Response Plan Faces Budget Scrutiny</h3><div class="card-meta">Dr. Maya Ruiz · 8 min read</div></a>
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">Politics</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">Election Security Report: What Federal Watchdogs Found</h3><div class="card-meta">Tom Bradshaw · 12 min read</div></a>
        <a class="editors-side-item" href="pages/article.html"><div class="card-cat">Economy</div><h3 style="font-size:.88rem;font-weight:800;line-height:1.35;margin-bottom:6px;">Housing Market 2026: Is the Bubble Finally Deflating?</h3><div class="card-meta">Nina Foster · 10 min read</div></a>
      </div>
    </div>
  </div>

  <!-- WORLD ROW -->
  <div class="section">
    <div class="section-header"><div class="section-label">World &amp; National</div><div class="section-title">Broader Coverage</div></div>
    <div class="news-grid">
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=400&q=70" alt="City" loading="lazy"></div>
        <div class="card-cat">World</div>
        <div class="card-title">G7 Economic Summit: New Framework for Global Digital Trade Unveiled</div>
        <div class="card-excerpt">World leaders agree on a historic blueprint for cross-border data governance and digital tariff frameworks.</div>
        <div class="card-meta">Priya Nair · 3 hours ago</div>
      </div>
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&q=70" alt="Tech" loading="lazy"></div>
        <div class="card-cat">Technology</div>
        <div class="card-title">Pentagon Awards $4.2B Contract for Next-Generation AI Defense Systems</div>
        <div class="card-excerpt">The Department of Defense accelerates AI integration across all branches with the largest single tech contract in its history.</div>
        <div class="card-meta">Col. Brian Walsh (Ret.) · 5 hours ago</div>
      </div>
      <div class="news-card glow-hover" onclick="window.location='pages/article.html'">
        <div class="card-img"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=70" alt="Economy" loading="lazy"></div>
        <div class="card-cat">Economy</div>
        <div class="card-title">Jobs Report: 280,000 Positions Added — Tech and Healthcare Lead Gains</div>
        <div class="card-excerpt">March employment numbers beat forecasts as the labor market shows surprising resilience against global headwinds.</div>
        <div class="card-meta">Rachel Moore · 7 hours ago</div>
      </div>
      <div class="sidebar-widget">
        <div class="widget-title">📩 Insider Access</div>
        <p style="font-size:.78rem;color:rgba(255,255,255,.65);line-height:1.6;margin-bottom:16px;">Exclusive daily briefings, ad-free reading, archive access, and premium investigative reports.</p>
        <button class="btn-neon" style="width:100%;margin-bottom:12px;" onclick="openModal('Insider Access — Premium Plan')">Join Insider Access</button>
        <a href="pages/subscribe.html" style="display:block;text-align:center;padding:12px;border:2px solid rgba(255,255,255,.3);color:#fff;font-family:'Syncopate',sans-serif;font-size:.6rem;letter-spacing:.1em;text-transform:uppercase;text-decoration:none;transition:all .15s;" onmouseover="this.style.borderColor='#00FFCC';this.style.color='#00FFCC'" onmouseout="this.style.borderColor='rgba(255,255,255,.3)';this.style.color='#fff'">View All Plans →</a>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-main">
    <div class="footer-col">
      <div class="footer-logo">THE FEDERAL TIMES</div>
      <p class="footer-about">America's trusted source for authoritative news coverage, investigative journalism, and policy analysis since 2019. Our editorial team is committed to factual, transparent reporting in the public interest.</p>
      <div class="social-links">
        <a class="social-link" href="#" title="X">𝕏</a>
        <a class="social-link" href="#" title="Facebook">f</a>
        <a class="social-link" href="#" title="LinkedIn">in</a>
        <a class="social-link" href="#" title="YouTube">▶</a>
      </div>
    </div>
    <div class="footer-col">
      <div class="footer-col-title">Sections</div>
      <ul class="footer-links">
        <li><a href="pages/politics.html">Politics</a></li>
        <li><a href="pages/economy.html">Economy</a></li>
        <li><a href="pages/technology.html">Technology</a></li>
        <li><a href="pages/health.html">Health</a></li>
        <li><a href="pages/world.html">World News</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <div class="footer-col-title">Company</div>
      <ul class="footer-links">
        <li><a href="pages/about.html">About Us</a></li>
        <li><a href="pages/about.html">Editorial Standards</a></li>
        <li><a href="pages/contact.html">Contact</a></li>
        <li><a href="pages/subscribe.html">Subscribe</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <div class="footer-col-title">Legal</div>
      <ul class="footer-links">
        <li><a href="pages/privacy.html">Privacy Policy</a></li>
        <li><a href="pages/terms.html">Terms of Service</a></li>
        <li><a href="pages/disclaimer.html">Disclaimer</a></li>
        <li><a href="pages/cookie-policy.html">Cookie Policy</a></li>
      </ul>
      <div style="margin-top:20px;"><button class="btn-neon" style="font-size:.6rem;padding:10px 16px;" onclick="openModal('Breaking News Alerts — Free')">⚡ Get Alerts</button></div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 The Federal Times. All rights reserved. Washington, D.C.</p>
    <div class="footer-legal">
      <a href="pages/privacy.html">Privacy Policy</a>
      <a href="pages/terms.html">Terms of Service</a>
      <a href="pages/disclaimer.html">Disclaimer</a>
      <a href="pages/cookie-policy.html">Cookie Policy</a>
    </div>
  </div>
</footer>

<!-- MODAL -->
<div id="modal-overlay" onclick="closeModal(event)">
  <div class="modal-box" onclick="event.stopPropagation()">
    <div class="modal-header">
      <h3>🔐 Join The Federal Times</h3>
      <button class="modal-close" onclick="closeModal()">✕</button>
    </div>
    <div class="modal-body">
      <div class="modal-plan-badge" id="modal-plan-badge">Free Subscription</div>
      <div class="modal-form-row"><label>Full Name *</label><input type="text" class="modal-input" id="modal-name" placeholder="Enter your full name"></div>
      <div class="modal-form-row"><label>Email Address *</label><input type="email" class="modal-input" id="modal-email" placeholder="your@email.com"></div>
      <div class="modal-form-row"><label>Phone Number</label><input type="tel" class="modal-input" id="modal-phone" placeholder="+1 (555) 000-0000"></div>
      <div class="modal-form-row"><label>Selected Plan</label><input type="text" class="modal-input" id="modal-plan-input" readonly style="background:#f5f5f5;cursor:default"></div>
      <input type="hidden" id="modal-plan-hidden">
      <div class="modal-consent">
        <input type="checkbox" id="modal-consent-check">
        <label for="modal-consent-check">I agree to the <a href="pages/terms.html">Terms of Service</a> and <a href="pages/privacy.html">Privacy Policy</a>, and consent to receive communications from The Federal Times.</label>
      </div>
      <button class="modal-submit" onclick="submitModal()">✓ Confirm &amp; Subscribe →</button>
      <div class="success-msg" id="modal-success" style="display:none">🎉 Welcome! Check your inbox to confirm your subscription.</div>
    </div>
  </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
