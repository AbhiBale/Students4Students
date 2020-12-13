
<?php

session_start();

//Note Abhi : This if code is for if user press back button this will note allow to enter homepage without login details
if(!isset($_SESSION['username']))
{
	header('location:Login.php');
}
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Python</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link href="style/light-theme.css" rel="stylesheet" id="theme-link">
</head>

<body>
<div id="01">
  <div id="main">
    <div id="menubar">
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="language.php">Languages</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><h4><u><a href="logout.php"> <img src="logout.jpg" alt="Logout" width="40" height="40" style="vertical-align:middle;margin:-25px 17px"> <?php echo $_SESSION['username']; ?></a></u></h4></li>
		  <li class="btn-toggle"><h4><u><a> <img id="myImage" src="dark.jpg" alt="Logout" width="85" height="71" style="vertical-align:top;margin:-28px 12px"</a></u></h4></li>
		  <script>
			const btn = document.querySelector(".btn-toggle");
			const theme = document.querySelector("#theme-link");
			btn.addEventListener("click", function() {
			// Swap out the URL for the different stylesheets
			if (theme.getAttribute("href") == "style/light-theme.css") {
				theme.href = "style/dark-theme.css";
				document.getElementById('myImage').src='light.jpg';
			} else {
				theme.href = "style/light-theme.css";
				document.getElementById('myImage').src='dark.jpg';
			}
			});
			</script>
        </ul>
      </div>
  </div>
  <div id="site_content">
    <div class="sidebar">
      <div class="sidenav">
        <a href="#01"> &#128488; Home</a>
        <a href="#02"> &#128488; Variable Types</a>
        <a href="#03"> &#128488; Operators</a>
        <a href="#04"> &#128488; Decision Making</a>
        <a href="#05"> &#128488; Loops</a>
        <a href="#06"> &#128488; Strings</a>
        <a href="#07"> &#128488; Lists</a>
        <a href="#08"> &#128488; Tuples</a>
        <a href="#09"> &#128488; Dictionary</a>
        <a href="#10"> &#128488; Functions</a>
        <a href="#11"> &#128488; Modules</a>
        <a href="#12"> &#128488; Exceptions</a>
        <a href="#13"> &#128488; Classes/Objects</a>
      </div>


    </div>
    <div id="content">
      <h1>&#128488; Python Tutorial</h1>
      <p>Python is a general-purpose interpreted , interactive, object-oriented, and high-level programming
        language.
        It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the
        GNU General Public License (GPL).
        This tutorial giveNough understanding on Python programming language.</p>
      <h1>Why to Learn Python?</h1>
      <p><b>Python</b> is a high-level, interpreted, interactive and object-oriented scripting language. Python is
        designed to be highly readable.
        It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical
        constructions than other languages.</p>
      <ul class="list">
        <li>
          <p><b>Python is Interpreted</b>  Python is processed at runtime by the interpreter. You Not need to compile
            your program before executing it. This is similar to PERL and PHP.</p>
        </li>
        <li>
          <p><b>Python is Interactive</b>  You can actually sit at a Python prompt and interact with the interpreter
            directly to write your programs.</p>
        </li>
        <li>
          <p><b>Python is Object-Oriented</b>  Python supports Object-Oriented style or technique of programming that
            encapsulates code within objects.</p>
        </li>
        <li>
          <p><b>Python is a Beginner's Language</b>  Python is a great language for the beginner-level programmers and
            supports the development of a wide range of applications from simple text processing to WWW browsers to
            games.</p>
        </li>
      </ul>
      <h1 id="02"> &#128488; Variable Types</h1>
      <p>The data stored in memory can be of many types. For example, a person's age is stored as a numeric value and
        his or her address is stored as alphanumeric characters.
        Python has various standard data types that are used to define the operations possible on them and the storage
        method for each of them.</p>
      <p>Python has five standard data types </p>
      <ul class="list">
        <li>Numbers</li>
        <li>String</li>
        <li>List</li>
        <li>Tuple</li>
        <li>Dictionary</li>
      </ul>
      <p>Python supports four different numerical types </p>
      <ul class="list">
        <li>int (signed integers)</li>
        <li>long (long integers, they can also be represented in octal and hexadecimal)</li>
        <li>float (floating point real values)</li>
        <li>complex (complex numbers)</li>
      </ul>
      <h2>Python Strings</h2>
      <p>Strings in Python are identified as a contiguous set of characters represented in the quotation marks. Python
        allows for either pairs of single or double quotes.
        Subsets of strings can be taken using the slice operator ( [ ] and [:] ) with indexes starting at 0 in the
        beginning of the string and working their way from -1 at the end.</p>
      <p>The plus (+) sign is the string concatenation operator and the asterisk (*) is the repetition operator.</p>
      <h2>Python Lists</h2>
      <p>Lists are the most versatile of Python's compound data types. A list contains items separated by commas and
        enclosed within square brackets ([]). To some extent, lists are similar to arrays in C.
        One difference between them is that all the items belonging to a list can be of different data type.</p>
      <p>The values stored in a list can be accessed using the slice operator ([ ] and [:]) with indexes starting at 0
        in the beginning of the list and working their way to end -1. The plus (+) sign is the list concatenation
        operator, and the asterisk (*) is the repetition operator.</p>
      <h2>Python Tuples</h2>
      <p>A tuple iNother sequence data type that is similar to the list. A tuple consists of a number of values
        separated by commas. Unlike lists, however, tuples are enclosed within parentheses.</p>
      <p>The main differences between lists and tuples are: Lists are enclosed in brackets ( [ ] ) and their elements
        and size can be changed, while tuples are enclosed in parentheses ( ( ) ) and Not be updated. Tuples can be
        thought of as <b>read-only</b> lists. </p>
      <h2>Python Dictionary</h2>
      <p>Python's dictionaries are kind of hash table type. They work like associative arrays or hashes found in Perl
        and consist of key-value pairs. A dictionary key can be almost any Python type, but are usually numbers or
        strings. Values, on the other hand, can be any arbitrary Python object.</p>
      <p>Dictionaries are enclosed by curly braces ({ }) and values can be assigned and accessed using square braces
        ([]). Dictionaries haNo concept of order among elements. It is incorrect to say that the elements are "out of
        order"; they are simplNordered.</p>
      <h2>Data Type Conversion</h2>
      <table class="table table-bordered" width=600px>
        <tbody>
          <tr>
            <th style="text-align:center;">No.</th>
            <th style="text-align:center;">Function &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>int(x [,base])</b></p>
              <p>Converts x to an integer. base specifies the base if x is a string.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>long(x [,base] )</b></p>
              <p>Converts x to a long integer. base specifies the base if x is a string.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>float(x)</b></p>
              <p>Converts x to a floating-point number.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>complex(real [,imag])</b></p>
              <p>Creates a complex number.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p><b>str(x)</b></p>
              <p>Converts object x to a string representation.</p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p><b>repr(x)</b></p>
              <p>Converts object x to an expression string.</p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p><b>eval(str)</b></p>
              <p>Evaluates a string and returns an object.</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p><b>tuple(s)</b></p>
              <p>Converts s to a tuple.</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p><b>list(s)</b></p>
              <p>Converts s to a list.</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p><b>set(s)</b></p>
              <p>Converts s to a set.</p>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>
              <p><b>dict(d)</b></p>
              <p>Creates a dictionary. d must be a sequence of (key,value) tuples.</p>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p><b>frozenset(s)</b></p>
              <p>Converts s to a frozen set.</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p><b>chr(x)</b></p>
              <p>Converts an integer to a character.</p>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>
              <p><b>unichr(x)</b></p>
              <p>Converts an integer to a Unicode character.</p>
            </td>
          </tr>
          <tr>
            <td>15</td>
            <td>
              <p><b>ord(x)</b></p>
              <p>Converts a single character to its integer value.</p>
            </td>
          </tr>
          <tr>
            <td>16</td>
            <td>
              <p><b>hex(x)</b></p>
              <p>Converts an integer to a hexadecimal string.</p>
            </td>
          </tr>
          <tr>
            <td>17</td>
            <td>
              <p><b>oct(x)</b></p>
              <p>Converts an integer to an octal string.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="03"> &#128488; Basic Operators</h1>
      <h2>Types of Operator</h2>
      <ul class="list">
        <li>Arithmetic Operators</li>
        <li>Comparison (Relational) Operators</li>
        <li>Assignment Operators</li>
        <li>Logical Operators</li>
        <li>Bitwise Operators</li>
        <li>Membership Operators</li>
        <li>Identity Operators</li>
      </ul>

      <h2>Python Arithmetic Operators</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>+ Addition</td>
            <td>Adds values on either side of the operator.</td>
          </tr>
          <tr>
            <td>- Subtraction</td>
            <td>Subtracts right hand operand from left hand operand.</td>
          </tr>
          <tr>
            <td>* Multiplication</td>
            <td>Multiplies values on either side of the operator</td>
          </tr>
          <tr>
            <td>/ Division</td>
            <td>Divides left hand operand by right hand operand</td>
          </tr>
          <tr>
            <td>% Modulus</td>
            <td>Divides left hand operand by right hand operand and returns remainder</td>
          </tr>
          <tr>
            <td>** Exponent</td>
            <td>Performs exponential (power) calculation on operators</td>
          </tr>
          <tr>
            <td>//</td>
            <td>Floor Division - The division of operands where the result is the quotient in which the digits after the
              decimal point are removed. But if one of the operands is negative, the result is floored, i.e., rounded
              away from zero (towards negative infinity) </td>
          </tr>
        </tbody>
      </table>
      <h2>Python Comparison Operators</h2>
      <p>These operators compare the values on either sides of them and decide the relation among them. They are also
        called Relational operators.</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>==</td>
            <td>If the values of two operands are equal, then the condition becomes true.</td>
          </tr>
          <tr>
            <td>!=</td>
            <td>If values of two operands are not equal, then condition becomes true.</td>
          </tr>
          <tr>
            <td>&lt;&gt;</td>
            <td>If values of two operands are not equal, then condition becomes true.</td>
          </tr>
          <tr>
            <td>&gt;</td>
            <td>If the value of left operand is greater than the value of right operand, then condition becomes true.
            </td>
          </tr>
          <tr>
            <td>&lt;</td>
            <td>If the value of left operand is less than the value of right operand, then condition becomes true.</td>
          </tr>
          <tr>
            <td>&gt;=</td>
            <td>If the value of left operand is greater than or equal to the value of right operand, then condition
              becomes true.</td>
          </tr>
          <tr>
            <td>&lt;=</td>
            <td>If the value of left operand is less than or equal to the value of right operand, then condition becomes
              true.</td>
          </tr>
        </tbody>
      </table>
      <h2>Python Assignment Operators</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>=</td>
            <td>Assigns values from right side operands to left side operand</td>
          </tr>
          <tr>
            <td>+= Add AND</td>
            <td>It adds right operand to the left operand and assign the result to left operand</td>
          </tr>
          <tr>
            <td>-= Subtract AND</td>
            <td>It subtracts right operand from the left operand and assign the result to left operand</td>
          </tr>
          <tr>
            <td>*= Multiply AND</td>
            <td>It multiplies right operand with the left operand and assign the result to left operand</td>
          </tr>
          <tr>
            <td>/= Divide AND</td>
            <td>It divides left operand with the right operand and assign the result to left operand</td>
          </tr>
          <tr>
            <td>%= Modulus AND</td>
            <td>It takes modulus using two operands and assign the result to left operand</td>
          </tr>
          <tr>
            <td>**= Exponent AND</td>
            <td>Performs exponential (power) calculation on operators and assign value to the left operand</td>
          </tr>
          <tr>
            <td>//= Floor Division</td>
            <td>It performs floor division on operators and assign value to the left operand</td>
          </tr>
        </tbody>
      </table>
      <h2>Python Bitwise Operators</h2>
      <p>There are following Bitwise operators supported by Python language:</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>&amp; Binary AND</td>
            <td>Operator copies a bit to the result if it exists in both operands</td>
          </tr>
          <tr>
            <td>| Binary OR</td>
            <td>It copies a bit if it exists in either operand.</td>
          </tr>
          <tr>
            <td>^ Binary XOR</td>
            <td>It copies the bit if it is set in one operand but not both.</td>
          </tr>
          <tr>
            <td>~ Binary Ones Complement</td>
            <td>It is unary and has the effect of 'flipping' bits.</td>
          </tr>
          <tr>
            <td>&lt;&lt; Binary Left Shift</td>
            <td>The left operands value is moved left by the number of bits specified by the right operand.</td>
          </tr>
          <tr>
            <td>&gt;&gt; Binary Right Shift</td>
            <td>The left operands value is moved right by the number of bits specified by the right operand.</td>
          </tr>
        </tbody>
      </table>
      <h2>Python Logical Operators</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>and Logical AND</td>
            <td>If both the operands are true then condition becomes true.</td>
          </tr>
          <tr>
            <td>or Logical OR</td>
            <td>If any of the two operands are non-zero then condition becomes true.</td>
          </tr>
          <tr>
            <td>not Logical NOT</td>
            <td>Used to reverse the logical state of its operand.</td>
          </tr>
        </tbody>
      </table>
      <h2>Python Membership Operators</h2>
      <p>Python’s membership operators test for membership in a sequence, such as strings, lists, or tuples. There are
        two membership operators as explained below :</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>in</td>
            <td>Evaluates to true if it finds a variable in the specified sequence and false otherwise.</td>

          </tr>
          <tr>
            <td>not in</td>
            <td>Evaluates to true if it does not finds a variable in the specified sequence and false otherwise.</td>
          </tr>
        </tbody>
      </table>
      <h2>Python Identity Operators</h2>
      <p>Identity operators compare the memory locations of two objects. There are two Identity operators explained
        below :</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>
          </tr>
          <tr>
            <td>is</td>
            <td>Evaluates to true if the variables on either side of the operator point to the same object and false
              otherwise.</td>

          </tr>
          <tr>
            <td>is not</td>
            <td>Evaluates to false if the variables on either side of the operator point to the same object and true
              otherwise.</td>

          </tr>
        </tbody>
      </table>
      <h2>Python Operators Precedence</h2>
      <p>The following table lists all operators from highest precedence to lowest.</p>
      <table class="table table-bordered" width=595px>
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Operator &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>**</b></p>
              <p>Exponentiation (raise to the power)</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>~ + -</b></p>
              <p>Complement, unary plus and minus (method names for the last two are +@ and -@)</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>* / % //</b></p>
              <p>Multiply, divide, modulo and floor division</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>+ -</b></p>
              <p>Addition and subtraction</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p><b>&gt;&gt; &lt;&lt;</b></p>
              <p>Right and left bitwise shift</p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p><b>&amp;</b></p>
              <p>Bitwise 'AND'</p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p><b>^ |</b></p>
              <p>Bitwise exclusive `OR' and regular `OR'</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p><b>&lt;= &lt; &gt; &gt;=</b></p>
              <p>Comparison operators</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p><b>&lt;&gt; == !=</b></p>
              <p>Equality operators</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p><b>= %= /= //= -= += *= **=</b></p>
              <p>Assignment operators</p>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>
              <p><b>is is not</b></p>
              <p>Identity operators</p>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p><b>in not in</b></p>
              <p>Membership operators</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p><b>not or and</b></p>
              <p>Logical operators</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="04"> &#128488; Decision Making</h1>
      <p>Decision making is anticipation of conditions occurring while execution of the program and specifying actions
        taken according to the conditions.</p>
      <p>Decision structures evaluate multiple expressions which produce TRUE or FALSE as outcome. You need to determine
        which action to take and which statements to execute if outcome is TRUE or FALSE otherwise.</p>
      <p>Following is the general form of a typical decision making structure found in most of the programming languages
        </p>
      <img src="decision_making.jpg" alt="Decision making statements in Python" class="center">
      <p>Python programming language assumes any <b>non-zero</b> and <b>non-null</b> values as TRUE, and if it is either
        <b>zero</b> or <b>null</b>, then it is assumed as FALSE value.</p>
      <p>Python programming language provides following types of decision making statements. Click the following links
        to check their detail.</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Statement &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>if statement</p>
              <p>An <b>if statement</b> consists of a boolean expression followed by one or more statements.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>if...else statements</p>
              <p>An <b>if statement</b> can be followed by an optional <b>else statement</b>, which executes when the
                boolean expression is FALSE.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>nested if statements</p>
              <p>You can use one <b>if</b> or <b>else if</b> statement inside another <b>if</b> or <b>else if</b>
                statement(s).</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="05"> &#128488; Loops</h1>
      <p>In general, statements are executed sequentially: The first statement in a function is executed first, followed
        by the second, and so on. There may be a situation when you need to execute a block of code several number of
        times.</p>
      <p>Programming languages provide various control structures that allow for more complicated execution paths.</p>
      <p>A loop statement allows us to execute a statement or group of statements multiple times. The following diagram
        illustrates a loop statement </p>
      <img src="loop_architecture.jpg" alt="Loop Architecture" class="center">
      <p>Python programming language provides following types of loops to handle looping requirements.</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Loop Type &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>while loops</p>
              <p>Repeats a statement or group of statements while a given condition is TRUE. It tests the condition
                before executing the loop body.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>for loops</p>
              <p>Executes a sequence of statements multiple times and abbreviates the code that manages the loop
                variable.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>nested loops</p>
              <p>You can use one or more loop inside any another while, for or do..while loop.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>Loop Control Statements</h2>
      <p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic
        objects that were created in that scope are destroyed.</p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Control Statement &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>break statement</p>
              <p>Terminates the loop statement and transfers execution to the statement immediately following the loop.
              </p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>continue statement</p>
              <p>Causes the loop to skip the remainder of its body and immediately retest its condition prior to
                reiterating.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>pass statement</p>
              <p>The pass statement in Python is used when a statement is required syntactically but you do not want any
                command or code to execute.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="06"> &#128488; Strings</h1>
      <p>Strings are amongst the most popular types in Python. We can create them simply by enclosing characters in
        quotes. Python treats single quotes the same as double quotes. Creating strings is as simple as assigning a
        value to a variable.</p>
      <h2>Accessing Values in Strings</h2>
      <p>Python does not support a character type; these are treated as strings of length one, thus also considered a
        substring.</p>
      <p>To access substrings, use the square brackets for slicing along with the index or indices to obtain your
        substring.</p>
      <p>Example: <br> <code>
        var1 = 'Hello Everyone!' <br>
        var2 = "Welcome here!" <br>

        print "var1[2]: ", var1[0] <br>
        print "var2[1:5]: ", var2[1:5] <br></code> Output:<code> <br>var1[0]: l
        <br> var2[1:5]: elco </code>
      </p>
      <h2>Updating Strings</h2>
      <p>You can "update" an existing string by (re)assigning a variable to another string. The new value can be related
        to its previous value or to a completely different string altogether.</p>
      <p>var1 = 'Hello World!' <br>
        print "Updated String :- ", var1[:6] + 'Python' <br>
        Output: <br>
        Updated String :- Hello Python
      </p>
      <h2>String Special Operators</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Operator</th>
            <th style="text-align:center;width:45%">Description</th>

          </tr>
          <tr>
            <td>+</td>
            <td>Concatenation - Adds values on either side of the operator</td>

          </tr>
          <tr>
            <td>*</td>
            <td>Repetition - Creates new strings, concatenating multiple copies of the same
              string</td>

          </tr>
          <tr>
            <td>[]</td>
            <td>Slice - Gives the character from the given index</td>

          </tr>
          <tr>
            <td>[ : ]</td>
            <td>Range Slice - Gives the characters from the given range</td>
          </tr>
          <tr>
            <td>in</td>
            <td>Membership - Returns true if a character exists in the given string</td>
          </tr>
          <tr>
            <td>not in </td>
            <td>Membership - Returns true if a character does not exist in the given string</td>
          </tr>
          <tr>
            <td>r/R</td>
            <td>Raw String - Suppresses actual meaning of Escape characters. The syntax for raw strings is exactly the
              same as for normal strings with the exception of the raw string operator, the letter "r," which precedes
              the quotation marks. The "r" can be lowercase (r) or uppercase (R) and must be placed immediately
              preceding the first quote mark.</td>
          </tr>
          <tr>
            <td>%</td>
            <td>Format - Performs String formatting</td>
          </tr>
        </tbody>
      </table>
      <h2>String Formatting Operator</h2>
      <p>Here is the list of complete set of symbols which can be used along with % </p>
      <table class="table table-bordered" width=595px>
        <tbody>
          <tr>
            <th style="text-align:center;width:30%">Format Symbol</th>
            <th style="text-align:center;">Conversion</th>
          </tr>
          <tr>
            <td>%c</td>
            <td>character</td>
          </tr>
          <tr>
            <td>%s</td>
            <td>string conversion via str() prior to formatting</td>
          </tr>
          <tr>
            <td>%i</td>
            <td>signed decimal integer</td>
          </tr>
          <tr>
            <td>%d</td>
            <td>signed decimal integer</td>
          </tr>
          <tr>
            <td>%u</td>
            <td>unsigned decimal integer</td>
          </tr>
          <tr>
            <td>%o</td>
            <td>octal integer</td>
          </tr>
          <tr>
            <td>%x</td>
            <td>hexadecimal integer (lowercase letters)</td>
          </tr>
          <tr>
            <td>%X</td>
            <td>hexadecimal integer (UPPERcase letters)</td>
          </tr>
          <tr>
            <td>%e</td>
            <td>exponential notation (with lowercase 'e')</td>
          </tr>
          <tr>
            <td>%E</td>
            <td>exponential notation (with UPPERcase 'E')</td>
          </tr>
          <tr>
            <td>%f</td>
            <td>floating point real number</td>
          </tr>
          <tr>
            <td>%g</td>
            <td>the shorter of %f and %e</td>
          </tr>
          <tr>
            <td>%G</td>
            <td>the shorter of %f and %E</td>
          </tr>
        </tbody>
      </table>
      <p>Other supported symbols and functionality are listed in the following table </p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:30%">Symbol</th>
            <th style="text-align:center;">Functionality</th>
          </tr>
          <tr>
            <td>*</td>
            <td>argument specifies width or precision</td>
          </tr>
          <tr>
            <td>-</td>
            <td>left justification</td>
          </tr>
          <tr>
            <td>+</td>
            <td>display the sign</td>
          </tr>
          <tr>
            <td>&lt;sp&gt;</td>
            <td>leave a blank space before a positive number</td>
          </tr>
          <tr>
            <td>#</td>
            <td>add the octal leading zero ( '0' ) or hexadecimal leading '0x' or '0X', depending on whether 'x' or 'X'
              were used.</td>
          </tr>
          <tr>
            <td>0</td>
            <td>pad from left with zeros (instead of spaces)</td>
          </tr>
          <tr>
            <td>%</td>
            <td>'%%' leaves you with a single literal '%'</td>
          </tr>
          <tr>
            <td>(var)</td>
            <td>mapping variable (dictionary arguments)</td>
          </tr>
          <tr>
            <td>m.n.</td>
            <td>m is the minimum total width and n is the number of digits to display after the decimal point (if appl.)
            </td>
          </tr>
        </tbody>
      </table>
      <h2>Built-in String Methods</h2>
      <p>Python includes the following built-in methods to manipulate strings </p>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Sr.No.</th>
            <th style="text-align:center;">Methods with Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>capitalize()</p>
              <p>Capitalizes first letter of string</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>center(width, fillchar)</p>
              <p>Returns a space-padded string with the original string centered to a total of width columns.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>count(str, beg= 0,end=len(string))</p>
              <p>Counts how many times str occurs in string or in a substring of string if starting index beg and ending
                index end are given.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p>decode(encoding='UTF-8',errors='strict')</p>
              <p>Decodes the string using the codec registered for encoding. encoding defaults to the default string
                encoding.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p>encode(encoding='UTF-8',errors='strict')</p>
              <p>Returns encoded string version of string; on error, default is to raise a ValueError unless errors is
                given with 'ignore' or 'replace'.</p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p>endswith(suffix, beg=0, end=len(string))</p>
              <p>Determines if string or a substring of string (if starting index beg and ending index end are given)
                ends with suffix; returns true if so and false otherwise.</p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p>expandtabs(tabsize=8)</p>
              <p>Expands tabs in string to multiple spaces; defaults to 8 spaces per tab if tabsize not provided.</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p>find(str, beg=0 end=len(string))</p>
              <p>Determine if str occurs in string or in a substring of string if starting index beg and ending index
                end are given returns index if found and -1 otherwise.</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p>index(str, beg=0, end=len(string))</p>
              <p>Same as find(), but raises an exception if str not found.</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p>isalnum()</p>
              <p>Returns true if string has at least 1 character and all characters are alphanumeric and false
                otherwise.</p>
            </td>
          </tr>
          <td>11</td>
          <td>
            <p>isupper()</p>
            <p>Returns true if string has at least one cased character and all cased characters are in uppercase and
              false otherwise.</p>
          </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p>len(string)</p>
              <p>Returns the length of the string</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p>ljust(width[, fillchar])</p>
              <p>Returns a space-padded string with the original string left-justified to a total of width columns.</p>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>
              <p>lower()</p>
              <p>Converts all uppercase letters in string to lowercase.</p>
            </td>
          </tr>
          <tr>
            <td>15</td>
            <td>
              <p>lstrip()</p>
              <p>Removes all leading whitespace in string.</p>
            </td>
          </tr>
          <tr>
            <td>16</td>
            <td>
              <p>maketrans()</p>
              <p>Returns a translation table to be used in translate function.</p>
            </td>
          </tr>
          <tr>
            <td>17</td>
            <td>
              <p>max(str)</p>
              <p>Returns the max alphabetical character from the string str.</p>
            </td>
          </tr>
          <tr>
            <td>18</td>
            <td>
              <p>min(str)</p>
              <p>Returns the min alphabetical character from the string str.</p>
            </td>
          </tr>
          <tr>
            <td>19</td>
            <td>
              <p>replace(old, new [, max])</p>
              <p>Replaces all occurrences of old in string with new or at most max occurrences if max given.</p>
            </td>
          </tr>
          <tr>

            <td>20</td>
            <td>
              <p>split(str="", num=string.count(str))</p>
              <p>Splits string according to delimiter str (space if not provided) and returns list of substrings; split
                into at most num substrings if given.</p>
            </td>
          </tr>
          <tr>
            <td>21</td>
            <td>
              <p>startswith(str, beg=0,end=len(string))</p>
              <p>Determines if string or a substring of string (if starting index beg and ending index end are given)
                starts with substring str; returns true if so and false otherwise.</p>
            </td>
          </tr>
          <tr>
            <td>22</td>
            <td>
              <p>title()</p>
              <p>Returns "titlecased" version of string, that is, all words begin with uppercase and the rest are
                lowercase.</p>
            </td>
          </tr>
          <td>23</td>
          <td>
            <p>upper()</p>
            <p>Converts lowercase letters in string to uppercase.</p>
          </td>
          </tr>
        </tbody>
      </table>
      <h1 id="07"> &#128488; Lists</h1>
      <p>The most basic data structure in Python is the <b>sequence</b>. Each element of a sequence is assigned a number
        - its position or index. The first index is zero, the second index is one, and so forth.</p>
      <p>Python has six built-in types of sequences, but the most common ones are lists and tuples, which we would see
        in this tutorial.</p>
      <p>There are certain things you can do with all sequence types. These operations include indexing, slicing,
        adding, multiplying, and checking for membership. In addition, Python has built-in functions for finding the
        length of a sequence and for finding its largest and smallest elements.</p>
      <h2>Accessing Values in Lists</h2>
      <p>To access values in lists, use the square brackets for slicing along with the index or indices to obtain value
        available at that index.</p>
      <p>Example: <br><code> list1 = ['physics', 'chemistry', 1997, 2000]; <br>
        list2 = [1, 2, 3, 4, 5, 6, 7 ]; <br>
        print "list1[0]: ", list1[0] <br>
        print "list2[1:5]: ", list2[1:5] <br> </code>
        <code>Output: <br>list1[0]: physics <br>
        list2[1:5]: [2, 3, 4, 5] </code>
      </p>
      <h2>Updating Lists</h2>
      <p>You can update single or multiple elements of lists by giving the slice on the left-hand side of the assignment
        operator, and you can add to elements in a list with the append() method.</p>
      <p>Example: <br><code>list = ['physics', 'chemistry', 1997, 2000]; <br>
        print "Value available at index 2 : " <br>
        print list[2] <br>
        list[2] = 2001; <br>
        print "New value available at index 2 : " <br>
        print list[2] <br> </code>
        <code> Output: <br>Value available at index 2 :
        1997 <br>
        New value available at index 2 :
        2001 </code>
      </p>
      <h2>Delete List Elements</h2>
      <p>To remove a list element, you can use either the del statement if you know exactly which element(s) you are
        deleting or the remove() method if you do not know.</p>
      <p>Example: <br>
        <code>list1 = ['physics', 'chemistry', 1997, 2000]; <br>
        print list1 <br>
        del list1[2]; <br>
        print "After deleting value at index 2 : " <br>
        print list1 <br> </code>
        Output: <br><code>['physics', 'chemistry', 1997, 2000] <br>
        After deleting value at index 2 :
        ['physics', 'chemistry', 2000] </code>
      </p>
      <h2>Built-in List Functions &amp; Methods</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:5%">Sr.No.</th>
            <th style="text-align:center;width:95%">Function with Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>cmp(list1, list2)</p>
              <p>Compares elements of both lists.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>len(list)</p>
              <p>Gives the total length of the list.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>max(list)</p>
              <p>Returns item from the list with max value.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p>min(list)</p>
              <p>Returns item from the list with min value.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p>list(seq)</p>
              <p>Converts a tuple into list.</p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p>list.append(obj)</p>
              <p>Appends object obj to list</p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p>list.count(obj)</p>
              <p>Returns count of how many times obj occurs in list</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p>list.extend(seq)</p>
              <p>Appends the contents of seq to list</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p>list.index(obj)</p>
              <p>Returns the lowest index in list that obj appears</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p>list.insert(index, obj)</p>
              <p>Inserts object obj into list at offset index</p>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>
              <p>list.pop(obj=list[-1])</p>
              <p>Removes and returns last object or obj from list</p>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p>list.remove(obj)</p>
              <p>Removes object obj from list</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p>list.reverse()</p>
              <p>Reverses objects of list in place</p>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>
              <p>list.sort([func])</p>
              <p>Sorts objects of list, use compare func if given</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="08"> &#128488; Tuples</h1>
      <p>A tuple is a collection of objects which ordered and immutable. Tuples are sequences, just like lists. The
        differences between tuples and lists are, the tuples cannot be changed unlike lists and tuples use parentheses,
        whereas lists use square brackets.</p>
      <p>Creating a tuple is as simple as putting different comma-separated values. Optionally you can put these
        comma-separated values between parentheses also.</p>
      <h2>Accessing Values in Tuples</h2>
      <p>To access values in tuple, use the square brackets for slicing along with the index or indices to obtain value
        available at that index.</p>
      <p>Example: <br>
        <code>tup1 = ('physics', 'chemistry', 1997, 2000); <br>
        tup2 = (1, 2, 3, 4, 5, 6, 7 ); <br>
        print "tup1[0]: ", tup1[0]; <br>
        print "tup2[1:5]: ", tup2[1:5]; <br> </code>
        <code>Output: <br>tup1[0]: physics <br>
        tup2[1:5]: [2, 3, 4, 5] </code>
      </p>
      <h2>Updating Tuples</h2>
      <p>Tuples are immutable which means you cannot update or change the values of tuple elements. You are able to take
        portions of existing tuples to create new tuples as the following example demonstrates </p>
      <p>Example: <br>
        <code>tup1 = (12, 34.56); <br>
        tup2 = ('abc', 'xyz'); <br>
        # Following action is not valid for tuples <br>
        # tup1[0] = 100; <br>
        tup3 = tup1 + tup2; <br>
        print tup3; <br></code>
        <code>Output: <br>
        (12, 34.56, 'abc', 'xyz') </code>
      </p>
      <h2>Delete Tuple Elements</h2>
      <p>Removing individual tuple elements is not possible. There is, of course, nothing wrong with putting together
        another tuple with the undesired elements discarded.</p>
      <p>To explicitly remove an entire tuple, just use the <b>del</b> statement.</p>
      <p>Example: <br>
        <code>tup = ('physics', 'chemistry', 1997, 2000); <br>
        print tup; <br>
        del tup; <br>
        print "After deleting tup : "; <br>
        print tup; <br></code>
        <code>Output: <br>
        ('physics', 'chemistry', 1997, 2000) <br>
        After deleting tup : <br>
        <b>Traceback</b> (most recent call last): <br>
        File "test.py", line 9, in <module> <br>
          print tup; <br>
          NameError: name 'tup' is not defined </code>
      </p>
      <h2>Built-in Tuple Functions</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:5%">Sr.No.</th>
            <th style="text-align:center;width:95%">Function with Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>cmp(tuple1, tuple2)</p>
              <p>Compares elements of both tuples.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>len(tuple)</p>
              <p>Gives the total length of the tuple.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>max(tuple)</p>
              <p>Returns item from the tuple with max value.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p>min(tuple)</p>
              <p>Returns item from the tuple with min value.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p>tuple(seq)</p>
              <p>Converts a list into tuple.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="09"> &#128488; Dictionary</h1>
      <p>Each key is separated from its value by a colon (:), the items are separated by commas, and the whole thing is
        enclosed in curly braces. An empty dictionary without any items is written with just two curly braces, like
        this: {}.</p>
      <p>Keys are unique within a dictionary while values may not be. The values of a dictionary can be of any type, but
        the keys must be of an immutable data type such as strings, numbers, or tuples.</p>
      <h2>Accessing Values in Dictionary</h2>
      <p>To access dictionary elements, you can use the familiar square brackets along with the key to obtain its value.
      </p>
      Example:<code> <br>dict = {'Name': 'Zara', 'Age': 7, 'Class': 'First'} <br>
          print "dict['Name']: ", dict['Name'] <br>
          print "dict['Age']: ", dict['Age'] <br>
          Output: <br> dict['Name']:  Zara <br>
          dict['Age']:  7
        </code>
      <h2>Updating Dictionary</h2>
      <p>You can update a dictionary by adding a new entry or a key-value pair, modifying an existing entry, or deleting
        an existing entry as shown below.</p>
      <p> Example: <br><code> dict = {'Name': 'Zara', 'Age': 7, 'Class': 'First'} <br>
          dict['Age'] = 8; # update existing entry <br>
          dict['School'] = "DPS School"; # Add new entry <br>
          
          print "dict['Age']: ", dict['Age'] <br>
          print "dict['School']: ", dict['School'] <br>
          Output: <br> dict['Age']:  8 <br>
          dict['School']:  DPS School </code>
      </p>
      <h2>Delete Dictionary Elements</h2>
      <p>You can either remove individual dictionary elements or clear the entire contents of a dictionary. You can also
        delete entire dictionary in a single operation.</p>
      <p>To explicitly remove an entire dictionary, just use the <b>del</b> statement. Following is a simple example 
      </p>
      <code>dict = {'Name': 'Zara', 'Age': 7, 'Class': 'First'} <br>
          del dict['Name']; # remove entry with key 'Name' <br>
          dict.clear();     # remove all entries in dict <br>
          del dict ;        # delete entire dictionary <br>

          print "dict['Age']: ", dict['Age'] <br>
          print "dict['School']: ", dict['School'] <br> <br>
        </code>
      <p>This produces the following result. Note that an exception is raised because after del dict dictionary does not
        exist any more </p>
      <code>dict['Age']: <br>
         <b>Traceback</b> (most recent call last): <br>
          File "test.py", line 6, in <module> <br>
          print "dict['Age']: ", dict['Age']; <br>
          TypeError: 'type' object is unsubscriptable <br>
        </code>
      <h2>Properties of Dictionary Keys</h2>
      <p>Dictionary values have no restrictions. They can be any arbitrary Python object, either standard objects or
        user-defined objects. However, same is not true for the keys.</p>
      <p>There are two important points to remember about dictionary keys </p>
      <p><b>(a)</b> More than one entry per key not allowed. Which means no duplicate key is allowed. When duplicate
        keys encountered during assignment, the last assignment wins.</p>
      <p><b>(b)</b> Keys must be immutable. Which means you can use strings, numbers or tuples as dictionary keys but
        something like ['key'] is not allowed.</p>
      <h2>Built-in Dictionary Functions &amp; Methods</h2>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;width:5%">Sr.No.</th>
            <th style="text-align:center;width:95%">Function with Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p>cmp(dict1, dict2)</p>
              <p>Compares elements of both dict.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p>len(dict)</p>
              <p>Gives the total length of the dictionary. This would be equal to the number of items in the dictionary.
              </p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p>str(dict)</p>
              <p>Produces a printable string representation of a dictionary</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p>type(variable)</p>
              <p>Returns the type of the passed variable. If passed variable is dictionary, then it would return a
                dictionary type.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p>dict.clear()</p>
              <p>Removes all elements of dictionary <i>dict</i></p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p>dict.copy()</p>
              <p>Returns a shallow copy of dictionary <i>dict</i></p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p>dict.fromkeys()</p>
              <p>Create a new dictionary with keys from seq and values <i>set</i> to <i>value</i>.</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p>dict.get(key, default=None)</p>
              <p>For <i>key</i> key, returns value or default if key not in dictionary</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p>dict.has_key(key)</p>
              <p>Returns <i>true</i> if key in dictionary <i>dict</i>, <i>false</i> otherwise</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p>dict.items()</p>
              <p>Returns a list of <i>dict</i>'s (key, value) tuple pairs</p>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>
              <p>dict.keys()</p>
              <p>Returns list of dictionary dict's keys</p>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p>dict.setdefault(key, default=None)</p>
              <p>Similar to get(), but will set dict[key]=default if <i>key</i> is not already in dict</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p>dict.update(dict2)</p>
              <p>Adds dictionary <i>dict2</i>'s key-values pairs to <i>dict</i></p>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>
              <p>dict.values()</p>
              <p>Returns list of dictionary <i>dict</i>'s values</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h1 id="10"> &#128488; Functions</h1>
      <p>A function is a block of organized, reusable code that is used to perform a single, related action. Functions
        provide better modularity for your application and a high degree of code reusing.</p>
      <p>As you already know, Python gives you many built-in functions like print(), etc. but you can also create your
        own functions. These functions are called <i>user-defined functions.</i></p>
      <h2>Defining a Function</h2>
      <p>You can define functions to provide the required functionality. Here are simple rules to define a function in
        Python.</p>
      <ul class="list">
        <li>
          <p>Function blocks begin with the keyword <b>def</b> followed by the function name and parentheses ( ( ) ).
          </p>
        </li>
        <li>
          <p>Any input parameters or arguments should be placed within these parentheses. You can also define parameters
            inside these parentheses.</p>
        </li>
        <li>
          <p>The first statement of a function can be an optional statement - the documentation string of the function
            or <i>docstring</i>.</p>
        </li>
        <li>
          <p>The code block within every function starts with a colon (:) and is indented.</p>
        </li>
        <li>
          <p>The statement return [expression] exits a function, optionally passing back an expression to the caller. A
            return statement with no arguments is the same as return None.</p>
        </li>
      </ul>
      <h2>Syntax</h2>
      <code>def functionname( parameters ): <br>
            "function_docstring" <br>
            function_suite <br>
            return [expression]
          </code>
      <p>By default, parameters have a positional behavior and you need to inform them in the same order that they were
        defined.</p>
      <h2>Calling a Function</h2>
      <p>Defining a function only gives it a name, specifies the parameters that are to be included in the function and
        structures the blocks of code.</p>
      <p>Once the basic structure of a function is finalized, you can execute it by calling it from another function or
        directly from the Python prompt.</p>
      <h2>Pass by reference vs value</h2>
      <p>All parameters (arguments) in the Python language are passed by reference. It means if you change what a
        parameter refers to within a function, the change also reflects back in the calling function.</p>
      <h2>Function Arguments</h2>
      <p>You can call a function by using the following types of formal arguments </p>
      <ul class="list">
        <li>Required arguments</li>
        <li>Keyword arguments</li>
        <li>Default arguments</li>
        <li>Variable-length arguments</li>
      </ul>
      <h2>Required arguments</h2>
      <p>Required arguments are the arguments passed to a function in correct positional order. Here, the number of
        arguments in the function call should match exactly with the function definition.</p>
      <h2>Keyword arguments</h2>
      <p>Keyword arguments are related to the function calls. When you use keyword arguments in a function call, the
        caller identifies the arguments by the parameter name.</p>
      <p>This allows you to skip arguments or place them out of order because the Python interpreter is able to use the
        keywords provided to match the values with parameters.</p>
      <h2>Default arguments</h2>
      <p>A default argument is an argument that assumes a default value if a value is not provided in the function call
        for that argument.</p>
      <h2>Variable-length arguments</h2>
      <p>You may need to process a function for more arguments than you specified while defining the function. These
        arguments are called <i>variable-length</i> arguments and are not named in the function definition, unlike
        required and default arguments.</p>
      <p>Syntax for a function with non-keyword variable arguments is this </p>
      <code>
            def functionname([formal_args,] *var_args_tuple ): <br>
            "function_docstring" <br>
            function_suite <br>
            return [expression]
          </code>
      <h2>The <i>Anonymous</i> Functions</h2>
      <p>These functions are called anonymous because they are not declared in the standard manner by using the
        <i>def</i> keyword. You can use the <i>lambda</i> keyword to create small anonymous functions.</p>
      <ul class="list">
        <li>
          <p>Lambda forms can take any number of arguments but return just one value in the form of an expression. They
            cannot contain commands or multiple expressions.</p>
        </li>
        <li>
          <p>An anonymous function cannot be a direct call to print because lambda requires an expression</p>
        </li>
        <li>
          <p>Lambda functions have their own local namespace and cannot access variables other than those in their
            parameter list and those in the global namespace.</p>
        </li>
        <li>
          <p>Although it appears that lambda's are a one-line version of a function, they are not equivalent to inline
            statements in C or C++, whose purpose is by passing function stack allocation during invocation for
            performance reasons.</p>
        </li>
      </ul>
      <h2>Syntax</h2>
      <p>The syntax of lambda functions is as follows :<code> lambda [arg1 [,arg2,.....argn]]:expression </code></p>
      <h2>Scope of Variables</h2>
      <p>All variables in a program may not be accessible at all locations in that program. This depends on where you
        have declared a variable.</p>
      <p>The scope of a variable determines the portion of the program where you can access a particular identifier.
        There are two basic scopes of variables in Python </p>
      <ul class="list">
        <li>Global variables</li>
        <li>Local variables</li>
      </ul>
      <h2>Global vs. Local variables</h2>
      <p>Variables that are defined inside a function body have a local scope, and those defined outside have a global
        scope.</p>
      <p>This means that local variables can be accessed only inside the function in which they are declared, whereas
        global variables can be accessed throughout the program body by all functions. When you call a function, the
        variables declared inside it are brought into scope.</p>
      <h1 id="11"> &#128488; Modules</h1>
      <p>A module allows you to logically organize your Python code. Grouping related code into a module makes the code
        easier to understand and use. A module is a Python object with arbitrarily named attributes that you can bind
        and reference.</p>
      <p>Simply, a module is a file consisting of Python code. A module can define functions, classes and variables. A
        module can also include runnable code.</p>
      <h2>The <i>import</i> Statement</h2>
      <p>You can use any Python source file as a module by executing an import statement in some other Python source
        file.</p>
      <p> The <i>import</i> has the following syntax  <code>import module1[, module2[,... moduleN]</code></p>
      <p>When the interpreter encounters an import statement, it imports the module if the module is present in the
        search path. A search path is a list of directories that the interpreter searches before importing a module.</p>
      <p>A module is loaded only once, regardless of the number of times it is imported. This prevents the module
        execution from happening over and over again if multiple imports occur.</p>
      <h2>Namespaces and Scoping</h2>
      <p>Variables are names (identifiers) that map to objects. A <i>namespace</i> is a dictionary of variable names
        (keys) and their corresponding objects (values).</p>
      <p>A Python statement can access variables in a <i>local namespace</i> and in the <i>global namespace</i>. If a
        local and a global variable have the same name, the local variable shadows the global variable.</p>
      <p>Each function has its own local namespace. Class methods follow the same scoping rule as ordinary functions.
      </p>
      <p>Python makes educated guesses on whether variables are local or global. It assumes that any variable assigned a
        value in a function is local.</p>
      <p>Therefore, in order to assign a value to a global variable within a function, you must first use the global
        statement.</p>
      <p>The statement <i>global VarName</i> tells Python that VarName is a global variable. Python stops searching the
        local namespace for the variable.</p>
      <h2>Packages in Python</h2>
      <p>A package is a hierarchical file directory structure that defines a single Python application environment that
        consists of modules and subpackages and sub-subpackages, and so on.</p>
      <h1 id="12"> &#128488; Exceptions Handling</h1>
      <p>Python provides two very important features to handle any unexpected error in your Python programs and to add
        debugging capabilities in them </p>
      <ul class="list">
        <li>
          <p><b>Exception Handling</b></p>
        </li>
        <li>
          <p><b>Assertions</b></p>
        </li>
      </ul>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Exception Name &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>Exception</b></p>
              <p>Base class for all exceptions</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>StopIteration</b></p>
              <p>Raised when the next() method of an iterator does not point to any object.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>SystemExit</b></p>
              <p>Raised by the sys.exit() function.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>StandardError</b></p>
              <p>Base class for all built-in exceptions except StopIteration and SystemExit.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p><b>ArithmeticError</b></p>
              <p>Base class for all errors that occur for numeric calculation.</p>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <p><b>OverflowError</b></p>
              <p>Raised when a calculation exceeds maximum limit for a numeric type.</p>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <p><b>FloatingPointError</b></p>
              <p>Raised when a floating point calculation fails.</p>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>
              <p><b>ZeroDivisionError</b></p>
              <p>Raised when division or modulo by zero takes place for all numeric types.</p>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>
              <p><b>AssertionError</b></p>
              <p>Raised in case of failure of the Assert statement.</p>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>
              <p><b>AttributeError</b></p>
              <p>Raised in case of failure of attribute reference or assignment.</p>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>
              <p><b>EOFError</b></p>
              <p>Raised when there is no input from either the raw_input() or input() function and the end of file is
                reached.</p>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>
              <p><b>ImportError</b></p>
              <p>Raised when an import statement fails.</p>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>
              <p><b>KeyboardInterrupt</b></p>
              <p>Raised when the user interrupts program execution, usually by pressing Ctrl+c.</p>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>
              <p><b>LookupError</b></p>
              <p>Base class for all lookup errors.</p>
            </td>
          </tr>
          <tr>
            <td>15</td>
            <td>
              <p><b>IndexError</b></p>
              <p>Raised when an index is not found in a sequence.</p>
            </td>
          </tr>
          <tr>
            <td>16</td>
            <td>
              <p><b>KeyError</b></p>
              <p>Raised when the specified key is not found in the dictionary.</p>
            </td>
          </tr>
          <tr>
            <td>17</td>
            <td>
              <p><b>NameError</b></p>
              <p>Raised when an identifier is not found in the local or global namespace.</p>
            </td>
          </tr>
          <tr>
            <td>18</td>
            <td>
              <p><b>UnboundLocalError</b></p>
              <p>Raised when trying to access a local variable in a function or method but no value has been assigned to
                it.</p>
            </td>
          </tr>
          <tr>
            <td>19</td>
            <td>
              <p><b>EnvironmentError</b></p>
              <p>Base class for all exceptions that occur outside the Python environment.</p>
            </td>
          </tr>
          <tr>
            <td>20</td>
            <td>
              <p><b>IOError</b></p>
              <p>Raised when an input/ output operation fails, such as the print statement or the open() function when
                trying to open a file that does not exist.</p>
            </td>
          </tr>
          <tr>
            <td>21</td>
            <td>
              <p><b>IOError</b></p>
              <p>Raised for operating system-related errors.</p>
            </td>
          </tr>
          <tr>
            <td>22</td>
            <td>
              <p><b>SyntaxError</b></p>
              <p>Raised when there is an error in Python syntax.</p>
            </td>
          </tr>
          <tr>
            <td>23</td>
            <td>
              <p><b>IndentationError</b></p>
              <p>Raised when indentation is not specified properly.</p>
            </td>
          </tr>
          <tr>
            <td>24</td>
            <td>
              <p><b>SystemError</b></p>
              <p>Raised when the interpreter finds an internal problem, but when this error is encountered the Python
                interpreter does not exit.</p>
            </td>
          </tr>
          <tr>
            <td>25</td>
            <td>
              <p><b>SystemExit</b></p>
              <p>Raised when Python interpreter is quit by using the sys.exit() function. If not handled in the code,
                causes the interpreter to exit.</p>
            </td>
          </tr>
          <tr>
            <td>26</td>
            <td>
              <p><b>TypeError</b></p>
              <p>Raised when an operation or function is attempted that is invalid for the specified data type.</p>
            </td>
          </tr>
          <tr>
            <td>27</td>
            <td>
              <p><b>ValueError</b></p>
              <p>Raised when the built-in function for a data type has the valid type of arguments, but the arguments
                have invalid values specified.</p>
            </td>
          </tr>
          <tr>
            <td>28</td>
            <td>
              <p><b>RuntimeError</b></p>
              <p>Raised when a generated error does not fall into any category.</p>
            </td>
          </tr>
          <tr>
            <td>29</td>
            <td>
              <p><b>NotImplementedError</b></p>
              <p>Raised when an abstract method that needs to be implemented in an inherited class is not actually
                implemented.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h3>The <i>assert</i> Statement</h3>
      <p>When it encounters an assert statement, Python evaluates the accompanying expression, which is hopefully true.
        If the expression is false, Python raises an <i>AssertionError</i> exception.</p>
      <p>The <b>syntax</b> for assert is <code>assert Expression[, Arguments]</code></p>
      <p>If the assertion fails, Python uses ArgumentExpression as the argument for the AssertionError. AssertionError
        exceptions can be caught and handled like any other exception using the try-except statement, but if not
        handled, they will terminate the program and produce a traceback.</p>
      <h2>What is Exception?</h2>
      <p>An exception is an event, which occurs during the execution of a program that disrupts the normal flow of the
        program's instructions. In general, when a Python script encounters a situation that it cannot cope with, it
        raises an exception. An exception is a Python object that represents an error.</p>
      <p>When a Python script raises an exception, it must either handle the exception immediately otherwise it
        terminates and quits.</p>
      <h2>Handling an exception</h2>
      <p>If you have some <i>suspicious</i> code that may raise an exception, you can defend your program by placing the
        suspicious code in a <b>try:</b> block. After the try: block, include an <b>except:</b> statement, followed by a
        block of code which handles the problem as elegantly as possible.</p>
      <p>Syntax of <i>try....except...else</i> blocks  <br><code>try: <br>
            You do your operations here; <br>
            ...................... <br>
            except ExceptionI: <br>
            If there is ExceptionI, then execute this block. <br>
            except ExceptionII: <br>
            If there is ExceptionII, then execute this block. <br>
            ...................... <br>
            else: <br>
            If there is no exception then execute this block. </code>
      </p>
      <p>Here are few important points about the above-mentioned syntax </p>
      <ul class="list">
        <li>
          <p>A single try statement can have multiple except statements. This is useful when the try block contains
            statements that may throw different types of exceptions.</p>
        </li>
        <li>
          <p>You can also provide a generic except clause, which handles any exception.</p>
        </li>
        <li>
          <p>After the except clause(s), you can include an else-clause. The code in the else-block executes if the code
            in the try: block does not raise an exception.</p>
        </li>
        <li>
          <p>The else-block is a good place for code that does not need the try: block's protection.</p>
        </li>
      </ul>
      <h1 id="13"> &#128488; Object Oriented</h1>
      <p>Python has been an object-oriented language since it existed. Because of this, creating and using classes and
        objects are downright easy. This chapter helps you become an expert in using Python's object-oriented
        programming support.</p>
      <p>If you do not have any previous experience with object-oriented (OO) programming, you may want to consult an
        introductory course on it or at least a tutorial of some sort so that you have a grasp of the basic concepts.
      </p>
      <h2>Overview of OOP Terminology</h2>
      <ul class="list">
        <li>
          <p><b>Class</b>  A user-defined prototype for an object that defines a set of attributes that characterize
            any object of the class. The attributes are data members (class variables and instance variables) and
            methods, accessed via dot notation.</p>
        </li>
        <li>
          <p><b>Class variable</b>  A variable that is shared by all instances of a class. Class variables are defined
            within a class but outside any of the class's methods. Class variables are not used as frequently as
            instance variables are.</p>
        </li>
        <li>
          <p><b>Data member</b>  A class variable or instance variable that holds data associated with a class and its
            objects.</p>
        </li>
        <li>
          <p><b>Function overloading</b>  The assignment of more than one behavior to a particular function. The
            operation performed varies by the types of objects or arguments involved.</p>
        </li>
        <li>
          <p><b>Instance variable</b>  A variable that is defined inside a method and belongs only to the current
            instance of a class.</p>
        </li>
        <li>
          <p><b>Inheritance</b>  The transfer of the characteristics of a class to other classes that are derived from
            it.</p>
        </li>
        <li>
          <p><b>Instance</b>  An individual object of a certain class. An object obj that belongs to a class Circle,
            for example, is an instance of the class Circle.</p>
        </li>
        <li>
          <p><b>Instantiation</b>  The creation of an instance of a class.</p>
        </li>
        <li>
          <p><b>Method</b>  A special kind of function that is defined in a class definition.</p>
        </li>
        <li>
          <p><b>Object</b>  A unique instance of a data structure that's defined by its class. An object comprises both
            data members (class variables and instance variables) and methods.</p>
        </li>
        <li>
          <p><b>Operator overloading</b>  The assignment of more than one function to a particular operator.</p>
        </li>
      </ul>
      <h2>Creating Classes</h2>
      <p>The <i>class</i> statement creates a new class definition. The name of the class immediately follows the
        keyword <i>class</i> followed by a colon as follows </p>
      <p>Syntax: <code>class ClassName: <br>
            'Optional class documentation string' <br>
            class_suite</code>
      </p>
      <h2>Creating Instance Objects</h2>
      <p>To create instances of a class, you call the class using class name and pass in whatever arguments its
        <i>__init__</i> method accepts.</p>
      <h2>Accessing Attributes</h2>
      <p>You access the object's attributes using the dot operator with object. Class variable would be accessed using
        class name as follows <code>emp1.displayEmployee()</code> where emp1 is the class name</p>
      <h2>Class Inheritance</h2>
      <p>Instead of starting from scratch, you can create a class by deriving it from a preexisting class by listing the
        parent class in parentheses after the new class name.</p>
      <p>The child class inherits the attributes of its parent class, and you can use those attributes as if they were
        defined in the child class. A child class can also override data members and methods from the parent.</p>
      <h3>Syntax for Inheritance:</h3>
      <p>Derived classes are declared much like their parent class; however, a list of base classes to inherit from is
        given after the class name </p>
      <code>class SubClassName (ParentClass1[, ParentClass2, ...]): <br>
            'Optional class documentation string' <br>
            class_suite
          </code>
      <h2>Base Overloading Methods</h2>
      <table class="table table-bordered" width=595px>
        <tbody>
          <tr>
            <th style="text-align:center;width:10%">Sr.No.</th>
            <th style="text-align:center;">Method, Description &amp; Sample Call</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>__init__ ( self [,args...] )</b></p>
              <p>Constructor (with any optional arguments)</p>
              <p>Sample Call : <i>obj = className(args)</i></p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>__del__( self )</b></p>
              <p>Destructor, deletes an object</p>
              <p>Sample Call : <i>del obj</i></p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>__repr__( self )</b></p>
              <p>Evaluable string representation</p>
              <p>Sample Call : <i>repr(obj)</i></p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>__str__( self )</b></p>
              <p>Printable string representation</p>
              <p>Sample Call : <i>str(obj)</i></p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p><b>__cmp__ ( self, x )</b></p>
              <p>Object comparison</p>
              <p>Sample Call : <i>cmp(obj, x)</i></p>
            </td>
          </tr>
        </tbody>
      </table>
      <div>
      </div>
    </div>
</body>
</html>