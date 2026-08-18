<?php

<?php include("links.php"); ?>

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
