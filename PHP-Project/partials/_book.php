<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<div class="section1">
	 	<div class="section1-mid">
	 		<div class="section1-content">
				<div class="display-tc"> 
					<div class="xo-container-1">
						<h1>Hotel Transylvania</h1>
						<p>Venice, Donwtown</p>
						<input type="date" id="start" name="start" value="2019-11-15" min="2019-11-15" max="2020-11-15">
						<input type="date" id="finish" name="finish" value="2019-11-15" min="2019-11-15" max="2020-11-15">
						<select name="" id="choose-room">
							<option value="">1 Room, 1 Adult, 0 Children</option>
							<option value="">1 Room, 2 Adults, 0 Children</option>
							<option value="">1 Room, 1 Adult, 1 Children</option>
							<option value="">1 Room, 2 Adults, 2 Children</option>
							<option value="">2 Rooms, 1 Adult, 0 Children</option>
							<option value="">2 Rooms, 2 Adults, 0 Children</option>
							<option value="">2 Rooms, 1 Adult, 1 Children</option>
							<option value="">2 Rooms, 2 Adults, 2 Children</option>
						</select>
					</div>
					<div class="xo-container-2">
						<?php if (AUTH): ?>
							<a href="#" class="Sign-up" id="fakesubmit" onclick="fakeSubmit(event)">Book</a>
							<script src="<?= base_path ?>/js/submit.js"></script>
						<?php else: ?>
							<a href="<?= base_path ?>/sessions/login.php" class="Sing-in">Login</a>
							<a href="<?= base_path ?>/users/registration.php" class="Sign-up">Sign up</a>
						<?php endif ?>
					</div>
				</div>
	 		</div>
	 	</div>
	 </div>
	 <div class="section2">
	 	<div class="section2-mid">
	 		<h1>Why choose HotTravel?</h1>
	 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eveniet, dolore aliquam modi obcaecati amet harum molestiae aut accusamus consectetur cumque ipsam possimus porro doloremque. Alias eligendi quam rerum dignissimos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ullam, minus libero quos labore, voluptatibus temporibus sunt molestiae culpa repellat enim sequi distinctio consectetur quidem, amet alias recusandae. Recusandae, nemo.</p>
	 	</div>
     </div>
</div>