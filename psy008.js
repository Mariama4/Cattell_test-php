var qpgm = '';
var qprt = '';
var qvtotal = 0;
var qvfile = 0;
var qvonpage = 0;
var qvtest = 0;
var qvsubtest = 0;
var qvstart = 0;
var qvready = 0;
var qvlimit = 0;
var qvphase = 0;
var qvtime = 0;
var qq = new Array();


if (typeof String.prototype.trim !== 'function')  { 
  String.prototype.trim = function() { return this.replace(/^\s\s*/,'').replace(/\s\s*$/,''); } }

function getRandomInt (min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min; }

function setCookie(cname, cvalue, cexpire)
{
  var d = new Date();
  d.setTime(d.getTime() + (cexpire*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();  
  document.cookie = cname + "=" + cvalue + ";path=/;" + expires;
  if (getCookie(cname) != cvalue) { raiseError('cookies'); }
}

function setCookieSilent(cname, cvalue, cexpire)
{
  var d = new Date();
  d.setTime(d.getTime() + (cexpire*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();  
  document.cookie = cname + "=" + cvalue + ";path=/;" + expires;
}

function getCookie(cname)
{
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i < ca.length; i++) {
    var c = ca[i].trim();
    if (c.indexOf(name) == 0) return c.substring(name.length, c.length); }
   return "";
}

function postRequest (path, params) 
{ 
  var form = document.createElement("form"); 
  form.setAttribute("method", "POST"); 
  form.setAttribute("action", path); 
  form.setAttribute("class", "formpost");
  for (var key in params) { 
    if (params.hasOwnProperty(key)) { 
        // alert(params[key]);
      var hiddenField = document.createElement("input"); 
      hiddenField.setAttribute("type", "hidden"); 
      hiddenField.setAttribute("name", key); 
      hiddenField.setAttribute("value", params[key]); 
      form.appendChild(hiddenField); } } 
  document.body.appendChild(form); 
  console.log(document)
  form.submit(); 
  return false;
}

function postResult (code, query)
{
  var elapsed = Math.floor(new Date().getTime() / 1000) - qvstart; 
  //alert('|code - '+code+'|query - '+query+' |result, t - '+elapsed);
  postRequest(('/cattell/result.php'+'?c='+code+'&q='+query+'&r='+'result'+'&t='+elapsed), { 'c': code, 'q': query, 'r': 'result', 't' : elapsed } );
}

function raiseError (query)
{
  postRequest('/post/', { 'c': 'err', 'q': query } );
  throw { name: 'fatal error', message: 'fatal error' };
}

function timeStart ()
{
  qvstart = Math.floor(new Date().getTime() / 1000);
}

function timeElapsed (time) 
{ 
  var minutes = Math.floor(time/60); 
  var seconds = time%60; 
  var hours = Math.floor(minutes/60); 
  minutes = minutes%60; 
  if (seconds < 10) { seconds = "0" + seconds; } 
  if (minutes < 10 && hours > 0) { minutes = "0" + minutes; } 
  var elapsed = "" + minutes + ':' + seconds; 
  if (hours > 0) { elapsed = "" + hours + ':' + elapsed; } 
  return elapsed; 
} 

function endec (source, base)
{
  var CHARS = '0123456789-_ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  var len = source.length;
  var num = new Array(); 
  for (var i = 0; i < len; i++) { num[i] = CHARS.indexOf(source.charAt(i)); }
  var result = '';
  var newlen = 1; 
  var divide = 0;
  while (newlen != 0) { 
    divide = 0; 
    newlen = 0;
    for (var i = 0; i < len; i++) {
      divide = divide * base + num[i];
      if (divide >= 64) { 
        num[newlen++] = Math.floor(divide/64);
        divide = divide % 64; 
      } else {
        if (newlen > 0) { num[newlen++] = 0; } } }
    len = newlen; 
    result = CHARS.charAt(divide) + result; } 
  return result; 
}

function scaleOverflow (scale)
{
  var el = document.getElementById(scale);
  if (el.scrollWidth > el.clientWidth) {
    el.className = el.className + ' resScaleOverflow'; }
}

/* QTL */

function qtlBegin (qtest,qsubtest) 
{   
  qvfile = 0;
  qvtest = qtest;
  qvsubtest = qsubtest;
  qtlSetCookie('qa', 0);
  qtlSetCookie('qq', 0);
  timeStart();
  qtlSetCookie('qt', qvstart);
  qtlShow();
}

function qtlInit (qtest,qsubtest,qtotal,qonpage,qfile) 
{
  qvtest = qtest;
  qvsubtest = qsubtest;
  qvtotal = qtotal;
  qvonpage = qonpage;
  qvfile = qfile;
  qvstart = qtlGetCookie('qt');
  if (qvstart == 0) { qtlBegin(qvtest,qvsubtest); }
  qtlTick();
  qtlShow();
}

function qtlShow ()
{
  var qq = qtlGetCookie('qq');
  var qa = qtlGetCookie('qa');
  var qfile = 1;
  qq++;

  if (qq > 1 && window.screen.width < 500) { 
    document.getElementById('hDr').style.display = 'none';
    document.getElementById('hDt').style.display = 'none'; }

  if (qa.length > qq) {
    qa = qa.substring(0, qq);
    qtlSetCookie('qa', qa); }

  if (qq > 0 && qvonpage > 0) { 
    var qt = qq > qvtotal ? qvtotal : qq; 
    qfile = qfile + Math.floor((qt-1)/qvonpage); }
  if (qfile != qvfile) {
    document.location = '/'+qvtest+'/'+qvsubtest+qfile+'.html';
    return; }

  if (qq <= qvtotal) { 
    if (document.getElementById('qtlResult') != null) { 
      document.getElementById('qtlResult').style.display = 'none'; } 
    document.getElementById('qtlBlock'+qq).style.display = 'block'; }
  else {
    document.getElementById('qtlResult').style.display = 'block';  }
  if (document.getElementById('qtlBlock'+(qq-1)) != null) {
    document.getElementById('qtlBlock'+(qq-1)).style.display = 'none'; }

  if (document.getElementById('qtlWarn') != null) { 
    document.getElementById('qtlWarn').style.display = (qq == 1 ? 'block' : 'none'); } 

  if (document.getElementById('qtlWarnAge') != null) {    
    var qage = qtlGetCookie('qage');
    if (qage == 0 || qage == '') {
      document.getElementById('qtlWarnAge').style.display = 'block';
      if (document.getElementById('qtlWarn') != null) { 
        document.getElementById('qtlWarn').style.display = 'none'; } } } 

  var pc = Math.round((qq/qvtotal)*100);
  pc = pc > 100 ? 100 : pc; qq = qq > qvtotal ? qvtotal : qq;
  document.getElementById('qtlMeterLine').style.width = "" + pc + '%';
  document.getElementById('qtlMeterLine').innerHTML = '<span class="qtlMeterText">Вопрос&nbsp;'+qq+'&nbsp;из&nbsp;'+qvtotal+'&nbsp;('+pc+'%)</span>';
  document.getElementById('qtlBack').className = qq == 1 ? "qtlBS qtlBack qtlDisabled" : "qtlBS qtlBA qtlBack";
  qvready = 1;
}

function qtlAnswer (qnum,qansw)
{
  qvready = 0;
  var qq = qtlGetCookie('qq');
  var qa = qtlGetCookie('qa');
  if (qansw == 10) { qansw = 'A'; }
  else if (qansw == 11) { qansw = 'B'; }
  else if (qansw == 12) { qansw = 'C'; }
  else if (qansw == 13) { qansw = 'D'; }
  else if (qansw == 14) { qansw = 'E'; }
  else if (qansw == 15) { qansw = 'F'; }
  qa = "" + qa + qansw; 
  qtlSetCookie('qa', qa);
  qtlSetCookie('qq', qnum);
  if (qprt != "") { rotart(qprt); }
  qtlShow();
}

function qtlGoBack ()
{
  var qq = qtlGetCookie('qq');
  if (qq < 1) { return false; }
  var qa = qtlGetCookie('qa');
  qq++;
  if (qq <= qvtotal) {
    document.getElementById('qtlBlock'+qq).style.display = 'none'; }
  qq--; qq--; 
  qa = qa.substring(0, qa.length-1);
  qtlSetCookie('qa', qa);
  qtlSetCookie('qq', qq);
  qtlShow();
}

function qtlPreCheck (qtest, qsubtest)
{
  if (qvtest != qtest || qvsubtest != qsubtest) {
    raiseError('js '+qvtest+'/'+qvsubtest + ' wrong script ' + qtest + '/' + qsubtest); }
  var qq = qtlGetCookie('qq');
  if (qq != qvtotal) {
    raiseError('js '+qvtest+'/'+qvsubtest + ' wrong last qq ' + qq +  ' iof ' + qvtotal); }
  var qa = qtlGetCookie('qa');
  var qal = qa.length - 1;
  if (qal != qvtotal) {
    raiseError('js '+qvtest+'/'+qvsubtest + ' wrong num qa ' + qal +  ' iof ' + qvtotal); }
}

function qtlTickTock() 
{ 
  var now = Math.floor(new Date().getTime() / 1000); 
  document.getElementById("qtlTimer").innerHTML = 
   '<span class="qtlTimerText">' + timeElapsed(now - qvstart) + '</span>'; 
} 

function qtlTick() 
{ 
  qtlTickTock(); 
  setTimeout('qtlTick()', 1000); 
}

function qtlGetCookie (cname)
{
  return getCookie(qvtest+'-'+qvsubtest+'-'+cname);
}

function qtlSetCookie (cname, cvalue)
{
  setCookie(qvtest+'-'+qvsubtest+'-'+cname, cvalue, 1);
}

/* QPL */

function qplBegin (qtest,qsubtest,qphase,qtotal,qlimit)
{   
  qvtest = qtest;
  qvsubtest = qsubtest;
  qvphase = qphase;
  qvtotal = qtotal;
  qvlimit = qlimit;

  if (qphase == 1) {
    timeStart();
    qplSetCookie('qt', qvstart); }
  else {
    qvstart = qplGetCookie('qt'); }

  if (qvlimit > 0) {
    document.getElementById('qplTimer').style.display = 'block';
    qvtime = Math.floor(new Date().getTime() / 1000); }

  for (i = 1; i <= qvtotal; i++) { qq[i] = 0; }
  document.getElementById("qpPanel").style.display = 'block';
  document.getElementById("qpTest").style.display = 'block';
  document.getElementById("qpResult").style.display = 'block';
  document.getElementById("qpRules").style.display = 'none';
  testInit();
  qplTick();
  window.location.hash = '#qpBlock1';
}

function qplSet(q, val)
{
  qq[q] = val;
  if (val == 1) {
    document.getElementById("qpBody"+q).style.display = 'none'; 
    document.getElementById("qpHeaderHide"+q).style.display = 'none'; 
    document.getElementById("qpHeaderShow"+q).style.display = 'block'; 
  } else if (val == 0) {
    document.getElementById("qpBody"+q).style.display = 'block'; 
    document.getElementById("qpHeaderShow"+q).style.display = 'none';
  }
  qplReset(q);
}

function qplReset (q)
{
  val = qq[q];
  document.getElementById("qpLink"+q).className = "qp" + val; 
  document.getElementById("qpHeader"+q).className = "qpHeader qp" + val; 
  if (val == 2) {
    document.getElementById("qpHeaderMarked"+q).style.display = 'block'; 
    document.getElementById("qpHeaderMark"+q).style.display = 'none'; 
  } else {
    document.getElementById("qpHeaderMarked"+q).style.display = 'none'; 
  }
  col = 1;
  for (i = 1; i <= qvtotal; i++) {
    if (qq[i] == 0 && col != 0) { col = 0; }
    if (qq[i] == 2 && col == 1) { col = 2; } }
  document.getElementById("qpFinish").className = "qpFinish qp" + col;
}

function qplTickTock() 
{
  var now = Math.floor(new Date().getTime() / 1000); 
  var val;
  if (qvlimit == 0) {
    val = now - qvstart;
  } else {
    val = qvtime + qvlimit - now;
    if (val <= 0) {
      document.getElementById("qpTest").style.display = 'none';
      document.getElementById("qpNoTime").style.display = 'block'; }
  }
  if (val >= 0) {
    document.getElementById("qplTimer").innerHTML = 
     '<span class="qplTimerText">' + timeElapsed(val) + '</span>';  }
  if (qvlimit > 0 && val >= 0 && val < 60) {
    var clr = 255 - (val*5);
    document.getElementById("qplTimer").style.color = "rgb("+clr+", 0, 0)"; }
}

function qplTick() 
{ 
  qplTickTock(); 
  setTimeout('qplTick()', 1000); 
}

function qplGetCookie (cname)
{
  return getCookie(qvtest+'-'+qvsubtest+'-'+cname);
}

function qplSetCookie (cname, cvalue)
{
  setCookie(qvtest+'-'+qvsubtest+'-'+cname, cvalue, 1);
}


function qiSetValue (ii, vv, is) 
{
  qa[ii] = vv;
  document.getElementById("qpHeaderMark"+ii).style.display = 'block';
  qq[ii] = is == 1 ? 1 : 0;
  qplReset(ii); 
}

function qiClickWord (qnum, anum, atotal, repla)
{
  for (i = 1; i <= atotal; i++) {
    document.getElementById('qi'+qnum+'w'+i).className = 'qiWord' + (i == anum ? ' qiWordSel' : ''); }
  qiSetValue(qnum, anum, 1);
  if (repla == 1) {
    var span = '<span class="qiQM">';
    var t = document.getElementById('qiQ'+qnum).innerHTML;
    var ispan = t.indexOf(span);
    t = t.substring(0, ispan) + span + 
      document.getElementById('qi'+qnum+'w'+anum).innerHTML + '</span>' +
      t.substring(t.indexOf('</span>') + 7, t.length);
    document.getElementById('qiQ'+qnum).innerHTML = t; }
}

function qiClickButton (ii, nn, aa)
{
  for (i = 1; i <= aa; i++) {
    document.getElementById('qi'+ii+'b'+i).className = 'qiButton' + (i == nn ? ' qiButtonSel' : ''); }
  qiSetValue(ii, nn, 1);
}

function qiClickSelect (ii, nn, aa, ns)
{
  var r = '';
  var c = '';
  for (i = 1; i <= aa; i++) {
    c = document.getElementById('qi'+ii+'s'+i).className;
    if (c == 'qiSelect' && i == nn) {
      c = 'qiSelect qiSelectSel'; }
    else if (c != 'qiSelect' && i == nn) {
      c = 'qiSelect'; }
    if (c != 'qiSelect') { r = "" + r + i; }
    document.getElementById('qi'+ii+'s'+i).className = c; }
  qiSetValue(ii, r, r.length == ns ? 1 : 0);
}

function qiChangeText (ii, tt)
{
  var t = document.getElementById('qi'+ii+'t').value;
  t = qiPrepareText(t, tt);
  document.getElementById('qi'+ii+'t').value = t;
  qiSetValue(ii, t, t == '' ? 0 : 1);
}

function qiPrepareText (t, tt)
{
  if (tt == 'N') {
    t = t.replace(/[^\d\-]/g,''); }
  else if (tt == 'F') {
    t = t.replace(',','.');
    t = t.replace(/[^0-9\.\/\-]/g,''); }
  else {
    t = t.toUpperCase();
    if (tt == 'R') { t = t.replace(/[^А-Я ]/g,''); }
    else if (tt == 'E') { t = t.replace(/[^A-Z ]/g,''); }
  }
  return t;
}

/* ART */

var arts = {
'WK00': 'С любым эмоциональным состоянием способен справиться наш собственный мозг. Держать его в&nbsp;тонусе можно с&nbsp;помощью регулярных тренировок на <a href="https://wikium.ru/r/c47gzp4w">онлайн-тренажерах</a>.',
'WK99': 'С любым эмоциональным состоянием способен справиться наш собственный мозг. Держать его в&nbsp;тонусе можно с&nbsp;помощью регулярных тренировок на <a href="https://wikium.ru/r/b3fq80d3">онлайн-тренажерах</a>.',
'WK01': 'Хотите научиться управлять своими эмоциями, снизить уровень стресса и волнения, улучшить сон и концентрацию? Пройдите&nbsp;обучающий курс «<a href="https://wikium.ru/r/l55mjx1n">Детоксикация мозга</a>». Ноябрь – время «Черной пятницы», максимальные скидки!',
'WK02': 'Хотите научиться управлять своими эмоциями, выявлять скрытые эмоции других, эффективнее выстраивать коммуникацию? Пройдите обучающий курс «<a href="https://wikium.ru/r/l55mjx1n">Эмоциональный интеллект</a>». Ноябрь – время «Черной пятницы», максимальные скидки!',
'WK03': 'Хотите научиться «читать людей» по невербальным признакам, выявлять скрытые намерения и прогнозировать действия оппонента? Пройдите обучающий курс «<a href="https://wikium.ru/r/l55mjx1n">Профайлинг</a>». Ноябрь – время «Черной пятницы», максимальные скидки!',
'WB00': 'Как заставить мозг работать на полную? Узнайте на бесплатном вебинаре «<a href="https://web.wikium.ru/reg?gcao=15406&gcpc=20cea">Мозг – суперсила, которую вы не используете</a>»!',
'AL00': 'Бесплатно подобрать проверенного <a href="https://psyalter.ru?utm_source=dynamic&utm_medium=referral&utm_campaign=psytests">психолога</a>, который поможет разобраться в&nbsp;себе и&nbsp;улучшить свою жизнь, можно <a href="https://psyalter.ru?utm_source=dynamic&utm_medium=referral&utm_campaign=psytests">на&nbsp;сайте&nbsp;Alter</a>.',
'ZG00': 'Узнайте себя лучше и осознайте свою ценность с&nbsp;психологом <a href="http://click.zigmund.online/psytests">Zigmund.Online</a>. Чтобы было проще решиться, сервис&nbsp;предлагает первые два занятия по цене одного. Вы&nbsp;освоитесь и&nbsp;ощутите первые перемены.',
'GB00': 'Получите <a href="https://ad.admitad.com/g/59c4ntjgezdfa51501f565a37ca03d/?i=3">скидку до 90%</a> на обучение востребованной IT-профессии с&nbsp;гарантированным трудоустройством в&nbsp;онлайн-университете <a href="https://ad.admitad.com/g/k3dfvevwitdfa51501f565a37ca03d/?ulp=https%3A%2F%2Fmdmland.geekbrains.ru">Geekbrains</a> от Mail.ru Group. Учим программированию и дизайну с&nbsp;нулевого уровня.',
'GB01': 'Онлайн-университет <a href="https://ad.admitad.com/g/k3dfvevwitdfa51501f565a37ca03db4ead7469b/">Geekbrains</a> с&nbsp;гарантированным трудоустройством от Mail.ru Group. Учим программированию, маркетингу и дизайну с&nbsp;нулевого уровня. Пройдите <a href="https://ad.admitad.com/g/k3dfvevwitdfa51501f565a37ca03d/?ulp=https%3A%2F%2Fgeekbrains.ru%2Fdigitaltest">короткий тест</a> и получите высокооплачиваемую профессию.',
'GB02': 'Онлайн-университет <a href="https://ad.admitad.com/g/k3dfvevwitdfa51501f565a37ca03d581b5b26d3/">Geekbrains</a> c&nbsp;трудоустройством от Mail.ru Group: учим программированию с&nbsp;нулевого уровня. Получите доступ к&nbsp;<a href="https://ad.admitad.com/g/k3dfvevwitdfa51501f565a37ca03d581b5b26d3/">тысяче бесплатных вебинаров</a> для старта карьеры. Учитесь, развивайтесь, зарабатывайте!',
'LR00': 'Электронные книги от <a href="https://www.litres.ru/?lfrom=774122818">ЛитРес</a>. Большой каталог литературы по&nbsp;<a href="https://www.litres.ru/psihologiya-motivaciya/?lfrom=774122818">психологии</a> и не только. Акция специально для наших посетителей: книга <a href="https://www.litres.ru/?psytestslitr20&lfrom=774122818&utm_source=psytests.org&utm_medium=cpa&utm_campaign=psytestslitr20">в&nbsp;подарок</a> и&nbsp;<a href="https://www.litres.ru/?psytestslitr20&lfrom=774122818&utm_source=psytests.org&utm_medium=cpa&utm_campaign=psytestslitr20">20%&nbsp;скидка</a> на весь каталог.',
'LR99': 'Акция от <a href="https://www.litres.ru/?lfrom=774122818">ЛитРес</a> специально для наших посетителей: электронная книга <a href="https://www.litres.ru/?psytestslitr20&lfrom=774122818&utm_source=psytests.org&utm_medium=cpa&utm_campaign=psytestslitr20">в&nbsp;подарок</a> и&nbsp;<a href="https://www.litres.ru/?psytestslitr20&lfrom=774122818&utm_source=psytests.org&utm_medium=cpa&utm_campaign=psytestslitr20">20%&nbsp;скидка</a> на весь каталог.',
'FR00': 'Личные и онлайн, индивидуальные и семейные: <a href="https://ad.admitad.com/g/83f9bc8ce1dfa51501f51bf6bd7bda/?ulp=https%3A%2F%2Fwww.frendi.ru%2Fsearch%3Fq%3D%25D0%25BA%25D0%25BE%25D0%25BD%25D1%2581%25D1%2583%25D0%25BB%25D1%258C%25D1%2582%25D0%25B0%25D1%2586%25D0%25B8%25D1%258F%2B%25D0%25BF%25D1%2581%25D0%25B8%25D1%2585%25D0%25BE%25D0%25BB%25D0%25BE%25D0%25B3%25D0%25B0">консультации психологов</a> со скидкой до <b>90%</b> и&nbsp;другие выгодные предложения на купонном сервисе <a href="https://ad.admitad.com/g/83f9bc8ce1dfa51501f51bf6bd7bda/">Frendi</a> (ex-Groupon).',
'PN00': 'Все детские <a href="https://ponominalu.ru/category/elki?promote=rockgig">Новогодние Ёлки</a> сезона 2020/2021 в Москве: электронные билеты на <a href="https://ponominalu.ru/category/elki?promote=rockgig">Ponominalu</a> без наценок и сервисного сбора.</a>',
};

var artscolor = { 'WK': '#5F3AA4', 'WB': '#5F3AA4', 'AL': '#2BC88B', 'ZG': '#0094FF', 'LR': '#FF4C00', 'FR': '#288C28', 'GB': '#006', 'PN': '#FB2532', };
var artsreplace = { 'WK00res': 'WB00', 'AL00res': 'ZG00', 'LR00res': 'GB00', };
var artsizes = { 'WK00':710, 'WK02':980, 'WK03':980, 'ZG00':850, 'GB00':820, 'GB01':890, 'GB02':870, 'LR00':710, 'FR00':710, };

function getart (id)
{
  
  if (id <= 10) { return 'WK00'; }
  if (id <= 20) { return 'AL00'; }
/*  if (id <= 25) { return 'PN00'; } */
  if (id <= 30) { return 'LR00'; }
  if (id <= 40) { return 'FR00'; }
  if (id <= 50) { return 'ZG00'; }
  if (id <= 70) {
    if (id <= 57) { return 'GB00'; }
    if (id <= 64) { return 'GB01'; } 
    if (id <= 70) { return 'GB02'; } }
  if (id <= 85) {
    if (id <= 75) { return 'WK01'; }
    if (id <= 80) { return 'WK02'; }
    if (id <= 85) { return 'WK03'; } }
  if (id <= 99) { return 'WB00'; }
  return 'WK00';
}

function divart (aid) 
{
  var art = arts[aid];
  var arc = artscolor[aid.substring(0,2)];
  if (arc != undefined && arc != "") { arc = 'style="color:'+arc+';" '; } else { arc = ""; }
  art = art.replace(/<a /g, '<a target="_blank" rel="nofollow" '+arc);
  var ars = artsizes[aid];
  if (ars != undefined && ars != "") { ars = ' style="max-width:'+ars+'px;"'; } else { ars = ""; }
  return '<div class="cRR"'+ars+'><p>'+art+'</p></div>';
}

function rotart (div) 
{
  var aid = getart(getRandomInt(0,99));
  var aidr = artsreplace[aid+qpgm];
  if (aidr != undefined && aidr != "") { aid = aidr; }
  var block = divart(aid);
  if (div != undefined && div != "") {
    document.getElementById(div).innerHTML = block;
    qprt = div;
    return; }
  return block;
}

function rota() { return rotart(); }
