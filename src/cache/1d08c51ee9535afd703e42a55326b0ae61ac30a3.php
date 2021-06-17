

<?php $__env->startSection('title', "{$title} {$count}"); ?>

<?php $__env->startSection('content'); ?>
    <h1>Übersicht des Blogs</h1>
    <p class="lead">Das hier ist die Übersicht des Blogs.</p>

    <ul>
        <?php foreach($posts as $post): ?>
        <li>
            <a href="post-<?php echo ($post->getId()->value())?>">
                <?php echo("[{$post->getId()->value()}] {$post->getTitle()->value()}"); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/src/resources/views/sitemap.blade.php ENDPATH**/ ?>