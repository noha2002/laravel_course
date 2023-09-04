<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all posts</title>
    
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">update</th>
                </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>

        <th scope="row"><?php echo e($post->id); ?></th>
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->body); ?></td>
            <th><a class="btn btn-primary" href="<?php echo e(route('post.edit',$post->id)); ?>" role="button">edit</a></th>
            <th><a class="btn btn-dander" href="#" role="button">delete</a></th>

          </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
</body>
</html>

<?php /**PATH D:\mozakra\query\resources\views/posts/index.blade.php ENDPATH**/ ?>