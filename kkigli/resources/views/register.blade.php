<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
      background: #ABD2F6;
    }

    .container-fluid {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    /* Left Section */
    .left-section {
        position: relative;
        height: 100%;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #474747;
        background: #1D6CB2;
    }
    .left-section .background-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #78B6F0;
        clip-path: polygon(60% 0, 100% 0, 100% 100%, 100% 100%);
        z-index: 0;
    }

    /* Right Section */
    .right-section {
        position: relative;
        height: 100%;
        width: 50%;
        background: #afd1f1;
    }
    .right-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: -50px;
        width: 110%;
        height: 100%;
        background-color: #ABD2F6;
        transform: skewX(-10deg);
        z-index: 0;
    }

    /* Register Box */
    .register-box {
      position: fixed; /* Tetap di atas elemen lain */
      top: 50%; /* Vertikal tengah */
      left: 50%; /* Horizontal tengah */
      transform: translate(-50%, -50%); /* Koreksi untuk pusat */
      z-index: 9999; /* Di atas elemen lain */
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 6px 10px 4px 0px rgba(0, 0, 0, 0.5);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .btn-google {
      background-color: #db4437;
      color: white;
    }

    .btn-apple {
      background-color: #000;
      color: white;
    }

    .btn-google:hover, .btn-apple:hover {
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .left-section {
        display: none;
      }

      .right-section {
        width: 100%;
      }
      .register-box {
        background: none;
        box-shadow: none;
      }
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <!-- Left Section -->
    <div class="left-section">
      <div class="background-overlay"></div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <p>Content behind the register box.</p>
    </div>
  </div>

  <!-- Register Box -->
  <div class="register-box">
    <h3 class="mb-4">Sign Up</h3>
    <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person"></i></span>
          <input type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" required autofocus>
        </div>
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-key"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-check2-circle"></i></span>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>
    </form>
    <p>or continue with</p>
    <div class="d-grid gap-2">
      <button class="btn btn-google"><i class="bi bi-google"></i> Sign up with Google</button>
      <button class="btn btn-apple"><i class="bi bi-apple"></i> Sign up with Apple</button>
    </div>
  </div>
</body>
</html>
