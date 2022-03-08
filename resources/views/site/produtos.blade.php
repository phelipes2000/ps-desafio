@extends('layouts.site')

@section('title', 'Produtos')

@section('content')
    <form action="{{ route('site.categorias') }}" method="get" class="form">
        <select name="categoria_id" id="categoria">
            <option value="">Selecione uma Categoria.</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->categoria }}</option>
            @endforeach
        </select>
        <button type="submit">
            Pesquisar.
        </button>
    </form>

    @php
    $i = 0;
    @endphp

    <div>
        @foreach ($produtos as $produto)
            @php
                $i++;
            @endphp

            <section class="loja">
                <div class="card">
                    <h2 class="titulo">{{ $produto->nome }}</h2>
                    <div class="container-categoria-imagem">
                        <img class="imagem" src="/storage/{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                        <span class="categoria">{{ $produto->categoria()->pluck('categoria')->first() }}</span>
                    </div>
                    <p class="texto">{{ $produto->getTitleShortAttribute() }}</p>
                    <div class="money">
                        <span class="quantidade">Quantidade: {{ $produto->quantidade }}</span>
                        <span class="preco">
                            @if ($produto->preco == 0)
                                Esgotado
                            @else
                                Preço: {{ $produto->preco }}
                            @endif
                    </div>
                </div>
            </section>
        @endforeach
    </div>

    @if ($i == 0)
        <div class="card">
            <h2 class="titulo">Desconhecido</h2>
            <div class="container-categoria-imagem">
                <span class="categoria">{{ $categoria->categoria }}</span>
            </div>
            <p class="texto">Não há produtos registrados nessa categoria.</p>
            <div class="money">
                <span class="quantidade">Quantidade: 0</span>
                <span class="preco">Esgotado</span>
            </div>
        </div>
        <style>
            .card {
                margin: 5% 0 5% 25%;
            }

        </style>
    @endif

    @if ($i == 1)
        <style>
            .footer {
                border-top: 2px solid black;
                height: 100px;
                width: 100%;
                background: #3fa0a7;
                display: flex;
                align-items: center;
                bottom: 0;
                position: absolute;
            }

        </style>
    @else
        <style>
            .footer {
                border-top: 2px solid black;
                height: 100px;
                width: 100%;
                background: #3fa0a7;
                display: flex;
                align-items: center;
            }

        </style>
    @endif
@endsection
