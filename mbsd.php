<!DOCTYPE html>
<html id="home" lang="en">
<!--
mbsd.php
this file is part of pretty-licenses

The BSD 3-Clause License, prettified.

written by and copyright © 2020 Erica Garcia [ericathesnark] <me@athenas.space>
licensed under the MIT license [https://license.athenas.space/mit] | SPDX-License-Identifier: MIT

this code says: trans rights

don't like that? suck it up, or write your own code ^-^
-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>BSD 3-Clause License</title>

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
    <h1>The BSD 3-Clause License (BSD-3-Clause)</h1>
    <p>Software (not License!) is &sdot; <br>Copyright © <?php echo date("Y"); ?> <a href="<?php echo $cfg['PRETTYLICENSE_URL'];?>"><?php echo $cfg['PRETTYLICENSE_AUTHOR'];?></a>
      &lt;<a href="mailto:<?php echo $cfg['PRETTYLICENSE_EMAIL'];?>"><?php echo $cfg['PRETTYLICENSE_EMAIL'];?></a>&gt;</p>

    <p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
      following conditions are met:</p>

    <p class="small left">1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.<br><br>
      2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the
      following disclaimer in the documentation and/or other materials provided with the distribution.<br><br>
      3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote
      products derived from this software without specific prior written permission.
    </p>

    <p class=emph>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED
      WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
      PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
      INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
      GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
      LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
      OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>
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
