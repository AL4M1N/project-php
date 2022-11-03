<?php
include 'includes/header.php';
?>

<!--<section class="">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <h2 class="text-center text-info">Full Name</h2>-->
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
                        <h3 class="text-center">Get Full Name</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row align-items-center">
                                <label for="firstName" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="row align-items-center mt-2">
                                <label for="lastName" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="row align-items-center mt-2">
                                <label for="fullName" class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" name="" class="form-control" id="fullName" placeholder="Submit the form to get results" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="full_name_btn" value="Get Full Name" class="btn btn-info">
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