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
    <title>JavaScript</title>
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
                <a href="#01">&#128488; Javascript Home</a>
                <a href="#02">&#128488; Overview</a>
                <a href="#03">&#128488; Basic Syntax</a>
                <a href="#05">&#128488; Enabling</a>
                <a href="#placement">&#128488; Placement</a>
                <a href="#06">&#128488; Variables</a>
                <a href="#07">&#128488; Operators</a>
                <a href="#08">&#128488; If....Else </a>
                <a href="#09">&#128488; Switch Case</a>
                <a href="#10">&#128488; While loop</a>
                <a href="#11">&#128488; For loop</a>
                <a href="#loop">&#128488; Loop Control</a>
                <a href="#12">&#128488; Functions</a>
                <a href="#13">&#128488; Events</a>
                <a href="#14">&#128488; Page Printing</a>



            </div>


        </div>

        <div id="content">
            <h1>&#128488; Javascript Tutorial</h1>
            <p><b>JavaScript</b> is a lightweight, interpreted <b>programming</b> language. It is designed for creating
                network-centric applications. It is complimentary to and integrated with Java. <b>JavaScript</b> is very
                easy to implement because it is integrated with HTML. It is open and cross-platform.</p>
            <h2>Why to Learn Javascript</h2>
            <p><b>Javascript</b> is a MUST for students and working professionals to become a great Software Engineer
                specially when they are working in Web Development Domain. I will list down some of the key advantages
                of learning Javascript:</p>
            <ul>
                <li>
                    <p>Javascript is the most popular <b>programming language</b> in the world and that makes it a
                        programmer’s great choice. Once you learnt Javascript, it helps you developing great front-end
                        as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS
                        etc.</p>
                </li>
                <li>
                    <p>Javascript is everywhere, it comes installed on every modern web browser and so to learn
                        Javascript you really do not need any special environment setup. For example Chrome, Mozilla
                        Firefox , Safari and every browser you know as of today, supports Javascript.</p>
                </li>
                <li>
                    <p>Javascript helps you create really beautiful and crazy fast websites. You can develop your
                        website with a console like look and feel and give your users the best Graphical User
                        Experience.</p>
                </li>
                <li>
                    <p>JavaScript usage has now extended to mobile app development, desktop app development, and game
                        development. This opens many opportunities for you as Javascript Programmer.</p>
                </li>
                <li>
                    <p>Due to high demand, there is tons of job growth and high pay for those who know JavaScript. You
                        can navigate over to different job sites to see what having JavaScript skills looks like in the
                        job market.</p>
                </li>
                <li>
                    <p>Great thing about Javascript is that you will find tons of frameworks and Libraries already
                        developed which can be used directly in your software development to reduce your time to market.
                    </p>
                </li>
            </ul>
            <p>There could be 1000s of good reasons to learn Javascript Programming. But one thing for sure, to learn
                any <b>programming language</b>, not only Javascript, you just need to code, and code and finally code
                until you become expert.</p>
            <h2>Hello World using Javascript</h2>
            <p>Just to give you a little excitement about <b>Javascript programming</b>, I'm going to give you a small
                conventional Javascript Hello World program, You can try it using Demo link</p>
            <pre><span >&lt;html&gt;</span><span>
                </span><span >&lt;body&gt;</span><span>   
                   </span><span >&lt;script</span><span> </span><span >language</span><span> </span><span >=</span><span> </span><span class="atv">"javascript"</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                      </span><span >&lt;!--</span><span>
                         document</span><span >.</span><span>write</span><span >(</span><span >"Hello World!"</span><span >)</span><span>
                      </span><span >//--&gt;</span><span>
                   </span><span >&lt;/script&gt;</span><span>      
                </span><span >&lt;/body&gt;</span><span>
             </span><span >&lt;/html&gt;</span></pre>

            <p>There are many useful <b>Javascript frameworks</b> and libraries available:</p>
            <ul>
                <li>
                    <p>Angular</p>
                </li>
                <li>
                    <p>React</p>
                </li>
                <li>
                    <p>jQuery</p>
                </li>
                <li>
                    <p>Vue.js</p>
                </li>
                <li>
                    <p>Ext.js</p>
                </li>
                <li>
                    <p>Ember.js</p>
                </li>
                <li>
                    <p>Meteor</p>
                </li>
                <li>
                    <p>Mithril</p>
                </li>
                <li>
                    <p>Node.js</p>
                </li>
                <li>
                    <p>Polymer</p>
                </li>
                <li>
                    <p>Aurelia</p>
                </li>
                <li>
                    <p>Backbone.js</p>
                </li>
            </ul>
            <p>It is really impossible to give a complete list of all the available Javascript frameworks and libraries.
                The Javascript world is just too large and too much new is happening.</p>
            <h2>Applications of Javascript Programming</h2>
            <p>As mentioned before, <b>Javascript</b> is one of the most widely used <b>programming languages</b>
                (Front-end as well as Back-end). It has it's presence in almost every area of software development. I'm
                going to list few of them here:</p>
            <ul>
                <li>
                    <p><b>Client side validation</b> - This is really important to verify any user input before
                        submitting it to the server and Javascript plays an important role in validting those inputs at
                        front-end itself.</p>
                </li>
                <li>
                    <p><b>Manipulating HTML Pages</b> - Javascript helps in manipulating HTML page on the fly. This
                        helps in adding and deleting any HTML tag very easily using javascript and modify your HTML to
                        change its look and feel based on different devices and requirements.</p>
                </li>
                <li>
                    <p><b>User Notifications</b> - You can use Javascript to raise dynamic pop-ups on the webpages to
                        give different types of notifications to your website visitors.</p>
                </li>
                <li>
                    <p><b>Back-end Data Loading</b> - Javascript provides Ajax library which helps in loading back-end
                        data while you are doing some other processing. This really gives an amazing experience to your
                        website visitors.</p>
                </li>
                <li>
                    <p><b>Presentations</b> - JavaScript also provides the facility of creating presentations which
                        gives website look and feel. JavaScript provides RevealJS and BespokeJS libraries to build a
                        web-based slide presentations.</p>
                </li>
                <li>
                    <p><b>Server Applications</b> - Node JS is built on Chrome's Javascript runtime for building fast
                        and scalable network applications. This is an event based library which helps in developing very
                        sophisticated server applications including Web Servers.</p>
                </li>
            </ul>

            <p>This list goes on, there are various areas where millions of software developers are happily using
                Javascript to develop great websites and others softwares.</p>
            <h2>Audience</h2>

            <p>This tutorial has been prepared for JavaScript beginners to help them understand the basic functionality
                of JavaScript to build dynamic web pages and web applications.</p>

            <h1 id="02">&#128488; JavaScript - Overview</h1>
            <h2>What is JavaScript ?</h2>
            <p>JavaScript is a dynamic computer programming language. It is lightweight and most commonly used as a part
                of web pages, whose implementations allow client-side script to interact with the user and make dynamic
                pages. It is an interpreted programming language with object-oriented capabilities.</p>
            <p>JavaScript was first known as <b>LiveScript,</b> but Netscape changed its name to JavaScript, possibly
                because of the excitement being generated by Java. JavaScript made its first appearance in Netscape 2.0
                in 1995 with the name <b>LiveScript</b>. The general-purpose core of the language has been embedded in
                Netscape, Internet Explorer, and other web browsers.</p>
            <p>The <a rel="nofollow" href="http://www.ecma-international.org/publications/index.html"
                    target="_blank">ECMA-262 Specification</a> defined a standard version of the core JavaScript
                language.</p>

            <ul>
                <li>JavaScript is a lightweight, interpreted programming language.</li>
                <li>Designed for creating network-centric applications.</li>
                <li>Complementary to and integrated with Java.</li>
                <li>Complementary to and integrated with HTML.</li>
                <li>Open and cross-platform</li>
            </ul>
            <h2>Client-Side JavaScript</h2>
            <p>Client-side JavaScript is the most common form of the language. The script should be included in or
                referenced by an HTML document for the code to be interpreted by the browser.</p>
            <p>It means that a web page need not be a static HTML, but can include programs that interact with the user,
                control the browser, and dynamically create HTML content.</p>
            <p>The JavaScript client-side mechanism provides many advantages over traditional CGI server-side scripts.
                For example, you might use JavaScript to check if the user has entered a valid e-mail address in a form
                field.</p>
            <p>The JavaScript code is executed when the user submits the form, and only if all the entries are valid,
                they would be submitted to the Web Server.</p>
            <p>JavaScript can be used to trap user-initiated events such as button clicks, link navigation, and other
                actions that the user initiates explicitly or implicitly.</p>
            <h2>Advantages of JavaScript</h2>
            <p>The merits of using JavaScript are </p>
            <h2>Limitations of JavaScript</h2>
            <p>We cannot treat JavaScript as a full-fledged programming language. It lacks the following important
                features </p>
            <ul>
                <li>
                    <p>Client-side JavaScript does not allow the reading or writing of files. This has been kept for
                        security reason.</p>
                </li>
                <li>
                    <p>JavaScript cannot be used for networking applications because there is no such support available.
                    </p>
                </li>
                <li>
                    <p>JavaScript doesn't have any multi-threading or multiprocessor capabilities.</p>
                </li>
            </ul>
            <p>Once again, JavaScript is a lightweight, interpreted programming language that allows you to build
                interactivity into otherwise static HTML pages.</p>
            <h1 id="03">&#128488; JavaScript - Syntax</h1>
            <p>JavaScript can be implemented using JavaScript statements that are placed within the <b>&lt;script&gt;...
                    &lt;/script&gt;</b> HTML tags in a web page.</p>
            <p>You can place the <b>&lt;script&gt;</b> tags, containing your JavaScript, anywhere within your web page,
                but it is normally reco
            <p>The &lt;script&gt; tag alerts the browser program to start interpreting all the text between these tags
                as a script. A simple syntax of your JavaScript will appear as follows.</p>mmended that you should keep
            it within the <b>&lt;head&gt;</b> tags.</p>
            <pre class="result notranslate">&lt;script ...&gt;
                                JavaScript code
                             &lt;/script&gt;
                             </pre>

            <p>The script tag takes two important attributes </p>

            <ul>
                <li>
                    <p><b>Language</b> − This attribute specifies what scripting language you are using. Typically, its
                        value will be javascript. Although recent versions of HTML (and XHTML, its successor) have
                        phased out the use of this attribute.</p>
                </li>
                <li>
                    <p><b>Type</b> − This attribute is what is now recommended to indicate the scripting language in use
                        and its value should be set to "text/javascript".</p>
                </li>
            </ul>

            <p>So your JavaScript segment will look like </p>

            <pre class="result notranslate">&lt;script language = "javascript" type = "text/javascript"&gt;
                                    JavaScript code
                                 &lt;/script&gt;
                                 </pre>

            <h2>Your First JavaScript Code</h2>

            <p>Let us take a sample example to print out "Hello World". We added an optional HTML comment that surrounds
                our JavaScript code. This is to save our code from a browser that does not support JavaScript. The
                comment ends with a "//--&gt;". Here "//" signifies a comment in JavaScript, so we add that to prevent a
                browser from reading the end of the HTML comment as a piece of JavaScript code. Next, we call a function
                <b>document.write</b> which writes a string into our HTML document.</p>
            <d <pre><span>&lt;html&gt;</span><span>
                </span><span>&lt;body&gt;</span><span>
                </span><span>&lt;script</span><span> </span><span>language</span><span> </span><span>=</span><span>
                </span><span class="atv">"javascript"</span><span> </span><span>type</span><span>
                </span><span>=</span><span> </span><span class="atv">"text/javascript"</span><span>&gt;</span><span>
                </span><span>&lt;!--</span><span>
                    document</span><span>.</span><span>write</span><span>(</span><span>"Hello
                    World!"</span><span>)</span><span>
                </span><span>//--&gt;</span><span>
                </span><span>&lt;/script&gt;</span><span>
                </span><span>&lt;/body&gt;</span><span>
                </span><span>&lt;/html&gt;</span></pre>
                <p>This code will produce the following result </p>



                <pre class="result notranslate">Hello World!
                                </pre>
                <h2>Whitespace and Line Breaks</h2>


                <p>JavaScript ignores spaces, tabs, and newlines that appear in JavaScript programs. You can use spaces,
                    tabs, and newlines freely in your program and you are free to format and indent your programs in a
                    neat and consistent way that makes the code easy to read and understand.</p>
                <h2>Semicolons are Optional</h2>
                <p>Simple statements in JavaScript are generally followed by a semicolon character, just as they are in
                    C, C++, and Java. JavaScript, however, allows you to omit this semicolon if each of your statements
                    are placed on a separate line. For example, the following code could be written without semicolons.
                </p>
                <pre><span >&lt;script</span><span> </span><span >language</span><span> </span><span >=</span><span> </span><span class="atv">"javascript"</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                </span><span >&lt;!--</span><span>
                                   var1 </span><span >=</span><span> </span><span >10</span><span>
                                   var2 </span><span >=</span><span> </span><span >20</span><span>
                                </span><span >//--&gt;</span><span>
                             </span><span >&lt;/script&gt;</span></pre>
                <p>But when formatted in a single line as follows, you must use semicolons </p>
                <pre><span >&lt;script</span><span> </span><span >language</span><span> </span><span >=</span><span> </span><span class="atv">"javascript"</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                            </span><span >&lt;!--</span><span>
                               var1 </span><span >=</span><span> </span><span >10</span><span >;</span><span> var2 </span><span >=</span><span> </span><span >20</span><span >;</span><span>
                            </span><span >//--&gt;</span><span>
                         </span><span >&lt;/script&gt;</span></pre>
                <p><b>Note</b> − It is a good programming practice to use semicolons.</p>

                <h1 id="05">&#128488; Enabling JavaScript in Browsers</h1>
                <p>All the modern browsers come with built-in support for JavaScript. Frequently, you may need to enable
                    or disable this support manually. This chapter explains the procedure of enabling and disabling
                    JavaScript support in your browsers: Internet Explorer, Firefox, chrome, and Opera.</p>
                <h2>JavaScript in Internet Explorer</h2>

                <p>Here are simple steps to turn on or turn off JavaScript in your Internet Explorer </p>
                <ul>
                    <li>
                        <p>Follow <b>Tools → Internet Options</b> from the menu.</p>
                    </li>
                    <li>
                        <p>Select <b>Security</b> tab from the dialog box.</p>
                    </li>
                    <li>
                        <p>Click the <b>Custom Level</b> button.</p>
                    </li>
                    <li>
                        <p>Scroll down till you find <b>Scripting</b> option.</p>
                    </li>
                    <li>
                        <p>Select <i>Enable</i> radio button under <b>Active scripting</b>.</p>
                    </li>
                    <li>
                        <p>Finally click OK and come out</p>
                    </li>
                </ul>

                <p>To disable JavaScript support in your Internet Explorer, you need to select <b>Disable</b> radio
                    button under <b>Active scripting</b>.</p>

                <h2>JavaScript in Firefox</h2>

                <p>Here are the steps to turn on or turn off JavaScript in Firefox </p>
                <ul>
                    <li>
                        <p>Open a new tab → type <b>about: config</b> in the address bar.</p>
                    </li>
                    <li>
                        <p>Then you will find the warning dialog. Select <b>I’ll be careful, I promise!</b></p>
                    </li>
                    <li>
                        <p>Then you will find the list of <b>configure options</b> in the browser.</p>
                    </li>
                    <li>
                        <p>In the search bar, type <b>javascript.enabled</b>.</p>
                    </li>
                    <li>
                        <p>There you will find the option to enable or disable javascript by right-clicking on the value
                            of that option → <b>select toggle</b>.</p>
                    </li>
                </ul>
                <p>If javascript.enabled is true; it converts to false upon clicking <b>toogle</b>. If javascript is
                    disabled; it gets enabled upon clicking toggle.</p>
                <h2>JavaScript in Chrome</h2>

                <p>Here are the steps to turn on or turn off JavaScript in Chrome </p>
                <ul>
                    <li>
                        <p>Click the Chrome menu at the top right hand corner of your browser.</p>
                    </li>
                    <li>
                        <p>Select <b>Settings</b>.</p>
                    </li>
                    <li>
                        <p>Click <b>Show advanced settings</b> at the end of the page.</p>
                    </li>
                    <li>
                        <p>Under the <b>Privacy</b> section, click the Content settings button.</p>
                    </li>
                    <li>
                        <p>In the "Javascript" section, select "Do not allow any site to run JavaScript" or "Allow all
                            sites to run JavaScript (recommended)".</p>
                    </li>
                </ul>

                <h2>JavaScript in Opera</h2>

                <p>Here are the steps to turn on or turn off JavaScript in Opera </p>

                <ul>
                    <li>
                        <p>Follow <b>Tools → Preferences</b> from the menu.</p>
                    </li>
                    <li>
                        <p>Select <b>Advanced</b> option from the dialog box.</p>
                    </li>
                    <li>
                        <p>Select <b>Content </b> from the listed items.</p>
                    </li>
                    <li>
                        <p>Select <b>Enable JavaScript</b> checkbox.</p>
                    </li>
                    <li>
                        <p>Finally click OK and come out.</p>
                    </li>
                </ul>
                <p>To disable JavaScript support in your Opera, you should not select the <b>Enable JavaScript
                        checkbox</b>.</p>

                <h2>Warning for Non-JavaScript Browsers</h2>
                <p>If you have to do something important using JavaScript, then you can display a warning message to the
                    user using <b>&lt;noscript&gt;</b> tags.</p>
                <p>You can add a <b>noscript</b> block immediately after the script block as follows </p>
                <pre><span >&lt;html&gt;</span><span>
                                        </span><span >&lt;body&gt;</span><span>
                                           </span><span >&lt;script</span><span> </span><span >language</span><span> </span><span >=</span><span> </span><span class="atv">"javascript"</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                              </span><span >&lt;!--</span><span>
                                                 document</span><span >.</span><span>write</span><span >(</span><span >"Hello World!"</span><span >)</span><span>
                                              </span><span >//--&gt;</span><span>
                                           </span><span >&lt;/script&gt;</span><span>
                                           
                                           </span><span >&lt;noscript&gt;</span><span>
                                              Sorry...JavaScript is needed to go ahead.
                                           </span><span >&lt;/noscript&gt;</span><span>      
                                        </span><span >&lt;/body&gt;</span><span>
                                     </span><span >&lt;/html&gt;</span></pre>
                <p>Now, if the user's browser does not support JavaScript or JavaScript is not enabled, then the message
                    from &lt;/noscript&gt; will be displayed on the screen.</p>

                <h1 id="placement">&#128488; JavaScript - Placement in HTML File</h1>
                <hr>
                <div id="google-top-ads">

                    <div style="text-align:center" class="google-top-ads">
                        <div id="vi_top_ads" style="text-align:center!important;min-height:90px!important">
                            <div class="adsbyvli" data-ad-slot="vi_9012178"></div>
                        </div>
                        <script>
                            (function () {
                                var adPos = document.getElementById('vi_top_ads');
                                var ad_id_728 = "vi_9012178";
                                var ad_id_650 = "vi_9014435";
                                var ad_id_300 = "vi_9017967";
                                var width = window.innerWidth;
                                var ad_id = ad_id_728;
                                if (width <= 768) {
                                    ad_id = ad_id_300;
                                } else if (width <= 1435) {
                                    ad_id = ad_id_650;
                                }
                                adPos.innerHTML = '<div class="adsbyvli" data-ad-slot="' + ad_id + '"></div>';
                                (vitag.displayInit = window.vitag.displayInit || []).push(function () {
                                    viAPItag.display(ad_id);
                                });
                            }())
                        </script>
                    </div>
                </div>
                <br>
                <div class="mui-container-fluid button-borders">

                    <div class="clearer"></div>
                    <p>There is a flexibility given to include JavaScript code anywhere in an HTML document. However the
                        most preferred ways to include JavaScript in an HTML file are as follows </p>
                    <ul>
                        <li>
                            <p>Script in &lt;head&gt;...&lt;/head&gt; section.</p>
                        </li>
                        <li>
                            <p>Script in &lt;body&gt;...&lt;/body&gt; section.</p>
                        </li>
                        <li>
                            <p>Script in &lt;body&gt;...&lt;/body&gt; and &lt;head&gt;...&lt;/head&gt; sections.</p>
                        </li>
                        <li>
                            <p>Script in an external file and then include in &lt;head&gt;...&lt;/head&gt; section.</p>
                        </li>
                    </ul>
                    <p>In the following section, we will see how we can place JavaScript in an HTML file in different
                        ways.</p>
                    <h2>JavaScript in &lt;head&gt;...&lt;/head&gt; section</h2>
                    <p>If you want to have a script run on some event, such as when a user clicks somewhere, then you
                        will place that script in the head as follows </p>
                    <div class="demo-view">

                    </div>
                    <pre><span >&lt;html&gt;</span><span>
                                           </span><span >&lt;head&gt;</span><span>      
                                              </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                 </span><span >&lt;!--</span><span>
                                                    </span><span >function</span><span> sayHello</span><span >()</span><span> </span><span >{</span><span>
                                                       alert</span><span >(</span><span >"Hello World"</span><span >)</span><span>
                                                    </span><span >}</span><span>
                                                 </span><span >//--&gt;</span><span>
                                              </span><span >&lt;/script&gt;</span><span>     
                                           </span><span >&lt;/head&gt;</span><span>
                                           
                                           </span><span >&lt;body&gt;</span><span>
                                              </span><span >&lt;input</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"button"</span><span> </span><span >onclick</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>sayHello</span><span >()</span><span class="atv">"</span><span> </span><span >value</span><span> </span><span >=</span><span> </span><span class="atv">"Say Hello"</span><span> </span><span >/&gt;</span><span>
                                           </span><span >&lt;/body&gt;</span><span>  
                                        </span><span >&lt;/html&gt;</span></pre>

                    <h2>JavaScript in &lt;body&gt;...&lt;/body&gt; section</h2>
                    <p>If you need a script to run as the page loads so that the script generates content in the page,
                        then the script goes in the &lt;body&gt; portion of the document. In this case, you would not
                        have any function defined using JavaScript. Take a look at the following code.</p>
                    <pre><span >&lt;html&gt;</span><span>
                                           </span><span >&lt;head&gt;</span><span>
                                           </span><span >&lt;/head&gt;</span><span>
                                           
                                           </span><span >&lt;body&gt;</span><span>
                                              </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                 </span><span >&lt;!--</span><span>
                                                    document</span><span >.</span><span>write</span><span >(</span><span >"Hello World"</span><span >)</span><span>
                                                 </span><span >//--&gt;</span><span>
                                              </span><span >&lt;/script&gt;</span><span>
                                              
                                              </span><span >&lt;p&gt;</span><span>This is web page body </span><span >&lt;/p&gt;</span><span>
                                           </span><span >&lt;/body&gt;</span><span>
                                        </span><span >&lt;/html&gt;</span></pre>

                    <h2>JavaScript in &lt;body&gt; and &lt;head&gt; Sections</h2>
                    <p>You can put your JavaScript code in &lt;head&gt; and &lt;body&gt; section altogether as follows −
                    </p>
                    <pre><span >&lt;html&gt;</span><span>
                                           </span><span >&lt;head&gt;</span><span>
                                              </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                 </span><span >&lt;!--</span><span>
                                                    </span><span >function</span><span> sayHello</span><span >()</span><span> </span><span >{</span><span>
                                                       alert</span><span >(</span><span >"Hello World"</span><span >)</span><span>
                                                    </span><span >}</span><span>
                                                 </span><span >//--&gt;</span><span>
                                              </span><span >&lt;/script&gt;</span><span>
                                           </span><span >&lt;/head&gt;</span><span>
                                           
                                           </span><span >&lt;body&gt;</span><span>
                                              </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                 </span><span >&lt;!--</span><span>
                                                    document</span><span >.</span><span>write</span><span >(</span><span >"Hello World"</span><span >)</span><span>
                                                 </span><span >//--&gt;</span><span>
                                              </span><span >&lt;/script&gt;</span><span>
                                              
                                              </span><span >&lt;input</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"button"</span><span> </span><span >onclick</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>sayHello</span><span >()</span><span class="atv">"</span><span> </span><span >value</span><span> </span><span >=</span><span> </span><span class="atv">"Say Hello"</span><span> </span><span >/&gt;</span><span>
                                           </span><span >&lt;/body&gt;</span><span>
                                        </span><span >&lt;/html&gt;</span></pre>

                    <h2>JavaScript in External File</h2>
                    <p>As you begin to work more extensively with JavaScript, you will be likely to find that there are
                        cases where you are reusing identical JavaScript code on multiple pages of a site.</p>
                    <p>You are not restricted to be maintaining identical code in multiple HTML files. The <b>script</b>
                        tag provides a mechanism to allow you to store JavaScript in an external file and then include
                        it into your HTML files.</p>
                    <p>Here is an example to show how you can include an external JavaScript file in your HTML code
                        using <b>script</b> tag and its <b>src</b> attribute.</p>
                    <pre><span >&lt;html&gt;</span><span>
                                           </span><span >&lt;head&gt;</span><span>
                                              </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span> </span><span >src</span><span> </span><span >=</span><span> </span><span class="atv">"filename.js"</span><span> </span><span >&gt;&lt;/script&gt;</span><span>
                                           </span><span >&lt;/head&gt;</span><span>
                                           
                                           </span><span >&lt;body&gt;</span><span>
                                              .......
                                           </span><span >&lt;/body&gt;</span><span>
                                        </span><span >&lt;/html&gt;</span></pre>
                    <p>To use JavaScript from an external file source, you need to write all your JavaScript source code
                        in a simple text file with the extension ".js" and then include that file as shown above.</p>
                    <p>For example, you can keep the following content in <b>filename.js</b> file and then you can use
                        <b>sayHello</b> function in your HTML file after including the filename.js file.</p>
                    <pre class="result notranslate">function sayHello() {
                                           alert("Hello World")
                                        }
                                      
                                       

                                            <h1 id="06">&#128488; JavaScript - Variables</h1>
                                            <hr>
                                         
                                          
                                            <h2 >JavaScript Datatypes</h2>
                                            <p>One of the most fundamental characteristics of a programming language is the set of data types it supports. <br>These are the type of values that can be represented and manipulated in a programming language.</p>
                                            <p>JavaScript allows you to work with three primitive data types </p>
                                            <ul >
                                            <li><p><b>Numbers,</b> eg. 123, 120.50 etc.</p></li>
                                            <li><p><b>Strings</b> of text  e.g. "This text string" etc.</p></li>
                                            <li><p><b>Boolean</b> e.g. true or false.</p></li>
                                            </ul>
                                            <p>JavaScript also defines two trivial data types, <b>null</b> and <b>undefined,</b> each of which defines only a single value.<br> In addition to these primitive data types, JavaScript supports a composite data type known as <b>object</b>.<br> We will cover objects in detail in a separate chapter.</p>
                                            <h2>JavaScript Variables</h2>
                                            <p>Like many other programming languages, JavaScript has variables. Variables can be thought of as named containers.<br> You can place data into these containers and then refer to the data simply by naming the container.</p>
                                            <p>Before you use a variable in a JavaScript program, you must declare it. Variables are declared with the <b>var</b> keyword<br> as follows.</p>
                                            <pre  ><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                               </span><span >&lt;!--</span><span>
                                                  </span><span >var</span><span> money</span><span >;</span><span>
                                                  </span><span >var</span><span> name</span><span >;</span><span>
                                               </span><span >//--&gt;</span><span>
                                            </span><span >&lt;/script&gt;</span></pre>
                    <p>You can also declare multiple variables with the same <b>var</b> keyword as follows </p>
                    <pre><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                               </span><span >&lt;!--</span><span>
                                                  </span><span >var</span><span> money</span><span >,</span><span> name</span><span >;</span><span>
                                               </span><span >//--&gt;</span><span>
                                            </span><span >&lt;/script&gt;</span></pre>
                    <p>Storing a value in a variable is called <b>variable initialization</b>. You can do variable
                        initialization at the time of <br>variable creation or at a later point in time when you need
                        that variable.</p>
                    <p>For instance, you might create a variable named <b>money</b> and assign the value 2000.50 to it
                        <br>later. For another variable, you can assign a value at the time of initialization as
                        follows.
                    </p>
                    <pre><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                               </span><span >&lt;!--</span><span>
                                                  </span><span >var</span><span> name </span><span >=</span><span> </span><span >"Ali"</span><span >;</span><span>
                                                  </span><span >var</span><span> money</span><span >;</span><span>
                                                  money </span><span >=</span><span> </span><span >2000.50</span><span >;</span><span>
                                               </span><span >//--&gt;</span><span>
                                            </span><span >&lt;/script&gt;</span></pre>

                    <p>JavaScript is <b>untyped</b> language. This means that a JavaScript variable can hold a value of
                        <br>any data type. Unlike many other languages, you don't have to tell JavaScript during
                        variable <br>declaration what type of value the variable will hold. The value type of a variable
                        can change <br>during the execution of a program and JavaScript takes care of it automatically.
                    </p>
                    <h2>JavaScript Variable Scope</h2>
                    <p>The scope of a variable is the region of your program in which it is defined. JavaScript
                        <br>variables have only two scopes.</p>

                    <p>Within the body of a function, a local variable takes precedence over a global variable with the
                        same name. <br>If you declare a local variable or function parameter with the same name as a
                        global
                        variable, you effectively hide the global variable. Take a look into the following example.</p>

                </div>
                <pre><span >&lt;html&gt;</span><span>
                                               </span><span >&lt;body</span><span> </span><span >onload</span><span> </span><span >=</span><span> checkscope</span><span >();</span><span >&gt;</span><span>   
                                                  </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                     </span><span >&lt;!--</span><span>
                                                        </span><span >var</span><span> myVar </span><span >=</span><span> </span><span >"global"</span><span >;</span><span>      </span><span >// Declare a global variable</span><span>
                                                        </span><span >function</span><span> checkscope</span><span >(</span><span> </span><span >)</span><span> </span><span >{</span><span>
                                                           </span><span >var</span><span> myVar </span><span >=</span><span> </span><span >"local"</span><span >;</span><span>    </span><span >// Declare a local variable</span><span>
                                                           document</span><span >.</span><span>write</span><span >(</span><span>myVar</span><span >);</span><span>
                                                        </span><span >}</span><span>
                                                     </span><span >//--&gt;</span><span>
                                                  </span><span >&lt;/script&gt;</span><span>     
                                               </span><span >&lt;/body&gt;</span><span>
                                            </span><span >&lt;/html&gt;</span></pre>
                <p>This produces the following result </p>
                <pre class="result notranslate">local
                                            </pre>
                <h2>JavaScript Variable Names</h2>
                <p>While naming your variables in JavaScript, keep the following rules in mind.</p>
                <ul>
                    <li>
                        <p>You should not use any of the JavaScript reserved keywords as a variable name. These keywords
                            are mentioned in the next section. For example, <b>break</b> or <b>boolean</b> variable
                            names are not valid.</p>
                    </li>
                    <li>
                        <p>JavaScript variable names should not start with a numeral (0-9). They must begin with a
                            letter or an underscore character. For example, <b>123test</b> is an invalid variable name
                            but <b>_123test</b> is a valid one.</p>
                    </li>
                    <li>
                        <p>JavaScript variable names are case-sensitive. For example, <b>Name</b> and <b>name</b> are
                            two different variables.</p>
                    </li>
                </ul>
                <h2>JavaScript Reserved Words</h2>
                <p>A list of all the reserved words in JavaScript are given in the following table. They cannot be used
                    as JavaScript variables, functions, methods, loop labels, or any object names.</p>
                <table class="table table-bordered" style="text-align:center;">
                    <tbody>
                        <tr>
                            <td>abstract</td>
                            <td>else</td>
                            <td>instanceof</td>
                            <td>switch</td>
                        </tr>
                        <tr>
                            <td>boolean</td>
                            <td>enum</td>
                            <td>int</td>
                            <td>synchronized</td>
                        </tr>
                        <tr>
                            <td>break</td>
                            <td>export</td>
                            <td>interface</td>
                            <td>this</td>
                        </tr>
                        <tr>
                            <td>byte</td>
                            <td>extends</td>
                            <td>long</td>
                            <td>throw</td>
                        </tr>
                        <tr>
                            <td>case</td>
                            <td>false</td>
                            <td>native</td>
                            <td>throws</td>
                        </tr>
                        <tr>
                            <td>catch</td>
                            <td>final</td>
                            <td>new</td>
                            <td>transient</td>
                        </tr>
                        <tr>
                            <td>char</td>
                            <td>finally</td>
                            <td>null</td>
                            <td>true</td>
                        </tr>
                        <tr>
                            <td>class</td>
                            <td>float</td>
                            <td>package</td>
                            <td>try</td>
                        </tr>
                        <tr>
                            <td>const</td>
                            <td>for</td>
                            <td>private</td>
                            <td>typeof</td>
                        </tr>
                        <tr>
                            <td>continue</td>
                            <td>function</td>
                            <td>protected</td>
                            <td>var</td>
                        </tr>
                        <tr>
                            <td>debugger</td>
                            <td>goto</td>
                            <td>public</td>
                            <td>void</td>
                        </tr>
                        <tr>
                            <td>default</td>
                            <td>if</td>
                            <td>return</td>
                            <td>volatile</td>
                        </tr>
                        <tr>
                            <td>delete</td>
                            <td>implements</td>
                            <td>short</td>
                            <td>while</td>
                        </tr>
                        <tr>
                            <td>do</td>
                            <td>import</td>
                            <td>static</td>
                            <td>with</td>
                        </tr>
                        <tr>
                            <td>double</td>
                            <td>in</td>
                            <td>super</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>



                <h1 id="07">&#128488;  JavaScript - Operators</h1>

                <h2>What is an Operator?</h2>

                <p>Let us take a simple expression <b>4 + 5 is equal to 9</b>. Here 4 and 5 are called <b>operands</b>
                    and ‘+’ is called the <b>operator</b>. JavaScript supports the following types of operators.</p>

                <ul>
                    <li>Arithmetic Operators</li>
                    <li>Comparison Operators</li>
                    <li>Logical (or Relational) Operators</li>
                    <li>Assignment Operators</li>
                    <li>Conditional (or ternary) Operators</li>
                </ul>
                <h2>Arithmetic Operators</h2>

                <p>JavaScript supports the following arithmetic operators </p>
                <p>Assume variable A holds 10 and variable B holds 20, then </p>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="text-align:center;width:9%;">Sr.No.</th>
                            <th style="text-align:center;">Operator &amp; Description</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <p><b>+ (Addition)</b></p>
                                <p>Adds two operands</p>
                                <p><b>Ex:</b> A + B will give 30</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <p><b>- (Subtraction)</b></p>
                                <p>Subtracts the second operand from the first</p>
                                <p><b>Ex:</b> A - B will give -10</p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <p><b>* (Multiplication)</b></p>
                                <p>Multiply both operands</p>
                                <p><b>Ex:</b> A * B will give 200</p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <p><b>/ (Division)</b></p>
                                <p>Divide the numerator by the denominator</p>
                                <p><b>Ex:</b> B / A will give 2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <p><b>% (Modulus)</b></p>
                                <p>Outputs the remainder of an integer division</p>
                                <p><b>Ex:</b> B % A will give 0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <p><b>++ (Increment)</b></p>
                                <p>Increases an integer value by one</p>
                                <p><b>Ex:</b> A++ will give 11</p>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <p><b>-- (Decrement)</b></p>
                                <p>Decreases an integer value by one</p>
                                <p><b>Ex:</b> A-- will give 9</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><b>Note</b> − Addition operator (+) works for Numeric as well as Strings. e.g. "a" + 10 will give
                    "a10".</p>

                <h3>Example</h3>

                <p>The following code shows how to use arithmetic operators in JavaScript.</p>

                <pre><span >&lt;html&gt;</span><span>
                                                    </span><span >&lt;body&gt;</span><span>
                                                    
                                                       </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                          </span><span >&lt;!--</span><span>
                                                             </span><span >var</span><span> a </span><span >=</span><span> </span><span >33</span><span >;</span><span>
                                                             </span><span >var</span><span> b </span><span >=</span><span> </span><span >10</span><span >;</span><span>
                                                             </span><span >var</span><span> c </span><span >=</span><span> </span><span >"Test"</span><span >;</span><span>
                                                             </span><span >var</span><span> linebreak </span><span >=</span><span> </span><span >"&lt;br /&gt;"</span><span >;</span><span>
                                                          
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"a + b = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> a </span><span >+</span><span> b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"a - b = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> a </span><span >-</span><span> b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"a / b = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> a </span><span >/</span><span> b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"a % b = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> a </span><span >%</span><span> b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"a + b + c = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> a </span><span >+</span><span> b </span><span >+</span><span> c</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             a </span><span >=</span><span> </span><span >++</span><span>a</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"++a = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> </span><span >++</span><span>a</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          
                                                             b </span><span >=</span><span> </span><span >--</span><span>b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span >"--b = "</span><span >);</span><span>
                                                             result </span><span >=</span><span> </span><span >--</span><span>b</span><span >;</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                          </span><span >//--&gt;</span><span>
                                                       </span><span >&lt;/script&gt;</span><span>
                                                       
                                                       Set the variables to different values and then try...
                                                    </span><span >&lt;/body&gt;</span><span>
                                                 </span><span >&lt;/html&gt;</span></pre>

                <h3>Output</h3>

                <pre class="result notranslate">a + b = 43
                                                    a - b = 23
                                                    a / b = 3.3
                                                    a % b = 3
                                                    a + b + c = 43Test
                                                    ++a = 35
                                                    --b = 8
                                                    Set the variables to different values and then try...
                                                    </pre>


                <h2>Comparison Operators</h2>

                <p>JavaScript supports the following comparison operators </p>

                <p>Assume variable A holds 10 and variable B holds 20, then </p>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="text-align:center;">Sr.No.</th>
                            <th style="text-align:center;">Operator &amp; Description</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <p><b>= = (Equal)</b></p>
                                <p>Checks if the value of two operands are equal or not, if yes, then the condition
                                    becomes true.</p>
                                <p><b>Ex:</b> (A == B) is not true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <p><b>!= (Not Equal)</b></p>
                                <p>Checks if the value of two operands are equal or not, if the values are not equal,
                                    then the condition becomes true.</p>
                                <p><b>Ex:</b> (A != B) is true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <p><b>&gt; (Greater than)</b></p>
                                <p>Checks if the value of the left operand is greater than the value of the right
                                    operand, if yes, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A &gt; B) is not true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <p><b>&lt; (Less than)</b></p>
                                <p>Checks if the value of the left operand is less than the value of the right operand,
                                    if yes, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A &lt; B) is true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <p><b>&gt;= (Greater than or Equal to)</b></p>
                                <p>Checks if the value of the left operand is greater than or equal to the value of the
                                    right operand, if yes, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A &gt;= B) is not true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <p><b>&lt;= (Less than or Equal to)</b></p>
                                <p>Checks if the value of the left operand is less than or equal to the value of the
                                    right operand, if yes, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A &lt;= B) is true.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h3>Example</h3>
                <p>The following code shows how to use comparison operators in JavaScript.</p>

                <pre><span >&lt;html&gt;</span><span>
                                                        </span><span >&lt;body&gt;</span><span>  
                                                           </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><spant >"text/javascript"</span><span >&gt;</span><span>
                                                              </span><span >&lt;!--</span><span>
                                                                 </span><span >var</span><span> a </span><span >=</span><span> </span><span >10</span><span >;</span><span>
                                                                 </span><span >var</span><span> b </span><span >=</span><span> </span><span >20</span><span >;</span><span>
                                                                 </span><span >var</span><span> linebreak </span><span >=</span><span> </span><span >"&lt;br /&gt;"</span><span >;</span><span>
                                                           
                                     document</span><span >.</span><span>write</span><span >(</span><span >"(a == b) =&gt; "</span><span >);</span><span>
                                     result </span><span >=</span><span> </span><span >(</span><span>a </span><span >==</span><span> b</span><span >);</span><span>
                                     document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                    document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              
                                     document</span><span >.</span><span>write</span><span >(</span><span >"(a &lt; b) =&gt; "</span><span >);</span><span>
                                       result </span><span >=</span><span> </span><span >(</span><span>a </span><span >&lt;</span><span> b</span><span >);</span><span>
                                        document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                         document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              
                                          document</span><span >.</span><span>write</span><span >(</span><span >"(a &gt; b) =&gt; "</span><span >);</span><span>
                                            result </span><span >=</span><span> </span><span >(</span><span>a </span><span >&gt;</span><span> b</span><span >);</span><span>
                                            document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                             document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              
                                              document</span><span >.</span><span>write</span><span >(</span><span >"(a != b) =&gt; "</span><span >);</span><span>
                                               result </span><span >=</span><span> </span><span >(</span><span>a </span><span >!=</span><span> b</span><span >);</span><span>
                                                document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                              document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              
                                                   document</span><span >.</span><span>write</span><span >(</span><span >"(a &gt;= b) =&gt; "</span><span >);</span><span>
                                                     result </span><span >=</span><span> </span><span >(</span><span>a </span><span >&gt;=</span><span> b</span><span >);</span><span>
                                                       document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                    document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              
                                                      document</span><span >.</span><span>write</span><span >(</span><span >"(a &lt;= b) =&gt; "</span><span >);</span><span>
                                                     result </span><span >=</span><span> </span><span >(</span><span>a </span><span >&lt;=</span><span> b</span><span >);</span><span>
                                                     document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                      document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                              </span><span >//--&gt;</span><span>
                                                           </span><span >&lt;/script&gt;</span><span>Set the variables to different values
                                                                and different operators and then try...
                                                        </span><span >&lt;/body&gt;</span><span>
                                                     </span><span >&lt;/html&gt;</span></pre>
                <h3>Output</h3>

                <pre class="result notranslate">(a == b) =&gt; false 
                                                        (a &lt; b) =&gt; true 
                                                        (a &gt; b) =&gt; false 
                                                        (a != b) =&gt; true 
                                                        (a &gt;= b) =&gt; false 
                                                        a &lt;= b) =&gt; true
                                                        Set the variables to different values and 
                                                        different operators and then try...
                                                        </pre>
                <h2>Logical Operators</h2>

                <p>Assume variable A holds 10 and variable B holds 20, then </p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="text-align:center;">Sr.No.</th>
                            <th style="text-align:center;">Operator &amp; Description</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <p><b>&amp;&amp; (Logical AND)</b></p>
                                <p>If both the operands are non-zero, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A &amp;&amp; B) is true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <p><b>|| (Logical OR)</b></p>
                                <p>If any of the two operands are non-zero, then the condition becomes true.</p>
                                <p><b>Ex:</b> (A || B) is true.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <p><b>! (Logical NOT)</b></p>
                                <p>Reverses the logical state of its operand. If a condition is true, then the Logical
                                    NOT operator will make it false.</p>
                                <p><b>Ex:</b> ! (A &amp;&amp; B) is false.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <h2>Assignment Operators</h2>
                <p>JavaScript supports the following assignment operators </p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="text-align:center;">Sr.No.</th>
                            <th style="text-align:center;">Operator &amp; Description</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <p><b>= (Simple Assignment )</b></p>
                                <p>Assigns values from the right side operand to the left side operand</p>
                                <p><b>Ex:</b> C = A + B will assign the value of A + B into C</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <p><b>+= (Add and Assignment)</b></p>
                                <p>It adds the right operand to the left operand and assigns the result to the left
                                    operand.</p>
                                <p><b>Ex:</b> C += A is equivalent to C = C + A</p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <p><b>−= (Subtract and Assignment)</b></p>
                                <p>It subtracts the right operand from the left operand and assigns the result to the
                                    left operand.</p>
                                <p><b>Ex:</b> C -= A is equivalent to C = C - A</p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <p><b>*= (Multiply and Assignment)</b></p>
                                <p>It multiplies the right operand with the left operand and assigns the result to the
                                    left operand.</p>
                                <p><b>Ex:</b> C *= A is equivalent to C = C * A</p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <p><b>/= (Divide and Assignment)</b></p>
                                <p>It divides the left operand with the right operand and assigns the result to the left
                                    operand.</p>
                                <p><b>Ex:</b> C /= A is equivalent to C = C / A</p>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <p><b>%= (Modules and Assignment)</b></p>
                                <p>It takes modulus using two operands and assigns the result to the left operand.</p>
                                <p><b>Ex:</b> C %= A is equivalent to C = C % A</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><b>Note </b> Same logic applies to Bitwise operators so they will become like &lt;&lt;=, &gt;&gt;=,
                    &gt;&gt;=, &amp;=, |= and ^=. </p>
                <h3>Example</h3>

                <p>Try the following code to implement assignment operator in JavaScript.</p>
                <pre><span >&lt;html&gt;</span><span>
                                                                </span><span >&lt;body&gt;</span><span>   
                                                                   </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
                                                                      </span><span >&lt;!--</span><span>
                                                                         </span><span >var</span><span> a </span><span >=</span><span> </span><span >33</span><span >;</span><span>
                                                                         </span><span >var</span><span> b </span><span >=</span><span> </span><span >10</span><span >;</span><span>
                                                                         </span><span >var</span><span> linebreak </span><span >=</span><span> </span><span >"&lt;br /&gt;"</span><span >;</span><span>
                                                                      
                                                                            <br>                                      document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a = b) =&gt; "</span><span >);</span><span>
                                                                                <br>                                 result </span><span >=</span><span> </span><span >(</span><span>a </span><span >=</span><span> b</span><span >);</span><span>
                                                                                    <br>                                document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                        <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                            <br>                                document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      
                                                <br>                                 document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a += b) =&gt; "</span><span >);</span><span>
                                                    <br>                                 result </span><span >=</span><span> </span><span >(</span><span>a </span><span >+=</span><span> b</span><span >);</span><span>
                                                        <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                            <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      
                                                                <br>                                 document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a -= b) =&gt; "</span><span >);</span><span>
                                                                    <br>                                result </span><span >=</span><span> </span><span >(</span><span>a </span><span >-=</span><span> b</span><span >);</span><span>
                                                                        <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                                            <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      
                                                                                <br>                                 document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a *= b) =&gt; "</span><span >);</span><span>
                                                                                    <br>                                 result </span><span >=</span><span> </span><span >(</span><span>a </span><span >*=</span><span> b</span><span >);</span><span>
                                                                                        <br>                                 document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                                                            <br>                                  document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      
                                                                                                <br>                                  document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a /= b) =&gt; "</span><span >);</span><span>
                                                                                                    <br>                                  result </span><span >=</span><span> </span><span >(</span><span>a </span><span >/=</span><span> b</span><span >);</span><span>
                                                                                                        <br>                                  document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                                                                            <br>                                  document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      
                                                                                                                <br>                                    document</span><span >.</span><span>write</span><span >(</span><span >"Value of a =&gt; (a %= b) =&gt; "</span><span >);</span><span>
                                                                                                                    <br>                                    result </span><span >=</span><span> </span><span >(</span><span>a </span><span >%=</span><span> b</span><span >);</span><span>
                                                                                                                        <br>                                     document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                                                                                                                            <br>                                       document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                      </span><span >//--&gt;</span><span>
                                                                   </span><span >&lt;/script&gt;</span><span>      
                                                                   </span><span >&lt;p&gt;</span><span>Set the variables to different values 
                                                                       and different operators and then try...</span><span >&lt;/p&gt;</span><span>
                                                                </span><span >&lt;/body&gt;</span><span>
                                                             </span><span >&lt;/html&gt;</span></pre>
                <h3>Output</h3>
                <pre class="result notranslate">Value of a =&gt; (a = b) =&gt; 10
                                                                Value of a =&gt; (a += b) =&gt; 20 
                                                                Value of a =&gt; (a -= b) =&gt; 10 
                                                                Value of a =&gt; (a *= b) =&gt; 100 
                                                                Value of a =&gt; (a /= b) =&gt; 10
                                                                Value of a =&gt; (a %= b) =&gt; 0
                                                                Set the variables to different values and 
                                                                different operators and then try...
                                                                </pre>
                <h2>Miscellaneous Operator</h2>

                <p>We will discuss two operators here that are quite useful in JavaScript: the <b>conditional
                        operator</b> (? :) and the <b>typeof operator</b>.</p>
                <h3>Conditional Operator (? :)</h3>

                <p>The conditional operator first evaluates an expression for a true or false value and then executes
                    one of the two given statements depending upon the result of the evaluation.</p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="text-align:center;" width="10%">Sr.No.</th>
                            <th style="text-align:center;">Operator and Description</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <p><b>? : (Conditional )</b></p>
                                <p>If Condition is true? Then value X : Otherwise value Y</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h3>Example</h3>vv
                <p>Try the following code to understand how the Conditional Operator works in JavaScript.</p>
                <pre><span >&lt;html&gt;</span><span>
