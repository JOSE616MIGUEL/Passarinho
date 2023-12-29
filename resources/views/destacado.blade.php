
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/miami2.jpg') }}" class="d-block w-100" alt="..." height="700px" width="550px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/miami2.jpg') }}" class="d-block w-100" alt="..." height="700px" width="550px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/miami2.jpg') }}" class="d-block w-100" alt="..." height="700px" width="550px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      <div class="col">
        Column
      </div>
    </div>
  </div>

  <div class="container">
    <!-- Bootstrap 5 Contact Form Snippet -->

<div class="container px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 rounded-3 shadow-lg">
          <div class="card-body p-4">
            <div class="text-center">
              <div class="h1 fw-light">Formulario de contacto</div>
            </div>
  
            <!-- * * * * * * * * * * * * * *
            // * * SB Forms Contact Form * *
            // * * * * * * * * * * * * * * *
  
            // This form is pre-integrated with SB Forms.
            // To make this form functional, sign up at
            // https://startbootstrap.com/solution/contact-forms
            // to get an API token!
            -->
  
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
  
              <!-- Name Input -->
              <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                <label for="name">Nombre</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es requerido.</div>
              </div>
  
              <!-- Email Input -->
              <div class="form-floating mb-3">
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                <label for="emailAddress">Correo Electrónico</label>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Correo es requerido.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Correo no es valido.</div>
              </div>
               <!-- Message Input -->
               <div class="form-floating mb-3">
                <input type="text" class="form-control">
                <label for="message">Número de teléfono </label>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
              </div>

                <!-- Message Input -->
                <div class="form-floating mb-3">
                  <input type="number" class="form-control">
                  <label for="message">¿Cuantas personas Viajan? </label>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>

                     <!-- Message Input -->
                     <div class="form-floating mb-3">
                      <input type="number" class="form-control">
                      <label for="message">¿Cuantos menores de edad Viajan? </label>
                      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>
      
  
              <!-- Message Input -->
              <div class="form-floating mb-3">
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                <label for="message">Mensaje</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
              </div>
  
              <!-- Submit success message -->
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  <p>To activate this form, sign up at</p>
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
              </div>
  
              <!-- Submit error message -->
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
              </div>
  
              <!-- Submit button -->
              <div class="d-grid">
                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button>
              </div>
            </form>
            <!-- End of contact form -->
  
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
