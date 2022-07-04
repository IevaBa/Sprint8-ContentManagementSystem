<?php 

require_once 'templates/includes/header.php' ?>

<div class="wrapper container mt-5 p-3 shadow bg-light rounded">
    <h4><?php echo $results['article']->title?> -
        <small>posted <?php echo date('j F Y', $results['article']->publicationDate)?></small>
    </h4>
    <p><?php echo $results['article']->content?></p>
    <a class="text-decoration-none text-secondary" href="./">&larr; Back</a>
</div>

<?php 

require_once 'templates/includes/footer.php' ?>