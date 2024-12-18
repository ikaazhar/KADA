<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Family Details</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Family Details</h1>

        <!-- Display Existing Family Details -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Existing Family Details</h5>
            </div>
            <div class="card-body">
                <?php if (!empty($familyDetails)): ?>
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Relationship</th>
                                <th>ID Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($familyDetails as $family): ?>
                                <tr>
                                    <td><?= htmlspecialchars($family['name']) ?></td>
                                    <td><?= htmlspecialchars($family['relationship']) ?></td>
                                    <td><?= htmlspecialchars($family['id_number']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-danger">No family details found.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Add Family Details Form -->
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Add Family Details</h5>
            </div>
            <div class="card-body">
                <form action="/storeFamilyDetails" method="POST">
                    <input type="hidden" name="applicant_id" value="<?= htmlspecialchars($applicant_id) ?>">
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="relationship" class="form-label">Relationship</label>
                        <input type="text" name="relationship" id="relationship" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_number" class="form-label">ID Number</label>
                        <input type="text" name="id_number" id="id_number" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Save Details</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
