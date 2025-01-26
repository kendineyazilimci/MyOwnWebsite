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
        <h1>Projelerim:</h1>
        <div class="project1 hidden">
                <h3 class="myBestProject">Mesajlaşma Sitem</h3>
            <p><br>Bu proje, asıl olarak sosyal medya yapmak için yola çıktığım fakat zamanım kısıtlı olduğu için mesajlaşma uygulamasına çevirdiğim projemdir.</p>
             <p><br>Görmek için <a href="projelerim/mesajlasmasitesi" name="codeigniterprojecta" class="codeigniterprojecta" >tıklayınız.</a></p>
        </div>
        <div class="project2 hidden">
            <h3 class="projectPacMan">PacMan Oyunum</h3>
            <p><br>Bu proje, Python dilinde ve PyGame kütüphanesi kullanılarak oluşturulmuş ana menüye ve 1 adet bölüme sahip bir pacman oyunudur.</p>
            <p><br>Görmek için <a href="pacmanproject" name="pacmanprojecta" class="pacmanprojecta" >tıklayınız.</a></p>
        </div>
        <div class="project3 hidden">
            <h3 class="projectCalculator">Hesap Makinesi Projem</h3>
            <p><br>Bu, C# dili kullanarak yaptığım terminal üzerinde çalışan bir hesap makinesi uygulamasıdır. Asıl istediğim alanı bilmediğim zamanlarda deneyim kazanmak için yapmıştım.</p>
            <p><br>Görmek için <a href="calculatorproject" name="calculatorprojecta" class="calculatorprojecta" >tıklayınız.</a></p>
        </div>
        <div class="project4 hidden">
            <h3 class="projectVet">Veteriner Sitem</h3>
            <p><br> Ve başka bir PHP projem de veteriner sitem vardı fakat bilgisayarımı formatlayacağım zaman yedeklemediğim için sitemin kodları silindi. Profesyonel sayılmazdı fakat yine de uğraştığım bir siteydi.</p>
        </div>
        <div class="githubprojects hidden">
            <h3 class="githubProjects">GitHub'ım</h3>
            <p><br>Asıl projelerim bunlar ve şu an gördüğünüz sitemdi fakat yaptığım birkaç tane daha küçük projem var. GitHub üzerinden ulaşabilirsiniz:</p>
            <a href="https://github.com/kendineyazilimci"  class="githubprojecta" ><br>Tıklayınız.</a>
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