<?php
// Retrieve form data from POST request
$firstname = $_POST['firstname'] ?? 'Not Provided';
$middlename = $_POST['middlename'] ?? 'Not Provided';
$lastname = $_POST['lastname'] ?? 'Not Provided';
$birthdate = $_POST['birthdate'] ?? 'Not Provided';
$email = $_POST['email'] ?? 'Not Provided';
$country_code = $_POST['country_code'] ?? 'Not Provided';
$phone_number = $_POST['phone_number'] ?? 'Not Provided';
$sex = $_POST['sex'] ?? 'Not Provided';
$program = $_POST['program'] ?? 'Not Provided';
$address = $_POST['address'] ?? 'Not Provided';

// Create an associative array to map program codes to names
$programs = [
    'BSA' => 'BS Accountancy',
    'BSBA' => 'BS Business Administration',
    'BSEE' => 'BS Electronics Engineering',
    'BSIT' => 'BS Information Technology',
    'BSCS' => 'BS Computer Science'
];

// Determine background color based on sex
$background_color = $sex === 'male' ? 'blue' : ($sex === 'female' ? 'red' : 'transparent');
?>
   
<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
    <style>
        body {
            background-color: LightSkyBlue;
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: #f9f9f9;
            border-radius: 5px;
        }
        th, td {
            padding: 1em;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .highlight {
            color: white;
            padding: 0.5em;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Registration Summary</h1>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td class="highlight" style="background-color: <?php echo htmlspecialchars($background_color); ?>">
                <?php echo htmlspecialchars($firstname); ?>
            </td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td class="highlight" style="background-color: <?php echo htmlspecialchars($background_color); ?>">
                <?php echo htmlspecialchars($middlename); ?>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td class="highlight" style="background-color: <?php echo htmlspecialchars($background_color); ?>">
                <?php echo htmlspecialchars($lastname); ?>
            </td>
        </tr>
        <tr>
            <td>Birthdate</td>
            <td><?php echo htmlspecialchars($birthdate); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo htmlspecialchars($country_code) . htmlspecialchars($phone_number); ?></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td><?php echo htmlspecialchars($sex); ?></td>
        </tr>
        <tr>
            <td>Program</td>
            <td><?php echo htmlspecialchars($programs[$program] ?? 'Unknown'); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo nl2br(htmlspecialchars($address)); ?></td>
        </tr>
    </table>
</body>
</html>
