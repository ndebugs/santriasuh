<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>Rumah Santri Indonesia - Program Santri Asuh | <?php echo $activity->getTitle() ?></title>
        
        <?php include('./web/template/links.php'); ?>
    </head>

    <body class="d-flex flex-column grey lighten-3">
        <header>
            <?php include('./web/template/navigation.php'); ?>
            <nav aria-label="Breadcrumb" class="breadcrumb-container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo $f->url('/activities') ?>">
                            Aktivitas
                        </a>
                    </li>
                    <li class="breadcrumb-item active"><?php echo $activity->getTitle() ?></li>
                </ol>
            </nav>
        </header>
        <main class="flex-grow-1">
            <div class="container pb-5">
                <?php
                $category = $activity->getCategory();
                if ($category) {
                ?>
                    <span class="badge badge-default px-2 mr-2">
                        <i class="<?php echo $category->getIconName() ?> pr-2" aria-hidden="true"></i> <?php echo $category->getName() ?>
                    </span>
                <?php } ?>
                <h2 class="h2-responsive text-center mb-5"><?php echo $activity->getTitle() ?></h2>
                <p>oleh <a><strong><?php echo $activity->getCreatorId() ?></strong></a>, <?php echo $activity->getCreationDate() ?></p>
                <figure class="figure">
                    <img src="<?php echo $f->url('/data/public/images/activities/' . ((($activity->getId() - 1) % 5) + 1) . '.jpg') ?>" class="figure-img img-fluid z-depth-1" alt="...">
                </figure>
                <div class="mb-4"><?php echo $activity->getContent() ?></div>
            </div>
        </main>
        
        <?php include('./web/template/footer.php') ?>
        
        <?php include('./web/template/scripts.php') ?>
    </body>

</html>