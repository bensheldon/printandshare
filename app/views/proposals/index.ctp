
  <a href=""><img class="websiteName" src="/css/img/printandshare.png" alt="Print and Share"></a>
<div id="welcome">
  <h2>Easily create beautiful <span class="amp">&</span> printable handouts to advertise your DonorsChoose projects</h2>
</div>
<div id="search">
  <?php
    echo $form->create(NULL, array('action' => 'search'));
  ?>
  <!-- <label for="data[Proposal][search]">Paste your DonorsChoose project URL:</label> -->
  <fieldset>
    <div>
		  <input type="text" name="data[Proposal][search]"  placeholder="e.g. http://www.donorschoose.org/donors/proposal.html?id=555077" id="ProposalSearch" />
	  </div>
	  <input class="search-submit" type="submit" value="Retrieve Project &rarr;" />
</fieldset>
  <?php
 // echo $form->input('search', array('label' => "Retrieve a project proposal", 'placeholder' => "Paste your project URL, e.g. http://www.donorschoose.org/donors/proposal.html?id=555077", 'required'=> 'true'));
  echo $form->end();
  ?>
  <!--
    <p> &hellip;or let us <?php echo $this->Html->link(
    'choose one for you',
    array('action' => 'random')) ?>.</p>
    -->

</div> <!-- #search / -->
  <p id="directions"> &uarr; Paste your DonorsChoose project URL, or let us <?php echo $this->Html->link('choose one for you',array('action' => 'random')) ?>.</p>
  <img class="papers" src="/css/img/donorsChoose_posters.png" alt="donorschoose posters">


<div class="clearfix" id="information">
  <div id="first">
    <h2>&#8220;That looks awesome! It would definitely get donors' attention.&#8221; <span>&ndash;Mrs. F</span></h2>
    <ul id="explanation">
      <li>Automagically import your DonorChoose project's information and description.</li>
      <li>Generate a beautiful PDF that can be saved, printed and shared.</li>
      <li>Easily share your projects' needs with your friends, neighbors and local community.</li>
    </ul> <!-- #explanation / -->
  </div>
  <div>
    <img src="/css/img/donorsChoosePeeps.png" alt="Donors Choose Logo" height="80px">
    <p class="title">About</p>
    <p>This website was created for <a href="http://donorschoose.org">DonorsChoose.org</a>'s Hacking Education <a href="http://www.donorschoose.org/hacking-education">Contest</a>. We designed this web app to enable teachers to more easily create flyers and handouts to spread awareness <em>locally</em> about their project. Not everyone is a social media ninja.</p>
  </div>
  <div>
    <img src="/css/img/benandBilly.png" alt="Ben and Billy" height="80px">
    <p class="title">Contact</p>
    <p>Print and Share was developed by <a href="http://island92.org">Ben Sheldon</a> and designed by <a href="http://b.illbrown.com">Billy Brown</a>. If you have any questions, suggestions or feedback please drop us an <a href="mailto:bensheldon@gmail.com">email</a> or find us on <a href="http://twitter.com/bensheldon">Twitter</a>.</p>

    <p class="technical">Built with <a href="http://cakephp.org">CakePHP</a>,  <a href="http://code.google.com/p/dompdf/">DomPDF</a>, <a href="http://phpqrcode.sourceforge.net/">phpqrcode</a>, <a href="http://bi.tly">bi.tly</a>, and the <a href="http://developer.donorschoose.org/">DonorsChoose API</a>.</p>
  </div>
</div>
