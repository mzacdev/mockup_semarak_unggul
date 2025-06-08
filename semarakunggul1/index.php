<!DOCTYPE html>
<html lang="ms">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servis Penghantaran Kereta Malaysia | Penghantaran Selamat & Pantas ke Seluruh Malaysia</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/logo.png">
        <link rel="apple-touch-icon" href="assets/images/logo.png">
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
        <!-- Custom CSS -->
        <style>
            :root {
                --primary-color: #2563eb;
                --secondary-color: #1d4ed8;
                --accent-color: #3b82f6;
                --dark-color: #1e293b;
                --light-color: #f8fafc;
                --gradient-primary: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
                --gradient-secondary: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
                --gradient-accent: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
                --gradient-dark: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            }

            body {
                font-family: 'Poppins', 'Segoe UI', system-ui, -apple-system, sans-serif;
                color: var(--dark-color);
                background-color: #ffffff !important;
            }

            .top-bar {
                background: var(--gradient-primary) !important;
                color: #ffffff !important;
                padding: 10px 0;
                font-size: 0.9rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .navbar {
                background-color: rgba(255, 255, 255, 0.95) !important;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                padding: 15px 0;
                position: sticky;
                top: 0;
                z-index: 1000;
                backdrop-filter: blur(10px);
            }

            .navbar-brand img {
                height: 50px;
                transition: transform 0.3s ease;
            }

            .navbar-brand img:hover {
                transform: scale(1.05);
            }

            .nav-link {
                color: var(--dark-color) !important;
                font-weight: 500;
                padding: 0.5rem 1rem !important;
                transition: all 0.3s ease;
                position: relative;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 0;
                height: 2px;
                background: var(--gradient-primary);
                transition: all 0.3s ease;
                transform: translateX(-50%);
            }

            .nav-link:hover::after {
                width: 80%;
            }

            .hero-section {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                    url('/assets/images/cover1.png');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                color: white;
                padding: 180px 0;
                text-align: center;
                position: relative;
                clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
                min-height: 600px;
            }

            .hero-badge {
                background: var(--gradient-accent);
                color: white;
                padding: 8px 20px;
                border-radius: 30px;
                font-size: 0.9rem;
                margin-bottom: 20px;
                display: inline-block;
                box-shadow: 0 4px 6px rgba(245, 158, 11, 0.2);
                transform: translateY(0);
                transition: transform 0.3s ease;
            }

            .hero-badge:hover {
                transform: translateY(-3px);
            }

            .hero-title {
                font-size: 4rem;
                font-weight: 800;
                margin-bottom: 1.5rem;
                text-transform: uppercase;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                background: linear-gradient(to right, #fff, #e2e8f0);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .cta-button {
                background: var(--gradient-secondary);
                color: white;
                padding: 15px 30px;
                border-radius: 30px;
                text-decoration: none;
                font-weight: 600;
                transition: all 0.3s;
                display: inline-block;
                margin: 10px;
                box-shadow: 0 4px 6px rgba(37, 99, 235, 0.2) !important;
                border: none;
            }

            .cta-button:hover {
                transform: translateY(-3px);
                color: white;
                box-shadow: 0 6px 12px rgba(37, 99, 235, 0.3) !important;
            }

            .cta-button.outline {
                background: transparent;
                border: 2px solid white;
                box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
            }

            .cta-button.outline:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .features-section {
                padding: 120px 0;
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
                position: relative;
                overflow: hidden;
            }

            .features-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100px;
                background: white;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);
                opacity: 0.8;
                z-index: 1;
            }

            .features-section .container {
                position: relative;
                z-index: 2;
            }

            .features-section .row.text-center {
                position: relative;
                z-index: 2;
                background: rgba(255, 255, 255, 0.9);
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 30px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            .feature-card {
                background: #ffffff !important;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                height: 100%;
                transition: all 0.3s ease;
                border: 1px solid rgba(0, 0, 0, 0.05) !important;
                position: relative;
                overflow: hidden;
            }

            .feature-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .feature-icon-wrapper {
                width: 70px;
                height: 70px;
                background: var(--gradient-primary);
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                transition: all 0.3s ease;
            }

            .feature-card:hover .feature-icon-wrapper {
                transform: rotateY(180deg);
            }

            .feature-icon-wrapper i {
                font-size: 2rem;
                color: white;
            }

            .feature-card h3 {
                font-size: 1.2rem;
                margin-bottom: 15px;
                color: var(--dark-color);
                font-weight: 600;
            }

            .feature-card p {
                color: #64748b;
                font-size: 0.95rem;
                line-height: 1.6;
                margin-bottom: 0;
            }

            .process-section {
                padding: 100px 0;
            }

            .process-step {
                position: relative;
                padding: 30px;
                background: #ffffff !important;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                margin-bottom: 30px;
            }

            .process-step::before {
                content: attr(data-step);
                position: absolute;
                top: -15px;
                left: 30px;
                background: var(--primary-color);
                color: white;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
            }

            .testimonials-section {
                padding: 120px 0;
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
                position: relative;
            }

            .testimonial-card {
                padding: 15px;
                background: #ffffff;
                border-radius: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 0;
            }

            .testimonial-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            }

            .testimonial-card img {
                max-height: 350px;
                width: 100%;
                object-fit: contain;
            }

            .contact-section {
                padding: 120px 0;
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%), url('assets/images/map.png') center center/cover no-repeat;
                background-blend-mode: lighten;
                position: relative;
            }

            .contact-form {
                background: #ffffff !important;
                padding: 50px;
                border-radius: 20px;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(0, 0, 0, 0.05) !important;
            }

            .form-control {
                padding: 12px 20px;
                border-radius: 10px;
                border: 1px solid rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .form-control:focus {
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
                border-color: var(--primary-color);
            }

            .footer {
                background: var(--gradient-dark);
                color: white;
                padding: 80px 0 30px;
                position: relative;
            }

            .footer::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100px;
                background: #f8fafc;
                clip-path: polygon(0 0, 100% 100%, 100% 0);
                opacity: 0.8;
                z-index: 1;
            }

            .footer .container {
                position: relative;
                z-index: 2;
            }

            .footer h5 {
                color: var(--accent-color);
                margin-bottom: 20px;
                font-weight: 600;
                position: relative;
                z-index: 2;
                background: rgba(0, 0, 0, 0.3);
                padding: 10px 15px;
                border-radius: 8px;
                display: inline-block;
            }

            .footer p {
                position: relative;
                z-index: 2;
                background: rgba(0, 0, 0, 0.2);
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
            }

            @media (max-width: 768px) {
                .footer {
                    padding: 60px 0 20px;
                }

                .footer h5 {
                    font-size: 1.1rem;
                    padding: 8px 12px;
                    margin-bottom: 15px;
                }

                .footer p {
                    font-size: 0.9rem;
                    padding: 12px;
                    margin-bottom: 15px;
                }

                .footer .col-md-3 {
                    margin-bottom: 30px;
                }
            }

            .footer-links a {
                color: #e2e8f0;
                text-decoration: none;
                margin-bottom: 12px;
                display: block;
                transition: all 0.3s ease;
            }

            .footer-links a:hover {
                color: var(--accent-color);
                transform: translateX(5px);
            }

            .social-links a {
                color: white;
                font-size: 1.5rem;
                margin-right: 15px;
                transition: all 0.3s ease;
                text-decoration: none;
                position: relative;
            }

            .social-links a:hover {
                color: var(--accent-color);
                transform: translateY(-3px);
            }

            .social-links a[title]:hover::after {
                content: attr(title);
                position: absolute;
                bottom: 100%;
                left: 50%;
                transform: translateX(-50%);
                background: rgba(0, 0, 0, 0.8);
                color: white;
                padding: 4px 8px;
                border-radius: 4px;
                font-size: 0.75rem;
                white-space: nowrap;
                margin-bottom: 5px;
            }

            .social-links a i.fa-tiktok {
                font-size: 1.4rem;
            }

            .clients-section {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
                padding: 80px 0;
                position: relative;
                overflow: hidden;
            }

            .clients-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100px;
                background: #ffffff !important;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);
            }

            .client-logo {
                transition: all 0.3s ease;
                padding: 20px;
                background: #ffffff !important;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                max-height: 100px !important;
            }

            .client-logo:hover {
                filter: grayscale(0%) !important;
                opacity: 1 !important;
                transform: scale(1.1);
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            }

            .package-card {
                background: #ffffff;
                position: relative;
                overflow: hidden;
                border-radius: 25px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
                border: 2px solid transparent;
                background-image: linear-gradient(#ffffff, #ffffff), var(--gradient-primary);
                background-origin: border-box;
                background-clip: content-box, border-box;
            }

            .package-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            }

            .package-image {
                height: 250px;
                background-size: cover;
                background-position: center;
                position: relative;
            }

            .package-image::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.65));
            }

            .package-header {
                position: relative;
                z-index: 1;
                padding: 2rem 1rem;
                color: white;
                text-align: center;
            }

            .package-badge {
                position: absolute;
                top: 1rem;
                right: 1rem;
                z-index: 2;
                background: var(--gradient-accent);
                padding: 8px 15px;
                border-radius: 20px;
                font-weight: 600;
            }

            .package-price {
                background: var(--gradient-secondary) !important;
                color: #fff;
                padding: 1.75rem 2rem;
                border-radius: 50px;
                font-weight: 700;
                margin-top: 1.5rem;
                display: inline-block;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            }

            .package-features {
                padding: 2rem;
                background: white;
            }

            .package-card.border-primary {
                transform: scale(1.03);
                border-color: var(--accent-color);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
            }

            @media (max-width: 768px) {
                .hero-title {
                    font-size: 2.5rem;
                }

                .client-logo {
                    max-height: 60px !important;
                }

                .package-image {
                    height: 200px;
                }

                .package-card {
                    border-radius: 20px;
                }

                .package-price {
                    font-size: 1.25rem;
                    padding: 1rem 1.25rem;
                }
            }

            @media (max-width: 576px) {
                .top-bar .row>div {
                    text-align: center !important;
                    margin-bottom: 5px;
                }

                .hero-section {
                    padding: 120px 0 100px;
                }

                .hero-title {
                    font-size: 1.8rem;
                    line-height: 1.2;
                }

                .hero-badge {
                    font-size: 0.75rem;
                    padding: 6px 16px;
                }

                .cta-button {
                    width: 100%;
                    margin: 6px 0;
                }

                .feature-icon-wrapper {
                    width: 60px;
                    height: 60px;
                }

                .feature-icon-wrapper i {
                    font-size: 1.5rem;
                }

                .feature-card {
                    padding: 25px;
                }

                .package-image {
                    height: 150px;
                }

                .package-price {
                    font-size: 1rem;
                    padding: 0.75rem 1rem;
                }

                .package-header {
                    padding: 1.5rem 1rem;
                }

                .testimonial-card img {
                    max-height: 300px;
                }

                .contact-form {
                    padding: 30px;
                }
            }

            .back-to-top {
                position: fixed;
                bottom: 30px;
                right: 30px;
                display: none;
                z-index: 999;
                border-radius: 50%;
                padding: 12px 16px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .back-to-top.show {
                display: inline-flex;
            }

            /* --- Blue Theme Overrides (light + blue palette) --- */
            body {
                background-color: #ffffff !important;
                color: var(--dark-color) !important;
            }

            .top-bar {
                background: var(--gradient-primary) !important;
            }

            .navbar {
                background-color: rgba(255, 255, 255, 0.95) !important;
            }

            .nav-link {
                color: var(--dark-color) !important;
            }

            .features-section,
            .testimonials-section,
            .clients-section,
            .contact-section,
            .process-section {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
            }

            .feature-card,
            .testimonial-card,
            .contact-form,
            .process-step,
            .package-features,
            .package-card {
                background: #ffffff !important;
                color: var(--dark-color) !important;
                border: 1px solid rgba(0, 0, 0, 0.05) !important;
            }

            .client-logo {
                background: #ffffff !important;
            }

            .package-card.border-primary {
                border-color: var(--accent-color);
            }

            .package-price {
                background: var(--gradient-secondary) !important;
            }

            .clients-section.bg-light {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
            }

            .clients-section::before {
                background: #ffffff !important;
            }

            /* Stats Section */
            .stat-item {
                padding: 20px;
                transition: transform 0.3s ease;
            }

            .stat-item:hover {
                transform: translateY(-5px);
            }

            .counter {
                font-size: 2.5rem;
                font-weight: bold;
                margin: 10px 0;
            }

            /* Why Choose Us Section */
            .why-us-card {
                text-align: center;
                padding: 30px;
                background: white;
                border-radius: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .why-us-card:hover {
                transform: translateY(-10px);
            }

            .icon-wrapper {
                width: 80px;
                height: 80px;
                margin: 0 auto 20px;
                background: var(--gradient-primary);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .icon-wrapper i {
                font-size: 2rem;
                color: white;
            }

            /* Coverage Map Section */
            .coverage-map {
                position: relative;
                padding: 20px;
                background: white;
                border-radius: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            .coverage-map img {
                width: 100%;
                height: auto;
                display: block;
            }

            /* FAQ Section */
            .accordion-button:not(.collapsed) {
                background-color: var(--primary-color);
                color: white;
            }

            .accordion-button:focus {
                box-shadow: none;
                border-color: rgba(0, 0, 0, 0.125);
            }

            /* WhatsApp Float Button */
            .whatsapp-float {
                position: fixed;
                bottom: 30px;
                right: 30px;
                background: #25d366;
                color: white;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                text-align: center;
                font-size: 30px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                transition: transform 0.3s ease;
                z-index: 1000;
            }

            .whatsapp-float:hover {
                transform: scale(1.1);
                color: white;
            }

            .gallery-section {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                padding: 80px 0;
                position: relative;
            }

            .gallerySwiper {
                width: 100%;
                padding: 20px 0;
            }

            .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 15px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                cursor: pointer;
                aspect-ratio: 4/3;
                transition: transform 0.3s ease;
            }

            .gallery-item:hover {
                transform: translateY(-5px);
            }

            .gallery-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .gallery-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(37, 99, 235, 0.8);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
                padding: 20px;
                text-align: center;
            }

            .gallery-caption {
                color: white;
                font-size: 1.1rem;
                margin-top: 10px;
                font-weight: 500;
                transform: translateY(20px);
                opacity: 0;
                transition: all 0.3s ease;
            }

            .gallery-item:hover .gallery-img {
                transform: scale(1.1);
            }

            .gallery-item:hover .gallery-overlay {
                opacity: 1;
            }

            .gallery-item:hover .gallery-caption {
                transform: translateY(0);
                opacity: 1;
            }

            .gallery-overlay i {
                color: white;
                font-size: 2rem;
                transform: scale(0.5);
                transition: transform 0.3s ease;
            }

            .gallery-item:hover .gallery-overlay i {
                transform: scale(1);
            }

            .swiper-slide {
                padding: 10px;
                transition: transform 0.3s ease;
            }

            .swiper-slide-active {
                transform: scale(1.05);
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: var(--primary-color);
                background: white;
                width: 45px;
                height: 45px;
                border-radius: 50%;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .swiper-button-next:hover,
            .swiper-button-prev:hover {
                background: var(--primary-color);
                color: white;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 20px;
            }

            .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background: #cbd5e1;
                opacity: 1;
            }

            .swiper-pagination-bullet-active {
                background: var(--primary-color);
                width: 30px;
                border-radius: 5px;
            }

            @media (max-width: 768px) {
                .gallery-item {
                    aspect-ratio: 3/2;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    width: 35px;
                    height: 35px;
                }

                .gallery-caption {
                    font-size: 0.9rem;
                }
            }

            .contact-form .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
            }

            .contact-form .form-control.is-invalid {
                border-color: #dc3545;
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }

            .contact-form .invalid-feedback {
                display: none;
                color: #dc3545;
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }

            .contact-form .form-control.is-invalid+.invalid-feedback {
                display: block;
            }

            .contact-form button[type="submit"] {
                transition: all 0.3s ease;
            }

            .contact-form button[type="submit"]:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            }

            .contact-form button[type="submit"] i {
                font-size: 1.2em;
            }

            .top-bar a {
                text-decoration: none;
                transition: opacity 0.3s ease;
                font-size: 0.9rem;
                white-space: nowrap;
            }

            .top-bar a:hover {
                opacity: 0.8;
            }

            .social-links {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
            }

            .social-links a {
                color: white;
                font-size: 1.5rem;
                transition: all 0.3s ease;
                text-decoration: none;
                position: relative;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
            }

            .social-links a:hover {
                color: white;
                transform: translateY(-3px);
                background: var(--accent-color);
            }

            .social-links a[title]:hover::after {
                content: attr(title);
                position: absolute;
                bottom: 100%;
                left: 50%;
                transform: translateX(-50%);
                background: rgba(0, 0, 0, 0.8);
                color: white;
                padding: 4px 8px;
                border-radius: 4px;
                font-size: 0.75rem;
                white-space: nowrap;
                margin-bottom: 5px;
                z-index: 1000;
            }

            @media (max-width: 768px) {
                .top-bar .text-end {
                    text-align: center !important;
                    margin-top: 5px;
                }

                .top-bar a {
                    display: inline-block;
                    margin: 2px 5px;
                    font-size: 0.8rem;
                }

                .social-links {
                    justify-content: center;
                }
            }

            .contact-info a {
                text-decoration: none;
                color: white;
                transition: opacity 0.3s ease;
                display: inline-flex;
                align-items: center;
                font-weight: 500;
            }

            .contact-info a:hover {
                opacity: 0.8;
            }

            .social-links-top {
                display: flex;
                justify-content: flex-end;
                gap: 20px;
                align-items: center;
            }

            .social-links-top a {
                text-decoration: none;
                color: white;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                font-size: 0.9rem;
                padding: 4px 8px;
                border-radius: 4px;
                background: rgba(255, 255, 255, 0.1);
            }

            .social-links-top a:hover {
                background: rgba(255, 255, 255, 0.2);
                transform: translateY(-1px);
            }

            .social-links-top a i {
                font-size: 1.1rem;
            }

            @media (max-width: 768px) {
                .top-bar {
                    padding: 5px 0;
                    font-size: 0.8rem;
                }

                .social-links-top a {
                    padding: 3px 6px;
                    font-size: 0.75rem;
                }

                /* Navigation */
                .navbar {
                    padding: 10px 0;
                }

                .navbar-brand img {
                    height: 40px;
                }

                .nav-link {
                    padding: 0.5rem !important;
                    font-size: 0.9rem;
                }

                /* Hero Section */
                .hero-section {
                    padding: 100px 0 80px;
                    min-height: 400px;
                }

                .hero-title {
                    font-size: 2rem;
                    line-height: 1.3;
                }

                .hero-badge {
                    font-size: 0.8rem;
                    padding: 6px 12px;
                    margin-bottom: 15px;
                }

                .lead {
                    font-size: 1rem;
                }

                /* Features Section */
                .features-section {
                    padding: 60px 0;
                }

                .feature-card {
                    padding: 25px 20px;
                    margin-bottom: 20px;
                }

                .feature-icon-wrapper {
                    width: 60px;
                    height: 60px;
                }

                .feature-icon-wrapper i {
                    font-size: 1.5rem;
                }

                /* Stats Section */
                .stat-item {
                    padding: 15px 10px;
                }

                .counter {
                    font-size: 2rem;
                }

                .stat-item i {
                    font-size: 2rem !important;
                }

                /* Why Choose Us Section */
                .why-us-card {
                    padding: 20px;
                    margin-bottom: 20px;
                }

                .icon-wrapper {
                    width: 60px;
                    height: 60px;
                }

                .icon-wrapper i {
                    font-size: 1.5rem;
                }

                /* Coverage Section */
                .coverage-map {
                    margin-bottom: 30px;
                }

                .coverage-list {
                    padding: 0 15px;
                }

                /* FAQ Section */
                .accordion-button {
                    font-size: 0.9rem;
                    padding: 12px 15px;
                }

                .accordion-body {
                    font-size: 0.9rem;
                    padding: 15px;
                }

                /* Contact Form */
                .contact-form {
                    padding: 25px 20px;
                }

                .form-control {
                    font-size: 0.9rem;
                    padding: 10px 15px;
                }

                /* Gallery Section */
                .gallery-item {
                    aspect-ratio: 3/2;
                }

                .gallery-caption {
                    font-size: 0.9rem;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    width: 35px;
                    height: 35px;
                }

                /* Footer */
                .footer {
                    padding: 50px 0 20px;
                }

                .footer h5 {
                    font-size: 1.1rem;
                    margin-top: 20px;
                }

                .footer p {
                    font-size: 0.9rem;
                }

                .social-links a {
                    width: 35px;
                    height: 35px;
                    font-size: 1.2rem;
                }
            }

            @media (max-width: 576px) {

                /* Hero Section */
                .hero-section {
                    padding: 80px 0 60px;
                    min-height: 350px;
                }

                .hero-title {
                    font-size: 1.6rem;
                }

                .hero-badge {
                    font-size: 0.7rem;
                    padding: 5px 10px;
                }

                .cta-button {
                    width: 100%;
                    margin: 8px 0;
                    font-size: 0.9rem;
                    padding: 12px 20px;
                }

                /* Stats Section */
                .stat-item {
                    margin-bottom: 15px;
                }

                .counter {
                    font-size: 1.8rem;
                }

                /* Contact Form */
                .contact-form {
                    padding: 20px 15px;
                }

                /* Gallery Section */
                .gallery-item {
                    aspect-ratio: 4/3;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    display: none;
                }

                /* WhatsApp Float Button */
                .whatsapp-float {
                    width: 50px;
                    height: 50px;
                    font-size: 25px;
                    bottom: 20px;
                    right: 20px;
                }

                /* Back to Top Button */
                .back-to-top {
                    bottom: 20px;
                    right: 20px;
                    padding: 8px 12px;
                }
            }

            /* Additional Mobile Optimizations */
            @media (max-width: 768px) {

                /* Improve touch targets */
                .nav-link,
                .footer-links a,
                .social-links a,
                .cta-button {
                    min-height: 44px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }

                /* Improve form elements */
                input[type="text"],
                input[type="email"],
                input[type="tel"],
                select,
                textarea {
                    font-size: 16px !important;
                    /* Prevents zoom on iOS */
                }

                /* Improve button spacing */
                .btn {
                    margin: 5px 0;
                }

                /* Improve list readability */
                .footer-links a,
                .coverage-list li {
                    padding: 8px 0;
                }

                /* Improve image loading */
                img {
                    max-width: 100%;
                    height: auto;
                }
            }

            /* Fix for iOS Safari 100vh issue */
            @supports (-webkit-touch-callout: none) {
                .hero-section {
                    min-height: -webkit-fill-available;
                }
            }

            /* Improve scrolling on mobile */
            html {
                scroll-behavior: smooth;
                -webkit-overflow-scrolling: touch;
            }

            /* Prevent horizontal scroll */
            body {
                overflow-x: hidden;
                width: 100%;
            }

            .about-section {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                position: relative;
                overflow: hidden;
            }

            .about-image {
                position: relative;
                z-index: 1;
            }

            .about-image img {
                width: 100%;
                height: auto;
                transition: transform 0.3s ease;
            }

            .about-image:hover img {
                transform: scale(1.02);
            }

            .experience-badge {
                position: absolute;
                bottom: 30px;
                right: -20px;
                background: var(--gradient-primary);
                color: white;
                padding: 20px;
                border-radius: 50%;
                width: 120px;
                height: 120px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                z-index: 2;
            }

            .experience-badge .years {
                font-size: 2rem;
                font-weight: 700;
                line-height: 1;
            }

            .experience-badge .text {
                font-size: 0.8rem;
                text-align: center;
                margin-top: 5px;
            }

            .section-title {
                color: var(--dark-color);
                font-weight: 700;
                position: relative;
                padding-bottom: 15px;
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 3px;
                background: var(--gradient-primary);
            }

            .about-features {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .about-features li {
                margin-bottom: 12px;
                display: flex;
                align-items: center;
            }

            .about-features li i {
                margin-right: 10px;
                font-size: 1.1rem;
            }

            .stat-box {
                transition: transform 0.3s ease;
                border: 1px solid rgba(0, 0, 0, 0.05);
            }

            .stat-box:hover {
                transform: translateY(-5px);
            }

            .stat-box h4 {
                color: var(--dark-color);
                font-weight: 600;
            }

            .stat-box p {
                color: #64748b;
            }

            @media (max-width: 768px) {
                .about-content {
                    padding-left: 0 !important;
                    margin-top: 30px;
                }

                .experience-badge {
                    width: 100px;
                    height: 100px;
                    bottom: 20px;
                    right: -15px;
                }

                .experience-badge .years {
                    font-size: 1.5rem;
                }

                .experience-badge .text {
                    font-size: 0.7rem;
                }

                .stat-box {
                    padding: 15px !important;
                }

                .stat-box i {
                    font-size: 1.5rem !important;
                }

                .stat-box h4 {
                    font-size: 1.2rem;
                }

                .stat-box p {
                    font-size: 0.8rem;
                }
            }

            .about-slider {
                position: relative;
                padding: 10px;
            }

            .aboutSwiper {
                width: 100%;
                border-radius: 15px;
                overflow: hidden;
            }

            .about-image {
                position: relative;
                width: 100%;
                height: 400px;
                overflow: hidden;
                border-radius: 15px;
            }

            .about-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .aboutSwiper .swiper-slide-active .about-image img {
                transform: scale(1.05);
            }

            .aboutSwiper .swiper-button-next,
            .aboutSwiper .swiper-button-prev {
                color: white;
                background: rgba(0, 0, 0, 0.5);
                width: 40px;
                height: 40px;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .aboutSwiper .swiper-button-next:hover,
            .aboutSwiper .swiper-button-prev:hover {
                background: var(--primary-color);
            }

            .aboutSwiper .swiper-button-next:after,
            .aboutSwiper .swiper-button-prev:after {
                font-size: 18px;
            }

            .aboutSwiper .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background: white;
                opacity: 0.7;
            }

            .aboutSwiper .swiper-pagination-bullet-active {
                background: var(--primary-color);
                opacity: 1;
            }

            @media (max-width: 768px) {
                .about-image {
                    height: 300px;
                }

                .aboutSwiper .swiper-button-next,
                .aboutSwiper .swiper-button-prev {
                    width: 35px;
                    height: 35px;
                }

                .aboutSwiper .swiper-button-next:after,
                .aboutSwiper .swiper-button-prev:after {
                    font-size: 16px;
                }
            }

            .process-section {
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                position: relative;
                overflow: hidden;
            }

            .process-timeline {
                position: relative;
                padding: 20px 0;
            }

            .process-timeline::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                height: 2px;
                background: var(--gradient-primary);
                transform: translateY(-50%);
                z-index: 1;
                display: none;
            }

            @media (min-width: 992px) {
                .process-timeline::before {
                    display: block;
                }
            }

            .process-card {
                background: white;
                border-radius: 15px;
                padding: 30px 20px;
                height: 100%;
                position: relative;
                z-index: 2;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s ease;
                border: 1px solid rgba(0, 0, 0, 0.05);
            }

            .process-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .process-icon {
                width: 80px;
                height: 80px;
                background: var(--gradient-primary);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
                position: relative;
                color: white;
            }

            .process-icon i {
                font-size: 2rem;
                z-index: 2;
            }

            .step-number {
                position: absolute;
                top: -10px;
                right: -10px;
                width: 30px;
                height: 30px;
                background: var(--accent-color);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                font-size: 1rem;
                border: 2px solid white;
            }

            .process-card h3 {
                font-size: 1.2rem;
                margin-bottom: 15px;
                color: var(--dark-color);
                text-align: center;
            }

            .process-details {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .process-details li {
                padding: 8px 0;
                color: #64748b;
                font-size: 0.9rem;
                display: flex;
                align-items: center;
                position: relative;
                padding-left: 25px;
            }

            .process-details li::before {
                content: '→';
                position: absolute;
                left: 0;
                color: var(--primary-color);
                font-weight: bold;
            }

            @media (max-width: 768px) {
                .process-card {
                    padding: 20px 15px;
                }

                .process-icon {
                    width: 60px;
                    height: 60px;
                }

                .process-icon i {
                    font-size: 1.5rem;
                }

                .step-number {
                    width: 25px;
                    height: 25px;
                    font-size: 0.9rem;
                }

                .process-card h3 {
                    font-size: 1.1rem;
                }

                .process-details li {
                    font-size: 0.85rem;
                    padding: 6px 0 6px 20px;
                }
            }

            /* Add these styles in the existing style section */
            .contact-link {
                text-decoration: none;
                padding: 4px 8px;
                border-radius: 4px;
                background: rgba(255, 255, 255, 0.1);
                transition: all 0.3s ease;
                white-space: nowrap;
            }

            .contact-link:hover {
                background: rgba(255, 255, 255, 0.2);
                transform: translateY(-1px);
            }

            .contact-details {
                color: #e2e8f0;
            }

            .contact-item {
                display: flex;
                align-items: flex-start;
                line-height: 1.4;
            }

            .contact-item i {
                margin-top: 3px;
            }

            .contact-item small {
                font-size: 0.8rem;
                opacity: 0.8;
            }

            @media (max-width: 768px) {
                .contact-info {
                    justify-content: center;
                }

                .contact-link {
                    font-size: 0.9rem;
                    padding: 3px 6px;
                }
            }

            /* Update these styles in the existing style section */
            .contact-details {
                color: #e2e8f0;
            }

            .contact-item {
                display: flex;
                align-items: flex-start;
                line-height: 1.5;
                font-size: 1rem;
            }

            .contact-item i {
                margin-top: 3px;
                min-width: 24px;
                font-size: 1.1rem;
            }

            .contact-item span {
                word-break: break-word;
            }

            .contact-item small {
                font-size: 0.8rem;
                opacity: 0.8;
            }

            @media (max-width: 768px) {
                .contact-item {
                    font-size: 0.95rem;
                }

                .contact-item i {
                    min-width: 22px;
                    font-size: 1rem;
                }
            }

            @media (max-width: 576px) {
                .contact-item {
                    font-size: 0.9rem;
                }

                .contact-item i {
                    min-width: 20px;
                    font-size: 0.95rem;
                }
            }

            .contact-group {
                background: rgba(255, 255, 255, 0.1);
                padding: 4px 12px;
                border-radius: 6px;
            }

            .contact-numbers {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
            }

            .contact-link {
                color: white;
                text-decoration: none;
                padding: 2px 8px;
                border-radius: 4px;
                background: rgba(255, 255, 255, 0.1);
                transition: all 0.3s ease;
                white-space: nowrap;
                font-size: 0.9rem;
            }

            .contact-link:hover {
                background: rgba(255, 255, 255, 0.2);
                color: white;
                transform: translateY(-1px);
            }

            .social-link {
                color: white;
                text-decoration: none;
                padding: 4px 10px;
                border-radius: 4px;
                background: rgba(255, 255, 255, 0.1);
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                font-size: 0.9rem;
            }

            .social-link:hover {
                background: rgba(255, 255, 255, 0.2);
                color: white;
                transform: translateY(-1px);
            }

            .social-link i {
                font-size: 1.1rem;
            }

            @media (max-width: 768px) {
                .top-bar {
                    padding: 8px 0;
                    font-size: 0.85rem;
                }

                .contact-group {
                    padding: 3px 8px;
                }

                .contact-link {
                    font-size: 0.85rem;
                    padding: 2px 6px;
                }

                .social-link {
                    padding: 3px 8px;
                    font-size: 0.85rem;
                }

                .social-link i {
                    font-size: 1rem;
                }

                .contact-info {
                    justify-content: center;
                    margin-bottom: 8px;
                }

                .social-links-top {
                    justify-content: center !important;
                }
            }

            @media (max-width: 576px) {
                .contact-numbers {
                    justify-content: center;
                }

                .contact-link {
                    font-size: 0.8rem;
                    padding: 2px 5px;
                }
            }

            /* Add these styles to the existing style section */
            .servicesSwiper {
                padding: 20px 0;
                overflow: hidden;
            }

            .servicesSwiper .swiper-slide {
                height: auto;
                padding: 10px;
            }

            .servicesSwiper .feature-card {
                height: 100%;
                margin: 0;
            }

            .servicesSwiper .swiper-button-next,
            .servicesSwiper .swiper-button-prev {
                color: var(--primary-color);
                background: white;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .servicesSwiper .swiper-button-next:hover,
            .servicesSwiper .swiper-button-prev:hover {
                background: var(--primary-color);
                color: white;
            }

            .servicesSwiper .swiper-button-next:after,
            .servicesSwiper .swiper-button-prev:after {
                font-size: 18px;
            }

            .servicesSwiper .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background: #cbd5e1;
                opacity: 1;
            }

            .servicesSwiper .swiper-pagination-bullet-active {
                background: var(--primary-color);
                width: 30px;
                border-radius: 5px;
            }

            @media (max-width: 768px) {

                .servicesSwiper .swiper-button-next,
                .servicesSwiper .swiper-button-prev {
                    width: 35px;
                    height: 35px;
                }

                .servicesSwiper .swiper-button-next:after,
                .servicesSwiper .swiper-button-prev:after {
                    font-size: 16px;
                }
            }

            .about-media-gallery {
                position: relative;
            }

            .media-item {
                position: relative;
                display: block;
                overflow: hidden;
                border-radius: 8px;
                aspect-ratio: 1;
                cursor: pointer;
            }

            .media-item img,
            .media-item video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
            }

            .media-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .media-overlay i {
                color: white;
                font-size: 2rem;
                transform: scale(0.5);
                transition: transform 0.3s ease;
            }

            .media-item:hover img,
            .media-item:hover video {
                transform: scale(1.1);
            }

            .media-item:hover .media-overlay {
                opacity: 1;
            }

            .media-item:hover .media-overlay i {
                transform: scale(1);
            }

            /* Media Lightbox */
            .media-lightbox {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                padding: 20px;
            }

            .media-lightbox-content {
                position: relative;
                max-width: 90%;
                max-height: 90vh;
                background: black;
            }

            .media-lightbox-content img,
            .media-lightbox-content video {
                max-width: 100%;
                max-height: 90vh;
                object-fit: contain;
            }

            .media-lightbox-close {
                position: absolute;
                top: -40px;
                right: 0;
                background: none;
                border: none;
                color: white;
                font-size: 30px;
                cursor: pointer;
                padding: 5px;
            }

            .media-lightbox-close:hover {
                color: var(--primary-color);
            }

            .media-lightbox-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 100%;
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
            }

            .media-lightbox-nav button {
                background: rgba(255, 255, 255, 0.1);
                border: none;
                color: white;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .media-lightbox-nav button:hover {
                background: rgba(255, 255, 255, 0.2);
            }

            .modal-xl {
                max-width: 90%;
            }

            .modal-body {
                padding: 1.5rem;
            }

            .modal-gallery-item {
                position: relative;
                aspect-ratio: 1;
                overflow: hidden;
                border-radius: 8px;
                cursor: pointer;
                transition: transform 0.3s ease;
            }

            .modal-gallery-item:hover {
                transform: scale(1.05);
            }

            .modal-gallery-item img,
            .modal-gallery-item video {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .modal-gallery-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .modal-gallery-item:hover .modal-gallery-overlay {
                opacity: 1;
            }

            .modal-gallery-overlay i {
                color: white;
                font-size: 2rem;
            }

            /* Lightbox styles */
            .media-lightbox {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                padding: 20px;
            }

            .media-lightbox-content {
                position: relative;
                max-width: 90%;
                max-height: 90vh;
                background: black;
            }

            .media-lightbox-content img,
            .media-lightbox-content video {
                max-width: 100%;
                max-height: 90vh;
                object-fit: contain;
            }

            .media-lightbox-close {
                position: absolute;
                top: -40px;
                right: 0;
                background: none;
                border: none;
                color: white;
                font-size: 30px;
                cursor: pointer;
                padding: 5px;
            }

            .media-lightbox-close:hover {
                color: var(--primary-color);
            }

            .media-lightbox-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 100%;
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
            }

            .media-lightbox-nav button {
                background: rgba(255, 255, 255, 0.1);
                border: none;
                color: white;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .media-lightbox-nav button:hover {
                background: rgba(255, 255, 255, 0.2);
            }
        </style>
    </head>

    <body>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-info d-flex flex-wrap align-items-center gap-3">
                            <div class="contact-group d-flex align-items-center">
                                <i class="fas fa-phone-alt me-2"></i>
                                <div class="contact-numbers d-flex flex-wrap gap-2">
                                    <a href="tel:+60126821515" class="contact-link">
                                        +60 12-682 1515
                                    </a>
                                    <a href="tel:+60178891035" class="contact-link">
                                        +60 17-889 1035
                                    </a>
                                    <a href="tel:+60189087995" class="contact-link">
                                        +60 18-908 7995
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="social-links-top d-flex justify-content-end gap-2">
                            <a href="https://wa.me/60178891035" class="social-link" target="_blank" title="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                                <span class="d-none d-md-inline ms-1">WhatsApp</span>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61565856747220&mibextid=wwXIfr&rdid=kB9RzfBuzqyB2YUK&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15uTJT9veo%2F%3Fmibextid%3DwwXIfr"
                                class="social-link" target="_blank" title="Facebook">
                                <i class="fab fa-facebook"></i>
                                <span class="d-none d-md-inline ms-1">Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/semarakunggulroro?igsh=a2JyODN6MHo2cXNn"
                                class="social-link" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                                <span class="d-none d-md-inline ms-1">Instagram</span>
                            </a>
                            <a href="https://www.tiktok.com/@semarakunggulroro" class="social-link" target="_blank"
                                title="TikTok">
                                <i class="fab fa-tiktok"></i>
                                <span class="d-none d-md-inline ms-1">TikTok</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="image.png" alt="Servis Penghantaran Kereta Logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#utama">Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servis">Servis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#proses">Proses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hubungi">Hubungi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section" id="utama">
            <div class="container">
                <span class="hero-badge">PERKHIDMATAN KE SELURUH MALAYSIA | SEMENANJUNG • SABAH • SARAWAK</span>
                <h1 class="hero-title">HANTAR KENDERAAN ANDA DENGAN SELAMAT & PANTAS</h1>
                <p class="lead mb-4">Perkhidmatan Penghantaran Kenderaan Terbaik di Malaysia • RoRo • Forwarding •
                    Barangan Peribadi</p>
                <div>
                    <a href="#hubungi" class="cta-button">Dapatkan Sebut Harga PERCUMA</a>
                    <a href="https://wa.me/60178891035" class="cta-button outline">WhatsApp Sekarang</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section py-5" id="tentang" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-media-gallery">
                            <div class="row g-3" id="mediaGallery">
                                <!-- Initial media items will be loaded here -->
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-primary" id="viewAllMedia" data-bs-toggle="modal"
                                    data-bs-target="#mediaModal">
                                    Lihat Lagi Media
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content ps-lg-4">
                            <h2 class="section-title mb-4">Tentang Semarak Unggul Services</h2>
                            <p class="lead mb-4">Peneraju Perkhidmatan Penghantaran Kenderaan di Malaysia</p>
                            <div class="about-text mb-4">
                                <p>Semarak Unggul Services adalah syarikat penghantaran kenderaan terkemuka di Malaysia
                                    yang telah beroperasi sejak lebih 10 tahun. Kami mengkhususkan dalam perkhidmatan
                                    penghantaran kenderaan menggunakan kapal RoRo ke seluruh Malaysia, termasuk Sabah
                                    dan Sarawak.</p>
                                <p>Dengan pengalaman yang luas dan pasukan profesional, kami komited untuk memberikan
                                    perkhidmatan terbaik dengan:</p>
                                <ul class="about-features">
                                    <li><i class="fas fa-check-circle text-primary"></i> Sistem pemantauan GPS 24/7</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Insurans komprehensif</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Pasukan profesional yang
                                        terlatih</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Rangkaian logistik yang luas
                                    </li>
                                </ul>
                            </div>
                            <div class="about-stats row g-4 mb-4">
                                <div class="col-6">
                                    <div class="stat-box text-center p-3 bg-light rounded-3">
                                        <i class="fas fa-truck fa-2x text-primary mb-2"></i>
                                        <h4 class="mb-0">23,570+</h4>
                                        <p class="mb-0 small">Kenderaan Dihantar</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="stat-box text-center p-3 bg-light rounded-3">
                                        <i class="fas fa-map-marked-alt fa-2x text-primary mb-2"></i>
                                        <h4 class="mb-0">8</h4>
                                        <p class="mb-0 small">Bandar Utama</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#hubungi" class="cta-button">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section" id="servis" data-aos="fade-up">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="mb-4">Perkhidmatan Kami</h2>
                        <p class="lead">Penyelesaian Logistik Komprehensif untuk Keperluan Anda</p>
                    </div>
                </div>
                <div class="servicesSwiper">
                    <div class="swiper-wrapper">
                        <!-- Forwarding Services -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-truck-loading"></i>
                                </div>
                                <h3>Forwarding Services (Customs Clearance)</h3>
                                <p>Pengurusan penuh pelepasan kastam untuk borang K1, K2, K3, dan K8. Termasuk urusan
                                    cukai, dokumentasi import/eksport dan nasihat kepatuhan kastam.</p>
                            </div>
                        </div>
                        <!-- RoRo Services -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-ship"></i>
                                </div>
                                <h3>RoRo Services</h3>
                                <p>Perkhidmatan penghantaran kenderaan ke Sabah, Sarawak & destinasi antarabangsa
                                    melalui sistem Roll-on/Roll-off yang selamat & kos efektif.</p>
                            </div>
                        </div>
                        <!-- Personal Effects Shipping -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-box"></i>
                                </div>
                                <h3>Personal Effects Shipping</h3>
                                <p>Penghantaran barang peribadi seperti pakaian, perabot, dan barangan rumah — ideal
                                    untuk pelajar, pekerja berpindah, atau keluarga.</p>
                            </div>
                        </div>
                        <!-- Packing Services -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-box-open"></i>
                                </div>
                                <h3>Packing Services</h3>
                                <p>Kami menyediakan servis pembungkusan profesional menggunakan bahan berkualiti tinggi
                                    untuk menjamin keselamatan barangan sepanjang proses penghantaran.</p>
                            </div>
                        </div>
                        <!-- House Removal Services -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-home"></i>
                                </div>
                                <h3>House Removal Services</h3>
                                <p>Servis pemindahan rumah yang menyeluruh termasuk pembungkusan, pengangkutan dan susun
                                    atur barangan di lokasi baru — cepat, kemas dan tanpa stres.</p>
                            </div>
                        </div>
                        <!-- In-Land Transport -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <h3>In-Land Transport (Pengangkutan Darat)</h3>
                                <p>Penghantaran darat menggunakan lori & trak ke seluruh Semenanjung, Sabah dan Sarawak.
                                    Sesuai untuk muatan kecil hingga besar.</p>
                            </div>
                        </div>
                        <!-- Sea Freight -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-water"></i>
                                </div>
                                <h3>Sea Freight (Penghantaran Laut)</h3>
                                <p>Penghantaran barangan secara LCL atau FCL melalui laut ke destinasi dalam & luar
                                    negara. Kos efektif untuk penghantaran skala besar.</p>
                            </div>
                        </div>
                        <!-- Air Freight -->
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-plane"></i>
                                </div>
                                <h3>Air Freight (Penghantaran Udara)</h3>
                                <p>Penghantaran pantas ke seluruh dunia melalui udara untuk barangan sensitif masa atau
                                    bernilai tinggi. Termasuk urusan kastam & tracking penuh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-section py-5" id="proses" data-aos="fade-up">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title d-inline-block">Proses Penghantaran Kami</h2>
                    <p class="lead">Langkah-langkah Mudah & Selamat untuk Penghantaran Kenderaan Anda</p>
                </div>
                <div class="process-timeline">
                    <div class="row g-4">
                        <!-- Step 1 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="process-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="process-icon">
                                    <i class="fas fa-file-alt"></i>
                                    <span class="step-number">1</span>
                                </div>
                                <h3>Permohonan & Dokumen</h3>
                                <ul class="process-details">
                                    <li>Isi borang permohonan</li>
                                    <li>Sediakan dokumen kenderaan</li>
                                    <li>Pilih pakej penghantaran</li>
                                    <li>Terima sebut harga</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="process-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span class="step-number">2</span>
                                </div>
                                <h3>Pemeriksaan & Persediaan</h3>
                                <ul class="process-details">
                                    <li>Pemeriksaan kenderaan</li>
                                    <li>Dokumentasi lengkap</li>
                                    <li>Pembungkusan khas</li>
                                    <li>Pemantauan GPS</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="process-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="process-icon">
                                    <i class="fas fa-ship"></i>
                                    <span class="step-number">3</span>
                                </div>
                                <h3>Penghantaran & Transit</h3>
                                <ul class="process-details">
                                    <li>Loading ke kapal RoRo</li>
                                    <li>Pemantauan 24/7</li>
                                    <li>Insurans komprehensif</li>
                                    <li>Kemaskini status</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="process-card" data-aos="fade-up" data-aos-delay="400">
                                <div class="process-icon">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="step-number">4</span>
                                </div>
                                <h3>Penyerahan & Selesai</h3>
                                <ul class="process-details">
                                    <li>Unloading di destinasi</li>
                                    <li>Pemeriksaan akhir</li>
                                    <li>Penyerahan kenderaan</li>
                                    <li>Dokumen lengkap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#hubungi" class="cta-button">Mulakan Proses Penghantaran</a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section py-5 bg-primary text-white" data-aos="fade-up">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-truck fa-3x mb-3"></i>
                            <h2 class="counter" data-count="23570">0</h2>
                            <p>Kenderaan Berjaya Dihantar</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                            <h2 class="counter" data-count="8">0</h2>
                            <p>Bandar Diliputi di Malaysia</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-smile fa-3x mb-3"></i>
                            <h2><span class="counter" data-count="100">0</span><span class="counter-symbol">%</span>
                            </h2>
                            <p>Pelanggan Berpuas Hati</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-star fa-3x mb-3"></i>
                            <h2 class="counter" data-count="5">0</h2>
                            <p>Rating Purata dari Pelanggan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-us-section py-5" data-aos="fade-up">
            <div class="container">
                <h2 class="text-center mb-5">Mengapa Memilih Kami?</h2>
                <p class="text-center lead mb-5">Kami Menawarkan Perkhidmatan Penghantaran Kenderaan Terbaik di Malaysia
                </p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="why-us-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Keselamatan Terjamin</h3>
                            <p>Insurans komprehensif dan sistem pemantauan GPS 24/7 untuk memastikan kenderaan anda
                                selamat sepanjang perjalanan</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="why-us-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Penghantaran Pantas</h3>
                            <p>Rangkaian logistik yang efisien dan pasukan profesional kami memastikan penghantaran
                                tepat pada masanya</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="why-us-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h3>Harga Terbaik</h3>
                            <p>Harga yang kompetitif dengan nilai perkhidmatan premium dan tiada kos tersembunyi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coverage Section -->
        <section class="coverage-section py-5 bg-light" data-aos="fade-up">
            <div class="container">
                <h2 class="text-center mb-5">Liputan Perkhidmatan Kami</h2>
                <p class="text-center lead mb-5">Menghubungkan Anda ke Seluruh Malaysia</p>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="coverage-map">
                            <img src="assets/images/map.png" alt="Malaysia Coverage Map" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="coverage-list">
                            <h3>Destinasi Popular Kami</h3>
                            <p class="lead mb-4">Penghantaran ke bandar-bandar utama di Malaysia</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check-circle text-primary"></i> Kuala Lumpur - Ibu Negara
                                        </li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Shah Alam - Bandar Industri
                                        </li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Klang - Pelabuhan Utama
                                        </li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Petaling Jaya - Bandar
                                            Moden</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check-circle text-primary"></i> Kota Kinabalu - Ibu Negeri
                                            Sabah</li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Kuching - Ibu Negeri
                                            Sarawak</li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Sandakan - Bandar
                                            Pelancongan</li>
                                        <li><i class="fas fa-check-circle text-primary"></i> Miri - Bandar Minyak</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section py-5" data-aos="fade-up">
            <div class="container">
                <h2 class="text-center mb-5">Soalan-Soalan Lazim</h2>
                <p class="text-center lead mb-5">Jawapan kepada Persoalan Anda</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1">
                                        Berapa lama masa yang diperlukan untuk penghantaran?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Untuk penghantaran ke Sabah/Sarawak, kami menawarkan tempoh penghantaran yang
                                        pantas antara 5-10 hari bekerja. Kami akan sentiasa memaklumkan status
                                        penghantaran anda secara berkala melalui WhatsApp atau SMS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2">
                                        Apakah dokumen yang diperlukan untuk penghantaran?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Untuk memastikan proses penghantaran yang lancar, kami memerlukan dokumen
                                        berikut:
                                        <ul>
                                            <li>Kad Pemilikan Kenderaan (Geran) - Asal</li>
                                            <li>Kad Pengenalan Pemilik - Salinan</li>
                                            <li>Surat Pelepasan Bank (jika masih dalam pembiayaan) - Asal</li>
                                            <li>Lesen Memandu - Salinan</li>
                                        </ul>
                                        Pasukan kami akan membantu anda menyediakan semua dokumen yang diperlukan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3">
                                        Bagaimana dengan insurans semasa penghantaran?
                                    </button>
                                </h3>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Ya, setiap kenderaan yang dihantar melalui kami dilindungi oleh insurans
                                        komprehensif. Kami menawarkan pelbagai pilihan insurans mengikut pakej yang
                                        dipilih, termasuk:
                                        <ul>
                                            <li>Insurans Asas - Perlindungan standard</li>
                                            <li>Insurans Komprehensif - Perlindungan menyeluruh</li>
                                            <li>Insurans Premium - Perlindungan tambahan untuk kenderaan mewah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="hubungi" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <h2 class="text-center mb-4">Dapatkan Sebut Harga PERCUMA</h2>
                            <p class="text-center lead mb-4">Isi borang di bawah untuk sebut harga terbaik</p>
                            <form id="quoteForm" onsubmit="sendWhatsApp(event)">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Penuh Anda"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Alamat Emel Anda" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="tel" class="form-control" id="phone"
                                            placeholder="Nombor WhatsApp Anda" required pattern="[0-9]{10,12}"
                                            title="Sila masukkan nombor telefon yang sah (10-12 digit)">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-control" id="destination" required>
                                            <option value="">Pilih Destinasi Penghantaran</option>
                                            <option value="sabah">Sabah</option>
                                            <option value="sarawak">Sarawak</option>
                                            <option value="semenanjung">Semenanjung</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="vehicleInfo" rows="4"
                                        placeholder="Maklumat Penghantaran" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="cta-button">
                                        <i class="fab fa-whatsapp me-2"></i>Hantar melalui WhatsApp
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <!-- <section class="gallery-section py-5" data-aos="fade-up">
            <div class="container">
                <h2 class="text-center mb-4">Galeri Penghantaran Kami</h2>
                <p class="text-center lead mb-5">Lihat Proses Penghantaran Kenderaan Kami yang Profesional</p>
                <div class="swiper gallerySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/828d471f-e246-47de-a9c3-d34ddb43f3bb.jpg"
                                    alt="Penghantaran Kenderaan RoRo" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Penghantaran RoRo ke Sabah</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/7cef8d4f-4129-4ada-8a66-ecbf6497f772.jpg"
                                    alt="Proses Loading Kenderaan" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Proses Loading yang Selamat</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/d3b955c9-979a-4cd9-b6a1-4cba2ea347e7.jpg"
                                    alt="Penghantaran ke Sarawak" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Penghantaran ke Sarawak</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/214bdf0b-221a-488e-b5f7-dc8b527586a4.jpg"
                                    alt="Kenderaan di Pelabuhan" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Kenderaan di Pelabuhan</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/085b30cc-041e-4854-b7ad-7964074e8919.jpg"
                                    alt="Proses Pemeriksaan" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Pemeriksaan Kenderaan</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/6d52ae56-1c00-4246-89a6-22df2cb4e3b1.jpg"
                                    alt="Penghantaran Kontena" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Penghantaran Kontena</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/21cb634b-bb01-409f-9c27-d49d5c8389c0.jpg"
                                    alt="Kenderaan di Kapal" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Kenderaan di Kapal</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/aaf164d2-d9c0-4aa6-af71-60aa61f38165.jpg"
                                    alt="Proses Unloading" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Proses Unloading</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/5601baf0-cca3-4881-8416-662eeb032f47.jpg"
                                    alt="Penghantaran Selesai" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Penghantaran Selesai</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <img src="assets/gambar/semarak_unggul/SEMARAK UNGGUL/fe0d94f7-af71-45d0-a0a1-a40ca1c23131.jpg"
                                    alt="Kenderaan di Destinasi" class="gallery-img">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <span class="gallery-caption">Kenderaan di Destinasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section> -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <h5>Servis Penghantaran Kenderaan Malaysia</h5>
                        <p>Perkhidmatan penghantaran kenderaan profesional dan boleh dipercayai ke seluruh Malaysia
                            dengan jaminan keselamatan dan ketepatan masa</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/profile.php?id=61565856747220&mibextid=wwXIfr&rdid=kB9RzfBuzqyB2YUK&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15uTJT9veo%2F%3Fmibextid%3DwwXIfr"
                                target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/semarakunggulroro?igsh=a2JyODN6MHo2cXNn" target="_blank"
                                title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/60178891035" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.tiktok.com/@semarakunggulroro" target="_blank" title="TikTok"><i
                                    class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h5>Pautan Pantas</h5>
                        <div class="footer-links">
                            <a href="#utama">Halaman Utama</a>
                            <a href="#servis">Perkhidmatan Kami</a>
                            <a href="#proses">Proses Penghantaran</a>
                            <a href="#hubungi">Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h5>Hubungi Kami</h5>
                        <div class="contact-details">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="contact-item mb-3">
                                        <i class="fas fa-phone-alt me-2"></i>
                                        <span>+60 18-329 2985</span>
                                        <small class="text-muted d-block ms-4">(24/7 Hotline)</small>
                                    </div>
                                    <div class="contact-item mb-3">
                                        <i class="fas fa-phone-alt me-2"></i>
                                        <span>+60 12-682 1515</span>
                                    </div>
                                    <div class="contact-item mb-3">
                                        <i class="fas fa-phone-alt me-2"></i>
                                        <span>+60 17-889 1035</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-item mb-3">
                                        <i class="fas fa-phone-alt me-2"></i>
                                        <span>+60 18-908 7995</span>
                                    </div>

                                    <div class="contact-item">
                                        <i class="fas fa-envelope me-2"></i>
                                        <span>info@servispenghantaran.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <span>
                                        No. 204A (Tingkat 1),<br>
                                        Persiaran Pegaga,<br>
                                        Taman Bayu Perdana,<br>
                                        41200 Klang,<br>
                                        Selangor Darul Ehsan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; 2025 Semarak Unggul Services. Hak Cipta Terpelihara.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Insert back-to-top button before footer -->
        <a id="backToTop" href="#" class="back-to-top btn btn-primary"><i class="fas fa-chevron-up"></i></a>

        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- AOS JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init({ once: true, duration: 800 });
            const backToTopBtn = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 400) {
                    backToTopBtn.classList.add('show');
                } else {
                    backToTopBtn.classList.remove('show');
                }
            });
            backToTopBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Counter Animation
            function animateCounter(element) {
                const target = parseFloat(element.getAttribute('data-count'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        // Remove decimal places for all numbers
                        element.textContent = Math.round(target).toString();
                        clearInterval(timer);
                    } else {
                        // Remove decimal places during animation
                        element.textContent = Math.round(current).toString();
                    }
                }, 16);
            }

            // Initialize counters when they come into view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.counter');
                        counters.forEach(counter => animateCounter(counter));
                        observer.unobserve(entry.target);
                    }
                });
            });

            document.querySelectorAll('.stats-section').forEach(section => {
                observer.observe(section);
            });
        </script>

        <!-- Add this before closing body tag -->
        <a href="https://wa.me/60178891035" class="whatsapp-float" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Add this before closing body tag -->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script>
            const gallerySwiper = new Swiper('.gallerySwiper', {
                effect: 'creative',
                creativeEffect: {
                    prev: {
                        translate: ['-100%', 0, -1],
                        opacity: 0
                    },
                    next: {
                        translate: ['100%', 0, 0],
                        opacity: 0
                    },
                },
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
            });

            // Add click event for lightbox effect
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', function () {
                    const imgSrc = this.querySelector('img').src;
                    const lightbox = document.createElement('div');
                    lightbox.className = 'lightbox';
                    lightbox.innerHTML = `
                    <div class="lightbox-content">
                        <img src="${imgSrc}" alt="Gallery Image">
                        <button class="lightbox-close">&times;</button>
                    </div>
                `;
                    document.body.appendChild(lightbox);
                    document.body.style.overflow = 'hidden';

                    lightbox.querySelector('.lightbox-close').addEventListener('click', () => {
                        lightbox.remove();
                        document.body.style.overflow = '';
                    });

                    lightbox.addEventListener('click', (e) => {
                        if (e.target === lightbox) {
                            lightbox.remove();
                            document.body.style.overflow = '';
                        }
                    });
                });
            });
        </script>

        <!-- Add lightbox styles -->
        <style>
            .lightbox {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                padding: 20px;
            }

            .lightbox-content {
                position: relative;
                max-width: 90%;
                max-height: 90vh;
                background: black;
            }

            .lightbox-content img {
                max-width: 100%;
                max-height: 90vh;
                object-fit: contain;
                border-radius: 8px;
            }

            .lightbox-close {
                position: absolute;
                top: -40px;
                right: 0;
                background: none;
                border: none;
                color: white;
                font-size: 30px;
                cursor: pointer;
                padding: 5px;
            }

            .lightbox-close:hover {
                color: var(--primary-color);
            }
        </style>

        <!-- Add this before closing body tag -->
        <script>
            function sendWhatsApp(event) {
                event.preventDefault();

                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const destination = document.getElementById('destination').value;
                const vehicleInfo = document.getElementById('vehicleInfo').value;

                // Format the message
                const message = `*Permintaan Sebut Harga Baru*%0A%0A` +
                    `*Nama:* ${name}%0A` +
                    `*Emel:* ${email}%0A` +
                    `*Nombor WhatsApp:* ${phone}%0A` +
                    `*Destinasi:* ${destination}%0A` +
                    `*Maklumat Penghantaran:*%0A${vehicleInfo}%0A%0A` +
                    `Sila berikan sebut harga untuk penghantaran ini.`;

                // WhatsApp number
                const whatsappNumber = '60178891035';

                // Check if user is on a mobile device (using a simple user agent check)
                const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

                // If on mobile, open wa.me (WhatsApp app) else open WhatsApp Web (web.whatsapp.com)
                const whatsappUrl = isMobile
                    ? `https://wa.me/${whatsappNumber}?text=${message}`
                    : `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${message}`;

                // Open the link in a new tab
                window.open(whatsappUrl, '_blank');

                // Optional: Reset form
                document.getElementById('quoteForm').reset();

                // Optional: Show success message
                alert('Terima kasih! Sila lengkapkan permintaan anda melalui WhatsApp.');
            }

            // Add phone number formatting
            document.getElementById('phone').addEventListener('input', function (e) {
                // Remove any non-digit characters
                let value = e.target.value.replace(/\D/g, '');

                // Limit to 12 digits
                if (value.length > 12) {
                    value = value.slice(0, 12);
                }

                // Update input value
                e.target.value = value;
            });
        </script>

        <!-- Add this script before the closing body tag -->
        <script>
            // Initialize About Section Swiper
            const aboutSwiper = new Swiper('.aboutSwiper', {
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>

        <!-- Add this script before the closing body tag -->
        <script>
            // Initialize Services Swiper
            const servicesSwiper = new Swiper('.servicesSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        </script>

        <!-- Add this before closing body tag -->
        <script>
            // Global variables
            let allMedia = [];
            let currentLightboxIndex = 0;
            let mediaModal = null;

            // Function to initialize the gallery
            async function initializeGallery() {
                try {
                    // Wait for DOM to be fully loaded
                    if (document.readyState === 'loading') {
                        await new Promise(resolve => document.addEventListener('DOMContentLoaded', resolve));
                    }

                    // Wait for Bootstrap to be available
                    let attempts = 0;
                    while (typeof bootstrap === 'undefined' && attempts < 10) {
                        await new Promise(resolve => setTimeout(resolve, 100));
                        attempts++;
                    }

                    if (typeof bootstrap === 'undefined') {
                        console.error('Bootstrap not found after waiting');
                        return;
                    }

                    // Initialize Bootstrap modal
                    const modalElement = document.getElementById('mediaModal');
                    if (modalElement) {
                        try {
                            mediaModal = new bootstrap.Modal(modalElement, {
                                backdrop: true,
                                keyboard: true
                            });
                            console.log('Modal initialized successfully');
                        } catch (modalError) {
                            console.error('Error initializing Bootstrap modal:', modalError);
                        }
                    } else {
                        console.error('Modal element not found in DOM');
                    }

                    // Initialize view all button
                    const viewAllBtn = document.getElementById('viewAllMedia');
                    if (viewAllBtn) {
                        viewAllBtn.addEventListener('click', function () {
                            if (mediaModal) {
                                try {
                                    mediaModal.show();
                                } catch (showError) {
                                    console.error('Error showing modal:', showError);
                                }
                            } else {
                                console.error('Modal not initialized');
                            }
                        });
                    } else {
                        console.error('View all media button not found');
                    }

                    // Load media content
                    await loadMediaGallery();
                } catch (error) {
                    console.error('Error during gallery initialization:', error);
                }
            }

            async function loadMediaGallery() {
                try {
                    const response = await fetch('load_media.php');
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    allMedia = await response.json();

                    // Display initial items in the about section
                    const gallery = document.getElementById('mediaGallery');
                    if (gallery) {
                        displayInitialItems();
                    }

                    // Load all items in the modal
                    const modalGallery = document.getElementById('modalGallery');
                    if (modalGallery) {
                        displayModalItems();
                    }
                } catch (error) {
                    console.error('Error loading media:', error);
                    const gallery = document.getElementById('mediaGallery');
                    if (gallery) {
                        gallery.innerHTML = '<div class="col-12 text-center"><p class="text-danger">Maaf, tidak dapat memuatkan media. Sila cuba sebentar lagi.</p></div>';
                    }
                }
            }

            function displayInitialItems() {
                const gallery = document.getElementById('mediaGallery');
                if (!gallery) return;

                const initialItems = allMedia.slice(0, 6); // Show first 6 items
                gallery.innerHTML = initialItems.map(item => createMediaItem(item)).join('');
                initializeLightbox();
            }

            function displayModalItems() {
                const modalGallery = document.getElementById('modalGallery');
                if (!modalGallery) return;

                modalGallery.innerHTML = allMedia.map(item => createModalItem(item)).join('');
                initializeModalLightbox();
            }

            function createMediaItem(item) {
                return `
                    <div class="col-6 col-md-4">
                        <a href="${item.path}" class="media-item" data-type="${item.type}" data-index="${allMedia.indexOf(item)}">
                            ${item.type === 'video'
                        ? `<video class="img-fluid rounded-3" muted>
                                     <source src="${item.path}" type="video/mp4">
                                   </video>`
                        : `<img src="${item.path}" alt="${item.filename}" class="img-fluid rounded-3">`
                    }
                            <div class="media-overlay">
                                <i class="fas fa-${item.type === 'video' ? 'play' : 'image'}"></i>
                            </div>
                        </a>
                    </div>
                `;
            }

            function createModalItem(item) {
                return `
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="modal-gallery-item" data-type="${item.type}" data-path="${item.path}" data-index="${allMedia.indexOf(item)}">
                            ${item.type === 'video'
                        ? `<video muted>
                                     <source src="${item.path}" type="video/mp4">
                                   </video>`
                        : `<img src="${item.path}" alt="${item.filename}">`
                    }
                            <div class="modal-gallery-overlay">
                                <i class="fas fa-${item.type === 'video' ? 'play' : 'search-plus'}"></i>
                            </div>
                        </div>
                    </div>
                `;
            }

            function initializeLightbox() {
                const items = document.querySelectorAll('.media-item');
                items.forEach(item => {
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        currentLightboxIndex = parseInt(item.dataset.index);
                        showLightbox(currentLightboxIndex);
                    });
                });
            }

            function initializeModalLightbox() {
                const items = document.querySelectorAll('.modal-gallery-item');
                items.forEach(item => {
                    item.addEventListener('click', () => {
                        currentLightboxIndex = parseInt(item.dataset.index);
                        showLightbox(currentLightboxIndex);
                    });
                });
            }

            function showLightbox(index) {
                if (!allMedia[index]) return;

                const item = allMedia[index];
                const lightbox = document.createElement('div');
                lightbox.className = 'media-lightbox';
                lightbox.innerHTML = `
                    <div class="media-lightbox-content">
                        ${item.type === 'video'
                        ? `<video controls autoplay>
                                 <source src="${item.path}" type="video/mp4">
                               </video>`
                        : `<img src="${item.path}" alt="${item.filename}">`
                    }
                        <button class="media-lightbox-close">&times;</button>
                        <div class="media-lightbox-nav">
                            <button class="prev-btn" ${index === 0 ? 'disabled' : ''}>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="next-btn" ${index === allMedia.length - 1 ? 'disabled' : ''}>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                `;

                document.body.appendChild(lightbox);
                document.body.style.overflow = 'hidden';

                // Close button
                const closeBtn = lightbox.querySelector('.media-lightbox-close');
                if (closeBtn) {
                    closeBtn.addEventListener('click', () => {
                        lightbox.remove();
                        document.body.style.overflow = '';
                    });
                }

                // Navigation
                const prevBtn = lightbox.querySelector('.prev-btn');
                const nextBtn = lightbox.querySelector('.next-btn');

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        if (currentLightboxIndex > 0) {
                            currentLightboxIndex--;
                            lightbox.remove();
                            showLightbox(currentLightboxIndex);
                        }
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        if (currentLightboxIndex < allMedia.length - 1) {
                            currentLightboxIndex++;
                            lightbox.remove();
                            showLightbox(currentLightboxIndex);
                        }
                    });
                }

                // Keyboard navigation
                const handleKey = (e) => {
                    if (e.key === 'Escape') {
                        lightbox.remove();
                        document.body.style.overflow = '';
                        document.removeEventListener('keydown', handleKey);
                    } else if (e.key === 'ArrowLeft' && currentLightboxIndex > 0) {
                        currentLightboxIndex--;
                        lightbox.remove();
                        showLightbox(currentLightboxIndex);
                    } else if (e.key === 'ArrowRight' && currentLightboxIndex < allMedia.length - 1) {
                        currentLightboxIndex++;
                        lightbox.remove();
                        showLightbox(currentLightboxIndex);
                    }
                };

                document.addEventListener('keydown', handleKey);

                // Click outside to close
                lightbox.addEventListener('click', (e) => {
                    if (e.target === lightbox) {
                        lightbox.remove();
                        document.body.style.overflow = '';
                    }
                });
            }

            // Initialize everything when the DOM is fully loaded
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initializeGallery);
            } else {
                initializeGallery();
            }
        </script>

        <!-- Make sure Bootstrap JS is loaded -->
        <?php if (!isset($bootstrap_loaded)): ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <?php $bootstrap_loaded = true; ?>
        <?php endif; ?>

        <!-- Media Modal -->
        <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true"
            data-bs-backdrop="true" data-bs-keyboard="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediaModalLabel">Galeri Media</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3" id="modalGallery">
                            <!-- Media items will be loaded here -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>