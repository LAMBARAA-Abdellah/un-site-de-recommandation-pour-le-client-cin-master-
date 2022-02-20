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
                        <a href="deconnexion" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
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

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter votre poste</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>



                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="file">
                                            <label for="avatar">Choose a post picture:</label>

                                            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Description:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">share post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="user">
                        <img src="../public/assets/img/téléchargement.jpg" alt="">
                        <div class="user-time">
                            <h4>Lambraa Abdellah</h4>
                            <h5>12:36</h5>
                        </div>
                    </div>
                    <div class="post">
                        <h3>
                            ** aaa bbb **
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, vel consequuntur in, neque aliquid expedita totam nesciunt maxime fugit dolores suscipit? Odit dolorem fugit esse quo dolores totam corrupti impedit.</p>
                        <img src="../public/assets/img/top.jpg" alt="">

                    </div>
                    <div class="like">
                        <div class="jadore">
                            <a href=""><i class=" fas fa-solid fa-heart"></i></a>
                            <a href=""><i class=" fas fa-solid fa-thumbs-down"></i></a>
                        </div>
                        <div class="commantaire">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $empolyer['id']; ?>">
                                <a href=""><i>11Commantaires</i></a>

                            </form>
                        </div>
                        <div>
                            <a href=""><i class=" fas fa-solid fa-share"></i></a>
                        </div>

                    </div>
                    <div class="detaille-comment">
                        <div class="sous-comment">
                            <h4>Lambaraa abdellah:</h4>
                            <p>gfgfgfgfgfgfgfgfgf ffgfgfg fgfgfg</p>
                        </div>
                        <div class="sous-comment">
                            <h4>Lambaraa abdellah:</h4>
                            <p>gfgfgfgfgfgfgfgfgf ffgfgfg fgfgfg</p>
                        </div>
                        <div class="sous-comment">
                            <h4>Lambaraa abdellah:</h4>
                            <p>gfgfgfgfgfgfgfgfgf ffgfgfg fgfgfg</p>
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