</span><span >&lt;body&gt;</span><span>   
</span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
      </span><span >&lt;!--</span><span>
        </span><span >var</span><span> a </span><span >=</span><span> </span><span >10</span><span >;</span><span>
             </span><span >var</span><span> b </span><span >=</span><span> </span><span >20</span><span >;</span><span>
                    </span><span >var</span><span> linebreak </span><span >=</span><span> </span><span >"&lt;br /&gt;"</span><span >;</span><span> 
                       document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
        document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                                                          
                document</span><span >.</span><span>write </span><span >(</span><span >"((a &lt; b) ? 100 : 200) =&gt; "</span><span >);</span><span>
                    result </span><span >=</span><span> </span><span >(</span><span>a </span><span >&lt;</span><span> b</span><span >)</span><span> </span><span >?</span><span> </span><span >100</span><span> </span><span >:</span><span> </span><span >200</span><span >;</span><span>
              document</span><span >.</span><span>write</span><span >(</span><span>result</span><span >);</span><span>
                              document</span><span >.</span><span>write</span><span >(</span><span>linebreak</span><span >);</span><span>
                                </span><span >//--&gt;</span><span>
                            </span><span >&lt;/script&gt;</span><span>      
                   </span><span >&lt;p&gt;</span><span>Set the variables to different values and different operators and then try...</span><span >&lt;/p&gt;</span><span>
                          </span><span >&lt;/body&gt;</span><span>
                         </span><span >&lt;/html&gt;</span></pre>

                <h3>Output</h3>

                <pre class="result notranslate">((a &gt; b) ? 100 : 200) =&gt; 200 
