<!DOCTYPE html><!--


GuzzleHttp\Exception\RequestException: cURL error 56: Received HTTP code 407 from proxy after CONNECT (see http://curl.haxx.se/libcurl/c/libcurl-errors.html) in file C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php on line 186
Stack trace:
  1. GuzzleHttp\Exception\RequestException-&gt;() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:1866
  2. GuzzleHttp\Handler\CurlFactory-&gt;createRejection() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:149
  3. GuzzleHttp\Handler\CurlFactory-&gt;finishError() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:102
  4. GuzzleHttp\Handler\CurlFactory-&gt;finish() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php:43
  5. GuzzleHttp\Handler\CurlHandler-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:28
  6. GuzzleHttp\Handler\Proxy-&gt;GuzzleHttp\Handler\{closure}() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:51
  7. GuzzleHttp\Handler\Proxy-&gt;GuzzleHttp\Handler\{closure}() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php:66
  8. GuzzleHttp\PrepareBodyMiddleware-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:30
  9. GuzzleHttp\Middleware-&gt;GuzzleHttp\{closure}() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php:70
 10. GuzzleHttp\RedirectMiddleware-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:60
 11. GuzzleHttp\Middleware-&gt;GuzzleHttp\{closure}() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\HandlerStack.php:67
 12. GuzzleHttp\HandlerStack-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:277
 13. GuzzleHttp\Client-&gt;transfer() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:125
 14. GuzzleHttp\Client-&gt;requestAsync() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:131
 15. GuzzleHttp\Client-&gt;request() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\monolog-discord-handler\src\DiscordHandler.php:45
 16. DiscordHandler\DiscordHandler-&gt;write() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Handler\AbstractProcessingHandler.php:39
 17. Monolog\Handler\AbstractProcessingHandler-&gt;handle() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:344
 18. Monolog\Logger-&gt;addRecord() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:637
 19. Monolog\Logger-&gt;info() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\App\Controllers\PagesController.php:13
 20. App\Controllers\PagesController-&gt;getHome() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
 21. call_user_func_array() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
 22. Invoker\Invoker-&gt;call() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\slim-bridge\src\ControllerInvoker.php:47
 23. DI\Bridge\Slim\ControllerInvoker-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:356
 24. Slim\Route-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
 25. Slim\Route-&gt;callMiddlewareStack() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:334
 26. Slim\Route-&gt;run() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:516
 27. Slim\App-&gt;__invoke() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
 28. Slim\App-&gt;callMiddlewareStack() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:407
 29. Slim\App-&gt;process() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:315
 30. Slim\App-&gt;run() C:\Users\raul.quintero\projects\lefuturiste\slim3-template\public\index.php:66











--><html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Whoops! There was an error.</title>

    <style>body {
  font: 12px "Helvetica Neue", helvetica, arial, sans-serif;
  color: #131313;
  background: #eeeeee;
  padding:0;
  margin: 0;
  max-height: 100%;

  text-rendering: optimizeLegibility;
}
  a {
    text-decoration: none;
  }

.panel {
    overflow-y: scroll;
    height: 100%;
    position: fixed;
    margin: 0;
    left: 0;
    top: 0;
}

.branding {
  position: absolute;
  top: 10px;
  right: 20px;
  color: #777777;
  font-size: 10px;
    z-index: 100;
}
  .branding a {
    color: #e95353;
  }

header {
  color: white;
  box-sizing: border-box;
  background-color: #2a2a2a;
  padding: 35px 40px;
  max-height: 180px;
  overflow: hidden;
  transition: 0.5s;
}

  header.header-expand {
    max-height: 1000px;
  }

  .exc-title {
    margin: 0;
    color: #bebebe;
    font-size: 14px;
  }
    .exc-title-primary {
      color: #e95353;
    }

    .exc-message {
      font-size: 20px;
      word-wrap: break-word;
      margin: 4px 0 0 0;
      color: white;
    }
      .exc-message span {
        display: block;
      }
      .exc-message-empty-notice {
        color: #a29d9d;
        font-weight: 300;
      }

.details-container {
  left: 30%;
  width: 70%;
  background: #fafafa;
}
  .details {
    padding: 5px;
  }

    .details-heading {
      color: #4288CE;
      font-weight: 300;
      padding-bottom: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid rgba(0, 0, 0, .1);
    }

    .details pre.sf-dump {
      white-space: pre;
      word-wrap: inherit;
    }

    .details pre.sf-dump,
    .details pre.sf-dump .sf-dump-num,
    .details pre.sf-dump .sf-dump-const,
    .details pre.sf-dump .sf-dump-str,
    .details pre.sf-dump .sf-dump-note,
    .details pre.sf-dump .sf-dump-ref,
    .details pre.sf-dump .sf-dump-public,
    .details pre.sf-dump .sf-dump-protected,
    .details pre.sf-dump .sf-dump-private,
    .details pre.sf-dump .sf-dump-meta,
    .details pre.sf-dump .sf-dump-key,
    .details pre.sf-dump .sf-dump-index {
      color: #463C54;
    }

.left-panel {
  width: 30%;
  background: #ded8d8;
}

  .frames-description {
    background: rgba(0, 0, 0, .05);
    padding: 8px 15px;
    color: #a29d9d;
    font-size: 11px;
  }

  .frames-description.frames-description-application {
    text-align: center;
    font-size: 12px;
  }
  .frames-container.frames-container-application .frame:not(.frame-application) {
    display: none;
  }

  .frames-tab {
    color: #a29d9d;
    display: inline-block;
    padding: 4px 8px;
    margin: 0 2px;
    border-radius: 3px;
  }

  .frames-tab.frames-tab-active {
    background-color: #2a2a2a;
    color: #bebebe;
  }

  .frame {
    padding: 14px;
    cursor: pointer;
    transition: all 0.1s ease;
    background: #eeeeee;
  }
    .frame:not(:last-child) {
      border-bottom: 1px solid rgba(0, 0, 0, .05);
    }

    .frame.active {
      box-shadow: inset -5px 0 0 0 #4288CE;
      color: #4288CE;
    }

    .frame:not(.active):hover {
      background: #BEE9EA;
    }

    .frame-method-info {
      margin-bottom: 10px;
    }

    .frame-class, .frame-function, .frame-index {
      font-size: 14px;
    }

    .frame-index {
      float: left;
    }

    .frame-method-info {
      margin-left: 24px;
    }

    .frame-index {
      font-size: 11px;
      color: #a29d9d;
      background-color: rgba(0, 0, 0, .05);
      height: 18px;
      width: 18px;
      line-height: 18px;
      border-radius: 5px;
      padding: 0 1px 0 1px;
      text-align: center;
      display: inline-block;
    }

    .frame-application .frame-index {
      background-color: #2a2a2a;
      color: #bebebe;
    }

    .frame-file {
      font-family: "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace;
      color: #a29d9d;
    }

      .frame-file .editor-link {
        color: #a29d9d;
      }

    .frame-line {
      font-weight: bold;
    }

    .frame-line:before {
      content: ":";
    }

    .frame-code {
      padding: 5px;
      background: #303030;
      display: none;
    }

    .frame-code.active {
      display: block;
    }

    .frame-code .frame-file {
      color: #a29d9d;
      padding: 12px 6px;

      border-bottom: none;
    }

    .code-block {
      padding: 10px;
      margin: 0;
      border-radius: 6px;
      box-shadow: 0 3px 0 rgba(0, 0, 0, .05),
                  0 10px 30px rgba(0, 0, 0, .05),
                  inset 0 0 1px 0 rgba(255, 255, 255, .07);
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
    }

    .linenums {
      margin: 0;
      margin-left: 10px;
    }

    .frame-comments {
      border-top: none;
      margin-top: 15px;

      font-size: 12px;
    }

    .frame-comments.empty {
    }

    .frame-comments.empty:before {
      content: "No comments for this stack frame.";
      font-weight: 300;
      color: #a29d9d;
    }

    .frame-comment {
      padding: 10px;
      color: #e3e3e3;
      border-radius: 6px;
      background-color: rgba(255, 255, 255, .05);
    }
      .frame-comment a {
        font-weight: bold;
        text-decoration: none;
      }
        .frame-comment a:hover {
          color: #4bb1b1;
        }

    .frame-comment:not(:last-child) {
      border-bottom: 1px dotted rgba(0, 0, 0, .3);
    }

    .frame-comment-context {
      font-size: 10px;
      color: white;
    }

.delimiter {
  display: inline-block;
}

.data-table-container label {
  font-size: 16px;
  color: #303030;
  font-weight: bold;
  margin: 10px 0;

  display: block;

  margin-bottom: 5px;
  padding-bottom: 5px;
}
  .data-table {
    width: 100%;
    margin-bottom: 10px;
  }

  .data-table tbody {
    font: 13px "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace;
  }

  .data-table thead {
    display: none;
  }

  .data-table tr {
    padding: 5px 0;
  }

  .data-table td:first-child {
    width: 20%;
    min-width: 130px;
    overflow: hidden;
    font-weight: bold;
    color: #463C54;
    padding-right: 5px;

  }

  .data-table td:last-child {
    width: 80%;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
  }

  .data-table span.empty {
    color: rgba(0, 0, 0, .3);
    font-weight: 300;
  }
  .data-table label.empty {
    display: inline;
  }

.handler {
  padding: 4px 0;
  font: 14px "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace;
}

/* prettify code style
Uses the Doxy theme as a base */
pre .str, code .str { color: #BCD42A; }  /* string  */
pre .kwd, code .kwd { color: #4bb1b1;  font-weight: bold; }  /* keyword*/
pre .com, code .com { color: #888; font-weight: bold; } /* comment */
pre .typ, code .typ { color: #ef7c61; }  /* type  */
pre .lit, code .lit { color: #BCD42A; }  /* literal */
pre .pun, code .pun { color: #fff; font-weight: bold;  } /* punctuation  */
pre .pln, code .pln { color: #e9e4e5; }  /* plaintext  */
pre .tag, code .tag { color: #4bb1b1; }  /* html/xml tag  */
pre .htm, code .htm { color: #dda0dd; }  /* html tag */
pre .xsl, code .xsl { color: #d0a0d0; }  /* xslt tag */
pre .atn, code .atn { color: #ef7c61; font-weight: normal;} /* html/xml attribute name */
pre .atv, code .atv { color: #bcd42a; }  /* html/xml attribute value  */
pre .dec, code .dec { color: #606; }  /* decimal  */
pre.code-block, code.code-block, .frame-args.code-block, .frame-args.code-block samp {
  font-family: "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace;
  background: #333;
  color: #e9e4e5;
}
  pre.code-block {
    white-space: pre-wrap;
  }

  pre.code-block a, code.code-block a {
    text-decoration:none;
  }

  .linenums li {
    color: #A5A5A5;
  }

  .linenums li.current{
    background: rgba(255, 100, 100, .07);
  }
    .linenums li.current.active {
      background: rgba(255, 100, 100, .17);
    }

pre:not(.prettyprinted) {
  padding-left: 60px;
}

#plain-exception {
  display: none;
}

#copy-button {
  cursor: pointer;
  border: 0;
}

.clipboard {
  opacity: .8;
  background: none;

  color: rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.1);

  border-radius: 3px;

  outline: none !important;
}

  .clipboard:hover {
    box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.3);
  }

/* inspired by githubs kbd styles */
kbd {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #fcfcfc;
  border-color: #ccc #ccc #bbb;
  border-image: none;
  border-style: solid;
  border-width: 1px;
  color: #555;
  display: inline-block;
  font-size: 11px;
  line-height: 10px;
  padding: 3px 5px;
  vertical-align: middle;
}


/* == Media queries */

/* Expand the spacing in the details section */
@media (min-width: 1000px) {
  .details, .frame-code {
    padding: 20px 40px;
  }

  .details-container {
    left: 32%;
    width: 68%;
  }

  .frames-container {
    margin: 5px;
  }

  .left-panel {
    width: 32%;
  }
}

.tooltipped {
  position: relative
}
.tooltipped:after {
  position: absolute;
  z-index: 1000000;
  display: none;
  padding: 5px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: break-word;
  white-space: pre;
  pointer-events: none;
  content: attr(aria-label);
  background: rgba(0, 0, 0, 0.8);
  border-radius: 3px;
  -webkit-font-smoothing: subpixel-antialiased
}
.tooltipped:before {
  position: absolute;
  z-index: 1000001;
  display: none;
  width: 0;
  height: 0;
  color: rgba(0, 0, 0, 0.8);
  pointer-events: none;
  content: "";
  border: 5px solid transparent
}
.tooltipped:hover:before,
.tooltipped:hover:after,
.tooltipped:active:before,
.tooltipped:active:after,
.tooltipped:focus:before,
.tooltipped:focus:after {
  display: inline-block;
  text-decoration: none
}
.tooltipped-s:after {
  top: 100%;
  right: 50%;
  margin-top: 5px
}
.tooltipped-s:before {
  top: auto;
  right: 50%;
  bottom: -5px;
  margin-right: -5px;
  border-bottom-color: rgba(0, 0, 0, 0.8)
}

pre.sf-dump {
  padding: 0px !important;
  margin: 0px !important;
}

.search-for-help {
  width: 85%;
  padding: 0;
  margin: 10px 0;
  list-style-type: none;
  display: inline-block;
}
  .search-for-help li {
    display: inline-block;
    margin-right: 5px;
  }
  .search-for-help li:last-child {
    margin-right: 0;
  }
    .search-for-help li a {

    }
      .search-for-help li a i {
        width: 16px;
        height: 16px;
        overflow: hidden;
        display: block;
      }
      .search-for-help li a svg {
        fill: #fff;
      }
      .search-for-help li a svg path {
        background-size: contain;
      }
</style>
  </head>
  <body>

    <div class="Whoops container">
      <div class="stack-container">

        <div class="panel left-panel cf ">
  <header>
  <div class="exception">
  <div class="exc-title">
                  GuzzleHttp \                        Exception \                        <span class="exc-title-primary">RequestException</span>
                    <span title="Exception Code">(407)</span>
      </div>

  <div class="exc-message">
          <span>cURL error 56: Received HTTP code 407 from proxy after CONNECT (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)</span>
    
    <ul class="search-for-help">
            <li>
        <a rel="noopener noreferrer" target="_blank" href="https://google.com/search?q=GuzzleHttp%5CException%5CRequestException+cURL+error+56%3A+Received+HTTP+code+407+from+proxy+after+CONNECT+%28see+http%3A%2F%2Fcurl.haxx.se%2Flibcurl%2Fc%2Flibcurl-errors.html%29" title="Search for help on Google.">
          <!-- Google icon by Alfredo H, from https://www.iconfinder.com/alfredoh -->
          <!-- Creative Commons (Attribution 3.0 Unported) -->
          <!-- http://creativecommons.org/licenses/by/3.0/ -->
          <svg class="google" height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M457.732 216.625c2.628 14.04 4.063 28.743 4.063 44.098C461.795 380.688 381.48 466 260.205 466c-116.024 0-210-93.977-210-210s93.976-210 210-210c56.703 0 104.076 20.867 140.44 54.73l-59.205 59.197v-.135c-22.046-21.002-50-31.762-81.236-31.762-69.297 0-125.604 58.537-125.604 127.84 0 69.29 56.306 127.97 125.604 127.97 62.87 0 105.653-35.966 114.46-85.313h-114.46v-81.902h197.528z"/>
          </svg>
        </a>
      </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://duckduckgo.com/?q=GuzzleHttp%5CException%5CRequestException+cURL+error+56%3A+Received+HTTP+code+407+from+proxy+after+CONNECT+%28see+http%3A%2F%2Fcurl.haxx.se%2Flibcurl%2Fc%2Flibcurl-errors.html%29" title="Search for help on DuckDuckGo.">
          <!-- DuckDuckGo icon by IconBaandar Team, from https://www.iconfinder.com/iconbaandar -->
          <!-- Creative Commons (Attribution 3.0 Unported) -->
          <!-- http://creativecommons.org/licenses/by/3.0/ -->
          <svg class="duckduckgo" height="16" viewBox="150 150 1675 1675" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M1792 1024c0 204.364-80.472 398.56-224.955 543.04-144.483 144.48-338.68 224.95-543.044 224.95-204.36 0-398.56-80.47-543.04-224.95-144.48-144.482-224.95-338.676-224.95-543.04 0-204.365 80.47-398.562 224.96-543.045C625.44 336.47 819.64 256 1024 256c204.367 0 398.565 80.47 543.05 224.954C1711.532 625.437 1792 819.634 1792 1024zm-270.206 497.787C1654.256 1389.327 1728 1211.36 1728 1024c0-187.363-73.74-365.332-206.203-497.796C1389.332 393.74 1211.363 320 1024 320s-365.33 73.742-497.795 206.205C393.742 658.67 320 836.637 320 1024c0 187.36 73.744 365.326 206.206 497.787C658.67 1654.25 836.638 1727.99 1024 1727.99c187.362 0 365.33-73.74 497.794-206.203z"/>
            <path d="M1438.64 1177.41c0-.03-.005-.017-.01.004l.01-.004z"/>
            <path d="M1499.8 976.878c.03-.156-.024-.048-.11.107l.11-.107z"/>
            <path d="M1105.19 991.642zm-68.013-376.128c-8.087-10.14-18.028-19.965-29.89-29.408-13.29-10.582-29-20.76-47.223-30.443-35.07-18.624-74.482-31.61-115.265-38.046-39.78-6.28-80.84-6.256-120.39.917l1.37 31.562c1.8.164 7.7 3.9 14.36 8.32-20.68 5.94-39.77 14.447-39.48 39.683l.2 17.48 17.3-1.73c29.38-2.95 60.17-2.06 90.32 2.61 9.21 1.42 18.36 3.2 27.38 5.32l-4.33 1.15c-20.45 5.58-38.93 12.52-54.25 20.61-46.28 24.32-75.51 60.85-90.14 108.37-14.14 45.95-14.27 101.81-2.72 166.51l.06.06c15.14 84.57 64.16 316.39 104.11 505.39 19.78 93.59 37.38 176.83 47.14 224.4 3.26 15.84 5.03 31.02 5.52 45.52.3 9.08.09 17.96-.58 26.62-.45 5.8-1.11 11.51-1.96 17.112l31.62 4.75c.71-4.705 1.3-9.494 1.76-14.373 48.964 10.517 99.78 16.05 151.88 16.05 60.68 0 119.61-7.505 175.91-21.64 3.04 6.08 6.08 12.19 9.11 18.32l28.62-14.128c-2.11-4.27-4.235-8.55-6.37-12.84-23.005-46.124-47.498-93.01-68.67-133.534-15.39-29.466-29.01-55.53-39.046-75.58-26.826-53.618-53.637-119.47-68.28-182.368-8.78-37.705-13.128-74.098-10.308-105.627-15.31-6.28-26.69-11.8-31.968-15.59l-.01.015c-14.22-10.2-31.11-28.12-41.82-49.717-8.618-17.376-13.4-37.246-10.147-57.84 3.17-19.84 27.334-46.714 57.843-67.46v-.063c26.554-18.05 58.75-32.506 86.32-34.31 7.835-.51 16.31-1.008 23.99-1.45 33.45-1.95 50.243-2.93 84.475-11.42 10.88-2.697 26.19-6.56 43.53-11.09 2.364-40.7-5.947-87.596-21.04-133.234-22.004-66.53-58.68-131.25-97.627-170.21-12.543-12.55-28.17-22.79-45.9-30.933-16.88-7.753-35.64-13.615-55.436-17.782zm-10.658 178.553s6.77-42.485 58.39-33.977c27.96 4.654 37.89 29.833 37.89 29.833s-25.31-14.46-44.95-14.198c-40.33.53-51.35 18.342-51.35 18.342zm-240.45-18.802c48.49-19.853 72.11 11.298 72.11 11.298s-35.21-15.928-69.46 5.59c-34.19 21.477-32.92 43.452-32.92 43.452s-18.17-40.5 30.26-60.34zm296.5 95.4c0-6.677 2.68-12.694 7.01-17.02 4.37-4.37 10.42-7.074 17.1-7.074 6.73 0 12.79 2.7 17.15 7.05 4.33 4.33 7.01 10.36 7.01 17.05 0 6.74-2.7 12.81-7.07 17.18-4.33 4.33-10.37 7.01-17.1 7.01-6.68 0-12.72-2.69-17.05-7.03-4.36-4.37-7.07-10.43-7.07-17.16zm-268.42 51.27c0-8.535 3.41-16.22 8.93-21.738 5.55-5.55 13.25-8.982 21.81-8.982 8.51 0 16.18 3.415 21.7 8.934 5.55 5.55 8.98 13.25 8.98 21.78 0 8.53-3.44 16.23-8.98 21.79-5.52 5.52-13.19 8.93-21.71 8.93-8.55 0-16.26-3.43-21.82-8.99-5.52-5.52-8.93-13.2-8.93-21.74z"/>
            <path d="M1102.48 986.34zm390.074-64.347c-28.917-11.34-74.89-12.68-93.32-3.778-11.5 5.567-35.743 13.483-63.565 21.707-25.75 7.606-53.9 15.296-78.15 21.702-17.69 4.67-33.3 8.66-44.4 11.435-34.92 8.76-52.05 9.77-86.17 11.78-7.84.46-16.48.97-24.48 1.5-28.12 1.86-60.97 16.77-88.05 35.4v.06c-31.12 21.4-55.77 49.12-59.01 69.59-3.32 21.24 1.56 41.74 10.35 59.67 10.92 22.28 28.15 40.77 42.66 51.29l.01-.02c5.38 3.9 16.98 9.6 32.6 16.08 26.03 10.79 63.2 23.76 101.25 34.23 43.6 11.99 89.11 21.05 121.69 20.41 34.26-.69 77.73-10.52 114.54-24.67 22.15-8.52 42.21-18.71 56.88-29.58 17.85-13.22 28.7-28.42 28.4-44.74-.07-3.89-.72-7.63-1.97-11.21l-.02.01c-11.6-33.06-50.37-23.59-105.53-10.12-46.86 11.445-107.94 26.365-169.01 20.434-32.56-3.167-54.45-10.61-67.88-20.133-5.96-4.224-9.93-8.67-12.18-13.11-1.96-3.865-2.68-7.84-2.33-11.714.39-4.42 2.17-9.048 5.1-13.57l-.05-.03c7.86-12.118 23.082-9.72 43.93-6.43 25.91 4.08 58.2 9.172 99.013-3.61 39.63-12.378 87.76-29.9 131.184-47.39 42.405-17.08 80.08-34.078 100.74-46.18 25.46-14.87 37.57-29.428 40.59-42.866 2.725-12.152-.89-22.48-8.903-31.07-5.87-6.29-14.254-11.31-23.956-15.115z"/>
          </svg>
        </a>
      </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://stackoverflow.com/search?q=GuzzleHttp%5CException%5CRequestException+cURL+error+56%3A+Received+HTTP+code+407+from+proxy+after+CONNECT+%28see+http%3A%2F%2Fcurl.haxx.se%2Flibcurl%2Fc%2Flibcurl-errors.html%29" title="Search for help on Stack Overflow.">
          <!-- Stack Overflow icon by Picons.me, from https://www.iconfinder.com/Picons -->
          <!-- Free for commercial use -->
          <svg class="stackoverflow" height="16" viewBox="-1163 1657.697 56.693 56.693" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M-1126.04 1689.533l-16.577-9.778 2.088-3.54 16.578 9.778zM-1127.386 1694.635l-18.586-4.996 1.068-3.97 18.586 4.995zM-1127.824 1700.137l-19.165-1.767.378-4.093 19.165 1.767zM-1147.263 1701.293h19.247v4.11h-19.247z"/>
            <path d="M-1121.458 1710.947s0 .96-.032.96v.016h-30.796s-.96 0-.96-.016h-.032v-20.03h3.288v16.805h25.244v-16.804h3.288v19.07zM-1130.667 1667.04l10.844 15.903-3.396 2.316-10.843-15.903zM-1118.313 1663.044l3.29 18.963-4.05.703-3.29-18.963z"/>
          </svg>
        </a>
      </li>
    </ul>

    <span id="plain-exception">GuzzleHttp\Exception\RequestException thrown with message &quot;cURL error 56: Received HTTP code 407 from proxy after CONNECT (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)&quot;

Stacktrace:
#29 GuzzleHttp\Exception\RequestException in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:1866
#28 GuzzleHttp\Handler\CurlFactory:createRejection in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:149
#27 GuzzleHttp\Handler\CurlFactory:finishError in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:102
#26 GuzzleHttp\Handler\CurlFactory:finish in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php:43
#25 GuzzleHttp\Handler\CurlHandler:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:28
#24 GuzzleHttp\Handler\Proxy:GuzzleHttp\Handler\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:51
#23 GuzzleHttp\Handler\Proxy:GuzzleHttp\Handler\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php:66
#22 GuzzleHttp\PrepareBodyMiddleware:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:30
#21 GuzzleHttp\Middleware:GuzzleHttp\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php:70
#20 GuzzleHttp\RedirectMiddleware:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:60
#19 GuzzleHttp\Middleware:GuzzleHttp\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\HandlerStack.php:67
#18 GuzzleHttp\HandlerStack:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:277
#17 GuzzleHttp\Client:transfer in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:125
#16 GuzzleHttp\Client:requestAsync in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:131
#15 GuzzleHttp\Client:request in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\monolog-discord-handler\src\DiscordHandler.php:45
#14 DiscordHandler\DiscordHandler:write in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Handler\AbstractProcessingHandler.php:39
#13 Monolog\Handler\AbstractProcessingHandler:handle in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:344
#12 Monolog\Logger:addRecord in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:637
#11 Monolog\Logger:info in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\App\Controllers\PagesController.php:13
#10 App\Controllers\PagesController:getHome in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
#9 call_user_func_array in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
#8 Invoker\Invoker:call in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\slim-bridge\src\ControllerInvoker.php:47
#7 DI\Bridge\Slim\ControllerInvoker:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:356
#6 Slim\Route:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
#5 Slim\Route:callMiddlewareStack in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:334
#4 Slim\Route:run in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:516
#3 Slim\App:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
#2 Slim\App:callMiddlewareStack in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:407
#1 Slim\App:process in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:315
#0 Slim\App:run in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\public\index.php:66
</span>
    <button id="copy-button" class="clipboard" data-clipboard-text="GuzzleHttp\Exception\RequestException thrown with message &quot;cURL error 56: Received HTTP code 407 from proxy after CONNECT (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)&quot;

Stacktrace:
#29 GuzzleHttp\Exception\RequestException in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:1866
#28 GuzzleHttp\Handler\CurlFactory:createRejection in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:149
#27 GuzzleHttp\Handler\CurlFactory:finishError in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:102
#26 GuzzleHttp\Handler\CurlFactory:finish in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php:43
#25 GuzzleHttp\Handler\CurlHandler:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:28
#24 GuzzleHttp\Handler\Proxy:GuzzleHttp\Handler\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php:51
#23 GuzzleHttp\Handler\Proxy:GuzzleHttp\Handler\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php:66
#22 GuzzleHttp\PrepareBodyMiddleware:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:30
#21 GuzzleHttp\Middleware:GuzzleHttp\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php:70
#20 GuzzleHttp\RedirectMiddleware:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php:60
#19 GuzzleHttp\Middleware:GuzzleHttp\{closure} in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\HandlerStack.php:67
#18 GuzzleHttp\HandlerStack:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:277
#17 GuzzleHttp\Client:transfer in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:125
#16 GuzzleHttp\Client:requestAsync in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php:131
#15 GuzzleHttp\Client:request in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\monolog-discord-handler\src\DiscordHandler.php:45
#14 DiscordHandler\DiscordHandler:write in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Handler\AbstractProcessingHandler.php:39
#13 Monolog\Handler\AbstractProcessingHandler:handle in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:344
#12 Monolog\Logger:addRecord in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php:637
#11 Monolog\Logger:info in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\App\Controllers\PagesController.php:13
#10 App\Controllers\PagesController:getHome in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
#9 call_user_func_array in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php:82
#8 Invoker\Invoker:call in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\slim-bridge\src\ControllerInvoker.php:47
#7 DI\Bridge\Slim\ControllerInvoker:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:356
#6 Slim\Route:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
#5 Slim\Route:callMiddlewareStack in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php:334
#4 Slim\Route:run in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:516
#3 Slim\App:__invoke in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php:117
#2 Slim\App:callMiddlewareStack in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:407
#1 Slim\App:process in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php:315
#0 Slim\App:run in C:\Users\raul.quintero\projects\lefuturiste\slim3-template\public\index.php:66
" title="Copy exception details to clipboard">
      COPY
    </button>
  </div>
</div>
</header>
<div class="frames-description ">
      <span>
        Stack frames (30)
    </span>
  </div>
<div class="frames-container ">
    <div class="frame active " id="frame-line-0">
      <span class="frame-index">29</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Exception</div>\<div class="delimiter">RequestException</div></span>
        <span class="frame-function"><div class="delimiter"></div></span>
      </div>

   
  </div>
  <div class="frame  " id="frame-line-1">
      <span class="frame-index">28</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">CurlFactory</div></span>
        <span class="frame-function"><div class="delimiter">createRejection</div></span>
      </div>

   
  </div>
  <div class="frame  " id="frame-line-2">
      <span class="frame-index">27</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">CurlFactory</div></span>
        <span class="frame-function"><div class="delimiter">finishError</div></span>
      </div>

   
  </div>
  <div class="frame  " style="background-color:#f5d8d8" id="frame-line-3">
      <span class="frame-index">26</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter"> 
         <b>[arrival of new notifications]</b> 
          UTC 21-02-2019 08:27:24 
         <br>warnings: 1 - fatals: 1</div></span>
        </span>
      </div>

  </div>
  <div class="frame  " id="frame-line-4">
      <span class="frame-index">25</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">CurlHandler</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

   
  </div>
  <div class="frame  " id="frame-line-5">
      <span class="frame-index">24</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">Proxy</div></span>
        <span class="frame-function"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">{closure}</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php</div><!--
   --><span class="frame-line">51</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-6">
      <span class="frame-index">23</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">Proxy</div></span>
        <span class="frame-function"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Handler</div>\<div class="delimiter">{closure}</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php</div><!--
   --><span class="frame-line">66</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-7">
      <span class="frame-index">22</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">PrepareBodyMiddleware</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Middleware.php</div><!--
   --><span class="frame-line">30</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-8">
      <span class="frame-index">21</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Middleware</div></span>
        <span class="frame-function"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">{closure}</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php</div><!--
   --><span class="frame-line">70</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-9">
      <span class="frame-index">20</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">RedirectMiddleware</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Middleware.php</div><!--
   --><span class="frame-line">60</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-10">
      <span class="frame-index">19</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Middleware</div></span>
        <span class="frame-function"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">{closure}</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\HandlerStack.php</div><!--
   --><span class="frame-line">67</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-11">
      <span class="frame-index">18</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">HandlerStack</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Client.php</div><!--
   --><span class="frame-line">277</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-12">
      <span class="frame-index">17</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Client</div></span>
        <span class="frame-function"><div class="delimiter">transfer</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Client.php</div><!--
   --><span class="frame-line">125</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-13">
      <span class="frame-index">16</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Client</div></span>
        <span class="frame-function"><div class="delimiter">requestAsync</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\guzzlehttp\guzzle\src\Client.php</div><!--
   --><span class="frame-line">131</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-14">
      <span class="frame-index">15</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">GuzzleHttp</div>\<div class="delimiter">Client</div></span>
        <span class="frame-function"><div class="delimiter">request</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\lefuturiste\monolog-discord-handler\src\DiscordHandler.php</div><!--
   --><span class="frame-line">45</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-15">
      <span class="frame-index">14</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">DiscordHandler</div>\<div class="delimiter">DiscordHandler</div></span>
        <span class="frame-function"><div class="delimiter">write</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\monolog\monolog\src\Monolog\Handler\AbstractProcessingHandler.php</div><!--
   --><span class="frame-line">39</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-16">
      <span class="frame-index">13</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Monolog</div>\<div class="delimiter">Handler</div>\<div class="delimiter">AbstractProcessingHandler</div></span>
        <span class="frame-function"><div class="delimiter">handle</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\monolog\monolog\src\Monolog\Logger.php</div><!--
   --><span class="frame-line">344</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-17">
      <span class="frame-index">12</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Monolog</div>\<div class="delimiter">Logger</div></span>
        <span class="frame-function"><div class="delimiter">addRecord</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\monolog\monolog\src\Monolog\Logger.php</div><!--
   --><span class="frame-line">637</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-18">
      <span class="frame-index">11</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Monolog</div>\<div class="delimiter">Logger</div></span>
        <span class="frame-function"><div class="delimiter">info</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\App\Controllers\PagesController.php</div><!--
   --><span class="frame-line">13</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-19">
      <span class="frame-index">10</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">App</div>\<div class="delimiter">Controllers</div>\<div class="delimiter">PagesController</div></span>
        <span class="frame-function"><div class="delimiter">getHome</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\php-di\invoker\src\Invoker.php</div><!--
   --><span class="frame-line">82</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-20">
      <span class="frame-index">9</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter"></div></span>
        <span class="frame-function"><div class="delimiter">call_user_func_array</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\php-di\invoker\src\Invoker.php</div><!--
   --><span class="frame-line">82</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-21">
      <span class="frame-index">8</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Invoker</div>\<div class="delimiter">Invoker</div></span>
        <span class="frame-function"><div class="delimiter">call</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\lefuturiste\slim-bridge\src\ControllerInvoker.php</div><!--
   --><span class="frame-line">47</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-22">
      <span class="frame-index">7</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">DI</div>\<div class="delimiter">Bridge</div>\<div class="delimiter">Slim</div>\<div class="delimiter">ControllerInvoker</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\Route.php</div><!--
   --><span class="frame-line">356</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-23">
      <span class="frame-index">6</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">Route</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\MiddlewareAwareTrait.php</div><!--
   --><span class="frame-line">117</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-24">
      <span class="frame-index">5</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">Route</div></span>
        <span class="frame-function"><div class="delimiter">callMiddlewareStack</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\Route.php</div><!--
   --><span class="frame-line">334</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-25">
      <span class="frame-index">4</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">Route</div></span>
        <span class="frame-function"><div class="delimiter">run</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\App.php</div><!--
   --><span class="frame-line">516</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-26">
      <span class="frame-index">3</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">App</div></span>
        <span class="frame-function"><div class="delimiter">__invoke</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\MiddlewareAwareTrait.php</div><!--
   --><span class="frame-line">117</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-27">
      <span class="frame-index">2</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">App</div></span>
        <span class="frame-function"><div class="delimiter">callMiddlewareStack</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\App.php</div><!--
   --><span class="frame-line">407</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-28">
      <span class="frame-index">1</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">App</div></span>
        <span class="frame-function"><div class="delimiter">process</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\vendor\slim\slim\Slim\App.php</div><!--
   --><span class="frame-line">315</span>
    </div>
  </div>
  <div class="frame  " id="frame-line-29">
      <span class="frame-index">0</span>
      <div class="frame-method-info">
        <span class="frame-class"><div class="delimiter">Slim</div>\<div class="delimiter">App</div></span>
        <span class="frame-function"><div class="delimiter">run</div></span>
      </div>

    <div class="frame-file">
        <div class="delimiter">&hellip;\public\index.php</div><!--
   --><span class="frame-line">66</span>
    </div>
  </div>
</div></div>
        <div class="panel details-container cf">
  <div class="frame-code-container ">
            <div class="frame-code active" id="frame-code-0">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-0" class="code-block linenums:167">                    &#039;An error was encountered during the on_headers event&#039;,
                    $easy-&gt;request,
                    $easy-&gt;response,
                    $easy-&gt;onHeadersException,
                    $ctx
                )
            );
        }
 
        $message = sprintf(
            &#039;cURL error %s: %s (%s)&#039;,
            $ctx[&#039;errno&#039;],
            $ctx[&#039;error&#039;],
            &#039;see http://curl.haxx.se/libcurl/c/libcurl-errors.html&#039;
        );
 
        // Create a connection exception if it was a specific error code.
        $error = isset($connectionErrors[$easy-&gt;errno])
            ? new ConnectException($message, $easy-&gt;request, null, $ctx)
            : new RequestException($message, $easy-&gt;request, $easy-&gt;response, null, $ctx);
 
        return \GuzzleHttp\Promise\rejection_for($error);
    }
 
    private function getDefaultConf(EasyHandle $easy)
    {
        $conf = [
            &#039;_headers&#039;             =&gt; $easy-&gt;request-&gt;getHeaders(),
            CURLOPT_CUSTOMREQUEST  =&gt; $easy-&gt;request-&gt;getMethod(),
            CURLOPT_URL            =&gt; (string) $easy-&gt;request-&gt;getUri()-&gt;withFragment(&#039;&#039;),
            CURLOPT_RETURNTRANSFER =&gt; false,
            CURLOPT_HEADER         =&gt; false,
            CURLOPT_CONNECTTIMEOUT =&gt; 150,
        ];
 
        if (defined(&#039;CURLOPT_PROTOCOLS&#039;)) {
            $conf[CURLOPT_PROTOCOLS] = CURLPROTO_HTTP | CURLPROTO_HTTPS;
        }
 
        $version = $easy-&gt;request-&gt;getProtocolVersion();</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-1">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-1" class="code-block linenums:130">    private static function finishError(
        callable $handler,
        EasyHandle $easy,
        CurlFactoryInterface $factory
    ) {
        // Get error information and release the handle to the factory.
        $ctx = [
            &#039;errno&#039; =&gt; $easy-&gt;errno,
            &#039;error&#039; =&gt; curl_error($easy-&gt;handle),
        ] + curl_getinfo($easy-&gt;handle);
        $factory-&gt;release($easy);
 
        // Retry when nothing is present or when curl failed to rewind.
        if (empty($easy-&gt;options[&#039;_err_message&#039;])
            &amp;&amp; (!$easy-&gt;errno || $easy-&gt;errno == 65)
        ) {
            return self::retryFailedRewind($handler, $easy, $ctx);
        }
 
        return self::createRejection($easy, $ctx);
    }
 
    private static function createRejection(EasyHandle $easy, array $ctx)
    {
        static $connectionErrors = [
            CURLE_OPERATION_TIMEOUTED  =&gt; true,
            CURLE_COULDNT_RESOLVE_HOST =&gt; true,
            CURLE_COULDNT_CONNECT      =&gt; true,
            CURLE_SSL_CONNECT_ERROR    =&gt; true,
            CURLE_GOT_NOTHING          =&gt; true,
        ];
 
        // If an exception was encountered during the onHeaders event, then
        // return a rejected promise that wraps that exception.
        if ($easy-&gt;onHeadersException) {
            return \GuzzleHttp\Promise\rejection_for(
                new RequestException(
                    &#039;An error was encountered during the on_headers event&#039;,
                    $easy-&gt;request,
                    $easy-&gt;response,</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-2">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-2" class="code-block linenums:83">     * Completes a cURL transaction, either returning a response promise or a
     * rejected promise.
     *
     * @param callable             $handler
     * @param EasyHandle           $easy
     * @param CurlFactoryInterface $factory Dictates how the handle is released
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public static function finish(
        callable $handler,
        EasyHandle $easy,
        CurlFactoryInterface $factory
    ) {
        if (isset($easy-&gt;options[&#039;on_stats&#039;])) {
            self::invokeStats($easy);
        }
 
        if (!$easy-&gt;response || $easy-&gt;errno) {
            return self::finishError($handler, $easy, $factory);
        }
 
        // Return the response if it is present and there is no error.
        $factory-&gt;release($easy);
 
        // Rewind the body of the response if possible.
        $body = $easy-&gt;response-&gt;getBody();
        if ($body-&gt;isSeekable()) {
            $body-&gt;rewind();
        }
 
        return new FulfilledPromise($easy-&gt;response);
    }
 
    private static function invokeStats(EasyHandle $easy)
    {
        $curlStats = curl_getinfo($easy-&gt;handle);
        $stats = new TransferStats(
            $easy-&gt;request,
            $easy-&gt;response,</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-3">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-3" class="code-block linenums:24">     * @param array $options Array of options to use with the handler
     */
    public function __construct(array $options = [])
    {
        $this-&gt;factory = isset($options[&#039;handle_factory&#039;])
            ? $options[&#039;handle_factory&#039;]
            : new CurlFactory(3);
    }
 
    public function __invoke(RequestInterface $request, array $options)
    {
        if (isset($options[&#039;delay&#039;])) {
            usleep($options[&#039;delay&#039;] * 1000);
        }
 
        $easy = $this-&gt;factory-&gt;create($request, $options);
        curl_exec($easy-&gt;handle);
        $easy-&gt;errno = curl_errno($easy-&gt;handle);
 
        return CurlFactory::finish($this, $easy, $this-&gt;factory);
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-4">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-4" class="code-block linenums:9"> */
class Proxy
{
    /**
     * Sends synchronous requests to a specific handler while sending all other
     * requests to another handler.
     *
     * @param callable $default Handler used for normal responses
     * @param callable $sync    Handler used for synchronous responses.
     *
     * @return callable Returns the composed handler.
     */
    public static function wrapSync(
        callable $default,
        callable $sync
    ) {
        return function (RequestInterface $request, array $options) use ($default, $sync) {
            return empty($options[RequestOptions::SYNCHRONOUS])
                ? $default($request, $options)
                : $sync($request, $options);
        };
    }
 
    /**
     * Sends streaming requests to a streaming compatible handler while sending
     * all other requests to a default handler.
     *
     * This, for example, could be useful for taking advantage of the
     * performance benefits of curl while still supporting true streaming
     * through the StreamHandler.
     *
     * @param callable $default   Handler used for non-streaming responses
     * @param callable $streaming Handler used for streaming responses
     *
     * @return callable Returns the composed handler.
     */
    public static function wrapStreaming(
        callable $default,
        callable $streaming
    ) {</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-5">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-5" class="code-block linenums:32">    /**
     * Sends streaming requests to a streaming compatible handler while sending
     * all other requests to a default handler.
     *
     * This, for example, could be useful for taking advantage of the
     * performance benefits of curl while still supporting true streaming
     * through the StreamHandler.
     *
     * @param callable $default   Handler used for non-streaming responses
     * @param callable $streaming Handler used for streaming responses
     *
     * @return callable Returns the composed handler.
     */
    public static function wrapStreaming(
        callable $default,
        callable $streaming
    ) {
        return function (RequestInterface $request, array $options) use ($default, $streaming) {
            return empty($options[&#039;stream&#039;])
                ? $default($request, $options)
                : $streaming($request, $options);
        };
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-6">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-6" class="code-block linenums:47">                }
            }
        }
 
        // Add a default content-length or transfer-encoding header.
        if (!$request-&gt;hasHeader(&#039;Content-Length&#039;)
            &amp;&amp; !$request-&gt;hasHeader(&#039;Transfer-Encoding&#039;)
        ) {
            $size = $request-&gt;getBody()-&gt;getSize();
            if ($size !== null) {
                $modify[&#039;set_headers&#039;][&#039;Content-Length&#039;] = $size;
            } else {
                $modify[&#039;set_headers&#039;][&#039;Transfer-Encoding&#039;] = &#039;chunked&#039;;
            }
        }
 
        // Add the expect header if needed.
        $this-&gt;addExpectHeader($request, $options, $modify);
 
        return $fn(Psr7\modify_request($request, $modify), $options);
    }
 
    private function addExpectHeader(
        RequestInterface $request,
        array $options,
        array &amp;$modify
    ) {
        // Determine if the Expect header should be used
        if ($request-&gt;hasHeader(&#039;Expect&#039;)) {
            return;
        }
 
        $expect = isset($options[&#039;expect&#039;]) ? $options[&#039;expect&#039;] : null;
 
        // Return if disabled or if you&#039;re not using HTTP/1.1 or HTTP/2.0
        if ($expect === false || $request-&gt;getProtocolVersion() &lt; 1.1) {
            return;
        }
 
        // The expect header is unconditionally enabled</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-7">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-7" class="code-block linenums:11"> 
/**
 * Functions used to create and wrap handlers with handler middleware.
 */
final class Middleware
{
    /**
     * Middleware that adds cookies to requests.
     *
     * The options array must be set to a CookieJarInterface in order to use
     * cookies. This is typically handled for you by a client.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    public static function cookies()
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options[&#039;cookies&#039;])) {
                    return $handler($request, $options);
                } elseif (!($options[&#039;cookies&#039;] instanceof CookieJarInterface)) {
                    throw new \InvalidArgumentException(&#039;cookies must be an instance of GuzzleHttp\Cookie\CookieJarInterface&#039;);
                }
                $cookieJar = $options[&#039;cookies&#039;];
                $request = $cookieJar-&gt;withCookieHeader($request);
                return $handler($request, $options)
                    -&gt;then(
                        function ($response) use ($cookieJar, $request) {
                            $cookieJar-&gt;extractCookies($request, $response);
                            return $response;
                        }
                );
            };
        };
    }
 
    /**
     * Middleware that throws exceptions for 4xx or 5xx responses when the
     * &quot;http_error&quot; request option is set to true.
     *</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-8">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-8" class="code-block linenums:51">        $fn = $this-&gt;nextHandler;
 
        if (empty($options[&#039;allow_redirects&#039;])) {
            return $fn($request, $options);
        }
 
        if ($options[&#039;allow_redirects&#039;] === true) {
            $options[&#039;allow_redirects&#039;] = self::$defaultSettings;
        } elseif (!is_array($options[&#039;allow_redirects&#039;])) {
            throw new \InvalidArgumentException(&#039;allow_redirects must be true, false, or array&#039;);
        } else {
            // Merge the default settings with the provided settings
            $options[&#039;allow_redirects&#039;] += self::$defaultSettings;
        }
 
        if (empty($options[&#039;allow_redirects&#039;][&#039;max&#039;])) {
            return $fn($request, $options);
        }
 
        return $fn($request, $options)
            -&gt;then(function (ResponseInterface $response) use ($request, $options) {
                return $this-&gt;checkRedirect($request, $options, $response);
            });
    }
 
    /**
     * @param RequestInterface  $request
     * @param array             $options
     * @param ResponseInterface|PromiseInterface $response
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function checkRedirect(
        RequestInterface $request,
        array $options,
        ResponseInterface $response
    ) {
        if (substr($response-&gt;getStatusCode(), 0, 1) != &#039;3&#039;
            || !$response-&gt;hasHeader(&#039;Location&#039;)
        ) {</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-9">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Middleware.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-9" class="code-block linenums:41">                        }
                );
            };
        };
    }
 
    /**
     * Middleware that throws exceptions for 4xx or 5xx responses when the
     * &quot;http_error&quot; request option is set to true.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    public static function httpErrors()
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options[&#039;http_errors&#039;])) {
                    return $handler($request, $options);
                }
                return $handler($request, $options)-&gt;then(
                    function (ResponseInterface $response) use ($request, $handler) {
                        $code = $response-&gt;getStatusCode();
                        if ($code &lt; 400) {
                            return $response;
                        }
                        throw RequestException::create($request, $response);
                    }
                );
            };
        };
    }
 
    /**
     * Middleware that pushes history data to an ArrayAccess container.
     *
     * @param array|\ArrayAccess $container Container to hold the history (by reference).
     *
     * @return callable Returns a function that accepts the next handler.
     * @throws \InvalidArgumentException if container is not an array or ArrayAccess.
     */</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-10">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\HandlerStack.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-10" class="code-block linenums:48"> 
    /**
     * @param callable $handler Underlying HTTP handler.
     */
    public function __construct(callable $handler = null)
    {
        $this-&gt;handler = $handler;
    }
 
    /**
     * Invokes the handler stack as a composed handler
     *
     * @param RequestInterface $request
     * @param array            $options
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        $handler = $this-&gt;resolve();
 
        return $handler($request, $options);
    }
 
    /**
     * Dumps a string representation of the stack.
     *
     * @return string
     */
    public function __toString()
    {
        $depth = 0;
        $stack = [];
        if ($this-&gt;handler) {
            $stack[] = &quot;0) Handler: &quot; . $this-&gt;debugCallable($this-&gt;handler);
        }
 
        $result = &#039;&#039;;
        foreach (array_reverse($this-&gt;stack) as $tuple) {
            $depth++;
            $str = &quot;{$depth}) Name: &#039;{$tuple[1]}&#039;, &quot;;
            $str .= &quot;Function: &quot; . $this-&gt;debugCallable($tuple[0]);</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-11">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-11" class="code-block linenums:258">     */
    private function transfer(RequestInterface $request, array $options)
    {
        // save_to -&gt; sink
        if (isset($options[&#039;save_to&#039;])) {
            $options[&#039;sink&#039;] = $options[&#039;save_to&#039;];
            unset($options[&#039;save_to&#039;]);
        }
 
        // exceptions -&gt; http_errors
        if (isset($options[&#039;exceptions&#039;])) {
            $options[&#039;http_errors&#039;] = $options[&#039;exceptions&#039;];
            unset($options[&#039;exceptions&#039;]);
        }
 
        $request = $this-&gt;applyOptions($request, $options);
        $handler = $options[&#039;handler&#039;];
 
        try {
            return Promise\promise_for($handler($request, $options));
        } catch (\Exception $e) {
            return Promise\rejection_for($e);
        }
    }
 
    /**
     * Applies the array of request options to a request.
     *
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return RequestInterface
     */
    private function applyOptions(RequestInterface $request, array &amp;$options)
    {
        $modify = [
            &#039;set_headers&#039; =&gt; [],
        ];
 
        if (isset($options[&#039;headers&#039;])) {</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-12">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-12" class="code-block linenums:106">        return $this-&gt;sendAsync($request, $options)-&gt;wait();
    }
 
    public function requestAsync($method, $uri = &#039;&#039;, array $options = [])
    {
        $options = $this-&gt;prepareDefaults($options);
        // Remove request modifying parameter because it can be done up-front.
        $headers = isset($options[&#039;headers&#039;]) ? $options[&#039;headers&#039;] : [];
        $body = isset($options[&#039;body&#039;]) ? $options[&#039;body&#039;] : null;
        $version = isset($options[&#039;version&#039;]) ? $options[&#039;version&#039;] : &#039;1.1&#039;;
        // Merge the URI into the base URI.
        $uri = $this-&gt;buildUri($uri, $options);
        if (is_array($body)) {
            $this-&gt;invalidBody();
        }
        $request = new Psr7\Request($method, $uri, $headers, $body, $version);
        // Remove the option so that they are not doubly-applied.
        unset($options[&#039;headers&#039;], $options[&#039;body&#039;], $options[&#039;version&#039;]);
 
        return $this-&gt;transfer($request, $options);
    }
 
    public function request($method, $uri = &#039;&#039;, array $options = [])
    {
        $options[RequestOptions::SYNCHRONOUS] = true;
        return $this-&gt;requestAsync($method, $uri, $options)-&gt;wait();
    }
 
    public function getConfig($option = null)
    {
        return $option === null
            ? $this-&gt;config
            : (isset($this-&gt;config[$option]) ? $this-&gt;config[$option] : null);
    }
 
    private function buildUri($uri, array $config)
    {
        // for BC we accept null which would otherwise fail in uri_for
        $uri = Psr7\uri_for($uri === null ? &#039;&#039; : $uri);
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-13">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\guzzlehttp\guzzle\src\Client.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-13" class="code-block linenums:112">        // Remove request modifying parameter because it can be done up-front.
        $headers = isset($options[&#039;headers&#039;]) ? $options[&#039;headers&#039;] : [];
        $body = isset($options[&#039;body&#039;]) ? $options[&#039;body&#039;] : null;
        $version = isset($options[&#039;version&#039;]) ? $options[&#039;version&#039;] : &#039;1.1&#039;;
        // Merge the URI into the base URI.
        $uri = $this-&gt;buildUri($uri, $options);
        if (is_array($body)) {
            $this-&gt;invalidBody();
        }
        $request = new Psr7\Request($method, $uri, $headers, $body, $version);
        // Remove the option so that they are not doubly-applied.
        unset($options[&#039;headers&#039;], $options[&#039;body&#039;], $options[&#039;version&#039;]);
 
        return $this-&gt;transfer($request, $options);
    }
 
    public function request($method, $uri = &#039;&#039;, array $options = [])
    {
        $options[RequestOptions::SYNCHRONOUS] = true;
        return $this-&gt;requestAsync($method, $uri, $options)-&gt;wait();
    }
 
    public function getConfig($option = null)
    {
        return $option === null
            ? $this-&gt;config
            : (isset($this-&gt;config[$option]) ? $this-&gt;config[$option] : null);
    }
 
    private function buildUri($uri, array $config)
    {
        // for BC we accept null which would otherwise fail in uri_for
        $uri = Psr7\uri_for($uri === null ? &#039;&#039; : $uri);
 
        if (isset($config[&#039;base_uri&#039;])) {
            $uri = Psr7\UriResolver::resolve(Psr7\uri_for($config[&#039;base_uri&#039;]), $uri);
        }
 
        return $uri-&gt;getScheme() === &#039;&#039; &amp;&amp; $uri-&gt;getHost() !== &#039;&#039; ? $uri-&gt;withScheme(&#039;http&#039;) : $uri;
    }</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-14">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\monolog-discord-handler\src\DiscordHandler.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-14" class="code-block linenums:26">    {
        $this-&gt;name = $name;
        $this-&gt;subname = $subname;
        $this-&gt;guzzle = new \GuzzleHttp\Client();
        $this-&gt;webhooks = $webhooks;
        parent::__construct($level, $bubble);
    }
 
    /**
     * @param array $record
     */
    protected function write(array $record)
    {
        $content = &#039;[&#039; . $record[&#039;datetime&#039;]-&gt;format(&#039;Y-m-d H:i:s&#039;) . &#039;] &#039; . $this-&gt;name . &#039;.&#039; . $this-&gt;subname . &#039;.&#039; . $record[&#039;level_name&#039;] . &#039;: &#039; . $record[&#039;message&#039;];
 
        $i = 0;
        while ($i &lt; count($this-&gt;webhooks)){
            $req = $this-&gt;guzzle-&gt;request(&#039;POST&#039;, $this-&gt;webhooks[$i], [
                &#039;form_params&#039; =&gt; [
                    &#039;content&#039; =&gt; $content
                ]
            ]);
            $i++;
        }
    }
}</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-15">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Handler\AbstractProcessingHandler.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-15" class="code-block linenums:20"> *
 * @author Jordi Boggiano &lt;j.boggiano@seld.be&gt;
 * @author Christophe Coevoet &lt;stof@notk.org&gt;
 */
abstract class AbstractProcessingHandler extends AbstractHandler
{
    /**
     * {@inheritdoc}
     */
    public function handle(array $record)
    {
        if (!$this-&gt;isHandling($record)) {
            return false;
        }
 
        $record = $this-&gt;processRecord($record);
 
        $record[&#039;formatted&#039;] = $this-&gt;getFormatter()-&gt;format($record);
 
        $this-&gt;write($record);
 
        return false === $this-&gt;bubble;
    }
 
    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array $record
     * @return void
     */
    abstract protected function write(array $record);
 
    /**
     * Processes a record.
     *
     * @param  array $record
     * @return array
     */
    protected function processRecord(array $record)
    {</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-16">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-16" class="code-block linenums:325">        }
        $ts-&gt;setTimezone(static::$timezone);
 
        $record = array(
            &#039;message&#039; =&gt; (string) $message,
            &#039;context&#039; =&gt; $context,
            &#039;level&#039; =&gt; $level,
            &#039;level_name&#039; =&gt; $levelName,
            &#039;channel&#039; =&gt; $this-&gt;name,
            &#039;datetime&#039; =&gt; $ts,
            &#039;extra&#039; =&gt; array(),
        );
 
        try {
            foreach ($this-&gt;processors as $processor) {
                $record = call_user_func($processor, $record);
            }
 
            while ($handler = current($this-&gt;handlers)) {
                if (true === $handler-&gt;handle($record)) {
                    break;
                }
 
                next($this-&gt;handlers);
            }
        } catch (Exception $e) {
            $this-&gt;handleException($e, $record);
        }
 
        return true;
    }
 
    /**
     * Ends a log cycle and frees all resources used by handlers.
     *
     * Closing a Handler means flushing all buffers and freeing any open resources/handles.
     * Handlers that have been closed should be able to accept log records again and re-open
     * themselves on demand, but this may not always be possible depending on implementation.
     *
     * This is useful at the end of a request and will be called automatically on every handler</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-17">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\monolog\monolog\src\Monolog\Logger.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-17" class="code-block linenums:618">     * @param  array  $context The log context
     * @return bool   Whether the record has been processed
     */
    public function debug($message, array $context = array())
    {
        return $this-&gt;addRecord(static::DEBUG, $message, $context);
    }
 
    /**
     * Adds a log record at the INFO level.
     *
     * This method allows for compatibility with common interfaces.
     *
     * @param  string $message The log message
     * @param  array  $context The log context
     * @return bool   Whether the record has been processed
     */
    public function info($message, array $context = array())
    {
        return $this-&gt;addRecord(static::INFO, $message, $context);
    }
 
    /**
     * Adds a log record at the NOTICE level.
     *
     * This method allows for compatibility with common interfaces.
     *
     * @param  string $message The log message
     * @param  array  $context The log context
     * @return bool   Whether the record has been processed
     */
    public function notice($message, array $context = array())
    {
        return $this-&gt;addRecord(static::NOTICE, $message, $context);
    }
 
    /**
     * Adds a log record at the WARNING level.
     *
     * This method allows for compatibility with common interfaces.</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-18">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\App\Controllers\PagesController.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-18" class="code-block linenums:1">&lt;?php
 
namespace App\Controllers;
 
use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
 
class PagesController extends Controller
{
    public function getHome(ServerRequestInterface $request, ResponseInterface $response)
    {
        $this-&gt;container-&gt;get(Logger::class)-&gt;info(&#039;Hello world!&#039;);
        return $response-&gt;write(&#039;Hello world!&#039;);
//        return a 404 Not Found Exception
//        throw new NotFoundException($request, $response);
    }
}</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-19">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-19" class="code-block linenums:63">        $callableReflection = CallableReflection::create($callable);
 
        $args = $this-&gt;parameterResolver-&gt;getParameters($callableReflection, $parameters, array());
 
        // Sort by array key because call_user_func_array ignores numeric keys
        ksort($args);
 
        // Check all parameters are resolved
        $diff = array_diff_key($callableReflection-&gt;getParameters(), $args);
        if (! empty($diff)) {
            /** @var \ReflectionParameter $parameter */
            $parameter = reset($diff);
            throw new NotEnoughParametersException(sprintf(
                &#039;Unable to invoke the callable because no value was given for parameter %d ($%s)&#039;,
                $parameter-&gt;getPosition() + 1,
                $parameter-&gt;name
            ));
        }
 
        return call_user_func_array($callable, $args);
    }
 
    /**
     * Create the default parameter resolver.
     *
     * @return ParameterResolver
     */
    private function createParameterResolver()
    {
        return new ResolverChain(array(
            new NumericArrayResolver,
            new AssociativeArrayResolver,
            new DefaultValueResolver,
        ));
    }
 
    /**
     * @return ParameterResolver By default it&#039;s a ResolverChain
     */
    public function getParameterResolver()</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-20">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\php-di\invoker\src\Invoker.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-20" class="code-block linenums:63">        $callableReflection = CallableReflection::create($callable);
 
        $args = $this-&gt;parameterResolver-&gt;getParameters($callableReflection, $parameters, array());
 
        // Sort by array key because call_user_func_array ignores numeric keys
        ksort($args);
 
        // Check all parameters are resolved
        $diff = array_diff_key($callableReflection-&gt;getParameters(), $args);
        if (! empty($diff)) {
            /** @var \ReflectionParameter $parameter */
            $parameter = reset($diff);
            throw new NotEnoughParametersException(sprintf(
                &#039;Unable to invoke the callable because no value was given for parameter %d ($%s)&#039;,
                $parameter-&gt;getPosition() + 1,
                $parameter-&gt;name
            ));
        }
 
        return call_user_func_array($callable, $args);
    }
 
    /**
     * Create the default parameter resolver.
     *
     * @return ParameterResolver
     */
    private function createParameterResolver()
    {
        return new ResolverChain(array(
            new NumericArrayResolver,
            new AssociativeArrayResolver,
            new DefaultValueResolver,
        ));
    }
 
    /**
     * @return ParameterResolver By default it&#039;s a ResolverChain
     */
    public function getParameterResolver()</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-21">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\lefuturiste\slim-bridge\src\ControllerInvoker.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-21" class="code-block linenums:28">     * @param array                  $routeArguments The route&#039;s placeholder arguments
     *
     * @return ResponseInterface|string The response from the callable.
     */
    public function __invoke(
        callable $callable,
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $routeArguments
    ) {
        // Inject the request and response by parameter name
        $parameters = [
            &#039;request&#039;  =&gt; $request,
            &#039;response&#039; =&gt; $response,
        ];
 
        // Inject the route arguments by name
        $parameters += $routeArguments;
 
        return $this-&gt;invoker-&gt;call($callable, $parameters);
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-22">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-22" class="code-block linenums:337">    /**
     * Dispatch route callable against current Request and Response objects
     *
     * This method invokes the route object&#039;s callable. If middleware is
     * registered for the route, each callable middleware is invoked in
     * the order specified.
     *
     * @param ServerRequestInterface $request  The current Request object
     * @param ResponseInterface      $response The current Response object
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception  if the route callable throws an exception
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $this-&gt;callable = $this-&gt;resolveCallable($this-&gt;callable);
 
        /** @var InvocationStrategyInterface $handler */
        $handler = isset($this-&gt;container) ? $this-&gt;container-&gt;get(&#039;foundHandler&#039;) : new RequestResponse();
 
        $newResponse = $handler($this-&gt;callable, $request, $response, $this-&gt;arguments);
 
        if ($newResponse instanceof ResponseInterface) {
            // if route callback returns a ResponseInterface, then use it
            $response = $newResponse;
        } elseif (is_string($newResponse)) {
            // if route callback returns a string, then append it to the response
            if ($response-&gt;getBody()-&gt;isWritable()) {
                $response-&gt;getBody()-&gt;write($newResponse);
            }
        }
 
        return $response;
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-23">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-23" class="code-block linenums:98">        $this-&gt;tip = $kernel;
    }
 
    /**
     * Call middleware stack
     *
     * @param  ServerRequestInterface $request A request object
     * @param  ResponseInterface      $response A response object
     *
     * @return ResponseInterface
     */
    public function callMiddlewareStack(ServerRequestInterface $request, ResponseInterface $response)
    {
        if (is_null($this-&gt;tip)) {
            $this-&gt;seedMiddlewareStack();
        }
        /** @var callable $start */
        $start = $this-&gt;tip;
        $this-&gt;middlewareLock = true;
        $response = $start($request, $response);
        $this-&gt;middlewareLock = false;
        return $response;
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-24">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\Route.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-24" class="code-block linenums:315"> 
    /**
     * Run route
     *
     * This method traverses the middleware stack, including the route&#039;s callable
     * and captures the resultant HTTP response object. It then sends the response
     * back to the Application.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     *
     * @return ResponseInterface
     */
    public function run(ServerRequestInterface $request, ResponseInterface $response)
    {
        // Finalise route now that we are about to run it
        $this-&gt;finalize();
 
        // Traverse middleware stack and fetch updated response
        return $this-&gt;callMiddlewareStack($request, $response);
    }
 
    /**
     * Dispatch route callable against current Request and Response objects
     *
     * This method invokes the route object&#039;s callable. If middleware is
     * registered for the route, each callable middleware is invoked in
     * the order specified.
     *
     * @param ServerRequestInterface $request  The current Request object
     * @param ResponseInterface      $response The current Response object
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception  if the route callable throws an exception
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $this-&gt;callable = $this-&gt;resolveCallable($this-&gt;callable);
 
        /** @var InvocationStrategyInterface $handler */
        $handler = isset($this-&gt;container) ? $this-&gt;container-&gt;get(&#039;foundHandler&#039;) : new RequestResponse();</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-25">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-25" class="code-block linenums:497">     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        // Get the route info
        $routeInfo = $request-&gt;getAttribute(&#039;routeInfo&#039;);
 
        /** @var \Slim\Interfaces\RouterInterface $router */
        $router = $this-&gt;container-&gt;get(&#039;router&#039;);
 
        // If router hasn&#039;t been dispatched or the URI changed then dispatch
        if (null === $routeInfo || ($routeInfo[&#039;request&#039;] !== [$request-&gt;getMethod(), (string) $request-&gt;getUri()])) {
            $request = $this-&gt;dispatchRouterAndPrepareRoute($request, $router);
            $routeInfo = $request-&gt;getAttribute(&#039;routeInfo&#039;);
        }
 
        if ($routeInfo[0] === Dispatcher::FOUND) {
            $route = $router-&gt;lookupRoute($routeInfo[1]);
            return $route-&gt;run($request, $response);
        } elseif ($routeInfo[0] === Dispatcher::METHOD_NOT_ALLOWED) {
            if (!$this-&gt;container-&gt;has(&#039;notAllowedHandler&#039;)) {
                throw new MethodNotAllowedException($request, $response, $routeInfo[1]);
            }
            /** @var callable $notAllowedHandler */
            $notAllowedHandler = $this-&gt;container-&gt;get(&#039;notAllowedHandler&#039;);
            return $notAllowedHandler($request, $response, $routeInfo[1]);
        }
 
        if (!$this-&gt;container-&gt;has(&#039;notFoundHandler&#039;)) {
            throw new NotFoundException($request, $response);
        }
        /** @var callable $notFoundHandler */
        $notFoundHandler = $this-&gt;container-&gt;get(&#039;notFoundHandler&#039;);
        return $notFoundHandler($request, $response);
    }
 
    /**
     * Perform a sub-request from within an application route
     *</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-26">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\MiddlewareAwareTrait.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-26" class="code-block linenums:98">        $this-&gt;tip = $kernel;
    }
 
    /**
     * Call middleware stack
     *
     * @param  ServerRequestInterface $request A request object
     * @param  ResponseInterface      $response A response object
     *
     * @return ResponseInterface
     */
    public function callMiddlewareStack(ServerRequestInterface $request, ResponseInterface $response)
    {
        if (is_null($this-&gt;tip)) {
            $this-&gt;seedMiddlewareStack();
        }
        /** @var callable $start */
        $start = $this-&gt;tip;
        $this-&gt;middlewareLock = true;
        $response = $start($request, $response);
        $this-&gt;middlewareLock = false;
        return $response;
    }
}
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-27">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-27" class="code-block linenums:388">     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function process(ServerRequestInterface $request, ResponseInterface $response)
    {
        // Ensure basePath is set
        $router = $this-&gt;container-&gt;get(&#039;router&#039;);
        if (is_callable([$request-&gt;getUri(), &#039;getBasePath&#039;]) &amp;&amp; is_callable([$router, &#039;setBasePath&#039;])) {
            $router-&gt;setBasePath($request-&gt;getUri()-&gt;getBasePath());
        }
 
        // Dispatch the Router first if the setting for this is on
        if ($this-&gt;container-&gt;get(&#039;settings&#039;)[&#039;determineRouteBeforeAppMiddleware&#039;] === true) {
            // Dispatch router (note: you won&#039;t be able to alter routes after this)
            $request = $this-&gt;dispatchRouterAndPrepareRoute($request, $router);
        }
 
        // Traverse middleware stack
        try {
            $response = $this-&gt;callMiddlewareStack($request, $response);
        } catch (Exception $e) {
            $response = $this-&gt;handleException($e, $request, $response);
        } catch (Throwable $e) {
            $response = $this-&gt;handlePhpError($e, $request, $response);
        }
 
        return $response;
    }
 
    /**
     * Send the response to the client
     *
     * @param ResponseInterface $response
     */
    public function respond(ResponseInterface $response)
    {
        // Send response
        if (!headers_sent()) {
            // Headers
            foreach ($response-&gt;getHeaders() as $name =&gt; $values) {</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-28">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\vendor\slim\slim\Slim\App.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-28" class="code-block linenums:296">    /**
     * Run application
     *
     * This method traverses the application middleware stack and then sends the
     * resultant Response object to the HTTP client.
     *
     * @param bool|false $silent
     * @return ResponseInterface
     *
     * @throws Exception
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function run($silent = false)
    {
        $response = $this-&gt;container-&gt;get(&#039;response&#039;);
 
        try {
            ob_start();
            $response = $this-&gt;process($this-&gt;container-&gt;get(&#039;request&#039;), $response);
        } catch (InvalidMethodException $e) {
            $response = $this-&gt;processInvalidMethod($e-&gt;getRequest(), $response);
        } finally {
            $output = ob_get_clean();
        }
 
        if (!empty($output) &amp;&amp; $response-&gt;getBody()-&gt;isWritable()) {
            $outputBuffering = $this-&gt;container-&gt;get(&#039;settings&#039;)[&#039;outputBuffering&#039;];
            if ($outputBuffering === &#039;prepend&#039;) {
                // prepend output buffer content
                $body = new Http\Body(fopen(&#039;php://temp&#039;, &#039;r+&#039;));
                $body-&gt;write($output . $response-&gt;getBody());
                $response = $response-&gt;withBody($body);
            } elseif ($outputBuffering === &#039;append&#039;) {
                // append output buffer content
                $response-&gt;getBody()-&gt;write($output);
            }
        }
 
        $response = $this-&gt;finalize($response);</pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
            <div class="frame-code " id="frame-code-29">
        <div class="frame-file">
                                <strong><div class="delimiter">C:\Users\raul.quintero\projects\lefuturiste\slim3-template\public\index.php</div></strong>
                  </div>
                    <pre id="frame-code-linenums-29" class="code-block linenums:47">| Middleware requirements
|--------------------------------------------------------------------------
|
| Add Middleware to App
|
*/
include(&quot;../App/bootstrap/middlewares.php&quot;);
 
/*
|--------------------------------------------------------------------------
| Routing requirements
|--------------------------------------------------------------------------
|
| Include all routes files
|
*/
include(&quot;../App/routes/web.php&quot;);
//include(&quot;../App/routes/api.php&quot;);
 
$app-&gt;run();
 </pre>

                  
                
                <div class="frame-comments empty">
                  </div>

      </div>
  </div>
<div class="details">
  <h2 class="details-heading">Environment &amp; details:</h2>

  <div class="data-table-container" id="data-tables">
          <div class="data-table" id="sg-slim-application">
                    <label>Slim Application</label>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
                          <tr>
                <td>Application Class</td>
                <td>App\App</td>
              </tr>
                          <tr>
                <td>Script Name</td>
                <td>/index.php</td>
              </tr>
                          <tr>
                <td>Request URI</td>
                <td>&lt;none&gt;</td>
              </tr>
                        </table>
              </div>
          <div class="data-table" id="sg-slim-application-request">
                    <label>Slim Application (Request)</label>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
                          <tr>
                <td>Accept Charset</td>
                <td>&lt;none&gt;</td>
              </tr>
                          <tr>
                <td>Content Charset</td>
                <td>&lt;none&gt;</td>
              </tr>
                          <tr>
                <td>Path</td>
                <td>/</td>
              </tr>
                          <tr>
                <td>Query String</td>
                <td>hello=1</td>
              </tr>
                          <tr>
                <td>HTTP Method</td>
                <td>GET</td>
              </tr>
                          <tr>
                <td>Base URL</td>
                <td>http://localhost:8000/?hello=1</td>
              </tr>
                          <tr>
                <td>Scheme</td>
                <td>http</td>
              </tr>
                          <tr>
                <td>Port</td>
                <td>8000</td>
              </tr>
                          <tr>
                <td>Host</td>
                <td>localhost</td>
              </tr>
                        </table>
              </div>
          <div class="data-table" id="sg-get-data">
                    <label>GET Data</label>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
                          <tr>
                <td>hello</td>
                <td>1</td>
              </tr>
                        </table>
              </div>
          <div class="data-table" id="sg-post-data">
                    <label class="empty">POST Data</label>
            <span class="empty">empty</span>
              </div>
          <div class="data-table" id="sg-files">
                    <label class="empty">Files</label>
            <span class="empty">empty</span>
              </div>
          <div class="data-table" id="sg-cookies">
                    <label class="empty">Cookies</label>
            <span class="empty">empty</span>
              </div>
          <div class="data-table" id="sg-session">
                    <label class="empty">Session</label>
            <span class="empty">empty</span>
              </div>
          <div class="data-table" id="sg-serverrequest-data">
                    <label>Server/Request Data</label>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
                          <tr>
                <td>DOCUMENT_ROOT</td>
                <td>*****************************************************************</td>
              </tr>
                          <tr>
                <td>REMOTE_ADDR</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>REMOTE_PORT</td>
                <td>*****</td>
              </tr>
                          <tr>
                <td>SERVER_SOFTWARE</td>
                <td>****************************</td>
              </tr>
                          <tr>
                <td>SERVER_PROTOCOL</td>
                <td>********</td>
              </tr>
                          <tr>
                <td>SERVER_NAME</td>
                <td>*********</td>
              </tr>
                          <tr>
                <td>SERVER_PORT</td>
                <td>****</td>
              </tr>
                          <tr>
                <td>REQUEST_URI</td>
                <td>*********</td>
              </tr>
                          <tr>
                <td>REQUEST_METHOD</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>SCRIPT_NAME</td>
                <td>**********</td>
              </tr>
                          <tr>
                <td>SCRIPT_FILENAME</td>
                <td>***************************************************************************</td>
              </tr>
                          <tr>
                <td>PHP_SELF</td>
                <td>**********</td>
              </tr>
                          <tr>
                <td>QUERY_STRING</td>
                <td>*******</td>
              </tr>
                          <tr>
                <td>HTTP_HOST</td>
                <td>**************</td>
              </tr>
                          <tr>
                <td>HTTP_USER_AGENT</td>
                <td>******************************************************************************</td>
              </tr>
                          <tr>
                <td>HTTP_ACCEPT</td>
                <td>**************************************************************************</td>
              </tr>
                          <tr>
                <td>HTTP_ACCEPT_LANGUAGE</td>
                <td>**************</td>
              </tr>
                          <tr>
                <td>HTTP_ACCEPT_ENCODING</td>
                <td>*************</td>
              </tr>
                          <tr>
                <td>HTTP_CONNECTION</td>
                <td>**********</td>
              </tr>
                          <tr>
                <td>HTTP_UPGRADE_INSECURE_REQUESTS</td>
                <td>*</td>
              </tr>
                          <tr>
                <td>HTTP_PRAGMA</td>
                <td>********</td>
              </tr>
                          <tr>
                <td>HTTP_CACHE_CONTROL</td>
                <td>********</td>
              </tr>
                          <tr>
                <td>REQUEST_TIME_FLOAT</td>
                <td>***************</td>
              </tr>
                          <tr>
                <td>REQUEST_TIME</td>
                <td>**********</td>
              </tr>
                          <tr>
                <td>APP_NAME</td>
                <td>************</td>
              </tr>
                          <tr>
                <td>APP_ENV_NAME</td>
                <td>***************</td>
              </tr>
                          <tr>
                <td>APP_DEBUG</td>
                <td>*</td>
              </tr>
                          <tr>
                <td>TWIG_CACHE</td>
                <td>*****</td>
              </tr>
                          <tr>
                <td>LOG_DISCORD</td>
                <td>*</td>
              </tr>
                          <tr>
                <td>LOG_PATH</td>
                <td>******</td>
              </tr>
                          <tr>
                <td>LOG_LEVEL</td>
                <td>****</td>
              </tr>
                          <tr>
                <td>LOG_DISCORD_WH</td>
                <td>***************************************************************************************************************************</td>
              </tr>
                          <tr>
                <td>MYSQL_HOST</td>
                <td>***********</td>
              </tr>
                          <tr>
                <td>MYSQL_PORT</td>
                <td>****</td>
              </tr>
                          <tr>
                <td>MYSQL_DATABASE</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>MYSQL_USERNAME</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>MYSQL_PASSWORD</td>
                <td>***</td>
              </tr>
                        </table>
              </div>
          <div class="data-table" id="sg-environment-variables">
                    <label>Environment Variables</label>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
                          <tr>
                <td>APP_NAME</td>
                <td>************</td>
              </tr>
                          <tr>
                <td>APP_ENV_NAME</td>
                <td>***************</td>
              </tr>
                          <tr>
                <td>APP_DEBUG</td>
                <td>*</td>
              </tr>
                          <tr>
                <td>TWIG_CACHE</td>
                <td>*****</td>
              </tr>
                          <tr>
                <td>LOG_DISCORD</td>
                <td>*</td>
              </tr>
                          <tr>
                <td>LOG_PATH</td>
                <td>******</td>
              </tr>
                          <tr>
                <td>LOG_LEVEL</td>
                <td>****</td>
              </tr>
                          <tr>
                <td>LOG_DISCORD_WH</td>
                <td>***************************************************************************************************************************</td>
              </tr>
                          <tr>
                <td>MYSQL_HOST</td>
                <td>***********</td>
              </tr>
                          <tr>
                <td>MYSQL_PORT</td>
                <td>****</td>
              </tr>
                          <tr>
                <td>MYSQL_DATABASE</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>MYSQL_USERNAME</td>
                <td>***</td>
              </tr>
                          <tr>
                <td>MYSQL_PASSWORD</td>
                <td>***</td>
              </tr>
                        </table>
              </div>
      </div>

    <div class="data-table-container" id="handlers">
    <label>Registered Handlers</label>
          <div class="handler active">
        0. Whoops\Handler\PrettyPageHandler      </div>
      </div>

</div>
</div>
      </div>
    </div>


    <script>/*!
 * clipboard.js v1.5.3
 * https://zenorocha.github.io/clipboard.js
 *
 * Licensed MIT © Zeno Rocha
 */
!function(t){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var e;e="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,e.Clipboard=t()}}(function(){var t,e,n;return function t(e,n,r){function o(a,c){if(!n[a]){if(!e[a]){var s="function"==typeof require&&require;if(!c&&s)return s(a,!0);if(i)return i(a,!0);var u=new Error("Cannot find module '"+a+"'");throw u.code="MODULE_NOT_FOUND",u}var l=n[a]={exports:{}};e[a][0].call(l.exports,function(t){var n=e[a][1][t];return o(n?n:t)},l,l.exports,t,e,n,r)}return n[a].exports}for(var i="function"==typeof require&&require,a=0;a<r.length;a++)o(r[a]);return o}({1:[function(t,e,n){var r=t("matches-selector");e.exports=function(t,e,n){for(var o=n?t:t.parentNode;o&&o!==document;){if(r(o,e))return o;o=o.parentNode}}},{"matches-selector":2}],2:[function(t,e,n){function r(t,e){if(i)return i.call(t,e);for(var n=t.parentNode.querySelectorAll(e),r=0;r<n.length;++r)if(n[r]==t)return!0;return!1}var o=Element.prototype,i=o.matchesSelector||o.webkitMatchesSelector||o.mozMatchesSelector||o.msMatchesSelector||o.oMatchesSelector;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n,r){var i=o.apply(this,arguments);return t.addEventListener(n,i),{destroy:function(){t.removeEventListener(n,i)}}}function o(t,e,n,r){return function(n){var o=i(n.target,e,!0);o&&(Object.defineProperty(n,"target",{value:o}),r.call(t,n))}}var i=t("closest");e.exports=r},{closest:1}],4:[function(t,e,n){n.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},n.nodeList=function(t){var e=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===e||"[object HTMLCollection]"===e)&&"length"in t&&(0===t.length||n.node(t[0]))},n.string=function(t){return"string"==typeof t||t instanceof String},n.function=function(t){var e=Object.prototype.toString.call(t);return"[object Function]"===e}},{}],5:[function(t,e,n){function r(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!c.string(e))throw new TypeError("Second argument must be a String");if(!c.function(n))throw new TypeError("Third argument must be a Function");if(c.node(t))return o(t,e,n);if(c.nodeList(t))return i(t,e,n);if(c.string(t))return a(t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function o(t,e,n){return t.addEventListener(e,n),{destroy:function(){t.removeEventListener(e,n)}}}function i(t,e,n){return Array.prototype.forEach.call(t,function(t){t.addEventListener(e,n)}),{destroy:function(){Array.prototype.forEach.call(t,function(t){t.removeEventListener(e,n)})}}}function a(t,e,n){return s(document.body,t,e,n)}var c=t("./is"),s=t("delegate");e.exports=r},{"./is":4,delegate:3}],6:[function(t,e,n){function r(t){var e;if("INPUT"===t.nodeName||"TEXTAREA"===t.nodeName)t.select(),e=t.value;else{var n=window.getSelection(),r=document.createRange();r.selectNodeContents(t),n.removeAllRanges(),n.addRange(r),e=n.toString()}return e}e.exports=r},{}],7:[function(t,e,n){function r(){}r.prototype={on:function(t,e,n){var r=this.e||(this.e={});return(r[t]||(r[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){function r(){o.off(t,r),e.apply(n,arguments)}var o=this;return r._=e,this.on(t,r,n)},emit:function(t){var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),r=0,o=n.length;for(r;o>r;r++)n[r].fn.apply(n[r].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),r=n[t],o=[];if(r&&e)for(var i=0,a=r.length;a>i;i++)r[i].fn!==e&&r[i].fn._!==e&&o.push(r[i]);return o.length?n[t]=o:delete n[t],this}},e.exports=r},{}],8:[function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}n.__esModule=!0;var i=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),a=t("select"),c=r(a),s=function(){function t(e){o(this,t),this.resolveOptions(e),this.initSelection()}return t.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action=e.action,this.emitter=e.emitter,this.target=e.target,this.text=e.text,this.trigger=e.trigger,this.selectedText=""},t.prototype.initSelection=function t(){if(this.text&&this.target)throw new Error('Multiple attributes declared, use either "target" or "text"');if(this.text)this.selectFake();else{if(!this.target)throw new Error('Missing required attributes, use either "target" or "text"');this.selectTarget()}},t.prototype.selectFake=function t(){var e=this;this.removeFake(),this.fakeHandler=document.body.addEventListener("click",function(){return e.removeFake()}),this.fakeElem=document.createElement("textarea"),this.fakeElem.style.position="absolute",this.fakeElem.style.left="-9999px",this.fakeElem.style.top=(window.pageYOffset||document.documentElement.scrollTop)+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,document.body.appendChild(this.fakeElem),this.selectedText=c.default(this.fakeElem),this.copyText()},t.prototype.removeFake=function t(){this.fakeHandler&&(document.body.removeEventListener("click"),this.fakeHandler=null),this.fakeElem&&(document.body.removeChild(this.fakeElem),this.fakeElem=null)},t.prototype.selectTarget=function t(){this.selectedText=c.default(this.target),this.copyText()},t.prototype.copyText=function t(){var e=void 0;try{e=document.execCommand(this.action)}catch(n){e=!1}this.handleResult(e)},t.prototype.handleResult=function t(e){e?this.emitter.emit("success",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)}):this.emitter.emit("error",{action:this.action,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})},t.prototype.clearSelection=function t(){this.target&&this.target.blur(),window.getSelection().removeAllRanges()},t.prototype.destroy=function t(){this.removeFake()},i(t,[{key:"action",set:function t(){var e=arguments.length<=0||void 0===arguments[0]?"copy":arguments[0];if(this._action=e,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function t(){return this._action}},{key:"target",set:function t(e){if(void 0!==e){if(!e||"object"!=typeof e||1!==e.nodeType)throw new Error('Invalid "target" value, use a valid Element');this._target=e}},get:function t(){return this._target}}]),t}();n.default=s,e.exports=n.default},{select:6}],9:[function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function a(t,e){var n="data-clipboard-"+t;if(e.hasAttribute(n))return e.getAttribute(n)}n.__esModule=!0;var c=t("./clipboard-action"),s=r(c),u=t("tiny-emitter"),l=r(u),f=t("good-listener"),d=r(f),h=function(t){function e(n,r){o(this,e),t.call(this),this.resolveOptions(r),this.listenClick(n)}return i(e,t),e.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action="function"==typeof e.action?e.action:this.defaultAction,this.target="function"==typeof e.target?e.target:this.defaultTarget,this.text="function"==typeof e.text?e.text:this.defaultText},e.prototype.listenClick=function t(e){var n=this;this.listener=d.default(e,"click",function(t){return n.onClick(t)})},e.prototype.onClick=function t(e){this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new s.default({action:this.action(e.target),target:this.target(e.target),text:this.text(e.target),trigger:e.target,emitter:this})},e.prototype.defaultAction=function t(e){return a("action",e)},e.prototype.defaultTarget=function t(e){var n=a("target",e);return n?document.querySelector(n):void 0},e.prototype.defaultText=function t(e){return a("text",e)},e.prototype.destroy=function t(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)},e}(l.default);n.default=h,e.exports=n.default},{"./clipboard-action":8,"good-listener":5,"tiny-emitter":7}]},{},[9])(9)});</script>
    <script>Zepto(function($) {
  var $leftPanel      = $('.left-panel');
  var $frameContainer = $('.frames-container');
  var $appFramesTab   = $('#application-frames-tab');
  var $allFramesTab   = $('#all-frames-tab');
  var $container      = $('.details-container');
  var $activeLine     = $frameContainer.find('.frame.active');
  var $activeFrame    = $container.find('.frame-code.active');
  var $ajaxEditors    = $('.editor-link[data-ajax]');
  var $header         = $('header');

  $header.on('mouseenter', function () {
    if ($header.find('.exception').height() >= 145) {
      $header.addClass('header-expand');
    }
  });
  $header.on('mouseleave', function () {
    $header.removeClass('header-expand');
  });

  /*
   * add prettyprint classes to our current active codeblock
   * run prettyPrint() to highlight the active code
   * scroll to the line when prettyprint is done
   * highlight the current line
   */
  var renderCurrentCodeblock = function(id) {

    // remove previous codeblocks so we only render the active one
    $('.code-block').removeClass('prettyprint');

    // pass the id in when we can for speed
    if (typeof(id) === 'undefined' || typeof(id) === 'object') {
      var id = /frame\-line\-([\d]*)/.exec($activeLine.attr('id'))[1];
    }

    $('#frame-code-linenums-' + id).addClass('prettyprint');
    $('#frame-code-args-' + id).addClass('prettyprint');

    prettyPrint(highlightCurrentLine);

  }

  /*
   * Highlight the active and neighboring lines for the current frame
   * Adjust the offset to make sure that line is veritcally centered
   */

  var highlightCurrentLine = function() {
    var activeLineNumber = +($activeLine.find('.frame-line').text());
    var $lines           = $activeFrame.find('.linenums li');
    var firstLine        = +($lines.first().val());

    // We show more code than needed, purely for proper syntax highlighting
    // Let’s hide a big chunk of that code and then scroll the remaining block
    $activeFrame.find('.code-block').first().css({
      maxHeight: 345,
      overflow: 'hidden',
    });

    var $offset = $($lines[activeLineNumber - firstLine - 10]);
    if ($offset.length > 0) {
      $offset[0].scrollIntoView();
    }

    $($lines[activeLineNumber - firstLine - 1]).addClass('current');
    $($lines[activeLineNumber - firstLine]).addClass('current active');
    $($lines[activeLineNumber - firstLine + 1]).addClass('current');

    $container.scrollTop(0);

  }

  /*
   * click handler for loading codeblocks
   */

  $frameContainer.on('click', '.frame', function() {

    var $this  = $(this);
    var id     = /frame\-line\-([\d]*)/.exec($this.attr('id'))[1];
    var $codeFrame = $('#frame-code-' + id);

    if ($codeFrame) {

      $activeLine.removeClass('active');
      $activeFrame.removeClass('active');

      $this.addClass('active');
      $codeFrame.addClass('active');

      $activeLine  = $this;
      $activeFrame = $codeFrame;

      renderCurrentCodeblock(id);

    }

  });

  var clipboard = new Clipboard('.clipboard');
  var showTooltip = function(elem, msg) {
    elem.setAttribute('class', 'clipboard tooltipped tooltipped-s');
    elem.setAttribute('aria-label', msg);
  };

  clipboard.on('success', function(e) {
      e.clearSelection();

      showTooltip(e.trigger, 'Copied!');
  });

  clipboard.on('error', function(e) {
      showTooltip(e.trigger, fallbackMessage(e.action));
  });

  var btn = document.querySelector('.clipboard');

  btn.addEventListener('mouseleave', function(e) {
    e.currentTarget.setAttribute('class', 'clipboard');
    e.currentTarget.removeAttribute('aria-label');
  });

  function fallbackMessage(action) {
    var actionMsg = '';
    var actionKey = (action === 'cut' ? 'X' : 'C');

    if (/Mac/i.test(navigator.userAgent)) {
        actionMsg = 'Press ⌘-' + actionKey + ' to ' + action;
    } else {
        actionMsg = 'Press Ctrl-' + actionKey + ' to ' + action;
    }

    return actionMsg;
  }

  function scrollIntoView($node, $parent) {
    var nodeOffset = $node.offset();
    var nodeTop = nodeOffset.top;
    var nodeBottom = nodeTop + nodeOffset.height;
    var parentScrollTop = $parent.scrollTop();
    var parentHeight = $parent.height();

    if (nodeTop < 0) {
      $parent.scrollTop(parentScrollTop + nodeTop);
    } else if (nodeBottom > parentHeight) {
      $parent.scrollTop(parentScrollTop + nodeBottom - parentHeight);
    }
  }

  $(document).on('keydown', function(e) {
    var applicationFrames = $frameContainer.hasClass('frames-container-application'),
        frameClass = applicationFrames ? '.frame.frame-application' : '.frame';

	  if(e.ctrlKey || e.which === 74  || e.which === 75) {
		  // CTRL+Arrow-UP/k and Arrow-Down/j support:
		  // 1) select the next/prev element
		  // 2) make sure the newly selected element is within the view-scope
		  // 3) focus the (right) container, so arrow-up/down (without ctrl) scroll the details
		  if (e.which === 38 /* arrow up */ || e.which === 75 /* k */) {
			  $activeLine.prev(frameClass).click();
			  scrollIntoView($activeLine, $leftPanel);
			  $container.focus();
			  e.preventDefault();
		  } else if (e.which === 40 /* arrow down */ || e.which === 74 /* j */) {
			  $activeLine.next(frameClass).click();
			  scrollIntoView($activeLine, $leftPanel);
			  $container.focus();
			  e.preventDefault();
		  }
	  } else if (e.which == 78 /* n */) {
      if ($appFramesTab.length) {
        setActiveFramesTab($('.frames-tab:not(.frames-tab-active)'));
      }
    }
  });

  // Render late enough for highlightCurrentLine to be ready
  renderCurrentCodeblock();

  // Avoid to quit the page with some protocol (e.g. IntelliJ Platform REST API)
  $ajaxEditors.on('click', function(e){
    e.preventDefault();
    $.get(this.href);
  });

  // Symfony VarDumper: Close the by default expanded objects
  $('.sf-dump-expanded')
    .removeClass('sf-dump-expanded')
    .addClass('sf-dump-compact');
  $('.sf-dump-toggle span').html('&#9654;');

  // Make the given frames-tab active
  function setActiveFramesTab($tab) {
    $tab.addClass('frames-tab-active');

    if ($tab.attr('id') == 'application-frames-tab') {
      $frameContainer.addClass('frames-container-application');
      $allFramesTab.removeClass('frames-tab-active');
    } else {
      $frameContainer.removeClass('frames-container-application');
      $appFramesTab.removeClass('frames-tab-active');
    }
  }

  $('a.frames-tab').on('click', function(e) {
    e.preventDefault();
    setActiveFramesTab($(this));
  });
});
</script>
  </body>
</html>
