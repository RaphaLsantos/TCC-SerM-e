<?php
session_start();    
include_once("../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/siteSerMae/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--link swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>serMãe</title>
</head>
<body>

    <!--navBar-->
    <?php
    include('../../Components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

    <!--Main-->
    <main>
    <div class="container main-container">


    <!--Main left inicio-->
    <div class="main-left">
                    <!--inicio Boas vindas-->
                    <?php
                    include('../../Components/siteSerMae/boasVindas.php')
                    ?>
                    <!--final Boas vindas-->

                    <!--start aside bar-->
                    <?php
                    include('../../Components/siteSerMae/menu.php')
                    ?>
                    <!--end aside bar-->
    </div>
    <!--Main left fim-->



    <!--Main middle inicio-->
    <div class="main-middle">
                    <div class="middle-container">

                <!--stories inicio-->
                   <div class="stories">
                    <div class="stories-wrappper swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="story swiper-slide">
                                <img src="#" alt="">
                                <div class="profile-picture"  id="my-profile-picture">
                                    <img src="../../img/siteSerMae/home/navBar/eu.png" alt="">
                                </div>
                                <label for="add-story" class="add-story">
                                    <i class="fa fa-add" id="upload"></i>
                                    <p>Adicione<br>seu story</p>
                                </label>
                                <input type="file" accept="image/jpg, image/png, image/jpeg" id="add-story">
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/1.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../../img/siteSerMae/home/stories/1.jpg" alt="">
                                </div>
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/2.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/stories/2.jpg" alt="">
                                </div>
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/3.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/stories/3.jpg" alt="">
                                </div>
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/4.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/stories/4.jpg" alt="">
                                </div>
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/5.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/stories/5.jpg" alt="">
                                </div>
                            </div>

                            <div class="story swiper-slide">
                                <img src="./../../img/siteSerMae/home/postStory/6.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/stories/6.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
               </div>
                <!--stories fim-->

               <!--post input-->
               <form class="add-post input-post">
                <input type="text" placeholder="No que você está pensando?" id="add-post">
                <input type="submit" value="Postar" class="btn btn-primary">
               </form>

               <!--Inicio do Feed-->
               <div class="feeds">
                <div class="feed">
                    <!--Feed Top-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture" id="my-profile-picture">
                                <img src="./../../img/siteSerMae/home/perfil/1.png" alt="">
                            </div>
                            <div class="info">
                                <h3>Ana Saúde</h3>
                                <div class="time text-coment">
                                    <small> BRASIL, <span>Dia 2, agosto</span></small>
                                </div>
                            </div>
                        </div>    
                        <span class="edit">
                            <i class="fa-solid fa-ellipsis"></i>
                            <ul class="edit-menu">
                                <li><i class="fa fa-pen"></i>Editar</li>
                                <li><i class="fa fa-trash"></i>Deletar</li>
                            </ul>
                        </span>
                    </div>
                    <!--Feed IMG-->
                    <div class="feed-img">
                       <h2>Nada melhor que um bom domingo de treino físico</h2>
                    </div>
                    <!--Feed ação aria-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>

                    <!--liked by-->
                    <div class="liked-by">
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <p><b>Vitória</b> e mais <b>77 comentários</b></p>
                    </div>

                    <!--caption-->
                    <div class="caption">
                        <div class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, mollitia.</div>
                        <p><b>Lana white</b>Lorem ipsum dolor sit, amet consectetur adipisicing.
                        <span class="hars-tag">#saúdeFisica</span></p>
                    </div>

                    <!--Comentários-->
                    <div class="comments text-coment">
                        Ver mais comentários
                    </div>
                </div>

                <div class="feed">
                    <!--Feed Top-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <a href="./../perfilVisitar/perfil.php"><img src="./../../img/siteSerMae/home/melhoresAmigos/2.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h3>Raissa lima</h3>
                                <div class="time text-coment">
                                    <small> BRAZIL, <span>Dia 6, setembro</span></small>
                                </div>
                            </div>
                        </div>    
                        <span class="edit">
                            <i class="fa-solid fa-ellipsis"></i>
                            <ul class="edit-menu">
                                <li><i class="fa fa-pen"></i>Editar</li>
                                <li><i class="fa fa-trash"></i>Deletar</li>
                            </ul>
                        </span>
                    </div>
                    <!--Feed IMG-->
                    <div class="feed-img">
                       <img src="./../../img/siteSerMae/home/feed/1.jpg" alt="">
                    </div>
                    <!--Feed ação aria-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>

                    <!--liked by-->
                    <div class="liked-by">
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <p><b>Vitória</b> e mais <b>77 comentários</b></p>
                    </div>

                    <!--caption-->
                    <div class="caption">
                        <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, autem!</div>
                        <p><b>Lana white</b>Lorem ipsum dolor sit, amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>

                    <!--Comentários-->
                    <div class="comments text-coment">
                        Ver mais comentários
                    </div>
                </div>

                <div class="feed myfeed">
                    <!--Feed Top-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <img src="./../../img/siteSerMae/home/melhoresAmigos/3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h3>Larissa souza</h3>
                                <div class="time text-coment">
                                    <small> BRAZIL, <span>2 DAY AGO</span></small>
                                </div>
                            </div>
                        </div>    
                        <span class="edit">
                            <i class="fa-solid fa-ellipsis"></i>
                        </span>
                    </div>
                    <!--Feed IMG-->
                    <div class="feed-img">
                        <img src="../../img/siteSerMae/home/feed/3.jpg" alt="">
                    </div>
                    <!--Feed ação aria-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>

                    <!--liked by-->
                    <div class="liked-by">
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <p><b>Vitória</b> e mais <b>77 comentários</b></p>
                    </div>

                    <!--caption-->
                    <div class="caption">
                        <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, autem!</div>
                        <p><b>Lana white</b>Lorem ipsum dolor sit, amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>

                    <!--Comentários-->
                    <div class="comments text-coment">
                        Ver mais comentários
                    </div>
                </div>

               </div>
               <!--Final do Feed-->

                    </div>
    </div>
    <!--Main middle fim-->



    <!--Main right inicio-->
    <div class="main-right">
                    <!--inicio melhores amigos-->
                    <div class="amigos">
                        <h3>Melhores Amigos</h3><br>
                        
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/melhoresAmigos/4.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                     <h5>Isabela Teodoro</h5>
                                    <p class="text-amigos">Online há 4 horas</p>
                                </div>
                                 </div>
                            </div>
                        </div>

                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/melhoresAmigos/2.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                    <h5>Isabela Teodoro</h5>
                                   <p class="text-amigos">Online há 4 horas</p>
                               </div>
                                 </div>
                            </div>
                        </div>

                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../img/siteSerMae/home/melhoresAmigos/3.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                    <h5>Isabela Teodoro</h5>
                                   <p class="text-amigos">Online há 4 horas</p>
                               </div>
                                 </div>
                            </div>
                        </div>

                    </div>
                    <!--final melhores amigos-->

                    
                    <!--inicio dicas destaques-->
                    <div class="corpo-destaques">
                        <h3>Dicas destaques</h3>

                        <div class="dicas-destaques">

                            <div class="card-dicas">
                                <h3 class="txt-dicas">Saúde para a vida</h3>
                                <img class="img-dica" src="../../img/siteSerMae/home/destaques/1.png" alt="">
                            </div>

                        </div>
                       
                    </div>
                    <!--dicas destaques-->
    </div>
    <!--Main right fim-->

            </div>
        </main>
    <!--Main-->




    <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../Components/siteSerMae/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../Components/siteSerMae/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->



    <script src="./../../js/siteSerMae/site.js"></script>

    <!--link JS swiper story-->
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'
        let swiper = new Swiper(".mySwiper", {
         slidesPerView: 6,   
         spaceBetween: 5,
        })
    </script>
    <!--link JS swiper story-->

</body>
</html>