((a &lt; b) ? 100 : 200) =&gt; 100
Set the variables to different values and different operators and then try...
 </pre>

                <h1 id="08">&#128488; JavaScript - if...else Statement</h1>
                <p>While writing a program, there may be a situation when you need to adopt one out of a given set of
                    paths. In such cases, you need to use conditional statements that allow your program to make correct
                    decisions and perform right actions.</p>
                <p>JavaScript supports conditional statements which are used to perform different actions based on
                    different conditions. Here we will explain the <b>if..else</b> statement.</p>
                <h2>Flow Chart of if-else</h2>
                <p>The following flow chart shows how the if-else statement works.</p>
                <img src="decision_making.jpg" alt="Decision Making">

                <p>JavaScript supports the following forms of <b>if..else</b> statement </p>
                <ul>
                    <li>
                        <p>if statement</p>
                    </li>
                    <li>
                        <p>if...else statement</p>
                    </li>
                    <li>
                        <p>if...else if... statement.</p>
                    </li>
                </ul>
                <h2>if statement</h2>
                <p>The <b>if</b> statement is the fundamental control statement that allows JavaScript to make decisions
                    and execute statements conditionally.</p>
                <h3>Syntax</h3>
                <p>The syntax for a basic if statement is as follows </p>
                <pre class="result notranslate">if (expression) {
        Statement(s) to be executed if expression is true
     }
     </pre>

                <h2>if...else statement</h2>

                <p>The <b>'if...else'</b> statement is the next form of control statement that allows JavaScript to
                    execute statements in a more controlled way.</p>
                <h3>Syntax</h3>
                <pre class="result notranslate">if (expression) {
        Statement(s) to be executed if expression is true
     } else {
        Statement(s) to be executed if expression is false
     }
     </pre>

                <p>Here JavaScript expression is evaluated. If the resulting value is true, the given statement(s) in
                    the ‘if’ block, are executed. If the expression is false, then the given statement(s) in the else
                    block are executed.</p>
                <h1 id="09">&#128488; JavaScript - Switch Case</h1>
                <p>You can use multiple <b>if...else…if</b> statements, as in the previous chapter, to perform a
                    multiway branch. However, this is not always the best solution, especially when all of the branches
                    depend on the value of a single variable.</p>
                <p>Starting with JavaScript 1.2, you can use a <b>switch</b> statement which handles exactly this
                    situation, and it does so more efficiently than repeated <b>if...else if</b> statements.</p>

                <h2>Flow Chart</h2>
                <p>The following flow chart explains a switch-case statement works.</p>
                <img src="switch_case.jpg" alt="Switch case">
                <h3>Syntax</h3>
                <p>The objective of a <b>switch</b> statement is to give an expression to evaluate and several different
                    statements to execute based on the value of the expression. The interpreter checks each <b>case</b>
                    against the value of the expression until a match is found. If nothing matches, a <b>default</b>
                    condition will be used.</p>
                <pre class="result notranslate">switch (expression) {
        case condition 1: statement(s)
        break;
        
        case condition 2: statement(s)
        break;
        ...
        
        case condition n: statement(s)
        break;
        
        default: statement(s)
     }
     </pre>
                <p>The <b>break</b> statements indicate the end of a particular case. If they were omitted, the
                    interpreter would continue executing each statement in each of the following cases.</p>
                <p>We will explain <b>break</b> statement in <b>Loop Control</b> chapter.</p>
                <h1 id="10">&#128488; JavaScript - While Loops</h1>
                <p>While writing a program, you may encounter a situation where you need to perform an action over and
                    over again. In such situations, you would need to write loop statements to reduce the number of
                    lines.</p>
                <p>JavaScript supports all the necessary loops to ease down the pressure of programming.</p>
                <h2>The while Loop</h2>
                <p>The most basic loop in JavaScript is the <b>while</b> loop which would be discussed in this chapter.
                    The purpose of a <b>while</b> loop is to execute a statement or code block repeatedly as long as an
                    <b>expression</b> is true. Once the expression becomes <b>false,</b> the loop terminates.</p>
                <h3>Flow Chart</h3>
                <p>The flow chart of <b>while loop</b> looks as follows </p>
                <img src="while_loop.jpg" alt="While loop">
                <h3>Syntax</h3>
                <p>The syntax of <b>while loop</b> in JavaScript is as follows </p>
                <pre class="result notranslate">while (expression) {
        Statement(s) to be executed if expression is true
     }
     </pre>
                <h3>Example</h3>
                <p>Try the following example to implement while loop.</p>
                <pre><span >&lt;html&gt;</span><span>
    </span><span >&lt;body&gt;</span><span>
       
       </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
          </span><span >&lt;!--</span><span>
             </span><span >var</span><span> count </span><span >=</span><span> </span><span >0</span><span >;</span><span>
             document</span><span >.</span><span>write</span><span >(</span><span >"Starting Loop "</span><span >);</span><span>
          
             </span><span >while</span><span> </span><span >(</span><span>count </span><span >&lt;</span><span> </span><span >10</span><span >)</span><span> </span><span >{</span><span>
                document</span><span >.</span><span>write</span><span >(</span><span >"Current Count : "</span><span> </span><span >+</span><span> count </span><span >+</span><span> </span><span >"&lt;br /&gt;"</span><span >);</span><span>
                count</span><span >++;</span><span>
             </span><span >}</span><span>
          
             document</span><span >.</span><span>write</span><span >(</span><span >"Loop stopped!"</span><span >);</span><span>
          </span><span >//--&gt;</span><span>
       </span><span >&lt;/script&gt;</span><span>
       
       </span><span >&lt;p&gt;</span><span>Set the variable to different value and then try...</span><span >&lt;/p&gt;</span><span>
    </span><span >&lt;/body&gt;</span><span>
 </span><span >&lt;/html&gt;</span></pre>

                <h3>Output</h3>
                <pre class="result notranslate">Starting Loop
    Current Count : 0
    Current Count : 1
    Current Count : 2
    Current Count : 3
    Current Count : 4
    Current Count : 5
    Current Count : 6
    Current Count : 7
    Current Count : 8
    Current Count : 9
    Loop stopped!
    Set the variable to different value and then try... 
    </pre>
                <h2>The do...while Loop</h2>
                <p>The <b>do...while</b> loop is similar to the <b>while</b> loop except that the condition check
                    happens at the end of the loop. This means that the loop will always be executed at least once, even
                    if the condition is <b>false</b>.</p>

                <h3>Flow Chart</h3>
                <p>The flow chart of a <b>do-while</b> loop would be as follows </p>
                <img src="do_while_loop.jpg" alt="Do While Loop">

                <h3>Syntax</h3>
                <p>The syntax for <b>do-while</b> loop in JavaScript is as follows </p>
                <pre class="result notranslate">do {
        Statement(s) to be executed;
     } while (expression);
     </pre>
                <p><b>Note</b> − Don’t miss the semicolon used at the end of the <b>do...while</b> loop.</p>


                <h1 id="11">&#128488; JavaScript - For Loop</h1>
                <p>The '<b>for</b>' loop is the most compact form of looping. It includes the following three important
                    parts </p>

                <ul>
                    <li>
                        <p>The <b>loop initialization</b> where we initialize our counter to a starting value. The
                            initialization statement is executed before the loop begins.</p>
                    </li>
                    <li>
                        <p>The <b>test statement</b> which will test if a given condition is true or not. If the
                            condition is true, then the code given inside the loop will be executed, otherwise the
                            control will come out of the loop.</p>
                    </li>
                    <li>
                        <p>The <b>iteration statement</b> where you can increase or decrease your counter.</p>
                    </li>
                </ul>
                <p>You can put all the three parts in a single line separated by semicolons.</p>
                <h2>Flow Chart</h2>
                <p>The flow chart of a <b>for</b> loop in JavaScript would be as follows </p>
                <img src="for_loop.jpg" alt="For Loop">
                <h3>Syntax</h3>

                <p>The syntax of <b>for</b> loop is JavaScript is as follows </p>
                <pre class="result notranslate">for (initialization; test condition; iteration statement) {
            Statement(s) to be executed if test condition is true
         }
         </pre>


                <h1 id="loop">&#128488; JavaScript - Loop Control</h1>

                <p>JavaScript provides full control to handle loops and switch statements. There may be a situation when
                    you need to come out of a loop without reaching its bottom. There may also be a situation when you
                    want to skip a part of your code block and start the next iteration of the loop.</p>
                <p>To handle all such situations, JavaScript provides <b>break</b> and <b>continue</b> statements. These
                    statements are used to immediately come out of any loop or to start the next iteration of any loop
                    respectively.</p>
                <h2>The break Statement</h2>
                <p>The <b>break</b> statement, which was briefly introduced with the <i>switch</i> statement, is used to
                    exit a loop early, breaking out of the enclosing curly braces.</p>

                <h3>Flow Chart</h3>
                <p>The flow chart of a break statement would look as follows </p>
                <img src="break_statement.jpg" alt="Break Statement">

                <h1 id="12">&#128488; JavaScript - Functions</h1>
                <p>A function is a group of reusable code which can be called anywhere in your program. This eliminates
                    the need of writing the same code again and again. It helps programmers in writing modular codes.
                    Functions allow a programmer to divide a big program into a number of small and manageable
                    functions.</p>
                <p>Like any other advanced programming language, JavaScript also supports all the features necessary to
                    write modular code using functions. You must have seen functions like <b>alert()</b> and
                    <b>write()</b> in the earlier chapters. We were using these functions again and again, but they had
                    been written in core JavaScript only once.</p>
                <p>JavaScript allows us to write our own functions as well. This section explains how to write your own
                    functions in JavaScript.</p>
                <h2>Function Definition</h2>
                <p>Before we use a function, we need to define it. The most common way to define a function in
                    JavaScript is by using the <b>function</b> keyword, followed by a unique function name, a list of
                    parameters (that might be empty), and a statement block surrounded by curly braces.</p>
                <h3>Syntax</h3>
                <p>The basic syntax is shown here.</p>
                <pre class="result notranslate">&lt;script type = "text/javascript"&gt;
            &lt;!--
               function functionname(parameter-list) {
                  statements
               }
            //--&gt;
         &lt;/script&gt;
         </pre>
                <h2>Function Parameters</h2>
                <p>Till now, we have seen functions without parameters. But there is a facility to pass different
                    parameters while calling a function. These passed parameters can be captured inside the function and
                    any manipulation can be done over those param
                <h3>Example</h3>eters. A function can take multiple parameters separated by comma.</p>
                <p>Try the following example. We have modified our <b>sayHello</b> function here. Now it takes two
                    parameters.</p>
                <pre><span >&lt;html&gt;</span><span>
        </span><span >&lt;head&gt;</span><span>   
           </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
              </span><span >function</span><span> sayHello</span><span >(</span><span>name</span><span >,</span><span> age</span><span >)</span><span> </span><span >{</span><span>
                 document</span><span >.</span><span>write </span><span >(</span><span>name </span><span >+</span><span> </span><span >" is "</span><span> </span><span >+</span><span> age </span><span >+</span><span> </span><span >" years old."</span><span >);</span><span>
              </span><span >}</span><span>
           </span><span >&lt;/script&gt;</span><span>      
        </span><span >&lt;/head&gt;</span><span>
        
        </span><span >&lt;body&gt;</span><span>
           </span><span >&lt;p&gt;</span><span>Click the following button to call the function</span><span >&lt;/p&gt;</span><span>      
           </span><span >&lt;form&gt;</span><span>
              </span><span >&lt;input</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"button"</span><span> </span><span >onclick</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>sayHello</span><span >(</span><span >'Zara'</span><span >,</span><span> </span><span >7</span><span >)</span><span class="atv">"</span><span> </span><span >value</span><span> </span><span >=</span><span> </span><span class="atv">"Say Hello"</span><span >&gt;</span><span>
           </span><span >&lt;/form&gt;</span><span>      
           </span><span >&lt;p&gt;</span><span>Use different parameters inside the function and then try...</span><span >&lt;/p&gt;</span><span>
        </span><span >&lt;/body&gt;</span><span>
     </span><span >&lt;/html&gt;</span></pre>

                <h2>The return Statement</h2>
                <p>A JavaScript function can have an optional <b>return</b> statement. This is required if you want to
                    return a value from a
                <p>For example, you can pass two numbers in a function and then you can expect the function to return
                    their multiplication in your calling program.</p>function. This statement should be the last
                statement in a function.</p>

                <h1 id="13">&#128488; JavaScript - Events</h1>
                <h2>What is an Event ?</h2>
                <p>JavaScript's interaction with HTML is handled through events that occur when the user or the browser
                    manipulates a page.</p>
                <p>When the page loads, it is called an event. When the user clicks a button, that click too is an
                    event. Other examples include events like pressing any key, closing a window, resizing a window,
                    etc.</p>

                <p>Developers can use these events to execute JavaScript coded responses, which cause buttons to close
                    windows, messages to be displayed to users, data to be validated, and virtually any other type of
                    response imaginable.</p>

                <p>Events are a part of the Document Object Model (DOM) Level 3 and every HTML element contains a set of
                    events which can trigger JavaScript Code.</p>

                <p>Please go through this small tutorial for a better understanding <a
                        href="/html/html_events_ref.htm">HTML Event Reference</a>. Here we will see a few examples to
                    understand a relation between Event and JavaScript </p>
                <h2>onclick Event Type</h2>
                <p>This is the most frequently used event type which occurs when a user clicks the left button of his
                    mouse. You can put your validation, warning etc., against this event type.</p>
                <h3>Example</h3>
                <p>Try the following example.</p>

                <pre><span >&lt;html&gt;</span><span>
    </span><span >&lt;head&gt;</span><span>   
       </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
          </span><span >&lt;!--</span><span>
             </span><span >function</span><span> sayHello</span><span >()</span><span> </span><span >{</span><span>
                alert</span><span >(</span><span >"Hello World"</span><span >)</span><span>
             </span><span >}</span><span>
          </span><span >//--&gt;</span><span>
       </span><span >&lt;/script&gt;</span><span>      
    </span><span >&lt;/head&gt;</span><span>
    
    </span><span >&lt;body&gt;</span><span>
       </span><span >&lt;p&gt;</span><span>Click the following button and see result</span><span >&lt;/p&gt;</span><span>      
       </span><span >&lt;form&gt;</span><span>
          </span><span >&lt;input</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"button"</span><span> </span><span >onclick</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>sayHello</span><span >()</span><span class="atv">"</span><span> </span><span >value</span><span> </span><span >=</span><span> </span><span class="atv">"Say Hello"</span><span> </span><span >/&gt;</span><span>
       </span><span >&lt;/form&gt;</span><span>      
    </span><span >&lt;/body&gt;</span><span>
 </span><span >&lt;/html&gt;</span></pre>

                <h2>onmouseover and onmouseout</h2>
                <p>These two event types will help you create nice effects with images or even with text as well. The
                    <b>onmouseover</b> event triggers when you bring your mouse over any element and the
                    <b>onmouseout</b> triggers when you move your mouse out from that element. Try the following
                    example.</p>

                <pre><span >&lt;html&gt;</span><span>
