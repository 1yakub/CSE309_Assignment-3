<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Information</h2>
                <p>Company Email: company@example.com</p>
                <p>Phone: 123-456-7890</p>
                <p>Address: 123 Main St, City</p>
            </div>
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form action="process_form.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
