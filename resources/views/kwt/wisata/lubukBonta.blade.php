<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Example</title>
    <style>
        /* Styling for the layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        #photo-slider {
            width: 60%;
            overflow: hidden;
            position: relative;
        }

        #map {
            width: 60%;
            height: 300px;
            margin-top: 20px;
        }

        #info {
            width: 40%;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Styling for the photo slider */
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            overflow: hidden;
        }

        .slide img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .arrow {
            position: absolute;
            top: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 1;
            user-select: none;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        /* Styling for the information section */
        #info h2 {
            margin-bottom: 10px;
        }

        #info p {
            margin-bottom: 20px;
        }

        #info .advantage {
            float: right;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Photo Slider Section -->
    <div id="photo-slider">
        <div class="arrow left" onclick="prevSlide()">&#10094;</div>
        <div class="slider" id="slider">
            <div class="slide"><img src="1.jpg" alt="Wisata 1"></div>
            <div class="slide"><img src="2.jpg" alt="Wisata 2"></div>
            <!-- Add more slides as needed -->
        </div>
        <div class="arrow right" onclick="nextSlide()">&#10095;</div>
    </div>

    <!-- Information Section -->
    <div id="info">
        <h2>Wisata Nama Wisata</h2>
        <p><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Contoh</p>
        <p><strong>Jarak:</strong> XX km dari lokasi Anda</p>
        <div class="advantage">
            <p><strong>Keunggulan Wisata:</strong> Deskripsi keunggulan wisata dengan tampilan yang bagus.</p>
        </div>
        <p><strong>Deskripsi Wisata:</strong> Deskripsi singkat tentang wisata beserta sedikit sejarahnya.</p>
    </div>

    <!-- Google Maps Section -->
    <div id="map">
        <!-- Embed Google Maps iframe with the location -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6709.606115154191!2d100.27880947272735!3d-0.657440049136391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4de72a9c9b1b7%3A0x2e2e53b762bdcac0!2sPLN%20UPDL%20Padang!5e0!3m2!1sid!2sid!4v1699324118571!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <script>
        // JavaScript for continuous photo slider
        const slider = document.getElementById('slider');
        let isSliding = true;

        setInterval(() => {
            if (isSliding) {
                nextSlide();
            }
        }, 800);

        function nextSlide() {
            const firstSlide = document.querySelector('.slide');
            slider.appendChild(firstSlide.cloneNode(true));
            slider.style.transition = 'none';
            slider.style.transform = 'translate(0)';
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = 'translate(-100%)';
            }, 10);
        }

        function prevSlide() {
            const lastSlide = document.querySelector('.slide:last-child');
            slider.insertBefore(lastSlide.cloneNode(true), slider.firstChild);
            slider.style.transition = 'none';
            slider.style.transform = 'translate(-100%)';
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = 'translate(0)';
            }, 10);
        }
    </script>

</body>
</html>
