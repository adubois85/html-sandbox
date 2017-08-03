<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cheatsheet for First Unit Test Exercise</title>
	</head>
	<body>
		<ol>
			<li>The First error is in Quote.php on line 130.  You want to check if the string length is greater than
				256 characters and throw an error, but the code is asking if it is less 256 character and throwing an
				error.  Simlply change the relational operator from less than ("<") to greater than (">").</li>
			<li>The second error is in the QuoteTest.php file.  From line 212 to 216, it wants to test if an array
				value on one side is equal to the other, but the first test value isn't actually an array, but an
				object.  You must convert the object into its array value.  You can do this a few ways, but the easiest
				is to add on line 211 (before the tests asserting if some variable->getter(), $pdoQuote is this case, is
				equal to another variable->getter()) something like this:
				<ul>
					<li>$pdoQuote = $pdoQuote[0];</li>
				</ul>
			</li>
			<li>The last error is again in Quote.php.  The unit test will mislead you and tell you it's a few lines
				down from where the actual error is.  There will be a while loop, something to the effect of:
				<ul>
					<li>while($row = $statement->fetch() !== false)</li>
				</ul>
				What this is doing is assigning the variable $row equal to an endless loop and then checking if that
				variable is not false, thus causing a fatal error in the constructor function.  What we need to do is add
				an extra set of parentheses around the part of the while loop for it to properly evaluate what we want.
				Something like this:
				<ul>
					<li>while(($row=$statement->fetch()) !==false)</li>
				</ul>
			</li>
		</ol>
		<p>I hope this helps somebody in the future.</p>
	</body>
</html>