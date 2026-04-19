<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
:root{
  --bg:#0f2027;
  --bg2:#203a43;
  --bg3:#2c5364;
  --accent:#00c6ff;
  --accent2:#0072ff;
  --text:#fff;
  --muted:rgba(255,255,255,0.6);
}

#scrollProgress{
  position:fixed;top:0;left:0;height:2px;width:0%;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  z-index:9997;
  box-shadow:0 0 8px rgba(0,198,255,0.7);
  transition:width 0.05s linear;
}

#bgCanvas{
  position:fixed;top:0;left:0;
  width:100%;height:100%;
  pointer-events:none;z-index:0;
}

body{
  font-family:'Inter',sans-serif;
  background:linear-gradient(135deg,var(--bg),var(--bg2),var(--bg3));
  color:var(--text);
  min-height:100vh;
  overflow-x:hidden;
  cursor:auto;
}

nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:22px 60px;
  background:rgba(255,255,255,0.04);
  backdrop-filter:blur(20px);
  border-bottom:1px solid rgba(255,255,255,0.07);
  position:sticky;top:0;z-index:100;
  transition:padding 0.4s ease, background 0.4s ease, box-shadow 0.4s ease;
}
nav.scrolled{
  padding:14px 60px;
  background:rgba(15,32,39,0.92);
  box-shadow:0 8px 40px rgba(0,0,0,0.4);
}

.nav-logo{
  font-family:'Syne',sans-serif;
  font-weight:800;font-size:20px;
  letter-spacing:2px;text-transform:uppercase;
  cursor:pointer;
  display:inline-block;
  position:relative;
  padding-bottom:4px;
}
.nav-logo::after{
  content:'';
  position:absolute;
  bottom:0;left:0;
  width:0;height:2px;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  border-radius:2px;
  transition:width 0.4s cubic-bezier(.22,1,.36,1);
}
.nav-logo:hover::after{width:100%;}

.nav-links{display:flex;gap:32px;list-style:none;}
.nav-links a{
  color:var(--muted);text-decoration:none;
  font-size:13px;letter-spacing:0.5px;
  transition:color 0.2s;cursor:pointer;
  position:relative;padding-bottom:3px;
}
.nav-links a::after{
  content:'';position:absolute;bottom:0;left:0;
  width:0;height:1px;
  background:var(--accent);
  transition:width 0.3s ease;
}
.nav-links a:hover{color:var(--text);}
.nav-links a:hover::after{width:100%;}

.hero{
  display:grid;
  grid-template-columns:1fr;
  align-items:center;
  min-height:calc(100vh - 73px);
  padding:0 60px;
  max-width:700px;
  position:relative;z-index:1;
}

.hero-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(0,198,255,0.1);
  border:1px solid rgba(0,198,255,0.25);
  border-radius:100px;padding:6px 14px;
  font-size:12px;color:var(--accent);
  letter-spacing:1px;text-transform:uppercase;
  margin-bottom:28px;
  opacity:0;transform:translateY(20px);
  animation:fadeUp 0.6s 0.1s ease forwards;
}
.hero-tag::before{
  content:'';width:6px;height:6px;border-radius:50%;
  background:var(--accent);animation:pulse 2s infinite;
}

.hero-name{
  font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;
  letter-spacing:-1px;margin-bottom:16px;
}

.greeting-wrap{
  display:inline-flex;flex-wrap:wrap;
  gap:0 0.28em;
  margin-bottom:6px;min-height:1.2em;
}
.g-word{display:inline-flex;}
.g-char{
  display:inline-block;
  font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;letter-spacing:-1px;
  color:var(--text);
  transition:transform 0.2s cubic-bezier(.34,1.56,.64,1), color 0.2s ease;
  opacity:0;
}
.g-char.visible{opacity:1;}
.greeting-wrap:hover .g-char{color:rgba(255,255,255,0.35);}
.greeting-wrap .g-char:hover{
  color:#fff !important;
  transform:translateY(-8px) scale(1.1);
}

