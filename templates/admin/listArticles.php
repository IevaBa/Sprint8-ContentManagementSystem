<?php 

require_once 'templates/includes/header.php' ?>

<p class="p-3 fs-5">You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>.
    <a href="admin.php?action=logout" ?>Log out</a>
</p>
<div
    class="wrapper container d-flex flex-column align-items-center justify-content-center shadow p-3 pt-4 bg-body rounded">

    <?php if ( isset( $results['errorMessage'] ) ) { ?>
    <div class="errorMessage pb-3 text-danger fw-bold"><?php echo $results['errorMessage'] ?></div>
    <?php } ?>

    <?php if ( isset( $results['statusMessage'] ) ) { ?>
    <div class="statusMessage pb-3 text-success fw-bold"><?php echo $results['statusMessage'] ?></div>
    <?php } ?>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Article</th>
                <th>Publication Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody> <?php foreach ($results['articles'] as $article) { ?>
            <tr>
                <td class="articles-id">
                    <?php echo $article->id;?>
                </td>
                <td>
                    <?php echo $article->title?>
                </td>
                <td>
                    <?php echo date('j M Y', $article->publicationDate)?>
                </td>
                <td>
                    <a href="admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>"><span
                            class="fa fa-pencil mx-3"></span></a>
                    <a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $article->id ?>"
                        onclick="return confirm('Are you sure you want to delete this Article?')"><span
                            class="fa fa-trash mx-2"></span></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="fs-5 mb-2 me-auto">
        <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.
        </p>
        <a class="btn btn-success" href="admin.php?action=newArticle">Add New Article</a>
    </div>
</div>

<?php 

require_once 'templates/includes/footer.php' ?>