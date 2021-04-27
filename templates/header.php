<head>
    <title>Teddy's Pizza</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        p {
            color: black;
        }

        .brand {
            background: black !important;
        }

        .brand-text {
            color: whitesmoke !important;
            font-family: 'Zen Dots', cursive !important;
        }

        form {
            max-width: 450px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }

        .container {
            color: darkslategrey;
            text-transform: uppercase;

        }

        .card {
            background: seagreen;
        }

        .nav {
            background: black;
            padding: 0;
            margin: 0;
        }

        .card-action {
            border-top: 5px black;
        }

        h4 {
            font-family: 'Zen Dots', cursive;
            color: black;
        }

        h5,
        h6 {
            color: black;
        }
    </style>

</head>

<body class="green darken-4">
    <nav class="nav card z-depth-3">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Teddy's Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn brand">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>