.name-main{
  display:inline-block;position:relative;
  padding-bottom:6px;
  opacity:0;transform:translateY(20px);
  animation:fadeUp 0.7s 1.2s ease forwards;
}
.name-main-inner{
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;letter-spacing:-1px;
  position:relative;display:inline-block;overflow:hidden;
}
.name-main-inner::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(105deg,transparent 35%,rgba(255,255,255,0.55) 50%,transparent 65%);
  background-size:250% 100%;background-position:250% 0;
  -webkit-background-clip:text;background-clip:text;
  transition:background-position 0s;pointer-events:none;
}
.name-main:hover .name-main-inner::after{
  background-position:-250% 0;
  transition:background-position 0.65s ease;
}
.name-main::before{
  content:'';position:absolute;bottom:0;left:0;
  width:40%;height:3px;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  border-radius:3px;
  transition:width 0.45s cubic-bezier(.22,1,.36,1), opacity 0.3s;
  opacity:0.5;
}
.name-main:hover::before{width:100%;opacity:1;}

.hero-desc{
  font-size:14px;color:var(--muted);line-height:1.7;
  max-width:420px;margin-bottom:30px;font-weight:300;
  opacity:0;transform:translateY(20px);
  animation:fadeUp 0.6s 1.5s ease forwards;
}
.hero-cta{
  display:flex;gap:14px;align-items:center;flex-wrap:wrap;
  opacity:0;transform:translateY(20px);
  animation:fadeUp 0.6s 1.7s ease forwards;
}
.btn-primary{
  display:inline-flex;align-items:center;gap:8px;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  color:#fff;border:none;padding:12px 24px;
  border-radius:50px;font-size:13px;font-weight:500;
  cursor:pointer;text-decoration:none;
  transition:transform 0.2s,box-shadow 0.2s;letter-spacing:0.3px;
  position:relative;overflow:hidden;
}
.btn-primary::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(105deg,transparent 40%,rgba(255,255,255,0.3) 50%,transparent 60%);
  background-size:300% 100%;background-position:300% 0;
  transition:background-position 0.5s ease;
}
.btn-primary:hover::before{background-position:-300% 0;}
.btn-primary:hover{
  transform:translateY(-2px);
  box-shadow:0 12px 30px rgba(0,114,255,0.4);
}
.btn-outline{
  display:inline-flex;align-items:center;gap:8px;
  background:transparent;color:var(--text);
  border:1px solid rgba(255,255,255,0.2);
  padding:11px 24px;border-radius:50px;
  font-size:13px;font-weight:400;
  cursor:pointer;text-decoration:none;transition:all 0.2s;
}
.btn-outline:hover{
  border-color:rgba(255,255,255,0.5);
  background:rgba(255,255,255,0.05);
}

.hero-stats{
  display:flex;gap:32px;margin-top:36px;
  padding-top:28px;
  border-top:1px solid rgba(255,255,255,0.08);
  opacity:0;transform:translateY(20px);
  animation:fadeUp 0.6s 1.9s ease forwards;
}
.stat-item span:first-child{
  display:block;font-family:'Syne',sans-serif;
  font-size:24px;font-weight:700;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.stat-item span:last-child{font-size:11px;color:var(--muted);letter-spacing:0.5px;}

.ateliers-section{
  padding:80px 60px;
  position:relative;z-index:1;
}
.section-title{
  font-family:'Syne',sans-serif;
  font-size:clamp(24px,3vw,38px);font-weight:700;
  text-align:center;margin-bottom:40px;
  opacity:0;transform:translateY(30px);
  transition:opacity 0.7s ease, transform 0.7s ease;
}
.section-title.in-view{opacity:1;transform:translateY(0);}

.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:16px;
}

.atelier{
  background:rgba(255,255,255,0.04);
  padding:24px 20px;border-radius:16px;
  text-align:center;cursor:pointer;
  border:1px solid rgba(255,255,255,0.08);
  transition:transform 0.3s cubic-bezier(.22,1,.36,1),
             background 0.3s ease,
             box-shadow 0.3s ease,
             border-color 0.3s ease;
  font-family:'Syne',sans-serif;font-size:14px;
  font-weight:600;letter-spacing:0.5px;
  opacity:0;transform:translateY(30px);
  position:relative;overflow:hidden;
}

.atelier::after{
  content:'';
  position:absolute;inset:0;
  background:linear-gradient(
    105deg,
    transparent 30%,
    rgba(0,198,255,0.12) 50%,
    transparent 70%
  );
  background-size:300% 100%;
  background-position:300% 0;
  transition:background-position 0.55s ease;
  border-radius:16px;
  pointer-events:none;
}

.atelier:hover{
  transform:translateY(-6px) scale(1.02);
  background:rgba(0,198,255,0.07);
  border-color:rgba(0,198,255,0.35);
  box-shadow:
    0 20px 40px rgba(0,0,0,0.3),
    0 0 0 1px rgba(0,198,255,0.15),
    0 0 24px rgba(0,198,255,0.12);
}
.atelier:hover::after{
  background-position:-300% 0;
}

