<?php
session_start();
require './auth.php';
require './subscriptions-lib.php';

if (!isAuthorized()) {
    echo '<div style="text-align:center; margin-top:100px; font-family:sans-serif;">
            <h2>Доступ обмежено!</h2>
            <p>Вибачте, ця сторінка доступна лише авторизованим адміністраторам.</p>
            <a href="login.php" style="color:#A53DFF;">Перейти до авторизації</a>
          </div>';
    exit;
}

$subscribers = allSubscriptions();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>Панель адміністратора</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<div class="container" style="max-width: 900px; margin: 40px auto; font-family: Arial, sans-serif;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
        <h2>Subscribers List (Всього: <?php echo count($subscribers); ?>)</h2>
        <a href="logout.php" class="logoutBtn" style="padding: 10px 20px; background:#000; color:#fff; text-decoration:none; border-radius:4px;">Log Out</a>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse:collapse; background:#fff;">
        <thead style="background:#f2f2f2;">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Budget</th>
                <th>Subject</th>
                <th>IP Address</th>
                <th>Date / Time</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($subscribers)): ?>
                <tr>
                    <td colspan="7" style="text-align:center;">Записів немає</td>
                </tr>
            <?php else: ?>
                <?php foreach ($subscribers as $index => $sub): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($sub['name']); ?></td>
                        <td><?php echo htmlspecialchars($sub['email']); ?></td>
                        <td><?php echo htmlspecialchars($sub['budget']); ?></td>
                        <td><?php echo htmlspecialchars($sub['subject']); ?></td>
                        <td><?php echo htmlspecialchars($sub['user_ip']); ?></td>
                        <td><?php echo htmlspecialchars($sub['timestamp']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>