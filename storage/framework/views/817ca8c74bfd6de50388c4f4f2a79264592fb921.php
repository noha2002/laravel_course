<h1>create new post</h1>

<form action="<?php echo e(URL('post/insert')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="enter title"><br>
    <input type="text" name="body" placeholder="enter body"><br>
    <button type="submit">submit</button>
</form>
<?php /**PATH D:\mozakra\query\resources\views/posts/create.blade.php ENDPATH**/ ?>