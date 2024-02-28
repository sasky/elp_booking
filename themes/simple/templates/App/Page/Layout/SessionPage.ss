<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>

		<div class="content">$Content</div>

	</article>
	<section>
		<% if $AttendeeCount > 0 %>
    	<p class="">Spaces left : $AttendeeCount </p>
			$UserDefinedForm
			$Form
		<% else  %>
			$FullSessionMessage
		<% end_if %>
	</section>

</div>