.atelier.show{opacity:1;transform:translateY(0);}
.atelier.show:hover{transform:translateY(-6px) scale(1.02);}

.ripple{
  position:absolute;border-radius:50%;
  background:rgba(0,198,255,0.25);
  transform:scale(0);animation:ripple-anim 0.6s ease-out;
  pointer-events:none;
}
@keyframes ripple-anim{
  to{transform:scale(4);opacity:0;}
}

#exercices{
  padding:0 60px 60px;
  position:relative;z-index:1;
}
#exercices h3{
  font-family:'Syne',sans-serif;
  font-size:22px;font-weight:700;
  margin-bottom:20px;color:var(--accent);
}
.exercice-card{
  background:rgba(255,255,255,0.04);
  margin:10px 0;padding:16px 20px;border-radius:12px;
  border:1px solid rgba(255,255,255,0.06);
  opacity:0;transform:translateX(-20px);
  transition:opacity 0.4s, transform 0.4s, background 0.2s, border-color 0.2s;
  display:flex;align-items:center;justify-content:space-between;gap:16px;
}
.exercice-card.show{opacity:1;transform:translateX(0);}
.exercice-card:hover{
  background:rgba(255,255,255,0.07);
  border-color:rgba(0,198,255,0.2);
}
.exercice-label{
  display:flex;align-items:center;gap:10px;
  font-size:14px;font-weight:500;flex:1;
}
.exercice-label::before{
  content:'';width:6px;height:6px;border-radius:50%;
  background:var(--accent);flex-shrink:0;
  animation:pulse 2.5s infinite;
}
.exercice-links{display:flex;gap:8px;flex-shrink:0;}
.link-btn{
  display:inline-flex;align-items:center;gap:5px;
  padding:6px 14px;border-radius:20px;
  font-size:12px;font-weight:500;
  text-decoration:none;border:1px solid;
  transition:all 0.2s;cursor:pointer;
}
.link-tp{color:var(--accent);border-color:rgba(0,198,255,0.3);background:rgba(0,198,255,0.08);}
.link-tp:hover{background:rgba(0,198,255,0.2);border-color:rgba(0,198,255,0.6);}
.link-rapport{color:#a78bfa;border-color:rgba(167,139,250,0.3);background:rgba(167,139,250,0.08);}
.link-rapport:hover{background:rgba(167,139,250,0.2);border-color:rgba(167,139,250,0.6);}
.link-btn svg{width:11px;height:11px;flex-shrink:0;}

#contactModal{
  display:none;position:fixed;inset:0;
  background:rgba(0,0,0,0.72);backdrop-filter:blur(12px);
  z-index:500;align-items:center;justify-content:center;
}
#contactModal.open{display:flex;}
.cmodal{
  background:linear-gradient(145deg,#1b3a4b,#0f2027);
  border:1px solid rgba(0,198,255,0.18);
  border-radius:24px;padding:40px 36px;
  width:92%;max-width:460px;
  position:relative;
  animation:fadeUp 0.35s cubic-bezier(.22,1,.36,1) both;
}
.cmodal-close{
  position:absolute;top:14px;right:14px;
  width:30px;height:30px;border-radius:50%;
  background:rgba(255,255,255,0.07);
  border:1px solid rgba(255,255,255,0.1);
  color:var(--muted);font-size:16px;
  display:flex;align-items:center;justify-content:center;
  cursor:pointer;transition:all 0.2s;line-height:1;
}
.cmodal-close:hover{background:rgba(255,255,255,0.14);color:#fff;}
.cmodal h3{font-family:'Syne',sans-serif;font-size:22px;font-weight:800;margin-bottom:6px;}
.cmodal h3 span{
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.cmodal-subtitle{font-size:13px;color:var(--muted);margin-bottom:28px;}

.cinfo-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:24px;}
.cinfo-tile{
  background:rgba(255,255,255,0.05);
  border:1px solid rgba(255,255,255,0.08);
  border-radius:14px;padding:14px 16px;
  display:flex;align-items:center;gap:12px;
  text-decoration:none;color:var(--text);
  transition:all 0.25s ease;cursor:pointer;
}
.cinfo-tile:hover{
  background:rgba(0,198,255,0.1);
  border-color:rgba(0,198,255,0.3);
  transform:translateY(-3px);
}
.cinfo-tile.full{grid-column:1/-1;}
.cinfo-icon{
  width:36px;height:36px;border-radius:50%;flex-shrink:0;
  background:rgba(0,198,255,0.12);
  border:1px solid rgba(0,198,255,0.2);
  display:flex;align-items:center;justify-content:center;
}
.cinfo-icon svg{width:16px;height:16px;color:var(--accent);}
.cinfo-label{font-size:11px;color:var(--muted);letter-spacing:0.4px;display:block;margin-bottom:2px;}
.cinfo-value{font-size:13px;font-weight:500;}

#modal{
  display:none;position:fixed;top:0;left:0;
  width:100%;height:100%;
  background:rgba(0,0,0,0.75);backdrop-filter:blur(8px);z-index:1000;
}
.modal-content{
  background:linear-gradient(145deg,rgba(32,58,67,0.97),rgba(15,32,39,0.97));
  backdrop-filter:blur(20px);width:90%;max-width:460px;
  margin:80px auto;padding:32px;border-radius:20px;
  border:1px solid rgba(255,255,255,0.1);
  box-shadow:0 30px 80px rgba(0,0,0,0.5);
  animation:fadeUp 0.35s cubic-bezier(.22,1,.36,1) both;
}
.modal-content h3{
  font-family:'Syne',sans-serif;font-size:18px;font-weight:700;
  margin-bottom:24px;color:var(--accent);
}
.modal-section{margin-bottom:16px;}
.modal-section h4{
  font-size:12px;font-weight:500;color:var(--muted);
  margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;
}
.input-row{display:flex;gap:8px;}
input{
  flex:1;background:rgba(255,255,255,0.07);
  border:1px solid rgba(255,255,255,0.12);
  border-radius:10px;padding:10px 14px;color:#fff;
  font-size:13px;font-family:'Inter',sans-serif;
  outline:none;transition:border-color 0.2s;cursor:text;
}
input:focus{border-color:var(--accent);}
input::placeholder{color:rgba(255,255,255,0.3);}
.btn-small{
  padding:10px 14px;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  border:none;border-radius:10px;color:#fff;font-size:12px;
  cursor:pointer;white-space:nowrap;transition:opacity 0.2s;
  font-family:'Inter',sans-serif;
}
.btn-small:hover{opacity:0.85;}
.modal-actions{
  display:flex;gap:8px;margin-top:20px;
  padding-top:20px;border-top:1px solid rgba(255,255,255,0.08);
}
.btn-save{
  flex:1;padding:11px;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  border:none;border-radius:10px;color:#fff;
  font-size:13px;font-weight:500;cursor:pointer;
  transition:all 0.2s;font-family:'Inter',sans-serif;
}
.btn-save:hover{transform:translateY(-1px);box-shadow:0 6px 20px rgba(0,114,255,0.4);}
.btn-del{
  padding:11px 16px;background:rgba(255,80,80,0.12);
  border:1px solid rgba(255,80,80,0.2);border-radius:10px;
  color:#ff6060;font-size:13px;cursor:pointer;
  transition:all 0.2s;font-family:'Inter',sans-serif;
}
.btn-del:hover{background:rgba(255,80,80,0.22);}
.btn-close{
  padding:11px 16px;background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.1);border-radius:10px;
  color:var(--muted);font-size:13px;cursor:pointer;
  font-family:'Inter',sans-serif;
}

