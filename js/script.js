// GORA BROTHERS CASINO - Main JavaScript File

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
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

// Play Now button functionality
document.querySelectorAll('.btn-play, .btn-play-large, .btn-play-game').forEach(button => {
    button.addEventListener('click', function() {
        const gameCard = this.closest('.game-card');
        if (gameCard) {
            const gameName = gameCard.querySelector('h3').textContent;
            playGame(gameName);
        } else {
            // Hero section play button
            showGameSelection();
        }
    });
});

// Game selection modal
function showGameSelection() {
    alert('Please select a game from the Featured Games section to play!');
}

// Play specific game
function playGame(gameName) {
    let gameUrl = '';
    
    switch(gameName.toLowerCase()) {
        case 'chase':
            gameUrl = 'games/chase/index.html';
            break;
        case 'slot machine':
            gameUrl = 'games/slots/index.html';
            break;
        case 'blackjack':
            gameUrl = 'games/blackjack/index.html';
            break;
        case 'lucky spin':
            gameUrl = 'games/slots/index.html';
            break;
        default:
            alert('Game not found!');
            return;
    }
    
    // Open game in new window or navigate
    window.location.href = gameUrl;
}

// Animate elements on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe game cards and feature cards
document.querySelectorAll('.game-card, .feature-card, .step').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'all 0.5s ease';
    observer.observe(el);
});

// Add active state to navigation links based on scroll position
window.addEventListener('scroll', function() {
    let current = '';
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });
    
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.style.color = '#00ff00';
            link.style.textShadow = '0 0 10px rgba(0, 255, 0, 0.8)';
        } else {
            link.style.color = '#ffffff';
            link.style.textShadow = 'none';
        }
    });
});

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('GORA BROTHERS Casino loaded successfully!');
    
    // Add any additional initialization here
    initializeAnimations();
});

// Initialize animations
function initializeAnimations() {
    // Add animation classes to elements
    const gameCards = document.querySelectorAll('.game-card');
    gameCards.forEach((card, index) => {
        card.style.animationDelay = (index * 0.1) + 's';
    });
}

// Prevent right-click on game images (optional)
document.querySelectorAll('.game-image img').forEach(img => {
    img.addEventListener('contextmenu', function(e) {
        // Allow right-click, just log it
        console.log('Image context menu');
    });
});
