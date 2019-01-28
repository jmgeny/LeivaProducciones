    <section id="contact">
      <div class="container contacto">
        <h1 class="text-center">Contacto</h1>
        <div class="row">
          <div class="col-sm-2">
            
          </div>
          <div class="col-sm-6">
            @include('error')
            <form action="send" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="nombre"><strong>Nombre</strong></label>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
              </div>
              <div class="form-group">
                <label for="apellido"><strong>Apellido</strong></label>
                <input type="text" name="apellido" class="form-control" placeholder="apellido">
              </div>          
              <div class="form-group">
                <label for="to"><strong>e-mail</strong></label>
                <input type="mail" name="to" class="form-control" placeholder="ejemplo@ejemplo.com">
              </div>
              <div class="form-group">
                <label for="message"><strong>Mensaje</strong></label>
                <textarea name="message" id="message" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <input type="submit" name="Send" class="btn btn-primary">          
            </form>
          </div>
          <div class="col-sm-4">
                <p><h4>Ezeiza, ARG</h4></p>
                <p><h4>Cel: +54 9 11 3346-5350</h4></p>
                <p><a href="mailto:leivaproducciones@yahoo.com.ar"><h4>leivaproducciones@yahoo.com.ar</h4></a></p>         
          </div>  
        </div>    
      </div>
    </section>