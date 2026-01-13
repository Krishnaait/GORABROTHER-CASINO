<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GORA BROTHERS - Play Free Casino Games Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #fff;
            min-height: 100vh;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 3px solid #d4af37;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #d4af37;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: #d4af37;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            font-size: 14px;
        }

        nav a:hover {
            color: #ffd700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .hero {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(0, 0, 0, 0.8) 100%);
            padding: 80px 40px;
            text-align: center;
            border-bottom: 2px solid #d4af37;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .age-badge {
            display: inline-block;
            background: rgba(255, 0, 0, 0.2);
            border: 2px solid #ff0000;
            color: #ff0000;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 12px;
        }

        .hero h1 {
            font-size: 56px;
            color: #d4af37;
            margin-bottom: 20px;
            text-shadow: 0 0 20px rgba(212, 175, 55, 0.5);
        }

        .hero p {
            font-size: 18px;
            color: #ccc;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, #d4af37 0%, #ffd700 100%);
            color: #1a1a1a;
            padding: 16px 40px;
            border: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(212, 175, 55, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: #d4af37;
            padding: 16px 40px;
            border: 2px solid #d4af37;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: rgba(212, 175, 55, 0.1);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 40px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 44px;
            color: #d4af37;
            margin-bottom: 10px;
            text-shadow: 0 0 15px rgba(212, 175, 55, 0.3);
        }

        .section-title p {
            color: #aaa;
            font-size: 16px;
        }

        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .game-card {
            background: rgba(0, 0, 0, 0.6);
            border: 2px solid #d4af37;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.3);
            border-color: #ffd700;
        }

        .game-card-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2) 0%, rgba(0, 0, 0, 0.8) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            border-bottom: 2px solid #d4af37;
            object-fit: cover;
        }

        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #d4af37;
        }

        .game-card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .game-card h3 {
            color: #ffd700;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .game-card p {
            color: #ccc;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .game-card-footer {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .game-badge {
            background: rgba(212, 175, 55, 0.2);
            color: #d4af37;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-play {
            background: linear-gradient(135deg, #d4af37 0%, #ffd700 100%);
            color: #1a1a1a;
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-left: auto;
        }

        .btn-play:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
        }

        .info-section {
            background: rgba(212, 175, 55, 0.1);
            padding: 40px;
            border-radius: 12px;
            border-left: 4px solid #d4af37;
            margin-bottom: 40px;
        }

        .info-section h3 {
            color: #ffd700;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .info-section p {
            color: #ccc;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        footer {
            background: rgba(0, 0, 0, 0.9);
            border-top: 3px solid #d4af37;
            padding: 40px;
            text-align: center;
            color: #aaa;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            margin: 20px 0;
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #d4af37;
            text-decoration: none;
            font-size: 12px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 12px;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }

            nav {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding: 40px 20px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 14px;
            }

            .container {
                padding: 30px 20px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .games-grid {
                grid-template-columns: 1fr;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="/" class="logo">🎰 GORA BROTHERS</a>
        <nav>
            <a href="/">HOME</a>
            <a href="#games">GAMES</a>
            <a href="/about.html">ABOUT</a>
            <a href="/contact.html">CONTACT</a>
        </nav>
    </header>

    <div class="hero">
        <div class="hero-content">
            <div class="age-badge">⚠️ 18+ ONLY</div>
            <h1>Play For Fun With GORA BROTHERS</h1>
            <p>Experience premium casino gaming with our collection of exciting games. 100% Free, No Real Money, No Registration Required.</p>
            <div class="cta-buttons">
                <button class="btn-primary" onclick="document.getElementById('games').scrollIntoView({behavior: 'smooth'})">PLAY NOW</button>
                <button class="btn-secondary" onclick="window.location.href='/about.html'">LEARN MORE</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-title" id="games">
            <h2>🎮 Featured Games</h2>
            <p>Choose your favorite game and start playing now!</p>
        </div>

        <div class="games-grid">
            <!-- CHASE Racing Game -->
            <div class="game-card">
                <img src="images/chase-game.png" alt="CHASE Racing Game" style="width: 100%; height: 200px; object-fit: cover; border-bottom: 2px solid #d4af37;">
                <div class="game-card-content">
                    <h3>CHASE</h3>
                    <p>Experience futuristic 3D racing with challenging tracks. Navigate obstacles, collect bonuses, and compete for the highest score!</p>
                    <div class="game-card-footer">
                        <span class="game-badge">Racing</span>
                        <a href="/games/chase/wrapper.html" class="btn-play">PLAY NOW</a>
                    </div>
                </div>
            </div>

            <!-- Slot Machine -->
            <div class="game-card">
                <img src="images/roulette-hero.webp" alt="Slot Machine" style="width: 100%; height: 200px; object-fit: cover; border-bottom: 2px solid #d4af37;">
                <div class="game-card-content">
                    <h3>SLOT MACHINE</h3>
                    <p>Classic 3-reel slots with exciting symbols and winning combinations. Spin the reels and watch your winnings grow!</p>
                    <div class="game-card-footer">
                        <span class="game-badge">Slots</span>
                        <a href="/games/slots/wrapper.html" class="btn-play">PLAY NOW</a>
                    </div>
                </div>
            </div>

            <!-- Blackjack -->
            <div class="game-card">
                <img src="images/blackjack-game.webp" alt="Blackjack" style="width: 100%; height: 200px; object-fit: cover; border-bottom: 2px solid #d4af37;">
                <div class="game-card-content">
                    <h3>BLACKJACK</h3>
                    <p>Play the classic card game against our dealer. Use strategy and luck to beat the dealer and win big!</p>
                    <div class="game-card-footer">
                        <span class="game-badge">Cards</span>
                        <a href="/games/blackjack/wrapper.html" class="btn-play">PLAY NOW</a>
                    </div>
                </div>
            </div>

            <!-- Roulette -->
            <div class="game-card">
                <img src="images/lucky-spin-game.webp" alt="Roulette" style="width: 100%; height: 200px; object-fit: cover; border-bottom: 2px solid #d4af37;">
                <div class="game-card-content">
                    <h3>ROULETTE</h3>
                    <p>Authentic casino roulette with 37 numbers. Bet on colors, numbers, or combinations and watch the wheel spin!</p>
                    <div class="game-card-footer">
                        <span class="game-badge">Roulette</span>
                        <a href="/games/lucky-spin/wrapper.html" class="btn-play">PLAY NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>💡 Why Choose GORA BROTHERS?</h3>
            <p>✅ <strong>100% Free-to-Play</strong> - No real money involved, pure entertainment</p>
            <p>✅ <strong>Professional Games</strong> - Authentic casino experience with realistic mechanics</p>
            <p>✅ <strong>Fair & Secure</strong> - All games use certified Random Number Generators (RNG)</p>
            <p>✅ <strong>24/7 Available</strong> - Play anytime, anywhere on any device</p>
            <p>✅ <strong>No Registration</strong> - Start playing immediately without creating an account</p>
        </div>

        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="color: #d4af37; margin-bottom: 20px;">Ready to Start Playing?</h2>
            <button class="btn-primary" onclick="document.getElementById('games').scrollIntoView({behavior: 'smooth'})">EXPLORE GAMES</button>
        </div>
    </div>

    <!-- Professional 4-Column Footer -->
    <footer class="footer-new">
        <div class="footer-container">
            <!-- Column 1: GORA BROTHERS -->
            <div class="footer-column">
                <h3>🎰 GORA BROTHERS</h3>
                <p><strong>Company:</strong> GORA BROTHERS PRIVATE LIMITED</p>
                <p><strong>CIN:</strong> U63030RJ2020PTC068805</p>
                <p><strong>GST:</strong> 08AAICG3022F1ZY</p>
                <p><strong>PAN:</strong> AAICG3022F</p>
            </div>

            <!-- Column 2: LOCATION -->
            <div class="footer-column">
                <h3>📍 LOCATION</h3>
                <p>Jaipur, Rajasthan, India</p>
                <p>Premium Entertainment Experience</p>
                <p>24/7 Support Available</p>
                <p style="margin-top: 15px; font-size: 0.9em; color: #999;">
                    GORA BROTHERS PRIVATE LIMITED<br>
                    Jaipur, Rajasthan 302001, India
                </p>
            </div>

            <!-- Column 3: LEGAL -->
            <div class="footer-column">
                <h3>⚖️ LEGAL</h3>
                <ul>
                    <li><a href="/privacy.html">Privacy Policy</a></li>
                    <li><a href="/terms.html">Terms & Conditions</a></li>
                    <li><a href="/disclaimer.html">Disclaimer</a></li>
                    <li><a href="/responsible.html">Responsible Gaming</a></li>
                    <li><a href="/fair-gaming.html">Fair Gaming Policy</a></li>
                </ul>
            </div>

            <!-- Column 4: GAMES -->
            <div class="footer-column">
                <h3>🎮 GAMES</h3>
                <ul>
                    <li><a href="/games/chase/wrapper.html">CHASE Racing</a></li>
                    <li><a href="/games/slots/wrapper.html">Slot Machine</a></li>
                    <li><a href="/games/blackjack/wrapper.html">Blackjack</a></li>
                    <li><a href="/games/lucky-spin/wrapper.html">Roulette</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-links">
                <a href="/privacy.html">Privacy</a> | 
                <a href="/terms.html">Terms</a> | 
                <a href="/disclaimer.html">Disclaimer</a> | 
                <a href="/responsible.html">Responsible Gaming</a> | 
                <a href="/fair-gaming.html">Fair Gaming</a>
            </div>
            <p class="copyright">© 2025 GORA BROTHERS PRIVATE LIMITED. All Rights Reserved. | Play For Entertainment</p>
            <p class="warning">⚠️ 18+ ONLY | PLAY FOR FUN | NO REAL MONEY<br>This is a free-to-play gaming website for entertainment purposes only</p>
        </div>
    </footer>

    <style>
    .footer-new {
        background: #000;
        color: #fff;
        border-top: 3px solid #d4af37;
        padding: 40px 20px;
        margin-top: 60px;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-column h3 {
        color: #d4af37;
        font-size: 16px;
        margin-bottom: 15px;
        border-bottom: 2px solid #d4af37;
        padding-bottom: 10px;
    }

    .footer-column p {
        font-size: 13px;
        line-height: 1.8;
        color: #ccc;
        margin-bottom: 8px;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 8px;
    }

    .footer-column ul li a {
        color: #d4af37;
        text-decoration: none;
        font-size: 13px;
        transition: color 0.3s;
    }

    .footer-column ul li a:hover {
        color: #ffd700;
        text-decoration: underline;
    }

    .footer-new .footer-bottom {
        border-top: 1px solid #333;
        padding-top: 20px;
        text-align: center;
    }

    .footer-new .footer-links {
        margin-bottom: 15px;
        font-size: 12px;
    }

    .footer-new .footer-links a {
        color: #d4af37;
        text-decoration: none;
        margin: 0 5px;
        transition: color 0.3s;
    }

    .footer-new .footer-links a:hover {
        color: #ffd700;
    }

    .copyright {
        font-size: 12px;
        color: #999;
        margin-bottom: 10px;
    }

    .warning {
        font-size: 11px;
        color: #ff6b00;
        font-weight: bold;
        margin: 0;
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .footer-column h3 {
            font-size: 14px;
        }
        
        .footer-column p,
        .footer-column ul li a {
            font-size: 12px;
        }
    }
    </style>
</body>
</html>
