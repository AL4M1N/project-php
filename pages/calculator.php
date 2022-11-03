<?php
include 'includes/header.php';
?>

<!--<section class="py-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <h2 class="text-center text-info">Calculator</h2>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row align-items-center">
                                    <label for="firstNumber" class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_number" class="form-control" id="firstNumber" placeholder="Enter First Number">
                                    </div>
                                </div>
                                <div class="row align-items-center mt-2">
                                    <label for="lastNumber" class="col-md-4">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_number" class="form-control" id="lastNumber" placeholder="Enter Last Number">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Actions</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="actions" value="+"> + </label>
                                        <label for="" class="ms-5"><input type="radio" name="actions" value="-"> - </label>
                                        <label for="" class="ms-5"><input type="radio" name="actions" value="*"> * </label>
                                        <label for="" class="ms-5"><input type="radio" name="actions" value="/"> / </label>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-2">
                                    <label for="result" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" name="" class="form-control" id="fullName" placeholder="Submit the form to get results" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="calculate_btn" value="Calculate" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php';
?>