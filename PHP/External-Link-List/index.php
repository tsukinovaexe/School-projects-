<?php

$links = [
"Google" => "https://www.google.com/",
"Youtube" => "https://www.youtube.com/",
"Netflix" => "https://www.netflix.com/",
"Github" => "https://www.github.com/",
"Wikipedia" => "https://www.wikipedia.org/",
];

?>

<nav class="link-list">
    <h2>Useful links</h2>

    <ul>
        <?php foreach ($links as $name => $url): ?>
            <li>
                <a href="<?php echo $url; ?>" target="_blank">
                    <?php echo $name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
