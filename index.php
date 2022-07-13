<?php
define("HIDDEN_WORD", "GUAYA");
$arr = array(
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>El Ahorcado</title>
</head>

<body>
    <header>
        <h2>EL AHORCADO</h2>
    </header>
    <main>
        <button type="submit" name="submit" class="submit">
            NEXT
        </button>
        <button class="restart">
            RESTART
        </button>
        <button class="start">
            START
        </button>
        <figure class="ahorcado">

            <div class="poste"></div>
            <div class="sosten"></div>
            <div class="muñeco">
                <div class="cabeza"></div>
                <div class="tronco"></div>
                <div class="brazo-izquierdo"></div>
                <div class="brazo-derecho"></div>
                <div class="pierna-izquierda"></div>
                <div class="pierna-derecha"></div>
            </div>
            <figcaption>
                This challenge has <?= count($arr) ?> letters, you must clicked in tiles to discover the hidden word.
            </figcaption>
            <p class="abecedario">
            </p>
        </figure>
        <p class="phrase">

        </p>
    </main>
    <script>
        const HIDDEN_WORD = "Las Luciernagas";
        const btnStart = document.getElementsByClassName("start").item(0)
        const figCaption = document.getElementsByTagName("figcaption").item(0);
        const abecedario = document.getElementsByClassName("abecedario").item(0);
        const phrase = document.getElementsByClassName("phrase").item(0);
        const restart = document.getElementsByClassName("restart").item(0)
        const btnsubmit = document.getElementsByClassName("submit").item(0)
        abecedario.style.display = "none";
        restart.style.display = "none";
        btnStart.addEventListener("click", e => {
            e.preventDefault();
            figCaption.style.display = "none";
            btnStart.style.display = "none";
            abecedario.style.display = "flex";
            restart.style.display = "flex";
            tileCreator()
            spaceCreator()
        })
        restart.addEventListener('click', e => {
            location.reload()
        })
        let alphabet = [
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
        ]

        function tileCreator() {
            alphabet.forEach(letter => {
                const elem = document.createElement("div");
                elem.className = "tile";
                elem.innerHTML = letter;
                abecedario.appendChild(elem);
            });
        }

        function spaceCreator() {
            let space = "";
            for (let i = 0; i < HIDDEN_WORD.length; i++) {
                const elem = document.createElement("input");
                elem.setAttribute("type", "text")
                elem.setAttribute("minlength", "1");
                elem.setAttribute("maxlength", "1");
                elem.setAttribute("required", "true");
                elem.setAttribute("pattern", "[a-z]{1}");
                elem.className = "space";
                phrase.appendChild(elem);

            }
            return space;
        }
    </script>
</body>

</html>