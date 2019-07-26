<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="index.php?controller=PostsController&action=show&id=<?php echo $post['id'] ?>">
                        <?php echo date('Y-m-d') == date('Y-m-d', strtotime($post['date'])) ?
                            'Today' : $post['date'] ?>: <?php echo $post['title'] ?>
                    </a>
                </h2>
                <p>
                    <?php echo nl2br($post['content']) ?>
                </p>
                <p class="blog-post-meta">Author:
                    <a href="#"><?php echo (new \Check24\Models\Users())->getFullName($post['user_id']) ?></a>
                    Comments: <?php echo (new \Check24\Models\Comments())->getTotalCommentsByPostId($post['id']) ?>
                </p>
            </div>

            <h3>Comments:</h3>
            <ol>
                <?php
                if (count($comments)) {
                    foreach ($comments as $comment) {
                        ?>
                        <li>
                            <a href="<?php echo $comment['url'] ?>">
                                <?php echo $comment['name'] ?>
                            </a> said: <?php echo date('Y-m-d H:i', strtotime($comment['date'])) ?>
                            <p>
                                <?php echo nl2br($comment['comment']); ?>
                            </p>
                        </li>
                        <?php
                    }
                } else { ?>
                    <li> There aren't any comments to be shown</li>
                    <?php
                }
                ?>
            </ol>

            <h4> Leave a comment: </h4>
            <form method="POST"
                  action="index.php?controller=PostsController&action=addComment&post_id=<?php echo $post['id'] ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Url</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="remark" class="col-md-4 col-form-label text-md-right">Remark</label>

                            <div class="col-md-6">
                                <textarea id="remark" type="text" class="form-control" name="remark"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>