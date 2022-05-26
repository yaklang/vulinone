<?php require_once 'header.php' ?>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Web For Pentester</h1>
        <p>This exercise is a set of the most common web vulnerabilities</p>
<a href="https://twitter.com/PentesterLab" class="twitter-follow-button" data-show-count="true" data-lang="en" data-size="large">Follow @PentesterLab</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>XSS</h2>
          <ul>
            <li><a href="xss/example1.php?name=hacker">Example 1</a></li>
          	<li><a href="xss/example2.php?name=hacker">Example 2</a></li>
          	<li><a href="xss/example3.php?name=hacker">Example 3</a></li>
          	<li><a href="xss/example4.php?name=hacker">Example 4</a></li>
          	<li><a href="xss/example5.php?name=hacker">Example 5</a></li>
          	<li><a href="xss/example6.php?name=hacker">Example 6</a></li>
          	<li><a href="xss/example7.php?name=hacker">Example 7</a></li>
          	<li><a href="xss/example8.php">Example 8</a></li>
          	<li><a href="xss/example9.php#hacker">Example 9</a></li>
          </ul>



        </div>


        <div class="span4">
          <h2>SQL injections</h2>
            <ul>
            	<li><a href="sqli/example1.php?name=root">Example 1</a></li>
            	<li><a href="sqli/example2.php?name=root">Example 2</a></li>
            	<li><a href="sqli/example3.php?name=root">Example 3</a></li>
            	<li><a href="sqli/example4.php?id=2">Example 4</a></li>
            	<li><a href="sqli/example5.php?id=2">Example 5</a></li>
            	<li><a href="sqli/example6.php?id=2">Example 6</a></li>
            	<li><a href="sqli/example7.php?id=2">Example 7</a></li>
            	<li><a href="sqli/example8.php?order=name">Example 8</a></li>
            	<li><a href="sqli/example9.php?order=name">Example 9</a></li>
	          </ul>	
       </div>
        <div class="span4">
          <h2>Directory traversal</h2>
            <ul>
            	<li>Example 1: <img src="dirtrav/example1.php?file=hacker.png" width="20" /></li>
            	<li>Example 2: <img src="dirtrav/example2.php?file=/var/www/files/hacker.png" width="20"  /></li>
            	<li>Example 3: <img src="dirtrav/example3.php?file=hacker" width="20"  /></li>
            </ul>



        </div>

      </div>


      <div class="row">
        <div class="span4">
          <h2>File Include</h2>

          <ul>
          	<li><a href="fileincl/example1.php?page=intro.php">Example 1</a></li>
          	<li><a href="fileincl/example2.php?page=intro">Example 2</a></li>
          </ul>

        </div>


        <div class="span4">
          <h2>Code injection</h2>
          <ul>
          	<li><a href="codeexec/example1.php?name=hacker">Example 1</a></li>
          	<li><a href="codeexec/example2.php?order=id">Example 2</a></li>
          	<li><a href="codeexec/example3.php?new=hacker&pattern=/lamer/&base=Hello%20lamer">Example 3</a></li>
          	<li><a href="codeexec/example4.php?name=hacker">Example 4</a></li>
          </ul>
       </div>

        <div class="span4">
          <h2>Commands injection</h2>
          <ul>
	          <li><a href="commandexec/example1.php?ip=127.0.0.1">Example 1</a></li>
	          <li><a href="commandexec/example2.php?ip=127.0.0.1">Example 2</a></li>
	          <li><a href="commandexec/example3.php?ip=127.0.0.1">Example 3</a></li>
          </ul>
        </div>
      </div>


      <div class="row">
        <div class="span4">
          <h2>LDAP attacks</h2>

          <ul>
          	<li><a href="ldap/example1.php?username=hacker&password=hacker">Example 1</a></li>
          	<li><a href="ldap/example2.php?name=hacker&password=hacker">Example 2</a></li>
          </ul>

        </div>


        <div class="span4">
          <h2>File Upload</h2>
          <ul>
          	<li><a href="upload/example1.php">Example 1</a></li>
          	<li><a href="upload/example2.php">Example 2</a></li>
          </ul>
       </div>

        <div class="span4">
          <h2>XML attacks</h2>
          <ul>
	          <li><a href="xml/example1.php?xml=<test>hacker</test>">Example 1</a></li>
	          <li><a href="xml/example2.php?name=hacker">Example 2</a></li>
          </ul>
        </div>
      </div>








<?php require_once 'footer.php' ?>
