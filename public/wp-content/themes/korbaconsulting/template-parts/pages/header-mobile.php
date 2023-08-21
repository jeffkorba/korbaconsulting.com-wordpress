<div class="mobile d-lg-none">
				
	<div class="logo">

		<a href="/"><img src="<?php bloginfo('template_url'); ?>/static/images/korba-consulting-logo-750x750.png" alt="<?php bloginfo('name'); ?>"></a>

	</div>

	<div class="menu-toggle" v-on:click="toggleMenu">

		<span v-show="!isActive"><i class="fas fa-bars fa-2x"></i></span>

		<span v-show="isActive"><i class="fas fa-xmark fa-2x"></i></span>

	</div>

	<nav v-bind:class="{active: isActive}">

		<ul>

			<li><a href="/">Home</a></li>

			<li><a href="/services">Services</a></li>

			<li><a href="/work">Work</a></li>

			<li><a href="/company">Company</a></li>

			<li><a href="/contact">Contact</a></li>

		</ul>

	</nav>

</div>