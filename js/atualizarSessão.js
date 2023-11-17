$(document).ready(function() {
    function atualizarVariaveisSession() {
      $.ajax({
        url: 'atualizarSessão.php',
        type: 'GET',
        success: function(response) {
          console.log('Variáveis $_SESSION atualizadas com sucesso!');
        },
        error: function(xhr, status, error) {
          console.log('Erro ao atualizar as variáveis $_SESSION: ' + error);
        }
      });
    }
  
    // Atualize as variáveis $_SESSION a cada 5 segundos
    setInterval(atualizarVariaveisSession, 5000);
  });
  