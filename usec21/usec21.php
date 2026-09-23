<?php 
$top = "../..";
$title = "USEC 2021";
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
<h2 style="font-size: 28px">USEC 2021</h2>
<h3 style="font-size: 14px">Workshop on Usable Security and Privacy (USEC)<br/>
A virtual event!<br/>
Auckland, New Zealand | Friday May 7 2021 (GMT Thursday May 6)</h3>
<div class="outline-text-2" id="text-1">
<h3>Introduction</h3>
<p>
The Workshop on Usable Security (USEC) serves as an Asian forum for research and discussion in the area of human factors in security and privacy.
<br/><br/>
It is the aim of USEC to contribute to an increase of the scientific quality of research in human factors in security and privacy. To this end, we encourage replication studies to validate previous research findings. Papers in these categories should be clearly marked as such and will not be judged against regular submissions on novelty. Rather, they will be judged based on scientific quality and value to the community. We also encourage reports of faded experiments, since their publication will serve to highlight the lessons learned and prevent others falling into the same traps.
</p>
<p>
  <b>REGISTRATION: Please sign up for the registration using <a href="https://forms.gle/aBUAhas7pNuSTAUj9">this form</a> for us to coordinate attendance at the workshop.</b> We will only provide a link to the virtual workshop to only those who have successfully registered.
</p>
<h3>Sponsors</h3>
<table>
<tr>
<td>
<img src="../images/abt_7354753869463956505NTE1MDA5.jpg" width="280px" />
</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>
<img src="../images/isoc-logo-1280x642.jpg" width="300px"/>
</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>
<img src="../images/indiana-university-bloomington.png" width="300px"/>
</td>
</tr>
</table>

<h3>Keynote</h3>
<table class="usec">
<tr>
<td width="20%" align="left"><a href="https://alanacybersecurity.com/about/"><img src="../images/alana_bio_photo.png" width="200px" /></a></td>
<td width="80%" align="right"><p><b>Alana Maurushat</b> is Professor of Cybersecurity and Behaviour at Western Sydney University and Director of the Cyber Incident Response Centre where she holds a joint position in the School of Computers, Data and Mathematical Sciences, and in the School of Social Sciences. She is currently researching on payment diversion fraud and ransomware, cyber risk management,  neuro-morphic approaches to extreme edge computing, tracking money-laundering through bitcoin blenders, distributed extreme edge computing for micro-clustered satellites, and ethical hacking.
</p></td>
</tr>

<tr>
  <td colspan="2">
    &nbsp;&nbsp;&nbsp;
  </td>
</tr>
<tr>
  <td colspan="2">
    <i><b>Usable Security Lessons from Covid  - why Johnny can't secure small business</b></i>
  </td>
</tr>
<tr>
  <td colspan="2">
  <i>
The rate and effects of the Covid virus were not the only thing to spread in 2020 and 2021; we also witnessed an exponential increase in cybersecurity incidents.  During lockdown industry , government and people had to improvise literally overnight, and continue to evolve and, in some instances, re-organise in order to deal with cybersecurity incidents. We accidentally ended up conducting research on cybersecurity and small business during Covid.  Our accidental experiment motivated us to expand the work into something more formal.  We examined the cybersecurity principles in NIST and the ASD8, mapped them with existing training materials online, and evaluated if a small business could read and watch the training materials, then implement just one recommendation from the NIST and ASD8.  Not a single small business could implement or understand any of the materials enough to implement even one recommendation.  Following the results, we started to explore in detail the existing literature, videos and other dedicated to cybersecurity training for small business, NIST and ASD8.  What did we find?  That none of these materials or the principles are usable for small business.  Moreover, many of the recommendations found in ASD8 and NIST are not affordable for small business.    This presentation explores ways on how we as a community can improve the usability of cybersecurity and privacy for small business.
</i>
  </td>
</tr>
</table>

<h3>Program</h3>
<div style="text-align:right;">
Timezone: NZST (GMT+12)<br/>
Note that each presentation is of a 20 min length (15min presentation + 5min Q&A)
</div>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides" width="100%">
<colgroup>
<col  class="org-left" />

