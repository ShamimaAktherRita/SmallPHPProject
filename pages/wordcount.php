<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center" >Word Count</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row">
                                <label for="startingWords" class="col-md-4">Input Text</label>
                                <div class="col-md-8">
                                    <input type="text" name="starting_words" class="form-control" id="startingWords" placeholder="Enter Words">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="result" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" name="" class="form-control" id="result" placeholder="Result">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="wordcount_btn" class="btn btn-success" value="Get Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
