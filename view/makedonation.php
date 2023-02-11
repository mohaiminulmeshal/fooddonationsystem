<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khabar Khuji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Insert Donation Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="makedonation" enctype="multipart/form-data" method="post">
                            <div class="from-group mb-3">
                                <label for="">Donor_ID</label>
                                <input type="text" name="User_ID" class="form-control" />
                            </div>

                            <div class="from-group mb-3">
                                <label for="">Item</label>
                                <select name="Item" class="form-control">
                                    <option value="">--Select Type of Food--</option>
                                    <option value="Bread & Grains">Bread & Grains</option>
                                    <option value="Vegetables">Vegetables</option>
                                    <option value="Fruits">Fruits</option>
                                    <option value="Dairy">Dairy</option>
                                </select>
                            </div>

                            <div class="from-group mb-3">
                                <label for="">Item Picture</label>
                                <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" />
                            </div>

                            <div class="from-group mb-3">
                                <label for="">Amount</label>
                                <input type="text" style="padding-top: 14px; padding-left:14px;padding-right:14px; padding-bottom:14px ;text-align:center" name="Amount" placeholder="Type food amount in KG/L" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Preferred NGO</label>
                                <select name="NGO_Name" class="form-control">
                                    <option value="">--Select Your Preferred NGO--</option>
                                    <option value="Power">Power</option>
                                    <option value="Cube">Cube</option>
                                    <option value="AIDA">AIDA</option>
                                    <option value="Vision">Vision</option>
                                </select>
                            </div>
        
                            <div class="from-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="Address" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Confirm Donation</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



<?php echo $content; ?>




    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

