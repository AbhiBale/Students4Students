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
    <title>Html</title>
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
                <a href="#02"> &#128488; Basic Tags</a>
                <a href="#03"> &#128488; Elements</a>
                <a href="#04"> &#128488; Attributes</a>
                <a href="#05"> &#128488; Formatting</a>
                <a href="#06"> &#128488; Meta Tags</a>
                <a href="#07"> &#128488; Images & Tables </a>
                <a href="#08"> &#128488; Lists</a>
                <a href="#09"> &#128488; Text & Email Links</a>
                <a href="#10"> &#128488; Marquees</a>
                <a href="#11"> &#128488; Style Sheet</a>
                <a href="#12"> &#128488; Javascript</a>

            </div>


        </div>

        <div id="content">

            <h1>&#128488; HTML Tutorial</h1>
            <p><b>HTML</b> stands for <b>Hyper Text Markup Language</b>, which is the most widely used language on Web
                to develop web pages. <b>HTML</b> was created by Berners-Lee in late 1991 but "HTML 2.0" was the first
                standard HTML specification which was published in 1995. HTML 4.01 was a major version of HTML and it
                was published in late 1999. Though HTML 4.01 version is widely used but currently we are having HTML-5
                version which is an extension to HTML 4.01, and this version was published in 2012.</p>
            <h2>Why to Learn HTML?</h2>
            <p>Originally, <b>HTML</b> was developed with the intent of defining the structure of documents like
                headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between
                researchers. Now, HTML is being widely used to format web pages with the help of different tags
                available in HTML language.</p>
            <p><b>HTML</b> is a MUST for students and working professionals to become a great Software Engineer
                specially when they are working in Web Development Domain. I will list down some of the key advantages
                of learning HTML:</p>
            <ul class="list">
                <li>
                    <p><b>Create Web site</b> - You can create a website or customize an existing web template if you
                        know HTML well.</p>
                </li>
                <li>
                    <p><b>Become a web designer</b> - If you want to start a carrer as a professional web designer, HTML
                        and CSS designing is a must skill.</p>
                </li>
                <li>
                    <p><b>Understand web</b> - If you want to optimize your website, to boost its speed and performance,
                        it is good to know HTML to yield best results.</p>
                </li>
                <li>
                    <p><b>Learn other languages</b> - Once you understands the basic of HTML then other related
                        technologies like javascript, php, or angular are become easier to understand.</p>
                </li>
            </ul>
            <h2>Hello World using HTML.</h2>
            <p>Just to give you a little excitement about HTML, I'm going to give you a small conventional <b>HTML Hello
                    World</b> program, You can try it using Demo link.</p>
            <pre class="prettyprint notranslate prettyprinted" style="">
                </span><span class="tag">&lt;html&gt;</span><span class="pln">
                   </span><span class="tag">&lt;head&gt;</span><span class="pln">
                      </span><span class="tag">&lt;title&gt;</span><span class="pln">This is document title</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                   </span><span class="tag">&lt;/head&gt;</span><span class="pln">	
                   </span><span class="tag">&lt;body&gt;</span><span class="pln">
                      </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is a heading</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
                      </span><span class="tag">&lt;p&gt;</span><span class="pln">Hello World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                   </span><span class="tag">&lt;/body&gt;</span><span class="pln">	
                </span><span class="tag">&lt;/html&gt;</span></pre>
            <h2>Applications of HTML</h2>
            <p>As mentioned before, HTML is one of the most widely used language over the web. I'm going to list few of
                them here:</p>
            <ul class="list">
                <li>
                    <p><b>Web pages development</b> - HTML is used to create pages which are rendered over the web.
                        Almost every page of web is having html tags in it to render its details in browser.</p>
                </li>
                <li>
                    <p><b>Internet Navigation</b> - HTML provides tags which are used to navigate from one page to
                        another and is heavily used in internet navigation.</p>
                </li>
                <li>
                    <p><b>Responsive UI</b> - HTML pages now-a-days works well on all platform, mobile, tabs, desktop or
                        laptops owing to responsive design strategy.</p>
                </li>
                <li>
                </li>
                <li>
                    <p><b>Offline support</b> HTML pages once loaded can be made available offline on the machine
                        without any need of internet.</p>
                </li>
                <li>
                    <p><b>Game development</b>- HTML5 has native support for rich experience and is now useful in gaming
                        developent arena as well.</p>
                </li>
            </ul>
            <h2>Audience</h2>
            <p>This <b>HTML tutorial</b> is designed for the aspiring Web Designers and Developers with a need to
                understand the HTML in enough detail along with its simple overview, and practical examples. This
                tutorial will give you enough ingredients to start with HTML from where you can take yourself at higher
                level of expertise.</p>
            <h2>Prerequisites</h2>
            <p>Before proceeding with this <b>tutorial</b> you should have a basic working knowledge with Windows or
                Linux operating system, additionally you must be familiar with </p>
            <ul class="list">
                <li>Experience with any text editor like notepad, notepad++, or Edit plus etc.</li>
                <li>How to create directories and files on your computer.</li>
                <li>How to navigate through different directories.</li>
                <li>How to type content in a file and save them on a computer.</li>
                <li>Understanding about images in different formats like JPEG, PNG format.</li>
            </ul>

            <h1 id="02">&#128488; Basic Tags</h1>
            <h2>Heading Tags</h2>
            <p>Any document starts with a heading. You can use different sizes for your headings. HTML also has six
                levels of headings, which use the elements <b>&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;,
                    &lt;h5&gt;,</b> and <b>&lt;h6&gt;</b>. While displaying any heading, browser adds one line before
                and one line after that heading.</p>
            <h3>Example</h3>
            <pre class="prettyprint notranslate prettyprinted" style="">
                    </span><span class="tag">&lt;html&gt;</span><span class="pln">
                    
                       </span><span class="tag">&lt;head&gt;</span><span class="pln">
                          </span><span class="tag">&lt;title&gt;</span><span class="pln">Heading Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                        
                       </span><span class="tag">&lt;body&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is heading 1</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h2&gt;</span><span class="pln">This is heading 2</span><span class="tag">&lt;/h2&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h3&gt;</span><span class="pln">This is heading 3</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h4&gt;</span><span class="pln">This is heading 4</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h5&gt;</span><span class="pln">This is heading 5</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
                          </span><span class="tag">&lt;h6&gt;</span><span class="pln">This is heading 6</span><span class="tag">&lt;/h6&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                        
                    </span><span class="tag">&lt;/html&gt;</span></pre>
            <h2>Paragraph Tag</h2>
            <p>The <b>&lt;p&gt;</b> tag offers a way to structure your text into different paragraphs. Each paragraph of
                text should go in between an opening &lt;p&gt; and a closing &lt;/p&gt; tag as shown below in the
                example </p>
            <h3>Example</h3>
            <p>This will produce the following result </p>
            <h2>Line Break Tag</h2>
            <p>Whenever you use the <b>&lt;br /&gt;</b> element, anything following it starts from the next line. This
                tag is an example of an <b>empty</b> element, where you do not need opening and closing tags, as there
                is nothing to go in between them.</p>
            <p>The &lt;br /&gt; tag has a space between the characters <b>br</b> and the forward slash. If you omit this
                space, older browsers will have trouble rendering the line break, while if you miss the forward slash
                character and just use &lt;br&gt; it is not valid in XHTML.</p>
            <h3>Example</h3>
            <pre class="prettyprint notranslate prettyprinted" style="">
                    </span><span class="tag">&lt;html&gt;</span><span class="pln">
                    
                       </span><span class="tag">&lt;head&gt;</span><span class="pln">
                          </span><span class="tag">&lt;title&gt;</span><span class="pln">Line Break  Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                        
                       </span><span class="tag">&lt;body&gt;</span><span class="pln">
                          </span><span class="tag">&lt;p&gt;</span><span class="pln">Hello</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                             You delivered your assignment ontime.</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                             Thanks</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                             Mahnaz</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                        
                    </span><span class="tag">&lt;/html&gt;</span></pre>




            <h2>Centering Content</h2>

            <p>You can use <b>&lt;center&gt;</b> tag to put any content in the center of the page or any table cell.</p>

            <h3>Example</h3>
            <pre class="prettyprint notranslate prettyprinted" style="">
                    </span><span class="tag">&lt;html&gt;</span><span class="pln">
                    
                       </span><span class="tag">&lt;head&gt;</span><span class="pln">
                          </span><span class="tag">&lt;title&gt;</span><span class="pln">Centring Content Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                        
                       </span><span class="tag">&lt;body&gt;</span><span class="pln">
                          </span><span class="tag">&lt;p&gt;</span><span class="pln">This text is not in the center.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                          
                          </span><span class="tag">&lt;center&gt;</span><span class="pln">
                             </span><span class="tag">&lt;p&gt;</span><span class="pln">This text is in the center.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                          </span><span class="tag">&lt;/center&gt;</span><span class="pln">
                       </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                        
                    </span><span class="tag">&lt;/html&gt;</span></pre>

            <h1 id="03">&#128488; Elements</h1>
            <p>An <b>HTML element</b> is defined by a starting tag. If the element contains other content, it ends with
                a closing tag, where the element name is preceded by a forward slash as shown below with few tags </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center;">Start Tag</th>
                        <th style="text-align:center;">Content</th>
                        <th style="text-align:center;">End Tag</th>
                    </tr>
                    <tr>
                        <td>&lt;p&gt;</td>
                        <td>This is paragraph content.</td>
                        <td>&lt;/p&gt;</td>
                    </tr>
                    <tr>
                        <td>&lt;h1&gt;</td>
                        <td>This is heading content.</td>
                        <td>&lt;/h1&gt;</td>
                    </tr>
                    <tr>
                        <td>&lt;div&gt;</td>
                        <td>This is division content.</td>
                        <td>&lt;/div&gt;</td>
                    </tr>
                    <tr>
                        <td>&lt;br /&gt;</td>
                        <td>This is used for breaking a line</td>
                        <td> - </td>
                    </tr>
                </tbody>
            </table>
            <p>So here <b>&lt;p&gt;....&lt;/p&gt;</b> is an HTML element, <b>&lt;h1&gt;...&lt;/h1&gt;</b> is another
                HTML element. There are some HTML elements which don't need to be closed, such as
                <b>&lt;img.../&gt;</b>, <b>&lt;hr /&gt;</b> and <b>&lt;br /&gt;</b> elements. These are known as <b>void
                    elements</b>.</p>
            <p>HTML documents consists of a tree of these elements and they specify how HTML documents should be built,
                and what kind of content should be placed in what part of an HTML document.</p>
            <h2>HTML Tag vs. Element</h2>

            <p>An HTML element is defined by a <i>starting tag</i>. If the element contains other content, it ends with
                a <i>closing tag</i>.</p>
            <p>For example, <b>&lt;p&gt;</b> is starting tag of a paragraph and <b>&lt;/p&gt;</b> is closing tag of the
                same paragraph but <b>&lt;p&gt;This is paragraph&lt;/p&gt;</b> is a paragraph element.</p>
            <h2>Nested HTML Elements</h2>

            <p>It is very much allowed to keep one HTML element inside another HTML element </p>
            <h3>Example</h3>

            <pre class="prettyprint notranslate prettyprinted" style="">
                        </span><span class="tag">&lt;html&gt;</span><span class="pln">
                        
                           </span><span class="tag">&lt;head&gt;</span><span class="pln">
                              </span><span class="tag">&lt;title&gt;</span><span class="pln">Nested Elements Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                           </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                            
                           </span><span class="tag">&lt;body&gt;</span><span class="pln">
                              </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is </span><span class="tag">&lt;i&gt;</span><span class="pln">italic</span><span class="tag">&lt;/i&gt;</span><span class="pln"> heading</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
                              </span><span class="tag">&lt;p&gt;</span><span class="pln">This is </span><span class="tag">&lt;u&gt;</span><span class="pln">underlined</span><span class="tag">&lt;/u&gt;</span><span class="pln"> paragraph</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                           </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                            
                        </span><span class="tag">&lt;/html&gt;</span></pre>

            <h1 id="04"> &#128488; Attributes</h1>
            <p>We have seen few HTML tags and their usage like heading tags <b>&lt;h1&gt;, &lt;h2&gt;,</b> paragraph tag
                <b>&lt;p&gt;</b> and other tags. We used them so far in their simplest form, but most of the HTML tags
                can also have attributes, which are extra bits of information.</p>
            <p>An attribute is used to define the characteristics of an HTML element and is placed inside the element's
                opening tag. All attributes are made up of two parts  a <b>name</b> and a <b>value</b></p>
            <ul class="list">
                <li>
                    <p>The <b>name</b> is the property you want to set. For example, the paragraph <b>&lt;p&gt;</b>
                        element in the example carries an attribute whose name is <b>align</b>, which you can use to
                        indicate the alignment of paragraph on the page.</p>
                </li>
                <li>
                    <p>The <b>value</b> is what you want the value of the property to be set and always put within
                        quotations. The below example shows three possible values of align attribute: <b> left,
                            center</b> and <b>right</b>.</p>
                </li>
            </ul>
            <p>Attribute names and attribute values are case-insensitive. However, the World Wide Web Consortium (W3C)
                recommends lowercase attributes/attribute values in their HTML 4 recommendation.</p>
            <h3>Example</h3>
            <p>This will display the following result </p>
            <pre class="prettyprint notranslate prettyprinted" style="">
                            </span><span class="tag">&lt;html&gt;</span><span class="pln">
                             
                               </span><span class="tag">&lt;head&gt;</span><span class="pln"> 
                                  </span><span class="tag">&lt;title&gt;</span><span class="pln">Align Attribute  Example</span><span class="tag">&lt;/title&gt;</span><span class="pln"> 
                               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                                
                               </span><span class="tag">&lt;body&gt;</span><span class="pln"> 
                                  </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">align</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"left"</span><span class="tag">&gt;</span><span class="pln">This is left aligned</span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
                                  </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">align</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"center"</span><span class="tag">&gt;</span><span class="pln">This is center aligned</span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
                                  </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">align</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">This is right aligned</span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
                               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                                
                            </span><span class="tag">&lt;/html&gt;</span></pre>
            <br>
            <p>This will display the following result </p>
            <img src="style/attribute.PNG" alt="example" width="550px">

            <h2>Core Attributes</h2>
            <p>The four core attributes that can be used on the majority of HTML elements (although not all) are </p>
            <ul class="list">
                <li>Id</li>
                <li>Title</li>
                <li>Class</li>
                <li>Style</li>
            </ul>
            <h3>The Id Attribute</h3>
            <p>The <b>id</b> attribute of an HTML tag can be used to uniquely identify any element within an HTML page.
                There are two primary reasons that you might want to use an id attribute on an element </p>

            <ul class="list">
                <li>
                    <p>If an element carries an id attribute as a unique identifier, it is possible to identify just
                        that element and its content.</p>
                </li>
                <li>
                    <p>If you have two elements of the same name within a Web page (or style sheet), you can use the id
                        attribute to distinguish between elements that have the same name.</p>
                </li>
            </ul>

            <p>We will discuss style sheet in separate tutorial. For now, let's use the id attribute to distinguish
                between two paragraph elements as shown below.</p>

            <p><b>Example</b></p>
            <pre class="result notranslate">&lt;p id = "html"&gt;This para explains what is HTML&lt;/p&gt;
             &lt;p id = "css"&gt;This para explains what is Cascading Style Sheet&lt;/p&gt;
            </pre>

            <h3>The title Attribute</h3>

            <p>The <b>title</b> attribute gives a suggested title for the element. They syntax for the <b>title</b>
                attribute is similar as explained for <b>id</b> attribute </p>

            <p>The behavior of this attribute will depend upon the element that carries it, although it is often
                displayed as a tooltip when cursor comes over the element or while the element is loading.</p>

            <p><b>Example</b></p>
            <pre class="prettyprint notranslate prettyprinted" style="">
                </span><span class="tag">&lt;html&gt;</span><span class="pln">
                                        
                        </span><span class="tag">&lt;head&gt;</span><span class="pln">
                                </span><span class="tag">&lt;title&gt;</span><span class="pln">The title Attribute Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                                            
                        </span><span class="tag">&lt;body&gt;</span><span class="pln">
                                </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Hello HTML!"</span><span class="tag">&gt;</span><span class="pln">Titled Heading Tag Example</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                                            
                </span><span class="tag">&lt;/html&gt;</span></pre>

            <p>Now try to bring your cursor over "Titled Heading Tag Example" and you will see that whatever title you
                used in your code is coming out as a tooltip of the cursor.</p>

            <h3>The class Attribute</h3>
            <p>The <b>class</b> attribute is used to associate an element with a style sheet, and specifies the class of
                element. You will learn more about the use of the class attribute when you will learn Cascading Style
                Sheet (CSS). So for now you can avoid it.</p>
            <p>The value of the attribute may also be a space-separated list of class names. For example </p>

            <pre class="result notranslate">class = "className1 className2 className3"
                                        </pre>

            <h3>The style Attribute</h3>


            <p>The style attribute allows you to specify Cascading Style Sheet (CSS) rules within the element.</p>
            <pre class="prettyprint notranslate prettyprinted" style="">
                </span><span class="tag">&lt;html&gt;</span><span class="pln">
                                        
                        </span><span class="tag">&lt;head&gt;</span><span class="pln">
                                </span><span class="tag">&lt;title&gt;</span><span class="pln">The style Attribute</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                                            
                        </span><span class="tag">&lt;body&gt;</span><span class="pln">
                                </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">family</span><span class="pun">:</span><span class="pln">arial</span><span class="pun">;</span><span class="pln"> color</span><span class="pun">:#</span><span class="pln">FF0000</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Some text...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                                            
                </span><span class="tag">&lt;/html&gt;</span></pre>
            <p>At this point of time, we are not learning CSS, so just let's proceed without bothering much about CSS.
                Here, you need to understand what are HTML attributes and how they can be used while formatting content.
            </p>
            <h2>Internationalization Attributes</h2>


            <p>There are three internationalization attributes, which are available for most (although not all) XHTML
                elements.</p>
            <ul class="list">
                <li>dir</li>
                <li>lang</li>
                <li>xml:lang </li>
            </ul>


            <h3>The dir Attribute</h3>



            <p>The <b>dir</b> attribute allows you to indicate to the browser about the direction in which the text
                should flow. The dir attribute can take one of two values, as you can see in the table that follows 
            </p>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="text-align:center;">Value</th>
                        <th style="text-align:center;">Meaning</th>
                    </tr>
                    <tr>
                        <td>ltr</td>
                        <td>Left to right (the default value)</td>
                    </tr>
                    <tr>
                        <td>rtl</td>
                        <td>Right to left (for languages such as Hebrew or Arabic that are read right to left)</td>
                    </tr>
                </tbody>
            </table>

            <h1 id="05">&#128488; Formatting</h1>

            <p>If you use a word processor, you must be familiar with the ability to make text bold, italicized, or
                underlined; these are just three of the ten options available to indicate how text can appear in HTML
                and XHTML.</p>
            <h2>Bold Text</h2>

            <p>Anything that appears within <b>&lt;b&gt;...&lt;/b&gt;</b> element, is displayed in bold as shown below
            </p> >

            <h2>Italic Text</h2>
            <p>Anything that appears within <b>&lt;i&gt;...&lt;/i&gt;</b> element is displayed in italicized as shown
                below </p>
            <h2>Underlined Text</h2>
            <p>Anything that appears within <b>&lt;u&gt;...&lt;/u&gt;</b> element, is displayed with underline as shown
                below </p>
            <h2>Strike Text</h2>

            <p>Anything that appears within <b>&lt;strike&gt;...&lt;/strike&gt;</b> element is displayed with
                strikethrough, which is a thin line through the text as shown below </p>

            <h2>Monospaced Font</h2>
            <p>The content of a <b>&lt;tt&gt;...&lt;/tt&gt;</b> element is written in monospaced font. Most of the fonts
                are known as variable-width fonts because different letters are of different widths (for example, the
                letter 'm' is wider than the letter 'i'). In a monospaced font, however, each letter has the same width.
            </p>
            <h2>Superscript Text</h2>
            <p>The content of a <b>&lt;sup&gt;...&lt;/sup&gt;</b> element is written in superscript; the font size used
                is the same size as the characters surrounding it but is displayed half a character's height above the
                other characters.</p>
            <h2>Inserted Text</h2>

            <p>Anything that appears within <b>&lt;ins&gt;...&lt;/ins&gt;</b> element is displayed as inserted text.</p>
            <h2>Deleted Text</h2>
            <p>Anything that appears within <b>&lt;del&gt;...&lt;/del&gt;</b> element, is displayed as deleted text.</p>
            <h2>Larger Text</h2>
            <p>The content of the <b>&lt;big&gt;...&lt;/big&gt;</b> element is displayed one font size larger than the
                <br>rest of the text surrounding it as shown below </p>
            <p>The content of the <b>&lt;big&gt;...&lt;/big&gt;</b> element is displayed one font size larger than the
                rest of the text surrounding it as shown below </p>
            <h2>Smaller Text</h2>
            <p>The content of the <b>&lt;small&gt;...&lt;/small&gt;</b> element is displayed one font size smaller than
                <br>the rest of the text surrounding it as shown below
            </p>
            <h1 id="06">&#128488; Meta Tags</h1>
            <p>HTML lets you specify metadata - additional important information about a document in a variety of ways.
                The META elements can be used to include name/value pairs describing properties of the HTML document,
                such as author, expiry date, a list of keywords, document author etc.</p>
            <p>The <b>&lt;meta&gt;</b> tag is used to provide such additional information. This tag is an empty element
                and so does not have a closing tag but it carries information within its attributes.</p>
            <p>You can include one or more meta tags in your document based on what information you want to keep in your
                document but in general, meta tags do not impact physical appearance of the document so from appearance
                point of view, it does not matter if you include them or not.</p>
            <h2>Adding Meta Tags to Your Documents</h2>
            <p>You can add metadata to your web pages by placing &lt;meta&gt; tags inside the header of the document
                which is represented by <b>&lt;head&gt;</b> and <b>&lt;/head&gt;</b> tags. A meta tag can have following
                attributes in addition to core attributes </p>
            <table>
                <tbody>
                    <tr>
                        <th>Sr.No</th>
                        <th>Attribute &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>Name</b></p>
                            <p>Name for the property. Can be anything. Examples include, keywords, description, author,
                                revised, generator etc.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>content</b></p>
                            <p>Specifies the property's value.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>scheme</b></p>
                            <p>Specifies a scheme to interpret the property's value (as declared in the content
                                attribute).</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>http-equiv</b></p>
                            <p>Used for http response message headers. For example, http-equiv can be used to refresh
                                the page or to set a cookie. Values include content-type, expires, refresh and
                                set-cookie.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>Specifying Keywords</h2>
            <p>You can use &lt;meta&gt; tag to specify important keywords related to the document and later these
                keywords are used by the search engines while indexing your webpage for searching purpose.</p>
            <h3>Example</h3>
            <pre>
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                  </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <h2>Page Redirection</h2>
            <p>You can use &lt;meta&gt; tag to redirect your page to any other webpage. You can also specify a duration
                if you want to redirect the page after a certain number of seconds.</p>
            <h3>Example</h3>
            <pre>
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                  </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"revised"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Tutorialspoint, 3/7/2014"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"refresh"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"5; url = http://www.tutorialspoint.com"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <h1 id="07">&#128488; Images And Tables</h1>
            <p>Images are very important to beautify as well as to depict many complex concepts in simple way on your
                web page. This tutorial will take you through simple steps to use images in your web pages.</p>
            <h2>Insert Image</h2>
            <p>You can insert any image in your web page by using <b>&lt;img&gt;</b> tag. Following is the simple syntax
                to use this tag.</p>
            <pre>&lt;img src = "Image URL" ... attributes-list/&gt;</pre>
            <p>The &lt;img&gt; tag is an empty tag, which means that, it can contain only list of attributes and it has
                no closing tag.</p>
            <h3>Example</h3>
            <pre>
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">Using Image in Webpage</span><span class="tag">&lt;/title&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;p&gt;</span><span class="pln">Simple Image Insert</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                  </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"/html/images/test.png"</span><span class="pln"> </span><span class="atn">alt</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Test Image"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <p>You can use PNG, JPEG or GIF image file based on your comfort but make sure you specify correct image
                file name in <b>src</b> attribute. Image name is always case sensitive.</p>
            <p>The <b>alt</b> attribute is a mandatory attribute which specifies an alternate text for an image, if the
                image cannot be displayed.</p>
            <h2>Set Image Location</h2>
            <p>Usually we keep all the images in a separate directory. So let's keep HTML file test.htm in our home
                directory and create a subdirectory <b>images</b> inside the home directory where we will keep our image
                test.png.</p>
            <h2>Set Image Alignment</h2>
            <p>By default, image will align at the left side of the page, but you can use <b>align</b> attribute to set
                it in the center or right.</p>
            <h1>HTML  - Tables</h1>
            <p>The HTML tables allow web authors to arrange data like text, images, links, other tables, etc. into rows
                and columns of cells.</p>
            <p>The HTML tables are created using the <b>&lt;table&gt;</b> tag in which the <b>&lt;tr&gt;</b> tag is used
                to create table rows and <b>&lt;td&gt;</b> tag is used to create data cells. The elements under
                &lt;td&gt; are regular and left aligned by default</p>
            <h2>Example</h2>
            <pre class="prettyprint notranslate prettyprinted" style="">
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Tables</span><span class="tag">&lt;/title&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/table&gt;</span><span class="pln">
                  
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <p>This will produce the following result </p>
            <img src="style/tableop.PNG" alt="table" width="250px" height="80px">
            <h2>Table Heading</h2>
            <p>Table heading can be defined using <b>&lt;th&gt;</b> tag. This tag will be put to replace &lt;td&gt; tag,
                which is used to represent actual data cell. Normally you will put your top row as table heading as
                shown below, otherwise you can use &lt;th&gt; element in any row. Headings, which are defined in
                &lt;th&gt; tag are centered and bold by default.</p>
            <h2>Cellpadding and Cellspacing Attributes</h2>
            <p>There are two attributes called <i>cellpadding</i> and <i>cellspacing</i> which you will use to adjust
                the white space in your table cells. The cellspacing attribute defines space between table cells, while
                cellpadding represents the distance between cell borders and the content within a cell.</p>
            <h2>Colspan and Rowspan Attributes</h2>
            <p>You will use <b>colspan</b> attribute if you want to merge two or more columns into a single column.
                Similar way you will use <b>rowspan</b> if you want to merge two or more rows.</p>
            <h2>Tables Backgrounds</h2>
            <p>You can set table background using one of the following two ways </p>
            <ul class="list">
                <li>
                    <p><b>bgcolor</b> attribute  You can set background color for whole table or just for one cell.</p>
                </li>
                <li>
                    <p><b>background</b> attribute  You can set background image for whole table or just for one cell.
                    </p>
                </li>
            </ul>
            <blockquote>
                <p><b>Note</b>  The <i>bgcolor</i>, <i>background</i>, and <i>bordercolor</i> attributes deprecated in
                    HTML5. Do not use these attributes.</p>
            </blockquote>
            <h2>Table Header, Body, and Footer</h2>
            <p>Tables can be divided into three portions  a header, a body, and a foot. The head and foot are rather
                similar to headers and footers in a word-processed document that remain the same for every page, while
                the body is the main content holder of the table.</p>
            <p>The three elements for separating the head, body, and foot of a table are </p>
            <ul class="list">
                <li>
                    <p><b>&lt;thead&gt;</b>  to create a separate table header.</p>
                </li>
                <li>
                    <p><b>&lt;tbody&gt;</b>  to indicate the main body of the table.</p>
                </li>
                <li>
                    <p><b>&lt;tfoot&gt;</b>  to create a separate table footer.</p>
                </li>
            </ul>
            <p>A table may contain several &lt;tbody&gt; elements to indicate <i>different pages</i> or groups of data.
                But it is notable that &lt;thead&gt; and &lt;tfoot&gt; tags should appear before &lt;tbody&gt;</p>
            <h3>Example</h3>
            <pre>
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table</span><span class="tag">&lt;/title&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
                
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;thead&gt;</span><span class="pln">
                        </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">This is the head of the table</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/thead&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tfoot&gt;</span><span class="pln">
                        </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">This is the foot of the table</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tfoot&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tbody&gt;</span><span class="pln">
                        </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 3</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                           </span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 4</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tbody&gt;</span><span class="pln">
                     
                  </span><span class="tag">&lt;/table&gt;</span><span class="pln">
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
                
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <p>This will produce the following result </p>
            <img src="style/tableop1.PNG" alt="Example of Header, Body & Footer" width="400px" height="80px">
            <h1 id="08">&#128488; Lists</h1>
            <p>HTML offers web authors three ways for specifying lists of information. All lists must contain one or
                more list elements. Lists may contain </p>
            <ul class="list">
                <li>
                    <p><b>&lt;ul&gt;</b>  An unordered list. This will list items using plain bullets.</p>
                </li>
                <li>
                    <p><b>&lt;ol&gt;</b>  An ordered list. This will use different schemes of numbers to list your
                        items.</p>
                </li>
                <li>
                    <p><b>&lt;dl&gt;</b>  A definition list. This arranges your items in the same way as they are
                        arranged in a dictionary.</p>
                </li>
            </ul>
            <h2>HTML Unordered Lists</h2>
            <p>An unordered list is a collection of related items that have no special order or sequence. This list is
                created by using HTML <b>&lt;ul&gt;</b> tag. Each item in the list is marked with a bullet.</p>
            <h2>The type Attribute</h2>
            <p>You can use <b>type</b> attribute for &lt;ul&gt; tag to specify the type of bullet you like. By default,
                it is a disc. Following are the possible options </p>
            <pre>
                &lt;ul type = "square"&gt;
                &lt;ul type = "disc"&gt;
                &lt;ul type = "circle"&gt;
            </pre>
            <h2>HTML Ordered Lists</h2>
            <p>If you are required to put your items in a numbered list instead of bulleted, then HTML ordered list will
                be used. This list is created by using <b>&lt;ol&gt;</b> tag. The numbering starts at one and is
                incremented by one for each successive ordered list element tagged with &lt;li&gt;.</p>
            <h1 id="09">&#128488; Text & Email Links</h1>
            <p>A webpage can contain various links that take you directly to other pages and even specific parts of a
                given page. These links are known as hyperlinks.</p>
            <p>Hyperlinks allow visitors to navigate between Web sites by clicking on words, phrases, and images. Thus
                you can create hyperlinks using text or images available on a webpage.</p>
            <h2>Linking Documents</h2>
            <p>A link is specified using HTML tag &lt;a&gt;. This tag is called <b>anchor tag</b> and anything between
                the opening &lt;a&gt; tag and the closing &lt;/a&gt; tag becomes part of the link and a user can click
                that part to reach to the linked document. Following is the simple syntax to use &lt;a&gt; tag.</p>
            <pre>&lt;a href = "Document URL" ... attributes-list&gt;Link Text&lt;/a&gt; </pre>
            <h2>The target Attribute</h2>
            <p>We have used <b>target</b> attribute in our previous example. This attribute is used to specify the
                location where linked document is opened. Following are the possible options </p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sr.No</th>
                        <th>Option &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>_blank</b></p>
                            <p>Opens the linked document in a new window or tab.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>_self</b></p>
                            <p>Opens the linked document in the same frame.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>_parent</b></p>
                            <p>Opens the linked document in the parent frame.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>_top</b></p>
                            <p>Opens the linked document in the full body of the window.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <p><b>targetframe</b></p>
                            <p>Opens the linked document in a named <i>targetframe</i>.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>Use of Base Path</h2>
            <p>When you link HTML documents related to the same website, it is not required to give a complete URL for
                every link. You can get rid of it if you use <b>&lt;base&gt;</b> tag in your HTML document header. This
                tag is used to give a base path for all the links. So your browser will concatenate given relative path
                to this base path and will make a complete URL.</p>
            <h1>HTML  - Email Links</h1>
            <p>It is not difficult to put an HTML email link on your webpage but it can cause unnecessary spamming
                problem for your email account. There are people, who can run programs to harvest these types of emails
                and later use them for spamming in various ways.</p>
            <p>You can have another option to facilitate people to send you emails. One option could be to use HTML
                forms to collect user data and then use PHP or CGI script to send an email.</p>
            <p>A simple example, check our <a target="_blank" href="/contact_us.html">Contact Us</a> Form. We take user
                feedback using this form and then we are using one CGI program which is collecting this information and
                sending us email to the one given email ID.</p>
            <h2>HTML Email Tag</h2>
            <p>HTML <b>&lt;a&gt;</b> tag provides you option to specify an email address to send an email. While using
                &lt;a&gt; tag as an email tag, you will use <b>mailto: email address</b> along with <i>href</i>
                attribute. Following is the syntax of using <b>mailto</b> instead of using http.</p>
            <pre>&lt;a href = "mailto: abc@example.com"&gt;Send Email&lt;/a&gt;</pre>
            <p>Now, if a user clicks this link, it launches one Email Client (like Lotus Notes, Outlook Express etc. )
                installed on your user's computer. There is another risk to use this option to send email because if
                user do not have email client installed on their computer then it would not be possible to send email.
            </p>
            <h1 id="10">&#128488; Marquees</h1>
            <p>An HTML marquee is a scrolling piece of text displayed either horizontally across or vertically down your
                webpage depending on the settings. This is created by using HTML &lt;marquees&gt; tag.</p>
            <blockquote>
                <p><b>Note</b>  The &lt;marquee&gt; tag deprecated in HTML5. Do not use this element, instead you can
                    use JavaScript and CSS to create such effects.</p>
            </blockquote>
            <h2>Syntax</h2>
            <p>A simple syntax to use HTML &lt;marquee&gt; tag is as follows </p>
            <pre>&lt;marquee attribute_name = "attribute_value"....more attributes&gt;
                One or more lines or text message or image
             &lt;/marquee&gt;
            </pre>
            <h2>The &lt;marquee&gt; Tag Attributes</h2>
            <p>Following is the list of important attributes which can be used with &lt;marquee&gt; tag.</p>
            <table>
                <tbody>
                    <tr>
                        <th>Sr.No</th>
                        <th style="text-align:center;">Attribute &amp; Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><b>width</b></p>
                            <p>This specifies the width of the marquee. This can be a value like 10 or 20% etc.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <p><b>height</b></p>
                            <p>This specifies the height of the marquee. This can be a value like 10 or 20% etc.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <p><b>direction</b></p>
                            <p>This specifies the direction in which marquee should scroll. This can be a value like
                                <i>up, down, left</i> or <i>right</i>.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <p><b>behavior</b></p>
                            <p>This specifies the type of scrolling of the marquee. This can have a value like
                                <i>scroll, slide</i> and <i>alternate</i>.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <p><b>scrolldelay</b></p>
                            <p>This specifies how long to delay between each jump. This will have a value like 10 etc.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            <p><b>scrollamount</b></p>
                            <p>This specifies the speed of marquee text. This can have a value like 10 etc.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            <p><b>loop</b></p>
                            <p>This specifies how many times to loop. The default value is INFINITE, which means that
                                the marquee loops endlessly.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            <p><b>bgcolor</b></p>
                            <p>This specifies background color in terms of color name or color hex value.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            <p><b>hspace</b></p>
                            <p>This specifies horizontal space around the marquee. This can be a value like 10 or 20%
                                etc.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>
                            <p><b>vspace</b></p>
                            <p>This specifies vertical space around the marquee. This can be a value like 10 or 20% etc.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h1 id="11">&#128488; Style Sheet</h1>
            <p>Cascading Style Sheets (CSS) describe how documents are presented on screens, in print, or perhaps how
                they are pronounced. W3C has actively promoted the use of style sheets on the Web since the consortium
                was founded in 1994.</p>
            <p>Cascading Style Sheets (CSS) provide easy and effective alternatives to specify various attributes for
                the HTML tags. Using CSS, you can specify a number of style properties for a given HTML element. Each
                property has a name and a value, separated by a colon (:). Each property declaration is separated by a
                semi-colon (;).</p>
            <blockquote>
                <p><b>Note</b>  The <i>font</i> tag deprecated and it is supposed to be removed in a future version of
                    HTML. So they should not be used rather, it's suggested to use CSS styles to manipulate your fonts.
                    But still for learning purpose, this chapter will work with an example using the font tag.</p>
            </blockquote>
            <p>You can use CSS in three ways in your HTML document </p>
            <ul class="list">
                <li>
                    <p><b>External Style Sheet</b>  Define style sheet rules in a separate .css file and then include
                        that file in your HTML document using HTML &lt;link&gt; tag.</p>
                </li>
                <li>
                    <p><b>Internal Style Sheet</b>  Define style sheet rules in header section of the HTML document
                        using &lt;style&gt; tag.</p>
                </li>
                <li>
                    <p><b>Inline Style Sheet</b>  Define style sheet rules directly along-with the HTML elements using
                        <b>style</b> attribute.</p>
                </li>
            </ul>
            <h2>External Style Sheet</h2>
            <p>If you need to use your style sheet to various pages, then its always recommended to define a common
                style sheet in a separate file. A cascading style sheet file will have extension as <b>.css</b> and it
                will be included in HTML files using &lt;link&gt; tag.</p>
            <h2>Internal Style Sheet</h2>
            <p>If you want to apply Style Sheet rules to a single document only, then you can include those rules in
                header section of the HTML document using &lt;style&gt; tag.</p>
            <p>Rules defined in internal style sheet overrides the rules defined in an external CSS file.</p>
            <h2>Inline Style Sheet</h2>
            <p>You can apply style sheet rules directly to any HTML element using <b>style</b> attribute of the relevant
                tag. This should be done only when you are interested to make a particular change in any HTML element
                only.</p>
            <p>Rules defined inline with the element overrides the rules defined in an external CSS file as well as the
                rules defined in &lt;style&gt; element.</p>
            <h1 id="12">&#128488; JavaScript</h1>
            <p>A <b>script</b> is a small piece of program that can add interactivity to your website. For example, a
                script could generate a pop-up alert box message, or provide a dropdown menu. This script could be
                written using JavaScript or VBScript.</p>
            <p>You can write various small functions, called event handlers using any of the scripting language and then
                you can trigger those functions using HTML attributes.</p>
            <p>Now-a-days, only <b>JavaScript</b> and associated frameworks are being used by most of the web
                developers, VBScript is not even supported by various major browsers.</p>
            <p>You can keep JavaScript code in a separate file and then include it wherever it's needed, or you can
                define functionality inside HTML document itself. Let's see both the cases one by one with suitable
                examples.</p>
            <h2>External JavaScript</h2>
            <p>If you are going to define a functionality which will be used in various HTML documents then it's better
                to keep that functionality in a separate JavaScript file and then include that file in your HTML
                documents. A JavaScript file will have extension as <b>.js</b> and it will be included in HTML files
                using &lt;script&gt; tag.</p>
            <h3>Example</h3>
            <pre class="prettyprint notranslate prettyprinted" style="">
            </span><span class="tag">&lt;html&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;head&gt;</span><span class="pln">
                  </span><span class="tag">&lt;title&gt;</span><span class="pln">Javascript External Script</span><span class="tag">&lt;/title&gt;</span><span class="pln">
                  </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"/html/script.js"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="tag">/&gt;&lt;/script&gt;</span><span class="pln">
               </span><span class="tag">&lt;/head&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;body&gt;</span><span class="pln">
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="typ">Hello</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"ok"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Click Me"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/body&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;/html&gt;</span></pre>
            <h2>Internal Script</h2>
            <p>You can write your script code directly into your HTML document. Usually we keep script code in header of
                the document using &lt;script&gt; tag, otherwise there is no restriction and you can put your source
                code anywhere in the document but inside &lt;script&gt; tag.</p>
            <h2>Event Handlers</h2>
            <p>Event handlers are nothing but simply defined functions which can be called against any mouse or keyboard
                event. You can define your business logic inside your event handler which can vary from a single to
                1000s of line code.</p>
            <p>Following example explains how to write an event handler. Let's write one simple function
                <i>EventHandler()</i> in the header of the document. We will call this function when any user brings
                mouse over a paragraph.</p>
            <h2>Default Scripting Language</h2>
            <p>There may be a situation when you will include multiple script files and ultimately using multiple
                &lt;script&gt; tags. You can specify a default scripting language for all your <i>script</i> tags. This
                saves you from specifying the language every time you use a script tag within the page. Below is the
                example </p>
            <pre class="prettyprint notranslate prettyprinted"
                style=""><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Content-Script-Type"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/JavaScript"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
            <blockquote>Note that you can still override the default by specifying a language within the script tag.
            </blockquote>
        </div>

</body>

</html>