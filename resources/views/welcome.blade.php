<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../css/app.css">

    <title>Navire Argo</title>
</head>

<body class="antialiased">

    <!-- Header section -->
    <header>
        <h1>
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
            Les Argonautes
        </h1>
    </header>

    <!-- Main section -->
    <main>

        <!-- New member form -->
        <h2>Ajouter un(e) Argonaute</h2>

        <!-- Add flash messages -->
        @include('notification')

        <form class="new-member-form" action="{{ route('users.store') }}" method="POST">
            @csrf
            <label for="name">Nom de l&apos;Argonaute</label>
            <input id="name" name="name" type="text" class="form__input" placeholder="Charalampos" />
            <button type="submit" class="btn btn-info">Envoyer</button>
        </form>

        <!-- Member list -->
        <h2>Membres de l'équipage</h2>

        <section class="member-list">
            @if($argonautes)
            @foreach($argonautes as $argonaute)
            <div class="member-item">{{ ucfirst($argonaute->name) }}</div>
            @endforeach
            @endif
        </section>
    </main>

    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>

</body>

</html>