<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <title>💖 Saint-Valentin 2026 – réception WhatsApp 💖</title>
  <!-- Font Awesome 6 (free) pour icônes réalistes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* --------------------------------------------- */
    /* 1. RESET & VARIABLES                          */
    /* --------------------------------------------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    }

    body {
      background: #0b0101;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 12px;
      position: relative;
      overflow-x: hidden;
      color: #fff;
    }

    /* --------------------------------------------- */
    /* 2. FLEURS ANIMÉES (100+ pétales)              */
    /* --------------------------------------------- */
    .flower-petal {
      position: fixed;
      pointer-events: none;
      z-index: 5;
      font-size: 2.2rem;
      opacity: 0;
      animation: petalFloat 18s linear infinite;
      filter: drop-shadow(0 0 8px rgba(255, 60, 60, 0.6));
      will-change: transform, opacity;
    }

    .flower-petal::before {
      content: "🌸";
    }

    .flower-petal.rose::before { content: "🌹"; color: #ff3b3b; text-shadow: 0 0 12px #ff0000; }
    .flower-petal.tulipe::before { content: "🌷"; color: #ff9f9f; }
    .flower-petal.blanc::before { content: "💮"; color: #fff; text-shadow: 0 0 12px #ffb6b6; }
    .flower-petal.coeur::before { content: "❤️"; font-size: 2.5rem; }
    .flower-petal.noir::before { content: "🖤"; color: #ccc; text-shadow: 0 0 15px #ff3b3b; }
    .flower-petal.petale::before { content: "🌺"; color: #ff6f6f; }

    @keyframes petalFloat {
      0% { transform: translateY(110vh) rotate(0deg) scale(0.4); opacity: 0; }
      10% { opacity: 0.9; }
      30% { transform: translateY(75vh) rotate(120deg) scale(0.9); }
      50% { transform: translateY(50vh) rotate(240deg) scale(1.2); }
      80% { transform: translateY(20vh) rotate(360deg) scale(0.7); opacity: 0.5; }
      100% { transform: translateY(-20vh) rotate(480deg) scale(0.3); opacity: 0; }
    }

    /* coeurs volants en plus */
    .floating-heart {
      position: fixed;
      font-size: 1.8rem;
      z-index: 4;
      pointer-events: none;
      animation: heartFloat 10s ease-in infinite;
      color: #ff4d4d;
      filter: drop-shadow(0 0 5px white);
    }
    @keyframes heartFloat {
      0% { transform: translateY(100vh) scale(0.3); opacity: 0; }
      20% { opacity: 1; }
      80% { opacity: 0.7; }
      100% { transform: translateY(-10vh) scale(1.5); opacity: 0; }
    }

    /* --------------------------------------------- */
    /* 3. CONTENEUR PRINCIPAL (verre)                */
    /* --------------------------------------------- */
    .app {
      width: 100%;
      max-width: 560px; /* parfait pour mobile */
      background: rgba(20, 5, 5, 0.7);
      backdrop-filter: blur(20px) saturate(180%);
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border: 2px solid rgba(255, 80, 80, 0.4);
      border-radius: 48px 48px 36px 36px;
      box-shadow: 0 30px 60px rgba(0,0,0,0.9), 0 0 0 2px #c00030 inset, 0 0 40px #ff4d4d33;
      padding: 24px 20px 30px;
      position: relative;
      z-index: 30;
      transition: transform 0.2s ease;
    }

    /* --------------------------------------------- */
    /* 4. PAGES (transition douce)                   */
    /* --------------------------------------------- */
    .page {
      display: none;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.4s cubic-bezier(0.2, 0.9, 0.3, 1), transform 0.4s ease;
    }
    .page.active {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }

    /* --------------------------------------------- */
    /* 5. TYPO & TITRES                             */
    /* --------------------------------------------- */
    h1, h2 {
      font-weight: 700;
      letter-spacing: 1px;
      text-align: center;
      text-shadow: 0 4px 12px rgba(0,0,0,0.7), 0 0 15px #ff5e5e;
    }
    h1 {
      font-size: 2.2rem;
      background: linear-gradient(135deg, #fff2f2, #ffc9c9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 12px;
    }
    h2 {
      font-size: 1.9rem;
      color: #ffdbdb;
      border-bottom: 3px solid #b3003c;
      display: inline-block;
      padding-bottom: 6px;
      margin-bottom: 24px;
    }

    /* --------------------------------------------- */
    /* 6. BOUTONS (ultra stylés)                    */
    /* --------------------------------------------- */
    button {
      background: #b00030;
      border: none;
      color: white;
      font-weight: 600;
      padding: 16px 24px;
      border-radius: 60px;
      font-size: 1.2rem;
      cursor: pointer;
      box-shadow: 0 10px 0 #4f0018, 0 12px 24px rgba(0,0,0,0.6);
      transition: all 0.08s linear;
      border: 2px solid #ffa0a0;
      flex: 1 1 auto;
      min-width: 140px;
      backdrop-filter: blur(4px);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    button:active {
      transform: translateY(8px);
      box-shadow: 0 4px 0 #4f0018, 0 12px 24px black;
    }

    button.secondary {
      background: #1f1f1f;
      border-color: #aaa;
      box-shadow: 0 10px 0 #111;
    }

    button i {
      font-size: 1.3rem;
    }

    .nav-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 32px;
      justify-content: center;
    }

    /* --------------------------------------------- */
    /* 7. CARTES PROMESSES (page 1)                  */
    /* --------------------------------------------- */
    .bouquet-bg {
      background: radial-gradient(circle at 30% 30%, #ff3b3b20, transparent 70%);
      border-radius: 40px;
      padding: 16px 10px;
    }

    .promesse-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      margin: 28px 0;
    }

    .promesse-card {
      flex: 1 1 160px;
      background: #2c0c0c;
      border: 2px solid #a00028;
      border-radius: 36px;
      padding: 22px 12px;
      box-shadow: 0 12px 0 #4a0010, 0 18px 30px black;
      transition: transform 0.2s, box-shadow 0.2s;
      text-align: center;
      backdrop-filter: blur(5px);
    }

    .promesse-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 0 #4a0010, 0 25px 30px black;
    }

    .promesse-card h3 {
      color: #ffa0a0;
      margin-bottom: 12px;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
    }

    /* --------------------------------------------- */
    /* 8. PHOTOS (réelles via Picsum)                */
    /* --------------------------------------------- */
    .photos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
      gap: 16px;
      margin: 28px 0;
    }

    .photo-reelle {
      aspect-ratio: 1/1;
      border-radius: 32px;
      border: 4px solid white;
      box-shadow: 0 15px 0 #440011, 0 20px 30px black;
      overflow: hidden;
      transition: 0.2s ease;
      position: relative;
      cursor: pointer;
    }

    .photo-reelle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s;
    }

    .photo-reelle:hover img {
      transform: scale(1.1);
    }

    .photo-reelle::after {
      content: "\f030";  /* camera icon */
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      position: absolute;
      bottom: 6px;
      right: 8px;
      background: rgba(0,0,0,0.7);
      color: white;
      padding: 6px 10px;
      border-radius: 40px;
      font-size: 1rem;
      opacity: 0.8;
      pointer-events: none;
    }

    /* --------------------------------------------- */
    /* 9. TICKER MESSAGES (défilant)                */
    /* --------------------------------------------- */
    .ticker-wrapper {
      background: #1f0404;
      border-radius: 60px;
      padding: 18px 12px;
      border: 2px solid #ff6b6b;
      margin: 32px 0 16px;
      overflow: hidden;
      box-shadow: inset 0 0 25px #2b0000, 0 10px 20px black;
    }

    .ticker-content {
      display: inline-block;
      white-space: nowrap;
      animation: tickerMove 28s linear infinite;
      font-size: 1.7rem;
      font-weight: 600;
      color: #ffdede;
    }

    .ticker-content span {
      display: inline-block;
      background: #3d1212;
      padding: 10px 32px;
      margin-right: 30px;
      border-radius: 60px;
      border: 2px solid #ff9f9f;
      box-shadow: 0 0 20px red;
    }

    @keyframes tickerMove {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    /* pause au survol */
    .ticker-wrapper:hover .ticker-content {
      animation-play-state: paused;
    }

    /* --------------------------------------------- */
    /* 10. CALENDRIER (février 2026)                */
    /* --------------------------------------------- */
    .calendar {
      background: #240a0a;
      border-radius: 48px;
      padding: 22px 12px;
      border: 3px solid #b3003c;
      box-shadow: 0 15px 0 #4a0010, inset 0 0 30px #470000;
      margin: 30px 0 20px;
    }

    .month-header {
      font-size: 2rem;
      font-weight: 600;
      text-align: center;
      color: #ffb6b6;
      margin-bottom: 20px;
    }

    .weekdays {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      text-align: center;
      font-weight: 700;
      color: #ff8585;
      margin-bottom: 12px;
      font-size: 1.1rem;
    }

    .days-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 6px;
    }

    .day-cell {
      background: #381111;
      border-radius: 30px;
      padding: 12px 0;
      text-align: center;
      font-weight: 600;
      font-size: 1.2rem;
      border: 2px solid transparent;
      transition: all 0.15s;
      cursor: pointer;
      box-shadow: 0 5px 0 #1f0000;
    }

    .day-cell:active {
      transform: translateY(4px);
      box-shadow: 0 1px 0 #1f0000;
    }

    .day-cell.selected {
      background: #c00040;
      border-color: white;
      box-shadow: 0 0 25px #ff5e5e, 0 5px 0 #61001f;
    }

    .day-cell.empty {
      background: transparent;
      box-shadow: none;
      cursor: default;
      pointer-events: none;
    }

    .heure-selector {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 15px;
      margin: 30px 0 10px;
      background: #2d0b0b;
      padding: 18px;
      border-radius: 60px;
    }

    .heure-selector label {
      font-size: 1.3rem;
      color: white;
    }

    .heure-selector select {
      background: #521a1a;
      color: white;
      border: 2px solid #ff7b7b;
      padding: 12px 24px;
      border-radius: 50px;
      font-size: 1.2rem;
      font-weight: 600;
      cursor: pointer;
    }

    /* --------------------------------------------- */
    /* 11. COMPTEUR (style flip léger)              */
    /* --------------------------------------------- */
    .countdown-box {
      background: #210808;
      border-radius: 60px;
      padding: 24px 12px;
      border: 4px solid #ff4f4f;
      margin: 30px 0;
      box-shadow: 0 0 40px #ff3737;
      text-align: center;
    }

    .countdown-digits {
      font-size: 3.2rem;
      font-weight: 800;
      font-family: monospace;
      letter-spacing: 8px;
      color: #ffd0d0;
      text-shadow: 0 0 20px red;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    .countdown-digits span {
      background: #2f0b0b;
      padding: 8px 12px;
      border-radius: 30px;
      border: 2px solid white;
      min-width: 90px;
    }

    /* --------------------------------------------- */
    /* 12. FORMULAIRE (ultra moderne)               */
    /* --------------------------------------------- */
    .form-groupe {
      margin-bottom: 24px;
    }

    .form-groupe label {
      display: block;
      font-size: 1.1rem;
      margin-bottom: 6px;
      color: #ffbebe;
      font-weight: 500;
      margin-left: 12px;
    }

    .form-groupe input, .form-groupe textarea {
      width: 100%;
      padding: 18px 22px;
      border-radius: 60px;
      border: 3px solid #a00028;
      background: #270b0b;
      color: white;
      font-size: 1.2rem;
      transition: all 0.2s;
      box-shadow: inset 0 5px 10px #0f0000;
    }

    .form-groupe input:focus, .form-groupe textarea:focus {
      border-color: #ff6969;
      outline: none;
      box-shadow: 0 0 30px #ff5757, inset 0 2px 8px black;
      transform: scale(1.02);
    }

    .form-groupe textarea {
      border-radius: 40px;
      resize: vertical;
    }

    .feedback {
      text-align: center;
      font-size: 1.2rem;
      margin: 20px 0;
      color: #a5ffa5;
      min-height: 2rem;
    }

    /* --------------------------------------------- */
    /* 13. PAGE DOUCE (besoin d'y penser)           */
    /* --------------------------------------------- */
    .soft-page {
      text-align: center;
      padding: 40px 16px;
    }
    .soft-page i {
      font-size: 5rem;
      color: #ffb3b3;
      margin-bottom: 24px;
    }

    /* --------------------------------------------- */
    /* 14. MEDIA QUERIES (mobile first)              */
    /* --------------------------------------------- */
    @media (max-width: 480px) {
      h1 { font-size: 1.9rem; }
      h2 { font-size: 1.6rem; }
      .app { padding: 16px; }
      .promesse-card { flex-basis: 100%; }
      .countdown-digits { font-size: 2.2rem; letter-spacing: 2px; }
      .countdown-digits span { min-width: 60px; }
      button { padding: 14px 16px; font-size: 1rem; }
    }

    /* --------------------------------------------- */
    /* 15. ANIMATIONS SUPPLÉMENTAIRES                */
    /* --------------------------------------------- */
    @keyframes pulseGlow {
      0% { text-shadow: 0 0 8px white, 0 0 20px red; }
      50% { text-shadow: 0 0 20px white, 0 0 50px #ff6060; }
      100% { text-shadow: 0 0 8px white, 0 0 20px red; }
    }
    .glow-text {
      animation: pulseGlow 2.5s infinite;
    }

    .shake-on-click:active {
      animation: shake 0.2s;
    }
    @keyframes shake {
      0% { transform: rotate(0deg); }
      25% { transform: rotate(5deg); }
      50% { transform: rotate(-5deg); }
      100% { transform: rotate(0deg); }
    }
  </style>
</head>
<body>
  <!-- fond de fleurs infini (JS génère 80+) mais on met déjà quelques unes en dur -->
  <div class="flower-petal rose" style="left:2%; animation-duration:16s; animation-delay:0s;"></div>
  <div class="flower-petal tulipe" style="left:12%; animation-duration:21s; animation-delay:3s;"></div>
  <div class="flower-petal blanc" style="left:25%; animation-duration:14s; animation-delay:1s;"></div>
  <div class="flower-petal coeur" style="left:40%; animation-duration:19s; animation-delay:0.5s;"></div>
  <div class="flower-petal noir" style="left:55%; animation-duration:23s; animation-delay:2s;"></div>
  <div class="flower-petal petale" style="left:68%; animation-duration:13s; animation-delay:0.2s;"></div>
  <div class="flower-petal rose" style="left:80%; animation-duration:18s; animation-delay:1.2s;"></div>
  <div class="flower-petal blanc" style="left:92%; animation-duration:20s; animation-delay:2.5s;"></div>

  <!-- APP -->
  <div class="app">
    <!-- PAGE 1 : Message Privé -->
    <div id="page1" class="page active">
      <div class="bouquet-bg">
        <h1><i class="fas fa-envelope-open-text"></i> Message Privé</h1>
        <p style="background: #2f0b0b; border-radius: 60px; padding: 22px; border: 2px solid #ff9292; font-size: 1.3rem; box-shadow: 0 10px 0 #410011;">
          <i class="fas fa-heart" style="color: #ff6b6b;"></i> Coucou Bébé, j’ai codé une mini app juste pour toi. Glisse dans les écrans et lis jusqu’au bout <i class="fas fa-heart" style="color: #ff6b6b;"></i>
        </p>

        <div class="promesse-grid">
          <div class="promesse-card">
            <h3><i class="fas fa-hand-holding-heart"></i> Ce que je te promets</h3>
            <p>Des fous rires, des câlins infinis et une aventure unique, chaque jour à tes côtés.</p>
          </div>
          <div class="promesse-card">
            <h3><i class="fas fa-question-circle"></i> Pourquoi accepter</h3>
            <p>Parce que ton sourire illumine ma vie et que je ne vois que toi dans la foule.</p>
          </div>
          <div class="promesse-card">
            <h3><i class="fas fa-star"></i> Ce qu’on va vivre</h3>
            <p>Des dates magiques, des voyages et des milliers de "je t'aime" chuchotés.</p>
          </div>
        </div>

        <div class="nav-buttons">
          <button class="secondary" disabled><i class="fas fa-arrow-left"></i> Retour</button>
          <button id="toPage2" class="glow-text"><i class="fas fa-arrow-right"></i> Suivant</button>
        </div>
      </div>
    </div>

    <!-- PAGE 2 : Confession + photos + ticker -->
    <div id="page2" class="page">
      <h2><i class="fas fa-secret"></i> Confession</h2>
      <p style="font-size: 2rem; text-align: center; font-weight: 300; line-height: 1.3;">"tu rends mes journées meilleures"</p>

      <!-- 5 photos réelles (via Picsum) -->
      <div class="photos-grid" id="photosGrid">
        <div class="photo-reelle"><img src="https://picsum.photos/id/100/300/300" alt="photo 1" loading="lazy"></div>
        <div class="photo-reelle"><img src="https://picsum.photos/id/1015/300/300" alt="photo 2" loading="lazy"></div>
        <div class="photo-reelle"><img src="https://picsum.photos/id/1043/300/300" alt="photo 3" loading="lazy"></div>
        <div class="photo-reelle"><img src="https://picsum.photos/id/106/300/300" alt="photo 4" loading="lazy"></div>
        <div class="photo-reelle"><img src="https://picsum.photos/id/1084/300/300" alt="photo 5" loading="lazy"></div>
      </div>

      <!-- Ticker -->
      <div class="ticker-wrapper">
        <div class="ticker-content">
          <span>❤️ tu comptes beaucoup pour moi</span>
          <span>✨ tu es quelqu’un de bien</span>
          <span>🌹 ton sourire me fait fondre</span>
          <span>💫 t'es ma préférée</span>
          <span>🔥 notre histoire est unique</span>
          <span>❤️ tu comptes beaucoup pour moi</span>
          <span>✨ tu es quelqu’un de bien</span>
        </div>
      </div>

      <p style="text-align: right; font-style: italic; margin-top: 0;">– et ce n'est que le début</p>

      <div class="nav-buttons">
        <button id="backToPage1"><i class="fas fa-arrow-left"></i> Retour</button>
        <button id="toPage3"><i class="fas fa-arrow-right"></i> Suivant</button>
      </div>
    </div>

    <!-- PAGE 3 : Question + calendrier -->
    <div id="page3" class="page">
      <h2><i class="fas fa-question"></i> Veux-tu être ma copine ?</h2>

      <div class="calendar">
        <div class="month-header"><i class="far fa-calendar-alt"></i> Février 2026</div>
        <div class="weekdays">
          <span>Lun</span><span>Mar</span><span>Mer</span><span>Jeu</span><span>Ven</span><span>Sam</span><span>Dim</span>
        </div>
        <div class="days-grid" id="calendarDays"></div>

        <div class="heure-selector">
          <label><i class="far fa-clock"></i> Heure :</label>
          <select id="heureChoix">
            <option value="18">18h00</option>
            <option value="19" selected>19h00</option>
            <option value="20">20h00</option>
            <option value="21">21h00</option>
          </select>
        </div>
      </div>

      <div class="nav-buttons">
        <button id="backToPage2" class="secondary"><i class="fas fa-arrow-left"></i> Retour</button>
        <button id="ouiPlaisir" class="glow-text"><i class="fas fa-check-circle"></i> Oui avec plaisir</button>
        <button id="besoinPenser" class="secondary"><i class="fas fa-pause-circle"></i> J'ai besoin d'y penser</button>
      </div>
    </div>

    <!-- PAGE 4 : Confirmation + décompte -->
    <div id="page4" class="page">
      <div style="text-align: center;">
        <i class="fas fa-heart" style="font-size: 5rem; color: #ff5e5e; animation: pulseGlow 2s infinite;"></i>
        <h1 style="font-size: 2.5rem;">C'EST UN GRAND OUI</h1>
        <div id="selectedDateDisplay" style="font-size: 1.9rem; background: #270a0a; padding: 16px; border-radius: 60px; margin: 24px 0;">📅 14 février 2026 à 19h00</div>

        <div class="countdown-box">
          <div class="countdown-digits" id="countdownDisplay">--j --h --m --s</div>
        </div>

        <div class="nav-buttons">
          <button id="backToPage3"><i class="fas fa-calendar-alt"></i> Modifier</button>
          <button id="toPage5"><i class="fas fa-paper-plane"></i> Écrire un message</button>
        </div>
        <p style="margin-top: 24px;"><i class="fas fa-camera"></i> Capture et envoie-moi ton écran !</p>
      </div>
    </div>

    <!-- PAGE 5 : Formulaire de contact / confession avec envoi WhatsApp -->
    <div id="page5" class="page">
      <h2><i class="fas fa-feather-alt"></i> Laisse un mot doux</h2>
      <form id="messageForm">
        <div class="form-groupe">
          <label><i class="fas fa-user"></i> Ton nom complet</label>
          <input type="text" id="nom" placeholder="Prénom et nom" required>
        </div>
        <div class="form-groupe">
          <label><i class="fas fa-phone-alt"></i> Ton numéro (pour que je puisse te répondre)</label>
          <input type="tel" id="telephone" placeholder="+221 XX XXX XX XX">
        </div>
        <div class="form-groupe">
          <label><i class="fas fa-comment-dots"></i> Ton message</label>
          <textarea id="message" rows="3" placeholder="Écris ce que tu ressens..." required></textarea>
        </div>
        <!-- Note discrète sur le fonctionnement -->
        <p style="text-align: center; margin-bottom: 16px; font-size: 0.95rem; background: #2e0b0b; padding: 8px; border-radius: 40px;">
          <i class="fab fa-whatsapp" style="color:#25D366;"></i> Ton message m'arrivera directement sur WhatsApp.
        </p>
        <button type="submit" id="envoyerMsg"><i class="fab fa-whatsapp"></i> Envoyer via WhatsApp</button>
        <div class="feedback" id="formFeedback"></div>
      </form>

      <div class="nav-buttons">
        <button id="backToPage4" class="secondary"><i class="fas fa-arrow-left"></i> Retour</button>
        <button id="resetToStart"><i class="fas fa-home"></i> Accueil</button>
      </div>
    </div>

    <!-- PAGE 6 : Douceur (besoin d'y penser) -->
    <div id="page6" class="page soft-page">
      <i class="fas fa-dove"></i>
      <h2 style="border-bottom: none;">Pas de pression</h2>
      <p style="font-size: 2rem;">🌸 Je t'attendrai autant qu'il le faudra 🌸</p>
      <p style="margin: 32px 0;">Prends tout ton temps, mon cœur est patient.</p>
      <button id="backToPage3From6"><i class="fas fa-undo-alt"></i> Retour au choix</button>
    </div>
  </div>

  <script>
    (function() {
      // ---------------------------------------------
      // 0. CONFIGURATION : NUMÉRO WHATSAPP DU DESTINATAIRE
      //    Remplacez ce numéro par le vôtre (format international sans +)
      //    Exemple : "33612345678" pour la France
      // ---------------------------------------------
      const WHATSAPP_NUMBER = "221777101383"; // <-- À MODIFIER ICI

      // ---------------------------------------------
      // 1. GESTION DES PAGES
      // ---------------------------------------------
      const pages = {
        page1: document.getElementById('page1'),
        page2: document.getElementById('page2'),
        page3: document.getElementById('page3'),
        page4: document.getElementById('page4'),
        page5: document.getElementById('page5'),
        page6: document.getElementById('page6')
      };

      function showPage(pageId) {
        Object.values(pages).forEach(p => p.classList.remove('active'));
        pages[pageId].classList.add('active');
        // petite animation supplémentaire
        document.querySelector('.app').style.transform = 'scale(1.01)';
        setTimeout(() => document.querySelector('.app').style.transform = 'scale(1)', 100);
      }

      // Boutons navigation
      document.getElementById('toPage2').addEventListener('click', () => showPage('page2'));
      document.getElementById('backToPage1').addEventListener('click', () => showPage('page1'));
      document.getElementById('toPage3').addEventListener('click', () => showPage('page3'));
      document.getElementById('backToPage2').addEventListener('click', () => showPage('page2'));
      document.getElementById('backToPage3').addEventListener('click', () => showPage('page3'));
      document.getElementById('backToPage4').addEventListener('click', () => showPage('page4'));
      document.getElementById('backToPage3From6').addEventListener('click', () => showPage('page3'));
      document.getElementById('resetToStart').addEventListener('click', () => showPage('page1'));
      document.getElementById('toPage5').addEventListener('click', () => showPage('page5'));

      // ---------------------------------------------
      // 2. CALENDRIER FÉVRIER 2026
      // ---------------------------------------------
      const calendarDays = document.getElementById('calendarDays');
      const heureSelect = document.getElementById('heureChoix');
      let selectedDay = null; // stocke le jour choisi (number)

      function buildCalendar() {
        const year = 2026;
        const month = 1; // février (0-indexé)
        const firstDay = new Date(year, month, 1).getDay(); // 0 = dimanche
        // On veut que lundi = 0, dimanche = 6, donc on ajuste
        let startOffset = firstDay === 0 ? 6 : firstDay - 1; // si dimanche (0) -> 6, sinon décalage
        const daysInMonth = 28; // février 2026 a 28 jours

        let html = '';
        // cellules vides avant le 1er
        for (let i = 0; i < startOffset; i++) {
          html += '<div class="day-cell empty"></div>';
        }
        for (let d = 1; d <= daysInMonth; d++) {
          html += `<div class="day-cell" data-day="${d}">${d}</div>`;
        }
        calendarDays.innerHTML = html;

        // Ajouter écouteurs
        document.querySelectorAll('.day-cell[data-day]').forEach(cell => {
          cell.addEventListener('click', function() {
            document.querySelectorAll('.day-cell.selected').forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedDay = parseInt(this.dataset.day);
          });
        });
      }
      buildCalendar();

      // ---------------------------------------------
      // 3. BOUTON OUI
      // ---------------------------------------------
      document.getElementById('ouiPlaisir').addEventListener('click', function() {
        if (!selectedDay) {
          alert("Sélectionne d'abord un jour dans le calendrier 🌹");
          return;
        }
        const heure = heureSelect.value;
        const dateStr = `${selectedDay} février 2026 à ${heure}h00`;
        localStorage.setItem('valentinDate', dateStr);
        localStorage.setItem('valentinDay', selectedDay);
        localStorage.setItem('valentinHour', heure);

        document.getElementById('selectedDateDisplay').innerText = `📅 ${dateStr}`;
        showPage('page4');
        startCountdown(2026, 1, selectedDay, parseInt(heure));
      });

      // ---------------------------------------------
      // 4. DÉCOMPTE
      // ---------------------------------------------
      let countdownInterval;
      function startCountdown(year, month, day, hour) {
        if (countdownInterval) clearInterval(countdownInterval);
        // month est 1 pour février, mais Date utilise 0-11
        const target = new Date(year, month, day, hour, 0, 0);

        function update() {
          const now = new Date();
          const diff = target - now;
          if (diff <= 0) {
            document.getElementById('countdownDisplay').innerHTML = '<span>🎉</span><span>C’est</span><span>aujourd’hui</span><span>🎉</span>';
            clearInterval(countdownInterval);
            return;
          }
          const days = Math.floor(diff / (1000*60*60*24));
          const hours = Math.floor((diff % 86400000) / 3600000);
          const mins = Math.floor((diff % 3600000) / 60000);
          const secs = Math.floor((diff % 60000) / 1000);

          document.getElementById('countdownDisplay').innerHTML =
            `<span>${days}j</span> <span>${hours}h</span> <span>${mins}m</span> <span>${secs}s</span>`;
        }
        update();
        countdownInterval = setInterval(update, 1000);
      }

      // ---------------------------------------------
      // 5. BOUTON BESOIN D'Y PENSER
      // ---------------------------------------------
      document.getElementById('besoinPenser').addEventListener('click', () => showPage('page6'));

      // ---------------------------------------------
      // 6. FORMULAIRE AVEC ENVOI VERS WHATSAPP
      // ---------------------------------------------
      document.getElementById('messageForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const nom = document.getElementById('nom').value.trim();
        const tel = document.getElementById('telephone').value.trim();
        const msg = document.getElementById('message').value.trim();

        if (!nom || !msg) {
          alert('Merci de remplir ton nom et ton message :)');
          return;
        }

        // Construction du texte à envoyer
        let texte = `*Nouveau message de ${nom}*%0A`;
        if (tel) texte += `📞 Téléphone : ${tel}%0A`;
        texte += ` Message : ${msg}%0A`;
        texte += ` Envoyé depuis l'app Saint-Valentin`;

        // Création du lien WhatsApp
        const whatsappUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${texte}`;

        // Feedback pour l'utilisateur
        document.getElementById('formFeedback').innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Redirection vers WhatsApp...';

        // Redirection vers WhatsApp (ouvre l'app ou la version web)
        window.open(whatsappUrl, '_blank');

        // Petit délai pour effacer le message de feedback
        setTimeout(() => {
          document.getElementById('formFeedback').innerHTML = '';
        }, 5000);

        // Réinitialisation optionnelle du formulaire (on peut laisser l'utilisateur revoir ce qu'il a écrit)
        // this.reset(); // décommenter si on veut vider
      });

      // ---------------------------------------------
      // 7. CRÉATION DE FLEURS / CŒURS SUPPLÉMENTAIRES (100+)
      // ---------------------------------------------
      function createFloralElement(className, contentCallback, baseClass) {
        const el = document.createElement('div');
        el.className = baseClass + ' ' + className;
        el.style.left = Math.random() * 98 + '%';
        el.style.animationDuration = (10 + Math.random() * 20) + 's';
        el.style.animationDelay = (Math.random() * 8) + 's';
        el.style.fontSize = (1.2 + Math.random() * 2.5) + 'rem';
        if (contentCallback) contentCallback(el);
        document.body.appendChild(el);
        setTimeout(() => el.remove(), 30000);
      }

      // Fleurs (déjà beaucoup en dur, on en ajoute 40)
      for (let i = 0; i < 40; i++) {
        setTimeout(() => {
          const types = ['rose', 'tulipe', 'blanc', 'coeur', 'noir', 'petale'];
          const r = types[Math.floor(Math.random() * types.length)];
          createFloralElement(r, null, 'flower-petal');
        }, i * 150);
      }

      // Cœurs volants (30)
      for (let i = 0; i < 30; i++) {
        setTimeout(() => {
          const heart = document.createElement('div');
          heart.className = 'floating-heart';
          heart.innerHTML = Math.random() > 0.3 ? '❤️' : '🖤';
          heart.style.left = Math.random() * 98 + '%';
          heart.style.animationDuration = (8 + Math.random() * 15) + 's';
          heart.style.animationDelay = (Math.random() * 5) + 's';
          heart.style.fontSize = (1.5 + Math.random() * 2) + 'rem';
          document.body.appendChild(heart);
          setTimeout(() => heart.remove(), 20000);
        }, i * 100);
      }

      // Rafraîchir fleurs en continu
      setInterval(() => {
        const types = ['rose', 'tulipe', 'blanc', 'coeur', 'noir', 'petale'];
        const r = types[Math.floor(Math.random() * types.length)];
        createFloralElement(r, null, 'flower-petal');
      }, 1500);

      // ---------------------------------------------
      // 8. MICRO-INTERACTIONS PHOTOS (changement au clic)
      // ---------------------------------------------
      document.querySelectorAll('.photo-reelle').forEach((photo, index) => {
        photo.addEventListener('click', function() {
          // change l'image aléatoirement (simule ajout ultérieur)
          const newId = Math.floor(Math.random() * 200) + 10;
          this.innerHTML = `<img src="https://picsum.photos/id/${newId}/300/300" alt="nouvelle photo" loading="lazy">`;
        });
      });

      // ---------------------------------------------
      // 9. SI DATE DÉJÀ STOCKÉE (on peut préremplir)
      // ---------------------------------------------
      const savedDay = localStorage.getItem('valentinDay');
      if (savedDay) {
        // on peut présélectionner
        setTimeout(() => {
          const cells = document.querySelectorAll('.day-cell[data-day]');
          cells.forEach(c => {
            if (c.dataset.day === savedDay) {
              c.classList.add('selected');
              selectedDay = parseInt(savedDay);
            }
          });
        }, 200);
      }

      // ---------------------------------------------
      // 10. ANIMATIONS BONUS (au survol des cartes)
      // ---------------------------------------------
    })();
  </script>

  <!-- Petit message PHP invisible (clin d'œil) -->
  <?php // version 3.0 – Saint-Valentin 2026 – envoi WhatsApp intégré ?>
</body>
</html>" " 
