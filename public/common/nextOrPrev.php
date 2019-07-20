<?php
    if($page == 'blog') {
?>
<!-- For Blog -->
<a
    <?php
        // To check if there is a preblog
        if($previousBlog == '') {
    ?>
    style='opacity: .6; cursor: poititle='No previous article'>Previous Article</a> |
    <?php
        } else {
    ?>
href='<?= $previousBlog ?>' title='Previous article'>Previous Article</a> |
    <?php } ?>
<a 
    <?php
        // To check if there is a next blog
        if($nextBlog == '') {
    ?>
    style='opacity: .6; cursor: pointer' title='No next article'>Next Article</a>
    <?php
        } else { 
    ?>
href='<?= $nextBlog ?>' title='Next article'>Next Article</a>
    <?php } ?>  
<?php 
    }

    else if($page = 'branding') {

?>

                 

<!-- For branding -->
<a
     <?php
        // To check if there is no previous page
        if(isset($previousBrand) && $previousBrand == '') {
    ?>
    style='opacity: .6; cursor: pointer' title='This is the first brand'>Previous Brand</a> |
    <?php
        } else {
    ?>
    href='<?= $previousBrand ?>' title='Previous Brand'>Previous Brand</a> |
    <?php } ?>
<a 
    <?php
        // To check if there is no next page
        if(isset($nextBrand) && $nextBrand == '') {
    ?>
    style='opacity: .6; cursor: pointer' title='This is the last brand'>Next Brand</a>
    <?php
        } else { 
    ?>
    href='<?= $nextBrand ?>' title='Next Brand'>Next Brand</a>
    <?php } ?>
<?php } ?>