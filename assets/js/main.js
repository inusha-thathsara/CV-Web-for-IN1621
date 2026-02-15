document.addEventListener('DOMContentLoaded', () => {

    // ──────────────────────────────────────
    //  1. SCROLL-REVEAL: auto-apply classes
    // ──────────────────────────────────────
    const sidebarBlocks = document.querySelectorAll('.sidebar > .mb-5');
    const mainSections  = document.querySelectorAll('.main-content > section');
    const projectCards  = document.querySelectorAll('.project-card');
    const header        = document.querySelector('.main-content > header');
    const sectionTitles = document.querySelectorAll('.section-title');

    // Apply animate class with staggered delays
    const applyAnimClass = (els, baseDelay = 0, increment = 0.12) => {
        els.forEach((el, i) => {
            el.classList.add('animate-on-scroll');
            el.style.transitionDelay = `${baseDelay + i * increment}s`;
        });
    };

    if (header) {
        header.classList.add('animate-on-scroll');
        header.style.transitionDelay = '0.1s';
    }

    applyAnimClass(sidebarBlocks, 0.15, 0.15);
    applyAnimClass(mainSections, 0.1, 0.15);
    applyAnimClass(projectCards, 0.05, 0.1);

    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { root: null, rootMargin: '0px 0px -40px 0px', threshold: 0.08 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Also observe section titles for the underline animation
    sectionTitles.forEach(el => observer.observe(el));

    // ──────────────────────────────────────
    //  2. TYPING EFFECT on subtitle
    // ──────────────────────────────────────
    const subtitleEl = document.getElementById('typed-subtitle');
    if (subtitleEl) {
        const fullText = subtitleEl.getAttribute('data-text') || subtitleEl.textContent;
        subtitleEl.textContent = '';

        // Add cursor
        const cursor = document.createElement('span');
        cursor.classList.add('typing-cursor');
        subtitleEl.parentNode.insertBefore(cursor, subtitleEl.nextSibling);

        let charIndex = 0;
        const typeSpeed = 55; // ms per character

        const typeChar = () => {
            if (charIndex < fullText.length) {
                subtitleEl.textContent += fullText.charAt(charIndex);
                charIndex++;
                setTimeout(typeChar, typeSpeed);
            } else {
                // Remove cursor after 2 seconds
                setTimeout(() => {
                    cursor.style.transition = 'opacity 0.5s';
                    cursor.style.opacity = '0';
                    setTimeout(() => cursor.remove(), 500);
                }, 2000);
            }
        };

        // Start typing after a short delay
        setTimeout(typeChar, 600);
    }

    // ──────────────────────────────────────
    //  3. TILT EFFECT on project cards
    // ──────────────────────────────────────
    projectCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;   // mouse X within card
            const y = e.clientY - rect.top;     // mouse Y within card
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            // Max tilt = 6 degrees
            const rotateX = ((y - centerY) / centerY) * -6;
            const rotateY = ((x - centerX) / centerX) *  6;

            card.style.transform = `translateY(-6px) perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });

});
