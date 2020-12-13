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
  <title>C Programming</title>
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
        <a href="#01">&#128488; C- home</a>
        <a href="#02">&#128488; C- data types</a>
        <a href="#03">&#128488; C- Variables</a>
        <a href="#04">&#128488; C- Constants</a>
        <a href="#05">&#128488; C- Storage Classes</a>
        <a href="#06">&#128488; C- Operators</a>
        <a href="#07">&#128488; C- Decision Making</a>
        <a href="#08">&#128488; C- Loops</a>
        <a href="#09">&#128488; C- Functions</a>
        <a href="#10">&#128488; C- Arrays</a>
        <a href="#11">&#128488; C- Pointer</a>
      </div>


    </div>
    <div id="content">
      <h1> &#128488; C Tutorial</h1>
      <p >C programming is a general-purpose, procedural, imperative computer programming language developed in
        1972 by
        Dennis M. Ritchie
        at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer
        language. It keeps
        fluctuating at number one scale of popularity along with Java programming language, which is also equally
        popular and most widely used
        among modern software programmers.</p>
      <h1>Why to Learn C Programming?</h1>
      <p>C programming language is a MUST for students and working professionals to become a great Software Engineer
        specially when they are working in Software Development Domain. I will list down some of the key advantages of
        learning C Programming:</p>
      <ul class="list">
        <li>
          <p>Easy to learn</p>
        </li>
        <li>
          <p>Structured language</p>
        </li>
        <li>
          <p>It produces efficient programs</p>
        </li>
        <li>
          <p>It can handle low-level activities</p>
        </li>
        <li>
          <p>It can be compiled on a variety of computer platforms</p>
        </li>
      </ul>
      <h1 id="02">&#128488; C - Data Types</h1>
      <p>Data types in c refer to an extensive system used for declaring variables or functions of different types.
        The type of a variable determines how much space it occupies in storage and how the bit pattern stored is
        interpreted.</p>
      <table>
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Types &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>Basic Types</b></p>
              <p>They are arithmetic types and are further classified into: (a) integer types and (b) floating-point
                types.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>Enumerated types</b></p>
              <p>They are again arithmetic types and they are used to define variables that can only assign certain
                discrete integer values throughout the program.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>The type void</b></p>
              <p>The type specifier <i>void</i> indicates that no value is available.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>Derived types</b></p>
              <p>They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e)
                Function types.</p>
            </td>
          </tr>
        </tbody>
      </table>

   
      <h2>Integer Types</h2>
      <p>The following table provides the details of standard integer types with their storage sizes and value ranges
        </p>

      <table style="text-align:center;">
        <tbody>
          <tr>
            <th style="width:23%;text-align:center;">Type</th>
            <th style="width:20%;text-align:center;">Storage size</th>
            <th style="text-align:center;">Value range</th>
          </tr>
          <tr>
            <td>char</td>
            <td>1 byte</td>
            <td>-128 to 127 or 0 to 255</td>
          </tr>
          <tr>
            <td>unsigned char</td>
            <td>1 byte</td>
            <td>0 to 255</td>
          </tr>
          <tr>
            <td>signed char</td>
            <td>1 byte</td>
            <td>-128 to 127</td>
          </tr>
          <tr>
            <td style="vertical-align:middle;">int</td>
            <td style="vertical-align:middle;">2 or 4 bytes</td>
            <td>-32,768 to 32,767 or -2,147,483,648 to 2,147,483,647</td>
          </tr>
          <tr>
            <td>unsigned int</td>
            <td>2 or 4 bytes</td>
            <td>0 to 65,535 or 0 to 4,294,967,295</td>
          </tr>
          <tr>
            <td>short</td>
            <td>2 bytes</td>
            <td>-32,768 to 32,767</td>
          </tr>
          <tr>
            <td>unsigned short</td>
            <td>2 bytes</td>
            <td>0 to 65,535</td>
          </tr>
          <tr>
            <td>long</td>
            <td>8 bytes or (4bytes for 32 bit OS)</td>
            <td>-9223372036854775808 to 9223372036854775807</td>
          </tr>
          <tr>
            <td>unsigned long</td>
            <td>8 bytes</td>
            <td>0 to 18446744073709551615</td>
          </tr>
        </tbody>
      </table>
      <h2>Floating-Point Types</h2>
      <p>The following table provide the details of standard floating-point types with storage sizes and value ranges
        and their precision </p>
      <table style="text-align:center;">
        <tbody>
          <tr>
            <th style="text-align:center;">Type</th>
            <th style="text-align:center;">Storage size</th>
            <th style="text-align:center;">Value range</th>
            <th style="text-align:center;">Precision</th>
          </tr>
          <tr>
            <td>float</td>
            <td>4 byte</td>
            <td>1.2E-38 to 3.4E+38</td>
            <td>6 decimal places</td>
          </tr>
          <tr>
            <td>double</td>
            <td>8 byte</td>
            <td>2.3E-308 to 1.7E+308</td>
            <td>15 decimal places</td>
          </tr>
          <tr>
            <td>long double</td>
            <td>10 byte</td>
            <td>3.4E-4932 to 1.1E+4932</td>
            <td>19 decimal places</td>
          </tr>
        </tbody>
      </table>

      <h1 id="03">&#128488; C - Variables</h1>
      <p>The name of a variable can be composed of letters, digits, and the underscore character. It must begin with
        either a letter or an underscore. Upper and lowercase letters are distinct because C is case-sensitive. Based
        on the basic types explained in the previous chapter, there will be the following basic variable types </p>
      <p>A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in C
        has a specific type, which determines the size and layout of the variable's memory; the range of values that
        can be stored within that memory; and the set of operations that can be applied to the variable.</p>
      <table>
        <tbody>
          <tr>
            <th>Sr.No.</th>
            <th style="text-align:center;">Type &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <p><b>char</b></p>
              <p>Typically a single octet(one byte). It is an integer type.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <p><b>int</b></p>
              <p>The most natural size of integer for the machine.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <p><b>float</b></p>
              <p>A single-precision floating point value.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <p><b>double</b></p>
              <p>A double-precision floating point value.</p>
            </td>
            <p>Here, <b>type</b> must be a valid C data type including char, w_char, int, float, double, bool, or any
              user-defined object; and <b>variable_list</b> may consist of one or more identifier names separated by
              commas. Some valid declarations are shown here </p>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <p><b>void</b></p>
              <p>Represents the absence of type.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <p>C programming language also allows to define various other types of variables, which we will cover in
        subsequent chapters like Enumeration, Pointer, Array, Structure, Union, etc. For this chapter, let us study
        only basic variable types.</p>
      <h2>Variable Definition in C</h2>
      <p>A variable definition tells the compiler where and how much storage to create for the variable. A variable
        definition specifies a data type and contains a list of one or more variables of that type as follows </p>
      <pre>type variable_list;
          </pre>
      <pre>int    i, j, k;
            char   c, ch;
            float  f, salary;
            double d;
            </pre>
      <p>The line <b>int i, j, k;</b> declares and defines the variables i, j, and k; which instruct the compiler to
        create variables named i, j and k of type int.</p>
      <p>Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of an
        equal sign followed by a constant expression as follows </p>
      <pre>type variable_name = value;
            </pre>

      <p>Some examples are </p>
      <pre>extern int d = 3, f = 5;    // declaration of d and f. 
              int d = 3, f = 5;           // definition and initializing d and f. 
              byte z = 22;                // definition and initializes z. 
              char x = 'x';               // the variable x has the value 'x'.
              </pre>
      <p>For definition without an initializer: variables with static storage duration are implicitly initialized with
        NULL (all bytes have the value 0); the initial value of all other variables are undefined.</p>
      <h2>Variable Declaration in C</h2>
      <p>A variable declaration provides assurance to the compiler that there exists a variable with the given type and
        name so that the compiler can proceed for further compilation without requiring the complete detail about the
        variable. A variable definition has its meaning at the time of compilation only, the compiler needs actual
        variable definition at the time of linking the program.</p>
      <p>A variable declaration is useful when you are using multiple files and you define your variable in one of the
        files which will be available at the time of linking of the program. You will use the keyword <b>extern</b> to
        declare a variable at any place. Though you can declare a variable multiple times in your C program, it can be
        defined only once in a file, a function, or a block of code.</p>
      <h3>Example</h3>
      <p>Try the following example, where variables have been declared at the top, but they have been defined and
        initialized inside the main function </p>
      <pre><span >#include</span><span > </span><span >&lt;stdio.h&gt;</span><span >

              </span><span >// Variable declaration:</span><span >
              </span><span >extern</span><span > </span><span >int</span><span c> a</span><span >,</span><span > b</span><span >;</span><span c>
              </span><span >extern</span><span > </span><span >int</span><span c> c</span><span>;</span><span >
              </span><span >extern</span><span > </span><span>float</span><span c> f</span><span >;</span><span >
              
              </span><span >int</span><span c> main </span><span >()</span><span c> </span><span >{</span><span c>
              
                 </span><span >/* variable definition: */</span><span >
                 </span><span >int</span><span c> a</span><span c>,</span><span c> b</span><span >;</span><span c>
                 </span><span>int</span><span c> c</span><span >;</span><span c>
                 </span><span >float</span><span c> f</span><span >;</span><span c>
               
                 </span><span >/* actual initialization */</span><span c>
                 a </span><span >=</span><span c> </span><span >10</span><span >;</span><span c>
                 b </span><span >=</span><span c> </span><span >20</span><span >;</span><span c>
                
                 c </span><span >=</span><span c> a </span><span >+</span><span c> b</span><span >;</span><span c>
                 printf</span><span >(</span><span class="str">"value of c : %d \n"</span><span >,</span><span c> c</span><span >);</span><span c>
              
                 f </span><span >=</span><span c> </span><span >70.0</span><span >/</span><span >3.0</span><span >;</span><span c>
                 printf</span><span >(</span><span class="str">"value of f : %f \n"</span><span >,</span><span c> f</span><span >);</span><span c>
               
                 </span><span >return</span><span c> </span><span >0</span><span >;</span><span c>
              </span><span >}</span></pre>

      <h1 id="04">&#128488; C - Constants and Literals</h1>
      <p>Constants refer to fixed values that the program may not alter during its execution. These fixed values are
        also called <b>literals</b>.</p>
      <p>Constants can be of any of the basic data types like <i>an integer constant, a floating constant, a character
          constant, or a string literal</i>. There are enumeration constants as well.</p>
      <p>Constants are treated just like regular variables except that their values cannot be modified after their
        definition.</p>
      <h2>Integer Literals</h2>
      <p>An integer literal can be a decimal, octal, or hexadecimal constant. A prefix specifies the base or radix: 0x
        or 0X for hexadecimal, 0 for octal, and nothing for decimal.</p>
      <p>An integer literal can also have a suffix that is a combination of U and L, for unsigned and long,
        respectively. The suffix can be uppercase or lowercase and can be in any order.</p>
      <p>Here are some examples of integer literals </p>
      <pre>212         /* Legal */
                215u        /* Legal */
                0xFeeL      /* Legal */
                078         /* Illegal: 8 is not an octal digit */
                032UU       /* Illegal: cannot repeat a suffix */
                </pre>
      <p>Following are other examples of various types of integer literals </p>
      <pre>85         /* decimal */
                  0213       /* octal */
                  0x4b       /* hexadecimal */
                  30         /* int */
                  30u        /* unsigned int */
                  30l        /* long */
                  30ul       /* unsigned long */
                  </pre>
      <h2>Floating-point Literals</h2>
      <p>A floating-point literal has an integer part, a decimal point, a fractional part, and an exponent part. You can
        represent floating point literals either in decimal form or exponential form.</p>
      <p>While representing decimal form, you must include the decimal point, the exponent, or both; and while
        representing exponential form, you must include the integer part, the fractional part, or both. The signed
        exponent is introduced by e or E.</p>
      <p>While representing decimal form, you must include the decimal point, the exponent, or both; and while
        representing exponential form, you must include the integer part, the fractional part, or both. The signed
        exponent is introduced by e or E.
      <p>While representing decimal form, you must include the decimal point, the exponent, or both; and while
        representing exponential form, you must include the integer part, the fractional part, or both. The signed
        exponent is introduced by e or E.</p>
      </p>
      <p>Here are some examples of floating-point literals </p>
      <pre>3.14159       /* Legal */
                    314159E-5L    /* Legal */
                    510E          /* Illegal: incomplete exponent */
                    210f          /* Illegal: no decimal or exponent */
                    .e55          /* Illegal: missing integer or fraction */
                    </pre>

      <h2>Character Constants</h2>

      <p>Character literals are enclosed in single quotes, e.g., 'x' can be stored in a simple variable of <b>char</b>
        type.</p>
      <p>A character literal can be a plain character (e.g., 'x'), an escape sequence (e.g., '\t'), or a universal
        character (e.g., '\u02C0').</p>
      <p>There are certain characters in C that represent special meaning when preceded by a backslash for example,
        newline (\n) or tab (\t).</p>
      <ul>
        <li>

          <ul>
            <table style="text-align:center;">
              <tbody>
                <tr>
                  <th style="width:35%;text-align:center;">Escape sequence</th>
                  <th style="text-align:center;">Meaning</th>
                </tr>
                <tr>
                  <td>\\</td>
                  <td>\ character</td>
                </tr>
                <tr>
                  <td>\'</td>
                  <td> ' character</td>
                </tr>
                <tr>
                  <td>\"</td>
                  <td>" character</td>
                </tr>
                <tr>
                  <td>\?</td>
                  <td>? character</td>
                </tr>
                <tr>
                  <td>\a</td>
                  <td>Alert or bell</td>
                </tr>
                <tr>
                  <td>\b</td>
                  <td>Backspace</td>
                </tr>
                <tr>
                  <td>\f</td>
                  <td>Form feed</td>
                </tr>
                <tr>
                  <td>\n</td>
                  <td>Newline</td>
                </tr>
                <tr>
                  <td>\r</td>
                  <td>Carriage return</td>
                </tr>
                <tr>
                  <td>\t</td>
                  <td>Horizontal tab</td>
                </tr>
                <tr>
                  <td>\v</td>
                  <td>Vertical tab</td>
                </tr>
                <tr>
                  <td>\ooo</td>
                  <td>Octal number of one to three digits</td>
                </tr>
                <tr>
                  <td>\xhh . . .</td>
                  <td>Hexadecimal number of one or more digits</td>
                </tr>
              </tbody>
            </table>
          </ul>
        </li>
      </ul>
      <p>Following is the example to show a few escape sequence characters </p>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >

                      </span><span >int</span><span > main</span><span >()</span><span > </span><span >{</span><span >
                         printf</span><span >(</span><span class="str">"Hello\tWorld\n\n"</span><span >);</span><span >
                      
                         </span><span >return</span><span > </span><span >0</span><span >;</span><span >
                      </span><span >}</span></pre>
      <p>When the above code is compiled and executed, it produces the following result </p>

      <pre>Hello World
