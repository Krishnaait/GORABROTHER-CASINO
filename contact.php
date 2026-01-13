<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GORA BROTHERS Casino</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .page-header {
            background: linear-gradient(135deg, rgba(0, 255, 0, 0.1) 0%, rgba(255, 255, 0, 0.1) 100%);
            padding: 3rem 0;
            margin-bottom: 3rem;
            border-bottom: 3px solid var(--primary-color);
        }

        .page-header h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            text-shadow: 0 0 20px rgba(0, 255, 0, 0.6);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .page-header p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .contact-info {
            background: rgba(0, 255, 0, 0.05);
            padding: 2rem;
            border-left: 4px solid var(--primary-color);
            border-radius: 5px;
        }

        .contact-info h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            text-transform: uppercase;
        }

        .contact-item {
            margin-bottom: 2rem;
        }

        .contact-item h3 {
            color: var(--accent-color);
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .contact-item p {
            color: var(--text-muted);
            line-height: 1.6;
        }

        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-item a:hover {
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
        }

        .contact-form {
            background: rgba(0, 255, 255, 0.05);
            padding: 2rem;
            border-left: 4px solid var(--secondary-color);
            border-radius: 5px;
        }

        .contact-form h2 {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--primary-color);
            color: var(--text-light);
            border-radius: 5px;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
            background: rgba(0, 0, 0, 0.5);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group button {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--dark-bg);
            border: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.4);
        }

        .form-group button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(0, 255, 0, 0.6);
        }

        .back-link {
            display: inline-block;
            margin-bottom: 2rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
            transform: translateX(-5px);
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">GORA BROTHERS</div>
            <ul class="nav-links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="index.html#games">GAMES</a></li>
                <li><a href="index.html#about">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
            <button class="btn-play" onclick="window.location.href='index.html'">PLAY NOW</button>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>📧 Contact Us</h1>
            <p>Get in touch with our support team. We're here to help!</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <a href="index.html" class="back-link">← Back to Home</a>

        <div class="contact-container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    
                    <div class="contact-item">
                        <h3>📍 Address</h3>
                        <p>
                            House No. 111 Nayaganv, Mojmabad<br>
                            Jaipur, Rajasthan 302001<br>
                            India
                        </p>
                    </div>

                    <div class="contact-item">
                        <h3>📧 Email Support</h3>
                        <p>
                            <a href="mailto:support@gorabrothers.com">support@gorabrothers.com</a><br>
                            <a href="mailto:info@gorabrothers.com">info@gorabrothers.com</a>
                        </p>
                    </div>

                    <div class="contact-item">
                        <h3>🏢 Company Details</h3>
                        <p>
                            <strong>GORA BROTHERS PRIVATE LIMITED</strong><br>
                            CIN: U63030RJ2020PTC068805<br>
                            GST: 08AAICG3022F1ZY<br>
                            PAN: AAICG3022F
                        </p>
                    </div>

                    <div class="contact-item">
                        <h3>⏰ Response Time</h3>
                        <p>
                            We aim to respond to all inquiries within 24-48 hours during business days.
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h2>Send Message</h2>
                    <form method="POST" action="process_contact.php">
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required placeholder="What is this about?">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required placeholder="Tell us how we can help..."></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Additional Information -->
            <div style="background: rgba(0, 255, 0, 0.05); padding: 2rem; border-radius: 5px; border-left: 4px solid var(--primary-color); margin-top: 2rem;">
                <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Frequently Asked Questions</h2>
                <p style="color: var(--text-muted); line-height: 1.8;">
                    <strong>Q: How do I reset my account?</strong><br>
                    A: You can reset your game balance by clicking the "Reset" button in the game interface. Your virtual credits will be restored to the default amount.
                </p>
                <p style="color: var(--text-muted); line-height: 1.8; margin-top: 1rem;">
                    <strong>Q: Are there any age restrictions?</strong><br>
                    A: Yes, you must be at least 18 years old to use GORA BROTHERS. This is a social gaming platform for entertainment purposes only.
                </p>
                <p style="color: var(--text-muted); line-height: 1.8; margin-top: 1rem;">
                    <strong>Q: Is this real money gambling?</strong><br>
                    A: No, GORA BROTHERS is completely free-to-play. All games use virtual credits with no real money involved.
                </p>
                <p style="color: var(--text-muted); line-height: 1.8; margin-top: 1rem;">
                    <strong>Q: How do I report a bug?</strong><br>
                    A: Please contact our support team at support@gorabrothers.com with details about the issue you encountered.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>QUICK LINKS</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#games">Games</a></li>
                        <li><a href="index.html#about">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>LEGAL</h4>
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms & Conditions</a></li>
                        <li><a href="disclaimer.php">Disclaimer</a></li>
                        <li><a href="community.php">Community Rules</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>COMPANY</h4>
                    <p>GORA BROTHERS PRIVATE LIMITED</p>
                    <div class="company-details">
                        <p><strong>CIN:</strong> U63030RJ2020PTC068805</p>
                        <p><strong>GST:</strong> 08AAICG3022F1ZY</p>
                        <p><strong>PAN:</strong> AAICG3022F</p>
                        <p><strong>Address:</strong> House No. 111 Nayaganv, Mojmabad, Jaipur, Rajasthan 302001, India</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>ABOUT</h4>
                    <p>Free social gaming platform providing engaging entertainment with premium casino games. No real money involved.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GORA BROTHERS PRIVATE LIMITED. All rights reserved. | CIN: U63030RJ2020PTC068805</p>
            </div>
        </div>
    </footer>
</body>
</html>
