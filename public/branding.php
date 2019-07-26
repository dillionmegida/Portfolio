<?php
$file = 'logo2.png';
$title = 'DEEESIGNS STUDIOS | Branding - Dillion Megida';
$active = '';
require 'public/common/headTag.php';
require 'public/common/nav.php';

?>

    <header class="breadcrumb">
        <a href="gallery" title="Gallery page">Gallery</a> - Branding
    </header>
    <p>Click for more details</p>
    <section id='branding' style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px;">

    </section>

    <script>
        let brandingDiv = document.getElementById('branding');
        let brands = [
            'branding_shidah'
        ];
        brands.forEach(brand => {
            brandingDiv.innerHTML += `
            <div class='galleryLg'>
                <a href='branding_${brands.indexOf(brand) + 1 }' title='Branding Image'>
                <img src='public/img/gallery/${brand}.jpeg' alt='Branding Picture'></a>
            </div>
            `;
        })
    </script>
    <?php require 'public/common/sub-footer.php' ?>

<?php require 'public/common/footer.php' ?>