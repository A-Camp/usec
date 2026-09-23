<?php 
$top = "..";
$title = "AsiaUSEC 2020";
include("$top/includes/header.inc"); 
?>
<style type="text/css">
 <!--/*--><![CDATA[/*><!--*/
  .title  { text-align: center;
             margin-bottom: .2em; }
  .subtitle { text-align: center;
              font-size: medium;
              font-weight: bold;
              margin-top:0; }
  .todo   { font-family: monospace; color: red; }
  .done   { font-family: monospace; color: green; }
  .priority { font-family: monospace; color: orange; }
  .tag    { background-color: #eee; font-family: monospace;
            padding: 2px; font-size: 80%; font-weight: normal; }
  .timestamp { color: #bebebe; }
  .timestamp-kwd { color: #5f9ea0; }
  .org-right  { margin-left: auto; margin-right: 0px;  text-align: right; }
  .org-left   { margin-left: 0px;  margin-right: auto; text-align: left; }
  .org-center { margin-left: auto; margin-right: auto; text-align: center; }
  .underline { text-decoration: underline; }
  #postamble p, #preamble p { font-size: 90%; margin: .2em; }
  p.verse { margin-left: 3%; }
  pre {
    border: 1px solid #ccc;
    box-shadow: 3px 3px 3px #eee;
    padding: 8pt;
    font-family: monospace;
    overflow: auto;
    margin: 1.2em;
  }
  pre.src {
    position: relative;
    overflow: visible;
    padding-top: 1.2em;
  }
  pre.src:before {
    display: none;
    position: absolute;
    background-color: white;
    top: -10px;
    right: 10px;
    padding: 3px;
    border: 1px solid black;
  }
  pre.src:hover:before { display: inline;}
  /* Languages per Org manual */
  pre.src-asymptote:before { content: 'Asymptote'; }
  pre.src-awk:before { content: 'Awk'; }
  pre.src-C:before { content: 'C'; }
  /* pre.src-C++ doesn't work in CSS */
  pre.src-clojure:before { content: 'Clojure'; }
  pre.src-css:before { content: 'CSS'; }
  pre.src-D:before { content: 'D'; }
  pre.src-ditaa:before { content: 'ditaa'; }
  pre.src-dot:before { content: 'Graphviz'; }
  pre.src-calc:before { content: 'Emacs Calc'; }
  pre.src-emacs-lisp:before { content: 'Emacs Lisp'; }
  pre.src-fortran:before { content: 'Fortran'; }
  pre.src-gnuplot:before { content: 'gnuplot'; }
  pre.src-haskell:before { content: 'Haskell'; }
  pre.src-hledger:before { content: 'hledger'; }
  pre.src-java:before { content: 'Java'; }
  pre.src-js:before { content: 'Javascript'; }
  pre.src-latex:before { content: 'LaTeX'; }
  pre.src-ledger:before { content: 'Ledger'; }
  pre.src-lisp:before { content: 'Lisp'; }
  pre.src-lilypond:before { content: 'Lilypond'; }
  pre.src-lua:before { content: 'Lua'; }
  pre.src-matlab:before { content: 'MATLAB'; }
  pre.src-mscgen:before { content: 'Mscgen'; }
  pre.src-ocaml:before { content: 'Objective Caml'; }
  pre.src-octave:before { content: 'Octave'; }
  pre.src-org:before { content: 'Org mode'; }
  pre.src-oz:before { content: 'OZ'; }
  pre.src-plantuml:before { content: 'Plantuml'; }
  pre.src-processing:before { content: 'Processing.js'; }
  pre.src-python:before { content: 'Python'; }
  pre.src-R:before { content: 'R'; }
  pre.src-ruby:before { content: 'Ruby'; }
  pre.src-sass:before { content: 'Sass'; }
  pre.src-scheme:before { content: 'Scheme'; }
  pre.src-screen:before { content: 'Gnu Screen'; }
  pre.src-sed:before { content: 'Sed'; }
  pre.src-sh:before { content: 'shell'; }
  pre.src-sql:before { content: 'SQL'; }
  pre.src-sqlite:before { content: 'SQLite'; }
  /* additional languages in org.el's org-babel-load-languages alist */
  pre.src-forth:before { content: 'Forth'; }
  pre.src-io:before { content: 'IO'; }
  pre.src-J:before { content: 'J'; }
  pre.src-makefile:before { content: 'Makefile'; }
  pre.src-maxima:before { content: 'Maxima'; }
  pre.src-perl:before { content: 'Perl'; }
  pre.src-picolisp:before { content: 'Pico Lisp'; }
  pre.src-scala:before { content: 'Scala'; }
  pre.src-shell:before { content: 'Shell Script'; }
  pre.src-ebnf2ps:before { content: 'ebfn2ps'; }
  /* additional language identifiers per "defun org-babel-execute"
       in ob-*.el */
  pre.src-cpp:before  { content: 'C++'; }
  pre.src-abc:before  { content: 'ABC'; }
  pre.src-coq:before  { content: 'Coq'; }
  pre.src-groovy:before  { content: 'Groovy'; }
  /* additional language identifiers from org-babel-shell-names in
     ob-shell.el: ob-shell is the only babel language using a lambda to put
     the execution function name together. */
  pre.src-bash:before  { content: 'bash'; }
  pre.src-csh:before  { content: 'csh'; }
  pre.src-ash:before  { content: 'ash'; }
  pre.src-dash:before  { content: 'dash'; }
  pre.src-ksh:before  { content: 'ksh'; }
  pre.src-mksh:before  { content: 'mksh'; }
  pre.src-posh:before  { content: 'posh'; }
  /* Additional Emacs modes also supported by the LaTeX listings package */
  pre.src-ada:before { content: 'Ada'; }
  pre.src-asm:before { content: 'Assembler'; }
  pre.src-caml:before { content: 'Caml'; }
  pre.src-delphi:before { content: 'Delphi'; }
  pre.src-html:before { content: 'HTML'; }
  pre.src-idl:before { content: 'IDL'; }
  pre.src-mercury:before { content: 'Mercury'; }
  pre.src-metapost:before { content: 'MetaPost'; }
  pre.src-modula-2:before { content: 'Modula-2'; }
  pre.src-pascal:before { content: 'Pascal'; }
  pre.src-ps:before { content: 'PostScript'; }
  pre.src-prolog:before { content: 'Prolog'; }
  pre.src-simula:before { content: 'Simula'; }
  pre.src-tcl:before { content: 'tcl'; }
  pre.src-tex:before { content: 'TeX'; }
  pre.src-plain-tex:before { content: 'Plain TeX'; }
  pre.src-verilog:before { content: 'Verilog'; }
  pre.src-vhdl:before { content: 'VHDL'; }
  pre.src-xml:before { content: 'XML'; }
  pre.src-nxml:before { content: 'XML'; }
  /* add a generic configuration mode; LaTeX export needs an additional
     (add-to-list 'org-latex-listings-langs '(conf " ")) in .emacs */
  pre.src-conf:before { content: 'Configuration File'; }

  table { border-collapse:collapse; }
  caption.t-above { caption-side: top; }
  caption.t-bottom { caption-side: bottom; }
  td, th { vertical-align:top;  }
  th.org-right  { text-align: center;  }
  th.org-left   { text-align: center;   }
  th.org-center { text-align: center; }
  td.org-right  { text-align: right;  }
  td.org-left   { text-align: left;   }
  td.org-center { text-align: center; }
  dt { font-weight: bold; }
  .footpara { display: inline; }
  .footdef  { margin-bottom: 1em; }
  .figure { padding: 1em; }
  .figure p { text-align: center; }
  .inlinetask {
    padding: 10px;
    border: 2px solid gray;
    margin: 10px;
    background: #ffffcc;
  }
  #org-div-home-and-up
   { text-align: right; font-size: 70%; white-space: nowrap; }
  textarea { overflow-x: auto; }
  .linenr { font-size: smaller }
  .code-highlighted { background-color: #ffff00; }
  .org-info-js_info-navigation { border-style: none; }
  #org-info-js_console-label
    { font-size: 10px; font-weight: bold; white-space: nowrap; }
  .org-info-js_search-highlight
    { background-color: #ffff00; color: #000000; font-weight: bold; }
  .org-svg { width: 90%; }
  /*]]>*/-->
</style>
<script type="text/javascript">
/*
@licstart  The following is the entire license notice for the
JavaScript code in this tag.

Copyright (C) 2012-2019 Free Software Foundation, Inc.

The JavaScript code in this tag is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this tag.
*/
<!--/*--><![CDATA[/*><!--*/
 function CodeHighlightOn(elem, id)
 {
   var target = document.getElementById(id);
   if(null != target) {
     elem.cacheClassElem = elem.className;
     elem.cacheClassTarget = target.className;
     target.className = "code-highlighted";
     elem.className   = "code-highlighted";
   }
 }
 function CodeHighlightOff(elem, id)
 {
   var target = document.getElementById(id);
   if(elem.cacheClassElem)
     elem.className = elem.cacheClassElem;
   if(elem.cacheClassTarget)
     target.className = elem.cacheClassTarget;
 }
/*]]>*///-->
</script>
</head>
<body>
<div id="content">
<div id="outline-container-org2f44099" class="outline-2">
<h2 id="org2f44099">Call for Papers: Workshop on AsiaUSEC 2020</h2>
<div class="outline-text-2" id="text-1">
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">


<colgroup>
<col  class="org-left" />

<col  class="org-left" />
</colgroup>
<thead>
<tr>
<th scope="col" class="org-left">Submission link</th>
<th scope="col" class="org-left"><a href="https://easychair.org/conferences/?conf=asiausec20">https://easychair.org/conferences/?conf=asiausec20</a></th>
</tr>
</thead>
<tbody>
<tr>
<td class="org-left">Early submission date</td>
<td class="org-left">November 30, 2019</td>
</tr>

<tr>
<td class="org-left">Notification for early submissions (11/30)</td>
<td class="org-left">December 18, 2019</td>
</tr>

<tr>
<td class="org-left">Submission deadline</td>
<td class="org-left">December 19, 2019</td>
</tr>

<tr>
<td class="org-left">Submissions close</td>
<td class="org-left">December 19, 2019</td>
</tr>

<tr>
<td class="org-left">Notification for submissions (&gt; 11/30) not later than&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td class="org-left">January 10, 2020</td>
</tr>
</tbody>
</table>


<p>
Ensuring effective security and privacy in real-world technology requires considering not only technical but also human aspects, as well as the complex way in which these combine. technical as well as human aspects. Enabling people to manage privacy and security necessitates giving due consideration to the users and the larger operating context within which technology is embedded.
</p>

<p>
It is the aim of USEC to contribute to an increase of the scientific quality of research in human factors in security and privacy. To this end, we encourage replication studies to validate previous research findings. Papers in these categories should be clearly marked as such and will not be judged against regular submissions on novelty. Rather, they will be judged based on scientific quality and value to the community. We also encourage reports of faded experiments, since their publication will serve to highlight the lessons learned and prevent others falling into the same traps.
</p>

<p>
We invite submissions on all aspects of human factors including adoption and usability in the context of security and privacy.   All USEC events aim to bring together researchers already engaged in this interdisciplinary effort with other computer science researchers in areas such as visualization, artificial intelligence, machine learning, and theoretical computer science as well as researchers from other domains such as economics and psychology. We particularly encourage collaborative research from authors in multiple disciplines.
</p>
</div>

<div id="outline-container-org2e8fb87" class="outline-3">
<h3 id="org2e8fb87">Submission Guidelines</h3>
<div class="outline-text-3" id="text-1-1">
<p>
All submissions must be original work; authors must dearly document any overlap with previously published or simultaneously submitted papers from any of the authors. We are looking for submissions of 5 to 10 pages, excluding references and supplementary materials using the LNCS format.
</p>

<p>
We encourage authors to submit papers of appropriate length for the research contribution. If your research contributions only requires 5-7 pages, please only submit 5-7 pages (plus references). Shorter papers with be reviewed like any other paper and not penalized. Papers shorter than 5 pages or longer than 10 pages {excluding references) will not be considered. Submitting supplementary material that adds depth to the contribution and/or contributes to the submission's replicability is strongly encouraged.   Reviewing will be double blind.  
</p>
</div>
</div>

<div id="outline-container-orgc0d50a9" class="outline-3">
<h3 id="orgc0d50a9">List of Topics</h3>
<div class="outline-text-3" id="text-1-2">
<ul class="org-ul">
<li>Usable security/privacy evaluation of existing and/or proposed solutions.</li>
<li>Methods and measures to improve the practice of usability analyses</li>
<li>Psychology of security empirical or theoretical continuations</li>
<li>Human factors related to the deployment of the Internet of Things (IoT)</li>
<li>Mental models that contribute to, complicate, or inform security and privacy design and deployment.</li>
<li>Lessons learned from designing, deploying, managing, or evaluating security and privacy technologies.</li>
<li>Design foundations of usable security and privacy including usable security and privacy patterns.</li>
<li>Ethical, psychological, sociological and economic aspects of security and privacy technologies.</li>
<li>Usable security and privacy research that targets information professionals (e.g. administrators or developers).</li>
<li>Reports on replications of previously published studies and experiments.</li>
<li>Reports on failed usable security studies or experiments, with the focus on the lessons learned from such experiments.</li>
<li>Anthropological approaches to security and prrvacy</li>
<li>Experiments including diverse populations or populations not traditionally included m usable security and privacy</li>
<li>Psychology of deceit or fraud empirical or theoretical continuations</li>
<li>Studies of acceptability, avoidance, or perspectives of surveillance</li>
<li>Modeling of security behaviors including patching</li>
</ul>
</div>
</div>
<div id="outline-container-org397e66e" class="outline-3">
<h3 id="org397e66e">Committees</h3>
<div class="outline-text-3" id="text-1-3">
</div>
<div id="outline-container-orgcb47672" class="outline-4">
<h4 id="orgcb47672">Program Chairs</h4>
<div class="outline-text-4" id="text-1-3-1">
<p>
Alana Maurushat, Western Sydney University </br>
L Jean Camp, Indiana University
</p>
</div>
</div>

<div id="outline-container-org4d461e6" class="outline-4">
<h4 id="org4d461e6">Program Committee</h4>
<div class="outline-text-4" id="text-1-3-2">
<ul class="org-ul">
<li>Julian Jang-Jaccard, Massey University, NZ</li>
<li>Vaibhav Garg, Comcast, US</li>
<li>Julian M. Williams, Durham University, UK</li>
<li>Paul A. Watters, LaTrobe University, AU</li>
<li>Marthie Grobler, CSIRO, AU</li>
<li>Heather Crawford, Florida Tech, US</li>
<li>Nicholas Weaver, ISCI UC Berkeley, US</li>
<li>Alisa Frik, ISCI UC Berkeley, US</li>
<li>Shrirang Mare, U Washington &amp; IU, US</li>
<li>Pamela Briggs, Northumbria University, UK</li>
<li>Karen Renaud,  Rhodes University, SA and University of Glasgow, UK</li>
<li>Julie M. Haney, NIST, US</li>
<li>Ada Lerner, Wellesley College, US</li>
<li>Matt Bishop, UC David, US</li>
<li>Patrick Traynor, University of Florida, US</li>
<li>Andrew A. Adams Media University, Japan</li>
<li>Tim Kelley, US Navy, US</li>
<li>Peter Gutmann, University of Aukland, NZ</li>
<li>Sanitary Das, American Express, US</li>
<li>Sven Dietrich, City University of New York</li>
</ul>
</div>
</div>
</div>
<div id="outline-container-org1804923" class="outline-3">
<h3 id="org1804923">Publication</h3>
<div class="outline-text-3" id="text-1-4">
<p>
AsiaUSEC20 proceedings will be published either as part of the FC proceedings under the IFCA copyright license or we will continue to publish with ISOC. This will be a topic of discussion at the workshop.
</p>
</div>
</div>

<div id="outline-container-org9a0a05b" class="outline-3">
<h3 id="org9a0a05b">Venue</h3>
<div class="outline-text-3" id="text-1-5">
<div class="org-src-container">
<pre class="src src-text">The conference will be held in conjunctions with FC. 
February 10&#8211;14, 2020
Shangri-La Tanjung Aru Resort &amp; Spa
Kota Kinabalu, Sabah, Malaysia
</pre>
</div>
</div>
</div>

<div id="outline-container-org8650233" class="outline-3">
<h3 id="org8650233">Contact</h3>
<div class="outline-text-3" id="text-1-6">
<p>
All questions about submissions should be emailed to <a href='mai&#108;&#116;o&#58;ch&#37;61irs&#64;l%&#54;&#65;%6&#53;a%&#54;&#69;&#46;&#37;63om'>c&#104;&#97;&#105;rs&#64;ljean&#46;com</a>
</p>
</div>
</div>
</div>
</div>
    <?php include("$top/includes/footer.inc"); ?>
