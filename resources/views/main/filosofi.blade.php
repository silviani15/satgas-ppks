@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Filosofi Logo</li>
        </ul>
    </nav>
    <hr>

    <h1 style="text-align: center"><b>Filosofi Logo</b></h1>
    <hr />
    <section>
        <main id="main">
            <section class="about pt-4 mt-4" style="background-color: #ffffff !important;">
                <div class="container">
                    <div class="row" style="margin-left: 55px;">
                        <div class="col-lg-6 pt-4 pt-lg-0 pb-4 pt-lg-0">
                            <h3>warnanya misal</h3>
                            <hr class="hr" />
                            <p style="text-align: justify;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Labore temporibus nisi suscipit qui dolorem
                                ipsa occaecati. Omnis corporis aut officiis ducimus beatae autem in. Accusamus et
                                dignissimos velit tempora ut. Maxime occaecati et
                                tempora eligendi quo aut ab. Et voluptates est voluptates est. Nihil sunt labore
                                quisquam. Impedit eum dolorum deleniti suscipit fugit adipisci officia. Esse officiis
                                porro sunt possimus doloribus quia vel. Voluptas
                                rerum nam maiores veritatis. Exercitationem dolore cumque iste corporis omnis occaecati
                                aut. Voluptate enim distinctio natus aliquam est quae fuga est. Adipisci aspernatur quia
                                aut est consequatur consequatur voluptatum
                                explicabo. Ducimus omnis ut minus omnis. Tempora nostrum voluptates modi et labore.
                                Sequi tempora qui voluptatibus et et reiciendis sint. Aspernatur tenetur quo omnis aut.
                                Tempora labore accusamus explicabo rerum.
                                Aliquid dignissimos nisi iste. Eaque rerum atque consequatur quo illo. Dolores aperiam
                                explicabo consequatur fugit saepe. Et asperiores eius aperiam nam quidem sapiente
                                mollitia consequatur. Velit commodi et architecto
                                optio. Cum laboriosam quia voluptatem consectetur tempore tempora vel. Nulla harum
                                adipisci accusantium tempora. Non cum et asperiores aut et. Laboriosam laborum qui est
                                ullam ipsam. Inventore cum veniam illum vero in
                                laudantium id. Sit velit officiis veniam accusantium ut. Et blanditiis voluptas
                                excepturi facere sunt ut. Saepe provident qui aut quia. Voluptatum commodi tempore
                                possimus dicta.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('img/logoppks.png') }}" class="img-fluid" alt=""
                                width="60%" />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </section>
    @include('main.footer')
</body>
