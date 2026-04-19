<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
:root{
  --bg:#060b14;
  --bg2:#0a1628;
  --bg3:#0d1f3c;
  --accent:#00c6ff;
  --accent2:#0072ff;
  --accent3:#7b2fff;
  --text:#fff;
  --muted:rgba(255,255,255,0.6);
}

/* Scrollbar professionnelle avec hover */
::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}

::-webkit-scrollbar-track {
  background: rgba(10, 22, 40, 0.8);
  border-radius: 10px;
  box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(135deg, #00c6ff 0%, #0072ff 50%, #7b2fff 100%);
  border-radius: 10px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(135deg, #00e1ff 0%, #0088ff 50%, #9b4fff 100%);
  transform: scale(1.02);
  box-shadow: 0 0 12px rgba(0, 198, 255, 0.6);
}

#scrollProgress{
  position:fixed;top:0;left:0;height:2px;width:0%;
  background:linear-gradient(90deg,var(--accent3),var(--accent),var(--accent2));
  z-index:9997;
  box-shadow:0 0 12px rgba(0,198,255,0.8);
  transition:width 0.05s linear;
}

#bgCanvas{
  position:fixed;top:0;left:0;
  width:100%;height:100%;
  pointer-events:none;z-index:0;
  opacity:0.35;
}

body{
  font-family:'Inter',sans-serif;
  background:#060b14;
  color:var(--text);
  min-height:100vh;
  overflow-x:hidden;
}

#welcomeOverlay{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:linear-gradient(145deg, #060b14 0%, #0a0c1a 100%);
  backdrop-filter:blur(6px);
  z-index:10000;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;
  transition:opacity 0.9s cubic-bezier(0.2, 0.9, 0.4, 1.1), visibility 0.9s ease;
  visibility:visible;
  opacity:1;
  pointer-events:none;
}
#welcomeOverlay.hide{
  opacity:0;
  visibility:hidden;
}
.welcome-line-top{
  font-family:'Syne',sans-serif;
  font-size:clamp(32px,8vw,80px);
  font-weight:800;
  letter-spacing:-0.02em;
  text-align:center;
  background:linear-gradient(135deg, #ffffff, var(--accent), var(--accent3), var(--accent2));
  background-size:300% auto;
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
  animation: welcomeGlow 2.5s ease infinite;
  transform:translateY(0);
  opacity:0;
  animation: welcomeGlow 2.5s ease infinite, floatDown 0.8s 0.3s forwards;
}
@keyframes floatDown{
  0%{opacity:0; transform:translateY(-30px);}
  100%{opacity:1; transform:translateY(0);}
}
.welcome-line-bottom{
  font-family:'Syne',sans-serif;
  font-size:clamp(28px,7vw,70px);
  font-weight:800;
  letter-spacing:-0.02em;
  text-align:center;
  background:linear-gradient(135deg, var(--accent2), var(--accent3), #ffffff, var(--accent));
  background-size:300% auto;
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
  animation: welcomeGlowBottom 2.5s ease infinite;
  margin-top:10px;
  opacity:0;
  animation: welcomeGlowBottom 2.5s ease infinite, floatUp 0.8s 0.5s forwards;
}
@keyframes floatUp{
  0%{opacity:0; transform:translateY(30px);}
  100%{opacity:1; transform:translateY(0);}
}
@keyframes welcomeGlow{
  0%{background-position:0% 50%;}
  50%{background-position:100% 50%;}
  100%{background-position:0% 50%;}
}
@keyframes welcomeGlowBottom{
  0%{background-position:100% 50%;}
  50%{background-position:0% 50%;}
  100%{background-position:100% 50%;}
}

#mainContent{
  opacity:1;
  pointer-events:auto;
}

nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:22px 60px;
  background:rgba(6,11,20,0.0);
  backdrop-filter:blur(0px);
  border-bottom:1px solid transparent;
  position:sticky;top:0;z-index:100;
  transition:padding 0.4s ease, background 0.4s ease, box-shadow 0.4s ease;
}
nav.scrolled{
  padding:14px 60px;
  background:rgba(6,11,20,0.85);
  backdrop-filter:blur(24px);
  border-color:rgba(0,198,255,0.08);
  box-shadow:0 8px 40px rgba(0,0,0,0.5);
}

