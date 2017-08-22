<!--
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles --
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->
   <!-- Este comando adicionara um navbar padrão do laravel para sua página -->


<?php $__env->startSection('content'); ?>  <!-- // Abaixo deve por todo conteúdo do body -->
    
    <div class="container">
                    <?php if(Auth::check()): ?>
                            <h2>Tasks List</h2>
                            <a href="/task" class="btn btn-primary">Add new Task</a>
                            <table class="table">
                                <thead><tr>
                                    <th colspan="2">Tasks</th>
                                </tr>
                            </thead>
                            <tbody><?php $__currentLoopData = $user->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($task->description); ?>

                                    </td>
                                    <td>
                                       
                                        <form action="/task/<?php echo e($task->id); ?>">
                                            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                            <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </td>
                                </tr>
                                
        
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></tbody>
                            </table>
                    <?php else: ?>
                        <h3>You need to log in. <a href="/login">Click here to login</a></h3>
                    <?php endif; ?>
                   
    </div>



<?php $__env->stopSection(); ?>   <!-- // como próprio nome diz, aqui acaba a sessão do body  -->
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>