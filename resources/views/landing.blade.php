<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading.....</title>
    <link rel="icon" href="{{ asset('img/maskott2.png') }}">

    <!-- FONT POPPINS PREMIUM -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #fffaf5 0%, #ffe7d2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .loader {
            text-align: center;
            color: #fff;
        }

        /* ===================== MASKOT ===================== */
        .maskot {
            width: 180px;
            margin-bottom: 25px;
            opacity: 0;
            transform: scale(0.8);
            animation: maskotFade 1s forwards ease-out;
        }

        @keyframes maskotFade {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ===================== LETTER ANIMATION ===================== */
       .title {
    font-size: 38px;
    font-weight: 900;
    letter-spacing: 6px; /* tambahin jarak antar huruf */
    line-height: 1.6; /* jarak vertikal antar baris jika nanti multi-line */
    display: inline-block;
    opacity: 1;

    /* Gradient text */
    background: linear-gradient(135deg, #16324F, #1A4C78);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.title span {
    display: inline-block;
    opacity: 0;
    transform: translateY(25px);
    animation: letterIn 0.45s forwards;

    /* Gradient text */
    background: linear-gradient(135deg, #16324F, #1A4C78);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

        @keyframes letterIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Progress bar */
        .progress-bar {
            width: 280px;
            height: 7px;
            margin: 40px auto 0;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-fill {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #F48B25, #FFC85A);
            animation: fillBar 4s forwards ease;
        }

        @keyframes fillBar {
            100% {
                width: 100%;
            }
        }

        /* fade-out transition */
        .fade-out {
            animation: fadeOut 0.7s forwards;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: scale(1.04);
            }
        }
        .maskot-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

.maskot {
    width: 180px;
    opacity: 0;
    transform: scale(0.8);
    animation: maskotFade 1s forwards ease-out;
    margin-bottom: 25px;
}
    </style>
</head>

<body>

   <body>

    <div class="loader" id="loader">

        <!-- MASKOT DIATAS, POSISI CENTER -->
        <div class="maskot-wrapper">
            <img src="/img/mascot.png" class="maskot" alt="Maskot">
        </div>

        <!-- TEKS -->
        <h1 class="title" id="animatedText"></h1>

        <!-- PROGRESS -->
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>

    </div>

    <script>
        const text = "SMK FORT DE KOCK BUKIT TINGGI";
        const container = document.getElementById("animatedText");

        // Generate span per huruf
        text.split("").forEach((char, index) => {
            const span = document.createElement("span");
            span.textContent = char;
            span.style.animationDelay = `${index * 0.12 + 1}s`;
            container.appendChild(span);
        });

        // Redirect setelah selesai
        const totalTime = text.length * 120 + 4500;

        setTimeout(() => {
            document.getElementById("loader").classList.add("fade-out");
            setTimeout(() => {
                window.location.href = "/";
            }, 700);
        }, totalTime);
    </script>

</body>


</html>