.nav-logo{
  font-family:'Syne',sans-serif;
  font-weight:800;font-size:20px;
  letter-spacing:2px;text-transform:uppercase;
  cursor:pointer;
  background:linear-gradient(90deg,#fff 0%,var(--accent) 50%,#fff 100%);
  background-size:200% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  transition:background-position 0.5s ease;
}
.nav-logo:hover{background-position:right center;}

.nav-links{display:flex;gap:32px;list-style:none;}
.nav-links a{
  color:var(--muted);text-decoration:none;font-size:13px;
  letter-spacing:0.5px;transition:color 0.2s;cursor:pointer;
  position:relative;padding-bottom:3px;
}
.nav-links a::after{
  content:'';position:absolute;bottom:0;left:0;
  width:0;height:1px;background:var(--accent);transition:width 0.3s ease;
}
.nav-links a:hover{color:var(--text);}
.nav-links a:hover::after{width:100%;}

.hero{
  display:grid;grid-template-columns:1fr;
  align-items:center;
  min-height:calc(100vh - 73px);
  padding:0 60px;max-width:700px;
  position:relative;z-index:1;
}

.hero-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(0,198,255,0.08);
  border:1px solid rgba(0,198,255,0.2);
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
  font-family:'Syne',sans-serif;font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;letter-spacing:-1px;margin-bottom:16px;
}

