<?php include "includes/header.php"; ?>
    <!--<h1 class="text-center text-uppercase mt-5 text-warning">This is Home Page</h1>-->
    <div class="carousel slide" data-bs-ride="carousel" id="carouselSlider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/13.jpg" alt="" class="w-100 h-500"/>
            </div>
            <div class="carousel-item">
                <img src="assets/img/9.jpg" alt="" class="w-100 h-500"/>
            </div>
            <div class="carousel-item">
                <img src="assets/img/10.jpg" alt="" class="w-100 h-500"/>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($infos as $info) { ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 20px" class="card-title fw-bold"><?php echo $info['title']; ?> </h3>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 16px"><?php echo substr_replace($info['description'],'...',200); ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="action.php?page=moreDetails&&id=<?php echo $info['id'] ?>" class="btn btn-success float-end">Read more</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header">
                            <h2>Hello Bangladesh</h2>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error iure nostrum quis recusandae. Adipisci cum dignissimos distinctio id, in inventore laboriosam minus necessitatibus nulla officia possimus repellendus, soluta veniam voluptatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Hello BITM</h2>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error iure nostrum quis recusandae. Adipisci cum dignissimos distinctio id, in inventore laboriosam minus necessitatibus nulla officia possimus repellendus, soluta veniam voluptatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Hello BASIS</h2>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error iure nostrum quis recusandae. Adipisci cum dignissimos distinctio id, in inventore laboriosam minus necessitatibus nulla officia possimus repellendus, soluta veniam voluptatibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post) { ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $post['image']; ?>" alt="" class="card-img-top img-fluid h-300" />
                        <div class="card-body">
                            <p style="font-size: 16px"><?php echo substr_replace($post['description'],'...',200); ?></p>
                        </div>
                        <div class="card-footer">
<!--                            <button type="button" class="btn btn-success">Click me</button>-->
                            <a href="action.php?page=postDetails&&id=<?php echo $post['id'] ?>" class="btn btn-outline-success float-end">Click me</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($cards as $card) { ?>
                    <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 20px" class="card-title fw-bold"><?php echo $card['title']; ?> </h3>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 16px"><?php echo substr_replace($card['description'],'...',200); ?></p>
                        </div>
                        <div class="card-footer d-flex">
<!--                            <button type="button" class="btn btn-primary mx-auto">View</button>-->
                            <a href="action.php?page=cardDetails&&id=<?php echo $card['id'] ?>" class="btn btn-outline-primary float-end mx-auto">View</a>
                        </div>
                    </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/1.jpg" alt="" class="img-fluid rounded-start w-100 h-100" />
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium excepturi id laborum veniam. Accusantium alias atque culpa itaque iure! Aperiam delectus illum ipsa laborum, laudantium magnam nobis sit temporibus voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/5.jpg" alt="" class="img-fluid rounded-start w-100 h-100" />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda blanditiis commodi cupiditate dolorem eveniet, impedit libero minima molestiae natus necessitatibus obcaecati quae quasi quia repellat similique, suscipit tenetur velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-group">
                        <div class="card text-bg-danger">
                            <div class="card-header">
                                <h3>Header one</h3>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, blanditiis dignissimos, dolorem doloremque eius eveniet ex explicabo harum ipsam magnam maiores modi nobis quae quas quo rem sint, vel?</p>
                            </div>
                        </div>
                        <div class="card text-bg-success">
                            <div class="card-header">
                                <h3>Header two</h3>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, blanditiis dignissimos, dolorem doloremque eius eveniet ex explicabo harum ipsam magnam maiores modi nobis quae quas quo rem sint, vel?</p>
                            </div>
                        </div>
                        <div class="card text-bg-info">
                            <div class="card-header">
                                <h3>Header three</h3>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, blanditiis dignissimos, dolorem doloremque eius eveniet ex explicabo harum ipsam magnam maiores modi nobis quae quas quo rem sint, vel?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body cb-footer text-center">
                            <h6>CopyrightBy@Shamima_Akther_Rita</h6>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" data-bs-backdrop="static" id="mainModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Hello BITM</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem cumque cupiditate dolorum esse ex exercitationem in ipsum, iusto maiores necessitatibus neque nobis numquam praesentium reiciendis repellat, repellendus sequi velit!</p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-danger" data-bs-dismiss="modal">close</a>
<!--                    <a href="" class="btn btn-success">YO YO</a>-->
                    <a href="action.php?page=moreDetails&&id=<?php echo $info['id'] ?>" class="btn btn-success float-end">YO YO</a>

                </div>
            </div>
        </div>
    </div>

<?php include "includes/footer.php"; ?>

