@extends('layouts.appUser')
@section('content')

<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <style>
          /* Gaya CSS untuk halaman ini */
          #contact {
            padding: 60px 0;
            display: flex;
            justify-content: center;
            align-items: center;
          }

          #contact .custom-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%; /* Sesuaikan dengan kebutuhan */
            max-width: 600px; /* Sesuaikan dengan kebutuhan */
          }

          #contact form {
            margin-top: 20px;
          }

          #contact form input,
          #contact form textarea,
          #contact form button {
            margin-bottom: 15px;
          }

          #contact form button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }

          #contact form button:hover {
            background-color: #0056b3;
          }
        </style>
        <div class="col-lg-12">
          <!-- class="php-email-form" -->
          @if (Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
          @endif
          @if (Session::has('error'))
          <div class="alert alert-danger alert-dismissible show fade" role="alert">
            {{ Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <!-- Tampilan baru untuk form -->
          <div class="custom-form">
            <form action="{{ route('feedback.store') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 mx-auto">
                  <input type="text" name="nama_visit" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 mx-auto">
                  <input type="email" class="form-control" name="email_visit" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3 mx-auto">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 mx-auto">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