.greeting-wrap{
  display:inline-flex;flex-wrap:wrap;gap:0 0.28em;
  margin-bottom:6px;min-height:1.2em;
}
.g-word{display:inline-flex;}
.g-char{
  display:inline-block;font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);font-weight:800;line-height:1.05;letter-spacing:-1px;
  color:var(--text);transition:transform 0.2s cubic-bezier(.34,1.56,.64,1), color 0.2s ease;opacity:0;
}
.g-char.visible{opacity:1;}
.greeting-wrap:hover .g-char{color:rgba(255,255,255,0.35);}
.greeting-wrap .g-char:hover{color:#fff !important;transform:translateY(-8px) scale(1.1);}

.name-main{
  display:inline-block;position:relative;padding-bottom:6px;
  opacity:0;transform:translateY(20px);animation:fadeUp 0.7s 1.2s ease forwards;
}
.name-main-inner{
  background:linear-gradient(90deg,var(--accent3),var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  font-family:'Syne',sans-serif;font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;letter-spacing:-1px;
  display:inline-block;
}
.name-main::before{
  content:'';position:absolute;bottom:0;left:0;
  width:40%;height:3px;
  background:linear-gradient(90deg,var(--accent3),var(--accent));
  border-radius:3px;transition:width 0.45s cubic-bezier(.22,1,.36,1);opacity:0.5;
}
.name-main:hover::before{width:100%;opacity:1;}

.hero-desc{
  font-size:14px;color:var(--muted);line-height:1.7;
  max-width:420px;margin-bottom:30px;font-weight:300;
  opacity:0;transform:translateY(20px);animation:fadeUp 0.6s 1.5s ease forwards;
}
.hero-cta{
  display:flex;gap:14px;align-items:center;flex-wrap:wrap;
  opacity:0;transform:translateY(20px);animation:fadeUp 0.6s 1.7s ease forwards;
}
.btn-primary{
  display:inline-flex;align-items:center;gap:8px;
  background:linear-gradient(135deg,var(--accent3),var(--accent),var(--accent2));
  background-size:200% 200%;
  color:#fff;border:none;padding:12px 24px;
  border-radius:50px;font-size:13px;font-weight:500;
  cursor:pointer;text-decoration:none;
  transition:transform 0.2s,box-shadow 0.2s;
  animation:gradShift 4s ease infinite;
}
@keyframes gradShift{
  0%{background-position:0% 50%;}
  50%{background-position:100% 50%;}
  100%{background-position:0% 50%;}
}
.btn-primary:hover{
  transform:translateY(-2px);
  box-shadow:0 12px 40px rgba(0,114,255,0.5);
}
.btn-outline{
  display:inline-flex;align-items:center;gap:8px;
  background:transparent;color:var(--text);
  border:1px solid rgba(255,255,255,0.15);
  padding:11px 24px;border-radius:50px;
  font-size:13px;font-weight:400;cursor:pointer;text-decoration:none;transition:all 0.2s;
}
.btn-outline:hover{border-color:rgba(0,198,255,0.4);background:rgba(0,198,255,0.06);}

.hero-stats{
  display:flex;gap:32px;margin-top:36px;padding-top:28px;
  border-top:1px solid rgba(255,255,255,0.07);
  opacity:0;transform:translateY(20px);animation:fadeUp 0.6s 1.9s ease forwards;
}
.stat-item span:first-child{
  display:block;font-family:'Syne',sans-serif;font-size:24px;font-weight:700;
  background:linear-gradient(90deg,var(--accent3),var(--accent));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.stat-item span:last-child{font-size:11px;color:var(--muted);letter-spacing:0.5px;}

/* SECTION ABOUT - Version simplifiée */
.about-section {
  padding: 80px 60px;
  position: relative;
  z-index: 1;
}

.about-container {
  max-width: 1000px;
  margin: 0 auto;
}

.about-title {
  font-family: 'Syne', sans-serif;
  font-size: 38px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
  background: linear-gradient(135deg, #fff, var(--accent), var(--accent3));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.7s cubic-bezier(0.22, 1, 0.36, 1);
}

.about-title.in-view {
  opacity: 1;
  transform: translateY(0);
}

.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
}

.about-left {
  opacity: 0;
  transform: translateX(-30px);
  transition: all 0.7s cubic-bezier(0.22, 1, 0.36, 1);
}

.about-left.in-view {
  opacity: 1;
  transform: translateX(0);
}

.about-text {
  font-size: 15px;
  line-height: 1.8;
  color: var(--muted);
  margin-bottom: 25px;
}

.about-right {
  opacity: 0;
  transform: translateX(30px);
  transition: all 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.1s;
}

.about-right.in-view {
  opacity: 1;
  transform: translateX(0);
}

.skills-title {
  font-family: 'Syne', sans-serif;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 20px;
  color: var(--accent);
}

.skills-container {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
}

.skill-tag {
  background: rgba(0,198,255,0.08);
  border: 1px solid rgba(0,198,255,0.15);
  border-radius: 50px;
  padding: 8px 18px;
  font-size: 13px;
  font-weight: 500;
  color: var(--text);
  transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
  cursor: default;
}

.skill-tag:hover {
  background: rgba(0,198,255,0.2);
  border-color: rgba(0,198,255,0.4);
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 5px 15px rgba(0,198,255,0.2);
}

/* Ateliers section */
.ateliers-section{padding:80px 60px;position:relative;z-index:1;}
.section-title{
  font-family:'Syne',sans-serif;font-size:clamp(24px,3vw,38px);font-weight:700;
  text-align:center;margin-bottom:40px;
  opacity:0;
  position:relative;display:inline-block;left:50%;transform:translateX(-50%) translateY(30px);
  transition:opacity 0.7s ease, transform 0.7s ease;
}
.section-title.in-view{opacity:1;transform:translateX(-50%) translateY(0);}
.section-title::after{
  content:'';position:absolute;bottom:-8px;left:50%;
  width:0;height:2px;
  background:linear-gradient(90deg,var(--accent3),var(--accent),var(--accent2));
  border-radius:2px;transform:translateX(-50%);
  transition:width 0.6s 0.4s cubic-bezier(.22,1,.36,1);
}
.section-title.in-view::after{width:60px;}

.container{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:16px;}

.atelier{
  background:rgba(255,255,255,0.03);
  padding:24px 20px;border-radius:16px;text-align:center;cursor:pointer;
  border:1px solid rgba(255,255,255,0.06);
  transition:transform 0.3s cubic-bezier(.22,1,.36,1), background 0.3s, box-shadow 0.3s, border-color 0.3s;
  font-family:'Syne',sans-serif;font-size:14px;font-weight:600;letter-spacing:0.5px;
  opacity:0;transform:translateY(30px);position:relative;overflow:hidden;
}
.atelier::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(circle at var(--mx,50%) var(--my,50%), rgba(0,198,255,0.08) 0%, transparent 70%);
  opacity:0;transition:opacity 0.3s;
}
.atelier:hover::before{opacity:1;}
.atelier:hover{
  transform:translateY(-8px) scale(1.03);
  background:rgba(0,198,255,0.05);
  border-color:rgba(0,198,255,0.3);
  box-shadow:0 24px 60px rgba(0,0,0,0.4);
}
.atelier.show{opacity:1;transform:translateY(0);}

.ripple{
  position:absolute;border-radius:50%;
  background:rgba(0,198,255,0.2);transform:scale(0);
  animation:ripple-anim 0.7s ease-out;pointer-events:none;
}
@keyframes ripple-anim{to{transform:scale(4);opacity:0;}}

#exercices{padding:0 60px 60px;position:relative;z-index:1;}
#exercices h3{font-family:'Syne',sans-serif;font-size:22px;font-weight:700;margin-bottom:20px;color:var(--accent);}
.exercice-card{
  background:rgba(255,255,255,0.03);margin:10px 0;padding:16px 20px;border-radius:12px;
  border:1px solid rgba(255,255,255,0.05);
  opacity:0;transform:translateX(-20px);transition:opacity 0.4s, transform 0.4s;
  display:flex;align-items:center;justify-content:space-between;gap:16px;
}
.exercice-card.show{opacity:1;transform:translateX(0);}
.exercice-card:hover{
  background:rgba(0,198,255,0.05);
  border-color:rgba(0,198,255,0.2);
  transform:translateX(6px);
}
.exercice-label{display:flex;align-items:center;gap:10px;font-size:14px;font-weight:500;flex:1;}
.exercice-label::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--accent);flex-shrink:0;animation:pulse 2.5s infinite;}
.exercice-links{display:flex;gap:8px;flex-shrink:0;}
.link-btn{
  display:inline-flex;align-items:center;gap:5px;padding:6px 14px;border-radius:20px;
  font-size:12px;font-weight:500;text-decoration:none;border:1px solid;transition:all 0.2s;cursor:pointer;
}
.link-tp{color:var(--accent);border-color:rgba(0,198,255,0.3);background:rgba(0,198,255,0.07);}
.link-tp:hover{background:rgba(0,198,255,0.18);border-color:rgba(0,198,255,0.6);transform:translateY(-2px);}
.link-rapport{color:#a78bfa;border-color:rgba(167,139,250,0.3);background:rgba(167,139,250,0.07);}
.link-rapport:hover{background:rgba(167,139,250,0.18);border-color:rgba(167,139,250,0.6);transform:translateY(-2px);}
.link-btn svg{width:11px;height:11px;}

#contactModal{
  display:none;position:fixed;inset:0;
  background:rgba(0,0,0,0.8);backdrop-filter:blur(16px);
  z-index:500;align-items:center;justify-content:center;
}
#contactModal.open{display:flex;}
.cmodal{
  background:linear-gradient(145deg,rgba(13,31,60,0.98),rgba(6,11,20,0.98));
  border:1px solid rgba(0,198,255,0.15);
  border-radius:24px;padding:40px 36px;
  width:92%;max-width:460px;position:relative;
  animation:fadeUp 0.35s cubic-bezier(.22,1,.36,1) both;
}
.cmodal-close{
  position:absolute;top:14px;right:14px;width:30px;height:30px;border-radius:50%;
  background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);
  color:var(--muted);font-size:16px;display:flex;align-items:center;justify-content:center;
  cursor:pointer;
}
.cmodal-close:hover{background:rgba(255,255,255,0.12);color:#fff;}
.cmodal h3{font-family:'Syne',sans-serif;font-size:22px;font-weight:800;margin-bottom:6px;}
.cmodal h3 span{background:linear-gradient(90deg,var(--accent3),var(--accent));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
.cmodal-subtitle{font-size:13px;color:var(--muted);margin-bottom:28px;}
.cinfo-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:24px;}
.cinfo-tile{
  background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.07);
  border-radius:14px;padding:14px 16px;display:flex;align-items:center;gap:12px;
  text-decoration:none;color:var(--text);transition:all 0.25s;
}
.cinfo-tile:hover{background:rgba(0,198,255,0.08);border-color:rgba(0,198,255,0.25);transform:translateY(-3px);}
.cinfo-tile.full{grid-column:1/-1;}
.cinfo-icon{width:36px;height:36px;border-radius:50%;flex-shrink:0;background:rgba(0,198,255,0.1);border:1px solid rgba(0,198,255,0.18);display:flex;align-items:center;justify-content:center;}
.cinfo-icon svg{width:16px;height:16px;color:var(--accent);}
.cinfo-label{font-size:11px;color:var(--muted);letter-spacing:0.4px;display:block;margin-bottom:2px;}
.cinfo-value{font-size:13px;font-weight:500;}

#modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);backdrop-filter:blur(10px);z-index:1000;}
.modal-content{
  background:linear-gradient(145deg,rgba(13,31,60,0.97),rgba(6,11,20,0.97));
  width:90%;max-width:460px;margin:80px auto;padding:32px;border-radius:20px;
  border:1px solid rgba(255,255,255,0.08);
}
.modal-content h3{font-family:'Syne',sans-serif;font-size:18px;font-weight:700;margin-bottom:24px;color:var(--accent);}
.modal-section{margin-bottom:16px;}
.modal-section h4{font-size:12px;font-weight:500;color:var(--muted);margin-bottom:8px;text-transform:uppercase;}
.input-row{display:flex;gap:8px;}
input{
  flex:1;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);
  border-radius:10px;padding:10px 14px;color:#fff;font-size:13px;font-family:'Inter',sans-serif;
  outline:none;
}
input:focus{border-color:var(--accent);box-shadow:0 0 0 3px rgba(0,198,255,0.12);}
.btn-small{padding:10px 14px;background:linear-gradient(135deg,var(--accent),var(--accent2));border:none;border-radius:10px;color:#fff;font-size:12px;cursor:pointer;}
.modal-actions{display:flex;gap:8px;margin-top:20px;padding-top:20px;border-top:1px solid rgba(255,255,255,0.07);}
.btn-save{flex:1;padding:11px;background:linear-gradient(135deg,var(--accent3),var(--accent),var(--accent2));border:none;border-radius:10px;color:#fff;font-size:13px;cursor:pointer;}
.btn-save:hover{transform:translateY(-1px);box-shadow:0 6px 20px rgba(0,114,255,0.4);}
.btn-del{padding:11px 16px;background:rgba(255,80,80,0.1);border:1px solid rgba(255,80,80,0.18);border-radius:10px;color:#ff6060;cursor:pointer;}
.btn-close{padding:11px 16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:var(--muted);cursor:pointer;}

.reveal{opacity:0;transform:translateY(40px);transition:opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1);}
.reveal.reveal-left{transform:translateX(-40px);}
.reveal.reveal-right{transform:translateX(40px);}
.reveal.in-view{opacity:1;transform:none;}

@keyframes fadeUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
@keyframes pulse{0%,100%{opacity:1;}50%{opacity:0.4;}}

#scrollTop{
  position:fixed;bottom:32px;right:32px;width:44px;height:44px;border-radius:50%;
  background:linear-gradient(135deg,var(--accent3),var(--accent),var(--accent2));
  border:none;color:#fff;font-size:18px;display:flex;align-items:center;justify-content:center;
  cursor:pointer;z-index:200;opacity:0;transform:translateY(20px);
  transition:opacity 0.3s, transform 0.3s;
  box-shadow:0 4px 24px rgba(0,114,255,0.4);
}
#scrollTop.visible{opacity:1;transform:translateY(0);}
#scrollTop:hover{transform:translateY(-4px) scale(1.1);}

@media(max-width:768px){
  nav{padding:16px 20px;}
  .hero{grid-template-columns:1fr;padding:40px 20px;text-align:center;min-height:auto;}
  .hero-desc{max-width:100%;}
  .hero-cta{justify-content:center;}
  .hero-stats{justify-content:center;}
  .ateliers-section{padding:40px 20px;}
  #exercices{padding:0 20px 30px;}
  .exercice-card{flex-direction:column;align-items:flex-start;gap:10px;}
  .greeting-wrap{justify-content:center;}
  .about-section{padding:50px 20px;}
  .about-grid{grid-template-columns:1fr;gap:30px;}
}
</style>
</head>
<body>

<div id="welcomeOverlay">
  <div class="welcome-line-top">WELCOME TO</div>
  <div class="welcome-line-bottom">MY PORTFOLIO</div>
</div>

<div id="mainContent">
<div id="scrollProgress"></div>
<canvas id="bgCanvas"></canvas>
<button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<nav id="mainNav">
  <div class="nav-logo">ANASS LAHMAR</div>
  <ul class="nav-links">
    <li><a href="#about">À propos</a></li>
    <li><a href="#ateliers">Projets</a></li>
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

<!-- SECTION ABOUT - Version simplifiée sans philosophie ni quote -->
<section class="about-section" id="about">
  <div class="about-container">
    <h2 class="about-title reveal">À propos</h2>
    <div class="about-grid">
      <div class="about-left reveal reveal-left">
        <p class="about-text">Développeur web junior passionné par les technologies modernes. Actuellement en formation à l'OFPPT Tanger, je crée des expériences web immersives et performantes. Chaque ligne de code est une opportunité d'apprendre et de repousser mes limites.</p>
      </div>
      <div class="about-right reveal reveal-right">
        <h3 class="skills-title">Compétences techniques</h3>
        <div class="skills-container">
          <span class="skill-tag">HTML / CSS</span>
          <span class="skill-tag">Bootstrap</span>
          <span class="skill-tag">Git / GitHub</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">PHP (en cours)</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ateliers-section" id="ateliers">
  <h2 class="section-title">TPs & Rapports</h2>
  <div class="container" id="atelierGrid"></div>
</section>

<div id="exercices"></div>

<div id="contactModal" onclick="contactOverlayClick(event)">
  <div class="cmodal">
    <button class="cmodal-close" onclick="closeContactModal()">&#x2715;</button>
    <h3>Me <span>contacter</span></h3>
    <p class="cmodal-subtitle">Disponible pour missions et collaborations.</p>
    <div class="cinfo-grid">
      <a class="cinfo-tile" href="mailto:Anaslhm76@gmail.com">
        <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/></svg></div>
        <div><span class="cinfo-label">Email</span><span class="cinfo-value">Anaslhm76@gmail.com</span></div>
      </a>
      <a class="cinfo-tile" href="tel:0777852536">
        <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.9v2.02z"/></svg></div>
        <div><span class="cinfo-label">Téléphone</span><span class="cinfo-value">0777 852 536</span></div>
      </a>
      <div class="cinfo-tile full" style="cursor:default;">
        <div class="cinfo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div><span class="cinfo-label">Localisation</span><span class="cinfo-value">Tanger, Maroc</span></div>
      </div>
    </div>
  </div>
</div>

<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">
    <h3 id="modalTitle"></h3>
    <div class="modal-section"><h4>Lien TP</h4><div class="input-row"><input type="text" id="tpLink" placeholder="https://..."><button class="btn-small" onclick="openModalLink('tp')">Ouvrir</button></div></div>
    <div class="modal-section"><h4>Lien Rapport</h4><div class="input-row"><input type="text" id="rapportLink" placeholder="https://..."><button class="btn-small" onclick="openModalLink('rapport')">Ouvrir</button></div></div>
    <div class="modal-actions">
      <button class="btn-save" onclick="saveData()">Sauvegarder</button>
      <button class="btn-del" onclick="deleteData()">Supprimer</button>
      <button class="btn-close" onclick="closeModal()">Fermer</button>
    </div>
  </div>
</div>
</div>

<script>
let welcomeRevealed = false;
const welcomeOverlay = document.getElementById('welcomeOverlay');

function hideWelcome() {
  if(!welcomeRevealed) {
    welcomeRevealed = true;
    welcomeOverlay.classList.add('hide');
  }
}

window.addEventListener('scroll', function onFirstScroll() {
  if(!welcomeRevealed) {
    hideWelcome();
    window.removeEventListener('scroll', onFirstScroll);
  }
}, { passive: true, once: true });

setTimeout(() => {
  if(!welcomeRevealed) hideWelcome();
}, 6000);

// Animation 3D réduite
(function() {
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');
  let W, H, cx, cy;
  let scrollY = 0, targetScrollY = 0;
  let time = 0;
  const mouse = { x: -9999, y: -9999 };
  
  function resize() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
    cx = W * 0.72;
    cy = H * 0.38;
  }
  resize();
  window.addEventListener('resize', resize);
  document.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });
  document.addEventListener('mouseleave', () => { mouse.x = -9999; mouse.y = -9999; });
  window.addEventListener('scroll', () => { targetScrollY = window.scrollY; });
  
  const STAR_COUNT = 180;
  const stars = [];
  for (let i = 0; i < STAR_COUNT; i++) {
    stars.push({ x: Math.random() * 2000 - 500, y: Math.random() * 2000 - 500, r: 0.3 + Math.random() * 1.2, alpha: 0.2 + Math.random() * 0.6, twinkle: Math.random() * Math.PI * 2, twinkleSpeed: 0.008 + Math.random() * 0.015, depth: 0.05 + Math.random() * 0.2 });
  }
  
  const RINGS = [
    { r: 50,  w: 4,  a: 0.6,  speed:  0.008, color: '#c084fc' },
    { r: 90,  w: 3,  a: 0.45, speed: -0.006, color: '#a855f7' },
    { r: 140, w: 2,  a: 0.35, speed:  0.005, color: '#818cf8' },
    { r: 200, w: 1.5,a: 0.25, speed: -0.004, color: '#60a5fa' },
    { r: 270, w: 1,  a: 0.15, speed:  0.003, color: '#7c3aed' }
  ];
  const ringAngles = RINGS.map(() => Math.random() * Math.PI * 2);
  const PARTICLES = [];
  for (let i = 0; i < 35; i++) { 
    const ring = RINGS[Math.floor(Math.random() * (RINGS.length - 1))]; 
    PARTICLES.push({ angle: Math.random() * Math.PI * 2, orbitR: ring.r * (0.9 + Math.random() * 0.2) + Math.random() * 20, speed: (0.005 + Math.random() * 0.01) * (Math.random() > 0.5 ? 1 : -1), r: 0.6 + Math.random() * 1.2, alpha: 0.3 + Math.random() * 0.4, color: Math.random() > 0.5 ? '160,100,255' : '100,180,255' }); 
  }
  
  function drawCore(x, y) {
    const coreG = ctx.createRadialGradient(x, y, 0, x, y, 25); 
    coreG.addColorStop(0, 'rgba(0,0,0,0.8)'); 
    coreG.addColorStop(0.7, 'rgba(5,0,20,0.5)'); 
    coreG.addColorStop(1, 'rgba(30,0,60,0)'); 
    ctx.fillStyle = coreG; 
    ctx.beginPath(); 
    ctx.arc(x, y, 25, 0, Math.PI * 2); 
    ctx.fill();
  }
  
  function drawRings(x, y) { 
    RINGS.forEach((ring, i) => { 
      ringAngles[i] += ring.speed; 
      ctx.save(); 
      ctx.translate(x, y); 
      ctx.rotate(ringAngles[i]); 
      ctx.scale(1, 0.3 + i * 0.03); 
      ctx.beginPath(); 
      ctx.arc(0, 0, ring.r, 0, Math.PI * 2); 
      ctx.strokeStyle = ring.color + Math.round(ring.a * 180).toString(16).padStart(2,'0'); 
      ctx.lineWidth = ring.w; 
      ctx.shadowBlur = ring.w * 2; 
      ctx.stroke(); 
      ctx.restore(); 
    }); 
  }
  
  function drawStars() { 
    const scrollOffset = scrollY; 
    stars.forEach(s => { 
      const sx = ((s.x + W * 2) % (W + 500)) - 250; 
      const sy = ((s.y + H * 2 - scrollOffset * s.depth) % (H + 500)) - 250; 
      const tw = 0.6 + Math.sin(time * s.twinkleSpeed + s.twinkle) * 0.3; 
      ctx.beginPath(); 
      ctx.arc(sx, sy, s.r, 0, Math.PI * 2); 
      ctx.fillStyle = `rgba(200,220,255,${s.alpha * tw * 0.5})`; 
      ctx.fill(); 
    }); 
  }
  
  function drawNebula(x, y) { 
    const topG = ctx.createRadialGradient(x, -H * 0.1, 0, x, -H * 0.1, H * 0.8); 
    topG.addColorStop(0, 'rgba(80,20,160,0.12)'); 
    topG.addColorStop(0.5, 'rgba(50,10,120,0.06)'); 
    topG.addColorStop(1, 'rgba(0,0,0,0)'); 
    ctx.fillStyle = topG; 
    ctx.fillRect(0, 0, W, H); 
  }
  
  function getWormholePos() { 
    const scrollEffect = scrollY * 0.08; 
    return { x: cx, y: cy - scrollEffect }; 
  }
  
  function draw() { 
    time++; 
    scrollY += (targetScrollY - scrollY) * 0.08; 
    ctx.clearRect(0, 0, W, H); 
    const bgG = ctx.createLinearGradient(0, 0, 0, H); 
    bgG.addColorStop(0, '#04020e'); 
    bgG.addColorStop(0.5, '#060b18'); 
    bgG.addColorStop(1, '#030610'); 
    ctx.fillStyle = bgG; 
    ctx.fillRect(0, 0, W, H); 
    const { x, y } = getWormholePos(); 
    drawNebula(x, y); 
    drawStars(); 
    drawRings(x, y); 
    drawCore(x, y); 
    requestAnimationFrame(draw); 
  }
  draw();
})();

