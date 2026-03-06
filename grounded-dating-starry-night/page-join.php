<?php
/**
 * Template Name: Join Form
 * Description: Custom join form page with starry night theme
 * Template Post Type: page
 */
get_header();
?>

    <canvas id="canvas-stars"></canvas>

    <!-- Join Form Section -->
    <section class="join-section">
        <div class="join-container">
            <div class="join-form-wrapper">
                <h1>Join Grounded Dating</h1>
                <p class="join-subtitle">Start your journey to meaningful connections</p>

                <form class="join-form" id="join-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth *</label>
                            <input type="date" id="dob" name="date_of_birth" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="interested-in">Who are you open to meeting? *</label>
                            <select id="interested-in" name="interested_in" required>
                                <option value="">Select preference</option>
                                <option value="male">Males</option>
                                <option value="female">Females</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="availability">Availability & Preferred Venue *</label>
                            <textarea id="availability" name="availability" rows="4" placeholder="Tell us when you're available and where you'd like to meet..." required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="referral">Referral or Invitation Code</label>
                            <input type="text" id="referral" name="referral_code">
                        </div>
                    </div>

                    <div class="form-group checkbox full-width">
                        <input type="checkbox" id="privacy-consent" name="privacy_consent" required>
                        <label for="privacy-consent">I agree to the <a href="#privacy-policy">Privacy Policy</a> and consent to the processing of my data as described *</label>
                    </div>

                    <div class="form-group checkbox full-width">
                        <input type="checkbox" id="special-category-consent" name="special_category_consent" required>
                        <label for="special-category-consent">I consent to the processing of special category data (sexual orientation) for matchmaking purposes *</label>
                    </div>

                    <button type="submit" class="form-submit-btn">Join Now</button>
                    <p class="form-note">All fields marked with * are required</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Section -->
    <section id="privacy-policy" class="privacy-section">
        <div class="privacy-container">
            <h2>Privacy Policy</h2>
            
            <div class="privacy-content">
                <div class="privacy-header">
                    <h3>Grounded Connections Ltd</h3>
                    <p><strong>Last updated:</strong> 18 February 2026</p>
                </div>

                <div class="privacy-sections">
                    <div class="privacy-item">
                        <h4>Who We Are</h4>
                        <p>Grounded Connections Ltd ("Grounded Dating", "we", "us", "our") is a UK-based company providing curated, in-person blind date introductions.</p>
                        <p>We are the data controller for the personal information you provide to us.</p>
                        <p><strong>Contact:</strong> Email: <a href="mailto:hello@groundeddating.com">hello@groundeddating.com</a></p>
                    </div>

                    <div class="privacy-item">
                        <h4>What Information We Collect</h4>
                        <p>When you sign up or interact with us, we may collect:</p>
                        <ul>
                            <li>Full name</li>
                            <li>Date of birth</li>
                            <li>Email address</li>
                            <li>Phone number</li>
                            <li>Gender</li>
                            <li>Who you are open to meeting</li>
                            <li>Availability and preferred social venue</li>
                            <li>Referral or invitation code</li>
                            <li>Communications with us</li>
                        </ul>
                        <p>We may also conduct identity verification prior to confirming a date. ID verification is handled securely and is not retained longer than necessary.</p>
                        <p>Certain information you provide — specifically information about who you are open to meeting — may reveal sexual orientation. Under UK GDPR, this is classified as special category data.</p>
                        <p>We only collect and process special category data where it is strictly necessary to provide our matchmaking service and where you have given explicit consent.</p>
                        <p>Where identity verification is required prior to confirming a date, ID checks are conducted securely. We do not retain copies of identity documents longer than necessary for verification purposes.</p>
                        <p>We do not knowingly collect personal data from individuals under the age of 18.</p>
                        <p>We do not collect payment details through unsecured forms.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Special Category Data</h4>
                        <p>Information about who you are open to meeting may reveal sexual orientation. This is considered special category data under UK GDPR.</p>
                        <p>We process this information only for the purpose of providing matchmaking services and only with your explicit consent.</p>
                        <p>You may withdraw your consent at any time by contacting us.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>How We Use Your Information</h4>
                        <p>We use your information to:</p>
                        <ul>
                            <li>Verify your identity</li>
                            <li>Assess suitability for curated introductions</li>
                            <li>Match you based on availability and venue preference</li>
                            <li>Communicate with you about your date</li>
                            <li>Maintain safety and trust standards</li>
                            <li>Improve our service</li>
                        </ul>
                        <p>We do not sell your personal data.</p>
                        <p>We do not use automated decision-making that produces legal or similarly significant effects.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Lawful Basis for Processing</h4>
                        <p>We process your personal data under the following lawful bases:</p>
                        <ul>
                            <li><strong>Contract</strong> — to provide the dating introduction service you request.</li>
                            <li><strong>Legitimate Interests</strong> — to operate, improve and safeguard our service.</li>
                            <li><strong>Explicit Consent</strong> — for processing special category data (such as sexual orientation).</li>
                        </ul>
                    </div>

                    <div class="privacy-item">
                        <h4>Data Sharing</h4>
                        <p>We do not publicly share your personal information.</p>
                        <p>We may share limited information with:</p>
                        <ul>
                            <li>A matched date (first name only prior to meeting, unless otherwise agreed)</li>
                            <li>Partner venues (name for booking purposes only)</li>
                            <li>Professional service providers (e.g. hosting, secure data storage)</li>
                        </ul>
                        <p>All service providers are required to handle your data securely and in accordance with UK data protection law.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Data Retention</h4>
                        <p>We will retain personal information for as long as necessary to provide our services, and where required for legal compliance, dispute resolution, community safety and fraud prevention. Inactive user data may be retained for up to 6 years for these purposes.</p>
                        <p>You may request deletion of your data at any time.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Data Security</h4>
                        <p>We take appropriate technical and organisational measures to protect your information, including:</p>
                        <ul>
                            <li>Secure cloud storage</li>
                            <li>Restricted access controls</li>
                            <li>Two-factor authentication where available</li>
                        </ul>
                        <p>However, no system can guarantee absolute security.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Your Rights</h4>
                        <p>Under UK GDPR, you have the right to:</p>
                        <ul>
                            <li>Access your personal data</li>
                            <li>Correct inaccurate data</li>
                            <li>Request deletion</li>
                            <li>Restrict processing</li>
                            <li>Withdraw consent</li>
                            <li>Lodge a complaint with the Information Commissioner's Office (ICO)</li>
                        </ul>
                        <p><strong>ICO website:</strong> <a href="https://ico.org.uk" target="_blank">ico.org.uk</a></p>
                    </div>

                    <div class="privacy-item">
                        <h4>Marketing Communications</h4>
                        <p>We will only send marketing communications where you have opted in, used the form groundeddate.com or where permitted by law.</p>
                        <p>You may unsubscribe at any time.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Changes to This Policy</h4>
                        <p>We may update this Privacy Policy from time to time. The latest version will always be available on our website.</p>
                    </div>

                    <div class="privacy-item">
                        <h4>Community & Promotional Communications</h4>
                        <p>If you choose to subscribe to our community updates or join our offline community mailing list (including where promoted Nadia Aghios' YouTube channel or events), we will collect your email address for the purpose of sending:</p>
                        <ul>
                            <li>Updates about Grounded Dating</li>
                            <li>Event announcements</li>
                            <li>Community news</li>
                            <li>Related content and initiatives</li>
                        </ul>
                        <p>We will only send promotional or marketing communications where you have provided clear consent to receive them.</p>
                        <p>You can withdraw your consent and unsubscribe at any time by clicking the unsubscribe link in our emails or by contacting us directly.</p>
                        <p>We do not sell or share your email address for third-party marketing.</p>
                    </div>
                </div>
            </div>
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

        // Form submission
        document.getElementById('join-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for joining! We will be in touch soon.');
            this.reset();
        });
    </script>

<?php get_footer();
