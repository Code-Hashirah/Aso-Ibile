    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/form.css')
    @vite('resources/css/table.css')
    @vite('resources/css/all.min.css')
    @vite('resources/css/navAdmin.css')
    @vite('resources/css/signup.css')
</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: rgb(26, 7, 7); color:white;">
<div class="container-fluid">
    <a class="navbar-brand text-white" href="/">Aso Ibile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto ">
        <li class="nav ">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav">
          <a class="nav-link" href="/products">Aso ibile</a>
        </li>
        <li class="nav">
          <a class="nav-link" href="/sign-in">Login</a>
        </li>
        <li class="nav">
          <a class="nav-link" href="/sign-up">Register</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>