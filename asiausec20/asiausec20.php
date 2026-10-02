<?php 
$top = "../..";
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
<h2 style="font-size: 26px">AsiaUSEC 2020</h2>
<div class="outline-text-2" id="text-1">
<p>
Ensuring effective security and privacy in real-world technology requires considering not only technical but also human aspects, as well as the complex way in which these combine. technical as well as human aspects. Enabling people to manage privacy and security necessitates giving due consideration to the users and the larger operating context within which technology is embedded.
</p>

<p>
It is the aim of USEC to contribute to an increase of the scientific quality of research in human factors in security and privacy. To this end, we encourage replication studies to validate previous research findings. Papers in these categories should be clearly marked as such and will not be judged against regular submissions on novelty. Rather, they will be judged based on scientific quality and value to the community. We also encourage reports of faded experiments, since their publication will serve to highlight the lessons learned and prevent others falling into the same traps.
</p>
<p>
Proceedings of AsiaUSEC20 is available <a href="https://www.springer.com/us/book/9783030544546">here</a>.
</p>
  <h3>Sponsors</h3>
<table class="usec">
  <tr>
  <td ><a href="https://indiana.edu/"><img src="../images/iu_logo.jpg" width="80px" /></a></td>
  <td ><a href="https://www.microsoft.com/en-us/"><img src="../images/ms_logo.jpg" width="120px" /></a></td>
</tr>
</table>

<h3>Keynote</h3>
<table class="usec">
<tr>
<td width="20%" align="left"><a href="https://en.wikipedia.org/wiki/Peter_Gutmann_(computer_scientist)"><img src="../images/peter-gutmann.jpg" width="200px" /></a></td>
<td width="80%" align="right"><p><b>Peter Gutmann</b> is a researcher in the Department of Computer Science at the
University of Auckland working on design and analysis of cryptographic
security architectures and security usability.  He helped write the popular
PGP encryption package, has authored a number of papers and RFC's on security
and encryption, and is the author of the open source cryptlib security
toolkit, "Cryptographic Security Architecture: Design and Verification"
(Springer, 2003), and an upcoming book on security engineering.  In his spare
time he pokes holes in whatever security systems and mechanisms catch his
attention and grumbles about the lack of consideration of human factors in
designing security systems.</p></td>
</tr>

<tr>
  <td colspan="2">
    &nbsp;&nbsp;&nbsp;
  </td>
</tr>
<tr>
  <td colspan="2">
    <i><b>Availability and Security: Choose any One</b></i>
  </td>
</tr>
<tr>
  <td colspan="2">
  <i>
Availability/dependability considerations assert that "in case of any issues,
keep going at any cost" while security mandates "in case of any issues, raise
the alarm and shut things down".  In other words once you've found the single
bit that's out of place, you've won and there's no need to think about
continuing.  Needless to say, these two concepts are more than a little
incompatible.  This talk looks at the thorny issue of availability/
dependability vs. security, complete with hair-raising examples, as instances
of wicked problems, a concept taken from the field of social planning.  To the
annoyance of geeks everywhere, the talk will conclude without presenting any
obvious solutions.?
</i>
  </td>
</tr>
</table>


<h3>Program</h3>
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
<td class="org-left">8:30</td>
<td class="org-left"><b>Introduction and Publication Plan Q &A</b></td>
</tr>

