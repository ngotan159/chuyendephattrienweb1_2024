<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Mã hóa và giải mã
function encrypt($data, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt($data, $key) {
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

$key = 'your_secret_key'; // Thay đổi giá trị này

$user = NULL; // Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    // Giải mã user ID từ URL
    $id = decrypt($_GET['id'], $key);
    $user = $userModel->findUserById($id); // Update existing user
}

if (!empty($_POST['submit'])) {
    if (!empty($id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
<?php include 'views/header.php'?>
<div class="container">

    <?php if ($user || empty($id)) { ?>
        <div class="alert alert-warning" role="alert">
            User profile
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <span><?php if (!empty($user['name'])) echo htmlspecialchars($user['name']); ?></span>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <span><?php if (!empty($user['fullname'])) echo htmlspecialchars($user['fullname']); ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <span><?php if (!empty($user['email'])) echo htmlspecialchars($user['email']); ?></span>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
    <?php } ?>
</div>
</body>
</html>