</span><span >&lt;head&gt;</span><span>   
   </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
      </span><span >&lt;!--</span><span>
         </span><span >function</span><span> over</span><span >()</span><span> </span><span >{</span><span>
            document</span><span >.</span><span>write </span><span >(</span><span >"Mouse Over"</span><span >);</span><span>
         </span><span >}</span><span>            
         </span><span >function</span><span> out</span><span >()</span><span> </span><span >{</span><span>
            document</span><span >.</span><span>write </span><span >(</span><span >"Mouse Out"</span><span >);</span><span>
         </span><span >}</span><span>            
      </span><span >//--&gt;</span><span>
   </span><span >&lt;/script&gt;</span><span>      
</span><span >&lt;/head&gt;</span><span>

</span><span >&lt;body&gt;</span><span>
   </span><span >&lt;p&gt;</span><span>Bring your mouse inside the division to see the result:</span><span >&lt;/p&gt;</span><span>      
   </span><span >&lt;div</span><span> </span><span >onmouseover</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>over</span><span >()</span><span class="atv">"</span><span> </span><span >onmouseout</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>out</span><span >()</span><span class="atv">"</span><span >&gt;</span><span>
      </span><span >&lt;h2&gt;</span><span> This is inside the division </span><span >&lt;/h2&gt;</span><span>
   </span><span >&lt;/div&gt;</span><span>         