@keyframes fadeUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
@keyframes pulse{0%,100%{opacity:1;}50%{opacity:0.4;}}

#scrollTop{
  position:fixed;bottom:32px;right:32px;
  width:40px;height:40px;border-radius:50%;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  border:none;color:#fff;font-size:18px;
  display:flex;align-items:center;justify-content:center;
  cursor:pointer;z-index:200;
  opacity:0;transform:translateY(20px);
  transition:opacity 0.3s, transform 0.3s;
  box-shadow:0 4px 20px rgba(0,114,255,0.4);
}
#scrollTop.visible{opacity:1;transform:translateY(0);}
#scrollTop:hover{transform:translateY(-4px) scale(1.1);}

@media(max-width:768px){
  nav{padding:16px 20px;}
  nav.scrolled{padding:12px 20px;}
  .hero{grid-template-columns:1fr;padding:40px 20px;gap:40px;text-align:center;min-height:auto;}
  .hero-desc{max-width:100%;}
  .hero-cta{justify-content:center;}
  .hero-stats{justify-content:center;}
  .ateliers-section{padding:40px 20px;}
  #exercices{padding:0 20px 30px;}
  .exercice-card{flex-direction:column;align-items:flex-start;gap:10px;}
  .greeting-wrap{justify-content:center;}
}
</style>
</head>
<body>