<col  class="org-left" />
</colgroup>
<thead>
<tr>
<th scope="col" class="org-left" width="80px">Schedule</th>
<th scope="col" class="org-left" width="580px">Details</th>
</tr>
</thead>
<tbody>
<tr>
<td class="org-left">7:00 - 7:15</td>
<td class="org-left"><b>Opening</b></td>
</tr>

<tr>
<td class="org-left">7:15 – 8:15</td>
<td class="org-left"><b>Evaluation and Assessments of Technology, Heuristics, and Perception</b> (Session Chair: Marthie Grobler)<br/>
<i><a href="papers/usec2021_Harry_Halpin.pdf">Holistic Privacy and Usability of a Cryptocurrency Wallet</a></i> - Harry Halpin. (20 min)
<br/>
<i><a href="papers/usec2021_Shakthidhar_Reddy_Gopavaram.pdf">Cross-National Study on Phishing Resilience</a></i> - Shakthidhar Gopavaram, Jayati Dev, Marthie Grobler, Donginn Kim, Sanchari Das and L. Jean Camp. (20 min)
<br/>
<i><a href="papers/usec2021_Simon_Parkin.pdf">Scenario-Driven Assessment of Cyber Risk Perception at the Security Executive Level</a></i> - Simon Parkin, Kristen Kuhn and Siraj Shaikh. (20 min)
<br/>
</tr>
<tr>
<td class="org-left">8:15 – 8:30</td>
<td class="org-left"><b>Break</b></td>
</tr>

<tr>
<td class="org-left">8:30 – 9:30</td>
<td class="org-left"><b>Social Media, Phishing, and Mobile Platform</b> (Session Chair : Simon Parkin)<br/>
<i><a href="papers/usec2021_Shujaat_Mirza.pdf">My Past Dictates my Present: Relevance, Exposure, and Influence of Longitudinal Data on Facebook</a></i> - Muhammad Shujaat Mirza and Christina Pöpper. (20 min)
<br/>
<i><a href="papers/usec2021_Alain_Giboin.pdf">Evaluating Personal Data Control In Mobile Applications Using Heuristics</a></i> - Karima Boudaoud, Patrice Pena, Alain Giboin, Yoann Bertrand and Fabien Gandon. (20 min)
<br/>
<i><a href="papers/usec2021_Abdulmajeed_Alqhatani.pdf">Exploring The Design Space of Sharing and Privacy Mechanisms in Wearable Fitness Platforms</a></i> - Abdulmajeed Alqhatani and Heather Lipford. (20 min)<br/>
</tr>

<tr>
<td class="org-left">9:30 – 9:45</td>
<td class="org-left"><b>Break</b></td>
</tr>

<tr>
<td class="org-left">9:45 – 10:45</td>
<td class="org-left"><b>Location Privacy, Quantum and Covid-19 contact Tracing</b> (Session Chair: Karima Boudaoud)<br/>
<i><a href="papers/usec2021_Michael_Lutaaya.pdf">"Lose Your Phone, Lose Your Identity": Exploring Users’ Perceptions and Expectations of a Digital Identity Service</a></i> - Michael Lutaaya, Hala Assal, Khadija Baig, Sana Maqsood and Sonia Chiasson. (20 min)<br/>
<i><a href="papers/usec2021_Ritajit_Majumdar.pdf">SOK: An Evaluation of Quantum Authentication Through Systematic Literature Review</a></i> - Ritajit Majumdar and Sanchari Das. (20 min)<br/>
<i><a href="papers/usec2021_Callie_Monroe.pdf">Location Data and COVID-19 Contact Tracing: How Data Privacy Regulations and Cell Service Providers Work In Tandem</a></i> - Callie Monroe, Faiza Tazi and Sanchari Das. (20 min)<br/>
</tr>
<tr>
<td class="org-left">10:45 – 11:00</td>
<td class="org-left"><b>Break</b></td>
</tr>
<tr>
<td class="org-left">11:00 – 11:40</td>
<td class="org-left"><b>Security Practice and Trust</b> (Session Chair: Sana Maqsood)<br/>
<i><a href="papers/usec2021_Lavanya_Sajwan.pdf">Why Do Programmers Do What They Do? A Theory of Influences on Security Practices</a></i> - Lavanya Sajwan, James Noble, Craig Anslow and Robert Biddle. (20 min)<br/>
<i><a href="papers/usec2021_Alexander_Krumpholz.pdf">Raising Trust In The Food Supply Chain</a></i> - Alexander Krumpholz, Marthie Grobler, Raj Gaire, Claire Mason and Shanae Burns. (20 min)<br/>
</tr>

