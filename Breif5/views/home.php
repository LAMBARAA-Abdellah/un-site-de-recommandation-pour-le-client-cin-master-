<?php
// session_start();


function authGuard()
{
    var_dump($_SESSION['id']);
    if (!isset($_SESSION)) {
        session_start();
    }

    if (empty($_SESSION['id'])) {
        Redirect::to('login');
    }
}

authGuard();
?>
<?php
// var_dump($_SESSION['id']);
$data = new PostController();
$posts = $data->getAllPost();

// echo "<pre>";
// var_dump($posts);
// echo "<\pre>";
?>

<?php

if (isset($_POST['envoyer'])) {
    $commantaire = new CommentController();
    $commantaire->addComment();
}

if (isset($_POST['ajouter'])) {
    $poste = new PostController();
    $poste->addPost();
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/styles/header.css">
    <link rel="stylesheet" href="../public/assets/styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="../public/assets/styles/header.css"> -->
</head>

<body>

    <header class="header">
        <nav class="navbar">

            <h2 href="#" class="nav-logo">Ce<span>Ne</span>Master<span>.</span></h2>
            <img src="" alt="">

            <ul class="nav-menu">

                <div class="space">
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/profail" class="nav-link"><i class="fas fa-user-alt"></i></a>
                    </li>
                </div>
                <!-- <li class="nav-item">
                    <a href="reservation.html" class="nav-link">Reservation</a>
                </li> -->
                <div class="space">
                    <li class="nav-item">
                        <a href="logout" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </div>
            </ul>





            <div class="hamburger">
                <!-- <span class="bar"></span> -->
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>


    <div class="content">

        <div class="left">
            <div class="container">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div>




        </div>
        <div class="str">
            <div class="millieu">
                <div class="add">

                    <button type="button" class=" ajouter btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter votre poste</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input type="text" name="titre" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="file">
                                            <label for="avatar">Choose a post picture:</label>

                                            <input type="file" id="avatar" name="photo" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Description:</label>
                                            <textarea class="form-control" name="description" id="message-text"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="ajouter" class="btn btn-primary">share post</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


                <?php foreach ($posts as $post) :  ?>
                    <div class="card">
                        <div class="user">
                            <img src="../public/assets/img/téléchargement.jpg" alt="">
                            <div class="user-time">
                                <h4><?php echo $post['psseudo'] ?></h4>
                                <h5><?php echo $post['published_at'] ?></h5>
                            </div>
                        </div>
                        <div class="post">
                            <h3>
                                ** <?php echo $post['titre'] ?>**
                            </h3>

                            <p><?php echo $post['description'] ?></p>
                            <img src="<?php echo $post['photo'] ?>" alt="">

                        </div>
                        <div class="like">
                            <div class="jadore">
                                <a href=""><i class=" fas fa-solid fa-heart"></i></a>
                                <a href=""><i class=" fas fa-solid fa-thumbs-down"></i></a>
                            </div>
                            <div class="commantaire">
                                <form action="detaille" method="post">
                                    <input type="hidden" name="id" value="<?php echo $post['id_p']; ?>">
                                    <input type="submit" value="commantairs">

                                </form>
                            </div>
                            <div>
                                <a href=""><i class=" fas fa-solid fa-share"></i></a>
                            </div>

                        </div>
                        <form method="post">
                            <div class="comment">
                                <div class="input-group mb-3">
                                    <input type="hidden" name="id_u" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="hidden" name="id_p" value="<?php echo $post['id_p']; ?>">
                                    <input required name="commantaire" placeholder="Commantaire" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
                                <!-- <a href=""> <i class="fas fa-solid fa-paper-plane"></i></a> -->
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>




            </div>
        </div>
        <div class="reight">
            <div class="title-contact">
                <h3>Quick Contact</h3>
                <h4>Contact us today, and get reply with in 24 hours!</h4>

            </div>

            <div class="contactform">
                <div id="contact" action="" method="post">

                    <fieldset>
                        <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Email Address" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </div>



            </div>


        </div>


    </div>










    <script src="../public/assets/js/index.js"></script>
    <script src="../public/assets/js/calendar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer>

</footer>


</html>