<div id="scrollProgress"></div>
<canvas id="bgCanvas"></canvas>
<button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<nav id="mainNav">
  <div class="nav-logo">ANASS LAHMAR</div>
  <ul class="nav-links">
    <li><a href="#ateliers">Projets</a></li>
    <li><a href="#ateliers">Ateliers</a></li>
  </ul>
</nav>

<section class="hero">
  <div class="hero-left">
    <div class="hero-tag">Disponible pour missions</div>
    <h1 class="hero-name">
      <div class="greeting-wrap" id="greetingWrap"></div>
      <div style="margin-top:4px;">
        <span class="name-main"><span class="name-main-inner">Anass.</span></span>
      </div>
    </h1>
    <p class="hero-desc">Curieux et motivé, je développe des projets web et j'apprends chaque jour de nouvelles technologies pour améliorer mes compétences et réaliser des solutions concrètes.</p>
    <div class="hero-cta">
      <a href="#ateliers" class="btn-primary">Mes Projets &rarr;</a>
      <a href="#" class="btn-outline" onclick="event.preventDefault();openContactModal()">Me contacter</a>
    </div>
    <div class="hero-stats">
      <div class="stat-item"><span class="counter" data-target="20">0</span><span>Ateliers</span></div>
      <div class="stat-item"><span class="counter" data-target="160">0</span><span>Exercices</span></div>
      <div class="stat-item"><span>OFPPT</span><span>Tanger</span></div>
    </div>
  </div>
</section>

<section class="ateliers-section" id="ateliers">
  <h2 class="section-title">TPs & Rapports</h2>
  <div class="container" id="atelierGrid"></div>
</section>

<div id="exercices"></div>

<!-- Contact Modal -->
<div id="contactModal" onclick="contactOverlayClick(event)">
  <div class="cmodal">
    <button class="cmodal-close" onclick="closeContactModal()">&#x2715;</button>
    <h3>Me <span>contacter</span></h3>
    <p class="cmodal-subtitle">Disponible pour missions et collaborations.</p>
    <div class="cinfo-grid">
      <a class="cinfo-tile" href="mailto:Anaslhm76@gmail.com">
        <div class="cinfo-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg>
        </div>
        <div><span class="cinfo-label">Email</span><span class="cinfo-value">Anaslhm76@gmail.com</span></div>
      </a>
      <a class="cinfo-tile" href="tel:0777852536">
        <div class="cinfo-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.9v2.02z"/></svg>
        </div>
        <div><span class="cinfo-label">Téléphone</span><span class="cinfo-value">0777 852 536</span></div>
      </a>
      <div class="cinfo-tile full" style="cursor:default;">
        <div class="cinfo-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <div><span class="cinfo-label">Localisation</span><span class="cinfo-value">Tanger, Maroc</span></div>
      </div>
    </div>
  </div>
</div>

<!-- Modal édition liens -->
<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">
    <h3 id="modalTitle"></h3>
    <div class="modal-section">
      <h4>Lien TP</h4>
      <div class="input-row">
        <input type="text" id="tpLink" placeholder="https://...">
        <button class="btn-small" onclick="openModalLink('tp')">Ouvrir</button>
      </div>
    </div>
    <div class="modal-section">
      <h4>Lien Rapport</h4>
      <div class="input-row">
        <input type="text" id="rapportLink" placeholder="https://...">
        <button class="btn-small" onclick="openModalLink('rapport')">Ouvrir</button>
      </div>
    </div>
    <div class="modal-actions">
      <button class="btn-save" onclick="saveData()">Sauvegarder</button>
      <button class="btn-del" onclick="deleteData()">Supprimer</button>
      <button class="btn-close" onclick="closeModal()">Fermer</button>
    </div>
  </div>
</div>