</pre>

      <h1 id="05">&#128488; C - Storage Classes</h1>
      <hr>
      <p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program.
        They precede the type that they modify. We have four different storage classes in a C program 
      <p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program.
        They precede the type that they modify. We have four different storage classes in a C program </p>
      <p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program.
        They precede the type that they modify. We have four different storage classes in a C program 
      <p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program.
        They precede the type that they modify. We have four different storage classes in a C program </p>
      </p>
      </p>
      <ul class="list">
        <li>auto</li>
        <li>register</li>
        <li>static</li>
        <li>extern</li>
      </ul>
      <h2>The auto Storage Class</h2>
      <p>The <b>auto</b> storage class is the default storage class for all local variables.</p>
      <pre><span>{</span><span >
  </span><span ">int</span><span > mount</span><span>;</span><span >
  </span><span ">auto</span><span > </span><span ">int</span><span > month</span><span>;</span><span >
</span><span>}</span></pre>
      <h2>The register Storage Class</h2>
      <p>The <b>register</b> storage class is used to define local variables that should be stored in a register instead
        of RAM. This means that the variable has a maximum size equal to the register size (usually one word) and can't
        have the unary '&amp;' operator applied to it (as it does not have a memory location).</p>
      <pre><span>{</span><span >
</span><span ">register</span><span > </span><span ">int</span><span >  miles</span><span>;</span><span >
</span><span>}</span></pre>
      The register should only be used for variables that require quick access such as counters. It should also be noted
      that defining 'register' does not mean that the variable will be stored in a register. It means that it MIGHT be
      stored in a register depending on hardware and implementation restrictions.
      <h2>The static Storage Class</h2>
      <p>The <b>static</b> storage class instructs the compiler to keep a local variable in existence during the
        life-time of the program instead of creating and destroying it each time it comes into and goes out of scope.
        Therefore, making local variables static allows them to maintain their values between function calls.</p>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >
 
