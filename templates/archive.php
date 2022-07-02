<?php 

require_once 'templates/includes/header.php' ?>

<div
    class="wrapper container d-flex flex-column justify-content-center align-items-center shadow p-3 mt-5 bg-body rounded">
    <h1>Articles Archive</h1>
    <a class="align-self-start text-decoration-none text-secondary fs-5" href="./">&larr; Back to Homepage</a>
    <?php foreach ($results['articles'] as $article ) { ?>
    <div class="card w-100 m-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $article->title?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><small class="fst-italic"> posted -
                    <?php echo date('j F Y', $article->publicationDate)?>
                </small></h6>
            <p class="card-text"><?php echo $article->summary?></p>
            <a class="more-btn d-block me-auto text-decoration-none text-dark text-center"
                href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">More</a>
        </div>

    </div>
    <?php } ?>
    <div class="fs-5 align-self-start">
        <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.
        </p>
        <a class="text-decoration-none text-secondary" href="./">&larr; Back to Homepage</a>
    </div>
</div>

<?php 

require_once 'templates/includes/footer.php' ?>