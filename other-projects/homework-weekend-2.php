<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Pseudo-code for Data Design</title>
	</head>
	<body>
		<h1>Seller posts a new product to Etsy</h1>
			<h2>Create class named profile</h2>
				<p>Create local variable named profileId</p>
				<p>Create local variable named profileAtHandle</p>
				<p>Create local variable named profilePhoneNumber</p>
				<p>Create local variable named profileEmail</p>
				<p>Create local variable named profileHash</p>
				<p>Create local variable named profileSalt</p>
				<p>Create method named getProfileId()</p>
				<ul>
					<li>This method queries the database for the profileId of the profile currently being requested</li>
					<li>Then it returns the profileId of the profile currently being called</li>
				</ul>
			<h2>Create class named listing</h2>
				<p>Create local variable named listingId</p>
				<p>Create local variable named listingProfileId</p>
				<p>Create local variable named listingContent</p>
				<p>Create local variable named listingDate</p>
				<p>Create local variable named listingNumberOfItems</p>
				<p>Create method named postListing</p>
				<ul>
					<li>This method first calls the getProfileId method from the profile class</li>
					<li>Then it queries the database with an insert command, using the class' variables as the values</li>
				</ul>
	</body>
</html>