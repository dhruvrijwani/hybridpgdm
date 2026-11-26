<?php
/**
 * 11 How you'll learn: one continuous learning path rather than six cards.
 * The section holds still while scrolling draws a purple-to-green path through
 * ONLINE → CAMPUS → INDUSTRY → PROJECTS → PEERS → UPSKILL; the learning scene on the
 * right changes with it (photographs dissolve into the page, no image boxes),
 * with small interface fragments for each step. Without JavaScript, or for visitors
 * who ask for less motion, it is a plain list.
 * @var array $s
 */
$frags = [
    // two interface fragments per scene; the words are lifted from that step's description in the content doc
    ['<span class="frag__live">Live</span><b>Online interactive lectures</b><span class="frag__av"><i></i><i></i><i></i><i></i></span>',
     '<b>WeTube video lectures</b><span class="frag__bar"><i style="width:64%"></i></span>'],
    ['<b>Personal Contact Programs</b><span class="frag__k">Direct faculty interaction</span>',
     '<b>Collaborative sessions</b>'],
    ['<b>Live industry visits</b><span class="frag__bar"><i style="width:78%"></i></span>',
     '<b>Newswire services</b>'],
    ['<b>Exams, viva and project submissions</b><span class="frag__k">across two years</span>',
     '<b class="frag__big">4-year</b><span class="frag__k">window to complete</span>'],
    ['<span class="frag__av"><i></i><i></i><i></i><i></i></span><b>Peer-to-Peer Learning</b>',
     '<b>Diverse perspectives and experiences</b>'],
    ['<span class="frag__k">Business simulations</span><span class="frag__bars"><i style="height:30%"></i><i style="height:48%"></i><i style="height:42%"></i><i style="height:66%"></i><i style="height:80%"></i><i style="height:100%"></i></span>',
     '<b>Movie-based case studies</b><span class="frag__k">experiential workshops</span>'],
];
$n = count($s['steps']);
?>
<section class="learn" id="learn" aria-labelledby="learn-title" style="--steps:<?= $n ?>">
  <div class="learn__pin">
    <div class="wrap learn__grid">

      <header class="learn__head">
        <p class="kicker"><?= e($s['kicker']) ?></p>
        <h2 class="h2 h2--xl" id="learn-title"><?= e($s['title']) ?></h2>
        <p class="lead learn__lead"><?= e($s['lead']) ?></p>
      </header>

      <div class="learn__env" aria-hidden="true">
        <div class="env__aura"></div>
        <img class="env__ring" src="<?= asset('img/learn-ring.svg') ?>" alt="" width="600" height="500">
        <?php foreach ($s['steps'] as $i => $st): ?>
          <div class="scene<?= $i === 0 ? ' is-on' : '' ?>">
            <img class="scene__img" src="<?= asset('img/' . $st['img']) ?>" alt="" loading="<?= $i === 0 ? 'eager' : 'lazy' ?>" width="1100" height="800">
            <div class="frag frag--a"><?= $frags[$i][0] ?? '' ?></div>
            <div class="frag frag--b"><?= $frags[$i][1] ?? '' ?></div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="learn__now">
        <?php foreach ($s['steps'] as $i => $st): ?>
          <article class="now<?= $i === 0 ? ' is-on' : '' ?>" data-step="<?= $i ?>">
            <div class="now__meta"><span class="now__n"><?= nn($i + 1) ?></span><span class="now__of">/ <?= nn($n) ?></span><span class="now__tag"><?= e($st['tag']) ?></span></div>
            <h3><?= e($st['title']) ?></h3>
            <p><?= e($st['text']) ?></p>
          </article>
        <?php endforeach; ?>
        <a class="btn btn--green learn__cta" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
      </div>

      <nav class="lpath" aria-label="Learning path">
        <svg class="lpath__svg" aria-hidden="true" focusable="false">
          <defs>
            <linearGradient id="lp-grad" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0" stop-color="#583972"/><stop offset=".5" stop-color="#8857BD"/><stop offset="1" stop-color="#389530"/>
            </linearGradient>
          </defs>
          <path class="lpath__base"/>
          <path class="lpath__prog" stroke="url(#lp-grad)"/>
        </svg>
        <span class="lpath__dot" aria-hidden="true"></span>
        <ol class="lpath__nodes">
          <?php foreach ($s['steps'] as $i => $st): ?>
            <li class="lnode lnode--<?= $i % 2 ? 'down' : 'up' ?><?= $i === 0 ? ' is-on' : '' ?>">
              <button type="button" aria-label="Step <?= $i + 1 ?>: <?= e($st['title']) ?>"<?= $i === 0 ? ' aria-current="step"' : '' ?>>
                <span class="lnode__c"><?= nn($i + 1) ?></span><span class="lnode__t"><?= e($st['tag']) ?></span>
              </button>
            </li>
          <?php endforeach; ?>
        </ol>
      </nav>

    </div>
  </div>
</section>
