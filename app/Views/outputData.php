<!-- outputData.php (your view file) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Data</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Student Information</h2>

    <!-- Displaying data in a Bootstrap table -->
    <table class="table table-bordered">
        <tr>
            <th>Student ID</th>
            <td><?= esc($studentID); ?></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><?= esc($firstName); ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?= esc($lastName); ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?= esc($address); ?></td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td><?= esc($birthday); ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= esc($gender); ?></td>
        </tr>
        <tr>
            <th>Mobile Phone</th>
            <td><?= esc($mobilePhone); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= esc($email); ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= esc($status); ?></td>
        </tr>
    </table>

    <a href="/" class="btn btn-primary">Back to Form</a>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
