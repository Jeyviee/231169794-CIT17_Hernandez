<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPexercise</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>

<div class="container">
    <h1 style="color: black;">WELCOME SA PAGE NA ITO</h1>
    <p style="color: black;">PHP EXERCISE</p>

    <div class="grid">
        <div class="card">
            <div>👨🏼‍💻</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/intro.php" target="_blank">Introduce Yourself</a>
        </div>
        <div class="card">
            <div>🔢</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/SM.php" target="_blank">Simple Math</a>
        </div>
        <div class="card">
            <div>📐</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/ARP.php" target="_blank">Area and Perimeter of a Rectangle</a>
        </div>
        <div class="card">
            <div>🌡️</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/TC.php" target="_blank">Temperature Converter</a>
        </div>
        <div class="card">
            <div>🔁</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/SV.php" target="_blank">Swapping Variables</a>
        </div>
        <div class="card">
            <div>💵</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/SC.php" target="_blank">Salary Calculator</a>
        </div>
        <div class="card">
            <div>🚹</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/bmi.php" target="_blank">BMI Calculator</a>
        </div>
        <div class="card">
            <div>𓍯</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/STM.php" target="_blank">String Manipulation</a>
        </div>
        <div class="card">
            <div>🏦</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/BAS.php" target="_blank">Bank Account Simulation</a>
        </div>
        <div class="card">
            <div>💯</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/SGS.php" target="_blank">Simple Grading System</a>
        </div>
        <div class="card">
            <div>₱</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/CUV.php" target="_blank">Currency Converter</a>
        </div>
        <div class="card">
            <div>✈️</div>
            <a href="http://localhost/231169794-CIT17_Hernandez/TCE.php" target="_blank">Travel Cost Estimator</a>
        </div>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Jvvvvv.
    </footer>
</div>
<style>
    :root {
      --primary: #4f46e5;
      --background: #f9fafb;
      --card-bg: #ffffff;
      --text: #1f2937;
      --shadow: rgba(0, 0, 0, 0.1);
    }

    body {
      position: relative;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #4f46e5 0%, #a5b4fc 100%);
      color: var(--text);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-x: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: repeating-radial-gradient(
          circle at 30% 30%, 
          rgba(255, 255, 255, 0.05) 0 10px,
          transparent 10px 20px
        ),
        repeating-linear-gradient(
          45deg, 
          rgba(255, 255, 255, 0.03) 0 5px,
          transparent 5px 10px
        );
      pointer-events: none;
      z-index: 0;
      animation: slowRotate 60s linear infinite;
    }

    .container {
    position: relative;
    z-index: 1;
    width: 100%;          
    max-width: 1200px;   
    margin: 0 auto;     
    padding: 2rem 1rem;  
    box-sizing: border-box; 
}

    @keyframes slowRotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
            animation: fadeInDown 1s ease-out;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #4b5563;
            animation: fadeInDown 1.2s ease-out;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px var(--shadow);
            transition: 
            transform 0.3s ease,
            box-shadow 0.3s ease,
            border 0.3s ease,
            background-color 0.3s ease;
            border: 2px solid transparent; 
            animation: fadeInUp 1.3s ease-out;
}


        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(255, 165, 0, 0.3); 
            border: 2px solid #f97316; 
            background-color: #fff7ed; 
}


        .card a {
            text-decoration: none;
            color: var(--primary);
            font-weight: bold;
            font-size: 1.1rem;
            display: block;
            margin-top: 0.5rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #9ca3af;
        }
    </style>
</body>
</html>