document.addEventListener('mousemove', e => { 
  document.querySelectorAll('.atelier').forEach(el => { 
    const rect = el.getBoundingClientRect(); 
    const mx = ((e.clientX - rect.left) / rect.width) * 100; 
    const my = ((e.clientY - rect.top) / rect.height) * 100; 
    el.style.setProperty('--mx', mx + '%'); 
    el.style.setProperty('--my', my + '%'); 
  }); 
});

const prog = document.getElementById('scrollProgress'); 
const navEl = document.getElementById('mainNav'); 
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', () => { 
  const total = document.body.scrollHeight - window.innerHeight; 
  prog.style.width = (window.scrollY / total * 100) + '%'; 
  navEl.classList.toggle('scrolled', window.scrollY > 60); 
  scrollTopBtn.classList.toggle('visible', window.scrollY > 300); 
});

// Animation du greeting avec hover conservé
const GREETING = 'Bonjour, je suis'; 
const gwEl = document.getElementById('greetingWrap'); 
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
  gwEl.appendChild(wDiv); 
}); 
allChars.forEach((c, i) => { 
  setTimeout(() => { 
    c.classList.add('visible'); 
    c.style.transform = 'translateY(-6px)'; 
    setTimeout(() => { c.style.transform = 'translateY(0)'; }, 150); 
  }, 400 + i * 55); 
});

