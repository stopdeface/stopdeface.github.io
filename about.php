<?php
$pageTitle       = 'Hi';
$pageDescription = 'Bug Hunter & Penetration Tester — profil, keahlian, pengalaman, dan hall of fame.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="page-hero">
  <div class="terminal-line">
    <span class="prompt">$</span>
    <span class="cmd">whoami --verbose</span>
  </div>
  <div class="terminal-line" style="margin-bottom:20px;">
    <span class="prompt">$</span>
    <span id="typed-cmd" class="cmd" style="color:var(--blue)"></span>
    <span class="cursor"></span>
  </div>
  <h1>Bug Hunter &amp; <span class="highlight">Penetration Tester</span></h1>
</section>

<!-- MAIN CONTENT -->
<div class="container">
  <div class="about-grid">

    <!-- LEFT: Profile Card -->
    <aside>
      <div class="profile-card reveal">
        <div class="avatar-wrap">
          <img
            src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='110' height='110' viewBox='0 0 110 110'%3E%3Ccircle cx='55' cy='55' r='55' fill='%230d1117'/%3E%3Ccircle cx='55' cy='42' r='20' fill='%231e2d45'/%3E%3Ccircle cx='55' cy='90' r='32' fill='%231e2d45'/%3E%3Ctext x='50%25' y='46%25' dominant-baseline='middle' text-anchor='middle' font-size='24' fill='%2300ff88'%3E%3C/text%3E%3C/svg%3E"
            alt=""
            class="avatar-img"
          >
          <div class="avatar-ring"></div>
        </div>
        <div class="profile-name">Farelino</div>
        <p class="profile-bio">Security researcher yang passionate dalam menemukan dan melaporkan kerentanan secara bertanggung jawab kepada vendor.</p>

        <div class="profile-stats">
          <div class="stat-box">
            <span class="stat-num" data-count="100+" data-suffix="">87</span>
            <span class="stat-label">Bugs Found</span>
          </div>
          <div class="stat-box">
            <span class="stat-num" data-count="4" data-suffix="">41</span>
            <span class="stat-label">Hall of Fame</span>
          </div>
          <div class="stat-box">
            <span class="stat-num" data-count="5" data-suffix="yr">5yr</span>
            <span class="stat-label">Experience</span>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="social-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>
            GitHub
          </a>
          <a href="#" class="social-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            Twitter/X
          </a>
          <a href="#" class="social-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
            Discord
          </a>
          <a href="mailto:farelino173@gmail.com" class="social-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
          </a>
        </div>
      </div>
    </aside>

    <!-- RIGHT: Content -->
    <div class="about-content">

      <!-- Bio -->
      <div class="card reveal">
        <div class="section-title">// bio</div>
        <div class="bio-text">
          <p>Halo, saya <strong style="color:var(--text-primary)">Farelino</strong>, seorang bug hunter dan penetration tester yang telah aktif di bidang keamanan siber sejak 2021. Saya berfokus pada <em style="color:var(--accent)">web application security</em></p>
          <p>Saya telah menemukan dan melaporkan ratusan kerentanan kepada perusahaan-perusahaan besar di seluruh dunia — mulai dari XSS dan SQL Injection hingga SSRF, RCE, dan business logic flaws yang kritis.</p>
        </div>
      </div>

      <!-- Skills -->
      <div class="card reveal" style="margin-top:20px;">
        <div class="section-title">// skills &amp; tools</div>
        <div class="skills-grid">
          <?php
          $skills = [
            'Burp Suite Pro', 'OWASP Top 10'
          ];
          foreach ($skills as $skill): ?>
            <div class="skill-chip"><span class="dot"></span><?= htmlspecialchars($skill) ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Certifications -->
      <div class="card reveal" style="margin-top:20px;">
        <div class="section-title">// certifications</div>
        <div class="cert-list">
          <?php
          $certs = [
            ['', 'CEH', 'Certified Ethical Hacker — Cisco Networking Academy'],
          ];
          foreach ($certs as [$icon, $name, $issuer]): ?>
            <div class="cert-item">
              <span class="cert-icon"><?= $icon ?></span>
              <div>
                <div class="cert-name"><?= htmlspecialchars($name) ?></div>
                <div class="cert-issuer"><?= htmlspecialchars($issuer) ?></div>
              </div>
              <span class="badge badge-green" style="margin-left:auto">Verified</span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Hall of Fame -->
      <div class="card reveal" style="margin-top:20px;">
        <div class="section-title">// hall of fame</div>
        <div class="hof-grid">
          <?php
          $hofs = [
            'Transjakarta', 'Bulog', 'Dentrix', 'AmericanExpress',
          ];
          foreach ($hofs as $co): ?>
            <div class="hof-item">
              <img
                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Crect width='20' height='20' rx='4' fill='%231e2d45'/%3E%3Ctext x='50%25' y='55%25' dominant-baseline='middle' text-anchor='middle' font-size='10' fill='%2300ff88'%3E★%3C/text%3E%3C/svg%3E"
                alt="<?= htmlspecialchars($co) ?>"
              >
              <?= htmlspecialchars($co) ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div><!-- /.about-content -->
  </div><!-- /.about-grid -->
</div><!-- /.container -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
