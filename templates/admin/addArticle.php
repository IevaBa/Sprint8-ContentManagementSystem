<?php require_once

'templates/includes/header.php' ?>

<div class="wrapper">
    <h2 class="py-4 text-center">Create New Article</h2>
    <div class="container w-75 d-flex justify-content-center align-items-center shadow bg-light rounded py-4">
        <form action="admin.php?action=<?php echo $results['formAction']?>" method="POST" autocomplete="off">
            <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>" />
            <?php if ( isset( $results['errorMessage'] ) ) { ?>
            <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
            <?php } ?>
            <div class="d-flex justify-content-between my-2">
                <input class="p-1" type="text" name="title" placeholder="Title of the article" maxlength="255" required>
                <div>
                    <label for="publicationDate">Publication Date</label>
                    <input class="p-2 ms-2" type="date" name="publicationDate" placeholder="YYYY-MM-DD" required
                        maxlength="10"
                        value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
                </div>
            </div>
            <div class="mt-3">
                <textarea class="p-1" rows="5" cols="80" name="summary" maxlength="1000" required
                    placeholder="Brief description of the article"></textarea>
            </div>
            <div class="mt-3">
                <textarea class="p-1" rows="10" cols="80" name="content" maxlength="100000" required
                    placeholder="Main content of the article"></textarea>
            </div>
            <input type="submit" name="saveChanges" class="btn btn-primary mt-3" value="Submit">
            <input type="submit" class="btn btn-secondary ml-2 mt-3 ms-2" formnovalidate name="cancel" value="Cancel" />
        </form>
    </div>
</div>

<?php require_once 

'templates/includes/footer.php' ?>