<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="rounded-circle" src="<?=base_url('assets/images/Huly0.jpg')?>"  alt="logo">
            Huly0
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('about')?>">About</a>
              <li class="nav-item">
                <a class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="form">
    <div class="login">
        <h1 class="text-center">Assignment</h1>
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email Address</label>
                <input class="form-control" type="emai" id="email" required>
                
            </div>

            <div class="form-group was-validated">
                <label class="form-label"for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>

            </div>
            <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>
    </div>
    </div>