// Hover effet sur les lettres
gwEl.addEventListener('mouseover', e => { 
  if (e.target.classList.contains('g-char')) { 
    const idx = allChars.indexOf(e.target); 
    allChars.forEach((c, i) => { 
      const d = Math.abs(i - idx); 
      if (d <= 2) setTimeout(() => { 
        c.style.transform = `translateY(${-6 + d * 2}px) scale(${1.1 - d * 0.03})`; 
        setTimeout(() => { c.style.transform = ''; }, 300); 
      }, d * 40); 
    }); 
  } 
});

// Counters
function animateCounter(el) { 
  const target = +el.dataset.target; 
  const suffix = target === 160 ? '+' : ''; 
  let current = 0; 
  const inc = target / 87; 
  const timer = setInterval(() => { 
    current += inc; 
    if (current >= target) { 
      current = target; 
      clearInterval(timer); 
    } 
    el.textContent = Math.floor(current) + suffix; 
  }, 16); 
} 
const counterObs = new IntersectionObserver(entries => { 
  entries.forEach(e => { 
    if (e.isIntersecting) { 
      animateCounter(e.target); 
      counterObs.unobserve(e.target); 
    } 
  }); 
}, { threshold: 0.5 }); 
document.querySelectorAll('.counter').forEach(c => counterObs.observe(c));

