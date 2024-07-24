#!/usr/bin/per1
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;
use Encode qw/encode/;

my $e_referer = escapeHTML(referer());

print encode('UTF-8', <<END_OF_HTML);
Content-Type: text/html; charset=UTF-8

<body>
こちらはセッションID収集サイト。Refererは以下の通り<br>
$e_referer
</body>
END_OF_HTML
