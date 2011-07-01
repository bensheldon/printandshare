<?php  $this->Html->script('jquery-1.4.2.min', FALSE); ?>
<?php  $this->Html->script('scripts', FALSE); ?>

<div id="previewPage" class="clearfix">
  <a href="/"><img class="websiteName" src="/css/img/printandshare.png" alt="Print and Share"></a>
 		<div id="choose-sheet">
			<div>
				<a href="#edit-pulltab" id="choose-pulltab">
					<img src="/img/icon-pulltab.png" alt="Pulltab Icon" />
				</a>
				<a href="#edit-fourup" id="choose-fourup">
					<img src="/img/icon-fourup.png" alt="Fourup Icon" />
				</a>
			</div>
		</div>


	<h2><?php echo $proposal['title'] ?><span><a href="<?php echo $proposal['proposalURL'] ?>">view&nbsp;project&nbsp;&rarr;</a></span></h2>

	<!-- <p class="project-link"><a href="<?php echo $proposal['proposalURL'] ?>">View original project</a></p> -->

	<div id="edit">

		<?php
			// Open the Form and save the ID
			echo $form->create('Proposal', array('action' => 'pdf'), $proposal['id']);
			echo $form->input('Proposal.id', array('type'=>'hidden'));
		?>
		<div id="edit-pulltab" class="clearfix">
			<?php
				// Render the Pulltab form
				echo $form->input('Proposal.pulltabDescription', array('label' => 'Description', 'rows' => '5', 'escape'=>false));
				echo $form->input('Proposal.pulltabShort', array('label' => 'Name for tab', 'rows' => '1', 'escape'=>false));
				echo $form->submit('Generate PDF', array('name'=>'generatePulltab'));

				//echo $form->end('Generate PDF');
			?>

			<iframe class="preview" src="/proposals/preview/<?php echo $proposal['id'] ?>/pulltab"></iframe>

			<p class="clearfix">Generate a PDF of this Poster:</p>
			<?php
				echo $form->submit('Generate PDF', array('name'=>'generatePulltab'));
			?>
		</div> <!-- #edit-pulltab / -->

		<div id="edit-fourup" class="clearfix" style="display:none">
			<?php
				// render the Fourup form
				echo $form->input('Proposal.fourupDescription', array('label' => 'Brief description','rows' => '3', 'escape'=>false));
				echo $form->submit('Generate PDF', array('name'=>'generateFourup'));
			?>

			<iframe class="preview" src="/proposals/preview/<?php echo $proposal['id'] ?>/fourup"></iframe>

			<p class="clearfix">Generate a PDF of this Poster:</p>
			<?php
				echo $form->submit('Generate PDF', array('name'=>'generateFourup'));
			?>
		</div> <!-- #edit-fourup / -->
	<?php
		// Close the form
		echo $form->end();
	?>


	</div> <!-- #edit / -->
</div> <!-- #previewPage / -->
