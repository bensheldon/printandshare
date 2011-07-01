<?php $this->Html->css("fourup", null, array("inline"=>false)); ?>

		<div id="content">
			<table id="flyer">
				<?php for ($i = 1; $i <= 4; $i++) : ?>
					<?php
						if ($i == 1 || $i == 3) {
							echo '<tr>';
						} ?>
				<td class="quartersheet quartersheet-<?php echo $i ?>">
					<img src="/img/4up_header.png" alt="Students" class="header-students"/>

					<p class="fourupDescription">
						<?php echo html_entity_decode($proposal['fourupDescription']) ?>
					</p>

					<table class="links">
						<tr>
							<td class="linktext">
								<div class="helptext">Find out how you can help: </div>
								<div class="link"><?php echo $proposal['shortURL'] ?></div>
							</td>

							<td class="qrcode-wrapper">
								<img src="http://printandshare.org/proposals/qrcode?q=<?php echo urlencode($proposal['shortURL']) ?>" alt="QR Code for <?php echo $proposal['shortURL'] ?>" class="qrcode" />
							</td>
						</tr>
					</table>

				<table class="about">
					<tr>
						<td class="logo">
							<img src="/img/donorsChoosePeeps.png" alt="DonorsChoose Logo Small" />
						</td>
						<td class="explanation">
							This project is made possible by DonorsChoose, an online charity that makes it easy for anyone to help students in need.
						</td>
					</tr>
				</table>

				</td>
				<?php
					if ($i == 2 || $i == 4) {
						echo '</tr>';
					} ?>

				<?php endfor; ?>

			</table> <!-- table#flyer / -->
		</div>