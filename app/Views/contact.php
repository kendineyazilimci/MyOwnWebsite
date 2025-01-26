<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="Css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="contactdiv hidden">
        <h1>Hoşgeldiniz. <br> Mail Üzerinden Bana Ulaşmak İçin:</h1>
    </div>
    <img src="Images/person.png" class="personimage hidden" style="max-width: 100%; height: auto;">
    <a href="mailto:ozanguneysu6@gmail.com" class="maila hidden">ozanguneysu6@gmail.com</a>
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