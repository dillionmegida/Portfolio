<?php

$title = 'DEEESIGNS STUDIOS | Branding';
$active = 'portfolio';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>

    <header class="breadcrumb">
        <a href="portfolio">Portfolio</a> - Branding
    </header>

    <section id='branding' style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px;">

    </section>

    <script>
        let brandingDiv = document.getElementById('branding');
        let brands = [
            'branding_shidah',
            'branding_vee-essence'
        ];
        brands.forEach(brand => {
            brandingDiv.innerHTML += `
            <div class='portfolioLg'>
                <a href='branding${brands.indexOf(brand) + 1}'><img src='public/img/portfolio/${brand}.jpg'></a>
            </div>
            `;
        })
    </script>

<?php require 'public/common/footer.php' ?>