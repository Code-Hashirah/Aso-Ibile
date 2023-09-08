@vite('resources/css/bootstrap.min.css')
    @vite('resources/css/form.css')
    @vite('resources/css/table.css')
    @vite('resources/css/all.min.css')
    @vite('resources/css/navAdmin.css')
    @vite('resources/css/signup.css')
</head>
<body>
<h2 class="text-white">Admin</h2>
        <ul>
            <li><a class="link" onclick="bghover()" href="/"><i class="fas fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a class="link" href="/"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
            <li><a class="link" href="/admin/add-product"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add Product</a></li>
            <li><a class="link" href="/admin/manage-products"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Products</a></li>
            <li><a class="link" href=""><i class="fa fa-user-circle" aria-hidden="true"></i>Users</a></li>
            <li><a class="link" href="/sign-up"><i class="fa fa-user-circle" aria-hidden="true"></i>Add user</a></li>
            <li><a class="link" href=""><i class="fa fa-pie-chart" aria-hidden="true"></i>Statistics</a></li>
            <li><a class="link" href="/sign-in"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
            <li><a class="link" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
        </ul>