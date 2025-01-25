<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="Css/projects.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="projectsdiv hidden">
        <h1>My Projects</h1>
        <h2>Here are the projects that made by me:</h2>
    </div>
        <div class="project1 hidden">
                <h3 class="myBestProject">My Social Media Project</h3>
            <p><br>This project is I made with HTML, CSS and PHP. It is a simple project that I made for my school project.</p>
            <a href="codeigniterproject" name="codeigniterprojecta" class="codeigniterprojecta" > <br> Click</a>  For See a Project
        </div>
        <div class="project2 hidden">
            <h3 class="projectPacMan">My PacMan Project</h3>
            <p><br>This is a basic game project is I made with Python and using PyGame Library</p>
            <a href="pacmanproject" name="pacmanprojecta" class="pacmanprojecta" > <br> Click</a>  For See a Project
        </div>
        <div class="project3 hidden">
            <h3 class="projectCalculator">My Calculator Project</h3>
            <p><br>I made this project when I first started learning software times. this is a basic calculator project run on the terminal. I made this with C#</p>
            <a href="calculatorproject" name="calculatorprojecta" class="calculatorprojecta" > <br> Click</a>  For See a Project
        </div>
        <div class="project4 hidden">
            <h3 class="githubProjects">My Projects on the Github</h3>
            <p><br> My main projects are done. Here is the so basic projects:</p>
            <a href="githubproject" name="githubprojecta" class="githubprojecta" > <br> Click</a>  For See a Projects
        </div>
        <div class="veteriner hidden">
            <h3>And I make a Veteriner website but i formatted my pc and its gone i cannot show this :(. </h3>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hiddenElements = document.querySelectorAll('.hidden');
            
            const observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            hiddenElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>