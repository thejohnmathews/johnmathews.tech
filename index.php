<!-- index.php: Home page for johnmathews.tech -->
<!-- created 11/19/24 by John Mathews -->

<!DOCTYPE html>
<html lang="en">

    <!-- set page metadata -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>johnmathews.tech</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <!-- contents of page -->
    <body>

        <!-- holds nav bar and important constant info -->
        <header>
            <h1>Hey, I'm John!</h1>
            <nav>
                <a href="index.php" class="active">Home</a>
                <a href="pages/blog.php">Mi vida en España</a>
                <a href="pages/mooc.php">NALCAP MOOC</a>
            </nav>
        </header>

        <!-- information I want to say on the page -->
        <main id="about-page">
            <section id="project-details">
                <h2>Welcome!</h2>
                <p>Hi! I'm John Mathews. This is my personal blog where I share my thoughts on web development, programming, and life in general. Feel free to explore!</p>
                <p>Currently, I am taking some time off before I start my software engineering career. 
                    I am living in Spain while enrolled in the government's NALCAP english assistant program. The 
                    "NALCAP MOOC" tab in the navigation bar is my final project for the program, so enjoy!
                </p>
            </section>

            <section id="resume-section" class="collapsible">
                <h2 onclick="toggleSection('resume-content')">My Resume</h2>
                <div id="resume-content" class="content">
                    <iframe src="../assets/files/resume.pdf" width="100%" height="500px" style="border: none;"></iframe>
                </div>
            </section>

            <script>
                function toggleSection(sectionId) {
                    const section = document.getElementById(sectionId);
                    section.style.display = section.style.display === 'none' ? 'block' : 'none';
                }

                document.addEventListener('DOMContentLoaded', () => {
                    const resumeContent = document.getElementById('resume-content');
                    if (resumeContent) {
                        resumeContent.style.display = 'none';
                    }
                });
            </script>
        </main>

        <!-- contents of footer -->
        <footer>
            <p>&copy; 2024 John Mathews</p>
            <div id="social-media-links">
                <a href="https://www.linkedin.com/in/thejohnmathews" target="_blank" title="LinkedIn">
                    <img src="assets/icons/linkedin.png" alt="LinkedIn Logo" class="social-icon">
                </a>
                <a href="https://github.com/thejohnmathews" target="_blank" title="GitHub">
                    <img src="assets/icons/github.png" alt="GitHub Logo" class="social-icon">
                </a>
                <a href="https://www.instagram.com/john.em" target="_blank" title="Instagram">
                    <img src="assets/icons/instagram.png" alt="Instagram Logo" class="social-icon">
                </a>
            </div>
        </footer>
    </body>
</html>
