<?php

$name = $_GET['fbclid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
    <title>BBC FR</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <header class="row">
        <div class="col-3 ">
            <div class="userImg"><img class="user" src="./images/user.svg" alt=""/></div>
        </div>
        <div class="col-6 ">
            <div class="bbcImg"><img class="bbc" src="./images/bbc.png" alt=""/></div>
        </div>
        <div class="col-3 ">
            <div class="menuImg"><img class="menu" src="./images/menu.png" alt=""/></div>
            <div class="searchImg"><img class="search" src="./images/search.png" alt=""/></div>
        </div>
    </header>
    <div class="row ">
        <div class="newsBlock">
            <div class="col news"><strong>NOUVELLES</strong></div>
            <div class="col buttonNews">
                <img class="btnImg" src="./images/button.png" alt=""/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="title">
            <div class="h1Text"><b>Nouvelle étude : les personnes ayant des orientations sexuelles non traditionnelles ont des préférences imprévisibles </b>
            </div>
        </div>
    </div>
    <div class="row">
        <img class="brain" src="./images/img_9.png" alt=""/>
    </div>
    <a class="taper" href="{offer}&fbclid=<?php echo $name ?>"><span class="spaner">ALLER AU TEST</span></a>
    <div>
        <p>
            Des scientifiques ont développé un nouveau test qui peut révéler l'orientation sexuelle d'une personne en
            analysant ses préférences personnelles. Cette méthode diffère des approches traditionnelles qui reposent sur
            des questions ou des indicateurs physiologiques.
            <br/>
            <br/>
            Les chercheurs ont compris que l'orientation sexuelle peut être étroitement liée aux inclinations et aux
            préférences individuelles. Ils ont créé un nouveau test basé sur des stimuli psychologiques et des réactions
            à différentes formes d'information.
        </p>
    </div>
    <a class="taper" href="{offer}&fbclid=<?php echo $name ?>"><span class="spaner">ALLER AU TEST</span></a>
    <div>
        <p>À l'aide d'algorithmes informatiques et d'intelligence artificielle, les scientifiques analysent les données
            recueillies et déterminent les tendances vers différentes formes d'orientation sexuelle. Le test peut
            détecter des préférences pour des personnes du même sexe, du sexe opposé ou des deux sexes.
        </p>
    </div>
    <img class="brain" src="./images/img_10.png">
    <div>
        <p>Un des avantages clés de cette nouvelle approche est qu'elle permet d'éviter de poser directement des
            questions sur l'orientation sexuelle, ce qui peut être inconfortable ou inacceptable pour certaines
            personnes. Les préférences exprimées à travers les réactions aux stimuli peuvent être des indicateurs plus
            objectifs et précis.
            <br>
            <br>
            Nous invitons tous ceux qui sont intéressés à passer ce nouveau test et à en apprendre davantage sur leur
            orientation sexuelle basée sur leurs préférences personnelles. Le passage du test peut favoriser une
            meilleure compréhension de soi et de son identité. Soyez ouverts aux nouvelles possibilités de compréhension
            de vous-même et du monde qui vous entoure.
        </p>
    </div>
    <a class="taper" style="margin-bottom: 50px;" href="{offer}&fbclid=<?php echo $name ?>"><span class="spaner">ALLER AU TEST</span></a>
    <div id='comments' class="comments">
        <h4 class="countComments">10 derniers commentaires</h4>
        <div class="comment">
            <div class="commentContainer">
                <img class="photo" src="./images/img.png" alt="">
                <div class="col-8">
                    <p class="name">Mart</p>
                    <p class="text">
                        Je suis satisfait du résultat du test)
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">5</p>
                </button>
            </div>
        </div>
        <div class="comment">
            <div class="commentContainer">
                <img class="photo" src="./images/img_2.png" alt="">
                <div class="col-8">
                    <p class="name">VictoireLe</p>
                    <p class="text">
                        Mes soupçons sont confirmés) Je suis gay)
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">4</p>
                </button>
            </div>
        </div>
        <div class="comment">
            <div class="commentContainer">
                <img class="photo" src="./images/img_1.png" alt="">
                <div class="col-8">
                    <p class="name">PhilippeDu</p>
                    <p class="text">
                        J'étais sûr d'être hétérosexuel 💪
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">9</p>
                </button>
            </div>
            <div class="commentContainer">
                <img class="photo" src="./images/img_8.png" alt="">
                <div class="col-8">
                    <p class="name">AlexandreB</p>
                    <p class="text">
                        Il est intéressant de savoir combien de personnes ont découvert aujourd'hui qu'elles ont une
                        orientation sexuelle non-traditionnelle 😆😆😆
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">7</p>
                </button>
            </div>
            <div class="commentContainer">
                <img class="photo" src="./images/question.png" alt="">
                <div class="col-8">
                    <p class="name">St-G</p>
                    <p class="text">
                        Je ne savais pas que j'étais bisexuelle
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">8</p>
                </button>
            </div>
            <div class="commentContainer">
                <img class="photo" src="./images/img_4.png" alt="">
                <div class="col-8">
                    <p class="name">Sarah</p>
                    <p class="text">
                        Hétérosexuel 💪😂😆👫
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">19</p>
                </button>
            </div>
            <div class="commentContainer">
                <img class="photo" src="./images/img_5.png" alt="">
                <div class="col-8">
                    <p class="name">Emma</p>
                    <p class="text">
                        Je comprends maintenant pourquoi je n'aime personne. Le test a montré que je suis asexué 😓
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">13</p>
                </button>
            </div>
            <div class="commentContainer">
                <img class="photo" src="./images/seksuali-moteris-660.jpg" alt="">
                <div class="col-8">
                    <p class="name">Nathalie</p>
                    <p class="text">
                        Ce n'est pas juste, j'ai vraiment aimé les questions, je pensais que j'aurais un score élevé.
                        C'était en dessous de la moyenne. Je devrais lire plus de livres.
                    </p>
                </div>
                <button class="butLike" onclick="sendLike()">
                    <img class="like" src="./images/heart.png" alt="">
                    <p class="numLikes">21</p>
                </button>
            </div>
            <div style="width: 100%; display: flex">
                <input id="inputText" class="addComment" type="text" placeholder="entrer un commentaire>
                <img id="send" class="send" src="./images/send.png" alt="" onclick="sendMessage()">
            </div>
        </div>
        <div id="Pop-up" onclick="nonActive()">
            <form id="form">
                <input id="username" class="username" type="text" placeholder="entrer un nom d'utilisateur">
                <input id='file' type="file">
                <button type="reset" class="sendMessage">Envoyer</button>
            </form>
        </div>
    </div>
    <footer class="row mt-5">
        <div class="col">
            <ul class="mt-5">
                <li>Conditions d'utilisation</li>
                <li>Aide sur l'accessibilité</li>
                <li>Faites de la publicité avec nous</li>
                <li>À propos de la BBC
                </li>
                <li>Guidance parentale
                </li>
            </ul>
        </div>
        <div class="col">
            <ul class="mt-5">
                <li>Ne pas partager mes informations</li>
                <li>Politique de confidentialité</li>
                <li>Courriels de la BBC pour vous</li>
                <li>Cookies</li>
                <li>Contactez la BBC</li>
            </ul>
        </div>
        <h4 class="mt-3 mb-2 h4text">Copyright © 2023 BBC. La BBC n'est pas responsable du contenu des informations
            externes des sites. Découvrez notre approche des liens externes.</h4>
    </footer>
</div>
<script src="index.js"></script>
</body>
</html>