</span><span >/* function declaration */</span><span >
</span><span >void</span><span > func</span><span>(</span><span >void</span><span>);</span><span >
 
</span><span >static</span><span > </span><span">int</span><span > count </span><span>=</span><span > </span><span >5</span><span>;</span><span > </span><span >/* global variable */</span><span >
 
main</span><span>()</span><span > </span><span>{</span><span >

   </span><span >while</span><span>(</span><span >count</span><span>--)</span><span > </span><span>{</span><span >
      func</span><span>();</span><span >
   </span><span>}</span><span >
	
   </span><span >return</span><span > </span><span >0</span><span>;</span><span >
</span><span>}</span><span >

</span><span >/* function definition */</span><span >
</span><span >void</span><span > func</span><span>(</span><span > </span><span ">void</span><span > </span><span>)</span><span > </span><span>{</span><span >

   </span><span >static</span><span > </span><span >int</span><span > i </span><span>=</span><span > </span><span >5</span><span>;</span><span > </span><span >/* local static variable */</span><span >
   i</span><span>++;</span><span >

   printf</span><span>(</span><span class="str">"i is %d and count is %d\n"</span><span>,</span><span > i</span><span>,</span><span > count</span><span>);</span><span >
</span><span>}</span></pre>
      <p>When the above code is compiled and executed, it produces the following result </p>
      <pre>i is 6 and count is 4
  i is 7 and count is 3
  i is 8 and count is 2
  i is 9 and count is 1
  i is 10 and count is 0
  </pre>

      <h1 id="06">&#128488; C - Operators</h1>
      <hr>
      <p>An operator is a symbol that tells the compiler to perform specific mathematical or logical functions. C
        language is rich in built-in operators and provides the following types of operators </p>
      <ul class="list">
        <li>Arithmetic Operators</li>
        <li>Relational Operators</li>
        <li>Logical Operators</li>
        <li>Bitwise Operators</li>
        <li>Assignment Operators</li>
        <li>Misc Operators</li>
      </ul>
      <p>We will, in this chapter, look into the way each operator works.</p>
      <h2>Arithmetic Operators</h2>
      <p>The following table lists the assignment operators supported by the C language </p>
      <p><a href="/cprogramming/c_assignment_operators.htm">Show Examples</a></p>
      <table>
        <tbody>
          <tr>
            <th style="width:10%;text-align:center;">Operator</th>
            <th style="width:55%;text-align:center;">Description</th>
            <th style="text-align:center;">Example</th>
          </tr>
          <tr>
            <td>=</td>
            <td>Simple assignment operator. Assigns values from right side operands to left side operand</td>
            <td style="vertical-align:middle;">C = A + B will assign the value of A + B to C</td>
          </tr>
          <tr>
            <td>+=</td>
            <td>Add AND assignment operator. It adds the right operand to the left operand and assign the result to the
              left operand.</td>
            <td style="vertical-align:middle;">C += A is equivalent to C = C + A</td>
          </tr>
          <tr>
            <td>-=</td>
            <td>Subtract AND assignment operator. It subtracts the right operand from the left operand and assigns the
              result to the left operand.</td>
            <td style="vertical-align:middle;">C -= A is equivalent to C = C - A</td>
          </tr>
          <tr>
            <td>*=</td>
            <td>Multiply AND assignment operator. It multiplies the right operand with the left operand and assigns the
              result to the left operand.</td>
            <td style="vertical-align:middle;">C *= A is equivalent to C = C * A</td>
          </tr>
          <tr>
            <td>/=</td>
            <td>Divide AND assignment operator. It divides the left operand with the right operand and assigns the
              result to the left operand.</td>
            <td style="vertical-align:middle;">C /= A is equivalent to C = C / A</td>
          </tr>
          <tr>
            <td>%=</td>
            <td>Modulus AND assignment operator. It takes modulus using two operands and assigns the result to the left
              operand.</td>
            <td style="vertical-align:middle;">C %= A is equivalent to C = C % A</td>
          </tr>
          <tr>
            <td>&lt;&lt;=</td>
            <td>Left shift AND assignment operator.</td>
            <td>C &lt;&lt;= 2 is same as C = C &lt;&lt; 2</td>
          </tr>
          <tr>
            <td>&gt;&gt;=</td>
            <td>Right shift AND assignment operator.</td>
            <td>C &gt;&gt;= 2 is same as C = C &gt;&gt; 2</td>
          </tr>
          <tr>
            <td>&amp;=</td>
            <td>Bitwise AND assignment operator.</td>
            <td>C &amp;= 2 is same as C = C &amp; 2</td>
          </tr>
          <tr>
            <td>^=</td>
            <td>Bitwise exclusive OR and assignment operator.</td>
            <td>C ^= 2 is same as C = C ^ 2</td>
          </tr>
          <tr>
            <td>|=</td>
            <td>Bitwise inclusive OR and assignment operator.</td>
            <td>C |= 2 is same as C = C | 2</td>
          </tr>
        </tbody>
      </table>
      <h2>Misc Operators ↦ sizeof &amp; ternary</h2>
      <p>Besides the operators discussed above, there are a few other important operators including <b>sizeof</b> and
        <b>? :</b> supported by the C Language.</p>
      <p><a href="/cprogramming/c_sizeof_operator.htm">Show Examples</a></p>
      <table>
        <tbody>
          <tr>
            <th style="width:10%">Operator</th>
            <th style="width:43%;">Description</th>
            <th style="text-align:center;">Example</th>
          </tr>
          <tr>
            <td>sizeof()</td>
            <td style="vertical-align:middle;">Returns the size of a variable.</td>
            <td>sizeof(a), where a is integer, will return 4.</td>
          </tr>
          <tr>
            <td>&amp;</td>
            <td style="vertical-align:middle;">Returns the address of a variable.</td>
            <td>&amp;a; returns the actual address of the variable.</td>
          </tr>
          <tr>
            <td style="text-align:center;">*</td>
            <td>Pointer to a variable.</td>
            <td>*a;</td>
          </tr>
          <tr>
            <td>? :</td>
            <td style="vertical-align:middle;">Conditional Expression.</td>
            <td>If Condition is true ? then value X : otherwise value Y</td>
          </tr>
        </tbody>
      </table>
      <h2>Operators Precedence in C</h2>
      <p>Operator precedence determines the grouping of terms in an expression and decides how an expression is
        evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has a
        higher precedence than the addition operator.</p>
      <p>For example, x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has a higher precedence than +,
        so it first gets multiplied with 3*2 and then adds into 7.</p>
      <p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the
        bottom. Within an expression, higher precedence operators will be evaluated first.</p>
      <p><a href="/cprogramming/c_operators_precedence.htm">Show Examples</a></p>
      <table style="text-align:center;">
        <tbody>
          <tr>
            <th style="text-align:center;">Category</th>
            <th style="text-align:center;">Operator</th>
            <th style="text-align:center;">Associativity</th>
          </tr>
          <tr>
            <td>Postfix</td>
            <td>() [] -&gt; . ++ - -</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Unary</td>
            <td>+ - ! ~ ++ - - (type)* &amp; sizeof</td>
            <td>Right to left</td>
          </tr>
          <tr>
            <td>Multiplicative</td>
            <td>* / %</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Additive</td>
            <td>+ -</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Shift</td>
            <td>&lt;&lt; &gt;&gt;</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Relational</td>
            <td>&lt; &lt;= &gt; &gt;=</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Equality</td>
            <td>== !=</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Bitwise AND</td>
            <td>&amp;</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Bitwise XOR</td>
            <td>^</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Bitwise OR</td>
            <td>|</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Logical AND</td>
            <td>&amp;&amp;</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Logical OR</td>
            <td>||</td>
            <td>Left to right</td>
          </tr>
          <tr>
            <td>Conditional</td>
            <td>?:</td>
            <td>Right to left</td>
          </tr>
          <tr>
            <td>Assignment</td>
            <td>= += -= *= /= %=&gt;&gt;= &lt;&lt;= &amp;= ^= |=</td>
            <td>Right to left</td>
          </tr>
          <tr>
            <td>Comma</td>
            <td>,</td>
            <td>Left to right</td>
          </tr>
        </tbody>
      </table>

      <h1 id="07">&#128488; C - Decision Making</h1>
      <p>Decision making structures require that the programmer specifies one or more conditions to be evaluated or
        tested by the program, along with a statement or statements to be executed if the condition is determined to be
        true, and optionally, other statements to be executed if the condition is determined to be false.</p>
      <p>Show below is the general form of a typical decision making structure found in most of the programming
        languages </p>
      <img src="decision_making.jpg" alt="Decision making statements in C">
      <p>C programming language assumes any <b>non-zero</b> and <b>non-null</b> values as <b>true</b>, and if it is
        either <b>zero</b> or <b>null</b>, then it is assumed as <b>false</b> value.</p>
      <p>C programming language provides the following types of decision making statements.</p>
      <table>
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Statement &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td><a href="/cprogramming/if_statement_in_c.htm">if statement</a>
              <p>An <b>if statement</b> consists of a boolean expression followed by one or more statements.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="/cprogramming/if_else_statement_in_c.htm">if...else statement</a>
              <p>An <b>if statement</b> can be followed by an optional <b>else statement</b>, which executes when the
                Boolean expression is false.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="/cprogramming/nested_if_statements_in_c.htm">nested if statements</a>
              <p>You can use one <b>if</b> or <b>else if</b> statement inside another <b>if</b> or <b>else if</b>
                statement(s).</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="/cprogramming/switch_statement_in_c.htm">switch statement</a>
              <p>A <b>switch</b> statement allows a variable to be tested for equality against a list of values.</p>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td><a href="/cprogramming/nested_switch_statements_in_c.htm">nested switch statements</a>
              <p>You can use one <b>switch</b> statement inside another <b>switch</b> statement(s).</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>The ? : Operator</h2>
      <p>We have covered <b>conditional operator ? :</b> in the previous chapter which can be used to replace
        <b>if...else</b> statements. It has the following general form </p>
      <pre>Exp1 ? Exp2 : Exp3;
            </pre>
      <p>Where Exp1, Exp2, and Exp3 are expressions. Notice the use and placement of the colon.</p>
      <p>The value of a ? expression is determined like this </p>
      <ul class="list">
        <li>
          <p>Exp1 is evaluated. If it is true, then Exp2 is evaluated and becomes the value of the entire ? expression.
          </p>
        </li>
        <li>
          <p>If Exp1 is false, then Exp3 is evaluated and its value becomes the value of the expression.</p>
        </li>
      </ul>


      <h1 id="08">&#128488; C - Loops</h1>
      <p>You may encounter situations, when a block of code needs to be executed several number of times. In general,
        statements are executed sequentially: The first statement in a function is executed first, followed by the
        second, and so on.</p>
      <p>Programming languages provide various control structures that allow for more complicated execution paths.</p>
      <p>A loop statement allows us to execute a statement or group of statements multiple times. Given below is the
        general form of a loop statement in most of the programming languages </p>
      <img src="loop_architecture.jpg" alt="Loop Architecture">
      <p>C programming language provides the following types of loops to handle looping requirements.</p>
      <table>
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Loop Type &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td><a href="/cprogramming/c_while_loop.htm">while loop</a>
              <p>Repeats a statement or group of statements while a given condition is true. It tests the condition
                before executing the loop body.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="/cprogramming/c_for_loop.htm">for loop</a>
              <p>Executes a sequence of statements multiple times and abbreviates the code that manages the loop
                variable.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="/cprogramming/c_do_while_loop.htm">do...while loop</a>
              <p>It is more like a while statement, except that it tests the condition at the end of the loop body.</p>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="/cprogramming/c_nested_loops.htm">nested loops</a>
              <p>You can use one or more loops inside any other while, for, or do..while loop.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>Loop Control Statements</h2>
      <p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic
        objects that were created in that scope are destroyed.</p>
      <p>C supports the following control statements.</p>
      <table>
        <tbody>
          <tr>
            <th style="text-align:center;">Sr.No.</th>
            <th style="text-align:center;">Control Statement &amp; Description</th>
          </tr>
          <tr>
            <td>1</td>
            <td><a href="/cprogramming/c_break_statement.htm">break statement</a>
              <p>Terminates the <b>loop</b> or <b>switch</b> statement and transfers execution to the statement
                immediately following the loop or switch.</p>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="/cprogramming/c_continue_statement.htm">continue statement</a>
              <p>Causes the loop to skip the remainder of its body and immediately retest its condition prior to
                reiterating.</p>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="/cprogramming/c_goto_statement.htm">goto statement</a>
              <p>Transfers control to the labeled statement.</p>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>The Infinite Loop</h2>
      <p>A loop becomes an infinite loop if a condition never becomes false. The <b>for</b> loop is traditionally used
        for this purpose. Since none of the three expressions that form the 'for' loop are required, you can make an
        endless loop by leaving the conditional expression empty.</p>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >
 
          </span><span >int</span><span > main </span><span >()</span><span > </span><span >{</span><span >
          
             </span><span >for</span><span >(</span><span > </span><span >;</span><span > </span><span >;</span><span > </span><span >)</span><span > </span><span >{</span><span >
                printf</span><span >(</span><span class="str">"This loop will run forever.\n"</span><span >);</span><span >
             </span><span >}</span><span >
          
             </span><span >return</span><span > </span><span c>0</span><span >;</span><span >
          </span><span >}</span></pre>
      <p>When the conditional expression is absent, it is assumed to be true. You may have an initialization and
        increment expression, but C programmers more commonly use the for(;;) construct to signify an infinite loop.</p>
      <p><b>NOTE</b>  You can terminate an infinite loop by pressing Ctrl + C keys.</p>

      <h1 id="09">&#128488; C - Functions</h1>
      <p style="font-size: 16px;">A function is a group of statements that together perform a task. Every C program has at least one function,
        which is <b>main()</b>, and all the most trivial programs can define additional functions.</p>
      <p style="font-size: 16px;">You can divide up your code into separate functions. How you divide up your code among different functions is
        up to you, but logically the division is such that each function performs a specific task.</p>
      <p  style="font-size: 16px;">A function <b>declaration</b> tells the compiler about a function's name, return type, and parameters. A
        function <b>definition</b> provides the actual body of the function.</p>
      <p style="font-size: 16px;">The C standard library provides numerous built-in functions that your program can call. For example,
        <b>strcat()</b> to concatenate two strings, <b>memcpy()</b> to copy one memory location to another location, and
        many more functions.</p>
      <p style="font-size: 16px;">A function can also be referred as a method or a sub-routine or a procedure, etc.</p>
      <h2>Defining a Function</h2>
      <p style="font-size: 16px;">The general form of a function definition in C programming language is as follows </p>
      <pre style="font-size: 12px;"><span >return_type function_name</span><span >(</span><span > parameter list </span><span >)</span><span > </span><span >{</span><span >
            body </span><span >of</span><span > the </span><span >function</span><span >
         </span><sp<p>A function definition in C programming consists of a<br> <i>function header</i> and a <i>function body</i>. Here are all the parts of a function </p>
         <ul style="font-size: 12px;">
          <li><p><b>Return Type</b>  A function may return a value. The <b>return_type</b> is the data type of the value<br> the function returns. Some functions perform the desired operations without returning a value.<br> In this case, the return_type is the keyword <b>void</b>.</p></li>
          <li><p><b>Function Name</b>  This is the actual name of the function. The function name and the parameter list<br> together constitute the function signature.</p></li>
          <li><p><b>Parameters</b>  A parameter is like a placeholder. When a function is invoked, you pass a value<br> to the parameter. This value is referred to as actual parameter or argument. The parameter list <br>refers to the type, order, and number of the parameters of a function.<br> Parameters are optional; that is, a function may contain no parameters.</p></li>
          <li><p><b>Function Body</b>  The function body contains a collection of statements that define what<br> the function does.</p></li>
          </ul>
          <h2>Example</h2>
          <p style="font-size: 16px;">Given below is the source code for a function called <b>max()</b>. <br> This function takes two parameters num1 and num2 and returns the maximum <br> value between the two </p>
          <pre style="font-size: 14px;"><span >/* function returning the max between two numbers */</span><span >
          </span><span >int</span><span > max</span><span >(</span><span >int</span><span > num1</span><span >,</span><span > </span><span >int</span><span > num2</span><span >)</span><span > </span><span >{</span><span >
          
             </span><span >/* local variable declaration */</span><span >
             </span><span >int</span><span > result</span><span >;</span><span >
           
             </span><span >if</span><span > </span><span >(</span><span >num1 </span><span >&gt;</span><span > num2</span><span >)</span><span >
                result </span><span >=</span><span > num1</span><span >;</span><span >
             </span><span >else</span><span >
                result </span><span >=</span><span > num2</span><span >;</span><span >
           
             </span><span >return</span><span > result</span><span >;</span><span > 
          </span><span >}</span></pre>
      <h2>Function Declarations</h2>
      <p style="font-size: 16px;">A function <b>declaration</b> tells the compiler about a function name and how<br>to call the function. The actual body of the function can be defined<br> separately.</p>
      <pre>return_type function_name( parameter list );
          </pre>
      <p style="font-size: 16px;">For the above defined function max(), the function declaration is as<br> follows </p>
      <pre>int max(int num1, int num2);
          </pre>
      <p style="font-size: 16px;">Parameter names are not important in function declaration only their<br> type is required, so the following is also a valid declaration </p>
      <pre style="font-size: 12px;" >int max(int, int);
          </pre>
      <p style="font-size: 16px;">Function declaration is required when you define a function in one source<br> file and you call that function in another file. In such case, you should<br> declare the function at the top of the file calling the function.</p>
      <h2>Calling a Function</h2>
      <p style="font-size: 16px;">While creating a C function, you give a definition of what the function has<br> to do. To use a function, you will have to call that function to perform <br>the defined task.</p>
      
      <p style="font-size: 16px;">To call a function, you simply need to pass the required parameters along<br> with the function name, and if the function returns a value, then you can<br> store the returned value. For example </p>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >
 
          </span><span >/* function declaration */</span><span >
          </span><span >int</span><span > max</span><span >(</span><span >int</span><span > num1</span><span >,</span><span > </span><span >int</span><span > num2</span><span >);</span><span >
           
          </span><span >int</span><span > main </span><span >()</span><span > </span><span >{</span><span >
          
             </span><span >/* local variable definition */</span><span >
             </span><span >int</span><span > a </span><span >=</span><span > </span><span c>100</span><span >;</span><span >
             </span><span >int</span><span > b </span><span >=</span><span > </span><span c>200</span><span >;</span><span >
             </span><span >int</span><span > ret</span><span >;</span><span >
           
             </span><span >/* calling a function to get max value */</span><span >
             ret </span><span >=</span><span > max</span><span >(</span><span >a</span><span >,</span><span > b</span><span >);</span><span >
           
             printf</span><span >(</span><span > </span><span class="str">"Max value is : %d\n"</span><span >,</span><span > ret </span><span >);</span><span >
           
             </span><span >return</span><span > </span><span c>0</span><span >;</span><span >
          </span><span >}</span><span >
           
          </span><span >/* function returning the max between two numbers */</span><span >
          </span><span >int</span><span > max</span><span >(</span><span >int</span><span > num1</span><span >,</span><span > </span><span >int</span><span > num2</span><span >)</span><span > </span><span >{</span><span >
          
             </span><span >/* local variable declaration */</span><span >
             </span><span >int</span><span > result</span><span >;</span><span >
           
             </span><span >if</span><span > </span><span >(</span><span >num1 </span><span >&gt;</span><span > num2</span><span >)</span><span >
                result </span><span >=</span><span > num1</span><span >;</span><span >
             </span><span >else</span><span >
                result </span><span >=</span><span > num2</span><span >;</span><span >
           
             </span><span >return</span><span > result</span><span >;</span><span > 
          </span><span >}</span></pre>
      <p >We have kept max() along with main() and compiled the source code. While running the final<br> executable, it would produce the following result </p>
      <pre style="font-size: 13px;" >Max value is : 200
          </pre>
      <h2>Function Arguments</h2>
      <p style="font-size: 16px;">If a function is to use arguments, it must declare variables that accept
the values of the arguments. These variables are called the <b>
formal parameters</b> of the function.</p>
      <p style="font-size: 16px;">Formal parameters behave like other local variables inside the function and
are created upon entry into the function and destroyed upon exit.</p>
      <p style="font-size: 16px;">While calling a function, there are two ways in which arguments can be<br> passed to a function </p>

      <p style="font-size: 16px;">By default, C uses <b>call by value</b> to pass arguments. In general, it mean
the code within a function cannot alter the arguments used to call
the function.</p>

      <h1 id="10">&#128488; C - Arrays</h1>
      <p  style="font-size: 16px;">Arrays a kind of data structure that can store a fixed-size sequential
collection of elements of the same type. An array is used to store a 
data, but it is often more useful to think of an array as a collection
 of variables of the same type.</p>
      <p style="font-size: 16px;">All arrays consist of contiguous memory locations. The lowest address
corresponds to the first element and the highest address
to the last element.</p>
      <img src="style/arrays.jpg" alt="Arrays in C">
      <h2>Declaring Arrays</h2>
      <p style="font-size: 16px;">To declare an array in C, a programmer specifies the type of the elements
and the number of elements required by an array as
follows </p>
      <pre>type arrayName [ arraySize ];
        </pre>
      <p style="font-size: 16px;">This is called a <i>single-dimensional</i> array. The <b>arraySize</b>
must be an integer constant greater than zero and
 <b>type</b> can be any valid C data type. For example,
  to declare a 10-element array called <b>balance</b>
  of type double, use this statement </p>
      <pre>double balance[10];
        </pre>
      <p style="font-size: 16px;">Here <i>balance</i> is a variable array which is sufficient to hold up to 10<br> double numbers.</p>
      <h2>Initializing Arrays</h2>
      <p style="font-size: 16px;">You can initialize an array in C either one by one or using a single<br> statement as follows </p>
      <pre>double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0};
        </pre>
      <p style="font-size: 16px;">The number of values between braces { } cannot be larger than the<br> number of elements that we declare for the
        array between square brackets [ ].</p>
      <p style="font-size: 16px;">If you omit the size of the array, an array just big enough to hold the
