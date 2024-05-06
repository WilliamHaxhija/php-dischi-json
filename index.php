<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

    <div id="app">
        <header class="py-3 bg-black">
            <div class="container">
                <div class="w-25">
                    <img class="w-25"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png"
                        alt="logo">
                </div>
            </div>
        </header>

        <main class="bg-dark">
            <div class="container text-center">
                <div class="row justify-content-center py-4">
                    <div class="col-3 bg-black py-3 px-4 m-3 border border-black rounded-4" v-for="album, index in albums">

                        <div class="card bg-black text-light">
                            <img :src="album.poster" class="card-img-top" :alt="album.title">
                            <div class="card-body">
                                <h5>{{album.title}}</h5>
                                <span>{{album.author}}</span>
                                <h6>{{album.year}}</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>