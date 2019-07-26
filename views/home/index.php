<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 blog-main">

            <?php

            foreach ($latestPosts as $post) {
                ?>
                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <a href="index.php?controller=PostsController&action=show&id=<?php echo $post['id'] ?>">
                            <?php echo date('Y-m-d') == date('Y-m-d', strtotime($post['date'])) ?
                                'Today' : $post['date'] ?>: <?php echo $post['title'] ?>
                        </a>
                    </h2>
                    <p>
                        <?php echo substr(strip_tags($post['content']), 0, 1000) . '...' ?>
                    </p>
                    <p class="blog-post-meta">Author:
                        <a href="#"><?php echo (new \Check24\Models\Users())->getFullName($post['user_id']) ?></a>
                        Comments: <?php echo (new \Check24\Models\Comments())->getTotalCommentsByPostId($post['id']) ?>
                    </p>
                </div>
                <?php
            } ?>


        </div>
    </div>
</div>
