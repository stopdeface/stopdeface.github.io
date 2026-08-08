<?php
// Detect current page for active nav highlight
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
function navClass($page, $current) {
    return $page === $current ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? 'Bug Hunter & Penetration Tester portfolio — responsible disclosure dan jasa pentest profesional.') ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? '0xHunter | Bug Hunter Portfolio') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription ?? 'Bug Hunter & Penetration Tester portfolio') ?>">
  <title><?= htmlspecialchars($pageTitle ?? '0xHunter | Bug Hunter Portfolio') ?></title>
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%23060810'/%3E%3Ctext x='50%25' y='54%25' dominant-baseline='middle' text-anchor='middle' font-size='18' fill='%2300ff88'%3E⚡%3C/text%3E%3C/svg%3E">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav id="navbar">
  <div class="nav-inner">
    <div class="nav-logo">
      <span>&gt; 0xHunter</span><span class="cursor"></span>
    </div>
    <button id="hamburger" class="nav-hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="/about.php" class="<?= navClass('about', $currentPage) ?>">about</a></li>
      <li><a href="/disclosure.php" class="<?= navClass('disclosure', $currentPage) ?>">disclosure</a></li>
      <li><a href="/pentest.php" class="<?= navClass('pentest', $currentPage) ?>">pentest</a></li>
    </ul>
  </div>
</nav>

<div class="page-wrapper">
