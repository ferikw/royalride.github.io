<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Ride</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .splash-screen {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 1;
            visibility: visible;
            transition: opacity 1s ease, visibility 1s ease;
        }

        .splash-screen.hide {
            opacity: 0;
            visibility: hidden;
        }

        .splash-screen h1 {
            color: #FFD700;
            font-size: 3em;
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
            text-shadow: 0 0 10px #FFD700, 0 0 20px #FFD700, 0 0 30px #FFD700;
            animation: fadeIn 1.5s ease-out, glow 2s ease-in-out infinite alternate;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 20px #FFD700, 0 0 30px #FFD700, 0 0 40px #FFD700;
            }
            to {
                text-shadow: 0 0 40px #FFD700, 0 0 60px #FFD700, 0 0 80px #FFD700;
            }
        }

        .video-container {
            position: relative;
            width: 80%;
            max-width: 1000px;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.5);
            border-radius: 10px;
            z-index: 1;
        }

        .video-container video {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s ease;
            cursor: pointer;
        }

        .video-container:hover .overlay {
            opacity: 1;
        }

        .play-button {
            font-size: 50px;
            color: #FFD700;
            cursor: pointer;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="splash-screen" id="splashScreen">
        <h1>Royal Ride</h1>
    </div>
    <div class="video-container">
        <video id="video" src="royalroad.mp4" controls></video>
        <div class="overlay" id="overlay">
            <div class="play-button">▶</div>
        </div>
    </div>

    <script>
        const video = document.getElementById('video');
        const overlay = document.getElementById('overlay');
        const splashScreen = document.getElementById('splashScreen');

        window.addEventListener('load', function() {
            setTimeout(function() {
                splashScreen.classList.add('hide');
            }, 3000);
        });

        overlay.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                overlay.style.display = 'none';
            } else {
                video.pause();
                overlay.style.display = 'flex';
            }
        });
    </script>
</body>
</html>
