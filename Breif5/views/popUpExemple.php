$i = 0;

                foreach ($posts as $post) :

                ?>

                    <div class="card">
                        <div class="pers">
                            <div class="user">
                                <img src="../public/assets/img/téléchargement.jpg" alt="">
                                <div class="user-time">
                                    <h4><?php echo $post->psseudo ?></h4>
                                    <h5><?php echo $post->published_at ?></h5>
                                </div>
                            </div>
                            <div class="action">
                                <script>
                                    $(document).ready(function() {
                                                $(<?php echo '.editmodal'.$i ?>).on('click', function() {
                                                    $(<?php echo '#UpdatePoste'.$i ?>).modal('show');
                                                })
                                            })
                                </script>

                                <button class="<?php echo 'editmodal'.$i ?>" type="button" data-bs-toggle="modal" data-bs-target="<?php echo '#UpdatePoste'.$i ?>" data-bs-whatever="@getbootstrap" href=""> <i class=" fas fa-solid fa-calendar-minus"></i></button>
                                <div class="modal fade" id="<?php echo 'UpdatePoste'.$i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Post</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="">
                                                    <?php var_dump($i)

                                                    ?>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Title:</label>
                                                        <input type="text" name="titre" class="form-control" value="<?php echo $post->titre ?> ">
                                                    </div>
                                                    <div class="file">
                                                        <label for="avatar">Choose a post picture:</label>

                                                        <input type="file" value="<?php echo $post->photo ?>" name="photo" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Description:</label>
                                                        <textarea class="form-control" name="description"><?php echo $post->description ?></textarea>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id_p" value="<?php echo $post->id_p ?>">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <?php $i++; ?>
                                                <button type="submit" name="update" class="btn btn-primary">Update post</button>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>




                                <a href=""> <i class="fas fa-solid fa-trash"></i></a>



                            </div>
                        </div>

                        <div class="post">
                            <h3>
                                ** <?php echo $post->titre ?> **
                            </h3>
                            <p><?php echo $post->description ?></p>
                            <img src="<?php echo $post->photo ?>" alt="">

                        </div>
                        <div class="like">
                            <div class="jadore">
                                <a href=""><i class=" fas fa-solid fa-heart"></i></a>
                                <a href=""><i class=" fas fa-solid fa-thumbs-down"></i></a>
                            </div>
                            <div class="commantaire">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $post->id_p ?>">
                                    <a href=""><i>Commantaires</i></a>

                                </form>
                            </div>
                            <div>
                                <a href=""><i class=" fas fa-solid fa-share"></i></a>
                            </div>

                        </div>
                        <form action="">
                            <div class="comment">
                                <div class="input-group mb-3">
                                    <input name="Commantaire" placeholder="Commantaire" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <button type="button" class="btn btn-primary">Envoyer</button>
                                <!-- <a href=""> <i class="fas fa-solid fa-paper-plane"></i></a> -->
                            </div>
                        </form>
                    </div>
                <?php $i++;
                endforeach ?>