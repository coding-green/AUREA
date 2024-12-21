<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Buret</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            line-height: 1.6;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .image-section {
            flex: 1;
        }

        .image-section img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 8px;
        }

        .content-section {
            flex: 1;
            padding-left: 50px;
        }

        .content-section h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            border-left: 5px solid #00b894;
            padding-left: 15px;
        }

        .content-section p {
            margin-bottom: 20px;
            color: #b2bec3;
        }

        .content-section .highlight {
            color: #00b894;
            font-weight: bold;
        }

        .content-section ul {
            list-style: none;
            margin-top: 20px;
        }

        .content-section ul li {
            margin-bottom: 10px;
            color: #dfe6e9;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .content-section {
                padding-left: 0;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Image Section -->
        <div class="image-section">
            <img src="https://via.placeholder.com/500x300" alt="Placeholder Image">
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h2>Why Choose Buret</h2>
            <p>Buret was founded in 2013 by Natrausal, a passionate skincare enthusiast with a vision to revolutionize the skincare industry. It all started in London, UK, combining years of research and a deep love for natural ingredients to create products that truly make a difference.</p>
            <p class="highlight">Driven by expertise and passion.</p>
            <p>From ancient barbers to modern salons, the hair care industry has evolved significantly. Buret embraces this evolution, offering cutting-edge solutions that blend tradition with innovation to meet the diverse needs of our customers.</p>
            <ul>
                <li>We create products with carefully chosen natural ingredients.</li>
                <li>We have a strong presence in both local and international markets.</li>
                <li>Our team is dedicated to ethical practices and sustainability.</li>
            </ul>
        </div>
    </div>
</body>
</html>
