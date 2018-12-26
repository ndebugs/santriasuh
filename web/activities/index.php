<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Rumah Santri Indonesia - Program Santri Asuh | Aktivitas</title>

        <?php include('./web/template/links.php') ?>
    </head>

    <body class="d-flex flex-column">
        <header>
            <?php include('./web/template/navigation.php'); ?>

            <nav aria-label="Breadcrumb" class="breadcrumb-container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item active">Aktivitas</li>
                </ol>
            </nav>
        </header>

        <main class="flex-grow-1">
            <div class="container">
                <?php if ($activities) { ?>
                    <section class="my-5">
                        <?php
                        foreach ($activities as $index => $activity) {
                            if ($index) {
                        ?>
                                <hr class="my-5">
                            <?php } ?>
                            
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                                        <img class="img-fluid" src="<?php echo $f->url('/data/public/images/activities/' . ($index + 1) . '.jpg') ?>" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <?php
                                    $category = $activity->getCategory();
                                    if ($category) {
                                    ?>
                                        <span class="badge badge-pill badge-default">
                                            <i class="<?php echo $category->getIconName() ?> pr-2" aria-hidden="true"></i> <?php echo $category->getName() ?>
                                        </span>
                                    <?php } ?>
                                    <h3 class="font-weight-bold mb-3"><strong><?php echo $activity->getTitle() ?></strong></h3>
                                    <p><?php echo $activity->getContent() ?></p>
                                    <p>by <a><strong><?php echo $activity->getCreatorId() ?></strong></a>, <?php echo $activity->getCreationDate() ?></p>
                                    <a class="btn btn-info btn-md">Selengkapnya..</a>
                                </div>
                            </div>
                        <?php } ?>
                    </section>

                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-circle pg-blue justify-content-center">
                            <?php
                            $size = 5;
                            $currentIndex = $pageIndex - (int) ($size / 2);
                            $firstLink = $currentIndex > 1 ? $f->url('/activities?page=1') : null;
                            $prevLink = $pageIndex > 1 ? $f->url('/activities?page=' . ($pageIndex - 1)) : null;
                            ?>
                            <li class="page-item<?php echo $firstLink ? '' : ' disabled' ?>">
                                <a href="<?php echo $firstLink ?>" class="page-link">Pertama</a>
                            </li>
                            <li class="page-item<?php echo $prevLink ? '' : ' disabled' ?>">
                                <a href="<?php echo $prevLink ?>" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Sebelumnya</span>
                                </a>
                            </li>
                            <?php
                            if ($currentIndex < 1) {
                                $currentIndex = 1;
                            }
                            
                            $lastIndex = $currentIndex + $size - 1;
                            $maxIndex = $pageCount;
                            if ($lastIndex > $maxIndex) {
                                $lastIndex = $maxIndex;
                            }
                            
                            for (; $currentIndex <= $lastIndex; $currentIndex++) {
                            ?>
                                <li class="page-item<?php echo $pageIndex == $currentIndex ? ' active' : '' ?>">
                                    <a href="<?php echo $f->url('/activities?page=' . $currentIndex) ?>" class="page-link">
                                        <?php echo $currentIndex ?>
                                    </a>
                                </li>
                            <?php
                            }
                            $lastLink = $lastIndex < $maxIndex ? $f->url('/activities?page=' . $pageCount) : null;
                            $nextLink = $pageIndex < $maxIndex ? $f->url('/activities?page=' . ($pageIndex + 1)) : null;
                            ?>
                            <li class="page-item<?php echo $nextLink ? '' : ' disabled' ?>">
                                <a href="<?php echo $nextLink ?>" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Selanjutnya</span>
                                </a>
                            </li>
                            <li class="page-item<?php echo $lastLink ? '' : ' disabled' ?>">
                                <a href="<?php echo $lastLink ?>" class="page-link">Terakhir</a>
                            </li>
                        </ul>
                    </nav>
                    <?php } else { ?>
                    <div class="row py-5">
                        <div class="col text-center">
                            Aktivitas belum tersedia.
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>

        <?php include('./web/template/footer.php') ?>

        <?php include('./web/template/scripts.php') ?>
    </body>
</html>
