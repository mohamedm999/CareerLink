<?php
session_start();
$user = $_SESSION['user'];
if (!isset($user) && $user['user_role'] != 'admin') {
    header('Location: ../auth/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Dashboard Administrateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/app.css">
</head>

<body class="bg-slate-50">

    <!-- Sidebar -->
    <?php include '../layouts/sidebar.php' ?>

    <!-- Main Content -->
    <main class="ml-64 p-8 animate-fadeIn">

        <!-- Top Bar -->
        <?php include '../layouts/topbar.php' ?>

        <section>
            <div class="sectionHome fade-in"><?php include '../includes/sectionHome.php'; ?></div>
        </section>

        <!-- Footer -->
        <?php include '../layouts/footer.php' ?>
    </main>

</body>

</html>