</span><span >&lt;/body&gt;</span><span>
</span><span >&lt;/html&gt;</span></pre>

                <h1 id="14">&#128488; JavaScript - Page Printing</h1>

                <p>Many times you would like to place a button on your webpage to print the content of that web page via
                    an actual printer. JavaScript helps you to implement this functionality using the <b>print</b>
                    function of <b>window</b> object.</p>

                <p>The JavaScript print function <b>window.print()</b> prints the current web page when executed. You
                    can call this function directly using the <b>onclick</b> event as shown in the following example.
                </p>
                <h3>Example</h3>
                <p>Try the following example.</p>
                <pre><span >&lt;html&gt;</span><span>
</span><span >&lt;head&gt;</span><span>      
   </span><span >&lt;script</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"text/javascript"</span><span >&gt;</span><span>
      </span><span >&lt;!--</span><span>
      </span><span >//--&gt;</span><span>
   </span><span >&lt;/script&gt;</span><span>
</span><span >&lt;/head&gt;</span><span>

</span><span >&lt;body&gt;</span><span>      
   </span><span >&lt;form&gt;</span><span>
      </span><span >&lt;input</span><span> </span><span >type</span><span> </span><span >=</span><span> </span><span class="atv">"button"</span><span> </span><span >value</span><span> </span><span >=</span><span> </span><span class="atv">"Print"</span><span> </span><span >onclick</span><span> </span><span >=</span><span> </span><span class="atv">"</span><span>window</span><span >.</span><span>print</span><span >()</span><span class="atv">"</span><span> </span><span >/&gt;</span><span>
   </span><span >&lt;/form&gt;</span><span>   
