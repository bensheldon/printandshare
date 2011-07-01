<a href="/"><img class="websiteName" src="/css/img/printandshare.png" alt="Print and Share"></a>

<div id="welcome">
  <h2>Whoops! We couldn't find what you're looking for. Try another search?</h2>
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
  <img class="confusedStudent" src="/css/img/confusedStudent.png" alt="confused student">