<?php
require_once '../php/session_check.php';

$currentUser = getCurrentUser();
$username = $currentUser['username'];
$fullname = $currentUser['fullname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - University of Mindanao</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" type="image/png" href="https://placeholder-image-service.onrender.com/image/32x32?prompt=University%20logo%20with%20academic%20shield%20and%20book&amp;id=bd623b2b-bd5e-4815-835a-a486e9082440">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>

    <!-- Enhanced Header Section - Maroon, Gold, White Theme -->
    <header class="header">
        <div class="container">
            <a href="dashboard.php" class="logo">
                <img src="../images/um_logo.jpg" alt="University of Mindanao Logo">
                University of Mindanao
            </a>

            <nav class="navbar">
                <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a href="#schedule-section"><i class="fas fa-calendar-alt"></i> Schedule</a>
                <a href="#events-section"><i class="fas fa-trophy"></i> Events</a>
                <a href="#contact-section"><i class="fas fa-envelope"></i> Contact</a>
                <a href="../php/logout.php" style="color: #ab2e22;"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <div class="main-content">

        <!-- Hero Section -->
        <div class="home">
            <section class="center">
                <div class="home-content">
                    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                    <h3>Get Ready for Intramurals 2025!</h3>
                    <div class="home-stats">
                        <div class="stat-box">
                            <div class="stat-number">3</div>
                            <div>Days of Competition</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">15+</div>
                            <div>Sports Events</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">500+</div>
                            <div>Participants Expected</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Intramurals Schedule Section -->
        <section id="schedule-section" class="schedule container">
            <h1 class="heading">Intramurals Schedule - 3 Days of Competition</h1>

            <div class="box-container">
                <!-- Day 1 -->
                <div class="box">
                    <div class="admin">
                        <h3>1</h3>
                        <div>
                            <p>Day One - Opening Ceremony</p>
                            <span>October 15, 2025</span>
                        </div>
                    </div>

                    <div class="price"><i class="fas fa-clock"></i><span>8:00 AM - 5:00 PM</span></div>
                    <h3 class="name">Opening Day Events</h3>
                    <p class="location"><i class="fas fa-map-marker-alt"></i><span>Main Sports Complex</span></p>
                    <div class="flex">
                        <p><i class="fas fa-flag"></i><span>Opening Ceremony</span></p>
                        <p><i class="fas fa-basketball-ball"></i><span>Basketball Preliminaries</span></p>
                        <p><i class="fas fa-volleyball-ball"></i><span>Volleyball Matches</span></p>
                        <p><i class="fas fa-running"></i><span>Track & Field Events</span></p>
                        <p><i class="fas fa-trophy"></i><span>Team Presentations</span></p>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="box">
                    <div class="admin">
                        <h3>2</h3>
                        <div>
                            <p>Day Two - Main Competitions</p>
                            <span>October 16, 2025</span>
                        </div>
                    </div>

                    <div class="price"><i class="fas fa-clock"></i><span>7:00 AM - 6:00 PM</span></div>
                    <h3 class="name">Championship Rounds</h3>
                    <p class="location"><i class="fas fa-map-marker-alt"></i><span>Multiple Venues</span></p>
                    <div class="flex">
                        <p><i class="fas fa-medal"></i><span>Semi-Finals</span></p>
                        <p><i class="fas fa-swimmer"></i><span>Swimming Competition</span></p>
                        <p><i class="fas fa-table-tennis"></i><span>Table Tennis Finals</span></p>
                        <p><i class="fas fa-futbol"></i><span>Football Matches</span></p>
                        <p><i class="fas fa-chess"></i><span>Chess Tournament</span></p>
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="box">
                    <div class="admin">
                        <h3>3</h3>
                        <div>
                            <p>Day Three - Finals & Closing</p>
                            <span>October 17, 2025</span>
                        </div>
                    </div>

                    <div class="price"><i class="fas fa-clock"></i><span>8:00 AM - 7:00 PM</span></div>
                    <h3 class="name">Finals & Awards Ceremony</h3>
                    <p class="location"><i class="fas fa-map-marker-alt"></i><span>University Gymnasium</span></p>
                    <div class="flex">
                        <p><i class="fas fa-crown"></i><span>Championship Finals</span></p>
                        <p><i class="fas fa-award"></i><span>Awards Ceremony</span></p>
                        <p><i class="fas fa-music"></i><span>Cultural Performances</span></p>
                        <p><i class="fas fa-camera"></i><span>Photo Sessions</span></p>
                        <p><i class="fas fa-party-horn"></i><span>Closing Celebration</span></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: 2rem; text-align:center; width: 100%; display: flex; justify-content: center;">
                <button class="inline-btn" onclick="openScheduleModal()"><i class="fas fa-calendar-check"></i> View Complete Schedule</button>
            </div>
        </section>

        <!-- Campus Life Section -->
        <div style="background-color: #fff; padding: 50px 0;">
            <section id="events-section" class="events container">
                <div class="events-content">
                    <h1 class="heading">Events</h1>
                </div>

                <div class="box-container">
                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Basketball%20ball%20and%20hoop%20icon&amp;id=basketball-icon" alt="Basketball icon">
                        <h3>Basketball</h3>
                        <p>Experience intense basketball action with preliminaries on Day 1 and championship rounds throughout the tournament. Teams compete in fast-paced matches showcasing skill, teamwork, and athletic excellence.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Volleyball%20ball%20and%20net%20icon&amp;id=volleyball-icon" alt="Volleyball icon">
                        <h3>Volleyball</h3>
                        <p>Join the exciting volleyball matches starting on Day 1. Watch teams spike, set, and serve their way to victory in this dynamic sport that combines strategy, timing, and explosive athleticism.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Swimming%20pool%20and%20swimmer%20icon&amp;id=swimming-icon" alt="Swimming icon">
                        <h3>Swimming</h3>
                        <p>Dive into competitive swimming events on Day 2. Athletes will compete in various strokes and distances, showcasing speed, endurance, and technique in the pool competitions.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Track%20and%20field%20running%20icon&amp;id=track-field-icon" alt="Track and field icon">
                        <h3>Track & Field</h3>
                        <p>Witness amazing athletic performances in track & field events on Day 1. From sprints to distance runs, jumping events to throwing competitions, athletes push their limits for glory.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Football%20soccer%20ball%20icon&amp;id=football-icon" alt="Football icon">
                        <h3>Football</h3>
                        <p>Experience thrilling football matches on Day 2. Teams battle it out on the field with skillful plays, strategic formations, and passionate competition for the championship title.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Table%20tennis%20paddle%20and%20ball%20icon&amp;id=table-tennis-icon" alt="Table tennis icon">
                        <h3>Table Tennis</h3>
                        <p>Watch lightning-fast table tennis finals on Day 2. Players demonstrate incredible reflexes, precision, and agility in this fast-paced sport that demands quick thinking and excellent hand-eye coordination.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Chess%20board%20and%20pieces%20icon&amp;id=chess-icon" alt="Chess icon">
                        <h3>Chess</h3>
                        <p>Strategic minds compete in the chess tournament on Day 2. This mental sport challenges players' tactical thinking, planning abilities, and psychological endurance in intellectual competition.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Awards%20ceremony%20trophy%20icon&amp;id=awards-icon" alt="Awards ceremony icon">
                        <h3>Awards Ceremony</h3>
                        <p>Celebrate champions and participants in the grand awards ceremony on Day 3. Honor outstanding performances, team spirit, and sportsmanship in this culminating celebration of athletic achievement.</p>
                    </div>

                    <div class="box">
                        <img src="https://placeholder-image-service.onrender.com/image/100x100?prompt=Cultural%20performance%20music%20dance%20icon&amp;id=cultural-icon" alt="Cultural performance icon">
                        <h3>Cultural Performances</h3>
                        <p>Enjoy vibrant cultural performances on Day 3. Experience music, dance, and artistic expressions that celebrate the diverse talents and cultural heritage of our university community.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Full Schedule Modal -->
        <div id="scheduleModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2><i class="fas fa-calendar-alt"></i> Complete Intramurals Schedule 2025</h2>
                    <span class="close" onclick="closeScheduleModal()">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="schedule-grid">
                        <div class="day-schedule">
                            <h3><i class="fas fa-calendar-day"></i> Day 1 - October 15, 2025</h3>
                            <div class="time-slot">
                                <span class="time">7:00 AM - 8:00 AM</span>
                                <span class="event">Registration & Check-in</span>
                                <span class="venue">Main Entrance</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">8:00 AM - 9:00 AM</span>
                                <span class="event">Opening Ceremony</span>
                                <span class="venue">Main Sports Complex</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">9:00 AM - 12:00 PM</span>
                                <span class="event">Basketball Preliminaries</span>
                                <span class="venue">Basketball Courts 1-3</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">9:00 AM - 12:00 PM</span>
                                <span class="event">Volleyball Matches</span>
                                <span class="venue">Volleyball Courts A-B</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">1:00 PM - 4:00 PM</span>
                                <span class="event">Track & Field Events</span>
                                <span class="venue">Athletic Track</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">4:00 PM - 5:00 PM</span>
                                <span class="event">Team Presentations</span>
                                <span class="venue">Main Stage</span>
                            </div>
                        </div>

                        <div class="day-schedule">
                            <h3><i class="fas fa-calendar-day"></i> Day 2 - October 16, 2025</h3>
                            <div class="time-slot">
                                <span class="time">7:00 AM - 8:00 AM</span>
                                <span class="event">Morning Warm-up</span>
                                <span class="venue">All Venues</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">8:00 AM - 11:00 AM</span>
                                <span class="event">Swimming Competition</span>
                                <span class="venue">University Pool</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">8:00 AM - 12:00 PM</span>
                                <span class="event">Basketball Semi-Finals</span>
                                <span class="venue">Basketball Courts 1-2</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">11:00 AM - 2:00 PM</span>
                                <span class="event">Table Tennis Finals</span>
                                <span class="venue">Gymnasium Hall A</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">2:00 PM - 5:00 PM</span>
                                <span class="event">Football Matches</span>
                                <span class="venue">Football Field</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">3:00 PM - 6:00 PM</span>
                                <span class="event">Chess Tournament</span>
                                <span class="venue">Library Hall</span>
                            </div>
                        </div>

                        <div class="day-schedule">
                            <h3><i class="fas fa-calendar-day"></i> Day 3 - October 17, 2025</h3>
                            <div class="time-slot">
                                <span class="time">8:00 AM - 9:00 AM</span>
                                <span class="event">Final Preparations</span>
                                <span class="venue">All Venues</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">9:00 AM - 12:00 PM</span>
                                <span class="event">Championship Finals</span>
                                <span class="venue">Main Sports Complex</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">12:00 PM - 1:00 PM</span>
                                <span class="event">Lunch Break</span>
                                <span class="venue">Cafeteria</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">1:00 PM - 3:00 PM</span>
                                <span class="event">Cultural Performances</span>
                                <span class="venue">Main Stage</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">3:00 PM - 4:00 PM</span>
                                <span class="event">Photo Sessions</span>
                                <span class="venue">Various Locations</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">4:00 PM - 6:00 PM</span>
                                <span class="event">Awards Ceremony</span>
                                <span class="venue">University Gymnasium</span>
                            </div>
                            <div class="time-slot">
                                <span class="time">6:00 PM - 7:00 PM</span>
                                <span class="event">Closing Celebration</span>
                                <span class="venue">Main Sports Complex</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Footer Section - Maroon, Gold, White Theme -->
        <footer id="contact-section" class="footer">
            <div class="container">
                <div class="box">
                    <h3><i class="fas fa-graduation-cap"></i> University of Mindanao</h3>
                    <p>Excellence in education since 1890. We prepare students for leadership through innovative teaching, groundbreaking research, and global engagement that transforms communities and shapes the future.</p>
                    <div class="share">
                        <a href="https://www.facebook.com/uniminofficial/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/UMindanao_" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/universityofmindanao/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://au.linkedin.com/school/university-of-mindanao/" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UCAXq0GXoLfWY2zB_p_O3ALQ" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>


                <div class="box">
                    <h3><i class="fas fa-address-book"></i> Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Davao City 8000, Davao del Sur, Philippines</p>
                    <p><i class="fas fa-phone"></i> +63 (082) 227 5456 - Bolton Campus</p>
                    <p><i class="fas fa-phone"></i> +63 (082) 305 0645 - Matina Campus</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 8:00 AM - 6:00 PM</p>
                </div>



                <div class="credit">
                    <p>© 2025 University of Mindanao. All rights reserved. |
                        <a href="#">Accreditation</a> |
                        <a href="#">Privacy Policy</a> |
                        <a href="#">Terms of Use</a> |
                        <a href="#">Accessibility</a>
                    </p>
                </div>
        </footer>

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            // Modal functionality
            function openScheduleModal() {
                document.getElementById('scheduleModal').style.display = 'block';
            }

            function closeScheduleModal() {
                document.getElementById('scheduleModal').style.display = 'none';
            }

            // Close modal when clicking outside of it
            window.onclick = function(event) {
                var modal = document.getElementById('scheduleModal');
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }

            // Mobile menu toggle
            document.getElementById('menu-btn').onclick = () => {
                document.querySelector('.navbar').classList.toggle('active');
            }

            // Program save functionality
            document.querySelectorAll('.save').forEach(button => {
                button.onclick = (e) => {
                    e.preventDefault();
                    const heartIcon = button.querySelector('i');

                    if (heartIcon.classList.contains('far')) {
                        heartIcon.classList.replace('far', 'fas');
                        heartIcon.style.color = '#640f0f';
                        alert('Program added to your favorites!');
                    } else {
                        heartIcon.classList.replace('fas', 'far');
                        heartIcon.style.color = '';
                        alert('Program removed from favorites!');
                    }
                };
            });

            // Newsletter form submission
            document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('.email').value;
                if (email) {
                    alert('Thank you for subscribing! You will receive our latest updates at ' + email);
                    this.reset();
                }
            });

            // Smooth scroll for footer links
            document.querySelectorAll('.footer a[href^="#"]').forEach(anchor => {
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
        </script>

</body>

</html>