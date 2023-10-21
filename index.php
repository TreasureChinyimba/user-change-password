<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-picture">
                <div class="no-image">No Image</div>
            </div>
            <div class="profile-details">
                <h1>Treasure Chinyimba</h1>
                <p><strong>Email:</strong> TreasureArthur4@gmail.com</p>
                <p><strong>Phone:</strong> +260-7721-50004</p>
                <p><strong>Role:</strong> Student</p>
            </div>
        </div>
<hr>
        <section class="change-password">
    
            <div id="change-password-form">
                <h2>Change Password</h2>
                <label for="old-password">Old Password:</label>
                <input type="password" id="old-password" placeholder="Enter old password" required ><br>

                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" placeholder="Enter new password" required ><br>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" placeholder="Confirm new password" required ><br>

                <button onclick="changePassword()">Submit</button>
                <span id="password-strength"></span>
            </div>
        </section>
    </div>

    <script>
        function toggleChangePasswordForm() {
            const changePasswordForm = document.getElementById('change-password-form');
            changePasswordForm.classList.toggle('hidden');
        }

        function changePassword() {
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
          
            const passwordStrengthElement = document.getElementById('password-strength');
          
            // Check password strength
            const strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
            if (!strongPasswordRegex.test(newPassword)) {
                passwordStrengthElement.textContent = 'Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one digit.';
                return;
            }
          
            if (newPassword !== confirmPassword) {
                passwordStrengthElement.textContent = 'Passwords do not match.';
                return;
            }
          
            // Password is strong and matches
            passwordStrengthElement.textContent = 'Password is strong and matches.';
        }
    </script>   
</body>
</html>
