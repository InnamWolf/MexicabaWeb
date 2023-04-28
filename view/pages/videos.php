<section class="videos">

  <h1 class="videos__title">Videos</h1>

  <div class="videos__item">

  <!-- <div class="video">
      <iframe class="videoComo" src="https://www.youtube.com/embed/_ng6wuoxpd0" title="YouTube ¿Cómo funcionan nuestros planes de ahorro?" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->

    <div class="videoComo" data-bs-toggle="modal" data-bs-target="#vidComo">
      <div class="modal fade" id="vidComo" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">¿Cómo funcionan nuestros planes de ahorro?</h4>
              <button type="button" class="btn-close close-modal" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <iframe class="videoOne video" src="https://www.youtube.com/embed/_ng6wuoxpd0" title="YouTube ¿Cómo funcionan nuestros planes de ahorro?" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-color btn-sm close-modal" data-bs-dismiss="modal">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>    

    <div class="videoConsultorio" data-bs-toggle="modal" data-bs-target="#vidConsultorio">
      <div class="modal fade" id="vidConsultorio" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Consultorio bbmundo 'Cómo asegurar una educación de calidad para mis hijos'</h4>
              <button type="button" class="btn-close close-modal" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <iframe class="videoTwo video" src="https://www.youtube.com/embed/mewaG7vzCXE" title="YouTube Consultorio bbmundo 'Cómo asegurar una educación de calidad para mis hijos'" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-color btn-sm close-modal" data-bs-dismiss="modal">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="videoAhorro" data-bs-toggle="modal" data-bs-target="#vidAhorro">
      <div class="modal fade" id="vidAhorro" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Ahorro para la educación de tus hijos</h4>
              <button type="button" class="btn-close close-modal" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <iframe class="videoThree video" src="https://www.youtube.com/embed/UCyu3vs_bwE" title="YouTube Ahorro para la educación de tus hijos" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-color btn-sm close-modal" data-bs-dismiss="modal">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="videoFacebook" data-bs-toggle="modal" data-bs-target="#vidFacebook">
      <div class="modal fade" id="vidFacebook" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Como ahorrar para el futuro educativo de nuestros hijos</h4>
              <button type="button" class="btn-close close-modal" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <iframe class="videoFour video" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsoynaranjadulce%2Fvideos%2F656034342078864%2F&show_text=false&width=560&t=0" title="Facebook Como ahorrar para el futuro educativo de nuestros hijos" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-color btn-sm close-modal" data-bs-dismiss="modal">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="videoAsegurado" data-bs-toggle="modal" data-bs-target="#vidAsegurado">
      <div class="modal fade" id="vidAsegurado" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Asegurando el futuro de nuestros hijos</h4>
              <button type="button" class="btn-close close-modal" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <iframe class="videoFive video" src="https://www.youtube.com/embed/1etIyg0kViE" title="YouTube Asegurando el futuro de nuestros hijos" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-color btn-sm close-modal" data-bs-dismiss="modal">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script>
  $('.videoComo').click(() => {
    $('.videoOne').attr('src','https://www.youtube.com/embed/_ng6wuoxpd0');
  });
  $('.videoConsultorio').click(() => {
    $('.videoTwo').attr('src','https://www.youtube.com/embed/mewaG7vzCXE');
  });
  $('.videoAhorro').click(() => {
    $('.videoThree').attr('src','https://www.youtube.com/embed/UCyu3vs_bwE');
  });
  $('.videoFacebook').click(() => {
    $('.videoFour').attr('src','https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsoynaranjadulce%2Fvideos%2F656034342078864%2F&show_text=false&width=560&t=0');
  });
  $('.videoAsegurado').click(() => {
    $('.videoFive').attr('src','https://www.youtube.com/embed/1etIyg0kViE');
  });
  $('.close-modal').click(() => {
    $('.videoOne').removeAttr('src');
    $('.videoTwo').removeAttr('src');
    $('.videoThree').removeAttr('src');
    $('.videoFour').removeAttr('src');
    $('.videoFive').removeAttr('src');
  });
</script>