initialization is created. Thereforre, if you write </p>
      <pre>double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0};
        </pre>
      <p style="font-size: 16px;">You will create exactly the same array as you did in the previous example.
Following is an example to assign a single element of the array </p>
      <pre>balance[4] = 50.0;
        </pre>
     
      <img src="style/array_presentation.jpg" alt="Array Presentation">
      <h2>Accessing Array Elements</h2>
      <p style="font-size: 16px;">An element is accessed by indexing the array name. This is done by placing
the index of the element within square brackets after
 the name of the array. For example </p>
      <pre>double salary = balance[9];
        </pre>
      
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >
 
        </span><span >int</span><span > main </span><span >()</span><span > </span><span >{</span><span >
        
           </span><span >int</span><span > n</span><span >[</span><span > </span><span c>10</span><span > </span><span >];</span><span > </span><span >/* n is an array of 10 integers */</span><span >
           </span><span >int</span><span > i</span><span >,</span><span >j</span><span >;</span><span >
         
           </span><span >/* initialize elements of array n to 0 */</span><span >         
           </span><span >for</span><span > </span><span >(</span><span > i </span><span >=</span><span > </span><span c>0</span><span >;</span><span > i </span><span >&lt;</span><span > </span><span c>10</span><span >;</span><span > i</span><span >++</span><span > </span><span >)</span><span > </span><span >{</span><span >
              n</span><span >[</span><span > i </span><span >]</span><span > </span><span >=</span><span > i </span><span >+</span><span > </span><span c>100</span><span >;</span><span > </span><span >/* set element at location i to i + 100 */</span><span >
           </span><span >}</span><span >
           
           </span><span >/* output each array element's value */</span><span >
           </span><span >for</span><span > </span><span >(</span><span >j </span><span >=</span><span > </span><span c>0</span><span >;</span><span > j </span><span >&lt;</span><span > </span><span c>10</span><span >;</span><span > j</span><span >++</span><span > </span><span >)</span><span > </span><span >{</span><span >
              printf</span><span >(</span><span class="str">"Element[%d] = %d\n"</span><span >,</span><span > j</span><span >,</span><span > n</span><span >[</span><span >j</span><span >]</span><span > </span><span >);</span><span >
           </span><span >}</span><span >
         
           </span><span >return</span><span > </span><span c>0</span><span >;</span><span >
        </span><span >}</span></pre>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >
 
        </span><span >int</span><span > main </span><span >()</span><span > </span><span >{</span><span >
        
           </span><span >int</span><span > n</span><span >[</span><span > </span><span c>10</span><span > </span><span >];</span><span > </span><span >/* n is an array of 10 integers */</span><span >
           </span><span >int</span><span > i</span><span >,</span><span >j</span><span >;</span><span >
         
           </span><span >/* initialize elements of array n to 0 */</span><span >         
           </span><span >for</span><span > </span><span >(</span><span > i </span><span >=</span><span > </span><span c>0</span><span >;</span><span > i </span><span >&lt;</span><span > </span><span c>10</span><span >;</span><span > i</span><span >++</span><span > </span><span >)</span><span > </span><span >{</span><span >
              n</span><span >[</span><span > i </span><span >]</span><span > </span><span >=</span><span > i </span><span >+</span><span > </span><span c>100</span><span >;</span><span > </span><span >/* set element at location i to i + 100 */</span><span >
           </span><span >}</span><span >
           
           </span><span >/* output each array element's value */</span><span >
           </span><span >for</span><span > </span><span >(</span><span >j </span><span >=</span><span > </span><span c>0</span><span >;</span><span > j </span><span >&lt;</span><span > </span><span c>10</span><span >;</span><span > j</span><span >++</span><span > </span><span >)</span><span > </span><span >{</span><span >
              printf</span><span >(</span><span class="str">"Element[%d] = %d\n"</span><span >,</span><span > j</span><span >,</span><span > n</span><span >[</span><span >j</span><span >]</span><span > </span><span >);</span><span >
           </span><span >}</span><span >
         
           </span><span >return</span><span > </span><span c>0</span><span >;</span><span >
        </span><span >}</span></pre>
      <p style="font-size: 16px;">When the above code is compiled and executed, it produces the
