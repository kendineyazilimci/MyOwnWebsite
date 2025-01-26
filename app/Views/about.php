<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
    <link rel="stylesheet" href="Css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="aboutdiv hidden">
        <h1>Hakkımda</h1>
        <p>
            Merhaba, Ben Ozan Güneysu. 24 Aralık 2004 doğumluyum ve Bandırma Onyedi Eylül Üniversitesi’nde Bilgisayar Programcılığı bölümünde eğitim görüyorum. Teknolojiye ve yazılıma olan ilgim, genç yaşlarımdan itibaren başladı ve bugüne kadar birçok projede kendimi geliştirmeye çalıştım.
            Başta PHP,  HTML, CSS, Python ve C# gibi programlama dilleri ve SQL - NoSQL Veritabanları olmak üzere çeşitli teknolojilerle projeler geliştirdim. Özellikle web uygulamaları üzerine çalışmayı seviyorum. Pac-Man oyunu, veteriner web sitesi ve bir sosyal medya platformu gibi hem yaratıcı hem de öğretici projeler geliştirdim. 
            Pek benim alanım olmasa da Unity platformuna ve game developerlığa da biraz hakimim. Ekstra olarak robotiğe de meraklıyım. Robotik kodlama dersinin projesi olarak Arduino kullanarak bir çizgi izleyen robot yapmıştım ve gayet hızlıydı. Proje planlaması, koordinasyon ve etik değerler üzerine aldığım eğitimler sayesinde uygulama geliştirme süreçlerine daha bilinçli bir şekilde yaklaşabiliyorum.
            Teknolojinin yanı sıra sürekli öğrenmeye ve kendimi geliştirmeye odaklanıyorum ve bu konuda oldukça istekli ve disiplinliyim. İngilizce seviyem B1 düzeyinde ve her geçen gün bunu daha da ilerletmeye çalışıyorum. Ayrıca, özgün fikirler geliştirerek yenilikçi çözümler üretmek en büyük motivasyon kaynağım, sürekli yeni proje olarak ne yapabilirim diye düşünüyorum.
            Bu projelerimin ve hobilerimin yanı sıra linux işletim sistemine de az çok hakimim. Siber güvenlik, ağ güvenliği ve siber saldırı konularında da kendimi geliştirmeye çalışıyorum.
            Bu siteyi, geçmiş projelerimi sergilemek ve ilgi alanlarımı paylaşmak için oluşturduğum bir platform olarak hazırladım. Görüş ve önerilerinizi duymaktan mutluluk duyarım!
    </p>
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