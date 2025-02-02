<?php
// Initialize variables
$name = '';
$email = '';
$currentStep = 'name'; // Default step is 'name'
$error = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentStep = $_POST['currentStep'] ?? 'name'; // Get current step from the form

    if ($currentStep === 'name') {
        // Validate Name
        $name = $_POST['name'] ?? '';
        if (empty($name)) {
            $error = 'Name is required.';
        } elseif (strlen($name) < 3) {
            $error = 'Name must be at least 3 characters.';
        } else {
            // Move to the next step
            $currentStep = 'email';
        }
    }

    if ($currentStep === 'email') {
        // Validate Email
        $email = $_POST['email'] ?? '';
        if (empty($email)) {
            $error = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email format.';
        } else {
            // All steps completed
            $currentStep = 'complete';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step-by-Step Validation</title>
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <?php if ($currentStep === 'name'): ?>
            <!-- Name Step -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <?php if ($error): ?>
                <span class="error-message"><?php echo $error; ?></span>
            <?php endif; ?>
            <input type="hidden" name="currentStep" value="name">
        <?php elseif ($currentStep === 'email'): ?>
            <!-- Email Step -->
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <?php if ($error): ?>
                <span class="error-message"><?php echo $error; ?></span>
            <?php endif; ?>
            <input type="hidden" name="currentStep" value="email">
        <?php elseif ($currentStep === 'complete'): ?>
            <!-- Completion Step -->
            <p>Form submitted successfully!</p>
        <?php endif; ?>
        <br><br>
        <?php if ($currentStep !== 'complete'): ?>
            <button type="submit">Next</button>
        <?php endif; ?>
    </form>
</body>
</html>
