@extends('layout.base')

<head>
  <!-- Styles -->
  <link href="{{ asset('css/about.css') }}" rel="stylesheet">
</head>

@section('content')
<header id="highlight">
  <div class="header-content">
    <div class="header-info">
      <h1>HOSPEDAGEM DE SITES</h1>
      <p class="header-sub">
        Tenha site e emails a partir
        de R$ 4,50 /mês
      </p>
      <p class="header-text">
        Lorem Ipsum é simplesmente uma
        simulação de texto da indústria tipográfica e
        de impressos, e vem sendo utilizado desde
        o século XVI.
      </p>
    </div>
  </div>
</header>
<section id="plans" class="plans-container">
  <div class="plans-title">
    Conheça os planos da <strong>Matilha.<span class="red">host</span></strong>
  </div>
  <div class="plans-content">
    <div class="plan-card bg-dark">
      <img src="img/img_dog_1.png" alt="plano pug">
      <span class="title-card">Pug</span>
      <span>Solução ideal para iniciantes</span>
      <div class="separator"></div>
      <span>R$ 4,99 /mês</span>
      <ul>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
      </ul>
      <button>Comprar</button>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_2.png" alt="plano buldogue">
      <span class="title-card">Pug</span>
      <span>Solução ideal para medianos</span>
      <div class="separator"></div>
      <span>R$ 4,99 /mês</span>
      <ul>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
      </ul>
      <button>Comprar</button>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_3.png" alt="plano doberman">
      <span class="title-card">Pug</span>
      <span>Solução ideal para avançados</span>
      <div class="separator"></div>
      <span>R$ 4,99 /mês</span>
      <ul>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
      </ul>
      <button>Comprar</button>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_4.png" alt="plano pitbull">
      <span class="title-card">Pug</span>
      <span>Solução ideal para experientes</span>
      <div class="separator"></div>
      <span>R$ 4,99 /mês</span>
      <ul>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
      </ul>
      <button>Comprar</button>
    </div>
  </div>
</section>
@endsection