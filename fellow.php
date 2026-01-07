<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Charles Prosser Foundation - Legal Information</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Merriweather:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    :root{
      --text:#111;
      --muted:#555;
      --bg:#fff;
      --footer:#333;
      --container: 1200px;
    }

    /* ========== Reset & Base ========== */
    *{margin:0;padding:0;box-sizing:border-box}
    html,body{height:100%}
    body{
      font-family:'Open Sans', Arial, sans-serif;
      color:var(--text); line-height:1.6; background:var(--bg); overflow-x:hidden;
      scroll-behavior:smooth;
    }
    img{max-width:100%; height:auto; display:block}

    /* ========== Header (same clean hamburger as page 2) ========== */
    .header{
      position:fixed; top:0; left:0; right:0; height:64px;
      display:flex; align-items:center; justify-content:space-between;
      padding:10px 20px; background:#fff; z-index:1000;
      box-shadow:0 4px 8px rgba(0,0,0,.1);
    }
    .logo{display:flex; align-items:center; gap:10px}
    .logo img{height:40px}

    /* Desktop nav */
    .nav{display:none; gap:10px; margin-left:auto}
    .nav a{
      text-decoration:none; color:#222; font-weight:700;
      padding:8px 12px; border-radius:6px;
    }
    .nav a:hover{background:#f2f2f2}

    /* Mobile popup menu */
    .dropdown{position:relative; display:flex; align-items:center; margin-left:auto}
    .dropdown-btn{
      border:none; background:transparent; color:#222; font-size:24px; cursor:pointer;
      display:flex; align-items:center; justify-content:center;
    }
    .dropdown-content{
      position:absolute; right:0; top:calc(100% + 10px);
      background:#333; min-width:220px; border-radius:8px;
      box-shadow:0 10px 24px rgba(0,0,0,.18);
      display:none; overflow:hidden; z-index:1200;
    }
    .dropdown.open .dropdown-content{display:block}
    .dropdown-content a{
      color:#fff; text-decoration:none; display:block;
      padding:12px 16px; font-weight:600;
    }
    .dropdown-content a:hover{background:#555}

    /* Desktop: show inline nav, hide burger */
    @media (min-width: 900px){
      .nav{display:flex}
      .dropdown{display:none}
    }

    /* Spacing below fixed header */
    main{padding-top:64px}
    @media (max-width:480px){
      .header{height:56px; padding:8px 16px}
      .logo img{height:32px}
      .dropdown-btn{font-size:22px}
      main{padding-top:56px}
    }

    /* ========== Layout helpers ========== */
    .container{max-width:var(--container); margin:0 auto; padding:0 20px}
    .section{margin:50px auto}
    @media (max-width:900px){ .section{margin:28px auto} }

    /* ========== Intro row ========== */
    .content-block{
      display:flex; gap:0; align-items:stretch; justify-content:space-between;
    }
    .content-image{flex:1; min-width:0}
    .content-image img{width:100%; height:100%; object-fit:cover}

    .content-text3{
      flex:1; background:#fff; padding:20px; display:flex; flex-direction:column; justify-content:center;
    }
    .hero-title{
      font-family:'Aboreto', cursive;
      font-size:3em; line-height:1.15; color:#222; margin-bottom:14px;
      letter-spacing:.02em;
    }

    /* ========== Generic content blocks ========== */
    .content-text{flex:1; background:#d3c4af; padding:20px; display:flex; flex-direction:column; justify-content:center}
    .content-text2{flex:1; background:#fff; padding:20px; display:flex; flex-direction:column; justify-content:center}

    .content-title{
      font-family:'Merriweather', serif;
      font-size:1.8em; color:#222; margin-bottom:10px; font-weight:700;
    }
    .content-title2{
      font-family:'Merriweather', serif;
      font-size:1.8em; color:#8C8172; margin-bottom:10px; font-weight:700;
    }
    .content-description{
      font-size:1em; color:#333; line-height:1.8;
    }
    .content-description2{
      font-size:1em; color:#8C8172; line-height:1.8;
    }

    /* Center image below intro */
    .center-image{display:flex; justify-content:center; padding:0 20px}
    .center-image img{height:auto; max-height:320px}

    /* ========== Section with background image (Overview/Qualifications) ========== */
    .section2{
      display:flex; justify-content:center; padding:40px 20px;
      background-image:url('images/HomePage.jpg'); /* UPDATED PATH */
      background-size:cover; background-position:center;
    }
    .section-content{
      width:100%; max-width:900px; color:#fff;
      font-size:1.05em; line-height:1.8;
      background:rgba(0,0,0,0.35); padding:24px; border-radius:12px;
      backdrop-filter:saturate(120%) blur(2px);
    }
    .section-content h2{
      font-family:'Aboreto', cursive; font-size:1.7em; margin:16px 0 8px;
      letter-spacing:.01em;
    }
    .section-content hr{
      border:none; height:1px; background:rgba(255,255,255,0.35); margin:14px 0 18px;
    }
    .text-content2{ text-align:left }
    .text-content3{ text-align:right }

    /* ========== Schedule Section ========== */
    .schedule{
      max-width:900px; margin:0 auto; padding:0 20px;
    }
    .schedule h1{
      font-family:'Merriweather', serif; font-size:2rem; margin-bottom:18px; color:#111;
    }
    .schedule .item{ font-size:1.05rem; margin:10px 0; }
    .schedule .cta{ text-align:right; font-weight:700; margin-top:18px }

    /* ========== Footer ========== */
    .footer{
      background:#333; color:#fff; text-align:center; padding:20px; font-size:.9em; line-height:1.6;
    }
    .footer a{color:#92fe9d; text-decoration:none}
    .footer a:hover{color:#00c9ff}

    /* ========== Mobile tweaks ========== */
    @media (max-width:900px){
      .content-block{flex-direction:column; gap:16px}
      .content-image img{height:auto; object-fit:contain; border-radius:8px}
      .content-text, .content-text2, .content-text3{padding:16px; border-radius:8px}
      .hero-title{font-size:2em}
      .center-image img{max-height:240px}
      .section-content{font-size:1em}
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <img src="images/logo.png" alt="Logo"> </div>

    <nav class="nav" aria-label="Main navigation">
      <a href="index.php">Home</a>
      <a href="programs.php">Programs</a>
      <a href="fellow.php">Prosser Fellows</a>
      <a href="patron.php">Giving</a>
      <a href="object.php">Object & Legal Information</a>
    </nav>

    <div class="dropdown" id="menu">
      <button class="dropdown-btn" id="menuBtn" aria-label="Open menu">
        <i class="fas fa-bars"></i>
      </button>
      <nav class="dropdown-content" id="menuList" aria-label="Mobile navigation">
        <a href="index.php">Home</a>
        <a href="programs.php">Programs</a>
        <a href="fellow.php">Prosser Fellows</a>
        <a href="patron.php">Giving</a>
        <a href="object.php">Object & Legal Information</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="section container">
      <div class="content-block">
        <div class="content-image">
          <img src="images/fellow0.jpg" alt="Prosser Fellows overview"> </div>
        <div class="content-text3">
          <h1 class="hero-title">AN ELITE PROGRAM TO IDENTIFY AND NURTURE HIGH-POTENTIAL STUDENTS</h1>
          <img src="images/fellow1.jpg" alt="Prosser Fellows Badge" style="max-height:140px"> </div>
      </div>
    </section>

    <div class="center-image">
      <img src="images/fellow2.jpg" alt="Prosser Fellows Group" /> </div>

    <section class="section2">
      <div class="section-content">
        <hr>
        <div class="text-content2">
          <h2>OVERVIEW</h2>
          <p>The Prosser Fellows Program is an elite summer initiative for high-potential students aspiring to lead in major corporations or family enterprises.
             This selective program combines intensive business studies, using the HBS case method, with hands-on projects for leading multinational companies.
             Fellows work in teams, guided by top business school graduates, tackling real-world issues, conducting site visits, and engaging with corporate leaders.
             Focused on high-demand fields like finance, technology, and consulting, the program sharpens strategic skills and industry insight.
             Applicants are selected for academic excellence and commitment to growth, joining a driven peer community and gaining a strong foundation for future leadership.</p>
        </div>
        <hr>
        <div class="text-content3">
          <h2>QUALIFICATIONS</h2>
          <p>We invite students from Hong Kong and Taiwan who are in grades 9 to 11 to apply. English is used in the program and a high level of English fluency is required.
             The application process includes an application, interviews with Prosser Foundation Directors, submission of your most recent academic transcript, as well as two personal references who can speak by phone.
             We do not favor recommendations from teachers or school administrators. We are interested in individuals who know you and your family and can attest to your abilities and character.
             We want to understand if you can excel in a program that demands commitment, resilience, and adaptability. Prosser Fellows are expected to demonstrate initiative, manage complex projects,
             and engage in meaningful dialogue with industry leaders—qualities we look for through your references and the interview process.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="schedule">
        <h1>Schedule</h1>
        <div class="item"><strong>JANUARY 7, 2026</strong> — APPLICATIONS OPEN</div>
        <div class="item"><strong>FEBRUARY 5, 2026</strong> — APPLICATIONS CLOSE</div>
        <div class="item"><strong>MARCH 15, 2026</strong> — NOTIFICATIONS</div>
        <div class="item"><strong>APRIL 8, 2026</strong> — FELLOWS ORIENTATION</div>
        <div class="item"><strong>JUNE 9, 2026</strong> — PROGRAM COMMENCES</div>
        <div class="item"><strong>JULY 25, 2026</strong> — PROGRAM CONCLUDES</div>
        <div class="cta">EMAIL FORM TO REQUEST APPLICATION</div>
      </div>
    </section>
  </main>

  <footer class="footer">
    12 City Road, London EC12NX, United Kingdom<br>
    <a href="#">Privacy Policy</a><br>
    &copy; 2026 Charles Prosser Foundation
  </footer>

  <script>
    // Mobile-friendly dropdown toggle (click to open/close, tap outside/Escape to close)
    (function(){
      const menu = document.getElementById('menu');
      const btn  = document.getElementById('menuBtn');

      function toggle(){ menu.classList.toggle('open'); }
      function closeOnOutside(e){ if(!menu.contains(e.target)) menu.classList.remove('open'); }

      if (btn) btn.addEventListener('click', (e)=>{ e.stopPropagation(); toggle(); });
      document.addEventListener('click', closeOnOutside);
      window.addEventListener('keydown', (e)=>{ if(e.key==='Escape') menu.classList.remove('open'); });
    })();
  </script>
</body>
</html>