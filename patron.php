<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Become the Patron of the Future • Charles Prosser Foundation</title>

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
      --header-h:64px;

      --line:#cfcfcf;
      --dot:#8e8e8e;
      --step:#bdb0a3;

      --bronze:#b86a39;
      --silver:#bfbfbf;
      --gold:#d4af37;
      --plat:#111;
    }

    /* Reset / Base */
    *{margin:0;padding:0;box-sizing:border-box}
    html,body{height:100%}
    body{
      font-family:'Open Sans', Arial, sans-serif;
      color:var(--text); line-height:1.6; background:var(--bg);
      overflow-x:hidden; scroll-behavior:smooth;
    }
    img{max-width:100%; height:auto; display:block}

    /* Header (hamburger) */
    .header{
      position:fixed; top:0; left:0; right:0; height:var(--header-h);
      display:flex; align-items:center; justify-content:space-between;
      padding:10px 20px; background:#fff; z-index:1000;
      box-shadow:0 4px 8px rgba(0,0,0,.1);
    }
    .logo{display:flex; align-items:center}
    .logo img{height:40px}

    .nav{display:none; gap:10px; margin-left:auto}
    .nav a{ text-decoration:none; color:#222; font-weight:700; padding:8px 12px; border-radius:6px }
    .nav a:hover{ background:#f2f2f2 }

    .dropdown{position:relative; display:flex; align-items:center; margin-left:auto}
    .dropdown-btn{ border:none; background:transparent; color:#222; font-size:24px; cursor:pointer; display:flex; align-items:center; justify-content:center }
    .dropdown-content{
      position:absolute; right:0; top:calc(100% + 10px);
      background:#333; min-width:220px; border-radius:8px; box-shadow:0 10px 24px rgba(0,0,0,.18);
      display:none; overflow:hidden; z-index:1200;
    }
    .dropdown.open .dropdown-content{display:block}
    .dropdown-content a{ color:#fff; text-decoration:none; display:block; padding:12px 16px; font-weight:600 }
    .dropdown-content a:hover{ background:#555 }

    @media (min-width:900px){ .nav{display:flex} .dropdown{display:none} }
    @media (max-width:480px){
      :root{ --header-h:56px; }
      .logo img{height:32px}
      .dropdown-btn{font-size:22px}
    }

    /* Layout */
    main{padding-top:var(--header-h)}
    .container{max-width:var(--container); margin:0 auto; padding:0 20px}

    .patron{
      margin:42px auto;
      display:grid;
      grid-template-columns: 1.75fr 1fr;     /* LEFT content | RIGHT image */
      gap:28px;
      align-items:start;
    }

    /* LEFT column (exact structure of mock) */
    .left{
      display:grid;
      grid-template-columns: 88px 1fr;       /* slim col for “03” */
      grid-auto-rows:max-content;
      gap:8px 26px;
    }
    .step-num{
      grid-column:1; grid-row:1; align-self:start;
      font-family:'Merriweather', serif;
      color:var(--step);
      font-size:clamp(48px, 5.4vw, 88px);   /* << smaller 03 */
      line-height:0.9; font-weight:300; letter-spacing:.04em;
      user-select:none; pointer-events:none;
    }
    .title{
      grid-column:2; grid-row:1;
      font-family:'Aboreto', cursive;
      text-transform:uppercase;
      letter-spacing:.06em;
      line-height:1.05;
      font-size:clamp(26px, 3.2vw, 56px);   /* << smaller title */
      text-align:center;
      max-width:20ch; margin:0 auto;
    }
    .lead{
      grid-column:2; grid-row:2;
      text-align:center; color:#333;
      font-size:clamp(14px, 1.2vw, 17px);
      max-width:50ch; margin:16px auto 8px;
    }

    /* Timeline (line + dots + arrow) */
    .timeline{
      grid-column:1 / -1; grid-row:3;
      position:relative; height:26px; margin:18px 0 10px 0;
    }
    .timeline::before{
      content:""; position:absolute; top:50%; left:0; right:0; height:2px;
      background:var(--line); transform:translateY(-50%);
    }
    .mark{position:absolute; top:50%; width:10px; height:10px; border-radius:50%;
      background:var(--dot); transform:translate(-50%,-50%); box-shadow:0 0 0 2px #fff;}
    .m1{left:1.8%} .m2{left:34%} .m3{left:62%} .m4{left:82%}
    .timeline::after{
      content:""; position:absolute; top:50%; left:86%;
      width:22px; height:22px; transform:translate(-50%,-50%) rotate(-45deg);
      border-top:2px solid var(--line); border-right:2px solid var(--line);
      background:transparent;
    }

    /* Tiers */
    .tiers{
      grid-column:1 / -1; grid-row:4;
      display:grid; gap:26px; grid-template-columns:repeat(4,1fr);
      margin-top:6px;
    }
    .tier h3{
      font-family:'Aboreto', cursive;
      letter-spacing:.14em;
      font-size:clamp(18px, 2.2vw, 28px);   /* << bigger tier headings */
      margin-bottom:10px;
    }
    .tier p{ color:var(--muted); font-size:clamp(14px, 1.15vw, 16px); max-width:40ch }
    .tier--bronze h3{ color:var(--bronze) }
    .tier--silver h3{ color:var(--silver) }
    .tier--gold   h3{ color:var(--gold) }
    .tier--plat   h3{ color:var(--plat) }

    /* RIGHT column (tree) */
    .right{
      align-self:start; border-radius:6px; overflow:hidden;
    }
    .right img{
      width:100%; height:100%; object-fit:cover; object-position:center;
      min-height:420px; box-shadow:0 10px 26px rgba(0,0,0,.12);
    }

    /* Footer */
    .footer{
      background:var(--footer); color:#fff; text-align:center; padding:20px;
      font-size:.9em; line-height:1.6; margin-top:32px;
    }
    .footer a{color:#92fe9d; text-decoration:none}
    .footer a:hover{color:#00c9ff}

    /* Responsive */
    @media (max-width:1100px){
      .patron{grid-template-columns: 1.45fr 1fr}
    }
    @media (max-width:900px){
      .patron{grid-template-columns: 1fr; gap:22px}
      .right{order:-1}
      .right img{min-height:0; max-height:60vh}
      .left{grid-template-columns: 72px 1fr}
      .timeline{margin:12px 0 4px}
      .tiers{grid-template-columns:1fr 1fr}
    }
    @media (max-width:560px){
      .left{grid-template-columns:64px 1fr}
      .tiers{grid-template-columns:1fr}
      .title{font-size:clamp(24px, 7.6vw, 38px)}
      .step-num{font-size:clamp(44px, 14vw, 72px)}
      .right img{max-height:48vh}
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
      <a href="patron.php" aria-current="page">Giving</a>
      <a href="object.php">Object & Legal Information</a>
    </nav>

    <div class="dropdown" id="menu">
      <button class="dropdown-btn" id="menuBtn" aria-label="Open menu">
        <i class="fas fa-bars"></i>
      </button>
      <nav class="dropdown-content" aria-label="Mobile navigation">
        <a href="index.php">Home</a>
        <a href="programs.php">Programs</a>
        <a href="fellow.php">Prosser Fellows</a>
        <a href="patron.php">Giving</a>
        <a href="object.php">Object & Legal Information</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="container patron">
      <div class="left">
        <div class="step-num">03</div>

        <h1 class="title">BECOME THE PATRON<br>OF THE FUTURE</h1>

        <p class="lead">
          The Prosser Foundation is member supported and exists because of your generosity.
          Information on how to make a donation is available here.
        </p>

        <div class="timeline" aria-hidden="true">
          <span class="mark m1"></span>
          <span class="mark m2"></span>
          <span class="mark m3"></span>
          <span class="mark m4"></span>
        </div>

        <div class="tiers">
          <article class="tier tier--bronze">
            <h3>BRONZE</h3>
            <p>GBP 5000 – Supporting Academic Platforms that bring the power of AI to schools.</p>
          </article>

          <article class="tier tier--silver">
            <h3>SILVER</h3>
            <p>GBP 10,000 – Funding AI Vocational Curricula that accelerates learning and opportunity.</p>
          </article>

          <article class="tier tier--gold">
            <h3>GOLD</h3>
            <p>GBP 15,000 – Enabling work experience opportunities for high-potential students.</p>
          </article>

          <article class="tier tier--plat">
            <h3>PLATINUM</h3>
            <p>GBP 20,000+ – Leading the charge in reimagining education for the AI era. Exclusive invitations to foundation events and recognition as a Platinum Patron.</p>
          </article>
        </div>
      </div>

      <div class="right">
        <img src="images/tree.png" alt="Tree image"> </div>
    </section>
  </main>

  <footer class="footer">
    12 City Road, London EC12NX, United Kingdom<br>
    <a href="#">Privacy Policy</a><br>
    &copy; 2026 Charles Prosser Foundation
  </footer>

  <script>
    // Mobile-friendly dropdown toggle
    (function(){
      const wrap = document.getElementById('menu');
      const btn  = document.getElementById('menuBtn');

      function toggle(){ wrap.classList.toggle('open'); }
      function closeOnOutside(e){ if(!wrap.contains(e.target)) wrap.classList.remove('open'); }

      if (btn) btn.addEventListener('click', (e)=>{ e.stopPropagation(); toggle(); });
      document.addEventListener('click', closeOnOutside);
      window.addEventListener('keydown', (e)=>{ if(e.key==='Escape') wrap.classList.remove('open'); });
    })();
  </script>
</body>
</html>