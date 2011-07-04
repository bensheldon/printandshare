<?php $this->Html->css("pulltab", null, array("inline"=>false)); ?>

		<div id="content">
			<img src="/img/students.png" alt="Students" id="students"/>
			<img src="/img/help.png" alt="Students" id="helpbanner"/>

			<table id="headline">
			</table>

			<table id="info">
				<tr>
					<td id="essay" class="pulltabDescription">
						<?php echo $proposal['pulltabDescription'] ?>
					</td>
					<td id="qrcode" rowspan="2">
						<img src="http://printandshare.org/proposals/qrcode?q=<?php echo urlencode($proposal['shortURL']) ?>" alt="QR Code for <?php echo $proposal['shortURL'] ?>" class="qrcode" />
					</td>
				</tr>
				<tr>
					<td id="helplink">
						<span class="helptext">Find out how you can help:</span> <span class="helplink"><?php echo $proposal['shortURL'] ?></span>
					</td>
				</tr>
			</table>

			<table id="service">
				<tr>
					<td class="logo"><img src="/img/donorschoose-logo.png" /></td>
					<td class="description"><p>This project is made possible by DonorsChoose, an online charity that makes it easy for anyone to help students in need.</p><td>
				<tr>
			</table>

	</div>
	<div id="pulltabs">
    <?php for ($i = 1; $i < 8; $i++) : ?>

      <table class="pulltab">
        <tr>
          <td class="image"><img src="/img/head<?php echo $i ?>.png" alt="Student Face" /></td>
          <td class="content">
            Help <?php echo $proposal['teacherName']?>'s students
            <h3 class="printTitle"><?php echo $proposal['pulltabShort'] ?></h3>
            <?php echo $proposal['shortURL'] ?>
          </td>
        </tr>
      </table>

    <?php endfor; ?>

	</div>