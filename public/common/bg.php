    <section class='landpage <?= $size ?>' style="background-image: url(public/img/mockup.jpeg)">
		<h1><?= $title ?></h1>
        <p><?= $desc ?></p>
        <?= isset($hire) && $hire == true ? "<a class='toContact' href='contact'>Hire Me</a>" : '' ?>
		<!-- <a class='toHome' href='#welcome'>Down</a> -->
		
	</section>