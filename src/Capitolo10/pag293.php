<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$escaper = new Zend\Escaper\Escaper('utf-8');

echo $escaper->escapeHtml('<script>alert("zf2")</script>');
// &lt;script&gt;alert(&quot;zf2&quot;)&lt;/script&gt;

echo $escaper->escapeHtmlAttr('<script>alert("zf2")</script>');
// &lt;script&gt;alert&#x28;&quot;zf2&quot;&#x29;&lt;&#x2F;script&gt;

echo $escaper->escapeJs('<script>alert("zf2")</script>');
// \x3Cscript\x3Ealert\x28\x22zf2\x22\x29\x3C\x2Fscript\x3E

echo $escaper->escapeCss('<script>alert("zf2")</script>');
// \3C script\3E alert\28 \22 zf2\22 \29 \3C \2F script\3E

echo $escaper->escapeUrl('<script>alert("zf2")</script>');
// %3Cscript%3Ealert%28%22zf2%22%29%3C%2Fscript%3E
