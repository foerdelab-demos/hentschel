<?php
if (defined('FOERDELAB_DEMO_OVERLAY_RENDERED')) {
    return;
}
define('FOERDELAB_DEMO_OVERLAY_RENDERED', true);
?>
<style>
a.foerdelab-demo-badge {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 9999;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    max-width: min(92vw, 420px);
    padding: 14px 20px;
    border-radius: 4px;
    border: 1px solid #C8BFB3;
    background: rgba(248,245,240,.92);
    color: #29261F;
    box-shadow: 0 8px 28px rgba(41,38,31,.12);
    backdrop-filter: blur(10px);
    font-family: 'DM Sans', system-ui, -apple-system, sans-serif;
    text-decoration: none;
    cursor: pointer;
    transition: box-shadow .2s ease, border-color .2s ease;
}
a.foerdelab-demo-badge:hover {
    box-shadow: 0 10px 36px rgba(41,38,31,.18);
    border-color: #7A6547;
}
.foerdelab-demo-badge__mark {
    flex: 0 0 auto;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
}
.foerdelab-demo-badge__mark svg {
    width: 34px;
    height: 34px;
}
.foerdelab-demo-badge__meta {
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.foerdelab-demo-badge__meta strong {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: #1B3A5C;
}
.foerdelab-demo-badge__meta span {
    font-size: 12px;
    font-weight: 400;
    color: #6B6459;
}
@media (max-width: 640px) {
    a.foerdelab-demo-badge {
        right: 12px;
        left: 12px;
        bottom: 12px;
        max-width: none;
    }
}
</style>
<a href="https://foerdelab.de" target="_blank" rel="noopener noreferrer" class="foerdelab-demo-badge" aria-label="FördeLab – Demo-Hinweis">
    <span class="foerdelab-demo-badge__mark">
        <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Seagull -->
            <path d="M60 8 C56 14, 48 16, 42 12 M60 8 C64 14, 72 16, 78 12" stroke="#1B3A5C" stroke-width="3" stroke-linecap="round" fill="none"/>
            <!-- Flask outline -->
            <path d="M50 22 L50 50 L28 90 C25 96, 29 104, 36 104 L84 104 C91 104, 95 96, 92 90 L70 50 L70 22 Z" stroke="#1B3A5C" stroke-width="3.5" fill="none" stroke-linejoin="round"/>
            <!-- Flask neck ring -->
            <line x1="46" y1="22" x2="74" y2="22" stroke="#1B3A5C" stroke-width="3.5" stroke-linecap="round"/>
            <!-- Wave -->
            <path d="M32 78 C40 68, 50 82, 60 72 C70 62, 78 76, 90 70 L92 90 C95 96, 91 104, 84 104 L36 104 C29 104, 25 96, 28 90 Z" fill="url(#wave-grad)"/>
            <defs>
                <linearGradient id="wave-grad" x1="30" y1="104" x2="90" y2="68" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#1B3A5C"/>
                    <stop offset="50%" stop-color="#2E86C1"/>
                    <stop offset="100%" stop-color="#5DADE2"/>
                </linearGradient>
            </defs>
        </svg>
    </span>
    <span class="foerdelab-demo-badge__meta">
        <strong>FördeLab Demo</strong>
        <span>Demo für Hentschel · Nicht zur Weitergabe</span>
    </span>
</a>