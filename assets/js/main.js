/**
 * Hentschel Malerei – main.js
 * Scroll reveals, navigation behavior, gallery lightbox
 */

(function () {
    'use strict';

    /* ============================================================
       NAVIGATION – scroll state & mobile toggle
    ============================================================ */
    const siteHeader  = document.getElementById('site-header');
    const navToggle   = document.getElementById('nav-toggle');
    const siteNav     = document.getElementById('site-nav');
    const navLinks    = siteNav ? siteNav.querySelectorAll('.site-nav__link') : [];

    // Scroll state
    function updateHeaderState() {
        if (!siteHeader) return;
        if (window.scrollY > 60) {
            siteHeader.classList.add('is-scrolled');
        } else {
            siteHeader.classList.remove('is-scrolled');
        }
    }

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();

    // Mobile menu toggle
    if (navToggle && siteNav) {
        navToggle.addEventListener('click', function () {
            const isOpen = siteNav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
            navToggle.setAttribute('aria-label', isOpen ? 'Menü schließen' : 'Menü öffnen');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close on nav link click
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                siteNav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.setAttribute('aria-label', 'Menü öffnen');
                document.body.style.overflow = '';
            });
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && siteNav.classList.contains('is-open')) {
                siteNav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.setAttribute('aria-label', 'Menü öffnen');
                document.body.style.overflow = '';
                navToggle.focus();
            }
        });
    }

    /* ============================================================
       SCROLL REVEAL – IntersectionObserver
    ============================================================ */
    if ('IntersectionObserver' in window) {
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    } else {
        // Fallback: show all elements immediately
        document.querySelectorAll('.reveal').forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

    /* ============================================================
       GALLERY – lightbox
    ============================================================ */
    const galleryItems = document.querySelectorAll('.gallery__item');

    if (galleryItems.length > 0) {
        // Create lightbox elements
        const lightbox       = document.createElement('div');
        lightbox.className   = 'lightbox';
        lightbox.setAttribute('role', 'dialog');
        lightbox.setAttribute('aria-modal', 'true');
        lightbox.setAttribute('aria-label', 'Bildansicht');
        lightbox.hidden      = true;

        const lightboxInner  = document.createElement('div');
        lightboxInner.className = 'lightbox__inner';

        const lightboxImage  = document.createElement('div');
        lightboxImage.className = 'lightbox__image';

        const lightboxCaption = document.createElement('p');
        lightboxCaption.className = 'lightbox__caption';

        const lightboxClose  = document.createElement('button');
        lightboxClose.className   = 'lightbox__close';
        lightboxClose.type        = 'button';
        lightboxClose.setAttribute('aria-label', 'Schließen');
        lightboxClose.innerHTML   = '&times;';

        lightboxInner.appendChild(lightboxImage);
        lightboxInner.appendChild(lightboxCaption);
        lightbox.appendChild(lightboxClose);
        lightbox.appendChild(lightboxInner);
        document.body.appendChild(lightbox);

        // Add styles for lightbox
        const lightboxStyle = document.createElement('style');
        lightboxStyle.textContent = `
            .lightbox {
                position: fixed;
                inset: 0;
                z-index: 200;
                background-color: rgba(41, 38, 31, 0.92);
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            .lightbox.is-visible {
                opacity: 1;
            }
            .lightbox__inner {
                max-width: 900px;
                width: 100%;
                transform: translateY(16px);
                transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            .lightbox.is-visible .lightbox__inner {
                transform: translateY(0);
            }
            .lightbox__image {
                width: 100%;
                aspect-ratio: 4/3;
                background-color: #DDD6C8;
            }
            .lightbox__caption {
                margin-top: 1rem;
                font-family: 'DM Sans', sans-serif;
                font-size: 0.75rem;
                font-weight: 500;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                color: rgba(248, 245, 240, 0.6);
                text-align: center;
            }
            .lightbox__close {
                position: absolute;
                top: 1.5rem;
                right: 2rem;
                font-size: 2rem;
                color: rgba(248, 245, 240, 0.7);
                background: none;
                border: none;
                cursor: pointer;
                line-height: 1;
                padding: 0.25rem;
                transition: color 0.2s ease;
                font-weight: 300;
            }
            .lightbox__close:hover {
                color: rgba(248, 245, 240, 1);
            }
        `;
        document.head.appendChild(lightboxStyle);

        function openLightbox(caption) {
            lightbox.hidden = false;
            lightboxCaption.textContent = caption;
            document.body.style.overflow = 'hidden';
            // Trigger transition after display
            requestAnimationFrame(function () {
                requestAnimationFrame(function () {
                    lightbox.classList.add('is-visible');
                });
            });
        }

        function closeLightbox() {
            lightbox.classList.remove('is-visible');
            document.body.style.overflow = '';
            lightbox.addEventListener('transitionend', function handler() {
                lightbox.hidden = true;
                lightbox.removeEventListener('transitionend', handler);
            });
        }

        galleryItems.forEach(function (item) {
            item.setAttribute('tabindex', '0');
            item.setAttribute('role', 'button');

            const captionEl = item.querySelector('.gallery__caption');
            const caption   = captionEl ? captionEl.textContent.trim() : '';

            item.addEventListener('click', function () {
                openLightbox(caption);
            });

            item.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    openLightbox(caption);
                }
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);

        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !lightbox.hidden) {
                closeLightbox();
            }
        });
    }

    /* ============================================================
       CONTACT FORM – client-side UX (non-blocking enhancement)
    ============================================================ */
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            const inputs = contactForm.querySelectorAll('[required]');
            let isValid  = true;

            inputs.forEach(function (input) {
                input.style.borderColor = '';

                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#A0522D';
                    input.setAttribute('aria-invalid', 'true');
                } else {
                    input.removeAttribute('aria-invalid');
                }

                if (input.type === 'email' && input.value.trim()) {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(input.value.trim())) {
                        isValid = false;
                        input.style.borderColor = '#A0522D';
                        input.setAttribute('aria-invalid', 'true');
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
                const firstInvalid = contactForm.querySelector('[aria-invalid="true"]');
                if (firstInvalid) firstInvalid.focus();
            }
        });

        // Clear validation state on input
        contactForm.querySelectorAll('input, textarea').forEach(function (el) {
            el.addEventListener('input', function () {
                el.style.borderColor = '';
                el.removeAttribute('aria-invalid');
            });
        });
    }

})();