<tr>
<td class="org-left">11:40 – 12:00</td>
<td class="org-left"><b>Break</b></td>
</tr>

<tr>
<td class="org-left">12:00 – 13:00</td>
<td class="org-left"><b>Keynote&nbsp;&nbsp;&nbsp; (Alana Maurushat)</b> (Session Chair: Julian Jang-Jaccard)</td>
</tr>


<tr>
<td class="org-left">13:00 – </td>
<td class="org-left"><b>Closing</b><br/>
</tr>
</tbody>
</table>

<!--
  <h3>Topics</h3>
<p>
  We invite submissions from academia, government, and industry presenting novel research on all aspects of information security and privacy including, but not limited to, the following area;
</p>

<ul>
  <li>innovative security or privacy functionality and design</li>
  <li>new applications of existing models or technology</li>
  <li>field studies of security or privacy technology</li>
  <li>usability evaluations of new or existing security or privacy features</li>
  <li>security testing of new or existing usability features</li>
  <li>longitudinal studies of deployed security or privacy features</li>
  <li>studies of administrators or developers and support for security and privacy</li>
  <li>psychological, sociological, and economic aspects of security and privacy</li>
  <li>the impact of organizational policy or procurement decisions</li>
  <li>methodologies for usable security and privacy research</li>
  <li>lessons learned from the deployment and use of usable privacy and security features</li>
  <li>reports of replicating previously published studies and experiments</li>
  <li>reports of failed usable privacy/security studies or experiments, with the focus on the lessons learned from such experience</li>
</ul>

<h3>Important Dates</h3>
<p>
  Submission Deadline: Monday, <strike>1 Feb 2021</strike> <b><font color="red">22 Feb 2021</font></b> (Extended. Anywhere on Earth)<br/> 
  Notification: Sunday, 21 March 2021<br/>
  Camera ready: <strike>Wednesday, 31 March 2021</strike> <b><font color="red">Monday, 12 April 2021</font></b><br/>
</p>

<h3>Submission Instructions</h3>
<p>
  Papers should be written in English. Full papers must be no more than 10 pages total (including references and appendices). Papers must be formatted for US letter size (not A4) paper in a two-column layout, with columns no more than 9.25 inch high and 3.5 inch wide. The text must be in Times font, 10-point or larger, with 11-point or larger line spacing. Authors are encouraged to use the <a href="https://www.computer.org/digital-library/magazines/it/call-for-papers-special-issue-on-software-correctness-technology">IEEE conference proceedings templates</a>.
</p>
<p>
  We also invite short papers of up to 6 pages covering work in progress, short communications, as well as novel or provocative ideas. Short papers will be selected based on their potential to spark interesting discussions during the workshop.
</p>
<p>
  Papers that contribute to the research community’s knowledge base such as studies replicating previous results can be submitted as full or short papers.
  Submissions do not have to be anonymized for review. Please clearly refer to your own related work.
</p>
<h3>Submission Site</h3> 
<p>
  <a href="https://easychair.org/my/conference?conf=usec2021">https://easychair.org/my/conference?conf=usec2021</a><br/>
  Please read how to make a new submission to EasyChair here: <a href="https://easychair.org/help/how_to_submit">https://easychair.org/help/how_to_submit</a>
</p>

<h3>Publications</h3>
<p>
  All accepted papers will be published online by Internet Society with DoIs. There is also an opportunity to expand by ~30% after the workshop and submit to Frontiers.
</p>
<h3>Registration</h3>
<p>
  With the generous donations from our sponsors (Internet Society, Indiana University (US), and Massey University (NZ)), <b><font color="red">the registration will be free for all accepted papers this year</font></b>