following result </p>
      <pre>Element[0] = 100
          Element[1] = 101
          Element[2] = 102
          Element[3] = 103
          Element[4] = 104
          Element[5] = 105
          Element[6] = 106
          Element[7] = 107
          Element[8] = 108
          Element[9] = 109
          </pre>
      

      <h1 id="11">C - Pointers</h1>
      <p style="font-size: 16px;">Pointers in C are easy and fun to learn. Some C programming tasks are
performed more easily with pointers, and other tasks, such as dynamic
memory allocation, cannot be performed without using pointers. So
it becomes necessary to learn pointers to become a perfect C 
programmer. Let's start learning them in simple and easy steps.</p>
      <p style="font-size: 16px;">As you know, every variable is a memory location
and every memory location has its address defined which can 
be accessed using ampersand (&amp;) operator, which denotes
an address in memory. Consider the following example, 
which prints the address of the variables defined </p>
      <pre><span >#include</span><span > </span><span class="str">&lt;stdio.h&gt;</span><span >

      </span><span >int</span><span > main </span><span >()</span><span > </span><span >{</span><span >
      
         </span><span >int</span><span >  var1</span><span >;</span><span >
         </span><span >char</span><span > var2</span><span >[</span><span c>10</span><span >];</span><span >
      
         printf</span><span >(</span><span class="str">"Address of var1 variable: %x\n"</span><span >,</span><span > </span><span >&amp;</span><span >var1  </span><span >);</span><span >
         printf</span><span >(</span><span class="str">"Address of var2 variable: %x\n"</span><span >,</span><span > </span><span >&amp;</span><span >var2  </span><span >);</span><span >
      
         </span><span >return</span><span > </span><span c>0</span><span >;</span><span >
      </span><span >}</span></pre>
      <p style="font-size: 16px;">When the above code is compiled and executed, it produces the following<BR> result </p>
      <pre>Address of var1 variable: bff5a400
        Address of var2 variable: bff5a3f6
        </pre>
      <h2>What are Pointers?</h2>
      <p style="font-size: 16px;">A <b>pointer</b> is a variable whose value is the address of another variable,
i.e., direct address of the memory location. Like any 
variable or constant, you must declare a pointer before
using it to store any variable address. The general form of
a pointer variable declaration is </p>
      <p style="font-size: 16px;">Here,<b>type</b> is the pointer's base type;it must be a valid C data type & 
<b>var-name</b> is the name of the pointer variable. The asterisk * used
to declare a pointer is the same asterisk used for multiplication.
However, in this statement the asterisk is being used to designate
a variable as a pointer. Take a look at some of the valid pointer 
declarations </p>
      <pre>int    *ip;    /* pointer to an integer */
          double *dp;    /* pointer to a double */
          float  *fp;    /* pointer to a float */
          char   *ch     /* pointer to a character */
          </pre>
      <h2>Pointers in Detail</h2>
      <p style="font-size: 16px;">Pointers have many but easy concepts and they are very important to C <br>programming. The following important pointer concepts should be clear to<BR> any C programmer </p>
      
      <img src="style/c_table.PNG" style="width: 630px;">


    </div>
</body>

</html>