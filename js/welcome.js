/* NextEx - Ferramenta de Avaliação
 * js/welcome.js
 *
 * Coordena interface quando é feito o cadastro de um novo usuário utilizando
 * a API de login do Facebook
*/

$(document).ready(function() {
	$("#escolhaUniversidade").css("display", "none");

    $('input:radio[name=tipo]').change(function() {
      if (this.value == 'aluno') {
        $("#escolhaUniversidade").css("display", "inline");
      }
      else if (this.value == 'professor') {
        $("#escolhaUniversidade").css("display", "none");
      }
    });
});