</p>
-->

<div id="outline-container-org397e66e" class="outline-3">
<h3 id="org397e66e">Committees</h3>
<div class="outline-text-3" id="text-1-3">
</div>
<div id="outline-container-orgcb47672" class="outline-4">
<h4 id="orgcb47672">General Chairs</h4>
<div class="outline-text-4" id="text-1-3-1">
<p>
Julian Jang-Jaccard, Massey University<br/>
L Jean Camp, Indiana University Bloomington
</p>
</div>
</div>
<div id="outline-container-org4d461e6" class="outline-4">
<h4 id="org4d461e6">Program Committee</h4>
<div class="outline-text-4" id="text-1-3-2">
<ul class="org-ul">
  <li>Christian Probst, Unitec Institute of Technology, NZ</li>
  <li>Dan DongSeong Kim, University of Queensland, AU</li>
  <li>Dongxi Liu, Data61 / CSIRO, AU</li>
  <li>Fariza Sabrina, Central Queensland University, AU</li>
  <li>Hooman Alavizadeh,  Massey University, AU</li>
  <li>Hyoungshick Kim, Sungkyunkwan University, Korea</li>
  <li>Jayati Dav, Indiana University Bloomington, US</li>
  <li>Jin Kwak, Ajou University, Korea</li>
  <li>Julia Bernd, International Computer Science Institute, US</li>
  <li>Karima Boudaoud, University of Nice Sophia Antipolis, France</li>
  <li>Mahdi Nasrullah Al-Ameen, Utah State University, US</li>
  <li>Ian Welch, Victoria University of Wellington, NZ</li>
  <li>Seyit Camtepe, Data61 / CSIRO, AU</li>
  <li>Sophie van der Zee, Erasmus University Rotterdam, Netherlands</li>
  <li>Vimal  Kumar, University of Waikato, NZ</li>
  <li>Xuyun Zhang, Macquarie University, AU</li>
<!--
  <li>Abdulmajeed Alqhatani, UNC Charlotte, US</li>
  <li>Ada Lerner, Wellesley College, US</li>
  <li>Alisa Frik, ICSI, University of California at Berkeley, US</li>
  <li>Andrew Adams, Meiji University, JP</li>
  <li>Hamza Sellak, ENSAM, Moulay Ismaïl University, MA</li>
  <li>Heather Crawford, Florida Institute of Technology, US</li>
  <li>Julian Williams, Durham University, UK</li>
  <li>Julie Haney, National Institute of Standards and Technology, US</li>
  <li>Karen Renaud, Rhodes University, SA & University of Glasgow, UK</li>
  <li>Mahdi Nasrullah, Al-Ameen, Utah State University, US</li>
  <li>Maija Poikela, Fraunhofer AISEC, DE</li>
  <li>Marthie Grobler, CSIRO, AU</li>
  <li>Matt Bishop, University of California of Davis, US</li>
  <li>Mohan Baruwal Chhetri, CSIRO, AU</li>
  <li>Nicholas Weaver, ISCI</li>
  <li>Pamela Briggs, Northumbria University, UK</li>
  <li>Patrick Traynor, University of Florida, US</li>
  <li>Paul Watters, La Trobe University AU</li>
  <li>Peter Gutmann, University of Auckland, AU</li>
  <li>Sanchari Das, American Express, US</li>
  <li>Shigeng Zhang, Central South University, CN</li>
  <li>Shrirang, Mare, University of Washington, US</li>
  <li>Sid Stamm, Rose-Hulman Institute of Technology, US</li>
  <li>Sven Dietrich, City University of New York, US</li>
  <li>Ruth Shillair, Michigan State University, US</li>
  <li>Tim Kelley, Naval Surface Warfare Center Crane Division, US</li>
  <li>Vaibhav Garg, Comcast Cable, US</li>
  <li>Wendy Seltzer, MIT, US</li>
  <li>Zinaida Benenson, University of Erlangen-Nuremberg, DE</li>
-->
</ul>
</div>
</div>
</div>

<!--
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
-->

</div>
</div>
    <?php include("$top/includes/footer.inc"); ?>
