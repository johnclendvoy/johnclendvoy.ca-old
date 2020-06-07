@php
$front_end_code =
'<style>
    /* this is CSS code */
    .thick-blue-border {
        border: 4px solid #565699;
        border-radius: 4px;
        padding: 20px;
    }
    .black-button {
        background-color: #090909;
        border-radius: 10px;
        padding: 10px;
        color:white;
    }
</style>

<!-- This is HTML code -->
<div class="thick-blue-border">
    <h2>This is a Title</h2>
    <p>This is some text. Click the button to run the Javascript code.</p>
    <button class="black-button" onclick="showMessage()">
        <i class="fa fa-smile-o"></i>
        This is a Button
    </button>
</div>

<script>
<!-- This is Javascript code -->
function showMessage() {
    let message = \'Hello world!\';
    alert(message);
}
</script>
';

$back_end_code =
'public function showTodaysPosts() {

    $title = \'Blog Posts from \' . date(\'F jS, Y\');
    $allPosts = BlogPost::where(\'active\', true)->get();

    $todaysPosts = $allPosts->filter(function (Post $post) {
        return $post->created_date->isToday();
    });

    $content = View::create(\'posts.index\')->with([
        \'title\' => $title,
        \'posts\' => $todaysPosts,
    ]);

    return $content;
}';

@endphp

<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h2>What is Source Code?</h2>

            <p>A website is made up of many files written in special languages that can be understood by computers and web browsers. The collection of <b>files that make up a website</b> are referred to as that website's source code. It is the developer's job to understand how to write and maintain code in these languages and create the correct combination of files so that the website looks and works as expected. There are a number of different languages used, and each one is responsible for a different part of the website.</p>

            <p>To get an idea of what this looks like, check out the following block of code and it's result:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-7 m-b-30">
            <h4>Source Code</h4>
            <pre class="language-html"><code>{{$front_end_code}}</code></pre>
        </div>
        <div class="col-sm-12 col-md-5 m-b-30">
            <h4>Result</h4>
            {!! $front_end_code !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p>As you can see, even in this very simple example, there is a lot of code responsible for making it look good and work correctly. A lot more code could be added to make it look even better, not to mention making the button do something more interesting!</p>

            <p>The source code for most projects can be broken into two parts, the <b>front end</b> and the <b>back end</b> the two sides work together to display each page of your website.</p>

            <h3>Front End</h3>

            <p>The front end (also known as the "client side") of the website is <b>responsible for how the pages look</b>. This means, the layout of the page, the colours and fonts used, as well as spacing and sizing are all controlled on the front end. The block of source code shown above is an example of front end code.</p>

            <p>At their core, every web page is composed of at least <a href="https://en.wikipedia.org/wiki/HTML" title="Hypertext Markup Language">HTML</a> and <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" title="Cascading Style Sheets">CSS</a>, which are responsible for the layout and style of a page respectively. Most websites also rely on <a href="https://en.wikipedia.org/wiki/JavaScript" title="JavaScript">JavaScript</a> to add interactive elements to the page. These three languages are the backbone of all websites and we use web browsers to convert this code into a viewable web page.</p>

            <p>
                <div class="alert alert-success">
                    <h4>Try It Out!</h4>
                    If you are on a desktop computer, you can right-click on a website and select "View Page Source" to view the front end source code that was used to build the page you are on.
                </div>
            </p>

            <p>There are various tools that make it easier to create the front end of a website. There are many CSS frameworks available such as Bootstrap or Tailwind. These frameworks make it faster to create styles for commonly used components so developers don't have to design everything from the ground up when making websites with similar needs.</p>

            <p>Recently, the popularity of JavaScript frameworks, such as React, Angular and Vue has been growing quickly. Similarily, these are tools that make it easier for developers to quickly create JavaScript code, hiding away some of the more difficult parts, and providing quick access to the most useful parts of the Javascript language.</p>

            <h3>Back End</h3>

            <p>Not all websites require a back end. If your site is simple, you may only need to create a set of front end files that will rarely ever change. Simple websites like these are called <b>static websites</b>. For more complex sites, however, a back end is required.</p>
                
            <p>The back end (also known as the "server side") of a website is <b>required when the content on the website changes frequently</b>. These are called <b>dynamic websites</b>. A few examples of dynamic websites are blogs, where posts are added regularly, or social media websites where users can upload their own pictures. The main job of the back end code is to access data in a database. This includes saving new data, retrieving and displaying specific data,  and updating or deleting existing data. Once the database has been accessed, the back end code will return a page that is viewable in the web browser.</p>

            <p>Common backend programming languages include PHP, Python, and Ruby. Unlike front end code, this code is executed on the web server, and not the web browser. This means, the work done on the back end will happen quickly for everyone, no matter if you are using a state-of-the-art gaming PC, or a 6 year old mobile phone. It is the developer's job to make sure that the back end code runs efficiently, so the users do not have to wait long for the next page to load.</p>

            <p>Take a look at the example below, which could be used on a blog website, to see how the backend code is different from the front end code:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-7 m-b-30">
            <h4>PHP Example Code</h4>
            <pre class="language-php"><code>{{$back_end_code}}</code></pre>
        </div>
        <div class="col-sm-12 col-md-5 m-b-30">
            <h4>What it does:</h4>
            <ul>
                <li>Create a title based on today's date formated like "{{date('F jS, Y')}}"</li>
                <li>Retreive all the active blog posts from the database</li>
                <li>Filter through all the blog posts and only keep the ones that were created today</li>
                <li>Create a front end page, that will show the title and the blog posts</li>
                <li>Finally, return the page content to the web browser.</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p>Again, this is a very basic example. What isn't shown is all the code reponsible for seeing older blog posts, creating new ones, deleting old ones, updating their content, setting them to active, and many more actions like this. As the complexity of the website increases so does the amount of code needed. There could be thousands of lines of code needed to create a blog like the one I just described.</p>

            <p>Just like front end languages, a number of back end frameworks exists to help developers write code for a website quickly without having to worry about setting up the common parts that many websites share. <a href="https://laravel.com">Laravel</a> is a popular PHP framework, and my go-to choice when building websites. Other popular back end frameworks are Django (for Python developers) and Ruby on Rails.</p>
        </div>
    </div>
</div>