</span><span >&lt;/body&gt;</span><span>
</span><span >&lt;html&gt;</span></pre>
                <h3>Output</h3>

                <img src="style/page_print.PNG">
                <p>Although it serves the purpose of getting a printout, it is not a recommended way. A printer friendly
                    page is really just a page with text, no images, graphics, or advertising.</p>
                <p>You can make a page printer friendly in the following ways </p>

                <ul>
                    <li>
                        <p>Make a copy of the page and leave out unwanted text and graphics, then link to that printer
                            friendly page from the original. Check <a href="/javascript/printfriendly.htm"
                                target="_blank">Example</a>.</p>
                    </li>
                    <li>
                        <p>If you do not want to keep an extra copy of a page, then you can mark your printable text
                            using proper comments like &lt;!-- PRINT STARTS HERE --&gt;..... &lt;!-- PRINT ENDS HERE
                            --&gt; and then you can use PERL or any other script in the background to purge printable
                            text and display for final printing. We at Tutorialspoint use this method to provide print
                            facility to our site visitors.
                           
                        </p>
                    </li>
                </ul>

                <h2>How to Print a Page?</h2>
                <p>If you don't find the above facilities on a web page, then you can use the browser's standard toolbar
                    to get print the web page. Follow the link as follows.</p>
                <pre class="result notranslate">File &#8594;  Print &#8594; Click OK  button.
    </pre>










































        </div>

</body>

</html>