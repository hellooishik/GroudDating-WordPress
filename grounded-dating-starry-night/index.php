<?php
/**
 * The main template file for the Starry Night homepage.
 *
 * This file can be copied to front-page.php if you only want the homepage
 * to use the animation and keep other templates for the rest of the site.
 */
?>
<?php
/**
 * The main template file for the Starry Night homepage.
 *
 * Uses header.php and footer.php for standard markup.
 */
get_header();
?>

    <canvas id="canvas-stars"></canvas>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="content-overlay">
            
            <div class="logo-wrapper">
                <div class="logo-heart">♥</div>
            </div>

            <h1>Grounded Dating</h1>
            <p>We set up users on blind dates, matching people based on their availability, sexual orientation and location.</p>
            
            <a href="#" class="cta-btn">Join the next dating revolution</a>
            
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <div class="feature-item fade-in">
                <div class="feature-icon">🌍</div>
                <p>Logipseum</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">💬</div>
                <p>Logipseum</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">⚙️</div>
                <p>Logipseum</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">📍</div>
                <p>Logipseum</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">🔒</div>
                <p>Logipseum</p>
            </div>
        </div>
    </section>

    <!-- No Profiles Section -->
    <section class="no-profiles-section">
        <h2>No profiles. No texting.<br>No Swipes.</h2>
        <p class="tagline">Grounded Dating is – a return to Grounded Dating</p>
        
        <div class="cards-container">
            <div class="card slide-in">
                <div class="card-icon">👥</div>
                <h3>No Profiles</h3>
            </div>
            <div class="card slide-in">
                <div class="card-icon">💬</div>
                <h3>No texting</h3>
            </div>
            <div class="card slide-in">
                <div class="card-icon">👋</div>
                <h3>No Swiping</h3>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="mission-content">
            <h2>Mission</h2>
            <ol class="mission-list">
                <li>Get young people back to real life, meeting people and growing as a person</li>
                <li>Create an app for personal growth through meeting others, not finding the "perfect match"</li>
                <li>End the online dating inequality</li>
                <li>Verify people using the app with proper ID checks</li>
                <li>Encourage meaningful conversations instead of using apps</li>
                <li><strong>So, why not remove these elements and bring back spontaneity through Grounded Dating</strong>
                    <ul>
                        <li><strong>For women:</strong> To get rid of the criminal catfish and criminal subscription<br>The "better than" status isn't what men as they are "the better man" online. A grounded subscription gets rid of that, the IRL connection.</li>
                        <li><strong>For men:</strong> To get dates, and grow their confidence.<br>To get out of the criminal subscription</li>
                    </ul>
                </li>
            </ol>
            
            <div class="mission-buttons">
                <a href="#" class="btn-primary">Get Started Today</a>
                <a href="#" class="btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="mission-image">
            <div class="image-placeholder">📸</div>
        </div>
    </section>

    <script>
        const canvas = document.getElementById('canvas-stars');
        const ctx = canvas.getContext('2d');
        let width, height, stars = [];

        function init() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            stars = [];
            // Create 400 stars for a dense starry effect
            for (let i = 0; i < 400; i++) {
                stars.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    radius: Math.random() * 1.5 + 0.2,
                    vx: (Math.random() - 0.5) * 0.3,
                    vy: (Math.random() - 0.5) * 0.3,
                    alpha: Math.random(),
                    dAlpha: (Math.random() * 0.02) - 0.01
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);
            
            stars.forEach(star => {
                star.alpha += star.dAlpha;
                if(star.alpha <= 0.1 || star.alpha >= 1) {
                    star.dAlpha = -star.dAlpha;
                }

                ctx.beginPath();
                ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${star.alpha})`;
                ctx.fill();
                
                star.x += star.vx;
                star.y += star.vy;

                if (star.x < 0) star.x = width;
                if (star.x > width) star.x = 0;
                if (star.y < 0) star.y = height;
                if (star.y > height) star.y = 0;
            });
            requestAnimationFrame(draw);
        }

        window.addEventListener('resize', init);
        init();
        draw();
    </script>

    <script>
        const canvas = document.getElementById('canvas-stars');
        const ctx = canvas.getContext('2d');
        let width, height, stars = [];

        function init() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            stars = [];
            // Create 400 stars for a dense "flyer-like" starry effect
            for (let i = 0; i < 400; i++) {
                stars.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    radius: Math.random() * 1.5 + 0.2, // vary sizes
                    vx: (Math.random() - 0.5) * 0.3, // slow drift X
                    vy: (Math.random() - 0.5) * 0.3, // slow drift Y
                    alpha: Math.random(),
                    dAlpha: (Math.random() * 0.02) - 0.01 // Twinkle effect
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);
            
            stars.forEach(star => {
                // Twinkle animation
                star.alpha += star.dAlpha;
                if(star.alpha <= 0.1 || star.alpha >= 1) {
                    star.dAlpha = -star.dAlpha;
                }

                ctx.beginPath();
                ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${star.alpha})`;
                ctx.fill();
                
                // Move stars slightly
                star.x += star.vx;
                star.y += star.vy;

                // Loop stars across the screen
                if (star.x < 0) star.x = width;
                if (star.x > width) star.x = 0;
                if (star.y < 0) star.y = height;
                if (star.y > height) star.y = 0;
            });
            requestAnimationFrame(draw);
        }

        window.addEventListener('resize', init);
        init();
        draw();
    </script>

<?php get_footer();
