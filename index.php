<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>StreetArt</title>
    <link rel="stylesheet" href="resources/css/styles_inicio.css">
    <script src="https://kit.fontawesome.com/66fa17c514.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        session_start();
        $user_email = $_SESSION['email'];
        
        if(!isset($user_email))
            header("Location: signUp.php");
    ?>
    <div class="wrapper">
        <div class="sidebar">
            <h2>StreetArt</h2>
            <div class="perfil">
                <div class="foto_perfil"><img src="resources/img/icons/profile.png" alt=""></div>
                <div class="name"><?php echo "<span> $user_email </span>"?></div>
            </div>
            <ul class="menu">
                <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-bell"></i></i>Notifications</a></li>
                <li><a href="#"><i class="fas fa-comment-dots"></i>Messages</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>Categories</a>
                    <ul>
                        <li><a href="#"><i class="fas fa-shoe-prints"></i>Dance</a></li>
                        <li><a href="#"><i class="fas fa-pencil-alt"></i>Drawing</a></li>
                        <li><a href="#"><i class="fas fa-film"></i>Film</a></li>
                        <li><a href="#"><i class="fas fa-palette"></i>Paint</a></li>
                        <li><a href="#"><i class="fas fa-file-video"></i>Animation</a></li>
                        <li><a href="#"><i class="fas fa-camera-retro"></i>Fotography</a></li>
                        <li><a href="#"><i class="fas fa-music"></i>Sing</a></li>
                    </ul>
                </li>
            </ul>
            <div class="settings">
                <ul>
                    <li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
                    <li><a href="logica/funcionalidades/exit.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="main_content">
            <div class="header">
                <div id="navbar">
                    <nav>
                        <form action="#">
                            <input type="search" placeholder="Search..." aria-label="Search">
                            <input type="submit" value="Search">
                        </form>
                    </nav>
                </div>

            </div>

            <div class="info">
                <form action="#">
                    <div class="subtitle">
                        <h3>What are you think?...</h3>
                    </div>
                    <div class="publications"><textarea placeholder="Write your comments" name="comentarios" rows="3"></textarea></div>
                    <div id="buttons">
                        <div id="button_file">
                            <input type="file" value="File" id="file">
                            <label id="label_file" for="file"><i class="fas fa-upload"></i> &nbsp; Upload your files</label>
                        </div>
                        <div id="button_post">
                            <input type="submit" value="Publish">
                            <label id="label_post" for="submit"> Publish</label>
                        </div>
                    </div>
                </form>
            </div>

            <div class="post">
                <div class="description">
                    <img src="resources/img/icons/profile1.png" alt="my_perfil"> <span>Mario Hazael</span>
                    <p id="info_post">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, 
                        numquam deserunt reiciendis necessitatibus placeat maxime ut qui doloribus 
                        est magni dignissimos. Culpa eos fugiat perspiciatis temporibus unde aperiam debitis neque?</p>
                    <p id="date">May 28th 2020 11:06</p>
                </div>
                <div class="file_post">
                    <img src="resources/img/Github.jpg" alt="">
                </div>
                <div class="comments">
                    <div class="header_comments">
                        <h3>comments
                            <a id="share" href="#"><i class="fas fa-share"></i></a>
                            <a id="like" href="#"><i class="fas fa-thumbs-up"></i></a></h3>
                    </div>
                    <textarea placeholder="Write your comments" name="comentarios" rows="1"></textarea>
                </div>
                <div class="subcomments">
                    <div id="perfil_subcomments"><img src="resources/img/icons/profile1.png" alt="my_perfil"></div>
                    <div id="subcomment">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Tenetur veritatis harum eaque mollitia perferendis blanditiis 
                            atque temporibus maxime cumque! Dicta ullam reprehenderit dolor 
                            quis nobis at labore dolores delectus error!</p>
                        <a id="share" href="#"><i class="fas fa-share"></i></a>
                        <a id="comments" href="#"><i class="fas fa-comments"></i></a>
                        <a id="like" href="#"><i class="fas fa-thumbs-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>