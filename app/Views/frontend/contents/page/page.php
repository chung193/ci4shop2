<?php
   echo view('frontend/component/breadcrum', $test);
?>
<main>
   <div id="shopify-section-template--14488879333435__main" class="shopify-section">
      <div class="create-custom-page">
         <div class="container">
            <h2><?= $page->title ?></h2>
            <?= $page->description ?></br>
            <?= $page->content ?>
         </div>
      </div>
      <div class="fb-comments" data-href="<?= current_url()?>" data-width="" data-numposts="5"></div>
   </div>
</main>