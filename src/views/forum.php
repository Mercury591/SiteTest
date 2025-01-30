<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <?php include '../src/views/header.php'; ?>

    <div class="forum-container">
        <h1>Fórum</h1>
        <div class="post-form">
            <h2>Criar nova postagem</h2>
            <form action="../src/controllers/ForumController.php?action=create" method="POST">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
                
                <label for="content">Conteúdo:</label>
                <textarea id="content" name="content" required></textarea>
                
                <button type="submit">Publicar</button>
            </form>
        </div>

        <div class="posts">
            <h2>Postagens</h2>
            <?php
            // Aqui você deve incluir a lógica para buscar e exibir as postagens do fórum
            include '../src/controllers/ForumController.php';
            $forumController = new ForumController();
            $posts = $forumController->getPosts();

            foreach ($posts as $post) {
                echo "<div class='post'>";
                echo "<h3>" . htmlspecialchars($post['title']) . "</h3>";
                echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
                echo "<small>Publicado em: " . htmlspecialchars($post['created_at']) . "</small>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <?php include '../src/views/footer.php'; ?>
</body>
</html>