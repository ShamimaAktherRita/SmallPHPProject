<?php include "includes/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>

            <div class="col-md-4 mb-2">
                <div class="card h-100">
                    <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="card-img-top h-300" />
                    <div class="card-body">
                        <h3 style="font-size: 20px" class="fw-bold"><?php echo $blog['title']; ?> </h3>
                      <!--  <p style="font-size: 16px"><?php //echo substr($blog['description'],0,200); ?></p>-->
                        <p style="font-size: 16px"><?php echo substr_replace($blog['description'],'...',200); ?></p>
                        <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-success float-end">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php include "includes/footer.php"?>
