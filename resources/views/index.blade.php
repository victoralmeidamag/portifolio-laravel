<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Meu Portifólio</title>
</head>

<body>
    <input type="radio" name="color" id="color-1" />
    <input type="radio" name="color" id="color-2" />
    <input type="radio" name="color" id="color-3" />
    <input type="radio" name="color" id="color-4" />
    <input type="radio" name="color" id="color-5" />
    <input type="radio" name="color" id="color-6" />
    <input type="radio" name="color" id="color-7" />
    <input type="radio" name="color" id="color-8" />
    <input type="radio" name="color" id="color-9" />
    <input type="radio" name="color" id="color-10" />
    <input type="checkbox" id="toggler" />
    <input type="checkbox" id="day-night" />

    <div class="style__switcher">
        <label for="toggler" class="style__switcher-toggler">
            <i class="fa-solid fa-gear fa-spin"></i>
        </label>

        <label for="day-night" class="style__switcher-theme">
            <i class="fa-solid fa-sun"></i>
            <i class="fa-solid fa-moon"></i>
        </label>

        <h3 class="style__switcher-title">Cor do Tema</h3>

        <div class="style__switcher-colors">
            <label for="color-1" class="color-1 color"></label>
            <label for="color-2" class="color-2 color"></label>
            <label for="color-3" class="color-3 color"></label>
            <label for="color-4" class="color-4 color"></label>
            <label for="color-5" class="color-5 color"></label>
            <label for="color-6" class="color-6 color"></label>
            <label for="color-7" class="color-7 color"></label>
            <label for="color-8" class="color-8 color"></label>
            <label for="color-9" class="color-9 color"></label>
            <label for="color-10" class="color-10 color"></label>
        </div>
    </div>
    <header class="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">Victor</a>
            <input type="checkbox" id="nav-toggler" style="display: none;">
            <label for="nav-toggler" class="nav__toggle">
                <i class="fa-solid fa-bars"></i>
            </label>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link ">Sobre</a>
                </li>
                <li class="nav__item">
                    <a href="#qualification" class="nav__link">Experiência</a>
                </li>
                <li class="nav__item">
                    <a href="#services" class="nav__link ">Serviços</a>
                </li>
                <li class="nav__item">
                    <a href="#skills" class="nav__link ">Linguagens</a>
                </li>
                <li class="nav__item">
                    <a href="#work" class="nav__link ">Portifólio</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Contato</a>
                </li>
            </ul>

        </nav>
    </header>
    <main class="main">
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__content">
                    <span class="home__small">Olá!</span>
                    <h1 class="home__title"><span>Meu nome é</span> Victor,<br> sou <span> Desenvolvedor BackEnd</span>
                    </h1>
                    <p class="home__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur
                        modi suscipit aperiam qui. Architecto magni ad blanditiis atque nam, mollitia impedit sed ut
                        incidunt sint quod non sequi, suscipit nihil.</p>
                    <div class="home__btns">
                        <a href="#contact" class="btn">Me Contate</a>
                        <a href="#portfolio" class="btn btn--transparent">Portifólio</a>
                    </div>
                </div>
                <div class="home__img-wrapper">
                    <img src="{{ asset('img/perfil-sem-fundo.png') }}" alt="Victor" class="home__img">
                </div>
            </div>
        </section>
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__img-wrapper">
                    <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="about__img">
                    <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="about__img">
                    <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="about__img">
                    <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="about__img">
                </div>

                <div class="about__content">
                    <h2 class="section__title" data-title="Quem sou eu?">Eu sou o Victor, Programador de software</h2>
                    <p class="about__description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam distinctio quo, neque quasi vel
                        dolores earum libero repellendus rerum aperiam excepturi et eius? Blanditiis, illum voluptatem
                        facilis nihil ipsa magni.
                    </p>
                    <ul class="about__data grid">
                        <li class="data__item">
                            <h3 class="data__title">Nome:</h3>
                            <span class="data__description">Victor Magalhães</span>
                        </li>
                        <li class="data__item">
                            <h3 class="data__title">Idade:</h3>
                            <span class="data__description">24 anos</span>
                        </li>
                        <li class="data__item">
                            <h3 class="data__title">Localidade:</h3>
                            <span class="data__description">Bauru-SP</span>
                        </li>
                        <li class="data__item">
                            <h3 class="data__title">Email:</h3>
                            <span class="data__description about__link"><a
                                    href="mailto:victorhugo.almeidamag@gmail.com"
                                    target="_blank">victorhugo.almeidamag@gmail.com</a></span>
                        </li>
                    </ul>

                    <div class="about__bottom">
                        <a href="{{ route('download') }}" class="btn">Dowload Curriculo</a>

                        <div class="about__social-links">
                            <a href="{{ route('github') }}" target="_blank" class="about__social-link">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="{{ route('linkedin') }}" target="_blank" class="about__social-link">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="qualification section" id="qualification">
            <h2 class="section__title title-center" data-title="Minha Qualificação">Qualificação</h2>
            <div class="resume__container container grid">
                <div class="resume__group">
                    <h3 class="resume__heading">Educação</h3>
                    <div class="resume__items">
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">Anhembi Morumbi</h3>
                                <span class="resume__icon">+</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Ciências da Computação</h3>
                                    <span class="resume__date">2021 - Até o momento</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">Alura</h3>
                                <span class="resume__icon">-</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Cursos de Programação</h3>
                                    <span class="resume__date">2021 - Até o momento</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">E.E. Profª ALTINA MAYNARDES DE ARAUJO</h3>
                                <span class="resume__icon">+</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Ensino médio</h3>
                                    <span class="resume__date">2017</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="resume__group">
                    <h3 class="resume__heading">Experiência</h3>
                    <div class="resume__items">
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">Paschoalotto - Serviços Financeiros</h3>
                                <span class="resume__icon">+</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Atendente de telemarketing</h3>
                                    <span class="resume__date">2018 - 2021</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">H.costa Cobranças</h3>
                                <span class="resume__icon">-</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Atendente de telemarketing</h3>
                                    <span class="resume__date">2021 - 2022</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                        <div class="resume__item">
                            <div class="resume__header">
                                <h3 class="resume__subtitle">H.costa Cobranças</h3>
                                <span class="resume__icon">+</span>
                            </div>
                            <div class="resume__content">
                                <div class="resume__date-title">
                                    <h3 class="resume__title">Programador de Software</h3>
                                    <span class="resume__date">2022 - Até o momento</span>
                                </div>
                                <p class="resume__description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, eaque? Ducimus
                                    impedit, sequi harum neque amet molestias numquam nostrum, praesentium dolores
                                    commodi assumenda. Recusandae, est. Consectetur, ad. Facilis, nisi accusamus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services section" id="services">
            <h2 class="section__title title-center" data-title="Serviços">O que eu posso oferecer</h2>
            <div class="services__container container grid">
                <div class="services__item">
                    <i class="fa-brands fa-php services__icon"></i>
                    <h3 class="services__title">BackEnd PHP</h3>
                    <p class="services__description">Trabalhos no BackEnd usando PHP puro a partir da versão 5.4^.
                        Também para Freelancer.</p>
                    <span class="services__no">01</span>
                </div>
                <div class="services__item">
                    <i class="fa-brands fa-laravel services__icon"></i>
                    <h3 class="services__title">BackEnd Laravel</h3>
                    <p class="services__description">Trabalhos no BackEnd usando um dos Framework mais populares de
                        PHP.
                        Também disponível para serviços como Freelancer.</p>
                    <span class="services__no">02</span>
                </div>
                <div class="services__item">
                    <i class="fa-brands fa-js services__icon"></i>
                    <h3 class="services__title">FullStack JavaScript</h3>
                    <p class="services__description">Trabalhos como FullStack usando uma das linguagens mais populares
                        web. Também disponível para serviços como Freelancer.</p>
                    <span class="services__no">03</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-database services__icon"></i>
                    <h3 class="services__title">Banco de Dados</h3>
                    <p class="services__description">Configuração e serviços usando banco de dados relacional e não
                        relacional. Também disponível para serviços como Freelancer.</p>
                    <span class="services__no">04</span>
                </div>
                <div class="services__item">
                    <i class="fa-brands fa-python services__icon"></i>
                    <h3 class="services__title">Python</h3>
                    <p class="services__description">Trabalhos como FullStack usando uma das linguagens mais populares
                        nos dias de hoje. Também disponível para serviços como Freelancer.</p>
                    <span class="services__no">05</span>
                </div>
            </div>
        </section>
        <section class="skills section" id="skills">
            <h2 class="section__title title-center" data-title="Linguagens">Tecnologias com as quais eu trabalho</h2>
            <div class="skills__container container grid">
                <div class="skills__item">
                    <div class="skills__titles">
                        <h3 class="skills__name">PHP</h3>
                        <span class="skills__no">90 %</span>
                    </div>
                    <p class="skills__description">PHP é uma linguagem de programação de código aberto amplamente
                        utilizada para desenvolvimento web, conhecida por sua simplicidade, versatilidade e integração
                        com bancos de dados, sendo uma escolha popular para a criação de sites dinâmicos e interativos.
                    </p>
                    <div class="skills__bar">
                        <div class="skills__percentage" style="width: 90%;">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="skills__item">
                    <div class="skills__titles">
                        <h3 class="skills__name">LARAVEL</h3>
                        <span class="skills__no">80 %</span>
                    </div>
                    <p class="skills__description">Laravel é um framework de desenvolvimento web em PHP que oferece uma
                        sintaxe elegante e expressiva, além de uma ampla gama de ferramentas e recursos pré-construídos,
                        facilitando a criação de aplicativos web robustos e escaláveis.
                    </p>
                    <div class="skills__bar">
                        <div class="skills__percentage" style="width: 80%;">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="skills__item">
                    <div class="skills__titles">
                        <h3 class="skills__name">JavaScript</h3>
                        <span class="skills__no">75 %</span>
                    </div>
                    <p class="skills__description">JavaScript é uma linguagem de programação de alto nível,
                        interpretada,
                        amplamente usada para desenvolvimento web, permitindo a criação de páginas dinâmicas e
                        interativas, além de aplicativos web completos
                    </p>
                    <div class="skills__bar">
                        <div class="skills__percentage " style="width: 75%;">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="skills__item">
                    <div class="skills__titles">
                        <h3 class="skills__name">Python</h3>
                        <span class="skills__no">55 %</span>
                    </div>
                    <p class="skills__description">
                        Python é uma linguagem de programação de alto nível, interpretada, e de propósito geral,
                        conhecida por sua sintaxe simples e legibilidade. É amplamente utilizada em uma variedade de
                        domínios, incluindo desenvolvimento web, ciência de dados, automação de tarefas e inteligência
                        artificial. Python suporta múltiplos paradigmas de programação, como orientação a objetos,
                        programação funcional e programação imperativa, tornando-a uma escolha versátil para
                        desenvolvedores.
                    </p>
                    <div class="skills__bar">
                        <div class="skills__percentage" style="width: 55%;">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="skills__item">
                    <div class="skills__titles">
                        <h3 class="skills__name">Banco de Dados relacional</h3>
                        <span class="skills__no">85 %</span>
                    </div>
                    <p class="skills__description">
                        Um banco de dados relacional é um tipo de banco de dados que organiza os dados em tabelas com
                        relações definidas entre elas. É baseado no modelo relacional e utiliza consultas SQL
                        (Structured Query Language) para recuperar e manipular os dados. Esses bancos de dados são
                        amplamente utilizados em uma variedade de aplicações, oferecendo consistência, integridade e
                        flexibilidade na gestão de dados. Exemplos populares incluem MySQL, PostgreSQL e SQL Server.
                    </p>
                    <div class="skills__bar">
                        <div class="skills__percentage" style="width: 85%;">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="work section" id="work">
            <h2 class="section__title title-center" data-title="Portifólio">Últimos Projetos</h2>


            <div class="work__container container grid">
                <a href="{{ route('flappy') }}" target="_blank">
                    <div class="work__card">
                        <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="work__img">

                        <div class="work__details">
                            <h3 class="work__title">Jogo Flappy Bird</h3>
                            <span class="work__description">Jogo feito em Python, utilizando a biblioteca PyGame</span>

                        </div>
                    </div>
                </a>
                <a href="{{ route('previsao') }}" target="_blank">
                    <div class="work__card">
                        <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="work__img">
                        <div class="work__details">
                            <h3 class="work__title">Previsão do tempo</h3>

                            <span class="work__description">Previsão do tempo feito em Python utilizando Flask no
                                BackEnd, e
                                Vue.js no FrontEnd</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('filmes') }}" target="_blank">
                    <div class="work__card">
                        <img src="{{ asset('img/1705778006399.jpg') }}" alt="" class="work__img">
                        <div class="work__details">
                            <h3 class="work__title">Aplicativo de Filmes</h3>

                            <span class="work__description">Um site de informações de filmes feito em LARAVEL E
                                TailwindCss, usando a API TMDB(The Movie Database)</span>

                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="contact section" id="contact">
            <h2 class="section__title title-center" data-title="Contato">Contate-me</h2>
            <div class="contact__container container grid">
                <div class="contact__details">
                    <div class="contact__item">
                        <i class="fa-solid fa-phone contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Me ligue</h3>
                            <span class="contact__data">(14)99856-9255</span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <i class="fa-brands fa-whatsapp contact__icon"></i>
                        <div>
                            <h3 class="contact__title">WhatsApp</h3>
                            <span class="contact__data">
                                <a href="{{ route('whatsapp') }}" target="_blank">(14)99856-9255</a>
                            </span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <i class="fa-solid fa-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">E-mail</h3>
                            <span class="contact__data"><a href="mailto:victorhugo.almeidamag@gmail.com"
                                    target="_blank">victorhugo.almeidamag@gmail.com</a>
                            </span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <i class="fa-solid fa-location-dot contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Localização</h3>
                            <span class="contact__data">Bauru-SP</span>
                        </div>
                    </div>

                </div>
                <form action="" class="contact__form">
                    <div class="form__group">
                        <div class="form__input">
                            <input type="text" placeholder="Nome" class="input__control">
                        </div>
                        <div class="form__input">
                            <input type="email" placeholder="E-mail" class="input__control">
                        </div>
                    </div>
                    <div class="form__input">
                        <input type="text" placeholder="Assunto" class="input__control">
                    </div>
                    <div class="form__input">
                        <textarea name="" id="" placeholder="Mensagem" cols="30" rows="10"
                            class="input__control textarea"></textarea>
                    </div>
                    <button class="btn contact__btn">Enviar</button>
                </form>
            </div>
        </section>
        <footer class="footer">
            <div class="footer__container container">
                <p class="footer__copyright">&copy; 2024 Victor. Todos direitos Reservados</p>
                <div class="footer__social-links">
                    <a href="{{ route('github') }}" target="_blank" class="footer__social-link">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="{{ route('linkedin') }}" target="_blank" class="footer__social-link">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