// Reveal animations
const revealObs = new IntersectionObserver(entries => { 
  entries.forEach(e => { 
    if (e.isIntersecting) { 
      const delay = e.target.dataset.delay || 0; 
      setTimeout(() => e.target.classList.add('in-view'), +delay); 
      revealObs.unobserve(e.target); 
    } 
  }); 
}, { threshold: 0.15 }); 

function initReveal() { 
  document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el)); 
} 
window.addEventListener('load', initReveal);

// Contact modal
function openContactModal() { document.getElementById('contactModal').classList.add('open'); } 
function closeContactModal() { document.getElementById('contactModal').classList.remove('open'); } 
function contactOverlayClick(e) { if (e.target.id === 'contactModal') closeContactModal(); }

// Ateliers et exercices
const ATELIERS = 20; 
const EXERCICES_PAR_ATELIER = 8; 
let currentKey = ''; 
const extIcon = `<svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 1h4v4M11 1L5.5 6.5M5 2H2a1 1 0 00-1 1v7a1 1 0 001 1h7a1 1 0 001-1V8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
const gridContainer = document.getElementById('atelierGrid'); 
for (let i = 1; i <= ATELIERS; i++) { 
  const name = 'Atelier ' + i; 
  const d = document.createElement('div'); 
  d.className = 'atelier'; 
  d.textContent = name; 
  d.onclick = e => { 
    const rect = d.getBoundingClientRect(); 
    const rip = document.createElement('span'); 
    rip.className = 'ripple'; 
    const size = Math.max(d.offsetWidth, d.offsetHeight) * 2; 
    rip.style.cssText = `width:${size}px;height:${size}px;left:${e.clientX - rect.left - size / 2}px;top:${e.clientY - rect.top - size / 2}px;`; 
    d.appendChild(rip); 
    setTimeout(() => rip.remove(), 700); 
    openAtelier(name); 
  }; 
  gridContainer.appendChild(d); 
}

function openAtelier(name) { 
  const box = document.getElementById('exercices'); 
  box.innerHTML = '<h3>' + name + '</h3>'; 
  for (let j = 1; j <= EXERCICES_PAR_ATELIER; j++) { 
    const exName = 'Exercice ' + j; 
    const key = name + '_' + exName; 
    const tpLink = localStorage.getItem(key + '_tp') || ''; 
    const rapportLink = localStorage.getItem(key + '_rapport') || ''; 
    const card = document.createElement('div'); 
    card.className = 'exercice-card'; 
    card.dataset.key = key; 
    card.innerHTML = `<div class="exercice-label">${exName}</div><div class="exercice-links"><a class="link-btn link-tp" ${tpLink ? 'href="' + tpLink + '" target="_blank"' : 'href="#"'} onclick="handleLinkClick(event,'${key}','tp')">${extIcon} TP</a><a class="link-btn link-rapport" ${rapportLink ? 'href="' + rapportLink + '" target="_blank"' : 'href="#"'} onclick="handleLinkClick(event,'${key}','rapport')">${extIcon} Rapport</a></div>`; 
    box.appendChild(card); 
    setTimeout(() => card.classList.add('show'), j * 50);
  } 
  box.scrollIntoView({ behavior: 'smooth', block: 'start' }); 
}

function handleLinkClick(e, key, type) { 
  const link = localStorage.getItem(key + '_' + type); 
  if (!link) { 
    e.preventDefault(); 
    openModal(key); 
  } 
}

function openModal(key) { 
  currentKey = key; 
  const parts = key.split('_'); 
  document.getElementById('modalTitle').textContent = parts[0] + ' ' + parts[1]; 
  document.getElementById('modal').style.display = 'block'; 
  document.getElementById('tpLink').value = localStorage.getItem(key + '_tp') || ''; 
  document.getElementById('rapportLink').value = localStorage.getItem(key + '_rapport') || ''; 
}

function saveData() { 
  const tp = document.getElementById('tpLink').value.trim(); 
  const rapport = document.getElementById('rapportLink').value.trim(); 
  if (tp) localStorage.setItem(currentKey + '_tp', tp); 
  else localStorage.removeItem(currentKey + '_tp'); 
  if (rapport) localStorage.setItem(currentKey + '_rapport', rapport); 
  else localStorage.removeItem(currentKey + '_rapport'); 
  const card = document.querySelector('[data-key="' + currentKey + '"]'); 
  if (card) { 
    const links = card.querySelectorAll('.link-btn'); 
    const tpBtn = links[0], rapBtn = links[1]; 
    if (tp) { tpBtn.href = tp; tpBtn.target = '_blank'; tpBtn.onclick = null; } 
    else { tpBtn.href = '#'; tpBtn.onclick = e => handleLinkClick(e, currentKey, 'tp'); } 
    if (rapport) { rapBtn.href = rapport; rapBtn.target = '_blank'; rapBtn.onclick = null; } 
    else { rapBtn.href = '#'; rapBtn.onclick = e => handleLinkClick(e, currentKey, 'rapport'); } 
  } 
  closeModal(); 
}

function deleteData() { 
  localStorage.removeItem(currentKey + '_tp'); 
  localStorage.removeItem(currentKey + '_rapport'); 
  document.getElementById('tpLink').value = ''; 
  document.getElementById('rapportLink').value = ''; 
}

function openModalLink(type) { 
  const link = localStorage.getItem(currentKey + '_' + type); 
  if (link) window.open(link, '_blank'); 
}

function closeModal() { document.getElementById('modal').style.display = 'none'; } 
function outsideClick(e) { if (e.target.id === 'modal') closeModal(); }

const observer = new IntersectionObserver(entries => { 
  entries.forEach(e => { 
    if (e.isIntersecting) { 
      const delay = e.target.dataset.delay || 0; 
      setTimeout(() => e.target.classList.add('show'), +delay); 
      observer.unobserve(e.target); 
    } 
  }); 
}, { threshold: 0.05 });

function observeElements() { 
  document.querySelectorAll('.atelier').forEach(el => observer.observe(el)); 
} 
window.addEventListener('load', observeElements);
</script>
</body>
</html>