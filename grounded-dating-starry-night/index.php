<?php
/**
 * Main Template - Starry Night Theme
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
            
            <a href="<?php echo home_url('/join'); ?>" class="cta-btn">Join the next dating revolution</a>
            
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <div class="feature-item fade-in">
                <div class="feature-icon">🌍</div>
                <p>Verified Profiles</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">💬</div>
                <p>Real Conversations</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">⚙️</div>
                <p>Smart Matching</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">📍</div>
                <p>Location Based</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">🔒</div>
                <p>Secure & Private</p>
            </div>
        </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
        <h2>Our Core Pillars</h2>
        <p class="pillars-subtitle">What sets us apart</p>
        
        <div class="pillars-container">
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">👥</div>
                <h3>No Profiles</h3>
                <p>We believe in genuine human connection, not digital personas. Meet real people, not curated profiles.</p>
            </div>
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">💬</div>
                <h3>No Texting</h3>
                <p>Skip the endless messaging. Have meaningful conversations face-to-face where real chemistry happens.</p>
            </div>
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">👋</div>
                <h3>No Swiping</h3>
                <p>Forget the superficial left-right game. Curated introductions based on compatibility and values.</p>
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
                <a href="<?php echo home_url('/join'); ?>" class="btn-primary">Get Started Today</a>
                <a href="#blog" class="btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="mission-image">
            <div class="image-placeholder">📸</div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <h2>Popular Articles</h2>
        <p class="blog-subtitle">Latest insights from Grounded Dating</p>
        
        <div class="blog-container">
            <article class="blog-card blog-fade-in">
                <div class="blog-image">📝</div>
                <div class="blog-content">
                    <h3>Why In-Person Dating Works Better</h3>
                    <p class="blog-meta">March 5, 2026</p>
                    <p>Discover the science behind face-to-face connections and why they lead to more meaningful relationships.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">💭</div>
                <div class="blog-content">
                    <h3>The Impact of Digital Dating</h3>
                    <p class="blog-meta">February 28, 2026</p>
                    <p>Exploring how apps have changed dating culture and why people are seeking alternatives for authentic connections.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">❤️</div>
                <div class="blog-content">
                    <h3>Finding Your Perfect Match IRL</h3>
                    <p class="blog-meta">February 20, 2026</p>
                    <p>Learn how Grounded Dating uses intelligent matching to find compatible partners in your area.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">⭐</div>
                <div class="blog-content">
                    <h3>Success Stories: Love in the Real World</h3>
                    <p class="blog-meta">February 15, 2026</p>
                    <p>Read inspiring stories from couples who found each other through Grounded Dating and built lasting relationships.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">💡</div>
                <div class="blog-content">
                    <h3>Dating Tips for the Modern Age</h3>
                    <p class="blog-meta">February 10, 2026</p>
                    <p>Practical advice on how to navigate the dating world and make genuine connections with intention.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">🎯</div>
                <div class="blog-content">
                    <h3>Our Mission for Real Connections</h3>
                    <p class="blog-meta">February 5, 2026</p>
                    <p>Understand why we created Grounded Dating and how it's revolutionizing the way people meet.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>
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

<?php get_footer();
