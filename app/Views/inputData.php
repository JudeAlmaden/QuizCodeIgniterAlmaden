<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5 shadow rounded p-5">
    <h2 class="mb-4">Student Information Form</h2>
    <form method="GET" action="<?= base_url('/displayName') ?>">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="studentID" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="studentID" name="studentID" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="mobilePhone" class="form-label">Mobile Phone</label>
                <input type="tel" class="form-control" id="mobilePhone" name="mobilePhone" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="">Select Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary float-right col-12">Submit</button>
    </form>

    <?php if (session()->get('errors')): ?>
    <div class="alert alert-danger mt-3">
        <ul>
            <?php foreach (session()->get('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
