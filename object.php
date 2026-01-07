<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Objects & Legal Information • Charles Prosser Foundation</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Merriweather:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    :root{
      --text:#111;
      --muted:#555;
      --bg:#fff;
      --footer:#333;
      --container:1200px;
      --panel: rgba(255,255,255,0.1);
    }

    /* ===== Reset & Base ===== */
    *{margin:0;padding:0;box-sizing:border-box}
    html,body{height:100%}
    body{
      font-family:'Open Sans', Arial, sans-serif;
      color:var(--text); line-height:1.6; background:var(--bg);
      overflow-x:hidden; scroll-behavior:smooth;
    }
    img{max-width:100%; height:auto; display:block}

    /* ===== Header (clean popup hamburger) ===== */
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

    /* Push content below fixed header */
    main{padding-top:64px}
    @media (max-width:480px){
      .header{height:56px; padding:8px 16px}
      .logo img{height:32px}
      .dropdown-btn{font-size:22px}
      main{padding-top:56px}
    }

    /* ===== Layout helpers ===== */
    .container{max-width:var(--container); margin:0 auto; padding:0 20px}
    .section{margin:50px auto}
    @media (max-width:900px){ .section{margin:28px auto} }

    /* ===== Hero / Intro row ===== */
    .content-block{
      display:flex; gap:0; align-items:stretch; justify-content:space-between;
    }
    .content-image{flex:1; min-width:0}
    .content-image img{width:100%; height:100%; object-fit:cover}

    .content-text3{
      flex:1; background:#fff; padding:20px; display:flex; flex-direction:column; justify-content:center;
      position:relative; min-width:0;
    }
    .hero-title{
      font-family:'Aboreto', cursive;
      font-size:2.6em; line-height:1.15; color:#222; margin-bottom:10px; letter-spacing:.02em;
    }
    .hero-sub{
      font-family:'Merriweather', serif; font-weight:700; color:#333; margin-top:8px; font-size:1.1rem;
    }

    /* Badge (04) — desktop: absolute top-right with reserved space; mobile: inline above title */
    .badge-number{
      position:absolute; right:10px; top:10px; width:160px; pointer-events:none;
    }
    /* Reserve space so title never runs underneath badge on desktop/tablet */
    @media (min-width:901px){
      .content-text3{padding-right:200px;}
    }
    /* On mobile, stack badge above title and shrink it */
    @media (max-width:900px){
      .badge-number{
        position:static; width:84px; margin:0 0 8px auto; /* right-aligned above title */
      }
      .content-text3{padding-right:0;}
      .hero-title{font-size:2em}
      .hero-sub{font-size:1rem}
    }

    /* ===== Directors (colored section) ===== */
    .section2{
      background:#A39685; color:#fff; padding:40px 0;
    }
    .section2 .panel{
      background:var(--panel); border-radius:12px; padding:22px;
      backdrop-filter:saturate(120%) blur(2px);
    }
    .section2 h2{
      font-family:'Aboreto', cursive; font-size:1.7em; text-align:center; margin-bottom:10px;
    }
    .columns{
      display:flex; gap:20px; margin-top:14px;
    }
    .col{flex:1; min-width:0}
    .col h3{
      font-family:'Merriweather', serif; font-size:1.15rem; margin-bottom:6px; color:#fff;
      letter-spacing:.01em;
    }
    .col p{font-size:1rem}

    /* ===== Objects section (white) ===== */
    .section3{background:#fff; color:#111; padding:40px 0}
    .section3 .intro{
      text-align:center; max-width:900px; margin:0 auto 22px auto;
    }
    .section3 h2{
      font-family:'Aboreto', cursive; font-size:1.8em; margin-bottom:6px;
    }
    .section3 p{max-width:900px; margin:0 auto}
    .object-image{max-height:350px; margin:26px auto}

    .bullets{
      max-width:900px; margin:0 auto; margin-top:16px;
      background:#f7f7f7; border-radius:12px; padding:18px;
    }
    .bullet-columns{display:flex; gap:24px}
    .bullet-columns ul{margin-left:18px}
    .bullet-columns li{margin:8px 0}

    /* ===== Reports / Contacts (gray) ===== */
    .section4{background:#989696; color:#fff; padding:40px 0}
    .section4 .panel{
      background:var(--panel); border-radius:12px; padding:22px; text-align:center;
      backdrop-filter:saturate(120%) blur(2px);
    }
    .section4 h3{
      font-family:'Merriweather', serif; letter-spacing:.15em; margin:8px 0;
    }

    /* ===== Footer ===== */
    .footer{
      background:var(--footer); color:#fff; text-align:center; padding:20px; font-size:.9em; line-height:1.6;
    }
    .footer a{color:#92fe9d; text-decoration:none}
    .footer a:hover{color:#00c9ff}

    /* ===== Mobile tweaks for columns ===== */
    @media (max-width:900px){
      .content-block{flex-direction:column; gap:16px}
      .content-image img{height:auto; object-fit:contain; border-radius:8px}
      .content-text3{padding:16px; border-radius:8px}

      .columns{flex-direction:column}
      .bullet-columns{flex-direction:column}
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
      <a href="object.php" aria-current="page">Object & Legal Information</a>
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
          <img src="images/objects0.jpg" alt="Objects overview image"> </div>
        <div class="content-text3">
          <img src="images/4.jpg" class="badge-number" alt="Section number 04"> <h1 class="hero-title">FOUNDATION OBJECTS AND<br>LEGAL INFORMATION</h1>
          <div class="hero-sub">DIRECTORS, OBJECTS, REPORTS, AND CONTACTS</div>
        </div>
      </div>
    </section>

    <section class="section2">
      <div class="container">
        <div class="panel">
          <h2>Directors</h2>
          <hr style="border:none;height:1px;background:rgba(255,255,255,0.35);margin:12px 0 18px">
          <div class="columns">
            <div class="col">
              <h3>Godwin Hwa</h3>
              <p>Canadian citizen from Montreal; earned Master’s degrees in Engineering from Cornell. After returning to Hong Kong, he received an MBA with a focus on management science. Mr. Hwa chairs the Governance Committee.</p>
            </div>
            <div class="col">
              <h3>Michael McNabb</h3>
              <p>Director of the Prosser Foundation and Corporate Secretary. His career has been primarily in Asia, including Managing Partner (Coopers &amp; Lybrand Consulting, China), CEO (Bacardi Martini Asia), CEO (TVSN PTY Ltd., Sydney), and board roles with startups across the region. He is a graduate of Stanford University.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section3">
      <div class="container">
        <div class="intro">
          <h2>OBJECTS</h2>
          <p>The charity’s objects are restricted to advancing education, with a focus on vocational and practical education. We support scholarships and grants, improve resources, invest in innovative programs, and advocate for policies that strengthen school-to-work pathways. We aim to bridge education with employer needs so students are prepared for successful careers. This will be achieved in particular, but not exclusively, by:</p>
        </div>

        <img src="images/objects1.jpg" class="object-image" alt="Education and vocational training"> <div class="bullets">
          <div class="bullet-columns">
            <div class="col">
              <ul>
                <li><strong>Financial Support:</strong> Fund high schools, colleges, and training centres, focusing on vocational and practical education.</li>
                <li><strong>Curriculum &amp; Tech Investment:</strong> Develop academic and vocational resources and technology.</li>
                <li><strong>Work-Based Opportunities:</strong> Sponsor apprenticeships, internships, and work-learning for students and graduates.</li>
                <li><strong>Education Awareness:</strong> Promote the value of education in local communities.</li>
                <li><strong>Collaborative Partnerships:</strong> Partner with businesses and organizations to support vocational programs and student work experiences.</li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><strong>Career Support:</strong> Provide guidance, counselling, and mentorship for students and graduates.</li>
                <li><strong>Industry Connections:</strong> Facilitate mentorship and networking with professionals and employers.</li>
                <li><strong>Training Improvement:</strong> Fund research and projects to enhance academic and vocational methods.</li>
                <li><strong>Facility Development:</strong> Finance construction and upgrades for training spaces.</li>
                <li><strong>Impact Evaluation:</strong> Monitor and evaluate the charity’s educational impact.</li>
                <li><strong>Policy Advocacy:</strong> Collaborate with policymakers to support comprehensive education pathways.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section4">
      <div class="container">
        <div class="panel">
          <h3>ANNUAL REPORTS</h3>
          <p>Details about the annual reports will be provided upon request or when published.</p>
          <br>
          <h3>CONTACTS</h3>
          <p>12 City Road, London EC12NX, United Kingdom</p>
          <p>Email: <u>programs@prosser.foundation</u></p>
        </div>
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