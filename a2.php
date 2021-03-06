<!DOCTYPE html>
<html id="home" lang="en">
<!--
a2.php
this file is part of pretty-licenses

Apache 2.0 License, prettified.

written by and copyright © 2020 Erica Garcia [ericathesnark] <me@athenas.space>
licensed under the MIT license [https://license.athenas.space/mit] | SPDX-License-Identifier: MIT

this code says: trans rights

don't like that? suck it up, or write your own code ^-^
-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>The Apache License 2.0</title>

  <meta name="viewport" content="width=device-width, initial-scale=0.7">
  <script>
    document.createElement('article');
    document.createElement('footer');
  </script>
  <link rel="stylesheet" href="./content/css/material-indigo.css">
</head>

<body>
  <article>
<?php $cfg = parse_ini_file("/license-confs/".$_SERVER['HTTP_HOST'].".ini");?>
    <img id="gravatar" src="https://gravatar.com/avatar/<?php echo $cfg['PRETTYLICENSE_AVATAR'];?>?s=512">
    <h1>The Apache License 2.0 (Apache-2.0)</h1>
    <p>Work (not License!) is &sdot; <br>Copyright © <?php echo date("Y"); ?> <a href="<?php echo $cfg['PRETTYLICENSE_URL'];?>"><?php echo $cfg['PRETTYLICENSE_AUTHOR'];?></a>
      &lt;<a href="mailto:<?php echo $cfg['PRETTYLICENSE_EMAIL'];?>"><?php echo $cfg['PRETTYLICENSE_EMAIL'];?></a>&gt;</p>
    <p>Apache License<br>
      Version 2.0, January 2004<br>
      http://www.apache.org/licenses/</p>
    <p class=emph>TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTION</p>
    <p class=emph>1. Definitions.</p>
    <p class=small>"License" shall mean the terms and conditions for use, reproduction, and distribution as defined by
      Sections 1 through 9 of this document.<br><br> "Licensor" shall mean the copyright owner or entity authorized by
      the copyright owner that is granting the License.<br> <br> "Legal Entity" shall mean the union of the acting
      entity and all other entities that control, are controlled by, or are under common control with that entity. For
      the purposes of this definition, "control" means (i) the power, direct or indirect, to cause the direction or
      management of such entity, whether by contract or otherwise, or (ii) ownership of fifty percent (50%) or more of
      the outstanding shares, or (iii) beneficial ownership of such entity.<br> <br> "You" (or "Your") shall mean an
      individual or Legal Entity exercising permissions granted by this License.<br> <br> "Source" form shall mean the
      preferred form for making modifications, including but not limited to software source code, documentation source,
      and configuration files.<br> <br> "Object" form shall mean any form resulting from mechanical transformation or
      translation of a Source form, including but not limited to compiled object code, generated documentation, and
      conversions to other media types.<br> <br> "Work" shall mean the work of authorship, whether in Source or Object
      form, made available under the License, as indicated by a copyright notice that is included in or attached to the
      work (an example is provided in the Appendix below).<br> <br> "Derivative Works" shall mean any work, whether in
      Source or Object form, that is based on (or derived from) the Work and for which the editorial revisions,
      annotations, elaborations, or other modifications represent, as a whole, an original work of authorship. For the
      purposes of this License, Derivative Works shall not include works that remain separable from, or merely link (or
      bind by name) to the interfaces of, the Work and Derivative Works thereof.<br> <br> "Contribution" shall mean any
      work of authorship, including the original version of the Work and any modifications or additions to that Work or
      Derivative Works thereof, that is intentionally submitted to Licensor for inclusion in the Work by the copyright
      owner or by an individual or Legal Entity authorized to submit on behalf of the copyright owner. For the purposes
      of this definition, "submitted" means any form of electronic, verbal, or written communication sent to the
      Licensor or its representatives, including but not limited to communication on electronic mailing lists, source
      code control systems, and issue tracking systems that are managed by, or on behalf of, the Licensor for the
      purpose of discussing and improving the Work, but excluding communication that is conspicuously marked or
      otherwise designated in writing by the copyright owner as "Not a Contribution."<br> <br> "Contributor" shall mean
      Licensor and any individual or Legal Entity on behalf of whom a Contribution has been received by Licensor and
      subsequently incorporated within the Work.</p>
    <p class=emph>2. Grant of Copyright License.</p>
    <p class=small>Subject to the terms and conditions of this License, each Contributor hereby grants to You a
      perpetual, worldwide, non-exclusive, no-charge, royalty-free, irrevocable copyright license to reproduce, prepare
      Derivative Works of, publicly display, publicly perform, sublicense, and distribute the Work and such Derivative
      Works in Source or Object form.</p>
    <p class=emph>3. Grant of Patent License.</p>
    <p class=small>Subject to the terms and conditions of this License, each Contributor hereby grants to You a
      perpetual, worldwide, non-exclusive, no-charge, royalty-free, irrevocable (except as stated in this section)
      patent license to make, have made, use, offer to sell, sell, import, and otherwise transfer the Work, where such
      license applies only to those patent claims licensable by such Contributor that are necessarily infringed by their
      Contribution(s) alone or by combination of their Contribution(s) with the Work to which such Contribution(s) was
      submitted. If You institute patent litigation against any entity (including a cross-claim or counterclaim in a
      lawsuit) alleging that the Work or a Contribution incorporated within the Work constitutes direct or contributory
      patent infringement, then any patent licenses granted to You under this License for that Work shall terminate as
      of the date such litigation is filed.</p>
    <p class=emph>4. Redistribution.</p>
    <p class=small>You may reproduce and distribute copies of the Work or Derivative Works thereof in any medium, with
      or without modifications, and in Source or Object form, provided that You meet the following conditions:
      <p class="moreindent small left">1. You must give any other recipients of the Work or Derivative Works a copy of
        this License; and<br><br>
        2. You must cause any modified files to carry prominent notices stating that You changed the files; and<br><br>
        3. You must retain, in the Source form of any Derivative Works that You distribute, all copyright, patent,
        trademark, and attribution notices from the Source form of the Work, excluding those notices that do not pertain
        to any part of the Derivative Works; and<br><br>
        4. If the Work includes a "NOTICE" text file as part of its distribution, then any Derivative Works that You
        distribute must include a readable copy of the attribution notices contained within such NOTICE file, excluding
        those notices that do not pertain to any part of the Derivative Works, in at least one of the following places:
        within a NOTICE text file distributed as part of the Derivative Works; within the Source form or documentation,
        if provided along with the Derivative Works; or, within a display generated by the Derivative Works, if and
        wherever such third-party notices normally appear. The contents of the NOTICE file are for informational
        purposes only and do not modify the License. You may add Your own attribution notices within Derivative Works
        that You distribute, alongside or as an addendum to the NOTICE text from the Work, provided that such additional
        attribution notices cannot be construed as modifying the License.<br>
      </p>
      <p class=small>You may add Your own copyright statement to Your modifications and may provide additional or
        different license terms and conditions for use, reproduction, or distribution of Your modifications, or for any
        such Derivative Works as a whole, provided Your use, reproduction, and distribution of the Work otherwise
        complies with the conditions stated in this License.</p>
      <p class=emph>5. Submission of Contributions.</p>
      <p class=small>Unless You explicitly state otherwise, any Contribution intentionally submitted for inclusion in
        the Work by You to the Licensor shall be under the terms and conditions of this License, without any additional
        terms or conditions. Notwithstanding the above, nothing herein shall supersede or modify the terms of any
        separate license agreement you may have executed with Licensor regarding such Contributions.</p>
      <p class=emph>6. Trademarks.</p>
      <p class=small>This License does not grant permission to use the trade names, trademarks, service marks, or
        product names of the Licensor, except as required for reasonable and customary use in describing the origin of
        the Work and reproducing the content of the NOTICE file.</p>
      <p class=emph>7. Disclaimer of Warranty.</p>
      <p class=small>Unless required by applicable law or agreed to in writing, Licensor provides the Work (and each
        Contributor provides its Contributions) on an <span class=emph>"AS IS" BASIS</span>, <span class=emph>WITHOUT
          WARRANTIES OR CONDITIONS OF ANY KIND</span>, either express or implied, including, without limitation, any
        warranties or conditions of <span class=emph>TITLE</span>, <span class=emph>NON-INFRINGEMENT</span>, <span
          class=emph>MERCHANTABILITY</span>, or <span class=emph>FITNESS FOR A PARTICULAR PURPOSE.</span> You are solely
        responsible for determining the appropriateness of using or redistributing the Work and assume any risks
        associated with Your exercise of permissions under this License.</p>
      <p class=emph>8. Limitation of Liability.</p>
      <p class=small>In no event and under no legal theory, whether in tort (including negligence), contract, or
        otherwise, unless required by applicable law (such as deliberate and grossly negligent acts) or agreed to in
        writing, shall any Contributor be liable to You for damages, including any direct, indirect, special,
        incidental, or consequential damages of any character arising as a result of this License or out of the use or
        inability to use the Work (including but not limited to damages for loss of goodwill, work stoppage, computer
        failure or malfunction, or any and all other commercial damages or losses), even if such Contributor has been
        advised of the possibility of such damages.</p>
      <p class=emph>9. Accepting Warranty or Additional Liability</p>
      <p class=small>While redistributing the Work or Derivative Works thereof, You may choose to offer, and charge a
        fee for, acceptance of support, warranty, indemnity, or other liability obligations and/or rights consistent
        with this License. However, in accepting such obligations, You may act only on Your own behalf and on Your sole
        responsibility, not on behalf of any other Contributor, and only if You agree to indemnify, defend, and hold
        each Contributor harmless for any liability incurred by, or claims asserted against, such Contributor by reason
        of your accepting any such warranty or additional liability.</p>
      <p class=emph>END OF TERMS AND CONDITIONS</p>
      <p class="small moreindent"><span class="emph">APPENDIX: How to apply the Apache License to your
          work</span><br><br>To apply the Apache License to your work, attach the following boilerplate notice, with the
        fields enclosed by brackets "[]" replaced with your own identifying information. (Don't include the brackets!)
        The text should be enclosed in the appropriate comment syntax for the file format. We also recommend that a file
        or class name and description of purpose be included on the same "printed page" as the copyright notice for
        easier identification within third-party archives.<br><br>
        <span class="code">
          Copyright [yyyy] [name of copyright owner]
          <br><br>
          Licensed under the Apache License, Version 2.0 (the "License");<br>
          you may not use this file except in compliance with the License.<br>
          You may obtain a copy of the License at
          <br><br>
          <span style="margin-left: 1em">http://www.apache.org/licenses/LICENSE-2.0</span>
          <br><br>
          Unless required by applicable law or agreed to in writing, software<br>
          distributed under the License is distributed on an "AS IS" BASIS,<br>
          WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.<br>
          See the License for the specific language governing permissions and<br>
          limitations under the License.<br>
        </span>
      </p>
  </article>
  <footer>
    <p>part of the <a href="https://github.com/ericathesnark/pretty-licenses">pretty-licenses</a> project by <a
        href="https://athenas.space">ericathesnark</a> &sdot; based on <a
        href="https://github.com/remy/mit-license">mit-license</a> by <a href="https://github.com/remy">Remy Sharp</a>
    </p>
    <p><a href="https://github.com/ahaasler/mit-license-material-theme">material-indigo</a> theme by <a
        href="https://github.com/ahaasler">ahaasler</a></p>
  </footer>
</body>

</html>
