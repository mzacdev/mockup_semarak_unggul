// Navigation scroll effect
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap Carousel
    const pricingCarousel = document.getElementById('pricingCarousel');
    if (pricingCarousel) {
        // First, destroy any existing carousel instance
        const existingCarousel = bootstrap.Carousel.getInstance(pricingCarousel);
        if (existingCarousel) {
            existingCarousel.dispose();
        }

        // Initialize new carousel with strict manual control
        const carousel = new bootstrap.Carousel(pricingCarousel, {
            interval: 0,        // Set to 0 to completely disable auto-sliding
            touch: true,        // Enable touch swiping
            wrap: true,         // Enable continuous cycling
            keyboard: true,     // Enable keyboard navigation
            pause: 'hover'      // Pause on mouse hover
        });

        // Explicitly stop any auto-sliding
        carousel.pause();

        // Custom carousel controls with manual navigation
        const prevButton = pricingCarousel.querySelector('.carousel-control-prev');
        const nextButton = pricingCarousel.querySelector('.carousel-control-next');
        
        if (prevButton) {
            prevButton.addEventListener('click', (e) => {
                e.preventDefault();
                carousel.prev();
            });
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', (e) => {
                e.preventDefault();
                carousel.next();
            });
        }

        // Custom carousel controls
        const indicators = pricingCarousel.querySelectorAll('.carousel-indicators button');

        // Add click event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                carousel.to(index);
            });
        });

        // Add keyboard navigation
        pricingCarousel.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                carousel.prev();
            } else if (e.key === 'ArrowRight') {
                carousel.next();
            }
        });

        // Add touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        pricingCarousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        pricingCarousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            if (touchEndX < touchStartX - swipeThreshold) {
                carousel.next();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                carousel.prev();
            }
        }

        // Update indicators on slide
        pricingCarousel.addEventListener('slid.bs.carousel', (e) => {
            const activeIndex = Array.from(pricingCarousel.querySelectorAll('.carousel-item')).indexOf(e.target.querySelector('.active'));
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === activeIndex);
            });
        });
    }

    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form validation and submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const formData = new FormData(this);
            let isValid = true;
            let firstInvalidField = null;

            // Check required fields
            this.querySelectorAll('[required]').forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                    if (!firstInvalidField) firstInvalidField = field;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Email validation
            const emailField = this.querySelector('input[type="email"]');
            if (emailField && emailField.value) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailField.value)) {
                    isValid = false;
                    emailField.classList.add('is-invalid');
                    if (!firstInvalidField) firstInvalidField = emailField;
                }
            }

            // Phone validation
            const phoneField = this.querySelector('input[type="tel"]');
            if (phoneField && phoneField.value) {
                const phonePattern = /^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/;
                if (!phonePattern.test(phoneField.value.replace(/\s+/g, ''))) {
                    isValid = false;
                    phoneField.classList.add('is-invalid');
                    if (!firstInvalidField) firstInvalidField = phoneField;
                }
            }

            if (!isValid) {
                firstInvalidField.focus();
                return;
            }

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menghantar...';

            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Reset form
                this.reset();
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;

                // Show success message
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-success mt-3';
                alertDiv.role = 'alert';
                alertDiv.innerHTML = 'Terima kasih! Mesej anda telah dihantar. Kami akan menghubungi anda tidak lama lagi.';
                this.appendChild(alertDiv);

                // Remove success message after 5 seconds
                setTimeout(() => {
                    alertDiv.remove();
                }, 5000);
            }, 1500);
        });
    }

    // Animate elements on scroll
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.service-card, .pricing-card, .portfolio-item, .testimonial-card');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    };

    // Initial check for elements in view
    animateOnScroll();
    
    // Check for elements on scroll
    window.addEventListener('scroll', animateOnScroll);

    // WhatsApp button click handler
    document.querySelectorAll('a[href^="https://wa.me"]').forEach(button => {
        button.addEventListener('click', function(e) {
            // You can add tracking or analytics here
            console.log('WhatsApp button clicked');
        });
    });
});

// Add custom validation messages
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.querySelectorAll('input, select, textarea').forEach(field => {
            field.addEventListener('invalid', function(e) {
                e.preventDefault();
                this.classList.add('is-invalid');
                
                let message = '';
                if (this.validity.valueMissing) {
                    message = 'Sila isi ruangan ini';
                } else if (this.validity.typeMismatch && this.type === 'email') {
                    message = 'Sila masukkan alamat emel yang sah';
                } else if (this.validity.patternMismatch && this.type === 'tel') {
                    message = 'Sila masukkan nombor telefon yang sah';
                }
                
                if (message) {
                    const feedback = this.nextElementSibling;
                    if (feedback && feedback.classList.contains('invalid-feedback')) {
                        feedback.textContent = message;
                    } else {
                        const newFeedback = document.createElement('div');
                        newFeedback.className = 'invalid-feedback';
                        newFeedback.textContent = message;
                        this.parentNode.insertBefore(newFeedback, this.nextSibling);
                    }
                }
            });
            
            field.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    this.classList.remove('is-invalid');
                }
            });
        });
    });
});

// Scroll-based Animations
document.addEventListener('DOMContentLoaded', function() {
    // Add parallax background elements to sections
    const sections = document.querySelectorAll('.hero-section, .services-section, .pricing-section, .testimonials-section, .contact-section, .footer');
    sections.forEach(section => {
        const parallaxBg = document.createElement('div');
        parallaxBg.className = 'parallax-bg';
        section.insertBefore(parallaxBg, section.firstChild);
    });

    // Parallax effect
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        
        // Parallax backgrounds
        document.querySelectorAll('.parallax-bg').forEach(bg => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            bg.style.transform = `translateY(${yPos}px)`;
        });

        // Animate elements on scroll
        const elements = document.querySelectorAll('.service-card, .pricing-card, .testimonial-card, .fade-in, .slide-in-left, .slide-in-right, .scale-in');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const windowHeight = window.innerHeight;
            
            // Check if element is in viewport
            if (elementTop < windowHeight * 0.8 && elementBottom > 0) {
                element.classList.add('visible');
            }
        });
    });

    // Trigger initial check for elements in viewport
    window.dispatchEvent(new Event('scroll'));

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add animation classes to elements
    document.querySelectorAll('.service-card').forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    document.querySelectorAll('.pricing-card').forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    document.querySelectorAll('.testimonial-card').forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    // Intersection Observer for better performance
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.service-card, .pricing-card, .testimonial-card, .fade-in, .slide-in-left, .slide-in-right, .scale-in').forEach(element => {
        observer.observe(element);
    });
}); 