<section class="soyCliente">

  <h3 class="titulo__cliente">Atención al Cliente</h3>

  <p class='soyCliente__txtForm'>Llena el formulario y en breve nos pondremos en contacto</p>

  <div class="soycliente__form">

    <form method="post" action="enviar">

      <div class="formulario__parteUno">

        <div class="section01">
          Nombre(s)<span>*</span>
          <input class="formulario__pregunta" type="text" name="nombre" required>
        </div>

        <div class="section01">
          Apellidos<span>*</span>
          <input class="formulario__pregunta" type="text" name="apellidos" required>
        </div>

      </div>

      <div class="formulario__parteDos">

        <div class="section02">
          Teléfono (10 dígitos)<span>*</span>
          <input class="formulario__pregunta" maxlength="10" type="text" name="tel" required>
        </div>

        <div class="section02">
          Correo Electrónico<span>*</span>
          <input class="formulario__pregunta" type="email" name="correo" required>
        </div>

      </div>

      <div class="formulario__parteTres">

        <div class="section03">
          Número de Contrato
          <br>
          <input class="formulario__pregunta" type="text" name="contrato" required>
        </div>

      </div>

      <div class="formulario__parteCuatro">

        <div class="section04">
          Requiero
          <br>
          <select id="requiere" class="formulario__select" name="requiero">
            <option> - Please Select - </option>
            <option> Información sobre el status de mi inversión</option>
            <option> Información sobre el trámite para reembolsos</option>
            <option> Información sobre el pago de mis aportaciones</option>
            <option> Información sobre facturación</option>
            <option> Quiero actualizar mis datos</option>
            <option> Información sobre convenios universitarios</option>
            <option> Información sobre red de alianzas</option>
            <option> Quejas y sugerencias</option>
            <option> Otro</option>
          </select>
        </div>

      </div>

      <div class="formulario__parteCinco">

        <div class="section05">
          Comentarios
          <br>
          <textarea name="comentarios" class="formulario__comentarios"></textarea>
        </div>

      </div>

      <p class='formulario__txt'>
        Mexicana de Becas necesita la información de contacto que nos
        proporcionas para informarte acerca de nuestros productos y
        servicios. Puedes cancelar la recepción de estas comunicaciones
        en cualquier momento. Para obtener más información sobre cómo
        cancelar la recepción de comunicaciones y cómo nos comprometemos
        a proteger y respetar tu información, revisa nuestro Aviso de Privacidad
      </p>

      <input type="submit" value="Enviar" class='btn__formulario'>

    </form>

  </div>

  <img src="view/src/img/ateClientes.png" alt="ATENCION">

  <div class="soyCliente__Contacto">
    <p>Contáctanos</p>
    <p>Horario de atención al cliente</p>
    <p>Lunes a Viernes de 8:30 am a 17:30 pm</p>

    <div class="contacto__item">
      <div class="item">
        <div class="icono__tel"></div>
        <div class="item__txt">Llama al (55) 5511 7377</div>
      </div>
      <div class="item">
        <div class="icono__whats"></div>
        <div class="item__txt">
          <span>Esribenos por WhatsApp <br> (55) 3699 0663 </span>
        </div>
      </div>
      <div class="item">
        <div class="icono__mail"></div>
        <div class="item__txt">
          Mándanos un correo
          <br>
          contacto@mb.com.mx
        </div>
      </div>
    </div>

  </div>


</section>