<!DOCTYPE html>
<html>
    <head>
        <title>Problem 04 - HTML Tags Counter</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        Enter HTML Tags:<br />
        <form action="" method="post">
            <input type="text" name="tags" />
            <input type="submit" /><br />
            <div id="result">
                <?php
                session_start();
                $allTags = array(
                    'a', 'abbr', 'address', 'area', 'article', 'aside', 'audio', 'b', 'base', 'bdi', 'bdo', 'blockquote', 'body',
                    'br', 'button', 'canvas', 'caption', 'cite', 'code', 'col', 'colgroup', 'command', 'datalist', 'dd', 'del',
                    'details', 'dfn', 'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'footer', 'form', 'h1',
                    'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'iframe', 'img', 'input', 'ins', 'kbd',
                    'keygen', 'label', 'legend', 'li', 'link', 'map', 'mark', 'menu', 'meta', 'meter', 'nav', 'noscript', 'object',
                    'ol', 'optgroup', 'option', 'output', 'p', 'param', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script',
                    'section', 'select', 'small', 'source', 'span', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tobdy', 'td',
                    'textarea', 'tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'u', 'ul', 'var', 'video', 'wbr'
                    
                );
                $counter = 1;
                if(isset($_POST['tags'])):
                    if($_POST['tags'] == ''):
                        if(isset($_SESSION['counter'])):
                            unset($_SESSION['counter']);
                        endif;
                    endif;
                    if(in_array($_POST['tags'], $allTags)):
                        echo 'Valid HTML tag! <br />';
                        if(isset($_SESSION['counter'])):
                            $_SESSION['counter']++;
                        else:
                            $_SESSION['counter'] = 1;
                        endif;
                        echo 'Score: ' . $_SESSION['counter'];
                    else:
                        echo 'Invalid HTML tag! <br />';
                        echo 'Final score: ' . $_SESSION['counter'];
                        session_destroy();
                    endif;
                endif;
                ?>
            </div>
        </form>
    </body>
</html>