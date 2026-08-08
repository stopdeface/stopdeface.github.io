<?php
$pageTitle       = '0xHunter | Responsible Disclosure';
$pageDescription = 'Daftar kerentanan yang telah ditemukan dan dilaporkan secara bertanggung jawab kepada vendor.';
require_once __DIR__ . '/includes/header.php';

// ─── Bug disclosure data ───────────────────────────────────────────
$disclosures = [
  [
    'title'    => 'Exposed Git Repository on discovery.idpdev.pg.com',
    'severity' => 'High',
    'type'     => 'Cors',
    'desc'     => 'Kerentanan ini merupakan Information Disclosure akibat repositori Git (.git) yang dapat diakses publik pada discovery.idpdev.pg.com, sehingga berpotensi mengekspos source code, riwayat commit, file konfigurasi, dan informasi sensitif yang dapat dimanfaatkan untuk serangan lebih lanjut.',
    'status'   => 'Patched',
    'img_label'=> 'RCE via File Upload',
    'img_icon' => 'https://i.ibb.co.com/0yVX29PG/image.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo americanexpress.com',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/CprnWHQV/image-3.png',
  ],
    [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo jio.com',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/8DrB3fTm/image-4.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo heineken.com',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/cKTfj3LV/image-5.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo telkom.co.id',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/cKFRjhJ1/image-6.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo ekraf.go.id',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/6cF76yBp/image-8.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo swift.com',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/RGQ15SJQ/image-9.png',
  ],
    [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo gramedia.com',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/6RjMGLm7/Screenshot-2025-12-18-120230.png',
  ],
  [
    'id'       => 'CVE-2025-55182',
    'title'    => 'CVE-2025-55182 in subdo bnn.go.id',
    'severity' => 'Critical',
    'type'     => 'RCE',
    'desc'     => 'Kerentanan CVE-2025-55182 (React2Shell) adalah pre-authentication Remote Code Execution (RCE) pada React Server Components yang memungkinkan penyerang menjalankan kode arbitrer tanpa autentikasi apabila aplikasi menggunakan versi React yang rentan dan konfigurasi yang terdampak.',
    'status'   => 'Patched',
    'img_label'=> 'RCE',
    'img_icon' => 'https://i.ibb.co.com/wr6fDzdG/image-11.png',
  ],
  [
    'id'       => 'CORS',
    'title'    => 'Exposed Git Repository in subdo nokia.com',
    'severity' => 'high',
    'type'     => 'CORS',
    'desc'     => 'Menemukan .git yang dapat diakses publik pada vendorportal.net.nokia.com, yang berpotensi membocorkan source code, commit history, serta informasi sensitif.',
    'status'   => 'Patched-Duplicate',
    'img_label'=> 'CORS',
    'img_icon' => 'https://i.ibb.co.com/5hsGSPFc/image-12.png',
  ],
  [
    'id'       => 'XSS',
    'title'    => 'Reflected Cross-Site Scripting (XSS) – Shoptet CMS',
    'severity' => 'medium',
    'type'     => 'XSS',
    'desc'     => 'Menemukan kerentanan Reflected XSS pada CMS Shoptet yang memungkinkan JavaScript dieksekusi melalui manipulasi parameter URL.
    Url : https://example.com/action/Social/login/?provider="><IMG """>alert(document.cookie)">',
    'status'   => 'Patched',
    'img_label'=> 'XSS',
    'img_icon' => 'https://i.ibb.co.com/tMp0QZmd/image-13.png',
  ],
];

// Severity colors mapping
$severityBadge = [
  'critical' => 'badge-red',
  'high'     => 'badge-yellow',
  'medium'   => 'badge-blue',
  'low'      => 'badge-gray',
];
?>

