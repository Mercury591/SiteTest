<?php
// Este arquivo exibe uma lista de arquivos disponíveis para download.

include '../src/views/header.php';

// Simulação de uma lista de arquivos para download
$downloads = [
    ['name' => 'Arquivo 1', 'link' => 'downloads/arquivo1.zip'],
    ['name' => 'Arquivo 2', 'link' => 'downloads/arquivo2.zip'],
    ['name' => 'Arquivo 3', 'link' => 'downloads/arquivo3.zip'],
];

?>

<h1>Downloads</h1>
<ul>
    <?php foreach ($downloads as $download): ?>
        <li>
            <a href="<?php echo $download['link']; ?>"><?php echo $download['name']; ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../src/views/footer.php'; ?>