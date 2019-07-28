<!-- <pre>
<code class="language-javascript">
console.log('hello');
</code>
</pre>	
 -->
<?php

$blogTitle = 'Return Statement Simplified';
$date = '22nd July, 2019';
$content = "
			I usually have issues with this statement and as I was able to have a grasp of it, I decided to write about it.
			<br/><br/>
			The return statement is a statement that evaluates a value and attaches it to a function. When such functions are called, they return the value that was evaluated.
			<br>
			Take a look at this example,
<pre>
<code class='language-javascript'>
let a = 5;
let b = 5;
let c = a + b;
console.log('a: ' + a + ', b: ' + b + ', c: ' + c);
//Output
//a: 5, b: 5; c: 10 
</code>
</pre>
			<br/>
			The way return statements work is similar to the program above. When 'a' is called, it returns '5' as the value. Calling 'a' is the same thing as calling '5'. You can replace '5' with 'a', wherever you want to use '5'.
			<br/>
			<br/>

			Return statements are mostly used in functions. They are different from 'console.log'. Console.log will output the evaluated value from its arguments to the console but the return statement will attach the value to the function.
			<br/><br/>

<pre>
<code class='language-javascript'>
// return
function write1() {
    return 'I will be attached to the write function';
}

// console.log
function write2() {
    console.log('I will be outputted');
}
</code>
</pre>
			<br/>
			Calling the write1() function wouldn't do much work as the value is only attached to the function and there's no action for outputting it. Calling the write2() function would display the arguments on the console.
			<br/><br/>
			From the first program, we can liken write1() to:
<pre>
<code class='language-javascript'>
function write1() = 'I will be attached to the write function';
// This is not the syntax for creating functions,
// for explanation purposes.
</code>
</pre>
			<br/>
			Calling write1() is the same thing as calling 'I will be attached to the write function'.
			<br/><br/>
			Another use case for return statements could be:
<pre>
<code class='language-javascript'>
function getAgeFor(yearOfBirth) {
    let currentYear = new Date().getFullYear();
    return currentYear < yearOfBirth ?
        'But dude, this is not possible' :
        currentYear - yearOfBirth;    
}
</code>
</pre>
			<br/>
			Watch this program closely. When 'getAgeFor' function is called with 'yearOfBirth' argument as expected, the 'currentYear' is gotten, then a ternary operator is used to check what to return for the function. If the currentYear is less than the yearOfBirth, a value is given to be returned by the function and a different value is given if otherwise. Remember, this does not output the value.

			<br/><br/>
			Just as a was used in getting c, by c = a + b, getAgeFor can also be used like:
<pre>
<code class='language-javascript'>
let myYearOfBirth = 1500;
if(typeOf getAgeFor(myYearOfBirth) === 'number') {
    console.log('My current age is ' + getAgeFor(myYearOfBirth));
} else {
        console.log(getAgeFor(myYearOfBirth());
}
</code>
</pre>
			<br/>
			First, we have to make sure it is a number for the string ('My current age is ') to work properly, because our getAgeFor function returns either a string ('But dude...') or a number (currentYear - yearOfBirth). This if statement can then be used to output the string containing the evaluated age gotten from our function.
			<br/><br/>

			I'd also like to bring to your knowledge that return statements end the execution of a function i.e, the preceding codes for that function would never be reached.
			<br/><br/>

			You can read more about return statements here: return - <a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/return'>Javascript | MDN</a>
			<br/><br/>

			I do hope that this article has taught you a thing or two. Do you have any questions, corrections or contributions, please share them in the comment section.
			<br/>

			Thank you!
			<br/><br/>
			<i>This post was first published at <a href='https://dillion.hashnode.dev/return-statement-simplified-cjy8klry00024sus16mpz59u7' title='Dillion @ Hashnode.dev'>Dillion@hashnode.dev</a></i>
			
			";
$previousBlog = 'first_blog';
$nextBlog = '';

$keywords = 'return statement, return statement simplified, javascript return statememt';
require 'public/common/blog-template.php';

?>