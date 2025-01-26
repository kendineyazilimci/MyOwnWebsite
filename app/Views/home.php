<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Own Website</title>
        <link rel="stylesheet" href="Css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="anasayfadiv">
            <h1 class="hidden">Ozan Güneysu</h1>
            <h2 class="hidden">Software Developer.</h2>
            <p class="merhababenozan hidden">Merhaba, ben Ozan Güneysu.<br> Bandırma Onyedi Eylül 
            üniversitesinde<br>bilgisayar programcılığı okuyorum. <br>Yazılım geliştirme
            alanında projeler<br>üreten bir öğrenci ve geliştiriciyim.<br><br>
            Kendimi sürekli geliştirmeye çalışıyor ve<br>kendi çapımda projeler 
            yapmaya<br>çalışıyorum. Yazılım, teknoloji ve her türlü <br> kişisel gelişim
            alanlarına meraklıyım ve <br> sürekli kendimi geliştirmeye çalışıyorum.</p>
            <p class="projelerimlink hidden"> <a href="projelerim">Projelerime</a> Bakmak <br> İçin Tıklayabilirsiniz.</p>
            <img class="ozanguneysu1image hidden" src="Images/ozanguneysu.png" alt="Ozan Güneysu">
            <img class="tanitimimage hidden" src="Images/tanitim1.png" alt="Tanıtım">
            <img class="pacmanmenüimage hidden" src="Images/pacmanmenü.png" alt="PacMan Menü">
            <img class="pacmanoyunimage hidden" src="Images/pacman.png" alt="PacMan Oyunu">
            <img class="codeigniteranasayfa hidden" src="Images/codeigniteranasayfa.png" alt="PacMan Oyunu">
            <img class="codeignitermesaj1 hidden" src="Images/codeignitermesaj1.png" alt="PacMan Oyunu">
            <img class="codeignitermesaj2 hidden" src="Images/codeignitermesaj2.png" alt="PacMan Oyunu">
            <img class="codeigniteradmin hidden" src="Images/codeigniteradmin.png" alt="PacMan Oyunu">
            <img class="hesapmakinesi hidden" src="Images/hesapmakinesi.png" alt="PacMan Oyunu">
            <img class="github1 hidden" src="Images/github1.png" alt="PacMan Oyunu">
            <img class="github2 hidden" src="Images/github2.png" alt="PacMan Oyunu">
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
                }, { threshold: 0.1 });

                hiddenElements.forEach(el => {
                    observer.observe(el);
                });
            });
        </script>
    </body>
</html>