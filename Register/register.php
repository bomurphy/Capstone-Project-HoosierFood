<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="FirstName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="LastName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Street</label>
                            <input type="text" name="Street" class="form-control">
                        </div>
						<div class="form-group">
                            <label>City</label>
                            <input type="text" name="City" class="form-control">
                        </div>
						<div class="form-group">
                            <label>State</label>
                            <input type="text" name="State" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Zip</label>
                            <input type="text" name="Zip" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="text" name="Email" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
										
						
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>