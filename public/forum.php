<?php
require_once '../src/controllers/ForumController.php';

$forumController = new ForumController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $forumController->createPost($title, $content);
}

$posts = $forumController->getPosts();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../src/views/header.php'; ?>

    <h1>Fórum</h1>

    <form method="POST" action="forum.php">
        <input type="text" name="title" placeholder="Título" required>
        <textarea name="content" placeholder="Conteúdo" required></textarea>
        <button type="submit">Criar Postagem</button>
    </form>

    <h2>Postagens</h2>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <small>Publicado em: <?php echo $post['created_at']; ?></small>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php include '../src/views/footer.php'; ?>
</body>
</html>