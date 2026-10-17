var t=document.getElementById('tg'),m=document.getElementById('menu');
if(t&&m){
t.onclick=function(){var o=m.classList.toggle('open');t.setAttribute('aria-expanded',o)};
m.onclick=function(e){if(e.target.tagName=='A'){m.classList.remove('open');t.setAttribute('aria-expanded',false)}};
}
