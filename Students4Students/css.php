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
    <title>CSS</title>
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
                <a href="#01">&#128488;  Introduction</a>
                <a href="#02">&#128488;  Syntax</a>
                <a href="#03">&#128488;  Inclusion </a>
                <a href="#04">&#128488;  Measurement Units</a>
                <a href="#05">&#128488;  Colours</a>
                <a href="#06">&#128488;  Backgrounds</a>
                <a href="#07">&#128488;  Text</a>
                <a href="#08">&#128488;  Font</a>
                <a href="#09">&#128488;  Tables</a>
                <a href="#10">&#128488;  Borders</a>
                <a href="#11">&#128488;  Lists</a>
                <a href="#12">&#128488;  Padding</a>
                <a href="#13">&#128488;  Cursors </a>
                <a href="#14">&#128488;  Outlines</a>
                <a href="#15">&#128488;  Dimension and Scrollbars</a>
                

            </div>


        </div>

        <div id="content">
            <hr>
            <h1>&#128488;  CSS Tutorial</h1>
            <hr>
            <p><b>CSS</b> is used to control the style of a web document in a simple and easy way.</p>
            <p><b>CSS</b> is the acronym for <b>"Cascading Style Sheet"</b>. This tutorial covers both the versions
                CSS1,CSS2 and CSS3, and gives a complete understanding of CSS, starting from its basics to advanced
                concepts.</p>
            <h2>Why to Learn CSS?</h2>
            <p><b>Cascading Style Sheets</b>, fondly referred to as <b>CSS</b>, is a simple design language intended to
                simplify the process of making web pages presentable.</p>
            <p><b>CSS</b> is a MUST for students and working professionals to become a great Software Engineer specially
                when they are working in Web Development Domain. I will list down some of the key advantages of learning
                CSS:</p>
            <ul class="list">
                <li>
                    <p><b>Create Stunning Web site</b> - CSS handles the look and feel part of a web page. Using CSS,
                        you can control the color of the text, the style of fonts, the spacing between paragraphs, how
                        columns are sized and laid out, what background images or colors are used, layout
                        designs,variations in display for different devices and screen sizes as well as a variety of
                        other effects.</p>
                </li>
                <li>
                    <p><b>Become a web designer</b> - If you want to start a carrer as a professional web designer, HTML
                        and CSS designing is a must skill.</p>
                </li>
                <li>
                    <p><b>Control web</b> - CSS is easy to learn and understand but it provides powerful control over
                        the presentation of an HTML document. Most commonly, CSS is combined with the markup languages
                        HTML or XHTML.</p>
                </li>
                <li>
                    <p><b>Learn other languages</b> - Once you understands the basic of HTML and CSS then other related
                        technologies like javascript, php, or angular are become easier to understand.</p>
                </li>
            </ul>
            <h2>Applications of CSS</h2>
            <p>As mentioned before, CSS is one of the most widely used style language over the web. I'm going to list
                few of them here:</p>
            <ul class="list">
                <li>
                    <p><b>CSS saves time</b> - You can write CSS once and then reuse same sheet in multiple HTML pages.
                        You can define a style for each HTML element and apply it to as many Web pages as you want.</p>
                </li>
                <li>
                    <p><b>Pages load faster</b> - If you are using CSS, you do not need to write HTML tag attributes
                        every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So
                        less code means faster download times.</p>
                </li>
                <li>
                    <p><b>Easy maintenance</b> - To make a global change, simply change the style, and all elements in
                        all the web pages will be updated automatically.</p>
                </li>
                <li>
                    <p><b>Superior styles to HTML</b> - CSS has a much wider array of attributes than HTML, so you can
                        give a far better look to your HTML page in comparison to HTML attributes.</p>
                </li>
                <li>
                    <p><b>Multiple Device Compatibility</b> - Style sheets allow content to be optimized for more than
                        one type of device. By using the same HTML document, different versions of a website can be
                        presented for handheld devices such as PDAs and cell phones or for printing.</p>
                </li>
                <li>
                    <p><b>Global web standards </b>- Now HTML attributes are being deprecated and it is being
                        recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them
                        compatible to future browsers.</p>
                </li>
            </ul>
            <h2>Audience</h2>
            <p>This <b>CSS tutorial</b> will help both students as well as professionals who want to make their websites
                or personal blogs more attractive.</p>
            <h2>Prerequisites</h2>
            <p>You should be familiar with:</p>
            <ul class="list">
                <li>Basic word processing using any text editor.</li>
                <li>How to create directories and files.</li>
                <li>How to navigate through different directories.</li>
                <li>Internet browsing using popular browsers like Internet Explorer or Firefox.</li>
                <li>Developing simple Web Pages using HTML or XHTML.</li>
            </ul>
            <h1>What is CSS?</h1>
            <p><b>C</b>ascading <b>S</b>tyle <b>S</b>heets, fondly referred to as CSS, is a simple design language
                intended to simplify the process of making web pages presentable.</p>
            <p>CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the
                style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background
                images or colors are used, layout designs,variations in display for different devices and screen sizes
                as well as a variety of other effects.</p>
            <p>CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML
                document. Most commonly, CSS is combined with the markup languages HTML or XHTML.</p>
            <h2>Advantages of CSS</h2>
            <ul class="list">
                <li>
                    <p><b>CSS saves time</b>  You can write CSS once and then reuse same sheet in multiple HTML pages.
                        You can define a style for each HTML element and apply it to as many Web pages as you want.</p>
                </li>
                <li>
                    <p><b>Pages load faster</b>  If you are using CSS, you do not need to write HTML tag attributes
                        every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So
                        less code means faster download times.</p>
                </li>
                <li>
                    <p><b>Easy maintenance</b>  To make a global change, simply change the style, and all elements in
                        all the web pages will be updated automatically.</p>
                </li>
                <li>
                    <p><b>Superior styles to HTML</b>  CSS has a much wider array of attributes than HTML, so you can
                        give a far better look to your HTML page in comparison to HTML attributes.</p>
                </li>
                <li>
                    <p><b>Multiple Device Compatibility</b>  Style sheets allow content to be optimized for more than
                        one type of device. By using the same HTML document, different versions of a website can be
                        presented for handheld devices such as PDAs and cell phones or for printing.</p>
                </li>
                <li>
                    <p><b>Global web standards</b>  Now HTML attributes are being deprecated and it is being
                        recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them
                        compatible to future browsers.</p>
                </li>
                <li>
                    <p><b>Offline Browsing</b> &minus; CSS can store web applications locally with the help of an
                        offline cache.Using of this, we can view offline websites.The cache also ensures faster loading
                        and better overall performance of the website. </p>
                </li>
                <li>
                    <p><b>Platform Independence</b> &minus; The Script offer consistent platform independence and can
                        support latest browsers as well. </p>
                </li>
            </ul>
            <h2>Who Creates and Maintains CSS?</h2>
            <p>CSS is created and maintained through a group of people within the W3C called the CSS Working Group. The
                CSS Working Group creates documents called specifications. When a specification has been discussed and
                officially ratified by the W3C members, it becomes a recommendation.</p>
            <p>These ratified specifications are called recommendations because the W3C has no control over the actual
                implementation of the language. Independent companies and organizations create that software.</p>
            <p><b>NOTE</b>  The World Wide Web Consortium, or W3C is a group that makes recommendations about how the
                Internet works and how it should evolve.
            </p>
            <hr>
            <h1 id="02">&#128488;  Syntax</h1>
            <hr>
            <p>A CSS comprises of style rules that are interpreted by the browser and then applied to the corresponding
                elements in your document. A style rule is made of three parts </p>
            <ul class="list">
                <li>
                    <p><b>Selector</b>  A selector is an HTML tag at which a style will be applied. This could be any
                        tag like &lt;h1&gt; or &lt;table&gt; etc.</p>
                </li>
                <li>
                    <p><b>Property</b>  A property is a type of attribute of HTML tag. Put simply, all the HTML
                        attributes are converted into CSS properties. They could be <i>color</i>, <i>border</i> etc.</p>
                </li>
                <li>
                    <p><b>Value</b>  Values are assigned to properties. For example, <i>color</i> property can have
                        value either <i>red</i> or <i>#F1F1F1</i> etc.</p>
                </li>
            </ul>
            <p>You can put CSS Style Rule Syntax as follows </p>
            <pre class="result notranslate">
                selector { property: value }
            </pre>
            <img src="style/syntax.png" alt="Structure of Syntax">
            <h2>The Type Selectors</h2>
            <p>This is the same selector we have seen above. Again, one more example to give a color to all level 1
                headings </p>
            <pre>
                <span class="pln">h1 </span><span class="pun">{</span><span class="pln">
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36CFFF; </span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <h2>The Universal Selectors</h2>
            <p>Rather than selecting elements of a specific type, the universal selector quite simply matches the name
                of any element type </p>
            <pre>
                <span class="pun">*</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <h2>The Class Selectors</h2>
            <p>You can define style rules based on the class attribute of the elements. All the elements having that
                class will be formatted according to the defined rule.</p>
            <pre>
                <span class="pun">.</span><span class="pln">black </span><span class="pun">{</span><span class="pln">
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <h2>The ID Selectors</h2>
            <p>You can define style rules based on the <i>id</i> attribute of the elements. All the elements having that
                <i>id</i> will be formatted according to the defined rule.</p>
            <pre>
                <span class="com">#black {</span><span class="pln">
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <h2>The Child Selectors</h2>
            <p>You have seen the descendant selectors. There is one more type of selector, which is very similar to
                descendants but have different functionality. Consider the following example </p>
            <pre>
                <span class="pln">body </span><span class="pun">&gt;</span><span class="pln"> p </span><span class="pun">{</span><span class="pln">
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <h2>The Attribute Selectors</h2>
            <p>You can also apply styles to HTML elements with particular attributes. The style rule below will match
                all the input elements having a type attribute with a value of <i>text</i> </p>
            <p>The advantage to this method is that the &lt;input type = "submit" /&gt; element is unaffected, and the
                color applied only to the desired text fields.</p>
            <p>There are following rules applied to attribute selector.</p>
            <ul class="list">
                <li>
                    <p><b>p[lang]</b>  Selects all paragraph elements with a <i>lang</i> attribute.</p>
                </li>
                <li>
                    <p><b>p[lang="fr"]</b>  Selects all paragraph elements whose <i>lang</i> attribute has a value of
                        exactly "fr".</p>
                </li>
                <li>
                    <p><b>p[lang~="fr"]</b>  Selects all paragraph elements whose <i>lang</i> attribute contains the
                        word "fr".</p>
                </li>
                <li>
                    <p><b>p[lang|="en"]</b>  Selects all paragraph elements whose <i>lang</i> attribute contains values
                        that are exactly "en", or begin with "en-".</p>
                </li>
            </ul>
            <h2>Multiple Style Rules</h2>
            <p>You may need to define multiple style rules for a single element. You can define these rules to combine
                multiple properties and corresponding values into a single block as defined in the following example 
            </p>
            <pre>
                <span class="pln">h1 </span><span class="pun">{</span><span class="pln">
                color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36C;</span><span class="pln">
                font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln"> normal</span><span class="pun">;</span><span class="pln">
                letter</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="pln"> </span><span class="pun">.</span><span class="lit">4em</span><span class="pun">;</span><span class="pln">
                margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1em</span><span class="pun">;</span><span class="pln">
                text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln"> lowercase</span><span class="pun">;</span><span class="pln">
             </span><span class="pun">}</span>
            </pre>
            <p>Here all the property and value pairs are separated by a <b>semicolon (;)</b>. You can keep them in a
                single line or multiple lines. For better readability, we keep them in separate lines.
            </p>
            <hr>
            <h1 id="03">&#128488;  Inclusion</h1>
            <hr>
            <p>There are four ways to associate styles with your HTML document. Most commonly used methods are inline
                CSS and External CSS.</p>
            <h2>Embedded CSS- The &lt;style&gt; Element</h2>
            <p>You can put your CSS rules into an HTML document using the &lt;style&gt; element. This tag is placed
                inside the &lt;head&gt;...&lt;/head&gt; tags. Rules defined using this syntax will be applied to all the
                elements available in the document. Here is the generic syntax </p>
            <pre>
                <span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
                </span><span class="tag">&lt;html&gt;</span><span class="pln">
                   </span><span class="tag">&lt;head&gt;</span><span class="pln">
                      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/css"</span><span class="pln"> </span><span class="atn">media</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"all"</span><span class="tag">&gt;</span><span class="pln">
                         body </span><span class="pun">{</span><span class="pln">
                            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> linen</span><span class="pun">;</span><span class="pln">
                         </span><span class="pun">}</span><span class="pln">
                         h1 </span><span class="pun">{</span><span class="pln">
                            color</span><span class="pun">:</span><span class="pln"> maroon</span><span class="pun">;</span><span class="pln">
                            margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="pun">;</span><span class="pln">
                         </span><span class="pun">}</span><span class="pln">
                      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
                   </span><span class="tag">&lt;/head&gt;</span><span class="pln">   
                   </span><span class="tag">&lt;body&gt;</span><span class="pln">
                      </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is a heading</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
                      </span><span class="tag">&lt;p&gt;</span><span class="pln">This is a paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                </span><span class="tag">&lt;/html&gt;</span>
            </pre>
            <p>Attributes associated with &lt;style&gt; elements are </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center;">Attribute</th>
                        <th style="text-align:center;">Value</th>
                        <th style="text-align:center;">Description</th>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>text/css</td>
                        <td>Specifies the style sheet language as a content-type (MIME type). This is required
                            attribute.</td>
                    </tr>
                    <tr>
                        <td>media</td>
                        <td>
                            <p>screen</p>
                            <p>tty</p>
                            <p>tv</p>
                            <p>projection</p>
                            <p>handheld</p>
                            <p>print</p>
                            <p>braille</p>
                            <p>aural</p>
                            <p>all</p>
                        </td>
                        <td style="vertical-align:middle;">Specifies the device the document will be displayed on.
                            Default value is <i>all</i>. This is an optional attribute.</td>
                    </tr>
                </tbody>
            </table>
            <h2>Inline CSS  - The <i>style</i> Attribute</h2>
            <p>You can use <i>style</i> attribute of any HTML element to define style rules. These rules will be applied
                to that element only. Here is the generic syntax </p>
            <pre>
                &lt;element style = "...style rules...."&gt;
            </pre>
            <h3>Attributes</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center;">Attribute</th>
                        <th style="text-align:center;width:15%">Value</th>
                        <th style="text-align:center;">Description</th>
                    </tr>
                    <tr>
                        <td>style</td>
                        <td>style rules</td>
                        <td>The value of <i>style</i> attribute is a combination of style declarations separated by
                            semicolon (;).</td>
                    </tr>
                </tbody>
            </table>
            <h2>External CSS  - The &lt;link&gt; Element</h2>
            <p>The &lt;link&gt; element can be used to include an external stylesheet file in your HTML document.</p>
            <p>An external style sheet is a separate text file with <b>.css</b> extension. You define all the Style
                rules within this text file and then you can include this file in any HTML document using &lt;link&gt;
                element.</p>
            <pre>
                &lt;head&gt;
                    &lt;link type = "text/css" href = "..." media = "..." /&gt;
                &lt;/head&gt;
            </pre>
            <h3>Attributes</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center; width:15%;">Attribute</th>
                        <th style="text-align:center; width:20%;">Value</th>
                        <th style="text-align:center;">Description</th>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td style="vertical-align:middle;">text css</td>
                        <td>Specifies the style sheet language as a content-type (MIME type). This attribute is
                            required.</td>
                    </tr>
                    <tr>
                        <td>href</td>
                        <td style="vertical-align:middle;">URL</td>
                        <td>Specifies the style sheet file having Style rules. This attribute is a required.</td>
                    </tr>
                    <tr>
                        <td>media</td>
                        <td>
                            <p>screen</p>
                            <p>tty</p>
                            <p>tv</p>
                            <p>projection</p>
                            <p>handheld</p>
                            <p>print</p>
                            <p>braille</p>
                            <p>aural</p>
                            <p>all</p>
                        </td>
                        <td style="vertical-align:middle;">Specifies the device the document will be displayed on.
                            Default value is <i>all</i>. This is optional attribute.</td>
                    </tr>
                </tbody>
            </table>

            <h2>Imported &#128488;   @import Rule</h2>
            <p>@import is used to import an external stylesheet in a manner similar to the &lt;link&gt; element. Here is
                the generic syntax of @import rule.</p>
            <pre>
                <span class="tag">&lt;head&gt;</span><span class="pln">
                    @import "URL";
                </span><span class="tag">&lt;/head&gt;</span>
            </pre>
            <h2>CSS Rules Overriding</h2>
            <p>We have discussed four ways to include style sheet rules in a an HTML document. Here is the rule to
                override any Style Sheet Rule.</p>
            <ul class="list">
                <li>
                    <p>Any inline style sheet takes highest priority. So, it will override any rule defined in
                        &lt;style&gt;...&lt;/style&gt; tags or rules defined in any external style sheet file.</p>
                </li>
                <li>
                    <p>Any rule defined in &lt;style&gt;...&lt;/style&gt; tags will override rules defined in any
                        external style sheet file.</p>
                </li>
                <li>
                    <p>Any rule defined in external style sheet file takes lowest priority, and rules defined in this
                        file will be applied only when above two rules are not applicable.</p>
                </li>
            </ul>
            <hr>
            <h1 id="04">&#128488;  Measurement Units</h1>
            <hr>
            <p>Before we start the actual exercise, we would like to give a brief idea about the CSS Measurement Units.
                CSS supports a number of measurements including absolute units such as inches, centimeters, points, and
                so on, as well as relative measures such as percentages and em units. You need these values while
                specifying various measurements in your Style rules e.g. <b>border = "1px solid red"</b>.</p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center;width:10%">Unit</th>
                        <th style="text-align:center;">Description</th>
                        <th style="text-align:center;width:30%">Example</th>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td>Defines a measurement as a percentage relative to another value, typically an enclosing
                            element.</td>
                        <td>p {font-size: 16pt; line-height: 125%;}</td>
                    </tr>
                    <tr>
                        <td>cm</td>
                        <td style="vertical-align:middle;">Defines a measurement in centimeters.</td>
                        <td>div {margin-bottom: 2cm;}</td>
                    </tr>
                    <tr>
                        <td>em</td>
                        <td>A relative measurement for the height of a font in em spaces. Because an em unit is
                            equivalent to the size of a given font, if you assign a font to 12pt, each "em" unit would
                            be 12pt; thus, 2em would be 24pt.</td>
                        <td style="vertical-align:middle;">p {letter-spacing: 7em;}</td>
                    </tr>
                    <tr>
                        <td>ex</td>
                        <td>This value defines a measurement relative to a font's x-height. The x-height is determined
                            by the height of the font's lowercase letter x.</td>
                        <td style="vertical-align:middle;">p {font-size: 24pt; line-height: 3ex;}</td>
                    </tr>
                    <tr>
                        <td>in</td>
                        <td style="vertical-align:middle;">Defines a measurement in inches.</td>
                        <td>p {word-spacing: .15in;}</td>
                    </tr>
                    <tr>
                        <td>mm</td>
                        <td style="vertical-align:middle;">Defines a measurement in millimeters.</td>
                        <td>p {word-spacing: 15mm;}</td>
                    </tr>
                    <tr>
                        <td>pc</td>
                        <td>Defines a measurement in picas. A pica is equivalent to 12 points; thus, there are 6 picas
                            per inch.</td>
                        <td style="vertical-align:middle;">p {font-size: 20pc;}</td>
                    </tr>
                    <tr>
                        <td>pt</td>
                        <td>Defines a measurement in points. A point is defined as 1/72nd of an inch.</td>
                        <td>body {font-size: 18pt;}</td>
                    </tr>
                    <tr>
                        <td>px</td>
                        <td>Defines a measurement in screen pixels.</td>
                        <td>p {padding: 25px;}</td>
                    </tr>
                    <tr>
                        <td>vh</td>
                        <td style="vertical-align:middle;">1% of viewport height.</td>
                        <td>h2 {
                            font-size: 3.0vh;
                            }</td>
                    </tr>
                    <tr>
                        <td>vw</td>
                        <td style="vertical-align:middle;">1% of viewport width</td>
                        <td>h1 {
                            font-size: 5.9vw;
                            }</td>
                    </tr>
                    <tr>
                        <td>vmin</td>
                        <td>1vw or 1vh, whichever is smaller</td>
                        <td>p { font-size: 2vmin;}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h1 id="05">&#128488;  Colors</h1>
            <hr>
            <p>CSS uses color values to specify a color. Typically, these are used to set a color either for the
                foreground of an element (i.e., its text) or else for the background of the element. They can also be
                used to affect the color of borders and other decorative effects.</p>
            <p>You can specify your color values in various formats. Following table lists all the possible formats 
            </p>
            <table style="text-align:center;">
                <tbody>
                    <tr>
                        <th style="text-align:center;">Format</th>
                        <th style="text-align:center;">Syntax</th>
                        <th style="text-align:center;">Example</th>
                    </tr>
                    <tr>
                        <td>Hex Code</td>
                        <td>#RRGGBB</td>
                        <td>p{color:#FF0000;}</td>
                    </tr>
                    <tr>
                        <td>Short Hex Code</td>
                        <td>#RGB</td>
                        <td>p{color:#6A7;}</td>
                    </tr>
                    <tr>
                        <td>RGB %</td>
                        <td>rgb(rrr%,ggg%,bbb%)</td>
                        <td>p{color:rgb(50%,50%,50%);}</td>
                    </tr>
                    <tr>
                        <td>RGB Absolute</td>
                        <td>rgb(rrr,ggg,bbb)</td>
                        <td>p{color:rgb(0,0,255);}</td>
                    </tr>
                    <tr>
                        <td>keyword</td>
                        <td>aqua, black, etc.</td>
                        <td>p{color:teal;}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h1 id="06">&#128488;  Backgrounds</h1>
            <hr>
            <p>This chapter teaches you how to set backgrounds of various HTML elements. You can set the following
                background properties of an element </p>
            <ul class="list">
                <li>
                    <p>The <b>background-color</b> property is used to set the background color of an element.</p>
                </li>
                <li>
                    <p>The <b>background-image</b> property is used to set the background image of an element.</p>
                </li>
                <li>
                    <p>The <b>background-repeat</b> property is used to control the repetition of an image in the
                        background.</p>
                </li>
                <li>
                    <p>The <b>background-position</b> property is used to control the position of an image in the
                        background.</p>
                </li>
                <li>
                    <p>The <b>background-attachment</b> property is used to control the scrolling of an image in the
                        background.</p>
                </li>
                <li>
                    <p>The <b>background</b> property is used as a shorthand to specify a number of other background
                        properties.</p>
                </li>
            </ul>
            <h2>Shorthand Property</h2>
            <p>You can use the <i>background</i> property to set all the background properties at once. For example 
            </p>
            <pre>
                &lt;p <b>style = "background:url(/images/styling1.gif) repeat fixed;"</b>&gt;
                    This parapgraph has fixed repeated background image.
                &lt;/p&gt;
            </pre>
            <hr>
            <h1 id="07">&#128488;  Text</h1>
            <hr>
            <p>This chapter teaches you how to manipulate text using CSS properties. You can set following text
                properties of an element </p>
            <ul class="list">
                <li>
                    <p>The <b>color</b> property is used to set the color of a text.</p>
                </li>
                <li>
                    <p>The <b>direction</b> property is used to set the text direction.</p>
                </li>
                <li>
                    <p>The <b>letter-spacing</b> property is used to add or subtract space between the letters that make
                        up a word.</p>
                </li>
                <li>
                    <p>The <b>word-spacing</b> property is used to add or subtract space between the words of a
                        sentence.</p>
                </li>
                <li>
                    <p>The <b>text-indent</b> property is used to indent the text of a paragraph.</p>
                </li>
                <li>
                    <p>The <b>text-align</b> property is used to align the text of a document.</p>
                </li>
                <li>
                    <p>The <b>text-decoration</b> property is used to underline, overline, and strikethrough text.</p>
                </li>
                <li>
                    <p>The <b>text-transform</b> property is used to capitalize text or convert text to uppercase or
                        lowercase letters.</p>
                </li>
                <li>
                    <p>The <b>white-space</b> property is used to control the flow and formatting of text.</p>
                </li>
                <li>
                    <p>The <b>text-shadow</b> property is used to set the text shadow around a text.</p>
                </li>
            </ul>
            <hr>
            <h1 id="08">&#128488;  Fonts</h1>
            <hr>
            <p>This chapter teaches you how to set fonts of a content, available in an HTML element. You can set
                following font properties of an element </p>
            <ul class="list">
                <li>
                    <p>The <b>font-family</b> property is used to change the face of a font.</p>
                </li>
                <li>
                    <p>The <b>font-style</b> property is used to make a font italic or oblique.</p>
                </li>
                <li>
                    <p>The <b>font-variant</b> property is used to create a small-caps effect.</p>
                </li>
                <li>
                    <p>The <b>font-weight</b> property is used to increase or decrease how bold or light a font appears.
                    </p>
                </li>
                <li>
                    <p>The <b>font-size</b> property is used to increase or decrease the size of a font.</p>
                </li>
                <li>
                    <p>The <b>font</b> property is used as shorthand to specify a number of other font properties.</p>
                </li>
            </ul>
            <h2>Set the Font Stretch</h2>
            <p>The following example demonstrates how to set the font stretch of an element. This property relies on the
                user's computer to have an expanded or condensed version of the font being used.</p>
            <p>Possible values could be <i>normal, wider, narrower, ultra-condensed, extra-condensed, condensed,
                    semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded</i>.</p>
            <pre>
               <span class="tag">&lt;html&gt;</span><span class="pln">
                </span><span class="tag">&lt;head&gt;</span><span class="pln">
                </span><span class="tag">&lt;/head&gt;</span><span class="pln">
         
                </span><span class="tag">&lt;body&gt;</span><span class="pln">
                   </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">stretch</span><span class="pun">:</span><span class="pln">ultra</span><span class="pun">-</span><span class="pln">expanded</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
                      If this doesn't appear to work, it is likely that your computer 
                      doesn't have a </span><span class="tag">&lt;br&gt;</span><span class="pln">condensed or expanded version of the font being used.
                   </span><span class="tag">&lt;/p&gt;</span><span class="pln">
                </span><span class="tag">&lt;/body&gt;</span><span class="pln">
               </span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span>
            </pre>
            <hr>
            <h1 id="09">&#128488;  Tables</h1>
            <hr>
            <p>This tutorial will teach you how to set different properties of an HTML table using CSS. You can set
                following properties of a table </p>
            <ul class="list">
                <li>
                    <p>The <b>border-collapse</b> specifies whether the browser should control the appearance of the
                        adjacent borders that touch each other or whether each cell should maintain its style.</p>
                </li>
                <li>
                    <p>The <b>border-spacing</b> specifies the width that should appear between table cells.</p>
                </li>
                <li>
                    <p>The <b>caption-side</b> captions are presented in the &lt;caption&gt; element. By default, these
                        are rendered above the table in the document. You use the <i>caption-side</i> property to
                        control the placement of the table caption.</p>
                </li>
                <li>
                    <p>The <b>empty-cells</b> specifies whether the border should be shown if a cell is empty.</p>
                </li>
                <li>
                    <p>The <b>table-layout</b> allows browsers to speed up layout of a table by using the first width
                        properties it comes across for the rest of a column rather than having to load the whole table
                        before rendering it.</p>
                </li>
            </ul>
            <h2>The border-spacing Property</h2>
            <p>The border-spacing property specifies the distance that separates adjacent cells'. borders. It can take
                either one or two values; these should be units of length.</p>
            <p>If you provide one value, it will applies to both vertical and horizontal borders. Or you can specify two
                values, in which case, the first refers to the horizontal spacing and the second to the vertical spacing
                </p>
            <h2>The caption-side Property</h2>
            <p>The caption-side property allows you to specify where the content of a &lt;caption&gt; element should be
                placed in relationship to the table. The table that follows lists the possible values.</p>
            <p>This property can have one of the four values <i>top, bottom, left </i> or <i> right</i>. The following
                example uses each value.</p>
            <h2>The border-collapse Property</h2>
            <p>This property can have two values <i>collapse</i> and <i>separate</i>.</p>
            <h2>The empty-cells Property</h2>
            <p>The empty-cells property indicates whether a cell without any content should have a border displayed.</p>
            <p>This property can have one of the three values - <i>show, hide</i> or <i>inherit</i>.</p>
            <h2>The table-layout Property</h2>
            <p>The table-layout property is supposed to help you control how a browser should render or lay out a table.
            </p>
            <p>This property can have one of the three values: <i>fixed, auto</i> or <i>inherit</i>. </p>
            <hr>
            <h1 id="10">&#128488;  Borders</h1>
            <hr>
            <p>The <i>border</i> properties allow you to specify how the border of the box representing an element
                should look. There are three properties of a border you can change </p>
            <ul class="list">
                <li>
                    <p>The <b>border-color</b> specifies the color of a border.</p>
                </li>
                <li>
                    <p>The <b>border-style</b> specifies whether a border should be solid, dashed line, double line, or
                        one of the other possible values.</p>
                </li>
                <li>
                    <p>The <b>border-width</b> specifies the width of a border.</p>
                </li>
            </ul>
            <h2>The border-color Property</h2>
            <p>The border-color property allows you to change the color of the border surrounding an element. You can
                individually change the color of the bottom, left, top and right sides of an element's border using the
                properties </p>
            <ul class="list">
                <li>
                    <p><b>border-bottom-color</b> changes the color of bottom border.</p>
                </li>
                <li>
                    <p><b>border-top-color</b> changes the color of top border.</p>
                </li>
                <li>
                    <p><b>border-left-color</b> changes the color of left border.</p>
                </li>
                <li>
                    <p><b>border-right-color</b> changes the color of right border.</p>
                </li>
            </ul>
            <h2>The border-style Property</h2>
            <p>The border-style property allows you to select one of the following styles of border </p>
            <ul class="list">
                <li>
                    <p><b>none</b>  No border. (Equivalent of border-width:0;)</p>
                </li>
                <li>
                    <p><b>solid</b>  Border is a single solid line.</p>
                </li>
                <li>
                    <p><b>dotted</b>  Border is a series of dots.</p>
                </li>
                <li>
                    <p><b>dashed</b>  Border is a series of short lines.</p>
                </li>
                <li>
                    <p><b>double</b>  Border is two solid lines.</p>
                </li>
                <li>
                    <p><b>groove</b>  Border looks as though it is carved into the page.</p>
                </li>
                <li>
                    <p><b>ridge</b>  Border looks the opposite of groove.</p>
                </li>
                <li>
                    <p><b>inset</b>  Border makes the box look like it is embedded in the page.</p>
                </li>
                <li>
                    <p><b>outset</b>  Border makes the box look like it is coming out of the canvas.</p>
                </li>
                <li>
                    <p><b>hidden</b>  Same as none, except in terms of border-conflict resolution for table elements.
                    </p>
                </li>
            </ul>
            <p>You can individually change the style of the bottom, left, top, and right borders of an element using the
                following properties </p>
            <ul class="list">
                <li>
                    <p><b>border-bottom-style</b> changes the style of bottom border.</p>
                </li>
                <li>
                    <p><b>border-top-style</b> changes the style of top border.</p>
                </li>
                <li>
                    <p><b>border-left-style</b> changes the style of left border.</p>
                </li>
                <li>
                    <p><b>border-right-style</b> changes the style of right border.</p>
                </li>
            </ul>
            <h2>The border-width Property</h2>
            <p>The border-width property allows you to set the width of an element borders. The value of this property
                could be either a length in px, pt or cm or it should be set to <i>thin, medium or thick.</i></p>
            <p>You can individually change the width of the bottom, top, left, and right borders of an element using the
                following properties </p>
            <ul class="list">
                <li>
                    <p><b>border-bottom-width</b> changes the width of bottom border.</p>
                </li>
                <li>
                    <p><b>border-top-width</b> changes the width of top border.</p>
                </li>
                <li>
                    <p><b>border-left-width</b> changes the width of left border.</p>
                </li>
                <li>
                    <p><b>border-right-width</b> changes the width of right border.</p>
                </li>
            </ul>
            <hr>
            <h1 id="11">&#128488;  Lists</h1>
            <hr>
            <p>Lists are very helpful in conveying a set of either numbered or bullet points. This chapter teaches you
                how to control list type, position, style, etc., using CSS.</p>
            <p>We have the following five CSS properties, which can be used to control lists </p>
            <ul class="list">
                <li>
                    <p>The <b>list-style-type</b> allows you to control the shape or appearance of the marker.</p>
                </li>
                <li>
                    <p>The <b>list-style-position</b> specifies whether a long point that wraps to a second line should
                        align with the first line or start underneath the start of the marker.</p>
                </li>
                <li>
                    <p>The <b>list-style-image</b> specifies an image for the marker rather than a bullet point or
                        number.</p>
                </li>
                <li>
                    <p>The <b>list-style</b> serves as shorthand for the preceding properties.</p>
                </li>
                <li>
                    <p>The <b>marker-offset</b> specifies the distance between a marker and the text in the list.</p>
                </li>
            </ul>
            <h2>The list-style-type Property</h2>
            <p>The <i>list-style-type</i> property allows you to control the shape or style of bullet point (also known
                as a marker) in the case of unordered lists and the style of numbering characters in ordered lists.</p>
            <p>Here are the values which can be used for an unordered list </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width:5%">Sr.No.</th>
                        <th style="text-align:center;">Value &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>none</b></p>
                            <p>NA</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>disc (default)</b></p>
                            <p>A filled-in circle</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>circle</b></p>
                            <p>An empty circle</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>square</b></p>
                            <p>A filled-in square</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>The list-style-position Property</h2>
            <p>The <i>list-style-position</i> property indicates whether the marker should appear inside or outside of
                the box containing the bullet points. It can have one the two values </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width:5%">Sr.No.</th>
                        <th style="text-align:center;">Value &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>none</b></p>
                            <p>NA</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>inside</b></p>
                            <p>If the text goes onto a second line, the text will wrap underneath the marker. It will
                                also appear indented to where the text would have started if the list had a value of
                                outside.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>outside</b></p>
                            <p>If the text goes onto a second line, the text will be aligned with the start of the first
                                line (to the right of the bullet).</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>The list-style-image Property</h2>
            <p>The <i>list-style-image</i> allows you to specify an image so that you can use your own bullet style. The
                syntax is similar to the background-image property with the letters url starting the value of the
                property followed by the URL in brackets. If it does not find the given image then default bullets are
                used.</p>
            <h2>The list-style Property</h2>
            <p>The <i>list-style</i> allows you to specify all the list properties into a single expression. These
                properties can appear in any order.</p>
            <h2>The marker-offset Property</h2>
            <p>The <i>marker-offset</i> property allows you to specify the distance between the marker and the text
                relating to that marker. Its value should be a length as shown in the following example </p>
            <hr>
            <h1 id="12">&#128488;  Paddings</h1>
            <hr>
            <p>The <i>padding</i> property allows you to specify how much space should appear between the content of an
                element and its border </p>
            <p>The value of this attribute should be either a length, a percentage, or the word <i>inherit</i>. If the
                value is <i>inherit</i>, it will have the same padding as its parent element. If a percentage is used,
                the percentage is of the containing box.</p>
            <p>The following CSS properties can be used to control lists. You can also set different values for the
                padding on each side of the box using the following properties </p>
            <ul class="list">
                <li>
                    <p>The <b>padding-bottom</b> specifies the bottom padding of an element.</p>
                </li>
                <li>
                    <p>The <b>padding-top</b> specifies the top padding of an element.</p>
                </li>
                <li>
                    <p>The <b>padding-left</b> specifies the left padding of an element.</p>
                </li>
                <li>
                    <p>The <b>padding-right</b> specifies the right padding of an element.</p>
                </li>
                <li>
                    <p>The <b>padding</b> serves as shorthand for the preceding properties.</p>
                </li>
            </ul>
            <h2>The Padding Property</h2>
            <p>The <i>padding</i> property sets the left, right, top and bottom padding (space) of an element. This can
                take a value in terms of length of %.</p>
            <p>Here is an example </p>
            <pre>
                <span class="tag">&lt;html&gt;</span><span class="pln">
                 </span><span class="tag">&lt;head&gt;</span><span class="pln">
                 </span><span class="tag">&lt;/head&gt;</span><span class="pln">
            
                 </span><span class="tag">&lt;body&gt;</span><span class="pln">
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                       all four padding will be 15px 
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
               
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
                       top and bottom padding will be 10px, left and right
                       padding will be 2% of the total width of the document. 
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
               
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                       top padding will be 10px, left and right padding will 
                       be 2% of the total width of the document, bottom padding will be 10px
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
               
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%</span><span class="pln"> </span><span class="lit">10px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                       top padding will be 10px, right padding will be 2% of
                       the total width of the document, bottom padding and top padding will be 10px 
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln">
                 </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                </span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span>
            </pre>
            <hr>
            <h1 id="13">&#128488;  Cursors</h1>
            <hr>
            <p>The <i>cursor</i> property of CSS allows you to specify the type of cursor that should be displayed to
                the user.</p>
            <p>One good usage of this property is in using images for submit buttons on forms. By default, when a cursor
                hovers over a link, the cursor changes from a pointer to a hand. However, it does not change form for a
                submit button on a form. Therefore, whenever someone hovers over an image that is a submit button, it
                provides a visual clue that the image is clickable.</p>
            <p>The following table shows the possible values for the cursor property </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sr.No.</th>
                        <th style="text-align:center;">Value &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>auto</b></p>
                            <p>Shape of the cursor depends on the context area it is over. For example an I over text, a
                                hand over a link, and so on...</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>crosshair</b></p>
                            <p>A crosshair or plus sign</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>default</b></p>
                            <p>An arrow</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>pointer</b></p>
                            <p>A pointing hand (in IE 4 this value is hand)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <p><b>move</b></p>
                            <p>The I bar</p>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            <p><b>e-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved right (east)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            <p><b>ne-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved up and right (north/east)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            <p><b>nw-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved up and left (north/west)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            <p><b>n-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved up (north)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>
                            <p><b>se-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved down and right (south/east)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>
                            <p><b>sw-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved down and left (south/west)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>
                            <p><b>s-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved down (south)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>
                            <p><b>w-resize</b></p>
                            <p>The cursor indicates that an edge of a box is to be moved left (west)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>
                            <p><b>text</b></p>
                            <p>The I bar</p>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>
                            <p><b>wait</b></p>
                            <p>An hour glass</p>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>
                            <p><b>help</b></p>
                            <p>A question mark or balloon, ideal for use over help buttons</p>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>
                            <p><b>&lt;url&gt;</b></p>
                            <p>The source of a cursor image file</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <blockquote><b>NOTE</b>  You should try to use only these values to add helpful information for users, and
                in places, they would expect to see that cursor. For example, using the crosshair when someone hovers
                over a link can confuse visitors.</blockquote>
            <hr>
            <h1 id="14">&#128488;  Outlines</h1>
            <hr>
            <p>Outlines are very similar to borders, but there are few major differences as well </p>
            <ul class="list">
                <li>
                    <p>An outline does not take up space.</p>
                </li>
                <li>
                    <p>Outlines do not have to be rectangular.</p>
                </li>
                <li>
                    <p>Outline is always the same on all sides; you cannot specify different values for different sides
                        of an element.</p>
                </li>
            </ul>
            <p>You can set the following outline properties using CSS.</p>
            <ul class="list">
                <li>
                    <p>The <b>outline-width</b> property is used to set the width of the outline.</p>
                </li>
                <li>
                    <p>The <b>outline-style</b> property is used to set the line style for the outline.</p>
                </li>
                <li>
                    <p>The <b>outline-color</b> property is used to set the color of the outline.</p>
                </li>
                <li>
                    <p>The <b>outline</b> property is used to set all the above three properties in a single statement.
                    </p>
                </li>
            </ul>
            <h2>The outline-width Property</h2>
            <p>The <i>outline-width</i> property specifies the width of the outline to be added to the box. Its value
                should be a length or one of the values <i>thin, medium, or thick,</i> just like the border-width
                attribute.A width of zero pixels means no outline.</p>
            <h2>The outline-style Property</h2>
            <p>The <i>outline-style</i> property specifies the style for the line (solid, dotted, or dashed) that goes
                around an element. It can take one of the following values </p>
            <ul class="list">
                <li>
                    <p><b>none</b>  No border. (Equivalent of outline-width:0;)</p>
                </li>
                <li>
                    <p><b>solid</b>  Outline is a single solid line.</p>
                </li>
                <li>
                    <p><b>dotted</b>  Outline is a series of dots.</p>
                </li>
                <li>
                    <p><b>dashed</b>  Outline is a series of short lines.</p>
                </li>
                <li>
                    <p><b>double</b>  Outline is two solid lines.</p>
                </li>
                <li>
                    <p><b>groove</b>  Outline looks as though it is carved into the page.</p>
                </li>
                <li>
                    <p><b>ridge</b>  Outline looks the opposite of groove.</p>
                </li>
                <li>
                    <p><b>inset</b>  Outline makes the box look like it is embedded in the page.</p>
                </li>
                <li>
                    <p><b>outset</b>  Outline makes the box look like it is coming out of the canvas.</p>
                </li>
                <li>
                    <p><b>hidden</b>  Same as none.</p>
                </li>
            </ul>
            <h2>The outline-color Property</h2>
            <p>The <i>outline-color</i> property allows you to specify the color of the outline. Its value should either
                be a color name, a hex color, or an RGB value, as with the color and border-color properties.</p>
            <h2>The outline Property</h2>
            <p>The <i>outline</i> property is a shorthand property that allows you to specify values for any of the
                three properties discussed previously in any order but in a single statement.</p>
            <p>Here is an example </p>
            <pre>
               <span class="tag">&lt;html&gt;</span><span class="pln">
                </span><span class="tag">&lt;head&gt;</span><span class="pln">
                </span><span class="tag">&lt;/head&gt;</span><span class="pln">
            
                </span><span class="tag">&lt;body&gt;</span><span class="pln">
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="pln">thin solid red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                    This text is having thin solid red outline.
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln">
                    </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="pln">thick dashed </span><span class="com">#009900;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                        This text is having thick dashed green outline.
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln">
                    </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               
                    </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="lit">5px</span><span class="pln"> dotted rgb</span><span class="pun">(</span><span class="lit">13</span><span class="pun">,</span><span class="lit">33</span><span class="pun">,</span><span class="lit">232</span><span class="pun">);</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                        This text is having 5x dotted blue outline.
                    </span><span class="tag">&lt;/p&gt;</span><span class="pln">
                </span><span class="tag">&lt;/body&gt;</span><span class="pln">
               </span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span>
            </pre>
            <hr>
            <h1 id="15">&#128488;  Dimension & Scrollbars</h1>
            <hr>
            <p>You have seen the border that surrounds every box ie. element, the padding that can appear inside each
                box and the margin that can go around them. In this tutorial we will learn how we can change the
                dimensions of boxes.</p>
            <p>We have the following properties that allow you to control the dimensions of a box.</p>
            <ul class="list">
                <li>
                    <p>The <b>height</b> property is used to set the height of a box.</p>
                </li>
                <li>
                    <p>The <b>width</b> property is used to set the width of a box.</p>
                </li>
                <li>
                    <p>The <b>line-height</b> property is used to set the height of a line of text.</p>
                </li>
                <li>
                    <p>The <b>max-height</b> property is used to set a maximum height that a box can be.</p>
                </li>
                <li>
                    <p>The <b>min-height</b> property is used to set the minimum height that a box can be.</p>
                </li>
                <li>
                    <p>The <b>max-width</b> property is used to set the maximum width that a box can be.</p>
                </li>
                <li>
                    <p>The <b>min-width</b> property is used to set the minimum width that a box can be.</p>
                </li>
            </ul>
            <h2>The Height and Width Properties</h2>
            <p>The <i>height</i> and <i>width</i> properties allow you to set the height and width for boxes. They can
                take values of a length, a percentage, or the keyword auto.</p>
            <h2>The line-height Property</h2>
            <p>The <i>line-height</i> property allows you to increase the space between lines of text. The value of the
                line-height property can be a number, a length, or a percentage.</p>
            <h2>The max-height Property</h2>
            <p>The <i>max-height</i> property allows you to specify maximum height of a box. The value of the max-height
                property can be a number, a length, or a percentage.</p>
            <h2>The min-height Property</h2>
            <p>The <i>min-height</i> property allows you to specify minimum height of a box. The value of the min-height
                property can be a number, a length, or a percentage.</p>
            <h2>The max-width Property</h2>
            <p>The <i>max-width</i> property allows you to specify maximum width of a box. The value of the max-width
                property can be a number, a length, or a percentage.</p>
            <h2>The min-width Property</h2>
            <p>The <i>min-width</i> property allows you to specify minimum width of a box. The value of the min-width
                property can be a number, a length, or a percentage.</p>
            <hr>
            <h1>Scrollbars</h1>
            <hr>
            <p>There may be a case when an element's content might be larger than the amount of space allocated to it.
                For example, given width and height properties do not allow enough room to accommodate the content of
                the element.</p>
            <p>CSS provides a property called <i>overflow</i> which tells the browser what to do if the box's contents
                is larger than the box itself. This property can take one of the following values </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sr.No.</th>
                        <th style="text-align:center;">Value &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>visible</b></p>
                            <p>Allows the content to overflow the borders of its containing element.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>hidden</b></p>
                            <p>The content of the nested element is simply cut off at the border of the containing
                                element and no scrollbars is visible.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>scroll</b></p>
                            <p>The size of the containing element does not change, but the scrollbars are added to allow
                                the user to scroll to see the content.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>auto</b></p>
                            <p>The purpose is the same as scroll, but the scrollbar will be shown only if the content
                                does overflow.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>