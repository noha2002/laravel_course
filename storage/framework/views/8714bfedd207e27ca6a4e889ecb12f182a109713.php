<h1>edit post</h1>

<form action="<?php echo e(URL('post/insert')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" value="<?php echo e($post->title); ?>"><br>
    <input type="text" name="body"  value="<?php echo e($post->body); ?>"><br>
    <button type="submit">submit</button>
</form>
<?php /**PATH D:\mozakra\query\resources\views/posts/edit.blade.php ENDPATH**/ ?>