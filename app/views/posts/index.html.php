<?php
/**
 * Created by JetBrains PhpStorm.
 * User: matteo
 * Date: 20/01/12
 * Time: 13.57
 *
 * Just for fun...
 */

?>

<?php foreach($posts as $post): ?>
<article>
    <h1><?=$post->title ?></h1>
    <p><?=$post->body ?></p>
</article>
<?php endforeach; ?>