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
    <title>Java</title>
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
                <a href="#01">&#128488; Java Home</a>
                <a href="#02">&#128488; Basic Syntax</a>
                <a href="#03">&#128488; Object and Classes</a>
                <a href="#left">&#128488; Constructors</a>
                <a href="#04">&#128488; Basic Datatypes</a>
                <a href="#05">&#128488; Variable Types</a>
                <a href="#06">&#128488; Modifier Types</a>
                <a href="#07">&#128488; Loop Control </a>
                <a href="#08">&#128488; Decision Making</a>
                <a href="#09">&#128488; Files and I/O</a>

            </div>


        </div>

        <div id="content">
            <h1> &#128488; Java Tutorial</h1>
            <p>Java is a high-level programming language originally developed by Sun Microsystems and released in 1995.
                Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This
                tutorial gives a complete understanding of Java. This reference will take you through simple and
                practical approaches while learning Java Programming language.</p>
            <h2>Why to Learn java Programming?</h2>
            <p>Java is a MUST for students and working professionals to become a great Software Engineer specially when
                they are working in Software Development Domain. </p>
            <h1 id="02" >&#128488; Basic Syntax</h1>
            <hr>
            <p>When we consider a Java program, it can be defined as a collection of objects that communicate via
                invoking each other's methods. Let us now briefly look into what do class, object, methods, and instance
                variables mean.</p>
            <ul class="list">
                <li>
                    <p><b>Object</b>  Objects have states and behaviors. Example: A dog has states - color, name, breed
                        as well as behavior such as wagging their tail, barking, eating. An object is an instance of a
                        class.</p>
                </li>
                <li>
                    <p><b>Class</b>  A class can be defined as a template/blueprint that describes the behavior/state
                        that the object of its type supports.</p>
                </li>
                <li>
                    <p><b>Methods</b>  A method is basically a behavior. A class can contain many methods. It is in
                        methods where the logics are written, data is manipulated and all the actions are executed.</p>
                </li>
                <li>
                    <p><b>Instance Variables</b>  Each object has its unique set of instance variables. An object's
                        state is created by the values assigned to these instance variables.</p>
                </li>
            </ul>
            <h2>Basic Syntax</h2>
            <p>About Java programs, it is very important to keep in mind the following points.</p>
            <ul class="list">
                <li>
                    <p><b>Case Sensitivity</b>  Java is case sensitive, which means identifier <b>Hello</b> and
                        <b>hello</b> would have different meaning in Java.</p>
                </li>
                <li>
                    <p><b>Class Names</b>  For all class names the first letter should be in Upper Case. If several
                        words are used to form a name of the class, each inner word's first letter should be in Upper
                        Case.</p>
                    <p><b>Example:</b> <i>class MyFirstJavaClass</i></p>
                </li>
                <li>
                    <p><b>Method Names</b>  All method names should start with a Lower Case letter. If several words
                        are used to form the name of the method, then each inner word's first letter should be in Upper
                        Case.</p>
                    <p><b>Example:</b> <i>public void myMethodName()</i></p>
                </li>
                <li>
                    <p><b>Program File Name</b>  Name of the program file should exactly match the class name.</p>
                    <p>When saving the file, you should save it using the class name (Remember Java is case sensitive)
                        and append '.java' to the end of the name (if the file name and the class name do not match,
                        your program will not compile).</p>
                    <p>But please make a note that in case you do not have a public class present in the file then file
                        name can be different than class name. It is also not mandatory to have a public class in the
                        file.</p>
                    <p><b>Example:</b> Assume 'MyFirstJavaProgram' is the class name. Then the file should be saved as
                        <i>'MyFirstJavaProgram.java'</i></p>
                </li>
                <li>
                    <p><b>public static void main(String args[])</b>  Java program processing starts from the main()
                        method which is a mandatory part of every Java program.</p>
                </li>
            </ul>
            <h2>Java Identifiers</h2>
            <p>All Java components require names. Names used for classes, variables, and methods are called
                <b>identifiers</b>.</p>
            <p>In Java, there are several points to remember about identifiers. They are as follows </p>
            <ul class="list">
                <li>
                    <p>All identifiers should begin with a letter (A to Z or a to z), currency character ($) or an
                        underscore (_).</p>
                </li>
                <li>
                    <p>After the first character, identifiers can have any combination of characters.</p>
                </li>
                <li>
                    <p>A key word cannot be used as an identifier.</p>
                </li>
                <li>
                    <p>Most importantly, identifiers are case sensitive.</p>
                </li>
                <li>
                    <p>Examples of legal identifiers: age, $salary, _value, __1_value.</p>
                </li>
                <li>
                    <p>Examples of illegal identifiers: 123abc, -salary.</p>
                </li>
            </ul>
            <h2>Java Modifiers</h2>
            <p>Like other languages, it is possible to modify classes, methods, etc., by using modifiers. There are two
                categories of modifiers </p>
            <ul class="list">
                <li>
                    <p><b>Access Modifiers</b>  default, public , protected, private</p>
                </li>
                <li>
                    <p><b>Non-access Modifiers</b>  final, abstract, strictfp</p>
                </li>
            </ul>
            <h2>Java Variables</h2>
            <p>Following are the types of variables in Java </p>
            <ul class="list">
                <li>Local Variables</li>
                <li>Class Variables (Static Variables)</li>
                <li>Instance Variables (Non-static Variables)</li>
            </ul>
            <h2>Java Arrays</h2>
            <p>Arrays are objects that store multiple variables of the same type. However, an array itself is an object
                on the heap. We will look into how to declare, construct, and initialize in the upcoming chapters.</p>
            <h2>Java Enums</h2>
            <p>Enums were introduced in Java 5.0. Enums restrict a variable to have one of only a few predefined values.
                The values in this enumerated list are called enums.</p>
            <p>With the use of enums it is possible to reduce the number of bugs in your code.</p>
            <p>For example, if we consider an application for a fresh juice shop, it would be possible to restrict the
                glass size to small, medium, and large. This would make sure that it would not allow anyone to order any
                size other than small, medium, or large.</p>
            <h2>Java Keywords</h2>
            <p>The following list shows the reserved words in Java. These reserved words may not be used as constant or
                variable or any other identifier names.</p>
            <table >
                <tbody>
                    <tr>
                        <td>abstract</td>
                        <td>assert</td>
                        <td>boolean</td>
                        <td>break</td>
                    </tr>
                    <tr>
                        <td>byte</td>
                        <td>case</td>
                        <td>catch</td>
                        <td>char</td>
                    </tr>
                    <tr>
                        <td>class</td>
                        <td>const</td>
                        <td>continue</td>
                        <td>default</td>
                    </tr>
                    <tr>
                        <td>do</td>
                        <td>double</td>
                        <td>else</td>
                        <td>enum</td>
                    </tr>
                    <tr>
                        <td>extends</td>
                        <td>final</td>
                        <td>finally</td>
                        <td>float</td>
                    </tr>
                    <tr>
                        <td>for</td>
                        <td>goto</td>
                        <td>if</td>
                        <td>implements</td>
                    </tr>
                    <tr>
                        <td>import</td>
                        <td>instanceof</td>
                        <td>int</td>
                        <td>interface</td>
                    </tr>
                    <tr>
                        <td>long</td>
                        <td>native</td>
                        <td>new</td>
                        <td>package</td>
                    </tr>
                    <tr>
                        <td>private</td>
                        <td>protected</td>
                        <td>public</td>
                        <td>return</td>
                    </tr>
                    <tr>
                        <td>short</td>
                        <td>static</td>
                        <td>strictfp</td>
                        <td>super</td>
                    </tr>
                    <tr>
                        <td>switch</td>
                        <td>synchronized</td>
                        <td>this</td>
                        <td>throw</td>
                    </tr>
                    <tr>
                        <td>throws</td>
                        <td>transient</td>
                        <td>try</td>
                        <td>void</td>
                    </tr>
                    <tr>
                        <td>volatile</td>
                        <td>while</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h2>Comments in Java</h2>
            <p>Java supports single-line and multi-line comments very similar to C and C++. All characters available
                inside any comment are ignored by Java compiler.</p>
            <h1 id="03"> &#128488; Object and Classes</h1>
            <p>Java is an Object-Oriented Language. As a language that has the Object-Oriented feature, Java supports
                the following fundamental concepts </p>
            <ul class="list">
                <li>Polymorphism</li>
                <li>Inheritance</li>
                <li>Encapsulation</li>
                <li>Abstraction</li>
                <li>Classes</li>
                <li>Objects</li>
                <li>Instance</li>
                <li>Method</li>
                <li>Message Passing</li>
            </ul>
            <p>In this chapter, we will look into the concepts - Classes and Objects.</p>
            <ul class="list">
                <li>
                    <p><b>Object</b>  Objects have states and behaviors. Example: A dog has states - color, name, breed
                        as well as behaviors – wagging the tail, barking, eating. An object is an instance of a class.
                    </p>
                </li>
                <li>
                    <p><b>Class</b>  A class can be defined as a template/blueprint that describes the behavior/state
                        that the object of its type support.</p>
                </li>

                <h2>Objects in Java</h2>
                <p>If we consider a dog, then its state is - name, breed, color, and the behavior is - barking, wagging
                    the
                    tail, running.</p>
                <p>If you compare the software object with a real-world object, they have very similar characteristics.
                </p>
                <p>Software objects also have a state and a behavior. A software object's state is stored in fields and
                    behavior is shown via methods.</p>
                <p>So in software development, methods operate on the internal state of an object and the
                    object-to-object
                    communication is done via methods.</p>
                <h2>Classes in Java</h2>
                <p>A class is a blueprint from which individual objects are created.</p>
                <p>Following is a sample of a class.</p>
                <h3>Example</h3>
                <pre  ><span>public</span><span > </span><span >class</span><span > </span><span >Dog</span><span > </span><span >{</span><span >
                                            </span><span >String</span><span > breed</span><span >;</span><span >
                                            </span><span >int</span><span > age</span><span >;</span><span >
                                            </span><span >String</span><span > color</span><span >;</span><span >
                                         
                                            </span><span >void</span><span > barking</span><span >()</span><span > </span><span >{</span><span >
                                            </span><span >}</span><span >
                                         
                                            </span><span >void</span><span > hungry</span><span >()</span><span > </span><span >{</span><span >
                                            </span><span >}</span><span >
                                         
                                            </span><span >void</span><span > sleeping</span><span >()</span><span > </span><span >{</span><span >
                                            </span><span >}</span><span >
                                         </span><span >}</span></pre>
                <p>A class can contain any of the following variable types.</p>
                <ul class="list">
                    <li>
                        <p><b>Local variables</b>  Variables defined inside methods, constructors or blocks are called
                            local variables. The variable will be declared and initialized within the method and the
                            variable will be destroyed when the method has completed.</p>
                    </li>
                    <li>
                        <p><b>Instance variables</b>  Instance variables are variables within a class but outside any
                            method. These variables are initialized when the class is instantiated. Instance variables
                            can
                            be accessed from inside any method, constructor or blocks of that particular class.</p>
                    </li>
                    <li>
                        <p><b>Class variables</b>  Class variables are variables declared within a class, outside any
                            method, with the static keyword.</p>
                    </li>
                </ul>
                <p>A class can have any number of methods to access the value of various kinds of methods. In the above
                    example, barking(), hungry() and sleeping() are methods.</p>
                <p>Following are some of the important topics that need to be discussed when looking into classes of the
                    Java Language.</p>

                <h2 id="left"> &#128488; Constructors</h2>
                <p>When discussing about classes, one of the most important sub topic would be constructors. Every class
                    has
                    a constructor. If we do not explicitly write a constructor for a class, the Java compiler builds a
                    default constructor for that class.

                </p>
                <h1>Constructors</h1>
                <hr>
                <p>A constructor initializes an object when it is created. It has the same name as its class and is
                    syntactically similar to a method. However, constructors have no explicit return type.</p>
                <p>Typically, you will use a constructor to give initial values to the instance variables defined by the
                    class, or to perform any other start-up procedures required to create a fully formed object.</p>
                <p>All classes have constructors, whether you define one or not, because Java automatically provides a
                    default constructor that initializes all member variables to zero. However, once you define your own
                    constructor, the default constructor is no longer used.</p>
                <h2>Syntax</h2>
                <p>Following is the syntax of a constructor </p>
                <pre   style=""><span >class</span><span > </span><span >ClassName</span><span > </span><span >{</span><span >
                                            </span><span >ClassName</span><span >()</span><span > </span><span >{</span><span >
                                            </span><span >}</span><span >
                                         </span><span >}</span></pre>
                <p>Java allows two types of constructors namely </p>
                <ul class="list">
                    <li>No argument Constructors</li>
                    <li>Parameterized Constructors</li>
                </ul>
                <h2>No argument Constructors</h2>
                <p>As the name specifies the no argument constructors of Java does not accept any parameters instead,
                    using
                    these constructors the instance variables of a method will be initialized with fixed values for all
                    objects.</p>
                <h2>Example</h2>
                <pre  style=""><span >Public</span><span > </span><span >class</span><span > </span><span >MyClass</span><span > </span><span >{</span><span >
                                            </span><span >Int</span><span > num</span><span >;</span><span >
                                            </span><span >MyClass</span><span >()</span><span > </span><span >{</span><span >
                                               num </span><span >=</span><span > </span><span>100</span><span >;</span><span >
                                            </span><span >}</span><span >
                                         </span><span >}</span></pre>
                <p>You would call constructor to initialize objects as follows</p>
                <pre  style=""><span >public</span><span > </span><span >class</span><span > </span><span >ConsDemo</span><span > </span><span >{</span><span >
                                        </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >{</span><span >
                                           </span><span >MyClass</span><span > t1 </span><span >=</span><span > </span><span >new</span><span > </span><span >MyClass</span><span >();</span><span >
                                           </span><span >MyClass</span><span > t2 </span><span >=</span><span > </span><span >new</span><span > </span><span >MyClass</span><span >();</span><span >
                                           </span><span >System</span><span >.</span><span >out</span><span >.</span><span >println</span><span >(</span><span >t1</span><span >.</span><span >num </span><span >+</span><span > </span><span >" "</span><span > </span><span >+</span><span > t2</span><span >.</span><span >num</span><span >);</span><span >
                                        </span><span >}</span><span >
                                     </span><span >}</span></pre>
                <p>This would produce the following result</p>
                <pre >100 100
                                    </pre>
                <h2>Parameterized Constructors</h2>
                <p>Most often, you will need a constructor that accepts one or more parameters. Parameters are added to
                    a
                    constructor in the same way that they are added to a method, just declare them inside the
                    parentheses
                    after the constructor's name.</p>
                <h2>Example</h2>
                <p>Here is a simple example that uses a constructor </p>
                <pre   style=""><span >// A simple constructor.</span><span >
                                    </span><span >class</span><span > </span><span >MyClass</span><span > </span><span >{</span><span >
                                       </span><span >int</span><span > x</span><span >;</span><span >
                                       
                                       </span><span >// Following is the constructor</span><span >
                                       </span><span >MyClass</span><span >(</span><span >int</span><span > i </span><span >)</span><span > </span><span >{</span><span >
                                          x </span><span >=</span><span > i</span><span >;</span><span >
                                       </span><span >}</span><span >
                                    </span><span >}</span></pre>
                <p>You would call constructor to initialize objects as follows </p>
                <pre  style=""><span >public</span><span > </span><span >class</span><span > </span><span >ConsDemo</span><span > </span><span >{</span><span >
                                    </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >{</span><span >
                                       </span><span >MyClass</span><span > t1 </span><span >=</span><span > </span><span >new</span><span > </span><span >MyClass</span><span >(</span><span > </span><span>10</span><span > </span><span >);</span><span >
                                       </span><span >MyClass</span><span > t2 </span><span >=</span><span > </span><span >new</span><span > </span><span >MyClass</span><span >(</span><span > </span><span>20</span><span > </span><span >);</span><span >
                                       </span><span >System</span><span >.</span><span >out</span><span >.</span><span >println</span><span >(</span><span >t1</span><span >.</span><span >x </span><span >+</span><span > </span><span >" "</span><span > </span><span >+</span><span > t2</span><span >.</span><span >x</span><span >);</span><span >
                                    </span><span >}</span><span >
                                 </span><span >}</span></pre>
                <p>This would produce the following result </p>
                <pre 
                    style=""><span>10</span><span > </span><span>20</span></pre>
        </div>
        <h1 id="04"> &#128488; Basic Datatypes</h1>
        <p>Variables are nothing but reserved memory locations to store values. This means that when you create a
            variable<br> you reserve some space in the memory.</p>
        <p>Based on the data type of a variable, the operating system allocates memory and decides what can be stored in
            <br>the reserved memory. Therefore, by assigning different data types to variables, you can store integers,
            <br>decimals, or characters in these variables.</p>
        <p>There are two data types available in Java </p>
        <ul class="list">
            <li>Primitive Data Types</li>
            <li>Reference/Object Data Types</li>
        </ul>
        <h2>Primitive Data Types</h2>
        <p>There are eight primitive datatypes supported by Java. Primitive datatypes are predefined by the language and
            <br>named by a keyword. Let us now look into the eight primitive data types in detail.</p>
        <h3>byte</h3>
        <ul class="list">
            <li>
                <p>Byte data type is an 8-bit signed two's complement integer</p>
            </li>
            <li>
                <p>Minimum value is -128 (-2^7)</p>
            </li>
            <li>
                <p>Maximum value is 127 (inclusive)(2^7 -1)</p>
            </li>
            <li>
                <p>Default value is 0</p>
            </li>
            <li>
                <p>Byte data type is used to save space in large arrays, mainly in place of integers, since a byte is
                    <br> four times smaller than an integer.</p>
            </li>
            <li>
                <p>Example: byte a = 100, byte b = -50</p>
            </li>
        </ul>
        <h3>short</h3>
        <ul class="list">
            <li>
                <p>Short data type is a 16-bit signed two's complement integer</p>
            </li>
            <li>
                <p>Minimum value is -32,768 (-2^15)</p>
            </li>
            <li>
                <p>Maximum value is 32,767 (inclusive) (2^15 -1)</p>
            </li>
            <li>
                <p>Short data type can also be used to save memory as byte data type. A short is 2 times smaller than an
                    integer</p>
            </li>
            <li>
                <p>Default value is 0.</p>
            </li>
            <li>
                <p>Example: short s = 10000, short r = -20000</p>
            </li>
        </ul>
        <h3>int</h3>
        <ul class="list">
            <li>
                <p>Int data type is a 32-bit signed two's complement integer.</p>
            </li>
            <li>
                <p>Minimum value is - 2,147,483,648 (-2^31)</p>
            </li>
            <li>
                <p>Maximum value is 2,147,483,647(inclusive) (2^31 -1)</p>
            </li>
            <li>
                <p>Integer is generally used as the default data type for integral values unless there is a concern
                    about memory.</p>
            </li>
            <li>
                <p>The default value is 0</p>
            </li>
            <li>
                <p>Example: int a = 100000, int b = -200000</p>
            </li>
        </ul>
        <h3>long</h3>
        <ul class="list">
            <li>Long data type is a 64-bit signed two's complement integer</li>
            <li>Minimum value is -9,223,372,036,854,775,808(-2^63)</li>
            <li>Maximum value is 9,223,372,036,854,775,807 (inclusive)(2^63 -1)</li>
            <li>This type is used when a wider range than int is needed</li>
            <li>Default value is 0L</li>
            <li>Example: long a = 100000L, long b = -200000L</li>
        </ul>
        <h3>float</h3>
        <ul class="list">
            <li>
                <p>Float data type is a single-precision 32-bit IEEE 754 floating point</p>
            </li>
            <li>
                <p>Float is mainly used to save memory in large arrays of floating point numbers</p>
            </li>
            <li>
                <p>Default value is 0.0f</p>
            </li>
            <li>
                <p>Float data type is never used for precise values such as currency</p>
            </li>
            <li>
                <p>Example: float f1 = 234.5f</p>
            </li>
        </ul>
        <h3>double</h3>
        <ul class="list">
            <li>
                <p>double data type is a double-precision 64-bit IEEE 754 floating point</p>
            </li>
            <li>
                <p>This data type is generally used as the default data type for decimal values, generally the default
                    choice</p>
            </li>
            <li>
                <p>Double data type should never be used for precise values such as currency</p>
            </li>
            <li>
                <p>Default value is 0.0d</p>
            </li>
            <li>
                <p>Example: double d1 = 123.4</p>
            </li>
        </ul>
        <h3>boolean</h3>
        <ul class="list">
            <li>boolean data type represents one bit of information</li>
            <li>There are only two possible values: true and false</li>
            <li>This data type is used for simple flags that track true/false conditions</li>
            <li>Default value is false</li>
            <li>Example: boolean one = true</li>
        </ul>
        <h3>char</h3>
        <ul class="list">
            <li>char data type is a single 16-bit Unicode character</li>
            <li>Minimum value is '\u0000' (or 0)</li>
            <li>Maximum value is '\uffff' (or 65,535 inclusive)</li>
            <li>Char data type is used to store any character</li>
            <li>Example: char letterA = 'A'</li>
        </ul>
        <h1 id="05">&#128488; Variable Types</h1>
        <p>A variable provides us with named storage that our programs can manipulate. Each variable in Java has a
            <br>specific type, which determines the size and layout of the variable's memory; the range of values that
            can
            <br>be stored within that memory; and the set of operations that can be applied to the variable.</p>
        <p>You must declare all variables before they can be used. Following is the basic form of a variable declaration
            </p>
        <pre >data type variable [ = value][, variable [ = value] ...] ;
                                            </pre>
        <p>Here <i>data type</i> is one of Java's datatypes and <i>variable</i> is the name of the variable. To declare
            <br>more than one variable of the specified type, you can use a comma-separated list.</p>
        <p>This chapter will explain various variable types available in Java Language. There are three kinds of
            <br> variables in Java </p>
        <ul class="list">
            <li>Local variables</li>
            <li>Instance variables</li>
            <li>Class/Static variables</li>
        </ul>
        <h2>Local Variables</h2>
        <ul class="list">
            <li>
                <p>Local variables are declared in methods, constructors, or blocks.</p>
            </li>
            <li>
                <p>Local variables are created when the method, constructor or block is entered and the variable will be
                    <br>destroyed once it exits the method, constructor, or block.</p>
            </li>
            <li>
                <p>Access modifiers cannot be used for local variables.</p>
            </li>
            <li>
                <p>Local variables are visible only within the declared method, constructor, or block.</p>
            </li>
            <li>
                <p>Local variables are implemented at stack level internally.</p>
            </li>
            <li>
                <p>There is no default value for local variables, so local variables should be declared and an initial
                    <br> value should be assigned before the first use.</p>
            </li>
        </ul>
        <h3>Example</h3>
        <p>Here, <i>age</i> is a local variable. This is defined inside <i>pupAge()</i> method and its scope is limited
            to only this method.</p>
        <pre  style=""><span >public</span><span > </span><span >class</span><span > </span><span >Test</span><span > </span><span >{</span><span >
                                                    </span><span >public</span><span > </span><span >void</span><span > pupAge</span><span >()</span><span > </span><span >{</span><span >
                                                       </span><span >int</span><span > age </span><span >=</span><span > </span><span>0</span><span >;</span><span >
                                                       age </span><span >=</span><span > age </span><span >+</span><span > </span><span>7</span><span >;</span><span >
                                                       </span><span >System</span><span >.</span><span >out</span><span >.</span><span >println</span><span >(</span><span >"Puppy age is : "</span><span > </span><span >+</span><span > age</span><span >);</span><span >
                                                    </span><span >}</span><span >
                                                 
                                                    </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >{</span><span >
                                                       </span><span >Test</span><span > test </span><span >=</span><span > </span><span >new</span><span > </span><span >Test</span><span >();</span><span >
                                                       test</span><span >.</span><span >pupAge</span><span >();</span><span >
                                                    </span><span >}</span><span >
                                                 </span><span >}</span></pre>
        <p>This will produce the following result </p>

        <h3>Output</h3>
        <pre >Puppy age is: 7
                                                </pre>
        <h2>Instance Variables</h2>
        <ul class="list">
            <li>
                <p>Instance variables are declared in a class, but outside a method, constructor or any block.</p>
            </li>
            <li>
                <p>When a space is allocated for an object in the heap, a slot for each instance variable value is
                    <br>created.</p>
            </li>
            <li>
                <p>Instance variables are created when an object is created with the use of the keyword 'new' and
                    <br> destroyed when the object is destroyed.</p>
            </li>
            <li>
                <p>Instance variables hold values that must be referenced by more than one method, constructor or block,
                    <br>or essential parts of an object's state that must be present throughout the class.</p>
            </li>
            <li>
                <p>Instance variables can be declared in class level before or after use.</p>
            </li>
            <li>
                <p>Access modifiers can be given for instance variables.</p>
            </li>
            <li>
                <p>The instance variables are visible for all methods, constructors and block in the class. Normally, it
                    <br>is recommended to make these variables private (access level). However, visibility for
                    subclasses
                    <br> can be given for these variables with the use of access modifiers.</p>
            </li>
            <li>
                <p>Instance variables have default values. For numbers, the default value is 0, for Booleans it is
                    <br> false, and for object references it is null. Values can be assigned during the declaration or
                    within
                    <br> the constructor.</p>
            </li>
            <li>
                <p>Instance variables can be accessed directly by calling the variable name inside the class. However,
                    <br> within static methods (when instance variables are given accessibility), they should be called
                    using
                    <br> the fully qualified name. <i>ObjectReference.VariableName</i>.</p>
            </li>
        </ul>
        <h3>Example</h3>
        <pre  style=""><span >import</span><span > java</span><span >.</span><span >io</span><span >.*;</span><span >
                                                    </span><span >public</span><span > </span><span >class</span><span > </span><span >Employee</span><span > </span><span >{</span><span >
                                                    
                                                       </span><span >// this instance variable is visible for any child class.</span><span >
                                                       </span><span >public</span><span > </span><span >String</span><span > name</span><span >;</span><span >
                                                    
                                                       </span><span >// salary  variable is visible in Employee class only.</span><span >
                                                       </span><span >private</span><span > </span><span >double</span><span > salary</span><span >;</span><span >
                                                    
                                                       </span><span >// The name variable is assigned in the constructor.</span><span >
                                                       </span><span >public</span><span > </span><span >Employee</span><span > </span><span >(</span><span >String</span><span > empName</span><span >)</span><span > </span><span >{</span><span >
                                                          name </span><span >=</span><span > empName</span><span >;</span><span >
                                                       </span><span >}</span><span >
                                                    
                                                       </span><span >// The salary variable is assigned a value.</span><span >
                                                       </span><span >public</span><span > </span><span >void</span><span > setSalary</span><span >(</span><span >double</span><span > empSal</span><span >)</span><span > </span><span >{</span><span >
                                                          salary </span><span >=</span><span > empSal</span><span >;</span><span >
                                                       </span><span >}</span><span >
                                                    
                                                       </span><span >// This method prints the employee details.</span><span >
                                                       </span><span >public</span><span > </span><span >void</span><span > printEmp</span><span >()</span><span > </span><span >{</span><span >
                                                          </span><span >System</span><span >.</span><span >out</span><span >.</span><span >println</span><span >(</span><span >"name  : "</span><span > </span><span >+</span><span > name </span><span >);</span><span >
                                                          </span><span >System</span><span >.</span><span >out</span><span >.</span><span >println</span><span >(</span><span >"salary :"</span><span > </span><span >+</span><span > salary</span><span >);</span><span >
                                                       </span><span >}</span><span >
                                                    
                                                       </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >{</span><span >
                                                          </span><span >Employee</span><span > empOne </span><span >=</span><span > </span><span >new</span><span > </span><span >Employee</span><span >(</span><span >"Ransika"</span><span >);</span><span >
                                                          empOne</span><span >.</span><span >setSalary</span><span >(</span><span>1000</span><span >);</span><span >
                                                          empOne</span><span >.</span><span >printEmp</span><span >();</span><span >
                                                       </span><span >}</span><span >
                                                    </span><span >}</span></pre>
        <p>This will produce the following result </p>
        <h3>Output</h3>
        <pre >name  : Ransika
                                                        salary :1000.0
                                                        </pre>
        <h2>Class/Static Variables</h2>
        <ul class="list">
            <li>
                <p>Class variables also known as static variables are declared with the static keyword in a class, but
                    <br> outside a method, constructor or a block.</p>
            </li>
            <li>
                <p>There would only be one copy of each class variable per class, regardless of how many objects are
                    <br>created from it.</p>
            </li>
            <li>
                <p>Static variables are rarely used other than being declared as constants. Constants are variables that
                    <br>are declared as public/private, final, and static. Constant variables never change from their
                    <br> initial value.</p>
            </li>
            <li>
                <p>Static variables are stored in the static memory. It is rare to use static variables other than
                    <br> declared final and used as either public or private constants.</p>
            </li>
            <li>
                <p>Static variables are created when the program starts and destroyed when the program stops.</p>
            </li>
            <li>
                <p>Visibility is similar to instance variables. However, most static variables are declared public since
                    <br> they must be available for users of the class.</p>
            </li>
            <li>
                <p>Default values are same as instance variables. For numbers, the default value is 0; for Booleans, it
                    <br> is false; and for object references, it is null. Values can be assigned during the declaration
                    or
                    <br> within the constructor. Additionally, values can be assigned in special static initializer
                    blocks.
                </p>
            </li>
            <li>
                <p>Static variables can be accessed by calling with the class name <i>ClassName.VariableName</i>.</p>
            </li>
            <li>
                <p>When declaring class variables as public static final, then variable names (constants) are all in
                    <br> upper case. If the static variables are not public and final, the naming syntax is the same as
                    <br>instance and local variables.</p>
            </li>
        </ul>
        <h1 id="06"> &#128488; Modifier Types</h1>
        <br>
        <p>Modifiers are keywords that you add to those definitions to change their meanings. Java language has a wide
            <br> variety of modifiers, including the following </p>
        <ul class="list">
            <li>
                <p> Java Access Modifiers</p>
            </li>
            <li>
                <p>Non Access Modifiers</p>
            </li>
        </ul>
        <p>To use a modifier, you include its keyword in the definition of a class, method, or variable. The modifier
            <br> precedes the rest of the statement, as in the following example.</p>
        <h3>Example</h3>
        <pre  style=""><i><span >public</span></i><span > </span><span >class</span><span > className </span><span >{</span><span >
                                                                </span><span >// ...</span><span >
                                                             </span><span >}</span><span >
                                                             
                                                             </span><i><span >private</span></i><span > </span><span >boolean</span><span > myFlag</span><span >;</span><span >
                                                             </span><i><span >static</span><span > </span><span >final</span></i><span > </span><span >double</span><span > weeks </span><span >=</span><span > </span><span>9.5</span><span >;</span><span >
                                                             </span><i><span >protected</span><span > </span><span >static</span><span > </span><span >final</span></i><span > </span><span >int</span><span > BOXWIDTH </span><span >=</span><span > </span><span>42</span><span >;</span><span >
                                                             
                                                             </span><i><span >public</span><span > </span><span >static</span></i><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span >[]</span><span > arguments</span><span >)</span><span > </span><span >{</span><span >
                                                                </span><span >// body of method</span><span >
                                                             </span><span >}</span></pre>
        <h2>Access Control Modifiers</h2>

        <p>Java provides a number of access modifiers to set access levels for classes, variables, methods and
            <br>constructors. The four access levels are </p>
        <ul class="list">
            <li>Visible to the package, the default. No modifiers are needed.</li>
            <li>Visible to the class only (private).</li>
            <li>Visible to the world (public).</li>
            <li>Visible to the package and all subclasses (protected).</li>
        </ul>
        <h2>Non-Access Modifiers</h2>
        <p>Java provides a number of non-access modifiers to achieve many other functionality.</p>
        <ul class="list">
            <li>
                <p>The <i>static</i> modifier for creating class methods and variables.</p>
            </li>
            <li>
                <p>The <i>final</i> modifier for finalizing the implementations of classes, methods, and variables.</p>
            </li>
            <li>
                <p>The <i>abstract</i> modifier for creating abstract classes and methods.</p>
            </li>
            <li>
                <p>The <i>synchronized</i> and <i>volatile</i> modifiers, which are used for threads.</p>
            </li>
        </ul>
        <h1>Basic Operators</h1>
        <p>Java provides a rich set of operators to manipulate variables. We can divide all the Java operators into the
            <br> following groups </p>
        <ul class="list">
            <li>Arithmetic Operators</li>
            <li>Relational Operators</li>
            <li>Bitwise Operators</li>
            <li>Logical Operators</li>
            <li>Assignment Operators</li>
            <li>Misc Operators</li>
        </ul>
        <h2>The Arithmetic Operators</h2>
        <table width=595px >
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="width:30%; text-align:center;vertical-align:middle">+ (Addition)</td>
                    <td style="width:40%;">Adds values on either side of the operator.</td>
                    <td style="text-align:center;vertical-align:middle">A + B will give 30</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">- (Subtraction)</td>
                    <td>Subtracts right-hand operand from left-hand operand.</td>
                    <td style="text-align:center;vertical-align:middle">A - B will give -10</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">* (Multiplication)</td>
                    <td>Multiplies values on either side of the operator.</td>
                    <td style="text-align:center;vertical-align:middle">A * B will give 200</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">/ (Division)</td>
                    <td>Divides left-hand operand by right-hand operand.</td>
                    <td style="text-align:center;vertical-align:middle">B / A will give 2</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">% (Modulus)</td>
                    <td>Divides left-hand operand by right-hand operand and returns remainder.</td>
                    <td style="text-align:center;vertical-align:middle">B % A will give 0</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">++ (Increment)</td>
                    <td>Increases the value of operand by 1.</td>
                    <td style="text-align:center;vertical-align:middle">B++ gives 21</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">-- (Decrement)</td>
                    <td>Decreases the value of operand by 1.</td>
                    <td style="text-align:center;vertical-align:middle">B-- gives 19</td>
                </tr>
            </tbody>
        </table  >
        <h2>The Relational Operators</h2>
        <p>There are following relational operators supported by Java language.</p>
        <p>Assume variable A holds 10 and variable B holds 20, then </p>
        <table width=595px >
            <tbody>
                <tr>
                    <th style="width:24%; text-align:center;">Operator</th>
                    <th style="width:48%; text-align:center;">Description</th>
                    <th style="width:28%; text-align:center;">Example</th>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">== (equal to)</td>
                    <td>Checks if the values of two operands are equal or not, if yes then condition becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A == B) is not true.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">!= (not equal to)</td>
                    <td>Checks if the values of two operands are equal or not, if values are not equal then condition
                        becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A != B) is true.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&gt; (greater than)</td>
                    <td>Checks if the value of left operand is greater than the value of right operand, if yes then
                        condition becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A &gt; B) is not true.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&lt; (less than)</td>
                    <td>Checks if the value of left operand is less than the value of right operand, if yes then
                        condition becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A &lt; B) is true.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&gt;= (greater than or equal to)</td>
                    <td>Checks if the value of left operand is greater than or equal to the value of right operand, if
                        yes then condition becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A &gt;= B) is not true.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&lt;= (less than or equal to)</td>
                    <td>Checks if the value of left operand is less than or equal to the value of right operand, if yes
                        then condition becomes true.</td>
                    <td style="text-align:center;vertical-align:middle">(A &lt;= B) is true.</td>
                </tr>
            </tbody>
        </table>

        <table width=595px>
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="width:25%;text-align:center;vertical-align:middle">&amp; (bitwise and)</td>
                    <td style="width:45%;vertical-align:middle">Binary AND Operator copies a bit to the result if it
                        exists in both operands.</td>
                    <td style="width:35%;text-align:center; vertical-align:middle">(A &amp; B) will give 12 which is
                        0000 1100</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">| (bitwise or)</td>
                    <td style="vertical-align:middle;">Binary OR Operator copies a bit if it exists in either operand.
                    </td>
                    <td style="text-align:center;vertical-align:middle">(A | B) will give 61 which is 0011 1101</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">^ (bitwise XOR)</td>
                    <td style="vertical-align:middle;">Binary XOR Operator copies the bit if it is set in one operand
                        but not both.</td>
                    <td style="text-align:center;vertical-align:middle">(A ^ B) will give 49 which is 0011 0001</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">~ (bitwise compliment)</td>
                    <td style="vertical-align:middle;">Binary Ones Complement Operator is unary and has the effect of
                        'flipping' bits.</td>
                    <td style="text-align:center;vertical-align:middle">(~A ) will give -61 which is 1100 0011 in 2's
                        complement form due to a signed binary number.</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&lt;&lt; (left shift)</td>
                    <td style="vertical-align:middle;">Binary Left Shift Operator. The left operands value is moved left
                        by the number of bits specified by the right operand.</td>
                    <td style="text-align:center;vertical-align:middle">A &lt;&lt; 2 will give 240 which is 1111 0000
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&gt;&gt; (right shift)</td>
                    <td>Binary Right Shift Operator. The left operands value is moved right by the number of bits
                        specified by the right operand.</td>
                    <td style="text-align:center;vertical-align:middle">A &gt;&gt; 2 will give 15 which is 1111</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&gt;&gt;&gt; (zero fill right shift)</td>
                    <td>Shift right zero fill operator. The left operands value is moved right by the number of bits
                        specified by the right operand and shifted values are filled up with zeros.</td>
                    <td style="text-align:center;vertical-align:middle">A &gt;&gt;&gt;2 will give 15 which is 0000 1111
                    </td>
                </tr>
            </tbody>
        </table>

        <h2>The Logical Operators</h2>

        <table width=595px>
            <tbody>
                <tr>
                    <th style="text-align:center;width:23%;">Operator</th>
                    <th>Description</th>
                    <th style="text-align:center;width:24%">Example</th>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">&amp;&amp; (logical and)</td>
                    <td>Called Logical AND operator. If both the operands are non-zero, then the condition becomes true.
                    </td>
                    <td style="text-align:center;vertical-align:middle">(A &amp;&amp; B) is false</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">|| (logical or)</td>
                    <td>Called Logical OR Operator. If any of the two operands are non-zero, then the condition becomes
                        true.</td>
                    <td style="text-align:center;vertical-align:middle">(A || B) is true</td>
                </tr>
                <tr>
                    <td style="text-align:center;vertical-align:middle">! (logical not)</td>
                    <td>Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is
                        true then Logical NOT operator will make false.</td>
                    <td style="text-align:center;vertical-align:middle">!(A &amp;&amp; B) is true</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table width=595px >
            <tbody>
                <tr>
                    <th style="text-align:center; width:20%;">Category</th>
                    <th>Operator</th>
                    <th style="text-align:center; width:20%;">Associativity</th>
                </tr>
                <tr>
                    <td>Postfix</td>
                    <td>expression++ expression--</td>
                    <td>Left to right</td>
                </tr>
                <tr>
                    <td>Unary</td>
                    <td>++expression –-expression +expression –expression ~ !</td>
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
                    <td>&lt;&lt; &gt;&gt; &gt;&gt;&gt;</td>
                    <td>Left to right</td>
                </tr>
                <tr>
                    <td>Relational</td>
                    <td>&lt; &gt; &lt;= &gt;= instanceof</td>
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
                    <td>= += -= *= /= %= ^= |= &lt;&lt;= &gt;&gt;= &gt;&gt;&gt;=</td>
                    <td>Right to left</td>
                </tr>
            </tbody>
        </table>

        <h1 id="07">&#128488; Loop Control</h1>
        <hr>
        <p>There may be a situation when you need to execute a block of code several number of times. In general,
           <br> statements are executed sequentially: The first statement in a function is executed first, followed by the
           <br> second, and so on.</p>
        <p>Programming languages provide various control structures that allow for more complicated execution paths.</p>
        <p>A <b>loop</b> statement allows us to execute a statement or group of statements multiple times and following
            <br>is the general form of a loop statement in most of the programming languages </p>
        <img src="loop_architecture.jpeg" alt="Loop Architecture">
        <p>Java programming language provides the following types of loop to handle looping requirements. Click the
            <br>following links to check their detail.</p>
        <table width=595px >
            <tbody>
                <tr>
                    <th>Sr.No.</th>
                    <th>Loop &amp; Description</th>
                </tr>
                <tr>
                    <td class="ts">1</td>
                    <td><a href="/java/java_while_loop.htm">while loop</a>
                        <p>Repeats a statement or group of statements while a given condition is true. It tests the
                            condition before executing the loop body.</p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">2</td>
                    <td><a href="/java/java_for_loop.htm">for loop</a>
                        <p>Execute a sequence of statements multiple times and abbreviates the code that manages the
                            loop variable.</p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">3</td>
                    <td><a href="/java/java_do_while_loop.htm">do...while loop</a>
                        <p>Like a while statement, except that it tests the condition at the end of the loop body.</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Loop Control Statements</h2>
        <p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all
            <br>automatic objects that were created in that scope are destroyed.</p>
        <p>Java supports the following control statements. Click the following links to check their detail.</p>
        <table width=595px>
            <tbody>
                <tr>
                    <th>Sr.No.</th>
                    <th>Control Statement &amp; Description</th>
                </tr>
                <tr>
                    <td class="ts">1</td>
                    <td><a href="/java/java_break_statement.htm">break statement</a>
                        <p>Terminates the <b>loop</b> or <b>switch</b> statement and transfers execution to the
                            statement immediately following the loop or switch.</p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">2</td>
                    <td><a href="/java/java_continue_statement.htm">continue statement</a>
                        <p>Causes the loop to skip the remainder of its body and immediately retest its condition prior
                            to reiterating.</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Enhanced for loop in Java</h2>
        <p>As of Java 5, the enhanced for loop was introduced. This is mainly used to traverse collection of elements
            <br> including arrays.</p>
        <h3>Syntax</h3>
        <p>Following is the syntax of enhanced for loop </p>
        <pre >for(declaration : expression) {
                    // Statements
                 }
                 </pre>
        <ul class="list">
            <li>
                <p><b>Declaration</b>  The newly declared block variable, is of a type compatible with the elements of
                    <br>the array you are accessing. The variable will be available within the for block and its value would
                    <br> be the same as the current array element.</p>
            </li>
            <li>
                <p><b>Expression</b>  This evaluates to the array you need to loop through. The expression can be an
                    <br> array variable or method call that returns an array.</p>
            </li>
        </ul>
        <br>
        <h1 id="08">&#128488; Decision Making</h1>
        <p>Decision making structures have one or more conditions to be evaluated or tested by the program, along with a
            <br>statement or statements that are to be executed if the condition is determined to be true, and optionally.
        <p>Following is the general form of a typical decision making structure found in most of the programming
            <br> languages </p>
        <img src="decision_making.jpg" alt="Decision Making">
        <p>Java programming language provides following types of decision making statements. Click the following links
            <br> to check their detail.</p>
        <table width=595px>
            <tbody>
                <tr>
                    <th>Sr.No.</th>
                    <th>Statement &amp; Description</th>
                </tr>
                <tr>
                    <td class="ts">1</td>
                    <td><a href="/java/if_statement_in_java.htm">if statement</a>
                        <p>An <b>if statement</b> consists of a boolean expression followed by one or more statements.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">2</td>
                    <td><a href="/java/if_else_statement_in_java.htm">if...else statement</a>
                        <p>An <b>if statement</b> can be followed by an optional <b>else statement</b>, which executes
                            when the boolean expression is false.</p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">3</td>
                    <td><a href="/java/nested_if_statements_in_java.htm">nested if statement</a>
                        <p>You can use one <b>if</b> or <b>else if</b> statement inside another <b>if</b> or <b>else
                                if</b> statement(s).</p>
                    </td>
                </tr>
                <tr>
                    <td class="ts">4</td>
                    <td><a href="/java/switch_statement_in_java.htm">switch statement</a>
                        <p>A <b>switch</b> statement allows a variable to be tested for equality against a list of
                            values.</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <h1 id="09">&#128488; Files and I/O</h1>
        <p>The java.io package contains nearly every class you might ever need to perform input and output (I/O) in
            <br> Java. All these streams represent an input source and an output destination. The stream in the java.io
            <br> package supports many data such as primitives, object, localized characters, etc.</p>
        <h2>Stream</h2>
        <p>A stream can be defined as a sequence of data. There are two kinds of Streams </p>
        <ul class="list">
            <li>
                <p><b>InPutStream</b>  The InputStream is used to read data from a source.</p>
            </li>
            <li>
                <p><b>OutPutStream</b>  The OutputStream is used for writing data to a destination.</p>
            </li>
        </ul>
        <img src="streams.png" alt="Streams">
        <p>Java provides strong but flexible support for I/O related to files and networks but this tutorial covers very
            <br> basic functionality related to streams and I/O. We will see the most commonly used examples one by one </p>
        <h3>Byte Streams</h3>
        <p>Java byte streams are used to perform input and output of 8-bit bytes. Though there are many classes related
            <br>  to byte streams but the most frequently used classes are, <b>FileInputStream</b> and
            <b>FileOutputStream</b>. <br> Following is an example which makes use of these two classes to copy an input file
            into an output file </p>
        <p><b>Example</b></p>
        <pre  style=""><span >import</span><span > java</span><span >.</span><span >io</span><span >.*;</span><span >
            </span><span >public</span><span > </span><span >class</span><span > </span><span >CopyFile</span><span > </span><span >{</span><span >
            
               </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >throws</span><span > </span><span >IOException</span><span > </span><span >{</span><span >  
                  </span><span >FileInputStream</span><span > </span><span >in</span><span > </span><span >=</span><span > </span><span >null</span><span >;</span><span >
                  </span><span >FileOutputStream</span><span > </span><span >out</span><span > </span><span >=</span><span > </span><span >null</span><span >;</span><span >
            
                  </span><span >try</span><span > </span><span >{</span><span >
                     </span><span >in</span><span > </span><span >=</span><span > </span><span >new</span><span > </span><span >FileInputStream</span><span >(</span><span >"input.txt"</span><span >);</span><span >
                     </span><span >out</span><span > </span><span >=</span><span > </span><span >new</span><span > </span><span >FileOutputStream</span><span >(</span><span >"output.txt"</span><span >);</span><span >
                     
                     </span><span >int</span><span > c</span><span >;</span><span >
                     </span><span >while</span><span > </span><span >((</span><span >c </span><span >=</span><span > </span><span >in</span><span >.</span><span >read</span><span >())</span><span > </span><span >!=</span><span > </span><span >-</span><span>1</span><span >)</span><span > </span><span >{</span><span >
                        </span><span >out</span><span >.</span><span >write</span><span >(</span><span >c</span><span >);</span><span >
                     </span><span >}</span><span >
                  </span><span >}</span><span >finally</span><span > </span><span >{</span><span >
                     </span><span >if</span><span > </span><span >(</span><span >in</span><span > </span><span >!=</span><span > </span><span >null</span><span >)</span><span > </span><span >{</span><span >
                        </span><span >in</span><span >.</span><span >close</span><span >();</span><span >
                     </span><span >}</span><span >
                     </span><span >if</span><span > </span><span >(</span><span >out</span><span > </span><span >!=</span><span > </span><span >null</span><span >)</span><span > </span><span >{</span><span >
                        </span><span >out</span><span >.</span><span >close</span><span >();</span><span >
                     </span><span >}</span><span >
                  </span><span >}</span><span >
               </span><span >}</span><span >
            </span><span >}</span></pre>
        <p>Now let's have a file <b>input.txt</b> with the following content </p>

        <pre >This is test for copy file.
            </pre>
        <p>As a next step, compile the above program and execute it, which will result in creating output.txt file with
            <br> the same content as we have in input.txt. So let's put the above code in CopyFile.java file and do the
            <br> following </p>
        <pre >$javac CopyFile.java
                $java CopyFile
                </pre>
        <h3>Character Streams</h3>
        <p>Java <b>Byte</b> streams are used to perform input and output of 8-bit bytes, whereas Java <b>Character</b>
            <br>streams are used to perform input and output for 16-bit unicode. Though there are many classes related to
            <br> character streams but the most frequently used classes are, <b>FileReader</b> and <b>FileWriter</b>. Though
            <br> internally FileReader uses FileInputStream and FileWriter uses FileOutputStream but here the major
            <br> difference is that FileReader reads two bytes at a time and FileWriter writes two bytes at a time.</p>

        <p>We can re-write the above example, which makes the use of these two classes to copy an input file (having
            <br> unicode characters) into an output file </p>

        <p><b>Example</b></p>
        <pre  style=""><span >import</span><span > java</span><span >.</span><span >io</span><span >.*;</span><span >
                </span><span >public</span><span > </span><span >class</span><span > </span><span >CopyFile</span><span > </span><span >{</span><span >
                
                   </span><span >public</span><span > </span><span >static</span><span > </span><span >void</span><span > main</span><span >(</span><span >String</span><span > args</span><span >[])</span><span > </span><span >throws</span><span > </span><span >IOException</span><span > </span><span >{</span><span >
                      </span><span >FileReader</span><span > </span><span >in</span><span > </span><span >=</span><span > </span><span >null</span><span >;</span><span >
                      </span><span >FileWriter</span><span > </span><span >out</span><span > </span><span >=</span><span > </span><span >null</span><span >;</span><span >
                
                      </span><span >try</span><span > </span><span >{</span><span >
                         </span><span >in</span><span > </span><span >=</span><span > </span><span >new</span><span > </span><span >FileReader</span><span >(</span><span >"input.txt"</span><span >);</span><span >
                         </span><span >out</span><span > </span><span >=</span><span > </span><span >new</span><span > </span><span >FileWriter</span><span >(</span><span >"output.txt"</span><span >);</span><span >
                         
                         </span><span >int</span><span > c</span><span >;</span><span >
                         </span><span >while</span><span > </span><span >((</span><span >c </span><span >=</span><span > </span><span >in</span><span >.</span><span >read</span><span >())</span><span > </span><span >!=</span><span > </span><span >-</span><span>1</span><span >)</span><span > </span><span >{</span><span >
                            </span><span >out</span><span >.</span><span >write</span><span >(</span><span >c</span><span >);</span><span >
                         </span><span >}</span><span >
                      </span><span >}</span><span >finally</span><span > </span><span >{</span><span >
                         </span><span >if</span><span > </span><span >(</span><span >in</span><span > </span><span >!=</span><span > </span><span >null</span><span >)</span><span > </span><span >{</span><span >
                            </span><span >in</span><span >.</span><span >close</span><span >();</span><span >
                         </span><span >}</span><span >
                         </span><span >if</span><span > </span><span >(</span><span >out</span><span > </span><span >!=</span><span > </span><span >null</span><span >)</span><span > </span><span >{</span><span >
                            </span><span >out</span><span >.</span><span >close</span><span >();</span><span >
                         </span><span >}</span><span >
                      </span><span >}</span><span >
                   </span><span >}</span><span >
                </span><span >}</span></pre>

        <p>Now let's have a file <b>input.txt</b> with the following content </p>

        <pre >This is test for copy file.
                </pre>

        <h2>Standard Streams</h2>
        <p>All the programming languages provide support for standard I/O where the user's program can take input from a
            <br>  keyboard and then produce an output on the computer screen. If you are aware of C or C++ programming
            <br> languages, then you must be aware of three standard devices STDIN, STDOUT and STDERR. Similarly, Java
            <br> provides the following three standard streams </p>
        <ul class="list">
            <li>
                <p><b>Standard Input</b>  This is used to feed the data to user's program and usually a keyboard is
                    <br>used as standard input stream and represented as <b>System.in</b>.</p>
            </li>
            <li>
                <p><b>Standard Output</b>  This is used to output the data produced by the user's program and usually a
                   <br> computer screen is used for standard output stream and represented as <b>System.out</b>.</p>
            </li>
            <li>
                <p><b>Standard Error</b>  This is used to output the error data produced by the user's program and
                    <br> usually a computer screen is used for standard error stream and represented as <b>System.err</b>.
                </p>
            </li>
        </ul>
        <p>Following is a simple program, which creates <b>InputStreamReader</b> to read standard input stream until the
            <br> user types a "q"</p>
        <p>Here is a hierarchy of classes to deal with Input and Output streams.</p>
       













    </div>
</body>

</html>