<!-- HERO -->
<section class="page-hero">
  <div class="terminal-line" style="margin-bottom:8px;">
    <span class="prompt">$</span>
    <span class="cmd">cat /reports/responsible-disclosure.log</span>
  </div>
  <span class="hero-tag">Responsible Disclosure</span>
  <h1>Security <span class="highlight">Findings</span></h1>
  <p class="subtitle">Semua kerentanan dilaporkan langsung ke vendor sebelum dipublikasikan. Koordinasi dilakukan sesuai standar responsible disclosure — biasanya 90 hari sebelum publikasi.</p>
</section>

<div class="container">

  <!-- Stats Row -->
  <div class="stats-row reveal">
    <div class="stat-card">
      <span class="big-num" data-count="100+">100+</span>
      <span class="label">Total Bugs</span>
    </div>
  
  </div>

  <!-- Cards Grid -->
  <div class="disclosure-grid">
    <?php foreach ($disclosures as $i => $d): ?>
    <div class="disclosure-card reveal" data-type="<?= htmlspecialchars($d['type']) ?>" style="animation-delay:<?= $i * 80 ?>ms">

      <!-- Image -->
      <div class="disclosure-img-wrap">
        <img
    src="<?= htmlspecialchars($d['img_icon']) ?>"
    alt="<?= htmlspecialchars($d['img_label']) ?>"
    loading="lazy"
>
        <div class="disclosure-severity">
          <span class="badge <?= $severityBadge[$d['severity']] ?>">
            <?= strtoupper($d['severity']) ?>
          </span>
        </div>
        <div class="disclosure-overlay"><?= htmlspecialchars($d['id']) ?></div>
      </div>

      <!-- Body -->
      <div class="disclosure-body">
        <div class="disclosure-meta">
          <span class="badge badge-gray"><?= strtoupper($d['type']) ?></span>
          <?php if ($d['cve']): ?>
          <span class="badge badge-blue">CVE</span>
          <?php endif; ?>
          <span class="badge" style="margin-left:auto;background:rgba(0,255,136,0.08);color:var(--accent);border:1px solid rgba(0,255,136,0.15)">✓ <?= htmlspecialchars($d['status']) ?></span>
        </div>

        <div class="disclosure-title"><?= htmlspecialchars($d['title']) ?></div>
        <p class="disclosure-desc"><?= htmlspecialchars($d['desc']) ?></p>

        <div class="disclosure-footer">
          <div class="disclosure-target">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Crect width='16' height='16' rx='3' fill='%231e2d45'/%3E%3Ctext x='50%25' y='58%25' dominant-baseline='middle' text-anchor='middle' font-size='9' fill='%2300ff88'%3E⚡%3C/text%3E%3C/svg%3E"
              alt=""
            >
            <?= htmlspecialchars($d['target']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($d['date']) ?>
          </div>
          <div class="disclosure-reward">💰 <?= htmlspecialchars($d['reward']) ?></div>
        </div>
      </div>

    </div><!-- /.disclosure-card -->
    <?php endforeach; ?>
  </div><!-- /.disclosure-grid -->

  <!-- Note -->
  <div class="card reveal" style="margin-top:40px; border-color:rgba(0,180,255,0.2); background:var(--blue-glow);">
    <div style="display:flex;gap:14px;align-items:flex-start;">
      <span style="font-size:1.4rem;flex-shrink:0;">ℹ️</span>
      <div>
        <div style="font-family:var(--font-mono);font-size:0.85rem;font-weight:600;color:var(--blue);margin-bottom:6px;">Catatan Responsible Disclosure</div>
        <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.7;">
          Semua kerentanan di atas telah dikoordinasikan dengan vendor sebelum publikasi. Detail teknis lengkap (PoC, payload, screenshot) hanya tersedia setelah patch rilis dan masa embargo berakhir.
          Jika Anda adalah vendor yang ingin mendiskusikan laporan privat, silakan hubungi melalui email terenkripsi PGP.
        </p>
      </div>
    </div>
  </div>

</div><!-- /.container -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
