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
body{
  font-family:'Inter',sans-serif;
  background:linear-gradient(135deg,var(--bg),var(--bg2),var(--bg3));
  color:var(--text);
  min-height:100vh;
  overflow-x:hidden;
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
}
.nav-logo{
  font-family:'Syne',sans-serif;
  font-weight:800;font-size:20px;
  letter-spacing:2px;text-transform:uppercase;
  position:relative;
}
.nav-logo::after{
  content:'';position:absolute;bottom:-4px;left:0;
  width:30px;height:2px;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  border-radius:2px;
}
.nav-links{display:flex;gap:32px;list-style:none;}
.nav-links a{
  color:var(--muted);text-decoration:none;
  font-size:13px;letter-spacing:0.5px;
  transition:color 0.2s;
}
.nav-links a:hover{color:var(--text);}

.hero{
  display:grid;
  grid-template-columns:1fr;
  align-items:center;
  min-height:calc(100vh - 73px);
  padding:0 60px;gap:60px;
  max-width:700px;
}
.hero-left{animation:fadeUp 0.8s ease both;}
.hero-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(0,198,255,0.1);
  border:1px solid rgba(0,198,255,0.25);
  border-radius:100px;padding:6px 14px;
  font-size:12px;color:var(--accent);
  letter-spacing:1px;text-transform:uppercase;
  margin-bottom:28px;
}
.hero-tag::before{
  content:'';width:6px;height:6px;border-radius:50%;
  background:var(--accent);animation:pulse 2s infinite;
}
h1.hero-name{
  font-family:'Syne',sans-serif;
  font-size:clamp(34px,4vw,54px);
  font-weight:800;line-height:1.05;
  letter-spacing:-1px;margin-bottom:16px;
}
h1.hero-name span{
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.hero-desc{
  font-size:14px;color:var(--muted);line-height:1.7;
  max-width:420px;margin-bottom:30px;font-weight:300;
}
.hero-cta{display:flex;gap:14px;align-items:center;flex-wrap:wrap;}
.btn-primary{
  display:inline-flex;align-items:center;gap:8px;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  color:#fff;border:none;padding:12px 24px;
  border-radius:50px;font-size:13px;font-weight:500;
  cursor:pointer;text-decoration:none;
  transition:transform 0.2s,box-shadow 0.2s;letter-spacing:0.3px;
}
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
.hero-right{
  display:flex;justify-content:center;align-items:center;
  animation:fadeUp 0.8s 0.2s ease both;
}
.photo-frame{position:relative;width:300px;height:360px;}
.photo-frame img{
  width:100%;height:100%;object-fit:cover;
  object-position:center top;border-radius:24px;
  display:block;position:relative;z-index:2;
}
.photo-frame::before{
  content:'';position:absolute;top:16px;left:16px;
  width:100%;height:100%;
  background:linear-gradient(135deg,var(--accent),var(--accent2));
  border-radius:24px;z-index:1;opacity:0.35;
}
.photo-frame::after{
  content:'';position:absolute;top:-8px;right:-8px;
  width:60px;height:60px;
  border:2px solid rgba(0,198,255,0.4);
  border-radius:50%;z-index:3;
}
.hero-stats{
  display:flex;gap:32px;margin-top:36px;
  padding-top:28px;
  border-top:1px solid rgba(255,255,255,0.08);
}
.stat-item span:first-child{
  display:block;font-family:'Syne',sans-serif;
  font-size:24px;font-weight:700;
  background:linear-gradient(90deg,var(--accent),var(--accent2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.stat-item span:last-child{font-size:11px;color:var(--muted);letter-spacing:0.5px;}

.section-label{
  text-align:center;font-size:11px;letter-spacing:3px;
  color:var(--muted);text-transform:uppercase;margin-bottom:12px;
}
.section-title{
  font-family:'Syne',sans-serif;
  font-size:clamp(24px,3vw,38px);font-weight:700;
  text-align:center;margin-bottom:40px;
}
.ateliers-section{padding:80px 60px;}
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:16px;
}
.atelier{
  background:rgba(255,255,255,0.05);
  padding:24px 20px;border-radius:16px;
  text-align:center;cursor:pointer;
  border:1px solid rgba(255,255,255,0.06);
  transition:all 0.35s ease;
  font-family:'Syne',sans-serif;font-size:14px;
  font-weight:600;letter-spacing:0.5px;
  opacity:0;transform:translateY(30px);
}
.atelier.show{opacity:1;transform:translateY(0);}
.atelier:hover{
  transform:translateY(-8px);
  background:rgba(0,198,255,0.1);
  border-color:rgba(0,198,255,0.3);
  box-shadow:0 16px 40px rgba(0,114,255,0.2);
}

#exercices{padding:0 60px 60px;}
#exercices h3{
  font-family:'Syne',sans-serif;
  font-size:22px;font-weight:700;
  margin-bottom:20px;color:var(--accent);
}

/* Exercice card avec liens directs */
.exercice-card{
  background:rgba(255,255,255,0.04);
  margin:10px 0;
  padding:16px 20px;border-radius:12px;
  border:1px solid rgba(255,255,255,0.06);
  opacity:0;transform:translateX(-20px);
  transition:opacity 0.3s, transform 0.3s, background 0.2s, border-color 0.2s;
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
}
.exercice-links{
  display:flex;gap:8px;flex-shrink:0;
}
.link-btn{
  display:inline-flex;align-items:center;gap:5px;
  padding:6px 14px;border-radius:20px;
  font-size:12px;font-weight:500;
  text-decoration:none;
  border:1px solid;
  transition:all 0.2s;
  cursor:pointer;
}
.link-tp{
  color:var(--accent);
  border-color:rgba(0,198,255,0.3);
  background:rgba(0,198,255,0.08);
}
.link-tp:hover{
  background:rgba(0,198,255,0.2);
  border-color:rgba(0,198,255,0.6);
}
.link-rapport{
  color:#a78bfa;
  border-color:rgba(167,139,250,0.3);
  background:rgba(167,139,250,0.08);
}
.link-rapport:hover{
  background:rgba(167,139,250,0.2);
  border-color:rgba(167,139,250,0.6);
}
.link-btn svg{
  width:11px;height:11px;flex-shrink:0;
}

/* Modal d'édition des liens */
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
  outline:none;transition:border-color 0.2s;
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

@media(max-width:768px){
  nav{padding:16px 20px;}
  .hero{grid-template-columns:1fr;padding:40px 20px;gap:40px;text-align:center;min-height:auto;}
  .hero-right{order:-1;}
  .photo-frame{width:200px;height:240px;}
  .hero-desc{max-width:100%;}
  .hero-cta{justify-content:center;}
  .hero-stats{justify-content:center;}
  .ateliers-section{padding:40px 20px;}
  #exercices{padding:0 20px 30px;}
  .exercice-card{flex-direction:column;align-items:flex-start;gap:10px;}
}
</style>
</head>
<body>

<nav>
  <div class="nav-logo">ANASS LAHMAR</div>
  <ul class="nav-links">
    <li><a href="#ateliers">Projets</a></li>
    <li><a href="#ateliers">Ateliers</a></li>
  </ul>
</nav>

<section class="hero">
  <div class="hero-left">
    <div class="hero-tag">Disponible pour missions</div>
    <h1 class="hero-name">Bonjour, je suis<br><span>Anass.</span></h1>
    <p class="hero-desc">Curieux et motivé, je développe des projets web et j'apprends chaque jour de nouvelles technologies pour améliorer mes compétences et réaliser des solutions concrètes.</p>
    <div class="hero-cta">
      <a href="#ateliers" class="btn-primary">Mes Projets &rarr;</a>
      <a href="#" class="btn-outline">Me contacter</a>
    </div>
    <div class="hero-stats">
      <div class="stat-item"><span>12</span><span>Ateliers</span></div>
      <div class="stat-item"><span>96+</span><span>Exercices</span></div>
      <div class="stat-item"><span>OFPPT</span><span>Tanger</span></div>
    </div>
  </div>
</section>

<section class="ateliers-section" id="ateliers">
  <p class="section-label">Formation OFPPT</p>
  <h2 class="section-title">TPs & Rapports</h2>
  <div class="container" id="atelierGrid"></div>
</section>

<div id="exercices"></div>

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
const ATELIERS = 12;
const EXERCICES_PAR_ATELIER = 8;
let currentKey = '';

// Icône SVG external link
const extIcon = `<svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1h4v4M11 1L5.5 6.5M5 2H2a1 1 0 00-1 1v7a1 1 0 001 1h7a1 1 0 001-1V8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`;

// Construire la grille des ateliers
const grid = document.getElementById('atelierGrid');
for (let i = 1; i <= ATELIERS; i++) {
  const name = 'Atelier ' + i;
  const d = document.createElement('div');
  d.className = 'atelier';
  d.textContent = name;
  d.onclick = () => openAtelier(name);
  grid.appendChild(d);
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

    card.innerHTML = `
      <div class="exercice-label">${exName}</div>
      <div class="exercice-links">
        <a class="link-btn link-tp" ${tpLink ? 'href="' + tpLink + '" target="_blank"' : 'href="#"'}
           onclick="handleLinkClick(event, '${key}', 'tp')">${extIcon} TP</a>
        <a class="link-btn link-rapport" ${rapportLink ? 'href="' + rapportLink + '" target="_blank"' : 'href="#"'}
           onclick="handleLinkClick(event, '${key}', 'rapport')">${extIcon} Rapport</a>
      </div>
    `;

    box.appendChild(card);
  }

  box.scrollIntoView({ behavior: 'smooth', block: 'start' });
  observeElements();
}

function handleLinkClick(e, key, type) {
  const link = localStorage.getItem(key + '_' + type);
  if (!link) {
    // Pas de lien => ouvrir le modal pour en ajouter un
    e.preventDefault();
    openModal(key);
  }
  // Sinon le <a href> s'ouvre normalement
}

function openModal(key) {
  currentKey = key;
  // Extraire le nom lisible depuis la clé
  const parts = key.split('_');
  document.getElementById('modalTitle').textContent = parts[0] + ' ' + parts[1] + ' — ' + parts[2] + ' ' + parts[3];
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

  // Mettre à jour les liens visibles dans la carte
  const card = document.querySelector('[data-key="' + currentKey + '"]');
  if (card) {
    const links = card.querySelectorAll('.link-btn');
    const tpBtn = links[0];
    const rapBtn = links[1];
    if (tp) { tpBtn.href = tp; tpBtn.target = '_blank'; tpBtn.onclick = null; }
    else { tpBtn.href = '#'; tpBtn.removeAttribute('target'); tpBtn.onclick = (e) => handleLinkClick(e, currentKey, 'tp'); }
    if (rapport) { rapBtn.href = rapport; rapBtn.target = '_blank'; rapBtn.onclick = null; }
    else { rapBtn.href = '#'; rapBtn.removeAttribute('target'); rapBtn.onclick = (e) => handleLinkClick(e, currentKey, 'rapport'); }
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
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('show'); });
}, { threshold: 0.05 });

function observeElements() {
  document.querySelectorAll('.atelier, .exercice-card').forEach(el => observer.observe(el));
}
window.addEventListener('load', observeElements);
</script>
</body>
</html>