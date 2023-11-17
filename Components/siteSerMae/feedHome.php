<?php 
include_once("../../../dao/atualizarSessão.php");


?>
    <div class="feed">

<!--Feed Top-->
<?php
    $publicacoes = $publicacaodao->readTodasPublicacoes();

    // Organiza as publicações com base na data (a mais recente primeiro)
    usort($publicacoes, function($a, $b) {
        $dataA = strtotime($a->getDataPublicacao());
        $dataB = strtotime($b->getDataPublicacao());
        return $dataB - $dataA;
    });


    //Apresentação do INNER JOIN da função readTodasPublicacoes();
    if (count($publicacoes) > 0) {
        foreach ($publicacoes as $publicacao) {
            $legenda = $publicacao->getLegendaPublicacao();
            $imgPublicacao = $publicacao->getImgPublicacao();
            $dataPublicacao = $publicacao->getDataPublicacao();
            $usuario = $publicacao->getUsuario();
            $fotoPerfil = $usuario->getFotoDePerfil();
            $nomeUsuario = $usuario->getNomeUsuario();
            

            // Faz a depuração do tempo que a publicação foi colocada no banco e deixa ela bonitinha
            $timestampPublicacao = strtotime($dataPublicacao);
            $tempoDecorrido = time() - $timestampPublicacao;
            if ($tempoDecorrido < 60) {
                $tempoFormatado = $tempoDecorrido . " segundo(s) atrás";
            } elseif ($tempoDecorrido < 3600) {
                $tempoFormatado = round($tempoDecorrido / 60) . " minuto(s) atrás";
            } elseif ($tempoDecorrido < 86400) {
                $tempoFormatado = round($tempoDecorrido / 3600) . " hora(s) atrás";
            } else {
                $tempoFormatado = round($tempoDecorrido / 86400) . " dia(s) atrás";
            }
?>

<div class="feed-top">
    <div class="user">
        <div class="profile-picture">
            <a href="../perfilUser/perfil.php?id=<?= $usuario->getIdUsuario() ?>"><img src="../../../img/siteSerMae/Perfis/<?= $fotoPerfil ?>" alt=""></a>
        </div>

        <div class="info">
            <h3><?= $nomeUsuario ?></h3>
            <div class="time text-coment">
                <small> Brasil, <span><?php echo $tempoFormatado; ?></span></small>
            </div>
        </div>
    </div>    
    <!--menu denuncia inicio-->
    <span class="edit">
    <i class="fas fa-ellipsis" data-modal-target="modal1"></i>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <p class="denunciar" id="openModalButton1">Denunciar</p>
              <!-- Modal com IDs exclusivos -->
              <div id="myModal1" class="modal-desc">
                    <div class="modal-content-desc">
                        <span class="close-desc" id="closeModalButton1"><i class="fa-solid fa-circle-xmark"></i></span>
                        <h2>Por que você está denunciando essa publicação?</h2>
                        <div class="opcoes">

                        <!--efeito button-->
                        <button class="learn-more" type="submit">
                        <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Informação falsa</span>
                        </button>
                           
                        <button class="learn-more" type="submit">
                        <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Simplesmente não gostei</span>
                        </button>

                        <button class="learn-more" type="submit">
                        <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Símbolos ou discurso de ódio</span>
                        </button>

                        <button class="learn-more" type="submit">
                        <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Golpe ou fraude</span>
                        </button>
                        <!--efeito button-->

                        </div>
                        
                    </div>
                </div>
            <!-- Botão abrir modal fim-->
            <hr class="linha-denuncia">
            <h2 class="close" data-modal-close="modal1">Cancelar</h2>
        </div>
    </div>
    </span>
    <!--menu denuncia final-->
</div>
<!--Feed IMG-->
<div class="feed-img">
    <?php  echo '<img src="../../../img/siteSerMae/publicacao/' . $imgPublicacao . '" alt="Imagem da Publicação" class="publicacao-card" style="height: 500px" ">';?>
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




<!--caption-->

<?php
    echo '<div class="caption">';
    echo '<div style="font-size:20px"><b>' . $legenda . '</b></div>';
    echo '<p> Publicado a ' . $tempoFormatado . '</p>';
    echo '</div><br>';
    
         }
    } else {
        // Caso não haja publicações a exibir
        echo "Não há publicações a serem exibidas.";
    }
    ?>

<!--liked by-->
<div class="liked-by">
    <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
    <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
    <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
    <p><b>Vitória</b> e mais <b>77 comentários</b></p>
</div>

<!--Comentários-->
<div class="comments text-coment">
    Ver mais comentários
</div>
</div>
</div>
<!--Final do Feed-->