<script>
/* ══════════════════════════════════
   3D PARTICLE FIELD — cursor magnetic + scroll parallax + depth web
══════════════════════════════════ */
(function(){
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');

  let W, H, mouse = {x:-9999,y:-9999}, scrollY = 0, targetScrollY = 0;

  function resize(){
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  // Real-time cursor tracking
  window.addEventListener('mousemove', e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });
  window.addEventListener('mouseleave', () => { mouse.x = -9999; mouse.y = -9999; });

  // Smooth scroll tracking
  window.addEventListener('scroll', () => { targetScrollY = window.scrollY; });

  /* ── PARTICLES 3D ── */
  const COUNT = 130;
  const particles = [];

  class Particle {
    constructor() { this.reset(true); }
    reset(init) {
      this.ox    = Math.random() * W;
      this.oy    = init ? Math.random() * H : -20;
      this.z     = Math.random();                         // 0=far, 1=near
      this.vx    = (Math.random() - 0.5) * 0.35 * (0.3 + this.z * 0.7);
      this.vy    = (Math.random() - 0.5) * 0.25 * (0.3 + this.z * 0.7);
      this.mx    = 0;                                     // magnetic offset X
      this.my    = 0;                                     // magnetic offset Y
      this.r     = 1 + this.z * 2.2;                     // radius by depth
      this.alpha = 0.15 + this.z * 0.55;
      this.depth = 0.08 + this.z * 0.55;                 // parallax speed
    }
    get x(){ return this.ox + this.mx; }
    get screenY(){ return this.oy + this.my - scrollY * this.depth; }

    update() {
      // Drift
      this.ox += this.vx;
      this.oy += this.vy;

      // Wrap boundaries
      if (this.ox < -20) this.ox = W + 20;
      if (this.ox > W + 20) this.ox = -20;
      if (this.oy < -20) this.oy = H + 20;
      if (this.oy > H + 20) this.oy = -20;

      // Magnetic cursor attraction
      const sx = this.ox + this.mx;
      const sy = this.oy + this.my - scrollY * this.depth;
      const dx = mouse.x - sx;
      const dy = mouse.y - sy;
      const dist = Math.sqrt(dx * dx + dy * dy);
      const RADIUS = 80 + this.z * 60;   // near particles react from farther

      if (dist < RADIUS && dist > 0) {
        const force = (1 - dist / RADIUS) * (0.4 + this.z * 0.6);
        this.mx += dx * force * 0.09;
        this.my += dy * force * 0.09;
      }

      // Spring restore
      this.mx *= 0.87;
      this.my *= 0.87;
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.screenY, this.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(0,198,255,${this.alpha})`;
      ctx.fill();
    }
  }

  for (let i = 0; i < COUNT; i++) particles.push(new Particle());

  /* ── GLOW ORBS (parallax layers) ── */
  const ORBS = [
    { nx:0.18, ny:0.30, r:180, depth:0.12, c:'0,198,255',  a:0.045 },
    { nx:0.78, ny:0.60, r:220, depth:0.22, c:'0,114,255',  a:0.040 },
    { nx:0.50, ny:1.10, r:260, depth:0.38, c:'0,198,255',  a:0.030 },
    { nx:0.08, ny:1.50, r:190, depth:0.32, c:'100,80,255', a:0.032 },
  ];

  /* ── WEB CONNECTIONS ── */
  function drawConnections() {
    for (let i = 0; i < particles.length; i++) {
      const a = particles[i];
      for (let j = i + 1; j < particles.length; j++) {
        const b = particles[j];
        const dx = a.x - b.x;
        const dy = a.screenY - b.screenY;
        const dist = Math.sqrt(dx * dx + dy * dy);
        const maxDist = 95 + (a.z + b.z) * 28;
        if (dist < maxDist) {
          const alpha = (1 - dist / maxDist) * Math.min(a.alpha, b.alpha) * 0.22;
          ctx.beginPath();
          ctx.moveTo(a.x, a.screenY);
          ctx.lineTo(b.x, b.screenY);
          ctx.strokeStyle = `rgba(0,198,255,${alpha})`;
          ctx.lineWidth = 0.45 + (a.z + b.z) * 0.18;
          ctx.stroke();
        }
      }
    }
  }

  /* ── CURSOR AURA ── */
  function drawCursorAura() {
    if (mouse.x < 0) return;
    const g = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 90);
    g.addColorStop(0,   'rgba(0,198,255,0.07)');
    g.addColorStop(0.5, 'rgba(0,114,255,0.03)');
    g.addColorStop(1,   'rgba(0,198,255,0)');
    ctx.fillStyle = g;
    ctx.beginPath();
    ctx.arc(mouse.x, mouse.y, 90, 0, Math.PI * 2);
    ctx.fill();
  }

  /* ── MAIN LOOP ── */
  function draw() {
    scrollY += (targetScrollY - scrollY) * 0.07;
    ctx.clearRect(0, 0, W, H);

    // Glow orbs
    for (const o of ORBS) {
      const px = o.nx * W;
      const py = o.ny * H - scrollY * o.depth;
      const g  = ctx.createRadialGradient(px, py, 0, px, py, o.r);
      g.addColorStop(0,   `rgba(${o.c},${o.a})`);
      g.addColorStop(0.5, `rgba(${o.c},${o.a * 0.4})`);
      g.addColorStop(1,   `rgba(${o.c},0)`);
      ctx.fillStyle = g;
      ctx.beginPath();
      ctx.arc(px, py, o.r, 0, Math.PI * 2);
      ctx.fill();
    }

    // Cursor aura
    drawCursorAura();

    // Update all particles first
    for (const p of particles) p.update();

    // Draw connections (behind particles)
    drawConnections();

    // Draw particles on top
    for (const p of particles) p.draw();

    requestAnimationFrame(draw);
  }

  draw();
})();

/* ══════════════════════════════════
   SCROLL PROGRESS + NAV
══════════════════════════════════ */
const prog = document.getElementById('scrollProgress');
const nav = document.getElementById('mainNav');
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
  const total = document.body.scrollHeight - window.innerHeight;
  const pct = (window.scrollY / total) * 100;
  prog.style.width = pct + '%';
  nav.classList.toggle('scrolled', window.scrollY > 60);
  scrollTopBtn.classList.toggle('visible', window.scrollY > 300);
});

/* ══════════════════════════════════
   TYPEWRITER GREETING
══════════════════════════════════ */
const GREETING = 'Bonjour, je suis';
const gw = document.getElementById('greetingWrap');
const allChars = [];

GREETING.split(' ').forEach(word => {
  const wDiv = document.createElement('span');
  wDiv.className = 'g-word';
  word.split('').forEach(ch => {
    const s = document.createElement('span');
    s.className = 'g-char';
    s.textContent = ch;
    wDiv.appendChild(s);
    allChars.push(s);
  });
  gw.appendChild(wDiv);
});

allChars.forEach((c, i) => {
  setTimeout(() => {
    c.classList.add('visible');
    c.style.transition = 'opacity 0.2s ease, transform 0.2s cubic-bezier(.34,1.56,.64,1), color 0.2s ease';
    c.style.transform = 'translateY(-6px)';
    setTimeout(()=>{ c.style.transform='translateY(0)'; }, 150);
  }, 400 + i * 55);
});

gw.addEventListener('mouseover', e => {
  if(e.target.classList.contains('g-char')){
    const idx = allChars.indexOf(e.target);
    allChars.forEach((c,i)=>{
      const d = Math.abs(i-idx);
      if(d<=2){
        setTimeout(()=>{
          c.style.transform=`translateY(${-6+d*2}px) scale(${1.1-d*0.03})`;
          setTimeout(()=>{c.style.transform='';},300);
        },d*40);
      }
    });
  }
});

/* ══════════════════════════════════
   COUNTER ANIMATION
══════════════════════════════════ */
function animateCounter(el){
  const target = +el.dataset.target;
  const suffix = target===160 ? '+' : '';
  const duration = 1400;
  const step = 16;
  const steps = duration/step;
  let current = 0;
  const inc = target/steps;
  const timer = setInterval(()=>{
    current += inc;
    if(current >= target){current=target;clearInterval(timer);}
    el.textContent = Math.floor(current)+suffix;
  }, step);
}

const counters = document.querySelectorAll('.counter');
const counterObserver = new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      animateCounter(e.target);
      counterObserver.unobserve(e.target);
    }
  });
},{threshold:0.5});
counters.forEach(c=>counterObserver.observe(c));

/* ══════════════════════════════════
   SECTION TITLE REVEAL
══════════════════════════════════ */
const titleObs = new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in-view');});
},{threshold:0.2});
document.querySelectorAll('.section-title').forEach(t=>titleObs.observe(t));

/* ══════════════════════════════════
   CONTACT MODAL
══════════════════════════════════ */
function openContactModal(){document.getElementById('contactModal').classList.add('open');}
function closeContactModal(){document.getElementById('contactModal').classList.remove('open');}
function contactOverlayClick(e){if(e.target.id==='contactModal')closeContactModal();}

/* ══════════════════════════════════
   ATELIERS
══════════════════════════════════ */
const ATELIERS = 20;
const EXERCICES_PAR_ATELIER = 8;
let currentKey = '';

const extIcon = `<svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1h4v4M11 1L5.5 6.5M5 2H2a1 1 0 00-1 1v7a1 1 0 001 1h7a1 1 0 001-1V8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`;

const grid = document.getElementById('atelierGrid');
for(let i=1;i<=ATELIERS;i++){
  const name='Atelier '+i;
  const d=document.createElement('div');
  d.className='atelier';
  d.textContent=name;
  d.onclick = e => {
    const rect=d.getBoundingClientRect();
    const rip=document.createElement('span');
    rip.className='ripple';
    const size=Math.max(d.offsetWidth,d.offsetHeight)*2;
    rip.style.cssText=`width:${size}px;height:${size}px;left:${e.clientX-rect.left-size/2}px;top:${e.clientY-rect.top-size/2}px;`;
    d.appendChild(rip);
    setTimeout(()=>rip.remove(),600);
    openAtelier(name);
  };
  grid.appendChild(d);
}

function openAtelier(name){
  const box=document.getElementById('exercices');
  box.innerHTML='<h3>'+name+'</h3>';
  for(let j=1;j<=EXERCICES_PAR_ATELIER;j++){
    const exName='Exercice '+j;
    const key=name+'_'+exName;
    const tpLink=localStorage.getItem(key+'_tp')||'';
    const rapportLink=localStorage.getItem(key+'_rapport')||'';
    const card=document.createElement('div');
    card.className='exercice-card';
    card.dataset.key=key;
    card.innerHTML=`
      <div class="exercice-label">${exName}</div>
      <div class="exercice-links">
        <a class="link-btn link-tp" ${tpLink?'href="'+tpLink+'" target="_blank"':'href="#"'}
           onclick="handleLinkClick(event,'${key}','tp')">${extIcon} TP</a>
        <a class="link-btn link-rapport" ${rapportLink?'href="'+rapportLink+'" target="_blank"':'href="#"'}
           onclick="handleLinkClick(event,'${key}','rapport')">${extIcon} Rapport</a>
      </div>`;
    box.appendChild(card);
    setTimeout(()=>card.classList.add('show'), j*60);
  }
  box.scrollIntoView({behavior:'smooth',block:'start'});
  observeElements();
}

function handleLinkClick(e,key,type){
  const link=localStorage.getItem(key+'_'+type);
  if(!link){e.preventDefault();openModal(key);}
}

function openModal(key){
  currentKey=key;
  const parts=key.split('_');
  document.getElementById('modalTitle').textContent=parts[0]+' '+parts[1]+' — '+parts[2]+' '+parts[3];
  document.getElementById('modal').style.display='block';
  document.getElementById('tpLink').value=localStorage.getItem(key+'_tp')||'';
  document.getElementById('rapportLink').value=localStorage.getItem(key+'_rapport')||'';
}

function saveData(){
  const tp=document.getElementById('tpLink').value.trim();
  const rapport=document.getElementById('rapportLink').value.trim();
  if(tp)localStorage.setItem(currentKey+'_tp',tp);
  else localStorage.removeItem(currentKey+'_tp');
  if(rapport)localStorage.setItem(currentKey+'_rapport',rapport);
  else localStorage.removeItem(currentKey+'_rapport');
  const card=document.querySelector('[data-key="'+currentKey+'"]');
  if(card){
    const links=card.querySelectorAll('.link-btn');
    const tpBtn=links[0],rapBtn=links[1];
    if(tp){tpBtn.href=tp;tpBtn.target='_blank';tpBtn.onclick=null;}
    else{tpBtn.href='#';tpBtn.removeAttribute('target');tpBtn.onclick=(e)=>handleLinkClick(e,currentKey,'tp');}
    if(rapport){rapBtn.href=rapport;rapBtn.target='_blank';rapBtn.onclick=null;}
    else{rapBtn.href='#';rapBtn.removeAttribute('target');rapBtn.onclick=(e)=>handleLinkClick(e,currentKey,'rapport');}
  }
  closeModal();
}

function deleteData(){
  localStorage.removeItem(currentKey+'_tp');
  localStorage.removeItem(currentKey+'_rapport');
  document.getElementById('tpLink').value='';
  document.getElementById('rapportLink').value='';
}

function openModalLink(type){
  const link=localStorage.getItem(currentKey+'_'+type);
  if(link)window.open(link,'_blank');
}

function closeModal(){document.getElementById('modal').style.display='none';}
function outsideClick(e){if(e.target.id==='modal')closeModal();}

/* ══════════════════════════════════
   INTERSECTION OBSERVER
══════════════════════════════════ */
const observer = new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('show');});
},{threshold:0.05});

function observeElements(){
  document.querySelectorAll('.atelier, .exercice-card').forEach(el=>observer.observe(el));
}
window.addEventListener('load', observeElements);
</script>
</body>
</html>