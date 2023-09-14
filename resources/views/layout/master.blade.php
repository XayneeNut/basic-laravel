<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

@yield('style')
<style>
    a {
        padding: 8px 16px;
        color: black;
        font-family: Poppins;
        text-decoration: none
    }

    p {
        padding: 8px 16px;
        color: black;
        font-family: Poppins;
    }

    .container {
        justify-content: space-between;
        display: flex;
    }

    h1 {
        font-family: Poppins;
    }
</style>

<body>

    <div class="header">
        <header>
            <div class="content">
                <nav>
                    <a href="/home">home</a>
                    <a href="/data-diri">riwayat</a>
                    <a href="/profile/4">profile</a>
                    <a href="/post">post</a> 
                </nav>
            </div>
        </header>
    </div>



    @yield('content')

    <footer>
        <p>saya baru belajar website</p>
    </footer>

</body>

</html>
