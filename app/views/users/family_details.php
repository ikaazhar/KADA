<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Details</title>
</head>
<body>
    <h1>Family Details</h1>

    <!-- Display Existing Family Details -->
    <?php if (!empty($familyDetails)): ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Relationship</th>
                <th>ID Number</th>
            </tr>
            <?php foreach ($familyDetails as $family): ?>
                <tr>
                    <td><?= htmlspecialchars($family['name']) ?></td>
                    <td><?= htmlspecialchars($family['relationship']) ?></td>
                    <td><?= htmlspecialchars($family['id_number']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No family details found.</p>
    <?php endif; ?>

    <!-- Add Family Details Form -->
    <h2>Add Family Details</h2>
    <form action="/storeFamilyDetails" method="POST">
        <input type="hidden" name="applicant_id" value="<?= htmlspecialchars($applicant_id) ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="relationship">Relationship:</label>
        <input type="text" name="relationship" id="relationship" required><br>

        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number" id="id_number" required><br>

        <button type="submit">Save Details</button>
    </form>
</body>
</html>