<tr>
<td class="org-left">9:00 – 10:30</td>
<td class="org-left"><b>Email and Browsing</b><br/>
<i><a href="papers/AsiaUSEC20_paper_2.pdf">A Tale of Two Browsers: Understanding User’s Web Browser Choices in South Korea</a></i> - Simon Woo, Hyoungshick Kim, Ji Won Choi, Soyoon Jeon, Jihye Woo and Joon Han.(15 min)<br/>
<i><a href="papers/AsiaUSEC20_paper_10.pdf">User-Centered Risk Communication for Safer Browsing</a></i> - Sanchari Das, Jacob Abbott, Shakthidhar Gopavaram, Jim Blythe and L. Jean Camp.(15 min)<br/>
<i><a href="papers/AsiaUSEC20_paper_9.pdf">Secure Email – A Usability Study</a></i> - Adrian Reuter, Ahmed Abdelmaksoud, Wadie Lemrazzeq, Karima Boudaoud and Marco Winckler.(15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_3.pdf">The Effects of Cue Utilization and Cognitive Load in the Detection of Phishing Emails</a></i> - George Nasser, Ben Morrison, Piers Bayl-Smith, Ronnie Taib, Michael Gayed and Mark Wiggins.(15 min)<br/>
-->
George Nasser, Ben Morrison, Piers Bayl-Smith, Ronnie Taib, Michael Gayed, and Mark Wiggins. <i><a href="papers/AsiaUSEC20_paper_3.pdf">The Effects of Cue Utilization and Cognitive Load in the Detection of Phishing Emails</a></i>, Proceedings of AsiaUSEC'20, Financial Cryptography and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020. (15min)
<br/>
<i><a href="papers/AsiaUSEC20_paper_8.pdf">Cue Utilization, Phishing Feature and Phishing Email Detection</a></i> - Piers Bayl-Smith, Daniel Sturman and Mark Wiggins.(15 min)<br/>
Panel Q&A 15 minutes</td>
</tr>

<tr>
<td class="org-left">10:30 – 11:00</td>
<td class="org-left"><b>Break</b></td>
</tr>

<tr>
<td class="org-left">11:00 – 12:30</td>
<td class="org-left"><b>Behaviour – Smart Environments & Workplaces</b> <br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_24.pdf">Perception of Privacy Dis-Empowerment & Patterns of Privacy Behaviour</a></i> - Kovila P.L. Coopamootoo.(15 min)<br/>
-->
KovilaP.L.Coopamootoo, <i><a href="papers/AsiaUSEC20_paper_24.pdf">Dis-Empowerment Online- An Investigation of Privacy & Sharing Perceptions & Method Preferences</a></i>: Proceedings of AsiaUSEC’20, Financial Cryptography and Data Security 2020 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020 (15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_6.pdf" >Security and Privacy Awareness in Smart Environments – a Cross Country Investigation</a></i> - Oksana Kulyk, Benjamin Maximilian Reinheimer, Lukas Aldag, Nina Gerber, Peter Mayer and Melanie Volkamer.(15 min)<br/>
-->
Oksana Kulyk, Benjamin Maximilian Reinheimer, Lukas Aldag, Peter Mayer, Nina Gerber, Melanie Volkamer. <i><a href="papers/AsiaUSEC20_paper_6.pdf">Security and Privacy Awareness in Smart Environments – A Cross-Country Investigation</a></i>, Proceedings of AsiaUSEC’20, Financial Cryptography
and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020. (15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_22.pdf">Understanding Perceptions of Smart Devices</a></i> - Hilda Hadan and Sameer Patil.(15 min)<br/>
-->
Hilda Hadan, Sameer Patil, <i><a href="papers/AsiaUSEC20_paper_22.pdf">Understanding Perceptions of Smart Devices</a></i>, Proceedings of AsiaUSEC‘20, Financial Cryptography and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020 (15 min)<br/>
<i><a href="papers/AsiaUSEC20_paper_18.pdf">In Our Employer We Trust: Mental Models of Office Worker’s Privacy Perceptions</a></i> - Jan Tolsdorf and Florian Dehling.(15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_15.pdf">Behaviour of outsourced Employees as Sources of Information System Security Threats</a></i> - David Oyebisi.(15 min)<br/>
-->
David Oyebisi and Kennedy Njenga, <i><a href="papers/AsiaUSEC20_paper_15.pdf">Behaviour of Outsourced Employees as Sources of Information System Security Threats</a></i>: Proceedings of AsiaUSEC’20, Financial Cryptography and Data Security 2020 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020.(15 min)<br/>
Panel Q&A 15 minutes</td>
</tr>

<tr>
<td class="org-left">12:30 – 14:00</td>
<td class="org-left"><b>Lunch</b>&nbsp;&nbsp;&nbsp;Location: Pavilion</td>
</tr>


<tr>
<td class="org-left">14:00 – 15:30</td>
<td class="org-left"><b>Passwords & Workplaces</b><br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_17.pdf">Exploring Effects of Auditory Stimuli on CAPTCHA Performance</a></i> - Gene Tsudik, Tyler Kaczmarek, Bruce Berg and Alfred Kobsa.(15 min)<br/>
-->
Gene Tsudik, Tyler Kaczmarek, Bruce Berg, Alfred Kobsa, <i><a href="papers/AsiaUSEC20_paper_17.pdf">Exploring Effects of Auditory Stimuli on CAPTCHA Performance</a></i>, Proceedings of AsiaUSEC’20, Financial Cryptography and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020.(15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_5.pdf">PassPage: Graphical Password Authentication Scheme Based on Web Browsing Records Performance</a></i> - Xian Chu, Huiping Sun and Zhong Chen.(15 min)<br/>
-->
Xian Chu, Huiping Sun, Zhong Chen, <i><a href="papers/AsiaUSEC20_paper_5.pdf">PassPage: Graphical Password Authentication Scheme Based on Web Browsing Records</a></i>, Proceedings of AsiaUSEC'20, Financial Cryptography and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020.(15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_16.pdf">An Antidote to Frustration in Password Choice</a></i> - Kovila P.L. Coopamootoo.(15 min)<br/>
-->
Kovila P.L. Coopamootoo, <i><a href="papers/AsiaUSEC20_paper_16.pdf">Empathy as a Response to Frustration in Password Choice</a></i>: Proceedings of AsiaUSEC’20, Financial Cryptography and Data Security 2020 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020 (15 min)<br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_19.pdf">Fixing the Fixes: Assessing the Solutions of SAST Tools for Securing Password Storage</a></i> - Harshal Tupsamudre, Monika Sahu, Kumar Vidhani and Sachin Lodha.(15 min)<br/>
-->
Harshal Tupsamudre,Monika Sahu,Kumar Vidhani,Sachin Lodha, <i><a href="papers/AsiaUSEC20_paper_19.pdf">Fixing the Fixes: Assessing the Solutions of SAST Tools for Securing Password Storage</a></i>, Proceedings of AsiaUSEC’20, Financial Cryptography and Data Security 2019 (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020 (15min) <br/>
<!--
<i><a href="papers/AsiaUSEC20_paper_14.pdf">Incorporating Psychology into Cybersecurity Education</a></i> - Jacqui Taylor-Jackson, John McAlaney, Jeff Foster, Abubakar Bello, Alana Maurushat and John Dale.(15 min)<br/>
-->
Jacqui Taylor-Jackson, John McAlaney, Jeff Foster, Abubakar Bello, Alana Maurushat, John Dale, <i><a href="papers/AsiaUSEC20_paper_14.pdf">Incorporating Psychology into Cyber Security Education: A Pedagogical Approach</a></i>, Proceedings of AsiaUSEC'20, Financial Cryptography and Data Security (FC). February 14, 2020 Kota Kinabalu, Sabah, Malaysia Springer, 2020. (15 min)<br/>
Panel Q&A 15 minutes</td>
</tr>

<tr>
<td class="org-left">15:30 – 16:00</td>
<td class="org-left"><b>Break</b></td>
</tr>

<tr>
<td class="org-left">16:00 – 16:45</td>
<td class="org-left"><b>Keynote Peter Gutmann</b></td>
</tr>
<tr>
<td class="org-left">16:45 – </td>
<td class="org-left">Closing Questions and Comments</td>
</tr>
</tbody>
</table>



<!--
<h3>Papers</h3>
<ul>
  <li>
    Kovila P.L. Coopamootoo. <a href="">Perception of Privacy Dis-Empowerment & Patterns of Privacy Behaviour</a>
  </li>
  <li>
    Sanchari Das, Jacob Abbott, Shakthidhar Gopavaram, Donginn Kim and L. Jean Camp. <a href="">User-Centered Risk Communication for Safer Browsing</a>
  </li>
  <li>
    Adrian Reuter, Ahmed Abdelmaksoud, Wadie Lemrazzeq, Karima Boudaoud and Marco Winckler. <a href="">Secure Email - A Usability Study</a>
  </li>
  <li>
    Gene Tsudik, Tyler Kaczmarek, Bruce Berg and Alfred Kobsa. <a href="">Exploring Effects of Auditory Stimuli on CAPTCHA Performance</a>
  </li>
  <li>
    George Nasser, Ben Morrison, Piers Bayl-Smith, Ronnie Taib, Michael Gayed and Mark Wiggins. <a href="">The Effects of Cue Utilization and Cognitive Load in the Detection of Phishing Emails</a>
  </li>
  <li>
    Xian Chu, Huiping Sun and Zhong Chen. <a href="">PassPage: Graphical Password Authentication Scheme Based on Web Browsing Records</a>
  </li>
  <li>
    Piers Bayl-Smith, Daniel Sturman and Mark Wiggins. <a href="">Cue Utilization, Phishing Feature and Phishing Email Detection</a>
  </li>
  <li>
    Kovila P.L. Coopamootoo. <a href="">Empathy as a Response to Frustration in Password Choice</a>
  </li>
  <li>
    Jan Tolsdorf and Florian Dehling. <a href="">In Our Employer We Trust: Mental Models of Office Workers’ Privacy Perceptions</a>
  </li>
  <li>
    Harshal Tupsamudre, Monika Sahu, Kumar Vidhani and Sachin Lodha. <a href="">Fixing the Fixes: Assessing the Solutions of SAST Tools for Securing Password Storage</a>
  </li>
  <li>
    Oksana Kulyk, Benjamin Maximilian Reinheimer, Lukas Aldag, Nina Gerber, Peter Mayer and Melanie Volkamer. <a href="">Security and Privacy Awareness in Smart Environments -- A Cross-Country Investigation</a>
  </li>
  <li>
    David Oyebisi. <a href="">Behaviour of Outsourced Employees as Sources of Information System Security Threats</a>
  </li>
  <li>
    Jacqui Taylor-Jackson, John McAlaney, Jeff Foster, Abubakar Bello, Alana Maurushat and John Dale. <a href="">Incorporating Psychology into Cyber Security Education: A Pedagogical Approach</a>
  </li>
  <li>
    Hilda Hadan and Sameer Patil. <a href="">Understanding Perceptions of Smart Devices</a>
  </li>
  <li>
    Simon Woo, Hyoungshick Kim, Ji Won Choi, Soyoon Jeon, Jihye Woo and Joon Han. <a href="">Tale of Two Browsers: Understanding Users' Web Browser Choices in South Korea</a>
  </li>
  <li>
    Jean Camp. <a href="">This is a Test</a>
  </li>
  <li>
    Augustin P. Sarr. <a href="">Cryptanalysis and Improvement of Smart-ID's Clone Detection Mechanism</a>
  </li>
  <li>
    May Almousa, Yang Liu, Tianyang Zhang and Mohd Anwar. <a href="">Consumer privacy mindfulness of online businesses</a>
  </li>
  <li>
    Jan Freudenreich, Jake Weidman and Jens Grossklags. <a href="">Responding to KRACK: Wi-Fi Security Awareness in Private Households</a>
  </li>
  <li>
    Jeremy D. Seideman and Sven Dietrich. <a href="">VKauth: A Behavioral Approach to User Identification and Authentication Work In Progress</a>
  </li>
  <li>
    Ritajit Majumdar and Sanchari Das. <a href="">User Quotient in Quantum Authentication: A Literature Survey</a>
  </li>
  <li>
    Azizul Rahman Shariff. <a href="">Data Mining and The Study of Digital Identity of Mobile Users Based on Android Data-Set</a>
  </li>
  <li>
    Abubakar Bello and Alana Maurushat. <a href="">Technical and Behavioural Training and Awareness Solutions for Mitigating Ransomware Attacks</a>
  </li>
  <li>
    Ahmet Yiğitalp Tulga. <a href="">Why are non-terrorist area citizens afraid of global terrorism?</a>
  </li>
</ul>
<br/><br/>
-->


</div>
</div>

<!--
<a href="https://eusec20.cs.uchicago.edu/">The 5th European Workshop on Usable Security (EuroUSEC20)</a> is held on June 15, 2020 - Genova, Italy 
-->

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
<li>Abdulmajeed Alqhatani, UNC Charlotte, US</li>
<li>Ada Lerner, Wellesley College,  US</li>
<li>Alisa  Frik, ICSI, University of California at Berkeley, US</li>
<li>Andrew Adams, Meiji University, JP</li>
<li>Hamza Sellak, ENSAM, Moulay Ismaïl University, MA</li>
<li>Heather Crawford, Florida Institute of Technology, US</li>
<li>Julian Jang-Jaccard, Massey University, NZ</li>
<li>Julian Williams, Durham  University, UK</li>
<li>Julie Haney, National Institute of Standards and Technology, US</li>
<li>Karen  Renaud, Rhodes University, SA & University of Glasgow, UK</li>
<li>Mahdi Nasrullah, Al-Ameen, Utah State University, US</li>
<li>Maija Poikela, Fraunhofer AISEC, DE </li>
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
<!--
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
<li>Sanchari Das, American Express, US</li>
<li>Sven Dietrich, City University of New York</li>
-->
</ul>
</div>
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
